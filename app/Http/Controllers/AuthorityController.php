<?php

namespace App\Http\Controllers;

use App\Authority;
use Illuminate\Http\Request;

class AuthorityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Authority::select(
            'authorities.*'
        )
            ->paginate(2);
        return view('dashboard.showtables.all_authority')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.insertforms.addAuthority');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'  => 'required',
            'phone'  => 'required|regex:/(01)[0-9]{9}/',
            'designation'  => 'required',
            'type'  => 'required|in:Chairman,Member,Secretary,Proctor,Assistant Proctor',
            'nominated_by'  => 'required|in:Board of trustees,Syndicate,Secretary,Members',
            'email'  => 'required|email',
            'facebook'  => 'required',

        ]);


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
            $path = $request->file('image')->storeAs('public/uploaded/authority/',$fileNameToStore);

        }else{
            $fileNameToStore = "no_image.jpg";
        }


        $count = Authority::count();

        $data  = new Authority();
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->type = $request->type;
        $data->designation = $request->designation;
        $data->facebook = $request->facebook;
        $data->linkedin = $request->linkedin;
        $data->image = $fileNameToStore;
        $data->position = $count+1;
        $data->nominated_by = $request->nominated_by;
        $data->status = '0';

        $data->save();
        $notification = array(
            'addAuthority' => 'Successfully Added Authority!',
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
        $decode = base64_decode($id);
        $data = Authority::find($decode);
        return view('dashboard.updateforms.update_authority',compact('data'));
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

        $data  = Authority::find($id);
        $oldfile=$request->get('old_image');

        if($request->hasFile('new_image')){
            $url="storage/uploaded/authority/";
            $image_path=$url.$oldfile;

            if(file_exists( $image_path)){
                unlink($image_path);
            }

            //file name with extension
            $fileNameWithExt = $request->file('new_image')->getClientOriginalName();
            //get just file name
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //GET JUST EXT
            $extension = $request->file('new_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;

            //Upload Image
            $path = $request->file('new_image')->storeAs('public/uploaded/authority/',$fileNameToStore);

        }else{
            $fileNameToStore =$oldfile;
        }


        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->type = $request->type;
        $data->designation = $request->designation;
        $data->facebook = $request->facebook;
        $data->linkedin = $request->linkedin;
        $data->image = $fileNameToStore;
        $data->nominated_by = $request->nominated_by;
        $data->status = '0';

        $data->save();
        $notification = array(
            'updateAuthority' => 'Successfully Added Authority!',
        );
        return back()->with($notification);
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
