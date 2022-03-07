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
  <link href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" rel="stylesheet"/>

  <link rel="stylesheet" href="../assets/css/theme.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      max-width: 370px;
      margin: 10px;
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
    .top-left {
  position: absolute;
  top: 8px;
  left: 16px;
}
  </style>


<script type = "text/javascript">  
 
  function myFunction() {
  @if($errors->any())
      alert('{{$errors->first()}}');
  @endif 

}

 </script>
<script type = "text/javascript">  
 
  
  @if(session()->has('message'))
      alert('{{ session()->get('message') }}');
  @endif 
 
 
 </script>



</head>
<body>

  <!-- Back to top button -->

  @include('project_layout.hedder')

<!--
  <div class="page-section pb-0" style="width:1000px;">
    <div class="container" style="display:inline-block;width:1000px;">
      <div class="row align-items-center" style="display:inline-block;width:1000px;">
        <div class="col-lg-6 py-3 wow fadeInUp" style="width:500px; " >
            <p class="text-grey mb-4" >  
              <div class="dropdown" style="margin-bottom: 30px;margin-top: -150px;width:100px; position:initial ">
                <button class="dropbtn" style="width:300px">اختر المدينه</button>
                <div class="dropdown-content" style="width:300px">
                  
                    <li value="اختر المدينه" style="width:300px" class="submenu">
                      <a href="javascript:;">اختر المدينه</a>
                        <ul id="selectUser" style="background-color:white">
                            
                          <li  disabled selected>Please select user</li> 
                            @foreach ($city as $itemcity)
                            <h1>{{$itemcity->city}}</h1>
                              @foreach ($station as $item)
                              @if ($itemcity->city == $item->city)
                              <a href="{{url('showtrainerbyuser')}}?filtercity={{$item->station}}"> 
                                  <li style="width:300px" value="{{$item->station}}">
                                    {{$item->station}}
                                  </li>
                              </a>
                              @endif
                              @endforeach
                            @endforeach
                                
                        
                        </ul>
                    </li>
                  
                </div>
              </div>

                  <!--
                  <li class="nav-item active" >
                      
                    
                    
                      <select name="filtercity" style="width:500px">
                    
                      @foreach ($city as $itemcity)
                    
                        <optgroup label="{{$itemcity->city}}" >
                          
                            @foreach ($station as $item)
                            
                              @if ($itemcity->city == $item->city)
                                
                                  
                                    <form action="{{url('showtrainerbyuser')}}" method="POST">
                                      <option>{{$item->station}}</option>
                                    </form>
                                    
                                  
                                
                                
                              @endif
                            
                            @endforeach
                        
                        
                        </optgroup> 
                      @endforeach
                  
                          
                      </select>
                    
                  </li>
                  -->
            </p>
           
        </div>
        <!--
        <div class="col-lg-6 py-3 wow fadeInUp" style="width:500px; " >
          <p class="text-grey mb-4" >  
            
              <a  class="nav-link"  href="#"> <select style="width:300px">
                <option>اختر طريقه الدفع</option>
                <option>كاش</option>
                <option>ميزه</option>
              </select></a>
            
          </p>
        </div>
    </div>
  -->
  </div> <!-- .bg-light -->
 
</div> <!-- .bg-light -->

<!--**********************************************************************-->
<div class="page-section pb-0" style="width:1200px">
  <div class="container">
    <div class="row align-items-center">
      <div style="width:1200px" >
        
        
      
        <!--
          <div class="dropdown" style=" padding-right:350px;padding-left:30px;  margin-bottom: 200px;margin-top: -200px;width:100px;  ">
            <button class="dropbtn" style="width:300px">اختر طريقه الدفع</button>
            <div class="dropdown-content" style="width:300px;" >
              <li value="اختر المدينه" style="width:300px;background-color:white;
              width: 300px;
              height: 200px;
              overflow: auto; " class="submenu">
                <a href="javascript:;">اختر المدينه</a>
                  <ul id="selectUser" style="background-color:white;" >  
                    <li  disabled selected></li> 
                    <a href="{{url('showtrainerbyuser')}}?filterpayway=كاش"> 
                      <li style="width:300px" value="كاش">
                        كاش
                      </li>
                  </a>
                  <a href="{{url('showtrainerbyuser')}}?filterpayway=فيزا"> 
                    <li style="width:300px" value="ميزه">
                      ميزه
                    </li>
                </a>
                  </ul>
              </li>
            </div>
          </div>
          <div class="dropdown" style="margin-right:350px; margin-bottom: 200px;margin-top: -200px;width:100px;  ">
              <button class="dropbtn" style="width:300px">اختر مدينتك </button>
              <div class="dropdown-content" style="width:300px;" >
                <li value="اختر المدينه" style="width:300px;background-color:white;
                width: 300px;
                height: 200px;
                overflow: auto; " class="submenu">
                  <!-- <a href="javascript:;">اختر مدينتك</a>
                    <ul id="selectUser" style="background-color:white;" required >  
                      <li  disabled selected></li> 
                        @foreach ($city as $itemcity)
                          <h1>{{$itemcity->city}}</h1>
                          @foreach ($station as $item)
                            @if ($itemcity->city == $item->city)
                              <a href="{{url('showtrainerbyuser')}}?filtercity={{$item->station}}"> 
                                  <li style="width:300px" value="{{$item->station}}">
                                    {{$item->station}}
                                  </li>
                              </a>
                            @endif
                          @endforeach
                        @endforeach
                    </ul> 
                </li>
              </div>
          </div>

        -->
              <li style="margin-left: 20px" class="nav-item active" >
                  
                <form action="{{url('showtrainerbyuser')}}" method="POST">
                @csrf
                  <select name="filtercity" style="width:250px" required>
                    <option>اختر مدينتك</option>
                  @foreach ($city as $itemcity)
                
                    <optgroup label="{{$itemcity->city}}" >
                      
                        @foreach ($station as $item)
                        
                          @if ($itemcity->city == $item->city)
                            <option>{{$item->station}}</option>
                          @endif
                        
                        @endforeach
                    
                    
                    </optgroup> 
                  @endforeach
              
                      
                  </select>

                  <select name="filterpayway" style="width:250px" required>
                    <option>اختر طريقة الدفع</option>
                    
                    <option>كاش</option>
                    <option>فيزا</option>
                  </select>
                  <input onclick="myFunction()" type="submit"  value="فيلتر"  class="btn btn-primary mt-3 wow zoomIn" style=" background-color:khaki;color:rgba(0, 0, 20, 0.959);font-size: 23px; width:160px;hieght:15px ; margin-bottom:19px" />
                  
                </form>
              </li>
             
        
           
      </div>
    </div>
  </div>
