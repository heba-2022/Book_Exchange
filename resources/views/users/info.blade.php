@extends('users.profile')
@section('style')
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

/*  delete buttonD*/
/* Set a style for all buttons */
.buttonD {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  /* width: 100%; */
  opacity: 0.9;
  border-radius: 16px;

}
​
.buttonD:hover {
  opacity:1;
}
​
/* Float cancel and delete buttons and add an equal width */
.cancelbtn, .deletebtn {
  float: left;
  width: 50%;
}

/* Add a color to the cancel button */
.cancelbtn {
  background-color: #ccc;
  color: black;
}

/* Add a color to the delete button */
.deletebtn {
  background-color: #f44336;
}

/* Add padding and center-align text to the container */
.container {
  padding: 16px;
  text-align: center;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* The Modal Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and delete button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .deletebtn {
    width: 100%;
  }
}

.form-control {
  text-align: right;
}



/*  */
    </style>

@endsection
@section('content')


<!-- المعلومات الشخصية -->
    <div style=" margin: 10% 5% auto 20%;  text-align: right;    ">
        <h4 style=" 
        font-size: 30px;
        margin-bottom: 30px;
        color: green;
        ">
            المعلومات الشخصية
        </h4>
        @include('flash-message')

        <form action="{{route('profile.update')}}" method="post">
            @method('put')
            @csrf
          <div class="form-row">
            <div class="form-group col-md-6">
                <label for="user_email">البريد الإلكتروني</label>
                <input maxlength="80 " name="email" value="{{Auth::user()->email}}" type="email" class="form-control"
                    placeholder="البريد الاكتروني">
                  </div>
                  <div class="form-group col-md-6">
                      <label for="user_login"> إسم المستخدم</label>
                      <input maxlength="30" name="name" type="text" value="{{Auth::user()->name}}" class="form-control" placeholder="اسم المستخدم">
                  </div>
              </div> 
              


            <div class="form-row">

            <div class="form-group col-md-4" style="margin-left:auto; margin-right:0; " dir="rtl">
                <label for="user-collage2">القسم</label>
                <select name="id_department"  class="form-control" required style="text-align:right">
   
   @foreach($departments as $department)
       <option value="{{$department->id}}" @if(Auth::user()->id_department==$department->id) selected @endif style="color:black;text-align: right;">{{$department->name}}</option>
       @endforeach
   </select>     
                </div>
                <div class="form-group col-md-4" style="margin-left:auto; margin-right:0;" dir="rtl">
                <label for="user-collage">الكلية</label>
    
                    <select name="id_college"  class="form-control" required style="text-align:right">
   
                 @foreach($colleges as $college)
    <option value="{{$college->id}}"  @if(Auth::user()->id_college==$college->id) selected @endif style="color:black;text-align: right;">{{$college->name}}</option>
    @endforeach
</select>                </div>

            </div>

            <div class="form-row">
              <div class="form-group col-md-6" >
                <label for="meadia"> رابط موقع التواصل الاجتماعي</label>
                <input type="text" value="{{Auth::user()->social_media}}"  name="social_media"class="form-control" >
            </div>
              <div class="form-group col-md-6" >
                <label for="mopile-number"> رقم الجوال</label>
                <input maxlength="10" name="phone" value="{{Auth::user()->phone}}" type="text" class="form-control" placeholder="رقم الجوال">
            </div>

        

          </div>
            <button type="submit" class="btn btn-primary">حفظ</button>
        </form>


    </div>

@endsection

