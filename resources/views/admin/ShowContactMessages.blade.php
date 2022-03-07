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
          </head>
          <body>
            <div class="container-scroller">
              <!-- partial:partials/_sidebar.html -->
              {{-- @include('admin.sidebar') --}}
              <!-- partial -->
              @include('admin.navbar')
              @include('admin.heder')
              <div style="position: relative; top:30px; right:20px; padding: 20px" >
                <table style="bgcolor:rgba(128, 128, 128, 0); border:3px">
                  <tr >
                    <th style="padding: 20px; color:whitesmoke" >الأسم </th>
                    <th style="padding: 20px; color:whitesmoke" >البريد الالكتروني</th>
                    <th style="padding: 20px">رقم التليفون</th>
                    <th style="padding: 20px">الرسالة</th>
                  </tr>
                  @foreach ($data as $data)
                    <tr align="center">
                      {{-- <a href="{{url('contact_with_users_get',$user->id)}}"<td style="padding: 30px">{{$user->name}}</td> --}}
                        <td style="padding: 30px">{{$data->name}}</td>
                        <td style="padding: 30px">{{$data->email}}</td>
                        <td style="padding: 30px">{{$data->phone}}</td>
                        <td style="padding: 30px">{{$data->message}}</td>
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