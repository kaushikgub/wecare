<!DOCTYPE html>
<html>
<head>
    <title>Add Doctor</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/moderator-home.css')}}">
</head>
<body>
<div class="home">
    <h1 class="h1">Add Doctor</h1>
</div>

{!! Form::open(array('url'=>'postDoctor')) !!}

<div class="doc">

        <level class="name">Doctor Name:</level>
        <input class="input" type="text" name="doctorName" value="">
        <br><br>
        <level class="name">Doctor Email:</level>
        <input  class="input" type="text" name="doctorEmail" value="">
        <br><br>
        <level class="name">Doctor Gender:</level>
        <input  class="input" type="text" name="doctorGender" value="">
        <br><br>
        <level class="name">Doctor Birthday:</level>
        <input  class="input" type="text" name="doctorBirthday" value="">
        <br><br>
        <level class="name">Doctor Department:</level>
        <select  class="input" name="doctorDepartment">
            @foreach($department as $department)
                <option value="{{$department->id}}">{{$department->department_name}}</option>
            @endforeach
        </select>
        <br><br>
        <level class="name">Moderator Name:</level>
        <select  class="input" name="modetaroeId">
            @foreach($moderator as $moderator)
                <option value="{{$moderator->id}}">{{$moderator->moderator_name}} ({{$moderator->department_department_name}})</option>
                @endforeach
        </select>
        <br><br>
        <level class="name">Doctor Mobile:</level>
        <input  class="input" type="text" name="doctorMobile" value="">
        <br><br>
        <level class="name">Doctor Info:</level>
        <input  class="input" type="text" name="doctorInfo" value="">
        <br><br>
        <level class="name">Doctor Password:</level>
        <input  class="input" type="password" name="doctorPassword" value="">


        <br><br>
        <input class="submit" type="submit" value="Submit">


</div>


{!! Form::close() !!}

</body>
</html>