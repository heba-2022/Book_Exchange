<!DOCTYPE html>
<html>
<head>
	<title>IUG BOOKS</title>
  <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome JS-->
	<!------ Include the above in your HEAD tag ---------->

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
    

    
    <!-- FontAwesome JS-->
    <script defer src="{{asset('assets/fontawesome/js/all.min.js')}}"></script>
	
    <!-- for div -->  
    <link id="theme-style" rel="stylesheet" href="{{asset('assets/css/theme.css')}}">
    <link id="theme-style" rel="stylesheet" href="{{asset('assets/css/theme2.css')}}">
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" id="bootstrap-css">
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<!------ Include the above in your HEAD tag ---------->



<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<header class="header fixed-top">	    
        <div class="branding docs-branding">
            <div class="container-fluid position-relative py-2">
            <div class="docs-top-utilities d-flex align-items-center " >
	                <div class="site-logo">
						<a class="navbar-brand" href="{{route('home')}}">
            <img class="logo-icon mr-2" src="{{asset('images/9.png')}}"  style="height: 60px; width: 60px;">

							<span class="logo-text" style="color:green;font-size:25px;">مكتبتي</span>
						</a></div>    
                </div><!--//docs-logo-wrapper-->


	            <div class="docs-logo-wrapper ">
              <a href="{{route('books.create')}}">  <button class="button button1"><b>كتاب جديد</b></button></a>

              <a href="{{route('logout')}}">
<img src="{{asset('images/logout.png')}}" width="50px" height="50px" style="margin-right: 10px; ">
</a>
				
					</div><!--//docs-top-utilities-->

			

            </div><!--//container-->
        </div><!--//branding-->
    </header><!--//header-->
    
<div class="page-header theme-bg-dark py-5 text-center position-relative">
	    <div class="theme-bg-shapes-right"></div>
	    <div class="theme-bg-shapes-left"></div>
	    <div class="container">
		    <h1 class="page-heading single-col-max mx-auto" style="font-size:60px;float:center;text-align:center">مكتبتي</h1>
		    <div class="page-intro single-col-max mx-auto"></div>
		    <div class="main-search-box pt-3 d-block mx-auto">
                 <form class="search-form w-100" method="post" action="{{route('books.search')}}">
                     @csrf
		            <input type="text" placeholder="...ابحث عن كتابك" name="title"  class="form-control search-input">
		            <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
		        </form>
             </div>
	    </div>
    </div><!--//page-header-->
  

<section class="our-publication pt-100 pb-70">
            
	
<div class="container">
		<div class="row" style="margin-left: 79%; margin-bottom: 20px;">
		<form action="{{route('books.college')}}" method="post">
			@csrf
			<label for=""  style="   float:right; font-weight: bold; margin-left: 15px;  ">:تصفية 				<svg xmlns="http://www.w3.org/2000/svg" style="height: 20px; width: 20px;" viewBox="0 0 490 490" id="controls"><path d="M17.2 262.1h219c7.7 31.7 36.3 55.3 70.4 55.3s62.6-23.6 70.4-55.3h95.8c9.5 0 17.2-7.7 17.2-17.2s-7.7-17.1-17.2-17.1H377c-7.7-31.7-36.3-55.3-70.4-55.3s-62.6 23.6-70.4 55.3h-219c-9.5 0-17.2 7.7-17.2 17.1.1 9.6 7.8 17.2 17.2 17.2zm289.4-55.2c21 0 38.1 17.1 38.1 38.1s-17.1 38.1-38.1 38.1-38.2-17.1-38.2-38.1 17.1-38.1 38.2-38.1zM17.2 428.4h105.1c7.7 31.7 36.3 55.3 70.4 55.3s62.6-23.6 70.4-55.3h209.7c9.5 0 17.2-7.7 17.2-17.1 0-9.5-7.7-17.2-17.2-17.2H263.1c-7.7-31.7-36.3-55.3-70.4-55.3s-62.6 23.6-70.4 55.3H17.2c-9.5 0-17.2 7.7-17.2 17.2.1 9.4 7.8 17.1 17.2 17.1zm175.5-55.3c21 0 38.1 17.1 38.1 38.1s-17.1 38.1-38.1 38.1c-20.7 0-37.6-16.6-38.1-37.3v-.9-.9c.5-20.5 17.4-37.1 38.1-37.1zM17.2 95.9h105.1c7.7 31.7 36.3 55.3 70.4 55.3s62.6-23.6 70.4-55.3h209.7c9.5 0 17.2-7.7 17.2-17.2s-7.7-17.1-17.2-17.1H263.1c-7.7-31.7-36.3-55.3-70.4-55.3s-62.6 23.6-70.4 55.3H17.2C7.7 61.6 0 69.3 0 78.7c.1 9.5 7.8 17.2 17.2 17.2zm175.5-55.3c21 0 38.1 17.1 38.1 38.1s-17.1 38.1-38.1 38.1c-20.7 0-37.6-16.6-38.1-37.3v-.9-.9c.5-20.4 17.4-37.1 38.1-37.1z" fill="currentColor"></path></svg>
			</label>
					  <select name="id_college"  id="college" data-trigger="" name="choices-single-defaul" style="   float:right; ">
								  <!--  المفروض من الداتا بيس-->
								  <option placeholder="" value="0">  اختر الكلية </option>
								  @foreach($colleges as $college)
								  <option placeholder="" value="{{$college->id}}"  > {{$college->name}}   </option>
								  @endforeach
					  </select>
					  <button type="submit"><i class="fa fa-search"></i></button>
		  </form>
		</div>
<hr>


          
    @include('flash-message')

    <div class="row">
    @if($books)
@foreach($books as $book)


<div class="col-sm-6 col-lg"  style="margin-right:10px;"> 		
  <div class="single-publication"  style="width:243px;">
    <figure>
      <a href="{{route('books.show',$book->id)}}">
        <img src="{{asset('images/books/'.$book->image)}}" alt="no_image"  style="height:243px; width:243px;" alt="Book Image">
      </a>

     
    </figure>

    <div class="publication-content">
      <h3><a href="{{route('books.show',$book->id)}}">{{$book->title}} </a></h3>
      
      <h4 class="price">@if($book->price==0.0)اهداء @else{{ $book->price}} شيكل @endif</h4>
    </div>
    @if(Auth::check()&&Auth::id()==$book->user->id)
    <div class="add-to-cart">
    <a href="{{route('books.edit',$book->id)}}" class="btn btn-warning"> تعديل </a>
    <a href="{{route('books.destroy',$book->id)}}" class="btn btn-danger">  حذف</a>
    </div>

    @else
    <div class="add-to-cart">
    <a href="{{route('profile',$book->user->id)}}" class="default-btn">تواصل مع البائع</a>
    </div>
    @endif

  </div>
</div>
@endforeach

@else
<h3>لا يوجد كتب مضافة</h3>
@endif
</div>
</section>

 <!-- Javascript -->          
 <script src="{{asset('assets/plugins/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('assets/plugins/popper.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>  

</body>
</html>