</div>
<!--**********************************************************************-->
<div class="page-section pb-0" style="width:1350px;">
  <div class="container">
    <div class="row align-items-center">
      <div style="width:1250px;margin-left:80px;" >
        @foreach($trainers as $trainer)
          
                      
          
          @if ($trainer->payway == 'كاش')
            @if ($trainer->gender == 'ذكر')
              <div class="column" style="margin-bottom: 20px; width:360px; display:inline-block;">
                <div class="card" style="width:330px; text-align:right;background-color:rgba(0, 0, 20, 0.959); color:khaki">
                  <div style="position: relative;
                  text-align: center;
                  color: white;">
                    <img style="width:100%; hieght:120px" src="image_profileFolder/man.jpg"    />
                    <div class="top-left"><i class='fas fa-award' style='font-size:38px;color:green'></i></div>              
                  </div>
                  <h1 style="font-family:Arial; font-size:30px; text-align:center">{{$trainer->name}}</h1>
                  
                  <p style="font-style: oblique;">{{$trainer->email}} :البريد ألأليكترونى</p>
                  <p style=" font-variant: small-caps;">رقم الجوال: {{$trainer->phone}}</p>
                  <p>المدينة: {{$trainer->city}}</p>
                  <p>المحطة: {{$trainer->station}}</p>
                  <p>النوع: {{$trainer->gender}}</p>
                  <p>طريقة الدفع: {{$trainer->payway}}</p>
                  <div style="margin: 10px 0 ;text-align:center;">
                    <a href="#"><i style="margin-left: 10px" class="fa fa-twitter"></i></a>  
                    <a href="#"><i class="fa fa-facebook"></i></a> 
                  </div>
                  <form method="POST" action="{{ url('/bookcourse',$trainer->id) }}" enctype="multipart/form-data">
                            
                    @csrf
                    <div >
                      
                      <input  type="number" name="course_hour" style="text-align:right; width: 100%; height:35px;border-radius: 9px;color:#000"  placeholder="أضف عدد ساعات الكورس التدريبى"    />
                      <input value="احجز" type="submit" style=" border-radius: 9px;width:100%; text-align:center; font-size: 35px; height:55px; background-color:khaki;color:rgba(0, 0, 20, 0.959);" />
                      
                    </div>
                  </form>
                </div>
              </div>
              
              @else
                <div class="column" style="margin-bottom: 20px; width:360px; display:inline-block;">
                  <div class="card" style="width:330px; text-align:right;background-color:rgba(0, 0, 20, 0.959); color:khaki">
                    <div style="position: relative;
                    text-align: center;
                    color: white;">
                      <img style="width:100%; hieght:120px" src="image_profileFolder/women.jpg"    />
                      <div class="top-left"><i class='fas fa-award' style='font-size:38px;color:green'></i></div>              
                    </div>
                    <h1 style="font-family:Arial; font-size:30px; text-align:center">{{$trainer->name}}</h1>
                    
                    <p style="font-style: oblique;">{{$trainer->email}} :البريد ألأليكترونى</p>
                    <p style=" font-variant: small-caps;">رقم الجوال: {{$trainer->phone}}</p>
                    <p>المدينة: {{$trainer->city}}</p>
                    <p>المحطة: {{$trainer->station}}</p>
                    <p>النوع: {{$trainer->gender}}</p>
                    <p>طريقة الدفع: {{$trainer->payway}}</p>
                    <div style="margin: 10px 0 ;text-align:center;">
                      <a href="#"><i style="margin-left: 10px" class="fa fa-twitter"></i></a>  
                      <a href="#"><i class="fa fa-facebook"></i></a> 
                    </div>
                    <form method="POST" action="{{ url('/bookcourse',$trainer->id) }}" enctype="multipart/form-data">
                              
                      @csrf
                      <div >
                        
                        <input  type="number" name="course_hour" style="text-align:right; width: 100%; height:35px;border-radius: 9px;color:#000"  placeholder="أضف عدد ساعات الكورس التدريبى"    />
                        <input value="احجز" type="submit" style=" border-radius: 9px;width:100%; text-align:center; font-size: 35px; height:55px; background-color:khaki;color:rgba(0, 0, 20, 0.959);" />
                        
                      </div>
                    </form>
                  </div>
                </div>
         
            @endif
            
          
          
          @else
            @if ($trainer->gender == 'ذكر')
              <div class="column" style="margin-bottom: 20px; width:360px; display:inline-block;">
                <div class="card" style="width:330px; text-align:right;background-color:rgba(0, 0, 20, 0.959); color:khaki">
                  <div style="position: relative;
                  text-align: center;
                  color: white;">
                    <img style="width:100%; hieght:120px" src="image_profileFolder/man.jpg"    />
                    <div class="top-left"><i class='fas fa-award' style='font-size:38px;color:white'></i></div>              
                  </div>
                  <h1 style="font-family:Arial; font-size:30px; text-align:center">{{$trainer->name}}</h1>
                  
                  <p style="font-style: oblique;">{{$trainer->email}} :البريد ألأليكترونى</p>
                  <p style=" font-variant: small-caps;">رقم الجوال: {{$trainer->phone}}</p>
                  <p>المدينة: {{$trainer->city}}</p>
                  <p>المحطة: {{$trainer->station}}</p>
                  <p>النوع: {{$trainer->gender}}</p>
                  <p>طريقة الدفع: {{$trainer->payway}}</p>
                  <div style="margin: 10px 0 ;text-align:center;">
                    <a href="#"><i style="margin-left: 10px" class="fa fa-twitter"></i></a>  
                    <a href="#"><i class="fa fa-facebook"></i></a> 
                  </div>
                  <form method="POST" action="{{ url('/bookcourse',$trainer->id) }}" enctype="multipart/form-data">
                            
                    @csrf
                    <div >
                      
                      <input  type="number" name="course_hour" style="text-align:right; width: 100%; height:35px;border-radius: 9px;color:#000"  placeholder="أضف عدد ساعات الكورس التدريبى"    />
                      <input value="احجز" type="submit" style=" border-radius: 9px;width:100%; text-align:center; font-size: 35px; height:55px; background-color:khaki;color:rgba(0, 0, 20, 0.959);" />
                      
                    </div>
                  </form>
                </div>
              </div>
            @else
              <div class="column" style="margin-bottom: 20px; width:360px; display:inline-block;">
                <div class="card" style="width:330px; text-align:right;background-color:rgba(0, 0, 20, 0.959); color:khaki">
                  <div style="position: relative;
                  text-align: center;
                  color: white;">
                    <img style="width:100%; hieght:120px" src="image_profileFolder/women.jpg"    />
                    <div class="top-left"><i class='fas fa-award' style='font-size:38px;color:white'></i></div>              
                  </div>
                  <h1 style="font-family:Arial; font-size:30px; text-align:center">{{$trainer->name}}</h1>
                  
                  <p style="font-style: oblique;">{{$trainer->email}} :البريد ألأليكترونى</p>
                  <p style=" font-variant: small-caps;">رقم الجوال: {{$trainer->phone}}</p>
                  <p>المدينة: {{$trainer->city}}</p>
                  <p>المحطة: {{$trainer->station}}</p>
                  <p>النوع: {{$trainer->gender}}</p>
                  <p>طريقة الدفع: {{$trainer->payway}}</p>
                  <div style="margin: 10px 0 ;text-align:center;">
                    <a href="#"><i style="margin-left: 10px" class="fa fa-twitter"></i></a>  
                    <a href="#"><i class="fa fa-facebook"></i></a> 
                  </div>
                  <form  method="POST" action="{{ url('/bookcourse',$trainer->id) }}" enctype="multipart/form-data">
                            
                    @csrf
                    <div >
                      
                      <input  type="number" name="course_hour" style="text-align:right; width: 100%; height:35px;border-radius: 9px;color:#000"  placeholder="أضف عدد ساعات الكورس التدريبى"    />
                      <input value="احجز" type="submit" style=" border-radius: 9px;width:100%; text-align:center; font-size: 35px; height:55px; background-color:khaki;color:rgba(0, 0, 20, 0.959);" />
                      
                    </div>
                  </form>
                </div>
              </div>
            @endif
          
          
          @endif 

        
        

                    
          
        @endforeach
      </div>
    </div>
  </div>
</div>


@include('project_layout.footer')


<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>