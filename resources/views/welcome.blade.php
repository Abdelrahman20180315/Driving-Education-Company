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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<!--Get your own code at fontawesome.com-->
<link href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300&display=swap" rel="stylesheet">

  
  
  
  
  
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

<script type = "text/javascript">  
 
 function myFunction() {
  @if($errors->any())
      alert('{{$errors->first()}}');
  @endif 

}
 
// alert("من فضلك سجل اولا لاول مرة ثم قم بالمحاولة والضغط علي المدربين مرة اخري لتتمكن من البحث عن مدرب او التسجيل كمدرب");

  // function trainnig() { 
  //   @if($errors->any())
  //       alert(<h4>{{$errors->first()}}</h4>);
  //   @endif 

  // }  
</script>       


</head>
<body>

  <!-- Back to top button -->

  @include('project_layout.hedder')

  
  <div class="page-section pb-0">
    <div class="container">
      <div class="row align-items-center" style="background-color: #00ff3713;margin-left: 10px;border-radius: 15px;width:100%;border-width: 0px;border-color: #007bff;">
        
        <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms" style="margin-top: 10px;margin-bottom: 10px;" >
          <div class="img-place custom-img-1">
            <img src="/projImage/car.png" style="border-radius: 15px"   alt="">
          </div>
        </div>
        <div class="col-lg-6 py-3 wow fadeInUp"  style="text-align:right">
          <h1> اهلا ومرحبا بكم <br> 
          </h1>
          <h4>عن المدرسة</h4>
            <p>
              
              بيئة تدريبية لتعليم المرأة السعودية مهارات القيادة المرورية بعد حصولها على رخصة القيادة 
             <br> 
             🚗🧕
            </br>
            تدريب عملي ونظري
            ✅
            </br>
            برامج مناسبة لمستواكِ
            ✅  
          </br>
                   منهج تدريبي متقن
            ✅
            </br>
            تحت إشراف مدربات معتمدات
            ✅
            </p>
          
        </div>
        
      </div>
    </div>
  </div> <!-- .bg-light -->
</div> <!-- .bg-light -->

<!--------------------->
<div class="page-section pb-0">
  <div class="container">
    <div class="row align-items-center" style=" background-color: #00ff3713;margin-left: 10px;border-radius: 15px;width:100%;border-width: 0px;border-color: #007bff;">
      
      <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms"  style="margin-top: 10px;margin-bottom: 10px;">
        <div class="img-place custom-img-1">
          <img src="/projImage/license.png" style="border-radius: 15px"  alt="">
        </div>
      </div>
      <div class="col-lg-6 py-3 wow fadeInUp" style="text-align:right">
        <h1>  <br> 
        </h1>
        <h4>
          ✨
          حصلتي على الرخصة وتبغين معرفة قواعد القيادة الآمنة في الطرقات؟
          
        </h4>
        {{-- <p class="text-grey mb-4">  بناء على التوجيهات الكريمة من معالي رئيس جامعة الملك عبد العزيز أ.د. عبد الرحمن بن عبيد اليوبي أُنشئت مدرسة جدة المتطورة لتعليم القيادة عام 1439 هـ داخل الحرم الجامعي وذلك تماشياً مع القرار السامي الصادر بتاريخ 06-01-1439 هـ، والذي أكد على اعتماد تطبيق أحكام نظام المرور ولائحته التنفيذية، والبدء في إصدار رخص القيادة للنساء في 10-10-1439 هـ، بهدف تعليم القيادة المتزنة والآمنة للمرأة السعودية والتي أصبحت ركيزة أساسية في دفع عجلة التنمية وبناء المجتمع مواكبة بذلك رؤية 2030.
          !</p> --}}
          <p>
                        
            🌟 لا تشيلي هم، احنا لدينا مدربات بأعلى الكفاءات 

        </br>   
        🚗🚦🚏 ينتظرونك لتعليمك أساس التعامل مع السيارات    

        <br>
          
              انضمي إلينا الآن
          </p>
        
      </div>
      
    </div>
  </div>
</div> <!-- .bg-light -->
</div> <!-- .bg-light -->

