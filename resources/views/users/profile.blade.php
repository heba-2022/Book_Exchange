<html>


<head>
  <link  rel="stylesheet" href="{{asset('css/personal.css')}}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
@yield('style')

</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light sidenav1">



        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

               <li class="nav-item">
                    <a href="{{route('home')}}"> <img src="{{asset('images/9.png')}}" alt="" title="" width="50px" height="50px"></a>
                </li>
                <li>
                <a href="{{route('logout')}}">
                    <img src="{{asset('images/logout.png')}}" width="50px" height="50px" style="margin-right: 10px; ">
                    </a>
                 </li>
                <li class="nav-item">
                    <a href="{{route('books.create')}}">  <button class="button button1"><b>كتاب جديد</b></button></a>
                </li>

                
            </ul>
            <form class="form-inline my-2 my-lg-0" action="{{route('profile.books.search')}}" method="post">        
              @csrf     
               <button class="btn btn-outline-success my-2 my-sm-0" type="submit">بحث</button>
                <input class="form-control mr-sm-2" name="title" type="search" placeholder="بحث عن كتاب" aria-label="Search">
            </form>
        </div>
    </nav>
    <div class="sidenav">
        <a href="{{route('profile')}}">المعلومات الشخصية</a>
        <hr>
        <a href="{{route('profile.change')}}">تغيير كلمة المرور</a>
        <hr>
        <!-- <a href="#">الشبكات الاجتماعية</a>
        <hr> -->
        <!-- <a href="#">تفضيلات التنبيهات</a>
        <hr> -->
        <a href="{{route('profile.books',Auth::user()->id)}}"> الكتب المضافة</a>
        <hr>
    </div>



<!-- المعلومات الشخصية -->
@yield('content')    ​
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





</body>

</html>