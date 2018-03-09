<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>We Care</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Medical Care a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<!-- flexslider-css-file -->
<link rel="stylesheet" href="{!! asset('css/flexslider.css')!!}" type="text/css" media="screen" property="" />
<!-- //flexslider-css-file -->

<link rel="stylesheet" href="{!! asset('css/easy-responsive-tabs.css')!!}">

<link href="{!! asset('css/font-awesome.css')!!}" rel="stylesheet">		<!-- font-awesome icons-css-file -->
<link href="{!! asset('css/bootstrap.css')!!}" type="text/css" rel="stylesheet" media="all">	<!-- bootstrap-css-file -->
<link href="{!! asset('css/style.css')!!}" type="text/css" rel="stylesheet" media="all">	<!-- style-css-file -->


<!-- gallery -->
<link rel="stylesheet" href="{!! asset('css/lightbox.css')!!}">
<!-- //gallery -->

<!-- fonts -->
	<!--<link href="//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Cinzel:400,700,900" rel="stylesheet">
    -->
 
<!-- Default-JavaScript-File -->
	<script type="text/javascript" src="{!! asset('js/jquery-2.1.4.min.js')!!}"></script>
<!-- //Default-JavaScript-File -->
	
<script src="{!! asset('js/bootstrap.js')!!}"></script>	<!-- //bootstrap-JavaScript-File -->
		
</head>
<!-- Head -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
	<!-- banner -->
	<div id="home" class="w3ls-banner"> 
		<!-- header -->
		<div class="header-w3layouts"> 
			<!-- Navigation -->
			<nav class="navbar navbar-default navbar-fixed-top"> 
				<div class="container">
					<div class="navbar-header page-scroll">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Medical_care</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a class="navbar-brand" href="#">We Care</a></h1>
					</div> 
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav navbar-right cl-effect-15">
							<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
							<li class="hidden"><a class="page-scroll" href="#page-top"></a>	</li>
							<li><a class="page-scroll scroll" href="#home">Home</a></li>
							<li><a class="page-scroll scroll" href="#about">About</a></li>
							<li><a class="page-scroll scroll" href="#services">Services</a></li>
							<li><a class="page-scroll scroll" href="#team">Team</a></li>
							<li><a class="page-scroll scroll" href="#MakeAnAppointmentToday">Make An Appointment Today</a></li>
							<li><a class="page-scroll scroll" href="#blog">Blog</a></li>
							<li><a class="page-scroll scroll" href="#contact">Contact</a></li>
							<li class="dropdown">
								<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Log In <span class="caret"></span></a>
								<ul class="dropdown-menu">
									{{--<li><a href="{{ URL::to('/admin') }}" title="">Admin</a></li>--}}
									<li><a  href="{{ URL::to('/doctor') }}">Doctor</a></li>
									<li><a  href="{{ URL::to('/moderator') }}">Moderator</a></li>
									<li><a  href="{{ URL::to('/patient') }}">Patient</a></li>
								</ul>
							</li>
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container -->
			</nav>  
		</div>	
		<!-- //header -->
		<!--banner-->
		<!--Slider-->
			<div class="w3l_banner_info">
				<div class="col-md-5 banner-form-agileinfo">
					<img src="{!! asset('images/alt1.png')!!}" alt="" />
				</div>
				<div class="col-md-7 slider">
					<div class="callbacks_container">
								<ul class="rslides" id="slider3">
									<li>
										<div class="slider_banner_info">
											 <h4>WE make healthy</h4>
											<p>Medical school education and post graduate education empha -size thoroughness.The good physician treats the disease, great physician treats the patient who has the disease.</p>
										</div>

									</li>
									<li>
										<div class="slider_banner_info">
											<h4>Medicine is a science</h4>
											<p>The best doctor is the one you run to and can't find.We should be concerned not only about the health of individual patients, but also the health of our entire society.</p>
										</div>

									</li>
									<li>
										<div class="slider_banner_info">
											<h4>Nothing cures health</h4>
											<p>Never go to a doctor whose office plants have died.You know what they call the fellow who finishes last in his medical school graduating class? They call him 'Doctor. </p>
										</div>

									</li>
									<li>
										<div class="slider_banner_info">
											<h4>We do best treatment</h4>
											<p>Time is generally the best doctor.so well choose your best doctor before time lossesThe art of medicine consists in amusing the patient while nature cures the disease.</p>
										</div>

									</li>
								</ul>
					</div>
				</div>
				<div class="clearfix"></div>
			<!--//Slider-->
			
			</div>
		<!--//banner-->
		
	</div>	
	<!-- //banner --> 

<!-- about -->
<div class="line">
</div>
	<div class="about" id="about">
		<div class="container">
			<div class="w3ls-heading">
				<h3>About</h3>
			</div>
			<div class="col-md-6 about-left">
				<div class="w3labout-img boxw3-agile"> 
					<img src="{!! asset('images/about.jpg')!!}" alt="" class="img-responsive" />
					<div class="agile-caption">
						<h3>Medical care</h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
							sed diam nonummy nibh euismod tincidunt.</p>
					</div> 
				</div>
			</div>
			<div class="col-md-6 about-right">
				<h2>Integer euismod in orci quis</h2>
				<p>Nullam maximus consequat bibendum. Integer euismod in orci quis tempus. Nunc sed ligula facilisisNullam maximus consequat bibendum. Integer euismod in orci quis tempus. Nunc sed ligula facilisisNullam maximus consequat bibendum. Integer euismod in orci quis tempus. Nunc sed ligula facilisis</p>
				<a href="#myModal" class="w3more" data-toggle="modal"><i class="fa fa-mail-forward" aria-hidden="true"></i> Read more</a>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
