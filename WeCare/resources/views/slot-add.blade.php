<!DOCTYPE html>
<html>
<head>
    <title>Add Slot</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/moderator-home.css')}}">
</head>
<body>
<div class="home">
    <h1 class="h1">Add Slot</h1>
</div>
{!! Form::open(array('url'=>'postSlot')) !!}

<div class="doc">
    <label class="name">Doctor Name:</label>
    <select  class="input" name="doctorId">
        @foreach($doctor as $doctor)
            <option value="{{$doctor->id}}">{{$doctor->doctor_name}} ({{$doctor->id}})</option>
        @endforeach
    </select>
    <br><br>
    <label class="name">Date:</label>
    <input  class="input" type="text" name="date" value="">
    <br><br>
   <label class="name">Time:</label>
    <input  class="input" type="text" name="time" value="">
    <br><br>

    <br><br>
    <input class="submit" type="submit" value="Submit">

</div>
    {!! Form::close() !!}
</body>
</html>