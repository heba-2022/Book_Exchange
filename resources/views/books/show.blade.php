<!DOCTYPE html>
<html>
<head>
  <title>تفاصيل الكتاب </title>
  <link rel="stylesheet" type="text/css" href="{{asset('css/book.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

  <div class="column" style="margin-top:100px"> 
    <h1 class="name_book" style="text-align:right;margin-right:40px">{{$book->title}}  </h3>
    <p class="detail">اسم صاحب الكتاب        <span class="pp">{{$book->user->name}} </span>  </p>
    <p class="detail">رقم جوال صاحب الكتاب        <span class="pp">{{$book->user->phone}} </span>  </p>
    <p class="detail">وصف الكتاب <span class="pp">{{$book->describtion}} </span> </p>
    <p class="detail">سعر الكتاب <span class="pp">@if($book->price==0.0)اهداء @else{{ $book->price}} شيكل @endif </span> </p>
    <p class="detail">حالة الكتاب <span class="pp">{{$book->describtion}} </span> </p>
     <p class="detail">تاريخ عرض الكتاب 
     <span class="pp">{{$book->getPublicationDateAttribute()}}</span> </p>


    <button class="button">
        
        <a href="{{route('profile',$book->user->id)}}" class="lin" style="font-size: 18px;color:darkgray " >مراسلة صاحب الكتاب  </a>
      </button>
      <button class="button" style="background-color:darkgoldenrod;margin-top:5px;color:darkgray">
        <a href="{{route('books.index')}}" class="lin" style="font-size: 18px; color:darkgray">رجوع الى الصفحه الكتب    </a>
      </button>
  </div>

  <div class="column2">
        <img src="{{url('/images/books/'.$book->image)}}" alt="no_image" style="width:35%">
  </div>
<!-- .$book->image -->
</body>
</html>