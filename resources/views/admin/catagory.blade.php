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
        .center
        {
          margin: auto;
          width: 50%;
          text-align: center;
          margin-top: 30px;
          border: 3px solid blue;
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
            
           @if(session()->has('message'))
           
           <div class="alert alert-success"> 

           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
           {{session()->get('message')}}

           </div>


           @endif


            <div class="div-center">
                <h2 class="h2_font">Add Catagory</h2>
                <form action="{{url('/add_catagory')}}" method="POST">
                    @csrf
                    <input class="input_color" type="text" name="catagory" placeholder="Write catagory name">
                    <input type="submit" class="btn btn-primary" name="submit" value="Add Catagory">
                </form>
            </div>
            <table class="center">

            <tr>
              <td>Catagory Name</td>
              <td>Action</td>
            </tr>

            

            @foreach($data as $data)

            
            <tr>
              <td>{{$data->catagory_name}}</td>
              <td>
                <a onclick="return  confirm('are you sure to Delete this')" class="btr btr-danger" href="{{url('/delete_catagory',$data->id)}}">Delete</a>
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