<!-- //about -->
	
<!-- modal --><!-- for pop up -->
<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header"> 
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="span2" aria-hidden="true">&times;</span></button>						
				<h4 class="modal-title"> Medical Care </h4>
			</div> 
		<div class="modal-body">
			<div class="agileits-w3layouts-info">
				<img src="{!! asset('images/about.jpg')!!}" alt="" />
				<p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis porttitor quis. Suspendisse ultrices hendrerit massa. Nam id metus id tellus ultrices ullamcorper.  Cras tempor massa luctus, varius lacus sit amet, blandit lorem. Duis auctor in tortor sed tristique. Proin sed finibus sem.</p>
			</div>
		</div>
		</div>
	</div>
</div>
<!-- //modal --><!-- //for pop up -->

<!-- tabs -->	<!-- services -->
<div class="line">
</div>
<div class="demo" id="services">    
<div class="container"> 
				<div class="w3ls-heading">
					<h3>What We Do</h3>
				</div>
<div class="horizontalTab" id="horizontalTab">
	<ul class="resp-tabs-list list-group">
		<li class="list-group-item text-center">Service 1</li>
		<li class="list-group-item text-center">Service 2</li>
		<li class="list-group-item text-center">Service 3</li>
		<li class="list-group-item text-center">Service 4</li>
		<li class="list-group-item text-center">Service 5</li>
		<li class="list-group-item text-center">Service 6</li>
	</ul>
	<div class="resp-tabs-container">
		<!-- section -->
							<div class="bhoechie-tab-content active">
								<div class="services-grids">
									<div class="ser-img">
										<img src="{!! asset('images/s6.jpg')!!}" title="service" alt="" />
									</div>
									<div class="ser-info">
										<h3>Contrary to popular belief, Lorem Ipsum is not simply text</h3>
										<p>Integer sed blandit nisi, eget tempor nulla. Vivamus ut mi nec quam iaculis ultricies. 
										Maecenas at placerat metus. Curabitur arcu purus, eleifend ut massa at, fringilla sagittis quam. 
										Nulla volutpat tellus orci, id laoreet ante pretium id. Ut iaculis quis eros ac bibendum.
										</p>
										<p>Pellentesque finibus dapibus volutpat. Curabitur imperdiet vulputate rhoncus. Nullam 
										scelerisque magna non turpis euismod bibendum. 
										</p>
										<a href="#myModal" data-toggle="modal"><i class="fa fa-mail-forward" aria-hidden="true"></i> Read More</a>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<!--  section -->
							<div class="bhoechie-tab-content">
								<div class="services-grids">
									<div class="ser-img">
										<img src="{!! asset('images/s5.jpg')!!}" title="service" alt="" />
									</div>
									<div class="ser-info">
										<h3>At vero eos et accusamus et iusto dignissimos ducimus qui</h3>
										<p>Integer sed blandit nisi, eget tempor nulla. Vivamus ut mi nec quam iaculis ultricies. 
										Maecenas at placerat metus. Curabitur arcu purus, eleifend ut massa at, fringilla sagittis quam. 
										Nulla volutpat tellus orci, id laoreet ante pretium id. Ut iaculis quis eros ac bibendum.
										</p>
										<p>Pellentesque finibus dapibus volutpat. Curabitur imperdiet vulputate rhoncus. Nullam 
										scelerisque magna non turpis euismod bibendum. 
										</p>
										<a href="#myModal" data-toggle="modal"><i class="fa fa-mail-forward" aria-hidden="true"></i> Read More</a>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
				
							<!--  search -->
							<div class="bhoechie-tab-content">
								<div class="services-grids">
									<div class="ser-img">
										<img src="{!! asset('images/s1.jpg')!!}" title="service" alt="" />
									</div>
									<div class="ser-info">
										<h3>On the other hand, we denounce with righteous indignation</h3>
										<p>Integer sed blandit nisi, eget tempor nulla. Vivamus ut mi nec quam iaculis ultricies. 
										Maecenas at placerat metus. Curabitur arcu purus, eleifend ut massa at, fringilla sagittis quam. 
										Nulla volutpat tellus orci, id laoreet ante pretium id. Ut iaculis quis eros ac bibendum.
										</p>
										<p>Pellentesque finibus dapibus volutpat. Curabitur imperdiet vulputate rhoncus. Nullam 
										scelerisque magna non turpis euismod bibendum. 
										</p>
										<a href="#myModal" data-toggle="modal"><i class="fa fa-mail-forward" aria-hidden="true"></i> Read More</a>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="bhoechie-tab-content">
								<div class="services-grids">
									<div class="ser-img">
										<img src="{!! asset('images/s4.jpg')!!}" title="service" alt="" />
									</div>
									<div class="ser-info">
										<h3>Laboris nisi ut aliquip ex ea commodo consequat indignation</h3>
										<p>Integer sed blandit nisi, eget tempor nulla. Vivamus ut mi nec quam iaculis ultricies. 
										Maecenas at placerat metus. Curabitur arcu purus, eleifend ut massa at, fringilla sagittis quam. 
										Nulla volutpat tellus orci, id laoreet ante pretium id. Ut iaculis quis eros ac bibendum.
										</p>
										<p>Pellentesque finibus dapibus volutpat. Curabitur imperdiet vulputate rhoncus. Nullam 
										scelerisque magna non turpis euismod bibendum. 
										</p>
										<a href="#myModal" data-toggle="modal"><i class="fa fa-mail-forward" aria-hidden="true"></i> Read More</a>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="bhoechie-tab-content">
								<div class="services-grids">
									<div class="ser-img">
										<img src="{!! asset('images/s3.jpg')!!}" title="service" alt="" />
									</div>
									<div class="ser-info">
										<h3>Temporibus autem quibusdam et aut officiis debitis denounce</h3>
										<p>Integer sed blandit nisi, eget tempor nulla. Vivamus ut mi nec quam iaculis ultricies. 
										Maecenas at placerat metus. Curabitur arcu purus, eleifend ut massa at, fringilla sagittis quam. 
										Nulla volutpat tellus orci, id laoreet ante pretium id. Ut iaculis quis eros ac bibendum.
										</p>
										<p>Pellentesque finibus dapibus volutpat. Curabitur imperdiet vulputate rhoncus. Nullam 
										scelerisque magna non turpis euismod bibendum. 
										</p>
										<a href="#myModal" data-toggle="modal"><i class="fa fa-mail-forward" aria-hidden="true"></i> Read More</a>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="bhoechie-tab-content">
								<div class="services-grids">
									<div class="ser-img">
										<img src="{!! asset('images/s2.jpg')!!}" title="service" alt="" />
									</div>
									<div class="ser-info">
										<h3>Temporibus autem quibusdam et officiis debitis quibusdam et</h3>
										<p>Integer sed blandit nisi, eget tempor nulla. Vivamus ut mi nec quam iaculis ultricies. 
										Maecenas at placerat metus. Curabitur arcu purus, eleifend ut massa at, fringilla sagittis quam. 
										Nulla volutpat tellus orci, id laoreet ante pretium id. Ut iaculis quis eros ac bibendum.
										</p>
										<p>Pellentesque finibus dapibus volutpat. Curabitur imperdiet vulputate rhoncus. Nullam 
										scelerisque magna non turpis euismod bibendum. 
										</p>
										<a href="#myModal" data-toggle="modal"><i class="fa fa-mail-forward" aria-hidden="true"></i> Read More</a>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
	</div>
