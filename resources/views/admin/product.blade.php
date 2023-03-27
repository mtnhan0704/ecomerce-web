<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <style type="text/css">
        .div_center {

            text-align: center;
            padding-top: 40px;
        }

        .font_size {

            font-size: 40px;
            padding-bottom: 40px;
        }

        .text_color {
            color: black;
            padding-bottom: 20px;

        }

        label {
            display: inline-block;
            width: 200px;
        }

        .div_design {
            padding-bottom: 15px;
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

                @if (session()->has('message'))
                    <div class="alert alert-success">

                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{ session()->get('message') }}

                    </div>
                @endif

                <div class="div_center">

                    <h1 class="font_size">Thêm sản phẩm</h1>

                    <form action="{{ url('/add_product') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="div_design">
                            <label>Tên sản phẩm:</label>
                            <input class="text_color" type="text" name="title" placeholder="Điền tên sản phẩm"
                                required="">
                        </div>

                        <div class="div_design">
                            <label>Mô tả:</label>
                            <input class="text_color" type="text" name="description"
                                placeholder="Viết mô tả cho sản phẩm" required="">
                        </div>

                        <div class="div_design">
                            <label>Giá:</label>
                            <input class="text_color" type="number" name="price" placeholder="Nhập giá"
                                required="">
                        </div>

                        <div class="div_design">
                            <label>Số lượng:</label>
                            <input class="text_color" type="number" min="0" name="quantity"
                                placeholder="Thêm số lượng ở đây" required="">
                        </div>

                        <div class="div_design">
                            <label>Loại sản phẩm:</label>
                            <select class="text_color" name="catagory" required="">
                                <option value="" selected="">Thêm loại sản phẩm</option>

                                @foreach ($catagory as $catagory)
                                    <option value="{{ $catagory->catagory_name }}">{{ $catagory->catagory_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="div_design">

                            <label>Chọn hình:</label>

                            <input type="file" name="image" required="">

                        </div>
                        <div class="div_design">

                            <input type="submit" value="Thêm sản phẩm" class="btn btn-primary">

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
</body>

</html>
