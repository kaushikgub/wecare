<!DOCTYPE html>
<html>
<head>
    <title>View Patient</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/moderator-home.css')}}">
</head>
<body>

<div class="kkkkk">
<div class="home">
    <h1 class="h1">Patient View (Moderator)</h1>
</div>
    <table class="tablee">
        <tr class="rr1">

            <td class="r" > Name </td>
            <td class="r" > Phone </td>
            <td class="r" > Age </td>
            <td class="r" > Gender </td>
            <td class="r" > Date </td>
            <td class="r" > Slot </td>
            <td class="r"> Department </td>
            <td class="r"> Action </td>
        </tr>
        @foreach($appointment as $appointment)
            <tr class="rr2">
                <td class="r1"> {{$appointment->patient_name}} </td>
                <td class="r1"> {{$appointment->patient_phone}} </td>
                <td class="r1"> {{$appointment->patient_age}} </td>
                <td class="r1"> {{$appointment->patient_gender}} </td>
                <td class="r1"> {{$appointment->stot_date}} </td>
                <td class="r1"> {{$appointment->stot_time}} </td>
                <td class="r1"> {{$appointment->doctor_doctor_id}} </td>
                <td class="r1"><a href="{{URL::to('/deletePatient/'.$appointment->id)}}">delete</a></td>
                </td>

            </tr>
        @endforeach

    </table>

</div>
</body>


</html>