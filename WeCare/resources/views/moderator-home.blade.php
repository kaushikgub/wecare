<html>
<head>
    <title>Moderator Home</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/moderator-home.css')}}">
</head>
<body>
<div class="home">
    <h1 class="h1">Moderator Home</h1>
</div>

<div class="profile">
    @foreach($moderator as $moderator)

        <div class="link">
            <a class="link1" href="{{ URL::to('addSlot') }}" title="">Add Slot</a><br><br>
            <a class="link1" href="{{ URL::to('viewPatient') }}" title="">View Patient</a><br><br>
            <a class="link2" href="{{ URL::to('moderator') }}" title="">Log Out</a><br><br>
        </div>
        <br><br>
    <div  class="profile">
        <div class="profilea">
            <label class="levell">Name:: {{$moderator->moderator_name}}</label>
            <br><br>
            <label class="level1">Id:: {{$moderator->id}}</label>
            <br><br>
            <label class="level1">Email:: {{$moderator->moderator_email}}</label>
            <br><br>
            <label class="level1">Department:: {{$moderator->department_department_name}}</label>
        </div>
    </div>

@endforeach

</div>
<div class="file">

</div>
<div class="logout">

</div>

<div class="footer">

</div>
</body>
</html>