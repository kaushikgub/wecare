<!DOCTYPE html>
<html>
<head>
    <title>View Doctor</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/moderator-home.css')}}">
</head>
<body>
<div class="home">
    <h1 class="h1">View Doctor</h1>
</div>
        <table>
                <tr class="rr1">
                <td class="r" > ID </td>
                <td class="r" > Name </td>
                <td class="r" > Email </td>
                <td class="r" > Age </td>
                <td class="r" > Gender </td>
                <td class="r" > Cell Namber </td>
                <td class="r" > Department </td>
                <td class="r" > Info </td>
                <td class="r" > Password </td>
                <td class="r" > Action </td>
                </tr>
            @foreach($doctors as $doctors)
        <tr class="rr2">
            <td class="r1"> {{$doctors->id}} </td>
            <td class="r1"> {{$doctors->doctor_name}} </td>
            <td class="r1"> {{$doctors->doctor_email}} </td>
            <td class="r1"> {{$doctors->doctor_birthday}} </td>
            <td class="r1"> {{$doctors->doctor_gender}} </td>
            <td class="r1"> {{$doctors->doctor_cell}} </td>
            <td class="r1"> {{$doctors->department_department_id}} </td>
            <td class="r1"> {{$doctors->doctor_info}} </td>
            <td class="r1"> {{$doctors->doctor_password}} </td>
            <td class="r1">
                <a href="{{ URL::to('/editDoctor/'.$doctors->id) }}">edit</a>
                <a href="{{URL::to('/deleteDoctor/'.$doctors->id)}}">delete</a>
            </td>

        </tr>
                @endforeach

        </table>
    </body>


</html>