</div>
</div>
</div>
<!-- //tabs -->    <!-- services -->

<!-- team -->	<!-- Our specialists -->
		<div class="line">
		</div>
	<div class="team" id="team">
		<div class="container">
			<div class="w3ls-heading">
				<h3>Meet Our Specialists</h3>
			</div>
			<div class="agile_team_grids">
				<div class="col-md-3 agile_team_grid  agile_team_gridf">
					<div class="agile_team_grid_main">
						<img src="{!! asset('images/t.jpg')!!}" alt=" " class="img-responsive" />
						<div class="p-mask">
							<ul class="social-icons">
								<li><a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a></li>
								<li><a href="#" class="icon-button google"><i class="icon-google"></i><span></span></a></li>
								<li><a href="#" class="icon-button v"><i class="icon-v"></i><span></span></a></li>
								<li><a href="#" class="icon-button pinterest"><i class="pinterest"></i><span></span></a></li>
							</ul>
						</div>
					</div>
					<div class="agile_team_grid1">
						<h4>Elisa liden</h4>
						<p>Numerology</p>
					</div>
				</div>
				<div class="col-md-3 agile_team_grid agile_team_grid2">
					<div class="agile_team_grid_main">
						<img src="{!! asset('images/t2.jpg')!!}" alt=" " class="img-responsive" />
						<div class="p-mask">
							<ul class="social-icons">
								<li><a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a></li>
								<li><a href="#" class="icon-button google"><i class="icon-google"></i><span></span></a></li>
								<li><a href="#" class="icon-button v"><i class="icon-v"></i><span></span></a></li>
								<li><a href="#" class="icon-button pinterest"><i class="pinterest"></i><span></span></a></li>
							</ul>
						</div>
					</div>
					<div class="agile_team_grid1">
						<h4>Martina</h4>
						<p>Dentist</p>
					</div>
				</div>
				<div class="col-md-3 agile_team_grid agile_team_grid3">
					<div class="agile_team_grid_main">
						<img src="{!! asset('images/tt.png')!!}" alt=" " class="img-responsive" />
						<div class="p-mask">
							<ul class="social-icons">
								<li><a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a></li>
								<li><a href="#" class="icon-button google"><i class="icon-google"></i><span></span></a></li>
								<li><a href="#" class="icon-button v"><i class="icon-v"></i><span></span></a></li>
								<li><a href="#" class="icon-button pinterest"><i class="pinterest"></i><span></span></a></li>
							</ul>
						</div>
					</div>
					<div class="agile_team_grid1">
						<h4>Vickey alter</h4>
						<p>Surgery Specialist</p>
					</div>
				</div>
				<div class="col-md-3 agile_team_grid agile_team_grid4">
					<div class="agile_team_grid_main">
						<img src="{!! asset('images/t4.jpg')!!}" alt=" " class="img-responsive" />
						<div class="p-mask">
							<ul class="social-icons">
								<li><a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a></li>
								<li><a href="#" class="icon-button google"><i class="icon-google"></i><span></span></a></li>
								<li><a href="#" class="icon-button v"><i class="icon-v"></i><span></span></a></li>
								<li><a href="#" class="icon-button pinterest"><i class="pinterest"></i><span></span></a></li>
							</ul>
						</div>
					</div>
					<div class="agile_team_grid1">
						<h4>Rose mary</h4>
						<p>Skin care expert</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //team -->	<!-- //Our specialists -->

