<h1>Hi, {{ $name }}</h1>

@if (isset($code))
    
<p>Sending Password Reset Code From SIU.</p>
<h1>Your Code Is, {{ $code }}</h1>
<p>This code will be invalid after 5 minutes.</p>

@else
<h1>Your Password Has Been Reseted.</h1>
<p>You will be able to login with the new password now</p>
@endif

