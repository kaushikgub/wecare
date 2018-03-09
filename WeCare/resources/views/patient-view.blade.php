<head>

    <style>

        body{
            background: #1ab188;
            font-family: 'Open Sans', sans-serif;
        }

        .all{
            text-align: center;
        }
        .head{
            color: #833ab4;
            margin-top: 70px;
            font-size: 70px;
        }
        .searchTerm{
            padding: 8px;
            padding-left: 40px;
            padding-right: 40px;
        }
        .ss{
            padding: 4px;
            padding-right: 20px;
            padding-left: 20px;
            background: green;
            color: white;
            font-size: 20px;
        }

    </style>

</head>
<body>
<div class="kkkkk">
<div class="all">
<h1 class="head">Be Confirm</h1>
<div class="wrap">
    {!! Form::open(array('url'=>'patientView')) !!}
    <div class="search">
        <input type="text" class="searchTerm" placeholder="Enter Your Phone Number" name="number">
        <input class="ss" type="submit" value="submit" name="submit">
    </div>
    {!! Form::close() !!}
</div>
</div>
</div>
</body>