<!DOCTYPE html>
<html>
<title>Add Doctor</title>
<body>




<center>
    Doctor Department:
    <select style="width: 200px"class="department" id="id">
        <option></option>
        @foreach($department as $department)
            <option value="0" disabled="true" selected="true"></option>
            <option value="{{$department->id}}">{{$department->department_name}}</option>
        @endforeach
    </select>
    Doctor Name:
    <select style="width: 200px"class="doctorname" id="id">
        <option value="0" disabled="true" selected="true"></option>

    </select>
    <br><br>

    <input type="submit" value="Submit">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $(document).on('change','.department',function () {
                console.log("its changed");
                var dep_id=$(this).val();
               // console.log(dep_id);
                var div=$(this).parent();

                var op;

                $.ajax({
                    type:'get',
                    url:'{!! URL::to('finddoctor') !!}',
                    data:{'id':dep_id},
                    success:function(data){

                      for(var i=0;; i++)
                          if(data[i]==undefined)
                              break;
                        console.log(i);
                        op='<option valu= "0" select disabled>chose doctor</option>';
                         for(var j=0;j<i;j++)

                            op+='<option valu= "'+data[j].id+'" >'+data[j].doctor_name+'</option>';



                       div.find('.doctorname').html(" ");
                        div.find('.doctorname').append(op);
                        console.log(op);


                    },
                    error:function(){}
                });




            });
        });
    </script>














<p>team@bashpo</p>
</center>
</body>
</html>