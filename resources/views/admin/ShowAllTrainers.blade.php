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
            <div class="container-scroller d-flex">
              <!-- partial:partials/_sidebar.html -->
              {{-- @include('admin.sidebar') --}}
              <!-- partial -->
              @include('admin.navbar')
              @include('admin.heder')
            <div class="row" style="width: 100%">
              <div class="col-12"  style="margin-top: 35px;overflow-x:scroll;height:600px;" >
                <table >
                  <tr style="color: black">
                    <th style="padding: 5px; " >الأسم </th>
                    <th style="padding: 5px;white-space:nowrap; " >البريد الالكتروني</th>
                    <th style="padding: 5px">رقم الجوال</th>
                    <th style="padding: 5px">المدينه</th>
                    <th style="padding: 5px">المنطقه</th>
                    <th style="padding: 5px;white-space:nowrap">طريقه الدفع</th>
                    <th style="padding: 5px;white-space:nowrap">  صوره الهويه من الوجه</th>
                    <th style="padding: 5px;white-space:nowrap">صوره الهويه من الخلق</th>
                    <th style="padding: 5px;white-space:nowrap ">استماره السياره</th>
                    <th style="padding: 5px;white-space:nowrap">صوره تأمين السياره</th>
                    <th style="padding: 5px;white-space:nowrap">صورة رخصة القيادة</th>
                    <th style="padding: 20px;margin-right:30px;white-space:nowrap">اكشن</th>
                    

                  </tr>
                  @foreach ($trainer as $data)
                    <tr align="center">
                      {{-- <a href="{{url('contact_with_users_get',$user->id)}}"<td style="padding: 30px">{{$user->name}}</td> --}}
                        <td style="padding: 30px">{{$data->name}}</td>
                        <td style="padding: 30px">{{$data->email}}</td>
                        <td style="padding: 30px">{{$data->phone}}</td>
                        <td style="padding: 30px">{{$data->city}}</td>
                        <td style="padding: 30px">{{$data->station}}</td>
                        <td style="padding: 30px">{{$data->payway}}</td>
                        <td style="width:770px;padding:8px;cursor:pointer" onclick="document.getElementById('modal-img').setAttribute('src','image_passwporFolder/{{$data->national_image}}')" data-bs-toggle="modal" data-bs-target="#exampleModal"><img style="min-width: 100%" src="image_passwporFolder/{{$data->national_image}}"/></td>
                        <td style="width:770px;padding:8px;cursor:pointer" onclick="document.getElementById('modal-img').setAttribute('src','image_passport_backFolder/{{$data->national_image_back}}')" data-bs-toggle="modal" data-bs-target="#exampleModal"><img style="min-width: 100%" src="image_passport_backFolder/{{$data->national_image_back}}"/></td>
                        <td style="width:770px;padding:8px;cursor:pointer" onclick="document.getElementById('modal-img').setAttribute('src','image_car_formFolder/{{$data->Car_form_image}}')" data-bs-toggle="modal" data-bs-target="#exampleModal"><img style="min-width: 100%" src="image_car_formFolder/{{$data->Car_form_image}}"/></td>
                        <td style="width:770px;padding:8px;cursor:pointer" onclick="document.getElementById('modal-img').setAttribute('src','image_car_insuranceFolder/{{$data->car_insurance_image}}')" data-bs-toggle="modal" data-bs-target="#exampleModal"><img style="min-width: 100%" src="image_car_insuranceFolder/{{$data->car_insurance_image}}"/></td>
                        <td style="width:770px;padding:8px;cursor:pointer" onclick="document.getElementById('modal-img').setAttribute('src','image_licenseFolder/{{$data->driving_license_image}}')" data-bs-toggle="modal" data-bs-target="#exampleModal"><img style="min-width: 100%" src="image_licenseFolder/{{$data->driving_license_image}}"/></td>
                        <td class="btn btn-danger" style="margin-top:55px;width:120px">
                          <a href="{{url('delettrainer',$data->id)}}" style="width:100px;font-size:30px" >
                            <p style="margin-left:-24px;width:118px;font-size:20px;background-color:none; height:25px;"> حذف</p>
                          </a>
                          </td>
                    </tr>
                  @endforeach
                </table>
             </div>
            </div> 
                     <!-- container-srcoller -->
                     <!-- plugins:js -->
    
             @include('admin.script')
                     <!-- End custom js for this page -->
            

          <!-- Button trigger modal -->

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <img style="width: 100%" src="" id="modal-img">
                </div>

              </div>
            </div>
          </div>
            </body>
        </html>    
  
    </body>
</html>