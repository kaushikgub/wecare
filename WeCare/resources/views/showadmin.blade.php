<!DOCTYPE html>
<html>
<title>Show Admin</title>
<head>
    <title>View Admins</title>
</head>
    <body>
            <table class="table">
                    <td>Name</td>
                    <td>Password</td>
                </tr>
                @foreach($admins as $n)
                    <tr>

                        <td>{{$n->name}}</td>
                        <td>{{$n->password}}</td>

                    </tr>
                    @endforeach
            </table>
    </body>>
</html>>