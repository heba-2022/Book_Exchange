<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>الصفحة الشخصية</title>
                                <!-- Font Awesome Icon Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link  rel="stylesheet" href="{{asset('css/personal.css')}}">


                                <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css' rel='stylesheet'>
            
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript'></script>


                            </head>
                            <body oncontextmenu='return false' class='snippet-body'>
                            <div class="page-content page-container" id="page-content" >
    <div class="padding" >
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-6 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                                <h6 class="f-w-600"> {{$user->name}}</h6>
                                <p> {{$user->department->name}}</p> <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600 r" >المعلومات الشخصية</h6>
                                <div class="row">
 
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600 r">رقم الجوال</p>
                                        <h6 class="text-muted f-w-400 r">{{$user->phone}}</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600 r" >البريد الالكتروني</p>
                                        <h6 class="text-muted f-w-400 r">{{$user->email}}</h6>
                                    </div>
                                </div>
                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600"></h6>
                                <div class="row">
                    
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600 r">القسم</p>
                                        <h6 class="text-muted f-w-400 r">{{$user->department->name}} </h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600 r">الكلية</p>
                                        <h6 class="text-muted f-w-400 r"> {{$user->college->name}}</h6>
                                    </div>

                                </div>
                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600"></h6>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="m-b-10 f-w-600 r">عدد الكتب اللتي تمت اضافتها</p>
                                        <h6 class="text-muted f-w-400 r">{{count($books)}}</h6>
                                    </div>
                                </div>
                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600"></h6>

                                <div style="margin-left:90px; margin-bottom:10px;">   

<a href="{{route('profile.books',$user->id)}}" class="btn btn-success" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true">قائمة الكتب الخاصة به  </a>
</div>
                                <div style="margin-left:87px ;">   
                                   <a href="{{$user->social_media}}" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook " aria-hidden="true"></i>تواصل عبر الفيسبوك</a>
</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                            </body>
                        </html>