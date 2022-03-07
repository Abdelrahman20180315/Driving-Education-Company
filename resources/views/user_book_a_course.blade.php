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

<script type = "text/javascript">  
 
  
  @if(session()->has('message'))
      alert('{{ session()->get('message') }}');
  @endif 
 
 
 </script>

</head>
<body >

  <!-- Back to top button -->

  @include('project_layout.hedder')

  
  
  



  <div class="col-12"  style="margin-top: 35px;overflow-x:scroll;height:600px;margin-bottom:-500px" >
    <table style="bgcolor:rgba(128, 128, 128, 0); border:3px">
      <tr style="text-align: center" >
        <th style="padding-left: 20px; " >اسم المتدرب </th>
        <th style="padding: 20px; " > البريد الالكتروني للمتدرب</th>
        <th style="padding: 20px">رقم الجوال المتدرب</th>
        <th style="padding: 20px">المدينه</th>
        <th style="padding: 20px">المنطقه</th>
        <th style="padding: 20px; " >اسم المدرب </th>
        <th style="padding: 20px; " > البريد الالكتروني للمدرب</th>
        <th style="padding: 20px">رقم الجوال المدرب</th>
        <th style="padding: 20px">طريقه الدفع</th>
        <th style="padding: 20px">عدد ساعات الكورس التدريبى</th>
        <th style="padding: 20px">الفاتورة بالريال</th>
        <th style="padding: 20px">مواعيد العمل المتاحة</th>
        <th  style="padding: 20px">حذف</th>


      </tr>
      @foreach ($books as $data)
      <tr align="center">
        <td style="padding: 30px">{{$data->user_name}}</td>
        <td style="padding: 30px">{{$data->user_email}}</td>
        <td style="padding: 30px">{{$data->user_phone}}</td>
        <td style="padding: 30px">{{$data->city}}</td>
        <td style="padding: 30px">{{$data->station}}</td>
        <td style="padding: 30px">{{$data->trainer_name}}</td>
        <td style="padding: 30px">{{$data->trainer_email}}</td>
        <td style="padding: 30px">{{$data->trainer_phone}}</td>
        <td style="padding: 30px">{{$data->payway}}</td>
        <td style="padding: 30px">{{$data->course_hours}}</td>
        <td style="padding: 30px">{{$data->bill}}</td>
        <td style="padding: 30px">{{$data->trainer_status}}</td>
        <td class="btn btn-danger" style="margin-top:20px;width:120px">
        <a href="{{url('deletcourse',$data->id)}}" style="width:100px;font-size:30px" >
          <p style="margin-left:-24px;width:118px;font-size:20px;background-color:none; height:25px;"> حذف</p>
        </a>
        </td>
    </tr>
      @endforeach
    </table>
 </div>  



 @include('project_layout.footer')


<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>