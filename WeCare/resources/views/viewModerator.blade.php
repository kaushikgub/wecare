<!DOCTYPE html>
<html>
<head>
    <title>View Moderator</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/moderator-home.css')}}">
</head>
<body>
<div class="home">
    <h1 class="h1">View Moderator</h1>
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
        @foreach($moderators as $moderators)
            <tr class="rr2">
                <td class="r1"> {{$moderators->id}} </td>
                <td class="r1"> {{$moderators->moderator_name}} </td>
                <td class="r1"> {{$moderators->moderator_email}} </td>
                <td class="r1"> {{$moderators->moderator_birthday}} </td>
                <td class="r1"> {{$moderators->moderator_gender}} </td>
                <td class="r1"> {{$moderators->moderator_cell}} </td>
                <td class="r1"> {{$moderators->department_department_name}} </td>
                <td class="r1"> {{$moderators->moderator_info}} </td>
                <td class="r1"> {{$moderators->moderator_password}} </td>
                <td class="r1">
                    <a href="{{ URL::to('/editModerator/'.$moderators->id) }}">edit</a>
                    <a href="{{URL::to('/deleteModerator/'.$moderators->id)}}">delete</a>
                </td>

            </tr>
        @endforeach

    </table>
</body>


</html>