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

    .wpsc_buy_button{
   display:none;
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

<script>
  $(document).ready(function(){
    $("#product_197_submit_button").prop("disabled", false);
});
  $(document).ready(function(){
    $("#product_197_submit_button").show();
});

</script>

</head>
<body>

  <!-- Back to top button -->

  @include('project_layout.hedder')




  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">سجل كمدرب</h1>

      <form class="main-form" method="POST" action="{{url('/saveuserastrainer')}}" enctype="multipart/form-data">
        @csrf
        <div class="row mt-5 " style="text-align: right">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="name" class="form-control" placeholder="الاسم بالكامل" required >
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name="email" class="form-control" placeholder="عنوان البريد الاليكترونى" required>
          </div>
          
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms" >
            
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" name="phone" class="form-control" placeholder="رقم الجوال.." required>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" name="status" class="form-control" placeholder="عدد الساعات المتاحة لك من فضلك ادخلها بالشكل التالى مثل (من 7 صباحا الى 3 عصرا)" required>
          </div>
          
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <label>اضافه الهوية الوطنية او صورة الأقامة</label>
            <input type="file" name="photo_passwpor" class="form-control" placeholder="اضافه الهوية الوطنية او صورة الأقامة" required>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <label> اضافه الهوية الوطنية او صورة الأقامة من الخلف</label>
            <input type="file" name="photo_passport_back" class="form-control" placeholder="اضف صوره شخصية" required>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <label> استماره السيارة</label>
            <input type="file" name="car_form" class="form-control" placeholder="اضف صوره شخصية" required>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <label> التأمين على السيارة</label>
            <input type="file" name="car_insurance" class="form-control" placeholder="اضف صوره شخصية" required>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <label> رخصه القياده من الأمام</label>
            <input type="file" name="license" class="form-control" placeholder="اضف صوره شخصية" required>
          </div>
        </div>
        <div class="nav-link"  > 
          <select name="city" style="width:300px;color: black">
            <option >اختر المدينه</option>
            
          
            @foreach ($city as $item)
                <option style="color: black">
                  {{$item->city}}
                </option>
            @endforeach
        </select>
        </div>
        
        <div class="nav-link"  > 
          <select name="station" style="width:300px;color: black">
            <option >اختر المنطقه</option>
            
          
            @foreach ($station as $item)
                <option style="color: black">
                  {{$item->station}}
                </option>
            @endforeach
        </select>
        </div>
        <div class="nav-link"  > 
          <select name="payway" style="width:300px;color: black">
            <option >اختر طريقه الدفع</option>
            
          
            <option style="color: black">
              فيزا
            </option>
                <option style="color: black">
                  كاش
                </option>
           
        </select>
        </div>
       <input type="text"  class="wpsc_buy_button" name="usertype" value="2" hidden />
       
       <div class="block mt-4">
        <label for="" class="flex items-center">
            <x-jet-checkbox id="" name=""  required/>
            <span class="ml-2 text-sm text-gray-600">{{ __('الالتزام بكافة قوانين القيادة على الطرق') }}</span>
        </label>
    </div>
    <div class="block mt-4">
        <label for="" class="flex items-center">
            <x-jet-checkbox id="" name=""  required/>
            <span class="ml-2 text-sm text-gray-600">{{ __('عدم التدريب في المناطق المزدحمه او السريعة') }}</span>
        </label>
    </div>
    <div class="block mt-4">
      <label for="" class="flex items-center">
          <x-jet-checkbox id="" name="" required/>
          <span class="ml-2 text-sm text-gray-600">{{ __('احضار الوثائق الضروريه مثل الرخصة / التامين اثناء التاهيل 
            تنبه للمدرب') }}</span>
      </label>
  </div>
  <div class="block mt-4">
    <label for="" class="flex items-center">
        <x-jet-checkbox id="" name=""  required/>
        <span class="ml-2 text-sm text-gray-600">{{ __('لا تتكفل الجهة المشرفة على منصة قياده على اي حوادث مرورية ناجمه من قائد المركبة ايا كان ولا يتم الرجوع اليها تحت اي ظرف') }}</span>
    </label>
</div>

      <button id="demo" onload="fun()" type="submit" style=" background-color:#00d9a5;font-size: 30px; width:360px; "  class="btn btn-primary mt-3 wow zoomIn">سجل</button>
      </form>
    </div>
  </div> <!-- .page-section -->




  @include('project_layout.footer')


<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

  
</body>
</html>