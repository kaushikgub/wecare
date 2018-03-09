<!DOCTYPE html>
<html>
<title>Add Admin</title>
<body>

{!! Form::open(array('url'=>'addAdmin')) !!}

<center>
    Admin Name:
    <input type="text" name="adminName" value="">

    <br>

    <br>
    Admin Password:
    <input type="password" name="adminPassword" value="">

    <br><br>
    <input type="submit" value="Submit">
{!! Form::close() !!}
</center>
<p>team@bashpo</p>

</body>
</html>