<!-- appointment form -->
<div class="line">
</div>
<div class="appointment" id="MakeAnAppointmentToday">
	<div class="container">
		<div class="w3ls-heading">
			<h3>Make an appointment today</h3>
		</div>
		<div class="appointment-grid">

			{!! Form::open(array('url'=>'postAppoiment')) !!}
			<div class="col-md-4 appointmnet-left">
				<div class="inner">
					<div class="working-grid">
						<h4>Appointment form</h4>
						{{--<input class="date" id="datepicker" type="text" value="Appointment date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Appointment date';}" required="">--}}
						<div class="ap1">
						<label class="dept">Department:</label><br>
						<select name="doctorDepartment"class="department" id="id">
							@foreach($department as $department)
								<option value="0" disabled="true" selected="true"></option>
								<option value="{{$department->id}}">{{$department->department_name}}</option>
							@endforeach
						</select>
						<br><br>
						<label class="dn">Doctor Name:</label><br>
						<select name="doctorId" style="width: 200px"class="doctorname" id="id">
							<option value="0"></option>

						</select>
						<br><br>
						<label class="st">Slot:</label><br>
						<select name="slot" style="width: 200px"class="slot" id="id">
							<option value="0" disabled="true" selected="true">- select -</option>
							<option value="0"  disabled="true" selected="true"></option>

						</select>
						<br><br>
						<label class="ti">Time:</label><br>
						<select name="time" style="width: 200px"class="time" id="id">
							<option value="0" disabled="true" selected="true">-select -</option>
							<option value="0"  disabled="true" selected="true"></option>

						</select>
						<br><br>

						<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

						<script type="text/javascript">
                            $(document).ready(function () {
                                $(document).on('change','.department',function () {
                                    //console.log("its changed");
                                    var dep_id=$(this).val();
                                    console.log(dep_id);
                                    var div=$(this).parent();

                                    var op="";

                                    $.ajax({
                                        type:'get',
                                        url:'{!! URL::to('finddoctor') !!}',
                                        data:{'id':dep_id},
                                        success:function(data){

                                            for(var i=0;; i++)
                                                if(data[i]==undefined)
                                                    break;
                                           // console.log(i);
                                            div.find('.doctorname').html(" ");
                                            op='<option value= "-1"  select disabled>chose doctor</option>';
                                            for(var j=0;j<i;j++)

                                                op+='<option  value= "'+data[j].id+'" >'+data[j].doctor_name+'</option>';




                                            div.find('.doctorname').append(op);


                                        },
                                        error:function(){}
                                    });
                                });
                            });
						</script>


						<script type="text/javascript">
                            $(document).ready(function () {
                                $(document).on('change','.doctorname',function () {
                                    //console.log("its changed");
                                    var dep_id=$(this).val();
                                    //console.log(dep_id);
                                    var div=$(this).parent();
                                    var t =$(this).parent(op);
                                    ///console.log(t);

                                    var op=" ";

                                    $.ajax({
                                        type:'get',
                                        url:'{!! URL::to('findslot') !!}',
                                        data:{'id':dep_id},
                                        success:function(data){
                                            //console.log("Success");

                                            for(var i=0;; i++)
                                                if(data[i]==undefined)
                                                    break;
                                            // console.log(i);
                                            div.find('.slot').html(" ");
                                            op='<option valu= "-1" select disabled>chose Slot</option>';
                                            for(var j=0;j<i;j++)

                                                op+='<option value= "'+data[j].id+'" >'+data[j].date+'</option>';




                                            div.find('.slot').append(op);
                                            // console.log(op);


                                        },
                                        error:function(){}
                                    });
                                });
                            });
						</script>


						<script type="text/javascript">
                            $(document).ready(function () {
                                $(document).on('change','.slot',function () {
                                    console.log("its changed");
                                    var dep_id=$(this).val();
                                    console.log(dep_id);
                                    var div=$(this).parent();
                                    var t =$(this).parent(op);
                                    ///console.log(t);

                                    var op=" ";

                                    $.ajax({
                                        type:'get',
                                        url:'{!! URL::to('findtime') !!}',
                                        data:{'id':dep_id},
                                        success:function(data){
                                            console.log("Success");

                                            for(var i=0;; i++)
                                                if(data[i]==undefined)
                                                    break;
                                            // console.log(i);
                                            op='<option valu= "0" select disabled>chose Slot</option>';
                                            for(var j=0;j<i;j++)

                                                op+='<option value= "'+data[j].time+'" >'+data[j].time+'</option>';



                                            div.find('.time').html(" ");
                                            div.find('.time').append(op);
                                            // console.log(op);


                                        },
                                        error:function(){}
                                    });
                                });
                            });
						</script>


					<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>

			</div>
			<div class="col-md-4 appointmnet-middle">
				<div class="inner">
					<h4>Appointment form</h4>

						<input type="text" name="name" id="name" placeholder="Name" required=""><br><br>
						<input type="text" name="age" id="age" placeholder="Age" required=""><br><br>
						<input type="text" name="mobile" id="Mobile_Number" placeholder="Mobile Number" required=""><br><br>
						<input type="text" name="gender" id="gender" placeholder="Gender" required=""><br><br>
						<input type="submit"  value="book appointment ">

				</div>
			</div>
			<div class="col-md-4 appointmnet-right">
				<div class="inner">
					<img src="{!! asset('images/tt.png')!!}" alt=""/>
				</div>
			</div>
			<div class="clearfix"></div>
			{!! Form::close() !!}
		</div>
	</div>

