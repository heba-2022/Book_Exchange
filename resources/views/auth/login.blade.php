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
		<h1>تسجيل  الدخول</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
                @include('flash-message')
                <form method="POST" action="{{ route('login') }}" >
                    @csrf
					<input class="text email" type="email" name="email" placeholder="البريد الإلكتروني" required="" style="text-align: right;">
					<input class="text" type="password" name="password" placeholder="كلمة المرر" required="" style="text-align: right;">
                    <br>
                    <div class="wthree-text">
						<label class="anim" style ="text-align:right;float:right;padding-right:30px">
                      <input type="checkbox" name="remember" class="checkbox" >
                        </label>
                      
                        <span style="text-align:right;color:aliceblue;float:right;padding-right:10px"> تذكر كلمة السر </span>

						<div class="clear"> </div>
					</div>
					<input type="submit" value=" تسجيل الدخول">
				</form>
				





				<p><br>
ليس  لديك حساب؟ <a href="{{route('register')}}"> سجل حساب جديد من هنا</a></p>
			</div>
		</div>




	<!-- //main -->
</body>
</html>