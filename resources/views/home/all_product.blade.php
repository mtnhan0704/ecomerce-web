<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="">
    <title>MTNhan Beauty</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('home/css/bootstrap.css') }}" />
    <!-- font awesome style -->
    <link href="{{ asset('home/css/font-awesome.min.css') }}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('home/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('home/css/responsive.css') }}" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>
        .comment {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .comment-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .comment-content {
            flex: 1;
        }
    </style>
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('home.header')
        <!-- end header section -->
        <!-- product section -->
        @include('home.product_view')
        <!-- end product section -->
        <!-- Comment and reply system starts here -->
        <div style="text-align: center; padding-bottom: 30px;">
            <h1 style="font-size: 30px; text-aLign: center; padding-top: 20px; padding-bottom: 20px">Bình luận</h1>
            <form action="{{ url('add_comment') }}" method="POST">
                @csrf
                <textarea style="height: 150px; width: 600px; " placeholder="Viết 1 trải nghiệm sản phẩm của bạn ở đây" name="comment"></textarea>
                <br>
                <input type="submit" class="btn btn-primary" value="Bình luận">
            </form>
        </div>
        <div style="padding-Left: 5%; padding-right: 5%;">
            <h1 style="font-size: 20px; padding-bottom: 20px;">Tất cả bình luận</h1>
            @foreach ($comment as $comment)
                <div class="comment">
                    <div class="comment-content">
                        <b>{{ $comment->name }}</b>
                        <p>{{ $comment->comment }}</p>
                        <a style="color:blue;" href="javascript::void(0);" onclick="reply(this)"
                            data-Commentid="{{ $comment->id }}">Trả lời</a>
                        @foreach ($reply as $rep)
                            @if ($rep->comment_id == $comment->id)
                                <div class="comment" style="padding-left: 3%;">
                                    <div class="comment-content">
                                        <b>{{ $rep->name }}</b>
                                        <p>{{ $rep->reply }}</p>
                                        <a style="color:blue;" href="javascript::void(0);" onclick="reply(this)"
                                            data-Commentid="{{ $comment->id }}">Trả lời</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endforeach
            <!-- Reply Textbox -->
            <div style="display: none;" class="replyDiv">
                <form action="{{ url('add_reply') }}" method="POST">
                    @csrf
                    <input type="text" id="commentId" name="commentId" hidden="">
                    <textarea style="height: 100px; width: 500px;" name="reply" placeholder="Viết 1 trải nghiệm sản phẩm của bạn ở đây"></textarea>
                    <br>
                    <button type="submit" class="btn btn-warning">Trả lời</button>
                    <a href="javascript::void(0); " class="btn " onClick="reply_close(this)">Thoát</a>
                </form>
            </div>
        </div>

        <!-- Comment and reply system end here -->
        <script type="text/javascript">
            function reply(caller) {
                document.getElementById('commentId').value = $(caller).attr('data-Commentid');
                $('.replyDiv').insertAfter($(caller));
                $('.replyDiv').show();
            }

            function reply_close(caller) {
                $('.replyDiv').hide();
            }
        </script>
        <script>
            document.addEventListener("DOMContentLoaded", function(event) {
                var scrollpos = localStorage.getItem('scrollpos');
                if (scrollpos) window.scrollTo(0, scrollpos);
            });
            window.onbeforeunload = function(e) {
                localStorage.setItem('scrollpos', window.scrollY);
            };
        </script>
        @include('home.footer')

        <div class="cpy_">
            <p class="mx-auto">© 2023 All Rights Reserved By <a href="http://mtnhan.tech/">MTNhan</a><br></p>
        </div>
        <!-- jQery -->
        <script src="home/js/jquery-3.4.1.min.js"></script>
        <!-- popper js -->
        <script src="home/js/popper.min.js"></script>
        <!-- bootstrap js -->
        <script src="home/js/bootstrap.js"></script>
        <!-- custom js -->
        <script src="home/js/custom.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#search-form').on('submit', function(e) {
                    e.preventDefault();
                    var formData = $(this).serialize();
                    $.ajax({
                        type: 'GET',
                        url: '{{ url('product_search') }}',
                        data: formData,
                        success: function(response) {
                            $('#search-result').html(response);
                        },
                        error: function(response) {
                            console.log(response);
                        }
                    });
                });
            });
        </script>
</body>

</html>
