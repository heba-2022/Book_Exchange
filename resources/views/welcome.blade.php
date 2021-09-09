<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>تبادل كتبك || الصفحة الرئيسية</title>
    <!-- Required meta tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="copyright" content="" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/animate/animate.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/owl/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css?v=1.0')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script defer src="{{asset('assets/fontawesome/js/all.min.js')}}"></script>
	
    <!-- for div -->  
    <link id="theme-style" rel="stylesheet" href="{{asset('assets/css/theme.css')}}">
    <link id="theme-style" rel="stylesheet" href="{{asset('assets/css/theme2.css')}}">
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" id="bootstrap-css">
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<!------ Include the above in your HEAD tag ---------->



<!-- jQuery library -->
<!-- Latest compiled JavaScript -->



    <style>
        .numberCircle {
            display: inline-block;
            line-height: 0px;

            border-radius: 50%;
            border: 2px solid;

            font-size: 32px;
        }

        .numberCircle span {
            display: inline-block;

            padding-top: 50%;
            padding-bottom: 50%;

            margin-left: 8px;
            margin-right: 8px;
        }

        .avatar {
            color: #fff;
            /* margin: 0 auto 30px;  */
            margin-left: 30px;
            text-align: center;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            z-index: 9;
            background: #4aba70;
            /* padding: 15px; */
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
        }

        .avatar i {
            font-size: 40px;
        }
    </style>
</head>

<body>
    <!-- Side menu -->
    <aside class="side-menu">
        <button class="close-menu btn btn-light">
            <i class="fa fa-times fa-fw"></i>
        </button>

        <div class="d-table w-100 h-100">
            <div class="d-table-cell" style="vertical-align: middle;">
                <nav class="nav justify-content-center">
                    <a class="nav-link" href="#">تواصل معنا</a>
                    <a class="nav-link" href="#">من نحن؟</a>
                    <a class="nav-link" href="#">الكتب</a>
                    <a class="nav-link" href="#">كيف يعمل؟</a>
                    <a class="nav-link" href="#">اعلانات</a>
                    <a class="nav-link" href="#">الصفحة الرئيسية<span class="sr-only">(current)</span></a>

                </nav>
            </div>
        </div>
    </aside>
    <!-- Side menu -->

    <!-- Start main-header -->
    <header class="main-header" id="mainNavigation">
        <nav class="navbar navbar-expand-lg navbar-light px-0 main-navigation">
            <div class="container">
                <a class="navbar-brand" href="{{route('home')}}">
                    <img src="{{asset('images/9.png')}}" alt="" title="" />
                </a>
                <button class="navbar-toggler menu-btn" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">


                        <li class="nav-item">
                            <a class="nav-link" href="#contact-us">تواصل معنا</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#market">كيف يعمل؟</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">من نحن</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">اعلانات</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#projects">الكتب</a>

                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#slider">الصفحةالرئيسية <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                    <!-- <div class="avatar"><a href="#" style="color: rgb(150, 120, 76);"><i class="material-icons" ></i>
                    </a> -->



                    <!-- Example single danger button -->
                    <div class="btn-group">
                        <button type="button" class="avatar" class="btn btn-danger dropdown-toggle"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <!-- icon person -->
                            <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-person-fill"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg>
                        </button>
                        <div class="dropdown-menu">
                            @if(Auth::check())
                            <a class="dropdown-item" href="{{route('profile')}}">الملف الشخصي</a>

                            <a class="dropdown-item" href="{{route('logout')}}">تسجيل الخروج</a>