</div>
<!-- //appointment form -->

<!-- Laboratories -->
<div class="line">
</div>
	<div class="laboratories" id="laboratories">
		<div class="w3l-about w3l-gallery">
			<div class="container">
				<div class="w3ls-heading">
					<h3>Laboratories</h3>
				</div>
				<div class="gallery-grids">
						<div class="col-md-3 gallery-grid">
							<div class="grid">
								<figure class="effect-apollo">
									<a class="example-image-link" href="{!! asset('images/0.jpg')!!}" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut sem ac lectus mattis sagittis. Donec pulvinar quam sit amet est vestibulum volutpat. Phasellus sed nibh odio. Phasellus posuere at purus sit amet porttitor. Cras euismod egestas enim eget molestie. Aenean ornare condimentum odio, in lacinia felis finibus non. Nam faucibus libero et lectus finibus, sed porttitor velit pellentesque.">
										<img src="{!! asset('images/0.jpg')!!}" alt="" />
									</a>
								</figure>
							</div>
						</div>
						<div class="col-md-3 gallery-grid">
							<div class="grid">
								<figure class="effect-apollo">
									<a class="example-image-link" href="{!! asset('images/4.jpg')!!}" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut sem ac lectus mattis sagittis. Donec pulvinar quam sit amet est vestibulum volutpat. Phasellus sed nibh odio. Phasellus posuere at purus sit amet porttitor. Cras euismod egestas enim eget molestie. Aenean ornare condimentum odio, in lacinia felis finibus non. Nam faucibus libero et lectus finibus, sed porttitor velit pellentesque.">
										<img src="{!! asset('images/4.jpg')!!}" alt="" />
									</a>
								</figure>
							</div>
						</div>
						<div class="col-md-3 gallery-grid">
							<div class="grid">
								<figure class="effect-apollo">
									<a class="example-image-link" href="{!! asset('images/5.jpg')!!}" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut sem ac lectus mattis sagittis. Donec pulvinar quam sit amet est vestibulum volutpat. Phasellus sed nibh odio. Phasellus posuere at purus sit amet porttitor. Cras euismod egestas enim eget molestie. Aenean ornare condimentum odio, in lacinia felis finibus non. Nam faucibus libero et lectus finibus, sed porttitor velit pellentesque.">
										<img src="{!! asset('images/5.jpg')!!}" alt="" />
									</a>
								</figure>
							</div>
						</div>
						<div class="col-md-3 gallery-grid">
							<div class="grid">
								<figure class="effect-apollo">
									<a class="example-image-link" href="{!! asset('images/7.jpg')!!}" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut sem ac lectus mattis sagittis. Donec pulvinar quam sit amet est vestibulum volutpat. Phasellus sed nibh odio. Phasellus posuere at purus sit amet porttitor. Cras euismod egestas enim eget molestie. Aenean ornare condimentum odio, in lacinia felis finibus non. Nam faucibus libero et lectus finibus, sed porttitor velit pellentesque.">
										<img src="{!! asset('images/7.jpg')!!}" alt="" />
									</a>
								</figure>
							</div>
						</div>
						<div class="col-md-3 gallery-grid">
							<div class="grid">
								<figure class="effect-apollo">
									<a class="example-image-link" href="{!! asset('images/17.jpg')!!}" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut sem ac lectus mattis sagittis. Donec pulvinar quam sit amet est vestibulum volutpat. Phasellus sed nibh odio. Phasellus posuere at purus sit amet porttitor. Cras euismod egestas enim eget molestie. Aenean ornare condimentum odio, in lacinia felis finibus non. Nam faucibus libero et lectus finibus, sed porttitor velit pellentesque.">
										<img src="{!! asset('images/17.jpg')!!}" alt="" />
									</a>
								</figure>
							</div>
						</div>
						<div class="col-md-3 gallery-grid">
							<div class="grid">
								<figure class="effect-apollo">
									<a class="example-image-link" href="{!! asset('images/9.jpg')!!}" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut sem ac lectus mattis sagittis. Donec pulvinar quam sit amet est vestibulum volutpat. Phasellus sed nibh odio. Phasellus posuere at purus sit amet porttitor. Cras euismod egestas enim eget molestie. Aenean ornare condimentum odio, in lacinia felis finibus non. Nam faucibus libero et lectus finibus, sed porttitor velit pellentesque.">
										<img src="{!! asset('images/9.jpg')!!}" alt="" />
									</a>
								</figure>
							</div>
						</div>
						<div class="col-md-3 gallery-grid">
							<div class="grid">
								<figure class="effect-apollo">
									<a class="example-image-link" href="{!! asset('images/23.jpg')!!}" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut sem ac lectus mattis sagittis. Donec pulvinar quam sit amet est vestibulum volutpat. Phasellus sed nibh odio. Phasellus posuere at purus sit amet porttitor. Cras euismod egestas enim eget molestie. Aenean ornare condimentum odio, in lacinia felis finibus non. Nam faucibus libero et lectus finibus, sed porttitor velit pellentesque.">
										<img src="{!! asset('images/23.jpg')!!}" alt="" />
									</a>
								</figure>
							</div>
						</div>
						<div class="col-md-3 gallery-grid">
							<div class="grid">
								<figure class="effect-apollo">
									<a class="example-image-link" href="{!! asset('images/13.jpg')!!}" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut sem ac lectus mattis sagittis. Donec pulvinar quam sit amet est vestibulum volutpat. Phasellus sed nibh odio. Phasellus posuere at purus sit amet porttitor. Cras euismod egestas enim eget molestie. Aenean ornare condimentum odio, in lacinia felis finibus non. Nam faucibus libero et lectus finibus, sed porttitor velit pellentesque.">
										<img src="{!! asset('images/13.jpg')!!}" alt="" />
									</a>
								</figure>
							</div>
						</div>
						<div class="col-md-3 gallery-grid">
							<div class="grid">
								<figure class="effect-apollo">
									<a class="example-image-link" href="{!! asset('images/s3.jpg')!!}" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut sem ac lectus mattis sagittis. Donec pulvinar quam sit amet est vestibulum volutpat. Phasellus sed nibh odio. Phasellus posuere at purus sit amet porttitor. Cras euismod egestas enim eget molestie. Aenean ornare condimentum odio, in lacinia felis finibus non. Nam faucibus libero et lectus finibus, sed porttitor velit pellentesque.">
										<img src="{!! asset('images/s3.jpg')!!}" alt="" />
									</a>
								</figure>
							</div>
						</div>
						<div class="col-md-3 gallery-grid">
							<div class="grid">
								<figure class="effect-apollo">
									<a class="example-image-link" href="{!! asset('images/2.jpg')!!}" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut sem ac lectus mattis sagittis. Donec pulvinar quam sit amet est vestibulum volutpat. Phasellus sed nibh odio. Phasellus posuere at purus sit amet porttitor. Cras euismod egestas enim eget molestie. Aenean ornare condimentum odio, in lacinia felis finibus non. Nam faucibus libero et lectus finibus, sed porttitor velit pellentesque.">
										<img src="{!! asset('images/2.jpg')!!}" alt="" />
									</a>
								</figure>
							</div>
						</div>
						<div class="col-md-3 gallery-grid">
							<div class="grid">
								<figure class="effect-apollo">
									<a class="example-image-link" href="{!! asset('images/s4.jpg')!!}" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut sem ac lectus mattis sagittis. Donec pulvinar quam sit amet est vestibulum volutpat. Phasellus sed nibh odio. Phasellus posuere at purus sit amet porttitor. Cras euismod egestas enim eget molestie. Aenean ornare condimentum odio, in lacinia felis finibus non. Nam faucibus libero et lectus finibus, sed porttitor velit pellentesque.">
										<img src="{!! asset('images/s4.jpg')!!}" alt="" />
									</a>
								</figure>
							</div>
						</div>
						<div class="col-md-3 gallery-grid">
							<div class="grid">
								<figure class="effect-apollo">
									<a class="example-image-link" href="{!! asset('images/14.jpg')!!}" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut sem ac lectus mattis sagittis. Donec pulvinar quam sit amet est vestibulum volutpat. Phasellus sed nibh odio. Phasellus posuere at purus sit amet porttitor. Cras euismod egestas enim eget molestie. Aenean ornare condimentum odio, in lacinia felis finibus non. Nam faucibus libero et lectus finibus, sed porttitor velit pellentesque.">
										<img src="{!! asset('images/14.jpg')!!}" alt="" />
									</a>
								</figure>
							</div>
						</div>
						<div class="clearfix"> </div>
						<script src="{!! asset('js/lightbox-plus-jquery.min.js')!!}"> </script>
				</div>
			</div>
		</div>
	</div>
