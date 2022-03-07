
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
            <div class="row" style="width: 100%">
              <div class="col-12"  style="margin-top: 35px;overflow-x:scroll;height:600px;" >
                <table >
                  <tr style="color: black">
                   
                    <th style="padding: 5px">المدينه</th>
                    <th style="padding: 5px">المنطقه</th>
                   
                    <th style="padding: 20px;margin-right:30px;white-space:nowrap">اكشن</th>
                    

                  </tr>
                  @foreach ($city as $data)
                    <tr align="center">
                      {{-- <a href="{{url('contact_with_users_get',$user->id)}}"<td style="padding: 30px">{{$user->name}}</td> --}}
                        
                        <td style="padding: 30px">{{$data->city}}</td>
                        <td style="padding: 30px">{{$data->station}}</td>
                        
                        <td class="btn btn-danger" style="margin-top:25px;width:120px">
                          <a href="{{url('deletstation',$data->id)}}" style="width:100px;font-size:30px" >
                            <p style="margin-left:-24px;width:118px;font-size:20px;background-color:none; height:25px;"> حذف</p>
                          </a>
                          </td>
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
