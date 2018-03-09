<!DOCTYPE html>
<html>
<head>
    <title>Add Moderator</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/moderator-home.css')}}">
</head>
<body>
<div class="home">
    <h1 class="h1">Add Moderator</h1>
</div>

{!! Form::open(array('url'=>'postModerator')) !!}
<div class="doc">
    <level class="name">Moderator Name:</level>
    <input  class="input" type="text" name="moderatorName" value="">
    <br><br>
    <level class="name">Moderator Email:</level>
    <input class="input"  type="text" name="moderatorEmail" value="">
    <br><br>
    <level class="name">Moderator Gender:</level>
    <input  class="input" type="text" name="moderatorGender" value="">
    <br><br>
    <level class="name">Moderator Birthday:</level>
    <input  class="input" type="text" name="moderatorBirthday" value="">
    <br><br>
    <level class="name">Moderator Department:</level>
    <select  class="input" name="moderatorDepartment">
        @foreach($department as $department)
            <option value="{{$department->department_name}}">{{$department->department_name}}</option>
            @endforeach
    </select>
    <br><br>
    <level class="name">Moderator Phone:</level>
    <input  class="input" type="text" name="moderatorMobile" value="">
    <br><br>
    <level class="name">Moderator Info:</level>
    <input  class="input" type="text" name="moderatorInfo" value="">
    <br><br>
    <level class="name">Moderator Password:</level>
    <input  class="input" type="password" name="moderatorPassword" value="">


    <br><br>
    <input class="submit" type="submit" value="Submit">

</div>
    {!! Form::close() !!}
</body>
</html>