@else
                            <a class="dropdown-item" href="{{route('login')}}">تسجيل الدخول</a>
                            <a class="dropdown-item" href="{{route('register')}}">إنشاء حساب جديد</a>
                            @endif
                            <div class="dropdown-divider"></div>
                        </div>
                    </div>
                </div>
                <!-- <ul class="navbar-nav ml-auto icon-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fab fa-facebook-f fa-fw"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fab fa-instagram fa-fw"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fab fa-twitter fa-fw"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fab fa-linkedin-in fa-fw"></i></a>
                        </li>
                    </ul> -->
            </div>
            </div>
        </nav>
    </header>
    <!-- main-header -->

    <!-- main slider -->
    <section class="main-slider" id="slider">

        <div class="owl-carousel">
            <article class="slider-item">
                <img src="{{asset('images/header.png')}}" alt="" title="" loading="lazy" />
                <div class="slider-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <h1>مكتبتي</h1>
                                <!-- <span class="numberCircle"><span> 30</span></span> -->

                                <p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="slider-item">
                <img src="{{asset('images/header.png')}}" alt="" title="" loading="lazy" />
                <div class="slider-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <h1>مكتبتي</h1>
                                <p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>
    <!-- main slider -->

    <!-- steps -->
    <section class="steps" id="steps">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <article class="step-item">
                        <figure>
                            <img src="https://cdn.shortpixel.ai/client/to_webp,q_glossy,ret_img,w_118
                            ,h_118/http://beeapp.io/wp-content/uploads/2019/08/Lend.png" alt="" title="" />
                        </figure>

                        <h4>اعارة الكتب</h4>
                        <p>
                            مشاركة أو تبادل الكتب المستعملة الموضوعة على الرف
                        </p>
                    </article>
                </div>
                <div class="col-lg-4">
                    <article class="step-item">
                        <figure>
                            <img src="https://cdn.shortpixel.ai/client/to_webp,q_glossy,ret_img,w_137,h_118
                            /http://beeapp.io/wp-content/uploads/2019/08/02-With-out-Shadow_1.png" alt="" title="" />
                        </figure>

                        <h4>استعارة الكتب</h4>
                        <p>
                            هل تبحث عن كتاب لفترة طويلة؟
                            هنا يمكنك ايجاد الكتاب اللذي تريدد بكل سهولة.
                        </p>
                    </article>
                </div>
                <div class="col-lg-4">
                    <article class="step-item">
                        <figure>
                            <img src="https://cdn.shortpixel.ai/client/to_webp,q_glossy,ret_img
                            ,w_118,h_118/http://beeapp.io/wp-content/uploads/2019/08/Sell.png" alt="" title="" />
                        </figure>

                        <h4>بيع الكتب</h4>
                        <p>
                            لا تحتاج كتاب تملكه؟
                            حسنا,قد يحتاجه شخص اخر
                            قم ببيع الكتب عبر الإنترنت بسهولة.

                        </p>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- steps -->



    <!-- books -->
    <section class="projects" id="projects">
        <div class="container">
            <header class="sec-title text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h3>جد كتابك الآن</h3>
                        <p>
                            ابحث عن الكتاب اللذي تحتاجه او قم بعرض كتابك للبيع او المبادلة

                        </p>
                    </div>
                </div>
            </header>
            @if($books)

            <div class="row align-items-end">
                <!-- <div class="col-lg-6">
                    <div class="project-sider">
                        <div class="owl-carousel">
                            <article class="project-item">
                                <img src="{{asset('images/project.png')}}" alt="" title="" />
                            </article>
                            <article class="project-item">
                                <img src="{{asset('images/about.png')}}" alt="" title="" />
                            </article>
                        </div>
                    </div>
                </div> -->

                <div class="col-lg-12" style="direction:rtl">
                    <div class="right-project">
                        <!-- <div class="text-slider">
                            <div class="owl-carousel">
                                <div class="item">
                                    <h4>Excepteur sint occaeuiecat cupidatat.</h4>

                                    <p>
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est eopksio laborum. Sed ut perspiciatis unde omnis istpoe natus error sit voluptatem accusantium doloremque eopsloi laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunot explicabo. Nemo ernim ipsam 
                                    </p>
                                </div>
                                <div class="item">
                                    <h4>Excepteur sint occaeuiecat cupidatat.</h4>

                                    <p>
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est eopksio laborum. Sed ut perspiciatis unde omnis istpoe natus error sit voluptatem accusantium doloremque eopsloi laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunot explicabo. Nemo ernim ipsam 
                                    </p>
                                </div>
                            </div>
                        </div> -->

 


                        <div id='carousel-custom-dots' class="row">
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

    <div class="add-to-cart">
      <a href="{{route('profile',$book->user->id)}}" class="default-btn">تواصل مع البائع</a>
    </div>
  </div>
</div>


                                      @endforeach 
                            </div>

                    <a href="{{route('books.index')}}" style="position:absolute; left:10px; "><b>عرض المزيد</b></a>

                </div>
            </div>
        </div>
        @endif
    </section>
    <!-- books -->

<!-- ------------------------------------------------------------------------ -->












    <!-- Ads -->
    <section class="services" id="services">
        <!-- Scrolling Marquee Banner / Moving Text -->
        <div align="center">
            <marquee behavior="alternate" bgcolor="#bb3434" direction="left" height:="" loop="7" scrollamount="1"
                scrolldelay="2" width="100%">
                <span style="font-size: 20px;color:#FFFFFF">
                    آخر الأخبار</span></marquee>
        </div>

        <!-- slider -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100"
                    src = "{{asset('images\1.jpg')}}"
                        alt="First slide" style="width:100%; height: 400px;">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100"
                    src = "{{asset('images\2.jpg')}}"
                        alt="Second slide" style="width:100%; height: 400px;">
 
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100"
                    src = "{{asset('images\3.jpg')}}"
                        alt="Third slide" style="width:100%; height: 400px;">

                </div>  
                              <div class="carousel-item">
                    <img class="d-block w-100"
                    src = "{{asset('images\4.jpg')}}"
                        alt="Third slide" style="width:100%; height: 400px;">

                </div>
            </div>
            <!--  indicators -->
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </section>




