<!--------------------------------------->

<div class="page-section pb-0">
  <div class="container">
    <div class="row align-items-center" style="background-color: #00ff3713;margin-left: 10px;border-radius: 15px;width:100%;border-width: 0px;border-color: #007bff;">
      
      <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms" style="margin-top: 10px;margin-bottom: 10px;">
        <div class="img-place custom-img-1">
          <img src="/projImage/crash.png" style="border-radius: 15px"   alt="">
        </div>
      </div>
      <div class="col-lg-6 py-3 wow fadeInUp"  style="text-align:right">
        <h1>  <br> 
        </h1>
        <h4>
          عشان تتفادي حوادث الطرق والإحراجات 💥
        </h4>
          <p>
          
            🧕🚗 احجزي موعد لتقييم قيادتك 

            ✅
        </br>
            وكوني بسلام 
            
          </p>
        
      </div> 
      
    </div>
  </div>
</div> <!-- .bg-light -->
</div> <!-- .bg-light -->

<!--------------------------->
<div class="page-section pb-0">
  <div class="container">
    <div class="row align-items-center" style="background-color: #00ff3713;margin-left: 10px;border-radius: 15px;width:100%;border-width: 0px;border-color: #007bff;">
      
      <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms" style="margin-top: 10px;margin-bottom: 10px;">
        <div class="img-place custom-img-1">
          <img src="/projImage/info2.png" style="border-radius: 15px"  alt="">
        </div>
      </div>
      <div class="col-lg-6 py-3 wow fadeInUp"  style="text-align:right">
        <h1>  <br> 
        </h1>
        <h4>
          💥🔺 جهزي سيارك لمواجهة الأمور الطارئة
        </h4>
          <p> 
          </p>
        
      </div>  
      
    </div>
  </div>
</div> <!-- .bg-light -->
</div> <!-- .bg-light -->
<!----------------  <i class='fas fa-hand-holding-heart' style='font-size:36px;color: black'></i>
-------------------->





 <div class="page-section pb-0">
  <div class="container">
    <div class="row align-items-center" style="background-color: #fff;">
      <div class="col-12 col-lg-4 wow fadeInRight" data-wow-delay="400ms" style="margin:20px 0;padding:10px">
        <div class="d-flex align-items-center justify-content-center" style="height:180px;padding:10px;border-radius:20px;background-color:#007bff0e;flex-direction:column;margin:0 5px" >
          <i class='fas fa-user-nurse' style='font-size:48px;color:green;'></i>
          <p style="text-align:center; margin-top:20px" >
          مدربات ذوات خبرة
          </br>
            مدربات ذوات خبرة عالية لضمان جودة التعليم
        
            والتدريب
          </p>
        </div>
      </div>
      <div class="col-12 col-lg-4 wow fadeInRight" data-wow-delay="400ms" style="margin:20px 0;padding:10px">
        <div class="d-flex align-items-center justify-content-center" style="height:180px;padding:10px;border-radius:20px;background-color:#007bff0e;flex-direction:column;margin:0 5px" >
          <i class='fas fa-hand-holding-heart' style='font-size:48px;color:green;'></i>
          <p style="text-align:center; margin-top:20px" >
      
            أفضل تدابير السلامة
          </br>
          أحدث تقنيات وقواعد السلامة على الطريق
          </p>
        </div>
      </div>
      <div class="col-12 col-lg-4 wow fadeInRight" data-wow-delay="400ms" style="margin:20px 0;padding:10px">
        <div class="d-flex align-items-center justify-content-center" style="height:180px;padding:10px;border-radius:20px;background-color:#007bff0e;flex-direction:column;margin:0 5px" >
          <i class='fas fa-car' style='font-size:48px;color:green;'></i>
          <p style="text-align:center; margin-top:20px" >
          تدريبات المحاكاة
          محاكاة فعلية للقيادة على الطريق
          </p>
        </div>
      </div>
  </div>
</div> <!-- .bg-light -->
</div> <!-- .bg-light -->

<!------------------------------------------------------------------------------------------->







  @include('project_layout.footer')

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>