<!-- //Laboratories	-->
	
<!-- testimonials -->
<div class="line">
</div>
	<div class="testimonials" id="testimonials">
		<div class="container">
			<div class="w3ls-heading">
				<h3>Testimonials</h3>
			</div>
			<div class="w3_agileits_testimonial_grids">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="w3_agileits_testimonial_grid">
									<p><i class="fa fa-quote-right" aria-hidden="true"></i>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
										dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<i class="fa fa-quote-right" aria-hidden="true"></i></p>
									<img src="{!! asset('images/test1.jpg')!!}" alt=" " class="img-responsive" />
									<h4>Rosy James<span>mollit anim</span></h4>
								</div>
							</li>
							<li>
								<div class="w3_agileits_testimonial_grid">
									<p><i class="fa fa-quote-right" aria-hidden="true"></i>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
										dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<i class="fa fa-quote-right" aria-hidden="true"></i></p>
									<img src="{!! asset('images/test2.jpg')!!}" alt=" " class="img-responsive" />
									<h4>Allen parker<span>voluptate velit</span></h4>
								</div>
							</li>
							<li>
								<div class="w3_agileits_testimonial_grid">
									<p><i class="fa fa-quote-right" aria-hidden="true"></i>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
										dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<i class="fa fa-quote-right" aria-hidden="true"></i></p>
									<img src="{!! asset('images/test3.jpg')!!}" alt=" " class="img-responsive" />
									<h4>Crisp Ally <span>sint occaecat</span></h4>
								</div>
							</li>
						</ul>
					</div>
				</section>
				<!-- flexSlider -->
					<script defer src="{!! asset('js/jquery.flexslider.js')!!}"></script>
					<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				  </script>
				<!-- //flexSlider -->
			</div>
		</div>
	</div>
