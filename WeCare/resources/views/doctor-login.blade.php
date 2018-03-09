<html>
<head>
    <title>Doctor Login</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
</head>
<body>
<div class="head">
    <h1 class="head1">DOCTOR LOGIN</h1>
</div>
{{Form::open(array('url'=>'postDoctorLogin'))}}
<div class="all">

    <div class="info">
        <label class="uName">Email</label>
        <input class="userName" type="text" name="email" placeholder="Enter Email" >
        <br>
        <br>

        <label class="password">Password</label>
        <input class="pass" type="password" placeholder="Enter Password" name="password">
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