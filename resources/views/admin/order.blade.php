<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')

    <style type="text/css">
        .title_deg {
            text-align: center;
            font-size: 25px;
            font-weight: bold;
            padding-bottom: 40px;
        }

        .table_deg {
            border: 2px solid white;
            width: 90%;
            margin: auto;
            padding-top: 50px;
            text-align: center;
        }

        .th_deg {
            background-color: skyblue;
        }

        .img_size {
            width: 200px;
            height: 200px;
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

                <h1 class="title_deg">Tất cả đơn hàng</h1>

                <div style="padding-left:700px; padding-bottom:30px;">

                    <form action="{{ url('search') }}" method="get">

                        @csrf

                        <input type="text" name="search" placeholder="Nhập sản phầm cần tìm">

                        <input type="submit" value="Tìm kiếm" class="btn btn-outline-praimary">

                    </form>


                </div>

                <table class="table_deg">

                    <tr class="th_deg">

                        <th style="padding: 10px">Tên</th>
                        <th style="padding: 10px">Email</th>
                        <th style="padding: 10px">Địa chỉ</th>
                        <th style="padding: 10px">SDT</th>
                        <th style="padding: 10px">Tên sản phẩm</th>
                        <th style="padding: 10px">Số lượng</th>
                        <th style="padding: 10px">Giá</th>
                        <th style="padding: 10px">Tình trạng thanh toán</th>
                        <th style="padding: 10px">Hình thức thanh toán</th>
                        <th style="padding: 10px">Hình ảnh</th>
                        <th style="padding: 10px">Tình trạng</th>
                        <th style="padding: 10px">Print PDF</th>
                        <th style="padding: 10px">Send Email</th>

                    </tr>

                    @forelse($order as $order)
                        <tr>

                            <td>{{ $order->name }}</td>
                            <td>{{ $order->email }}</td>
                            <td>{{ $order->adress }}</td>
                            <td>{{ $order->phone }}</td>
                            <td>{{ $order->product_title }}</td>
                            <td>{{ $order->quantity }}</td>
                            <td>{{ $order->price }}</td>
                            <td>{{ $order->payment_status }}</td>
                            <td>{{ $order->delivery_status }}</td>
                            <td>

                                <img class="img_size" src="/product/{{ $order->image }}">

                            </td>

                            <td>

                                @if ($order->delivery_status == 'processing')
                                    <a href="{{ url('delivered', $order->id) }}"
                                        onclick="return confirm('Bạn có chắc sản phẩm này được giao!!!')"
                                        class="btn btn-primary">Giao hàng</a>
                                @else
                                    <p>Đã giao hàng</p>
                                @endif

                            </td>

                            <td>
                                <a href="{{ url('print_pdf', $order->id) }}" class="btn btn-secondary">Print PDF</a>
                            </td>

                            <td>
                                <a href="{{ url('send_email', $order->id) }}" class="btn btn-info">Gửi mail</a>
                            </td>

                        </tr>

                    @empty
                        <tr>
                            <td colspan="16">
                                No Data Found
                            </td>

                        </tr>
                    @endForelse


                </table>

            </div>
        </div>

        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script')
        <!-- End custom js for this page -->
</body>

</html>