<!-- //testimonials -->

<!-- classes -->	<!-- blog -->
<div class="line">
</div>
	<div id="blog" class="banner-bottom blog">
		<div class="container">
			<div class="w3ls-heading">
				<h3>Blog</h3>
			</div>
			<div class="w3layouts_classes_grids">
				<ul id="flexiselDemo1">	
					<li>
						<div class="w3_agile_class_grid">
							<div class="w3layouts_team_grid agileits_w3layouts_class">
								<img src="{!! asset('images/1.jpg')!!}" alt=" " class="img-responsive" />
								<div class="w3layouts_team_grid_pos">
									<div class="wthree_text">
										<a class="agile_class" href="#" data-toggle="modal" data-target="#myModal">Learn More</a>
									</div>
								</div>
								<div class="agileits_w3layouts_class_pos">
									<ul>
										<li><i class="fa fa-calendar-o" aria-hidden="true"></i>14/3/2017</li>
										<li><i class="fa fa-comments-o" aria-hidden="true"></i><a href="#">11</a></li>
										<li><i class="fa fa-share" aria-hidden="true"></i><a href="#">9</a></li>
									</ul>
								</div>
							</div>
							<div class="w3_agileits_class_grid">	
								<p>Maecenas volutpat condimentum nisl sed aliquet. Vestibulum non nunc purus</p>
								<h4><a href="#" data-toggle="modal" data-target="#myModal">ultricies libero lobortis</a></h4>
								<h5>selena karl</h5>
								<div class="w3_agileits_class_grid_pos">
									<img src="{!! asset('images/test1.jpg')!!}" alt=" " class="img-responsive" />
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3_agile_class_grid">
							<div class="w3layouts_team_grid agileits_w3layouts_class">
								<img src="{!! asset('images/20.jpg')!!}" alt=" " class="img-responsive" />
								<div class="w3layouts_team_grid_pos">
									<div class="wthree_text">
										<a class="agile_class" href="#" data-toggle="modal" data-target="#myModal">Learn More</a>
									</div>
								</div>
								<div class="agileits_w3layouts_class_pos">
									<ul>
										<li><i class="fa fa-calendar-o" aria-hidden="true"></i>15/3/2017</li>
										<li><i class="fa fa-comments-o" aria-hidden="true"></i><a href="#">24</a></li>
										<li><i class="fa fa-share" aria-hidden="true"></i><a href="#">11</a></li>
									</ul>
								</div>
							</div>
							<div class="w3_agileits_class_grid">	
								<p>Maecenas volutpat condimentum nisl sed aliquet. Vestibulum non nunc purus</p>
								<h4><a href="#" data-toggle="modal" data-target="#myModal">auctor eget sem feugiat</a></h4>
								<h5>Amelin Carl</h5>
								<div class="w3_agileits_class_grid_pos">
									<img src="{!! asset('images/test2.jpg')!!}" alt=" " class="img-responsive" />
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3_agile_class_grid">
							<div class="w3layouts_team_grid agileits_w3layouts_class">
								<img src="{!! asset('images/21.jpg')!!}" alt=" " class="img-responsive" />
								<div class="w3layouts_team_grid_pos">
									<div class="wthree_text">
										<a class="agile_class" href="#" data-toggle="modal" data-target="#myModal">Learn More</a>
									</div>
								</div>
								<div class="agileits_w3layouts_class_pos">
									<ul>
										<li><i class="fa fa-calendar-o" aria-hidden="true"></i>16/3/2017</li>
										<li><i class="fa fa-comments-o" aria-hidden="true"></i><a href="#">26</a></li>
										<li><i class="fa fa-share" aria-hidden="true"></i><a href="#">22</a></li>
									</ul>
								</div>
							</div>
							<div class="w3_agileits_class_grid">	
								<p>Maecenas volutpat condimentum nisl sed aliquet. Vestibulum non nunc purus</p>
								<h4><a href="#" data-toggle="modal" data-target="#myModal">blandit dolor venenatis</a></h4>
								<h5>Thomas Richard</h5>
								<div class="w3_agileits_class_grid_pos">
									<img src="{!! asset('images/test3.jpg')!!}" alt=" " class="img-responsive" />
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3_agile_class_grid">
							<div class="w3layouts_team_grid agileits_w3layouts_class">
								<img src="{!! asset('images/1.jpg')!!}" alt=" " class="img-responsive">
								<div class="w3layouts_team_grid_pos">
									<div class="wthree_text">
										<a class="agile_class" href="#" data-toggle="modal" data-target="#myModal">Learn More</a>
									</div>
								</div>
								<div class="agileits_w3layouts_class_pos">
									<ul>
										<li><i class="fa fa-calendar-o" aria-hidden="true"></i>17/3/2017</li>
										<li><i class="fa fa-comments-o" aria-hidden="true"></i><a href="#">29</a></li>
										<li><i class="fa fa-share" aria-hidden="true"></i><a href="#">10</a></li>
									</ul>
								</div>
							</div>
							<div class="w3_agileits_class_grid">	
								<p>Maecenas volutpat condimentum nisl sed aliquet. Vestibulum non nunc purus</p>
								<h4><a href="#" data-toggle="modal" data-target="#myModal">cursus urna urna quis</a></h4>
								<h5>Laura Lii</h5>
								<div class="w3_agileits_class_grid_pos">
									<img src="{!! asset('images/test2.jpg')!!}" alt=" " class="img-responsive" />
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
<!-- //classes -->	<!-- //blog -->


