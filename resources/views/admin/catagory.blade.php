<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style>
        .div-center{
            text-align: center;
            margin-top: auto;
        }
        .h2_font
        {
            font-size: 40px;
            padding-bottom: 40px;
        }
        .input_color
        {
            color: black;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sideber')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            
            <div class="div-center">
                <h2 class="h2_font">Add catagory</h2>
                <form action="{{url('/add_catagory')}}" method="POST">
                    @csrf
                    <input class="input_color" type="text" name="catagory" placeholder="Write catagory name">
                    <input type="submit" class="btn btn-primary" name="submit" value="Add catagory">
                </form>
            </div>
          </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>