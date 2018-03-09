<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
</head>
<body>
<div class="head">
    <h1 class="head1">ADMIN LOGIN</h1>
</div>
{{Form::open(array('url'=>'adminLogIn'))}}
<div class="all">

    <div class="info">
        <label class="uName">Name</label>
        <input class="userName" type="text" name="adminName" placeholder="Enter UserName" >
        <br>
        <br>

        <label class="password">Password</label>
        <input class="pass" type="password" placeholder="Enter Password" name="adminPassword">
        <br>
        <br>
    </div>

    <div class="submit">
        <input class="btn" type="submit" name="submit" value="Submit">
    </div>
</div>


{{Form::close()}}
</body>
</html>
