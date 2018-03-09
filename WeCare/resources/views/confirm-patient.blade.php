<!DOCTYPE html>
<html>
<head>
    <title>View confirm</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/moderator-home.css')}}">
</head>
<body>
<div class="kkkkk">
<div class="home">
    <h1 class="h1">Your Detais</h1>
</div>
<table class="tablee">
    <tr class="rr1">
        <tr>
        <tr>

        <td class="r" > Name </td>
        <td class="r" > Phone </td>
        <td class="r" > Age </td>
        <td class="r" > Gender </td>
        <td class="r" > Date </td>
        <td class="r" > Slot </td>
        <td class="r"> Department </td>
    </tr>
    @foreach($patient as $patient)
        <tr class="rr2">
            <td class="r1"> {{$patient->patient_name}} </td>
            <td class="r1"> {{$patient->patient_phone}} </td>
            <td class="r1"> {{$patient->patient_age}} </td>
            <td class="r1"> {{$patient->patient_gender}} </td>
            <td class="r1"> {{$patient->stot_date}} </td>
            <td class="r1"> {{$patient->stot_time}} </td>
            <td class="r1"> {{$patient->doctor_doctor_id}} </td>

        </tr>
    @endforeach

</table>

</div>
</body>


</html>