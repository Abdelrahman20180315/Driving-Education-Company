<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>مدرسه تعليم القياده</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
  <style>
    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      max-width: 300px;
      margin: auto;
      text-align: center;
      font-family: arial;
    }
    
    .price {
      color: grey;
      font-size: 22px;
    }
    
    .card button {
      border: none;
      outline: 0;
      padding: 12px;
      color: white;
      background-color: #000;
      text-align: center;
      cursor: pointer;
      width: 100%;
      font-size: 18px;
    }
    
    .card button:hover {
      opacity: 0.7;
    }
    </style>
<style>
    /* Dropdown Button */
    .dropbtn {
        background-color: transparent;
        color: white;
        border: none;
    }

    /* The container <div> - needed to position the dropdown content */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #383838;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

        /* Links inside the dropdown */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            margin-right: 0 !important;
        }

            /* Change color of dropdown links on hover */
            .dropdown-content a:hover {
                color: #40b274;
            }

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
        display: block;
    }

    /* Change the background color of the dropdown button when the dropdown content is shown */
    .dropdown:hover .dropbtn {
        color: #40b274;
    }

    .tt-description {
        direction: rtl;
    }
</style>

</head>
<body>

  <!-- Back to top button -->

  @include('project_layout.hedder')



  <div class="page-section pb-0">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 py-3 wow fadeInUp" style="width:500px" >
          <h1> اهلا ومرحبا بكم <br> عن المدرسة
          </h1>
          <p class="text-grey mb-4" >  
            
                
              
              
            <li>
              @foreach ($trainer as $item)
                  <div>
                    <h1>{{$item->name}}</h1>
                    <h1>{{$item->email}}</h1>
                    <h1>{{$item->phone}}</h1>
                    <h1>{{$item->city}}</h1>
                    <img src="image_profileFolder/{{$item->profile_image}}"  />

                  </div>
              @endforeach
            </li>
          </p>

            <p class="text-grey mb-4" >  <li class="nav-item active" >
              
             
              <a  class="nav-link"  href="#"> <select style="width:500px">
                <option>اختر طريقه الدفع</option>
                <option>كاش</option>
                <option>ميزه</option>
              </select></a>
            </li>
              </p>
          
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
         
        </div>
      </div>
    </div>
  </div> <!-- .bg-light -->
</div> <!-- .bg-light -->

  

@include('project_layout.footer')


<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>