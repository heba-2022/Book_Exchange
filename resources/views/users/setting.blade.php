<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>   
<link rel="stylesheet" type="text/css" href="{{asset('css/signUp.css')}}">
<title>SignUp </title>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>تسجيل حساب جديد</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="{{route('profile.update')}}" method="post">
                    @csrf
                    @method('put')
					<input class="text" type="text" name="name" placeholder="اسم المستخدم" value="{{Auth::user()->name}}" required="" style="text-align: right;">
					<input class="text " type="email" name="email" value="{{Auth::user()->email}}" placeholder="البريد الإلكتروني" required="" style="text-align: right;">
					<input class="text " max-length="10" type="text" name="phone"  value="{{Auth::user()->phone}}" placeholder="ادخل رقم الجوال" required="" style="text-align: right;">
                    <input class="text " type="url" name="social_media"  value="{{Auth::user()->social_media}}" placeholder=" ادخل رابط حسابك على فيسبوك" required="" style="text-align: right;">

                    <select name="id_college"  class="text " required style="text-align:right">
   
                 @foreach($colleges as $college)
    <option value="{{$college->id}}"  @if(Auth::user()->id_college==$college->id) selected @endif style="color:black;text-align: right;">{{$college->name}}</option>
    @endforeach
</select>   <select name="id_department"  class="text " required style="text-align:right">
   
@foreach($departments as $department)
    <option value="{{$department->id}}" @if(Auth::user()->department==$department->id) selected @endif style="color:black;text-align: right;">{{$department->name}}</option>
    @endforeach
</select>                    
                    <input class="text" type="password" name="password" placeholder="كلمة المرر"  style="text-align: right;">
					<input class="text w3lpass" type="password" name="password" placeholder="تأكيد كلمة المرور"  style="text-align: right;">
					<input type="submit" value="تعديل بيانات الحساب">
					<input type="submit" value="رجوع  الى صفحه شخصية" style="background-color:goldenrod;">
				</form>
				



<!-- 		<div class="or-seperator"><b>or</b></div>
 		<div class="social-btn text-center">
			<a href="#" class="btn btn-primary btn-lg"><i class="fa fa-facebook"></i> Facebook</a>
			<a href="#" class="btn btn-info btn-lg"><i class="fa fa-twitter"></i> Twitter</a>
			<a href="#" class="btn btn-danger btn-lg"><i class="fa fa-google"></i> Google</a>
		</div>
-->





				<p><br>
			</div>
		</div>




		
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>