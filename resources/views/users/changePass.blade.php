@extends('users.profile')
@section('style')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<style>
        .button {
            height: 40px;
            width: 100px;
            border: none;
            color: white;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 18px;
            cursor: pointer;
            border-radius: 16px;
            margin-left: 15px;
            ;

        }

        .button1 {
            background-color: #4CAF50;
        }

        /* Green */

        body {
            font-family: "Lato", sans-serif;
        }

        .sidenav1 {
            height: 60px;
            /* Full-height: remove this if you want "auto" height */
            width: 100%;
            /* Set the width of the sidebar */
            position: fixed;
            /* Fixed Sidebar (stay in place on scroll) */
            z-index: 1;
            /* Stay on top */
            top: 0;
            /* Stay at the top */
            left: 0;
        }







        .sidenav {
            height: 100%;
            width: 200px;
            position: fixed;
            z-index: 1;
            top: 60;
            left: 0;
            background-color: #f8f9fa;
            overflow-x: hidden;
            padding-top: 20px;
            border-right: 1px solid gray;
            position: fixed;
            /* Fixed Sidebar (stay in place on scroll) */

        }

        .sidenav a {
            padding: 6px 6px 6px 32px;
            text-decoration: none;
            font-size: 25px;
            color: green;
            display: block;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .main {
            margin-left: 200px;
            /* Same as the width of the sidenav */
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }

        hr {
            border-top: 1px solid gray;
        }





        .grid-margin-x>.cell {
            width: calc(100% - 1.875rem);
            margin-left: .9375rem;
            margin-right: .9375rem;
        }

        .cell {
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 auto;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            min-height: 0;
            min-width: 0;
            width: 100%;
        }


    </style>
@endsection
@section('content')

<div style=" margin: 10% 5% auto 20%;  text-align: right;    ">
    <h4 style=" font-size: 30px; margin-bottom: 30px;color: green;">
        تغيير كلمة المرور
    </h4>

    @include('flash-message')

        <form action="{{route('profile.changePass')}}" oninput='password2.setCustomValidity(password2.value != password.value ? "لا تتطابق مع كلمة المرور المدخلة " : "")'  method="post">
            @method('put')
            @csrf
    <div class="form-group" >
        <label for="Password" > كلمة المرور الجديدة   </label>
        <input maxlength="30" minlength="6" id="password" name="password" type="password" class="form-control" >
    </div>
    <div class="form-group">
        <label for="Password" >تأكيد كلمة المرور        </label>
        <input maxlength="30" minlength="6"  id="password2" name="password2" type="password" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary" >حفظ</button>
  </form>

  
</div>



@endsection

<!-- حذف الحساب -->
    <!-- <a href="" style="margin-left:20%; color: #c60f13;">حذف الحساب</a> -->
<!--
    <button onclick="document.getElementById('id01').style.display='block'" class="buttonD" style="margin-top:70px; margin-left:20%; background-color: 
    red; width: 110px;">حذف الحساب</button>
    ​
    <div id="id01" class="modal">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
      <form class="modal-content" action="/action_page.php">
        <div class="container">
          <h1>حذف الحساب</h1>
          <p>هل أنت متأكد أنك تريد حذف حسابك نهائيا؟</p>
        
          <div class="clearfix">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn buttonD">الغاء</button>
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="deletebtn buttonD">حذف</button>
          </div>
        </div>
      </form>
    </div>
    ​
    <script>
    // Get the modal
    var modal = document.getElementById('id01');
    ​
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    </script>



-->
