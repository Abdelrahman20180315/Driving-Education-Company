
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>  
</head>
<body>  
      <x-app-layout>

      </x-app-layout>
      <!DOCTYPE html>
      <html lang="en">
        <head>
          <!-- Required meta tags -->
        @include('admin.css')
        </head>
        <body>
          <div class="container-scroller">
            <!-- partial:partials/_sidebar.html -->
            {{-- @include('admin.sidebar') --}}
            <!-- partial -->
            @include('admin.navbar')
            @include('admin.heder')

            <div style="position: relative; top:60px; right:-150px">
                <form action="{{url('/SaveCitystation')}}" method="POST" enctype="multipart/form-data">
                    @csrf
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
                    <div class="nav-link">
                        
                    <input type="text" style="color: blue; width:300px" name="station" placeholder="أدخل المنطقة">
                    </div>
                    <div class="nav-link">
                    <input type="submit"  style="background-color:lightblue ; width:160px; height:35px"" value="سجل">
                    </div>    
                </form>
            </div> 
    <!-- container-scroller -->
    <!-- plugins:js -->
    
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
  </html>  
  
  </body>
</html>
