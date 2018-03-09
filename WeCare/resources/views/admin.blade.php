<head>
    <title>Admin Home</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/moderator-home.css')}}">
</head>
<body>
<center>
    <div class="home">
        <h1 class="h1">Admin Home</h1>
    </div>
    <div class="add">
        <a class="link1" href="{{ URL::to('addDoctor') }}" title="">Add Doctor</a>
        <a class="link1" href="{{ URL::to('addModerator') }}" title="">Add Moderator</a>
    </div>
<br>
<br>
<br>

<div class="view">
    <a class="link1" href="{{ URL::to('viewDoctor') }}" title="">View Doctor</a>
    <a class="link1" href="{{ URL::to('viewModerator') }}" title="">View Moderator</a>
</div>
<br>
<br>
<br>
    <div class="add">
        <a class="link2" href="{{ URL::to('admin') }}" title="">Log Out</a>
    </div>

</center>
</body>