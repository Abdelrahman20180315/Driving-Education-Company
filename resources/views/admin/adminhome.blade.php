<div style="background-color:black; color:red">
  <x-app-layout>

  </x-app-layout>
</div>

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
        <!-- partial -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
