<html>
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
          </head >
          <body >
            <div class="container-scroller">
              <!-- partial:partials/_sidebar.html -->
              {{-- @include('admin.sidebar') --}}
              <!-- partial -->
              @include('admin.navbar')
              @include('admin.heder')
              <div class="row" style="width: 100%">
                <div class="col-12"  style="margin-top: 75px;overflow-x:scroll;height:600px;" >
                  <table >
                    <tr style="text-align: center" >
                      <th style="padding: 5px; " >اسم المتدرب </th>
                      <th style="padding: 5px; " > البريد الالكتروني للمتدرب</th>
                      <th style="padding: 5px">رقم الجوال المتدرب</th>
                      <th style="padding: 5px">المدينه</th>
                      <th style="padding: 5px">المنطقه</th>
                      <th style="padding: 5px; " >اسم المدرب </th>
                      <th style="padding: 5px; " > البريد الالكتروني للمدرب</th>
                      <th style="padding: 5px">رقم الجوال المدرب</th>
                      
                      <th style="padding: 5px">طريقه الدفع</th>
                      <th  style="padding: 5px">اكشن</th>
              
              
                    </tr>
                    @foreach ($books as $data)
                      <tr align="center">
                        {{-- <a href="{{url('contact_with_users_get',$user->id)}}"<td style="padding: 30px">{{$user->name}}</td> --}}
                          <td style="padding: 30px">{{$data->user_name}}</td>
                          <td style="padding: 30px">{{$data->user_email}}</td>
                          <td style="padding: 30px">{{$data->user_phone}}</td>
                          <td style="padding: 30px">{{$data->city}}</td>
                          <td style="padding: 30px">{{$data->station}}</td>
                          <td style="padding: 30px">{{$data->trainer_name}}</td>
                          <td style="padding: 30px">{{$data->trainer_email}}</td>
                          <td style="padding: 30px">{{$data->trainer_phone}}</td>
                          <td style="padding: 30px">{{$data->payway}}</td>
                          
                      </tr>
                    @endforeach
                  </table>
               </div>
              </div>
  
                     <!-- container-scroller -->
                     <!-- plugins:js -->
    
             @include('admin.script')
                     <!-- End custom js for this page -->
            </body>
        </html>    
  
    </body>
</html>