<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('admin.css')
  <body>
  <div class="container-scroller">

    @include('admin.sidebar')
      <!-- partial -->
    @include('admin.navbar')
    @include('admin.body')
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