<!-- ------------------------------------------------------------------------ -->







    <!-- About us -->
    <section class="about" id="about">
        <div class="container">
            <div class="row row-rev">
                <div class="col-lg-5">
                    <figure class="about-image">
                        <img src="{{asset('images\coronavirus-books.jpg')}}" alt="" title="" />
                    </figure>
                </div>
                <div class="col-lg-7">
                    <div class="about-tabs">
                        <h3>من نحن؟</h3>
                        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true">الوصف</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                    aria-controls="profile" aria-selected="false">الرؤية</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                    aria-controls="contact" aria-selected="false">Mision</a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" id="values-tab" data-toggle="tab" href="#values" role="tab"
                                    aria-controls="values" aria-selected="false">القيم</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="about-text">
                                    <p style="text-align: right;">
                                        ماهو موقع مكتبتي  ؟
                                        <br>
                                        أول منصة إلكترونية في الجامعة الإسلامية لمشاركة و تبادل المواد العلمية عبر
                                        الإنترنت

                                    </p>
                                    <p style="text-align: right;">
                                       هو موقع الكتروني يتيح لك مشاركة وتبادل المواد الدراسية عبر الإنترنت
                                        مع طلاب و طالبات لاتعرفهم بالضرورة
                                    </p>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                            </div>

                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                            </div>

                            <div class="tab-pane fade" id="values" role="tabpanel" aria-labelledby="values-tab">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About us -->

    <!-- market -->
    <section class="market" id="market">
        <div class="container">
            <header class="sec-title text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h3>كيف يعمل؟ </h3>
                        <p>
                            أعرض كتبك القديمة للبيع أو للتبادل بخطوات سهلة
                        </p>
                    </div>
                </div>
            </header>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <article class="step-item">
                        <figure>
                            <img src="{{asset('images\swap.png')}}" alt="" title="" />
                        </figure>
                        <h4>
                            إتمام العملية
                        </h4>
                        <p>
                            قم بمقابلة الطرف الآخر في المكان والموعد المحدد لإتمام عملية البيع أو التبادل
                        </p>
                    </article>
                </div>
                <div class="col-lg-4">
                    <article class="step-item">
                        <figure>
                            <img src="{{asset('images\sent.png')}}" alt="" title="" />
                        </figure>
                        <h4>
                            التواصل
                        </h4>
                        <p>
                            تصفح الكتب واختر الكتاب الذي يعجبك ثم أرسل رسالة إلى صاحب الكتاب بها تفاصيل عرض الشراء أو
                            التبادل
                        </p>
                    </article>
                </div>
                <div class="col-lg-4">
                    <article class="step-item">
                        <figure>
                            <img src="{{asset('images\list.png')}}" alt="" title="" />
                        </figure>
                        <h4>
                            إضافة كتاب
                        </h4>
                        <p>
                            أضف الكتب التي تملكها وتريد مبادلتها أو بيعها
                        </p>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- market -->

    <!-- Contact-->
    <section class="contact-us" id="contact-us">
        <div class="container">
            <h3>تواصل معنا</h3>
            <form class="contact-form"  action="{{ url('contact-us') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="اسم المستخدم" class="form-control" />
                        </div>
                    </div>
                    <!-- <div class="col-lg-4">
                        <div class="form-group">
                            <input type="tel" name="" placeholder="Phone Number" class="form-control" />
                        </div>
                    </div> -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="email" name="email"  placeholder="البريد الالكتروني" class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message_body" placeholder="نستقبل اقتراحاتكم واستفساراتكم هنا ....." rows="8"></textarea>
                </div>
                <div class="form-group text-right">
                    <button type="submit"  class="btn btn-warning">ارسال</button>
                </div>
            </form>
        </div>
    </section>

    <!-- footer -->
    <footer class="main-footer" id="footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-sm-12">
                    <div class="footer-logo">
                        <a href="#">
                            <img src="{{asset('images/9.png')}}" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="location-list">
                        <ul class="list-unstyled">
                            <li class="media">
                                
                                <div class="media-body">
                                    <p style="text-align: right;" >العنوان </p>
                                    <p style="text-align: right;">غزة - فلسطين</p>
                                    <p style="text-align: right;"> كلية تكنولوجيا المعلومات </p>
                                </div>
                                <i class="fas fa-map-marker-alt fa-fw"></i>
                            </li>
                            <li class="media">
                                <div class="media-body">
                                    <p style="text-align: right;">+97054103321</p>
                                </div>               
                                <i class="fas fa-phone fa-fw"></i>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer-social">
                        <h4>تابعونا على </h4>
                        <ul class="list-unstyled d-flex">
                            <li><a href=""><i class="fab fa-youtube fa-fw"></i></a></li> 
                            
                            <li><a href="https://www.facebook.com/he.sa.988" target="_blank"><i class="fab fa-twitter fa-fw"></i></a></li>
                            <li><a href="https://www.instagram.com/he_ba5/" target="_blank" ><i class="fab fa-instagram fa-fw"></i></a></li>
                            <li><a href="https://www.facebook.com/he.sa.988" target="_blank" ><i class="fab fa-facebook-f fa-fw"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js')}}, then Bootstrap JS -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('plugins/animate/wow.min.js')}}"></script>
    <script src="{{asset('plugins/owl/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/scripts.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('assets/plugins/popper.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>  




</body>

</html>