<!-- contact -->
<div class="line">
</div>
	 <div class="contact" id="contact">
	<div class="container">
		<div class="w3ls-heading">
			<h3>Contact</h3>
		</div>
		<div class="contact-top-grids">
			<div class="col-md-6 contact-left-">
				<div class="left-top">
					<h4>Contact information</h4>
					<p><i class="fa fa-calendar" aria-hidden="true"></i><strong>Monday - Friday <span class="dot">:</span></strong>9:30 AM to 6:30 PM</p>
					<p><i class="fa fa-map-marker" aria-hidden="true"></i><strong class="p">address <span class="dot1">:</span></strong>Kazipara, 5th main road, Dhaka</p>
					<p><i class="fa fa-phone" aria-hidden="true"></i><strong class="p1">phone <span class="dot2">:</span></strong>+880 1855601369</p>
					<p><i class="fa fa-envelope" aria-hidden="true"></i><strong class="p2">email <span class="dot3">:</span></strong><a href="mailto:info@example.com">team.bashpo@email.com</a></p>
				</div>
				<div class="left-bottom">
					<h4>get connected</h4>
					<p>Nutrition ends of the protein weekend. Financing chat Vulputate Zen. Not greedy of euismod bibendum Nullam interdum sollicitudin ante.</p>
					<div class="right-w3l fotw3">
						<ul class="top-links">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>

				</div>
			</div>
			<div class="col-md-6 contact-right">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2581.269644213097!2d90.3703641910913!3d23.802003623078793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0d3c4b7b747%3A0x74f0329a17c3a8cd!2sAl+Helal+Specialized+Hospital!5e0!3m2!1sen!2sbd!4v1510039838807" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="clearfix"></div>
		</div>
			<div class="contact-w3ls">
				<form action="#" method="post">
					<div class="col-md-7 col-sm-7 contact-left agileits-w3layouts">
						<input type="text" name="First Name" placeholder="Name" required="">
						<input type="email"  class="email" name="Email" placeholder="Email" required="">
						<input type="text" name="Number" placeholder="Mobile Number" required="">
						<!-- <input type="text" class="email" name="Last Name" placeholder="Last Name" required=""> -->
					</div> 
					<div class="col-md-5 col-sm-5 contact-right agileits-w3layouts">
						<textarea name="Message" placeholder="Message" required=""></textarea>
						<input type="submit" value="Submit">
					</div>
					<div class="clearfix"> </div> 
				</form>
			</div>  

	</div>
</div>
<!-- //contact -->

<!-- copyright -->
<div class="copyright-agile">
	<p>&copy; 2017 We Care. All rights reserved | Design by <a href="http://facebook.com/bashpo.1995">team@bashpo</a></p>
</div>
<!-- //copyright -->



<script src="{!! asset('js/easy-responsive-tabs.js')!!}"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>





<!--banner Slider starts Here-->
		<script src="{!! asset('js/responsiveslides.min.js')!!}"></script>
							<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:true,
									nav:false,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>

							<!--banner Slider starts Here-->
							<!--start-date-piker-->
							<link rel="stylesheet" href="{!! asset('css/jquery-ui.css')!!}" />
									<script src="{!! asset('js/jquery-ui.js')!!}"></script>
									<script>
										$(function() {
										$( "#datepicker" ).datepicker();
										});
									</script>
							<!--/End-date-piker-->
							
<!-- js for smooth scrollings -->
	<script src="{!! asset('js/SmoothScroll.min.js')!!}"></script>
<!-- js for smooth scrollings -->

<!-- flexisel -->
	<script type="text/javascript" src="{!! asset('js/jquery.flexisel.js')!!}"></script>
	<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: false,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:640,
						visibleItems:2
					},
					tablet: { 
						changePoint:768,
						visibleItems: 3
					}
				}
			});
			
		});
	</script>
<!-- //flexisel -->

<!-- start-smooth-scrolling -->
<script type="text/javascript" src="{!! asset('js/move-top.js')!!}"></script>
<script type="text/javascript" src="{!! asset('js/easing.js')!!}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smooth-scrolling -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->


<!-- Scrolling Nav JavaScript --> 
    <script src="{!! asset('js/scrolling-nav.js')!!}"></script>
<!-- //fixed-scroll-nav-js --> 







</body>
</html>