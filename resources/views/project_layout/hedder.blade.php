<style>
  a:hover{
    
  background-color: #00d9a65b;
  
}
</style>
  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <span class="mai-call text-primary">920003578</span> 
              <span class="divider">|</span>
              <span class="mai-mail text-primary"> contact@itmsa.net</span>
              <span class="divider">|</span>
              <span class="mai-time text-primary">اوقات العمل من الساعة 
                9 صباحا الي الساعة 4 مساء</span> 
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <div class="w3-padding w3-xlarge">
          <img src="/projImage/logo.png" style="width: 120px;height:70px; margin-left:-10px; margin-right:20px;" alt="">
          
        </div>
        
        <form action="{{url('search')}}" method="GET">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="ابحث هنا.." name="search" aria-label="Username" aria-describedby="icon-addon1" >
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div  class="collapse navbar-collapse" id="navbarSupport" >
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a  style="color: rgba(0, 0, 0, 0.541);font-size: 22px" class="nav-link" href="{{url('/')}}"> <b> الرئيسية</b></a>
            </li>
            
            {{-- <li class="nav-item active">
              

              <a class="nav-link" href="#"> 
                {{-- <select>
                <option>اختر المدينه</option>
                <option>القاهره</option>
                <option>اسكندريه</option>
                <option>مطروح</option>
                <option>سيناء</option>
              </select> --}}
              
                {{-- <select>
                  <optgroup label="القاهره" >
                    <option>عين شمس</option>
                    <option>المطرية </option>
                    <option>العشرين</option>
                    <option>عين شمس</option>
                </optgroup> 

                </select>--}}
            {{-- </a> 
            </li>  --}}
            <li class="nav-item">
              <a class="nav-link" style="color:rgba(0, 0, 0, 0.541);font-size: 22px;" href="{{url('about')}}"><b>من نحن</b> </a>
            </li>
            @auth
              @if (Auth::user()->usertype == 2)
                <li class="nav-item">
                  <a style="color:rgba(0, 0, 0, 0.541);font-size: 22px;" class="nav-link"  href="{{url('mytrainerpage')}}"><b>اعرض كل المسجلين معي</b></a>
                </li>
              @else
              <li class="nav-item">
                <a style="color:rgba(0, 0, 0, 0.541);font-size: 22px;" onclick="myFunction()" class="nav-link"  href="{{url('trainers')}}"><b>سجل فى دورة تدريبية</b></a>
              </li>
              @endif 
            @else
              <li class="nav-item">
                <a style="color: rgba(0, 0, 0, 0.541);font-size: 22px;" onclick="myFunction()" class="nav-link"  href="{{url('trainers')}}"><b>سجل فى دورة تدريبية</b></a>
              </li>
              
            @endauth
            <li class="nav-item">
              <a style="color: rgba(0, 0, 0, 0.541);font-size: 22px;" class="nav-link" href="{{url('contact')}}"><b>اتصل بنا</b></a>
            </li>
            <li  >
              @if (Route::has('login'))
              <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                  @auth
                    <li>  
                  <x-app-layout>
                  </x-app-layout>
                    </li>
                  @else
                      <li ><a href="{{ route('login') }}" class="btn btn-primary ml-lg-3">تسجيل الدخول</a></li>

                      @if (Route::has('register'))
                          <li ><a href="{{ route('register') }}" class="btn btn-primary ml-lg-3">سجل لأول مره</a></li>
                      @endif
                  @endauth
              </div>
          @endif
          </li> 
          
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  