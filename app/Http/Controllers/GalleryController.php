<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\GalleryFolder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Gallery::select(
            'galleries.*'
        )
            ->paginate(4);
        return view('dashboard.showtables.all_gallery')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.insertforms.addGallery');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        //         image for gallery


        if($request->hasFile('image')){
            //file name with extension
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            //get just file name
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //GET JUST EXT
            $extension = $request->file('image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;

            //Upload Image
            $path = $request->file('image')->storeAs('public/uploaded/gallery/',$fileNameToStore);

        }else{
            $fileNameToStore = "no_image.jpg";
        }


//         image for galleryFolder

        $input=$request->all();
        $images=array();
        if($files=$request->file('multiple_image')){
            foreach($files as $file){
                $name=time().'_'.$file->getClientOriginalName();
                $file->storeAs('public/uploaded/galleryFolder/',$name);
                $images[]=$name;
            }
        }
        /*Insert your data*/



        $data = new Gallery();
        $data->title = $request->title;
        $data->cover_image = $fileNameToStore;
        $data->save();

        $imagesAvailable=count($images);
        for ($i=0;$i<$imagesAvailable;$i++){

            GalleryFolder::insert( [
                'image'=>  $images[$i],
                'g_id' => $data->id,
            ]);

        }





        $notification = array(
            'galleryCreateSuccess' => 'Successfully Added',
        );
        return back()->with($notification);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        $data =Gallery::find($id);
//        return view('dashboard.updateforms.a',compact('data'));
    }

    public function show_all_photo($id){

        $decode_id = base64_decode($id);

    $data = GalleryFolder::select('*')->where('g_id',$decode_id)->get();
        return view('dashboard.showtables.show_all_photo',compact('data'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
