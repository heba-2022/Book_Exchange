<html>
<head>
	<title>إضافة كتاب جديد </title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/addbook.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script type="text/javascript">

function ShowHideDiv() {
        var chkYes = document.getElementById("chkYes");
        var dvtext = document.getElementById("dvtext");
        dvtext.style.display = chkYes.checked ? "block" : "none";
    }

</script> 
</head>
<body>
    
<div class="container">
    <header class="header">

        <h1 id="title" class="text-center">
            
        <a class="navbar-brand" href="http://127.0.0.1:8000">
                    <img src="http://127.0.0.1:8000/images/9.png" style="width: 55; height:55px;" alt="" title="">
                </a>
        إضافة كتاب جديد 
        </h1>
       <!--  <p id="description" class="description text-center">
            We always love to hear from you!
        </p> -->
    </header>
    @include('flash-message')
    <form  id="survey-form" action="{{route('books.store')}}" method="post" enctype="multipart/form-data">
@csrf
    	<!-- add book  -->
    
    <div class="Neon Neon-theme-dragdropbox">
       <input 
       style="z-index: 999; opacity: 0; width: 320px; height: 200px; position: absolute; right: 0px; left: 0px; margin-right: auto; margin-left: auto;" name="image" 
       id="filer_input2" type="file" required>
        <div class="Neon-input-dragDrop">
        <div class="Neon-input-inner">
        <div class="Neon-input-icon">
        <i class="fa fa-file-image-o"></i>
    </div><div class="Neon-input-text"><h3>قم بوضع صورة غلاف الكتاب  هنا</h3> <span style="display:inline-block; margin: 15px 0">أو </span></div><a class="Neon-input-choose-btn blue">اختيار الملف </a></div></div>
        </div>
<!-- name of book  -->

 <div class="form-group">
            <label id="name-label" for="name" >اسم الكتاب </label>
            <input
                    type="text"
                    name="title"
                    id="name"
                    class="form-control"
                    required
            />
        </div>
       
        <div class="form-group">
          <label id="status" for="status">حالة الكتاب </label>
          <select id="dropdown" name="state" class="form-control" style="text-align: right;"  dir="rtl"  required>
                <option disabled selected value>اختر حالة الكتاب </option>
                <option value="ممتازة  ">ممتازة </option>
                <option value="جيد جداً">جيد جداً</option>
                <option value="جيد ">جيد</option>
            </select>
           
        </div>
        <div class="form-group">
            <p style="text-align: right;">الكلية </p>
            <select id="id_college" name="id_college" class="form-control" style="text-align: right;"   dir="rtl" required>
                <option  selected  value ='100'>اختر الكلية الذي ينتمي له الكتاب </option>
             @foreach($colleges as $college)
             <option value="{{$college->id}}"    > {{$college->name}}</option>
@endforeach
            </select>
        </div>

        <div class="form-group">
            <p style="text-align: right;">القسم </p>
            <select id="id_department" name="id_department" class="form-control" style="text-align: right;"   dir="rtl" required>
                <option   selected  value ='100'>اختر القسم الذي ينتمي له الكتاب </option>
             
            </select>
        </div>

        <div class="form-group">
            <p style="text-align: right;">سعر الكتاب </p>
            <label  id="name-label" >
                <input name="type_price"
                        value="free"
                        class="input-radio"
                        style=" margin-left:-9px;"
                        type="radio"  
                />إهداء </label>
            <label id="name-label" for="chkYes" >
                <input
                        name="type_price"
                        type="radio"
                         value="money"
                        class="input-radio"
                        id="chkYes" 
                         style=" margin-left:-9px;"
                         onclick="ShowHideDiv()" 
                />بيع </label>
              
        <div id="dvtext" style="display: none">
            <hr>
         <p style="text-align: right;">: سعر الكتاب </p>
         <input type="number" id="txtBox" name="price" style="margin-left: 400px;
    color: black;" />
</div>
</div>

        <div class="form-group">
            <p style="text-align: right;">وصف الكتاب </p>
            <textarea
                    id="comments"
                    class="input-textarea"
                    name="describtion" 
                    maxlength="220"

            ></textarea>
        </div>

        <div class="form-group">
            <button type="submit" id="submit" class="submit-button">
                إرسال 
            </button>
        </div>
    </form>
</div>  
  </div>
  <script type="text/javascript">

$('#id_college').change(function(){
var id_college  = $(this).val();    
if( id_college){
    $.ajax({
       type:"GET",
       url:"{{url('/books/geDepartments/')}}?id_college="+id_college,
       success:function(res){               
        if(res){
            $("#id_department").empty();
            $("#id_department").append('<option>  </option>');
            length=res.departments.length;
                for(i=0;i<length;i++){

                $("#id_department").append('<option value="'+res.departments[i].id+'" {{ old("id_department") =='+res.departments[i].id+' ? "selected" : "" }} >'+res.departments[i].name+'</option>');
            }
            
       
        }else{
           $("#id_department").empty();
        }
       }
    });
}else{
    $("#id_department").empty();
}      
});
</script>
</body>
</html>