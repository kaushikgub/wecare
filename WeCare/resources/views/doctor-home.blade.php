<html>
<head>
    <title>Doctor Home</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/doctor-home.css')}}">
</head>
<body>
<div class="home">
    <h1 class="h1">Doctor Home</h1>
</div>

<div >
    @foreach($doctor as $doctor)

        <div class="link">
            <a class="link1" href="{{ URL::to('viewPatient/'.$doctor->id) }}" title="">View Patient</a><br><br><br>
            <a class="link2" href="{{ URL::to('/doctor')}}" title="">Logout</a>
        </div>
        <div class="profile">
        <div class="profilea">
            <br><br>
            <label class="level1">Name:: {{$doctor->doctor_name}}</label>
            <br><br>
            <label class="level1">Id:: {{$doctor->id}}</label>
            <br><br>
            <label class="level1">Email:: {{$doctor->doctor_email}}</label>
            <br><br>
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