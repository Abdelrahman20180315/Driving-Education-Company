
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

              <div style="position: relative; top:30px; right:20px;padding: 20px" >
                <table style="bgcolor:rgba(128, 128, 128, 0); border:3px">
                  <tr >
                    <th style="padding: 20px; color:whitesmoke" >الأسم الاول</th>
                    <th style="padding: 20px; color:whitesmoke" >الأسم الاخير</th>
                    <th style="padding: 20px">البريد الالكتروني</th>
                    <th style="padding: 20px">رقم الجوال</th>
                    <th style="padding: 20px">رقم الرخصة</th>
                    <th style="padding: 20px">النوع</th>
                    <th style="padding: 20px">العمر</th>
                    <th style="padding: 20px">المدينة</th>
                    <th style="padding: 20px">حذف المستخدم</th>
                  </tr>
                  @foreach ($data as $user)
                    <tr align="center">
                      {{-- <a href="{{url('contact_with_users_get',$user->id)}}"<td style="padding: 30px">{{$user->name}}</td> --}}
                        <td style="padding: 30px">{{$user->name}}</td>
                        <td style="padding: 30px">{{$user->lastname}}</td>
                        <td style="padding: 30px">{{$user->email}}</td>
                        <td style="padding: 30px">{{$user->phonenumber}}</td>
                        <td style="padding: 30px">{{$user->licensenumber}}</td>
                        <td style="padding: 30px">{{$user->gender}}</td>
                        <td style="padding: 30px">{{$user->age}}</td>
                        <td style="padding: 30px">{{$user->city}}</td>
                      @if ($user->usertype=='0')
                        <td><a href="{{url('/deletuser',$user->id)}}">Delete</a></td>
                        @else
                          <td >not allowed(Admin) </td>
                      @endif                    
                    </tr>
                  @endforeach
               
                </table>
             </div>  
    <!-- container-scroller -->
    <!-- plugins:js -->
    
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
  </html>  
  
  </body>
</html>
