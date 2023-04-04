<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="full">
                    <div class="logo_footer">
                        <a href="#"><img width="210" src="images/logo-black-ad.png" alt="#" /></a>
                    </div>
                    <div class="information_f">
                        <p><strong>Địa chỉ: </strong>14 Đường 28, Bình Trưng Tây, Q2, HCM</p>
                        <p><strong>Điện thoại: </strong>085 666 44 78</p>
                        <p><strong>Email: </strong>mtnbeauty.site@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="widget_menu">
                                    <h3>Menu</h3>
                                    <ul>
                                        <li><a href="#">Trang chủ</a></li>
                                        <li><a href="#">Sản phẩm</a></li>
                                        <li><a href="#">Chính sách</a></li>
                                        <li><a href="#">Vê chúng tôi</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="widget_menu">
                                    <h3>Dịch vụ</h3>
                                    <ul>
                                        <li><a href="#">Chính sách đổi trả</a></li>
                                        <li><a href="#">Hình thức thanh toán</a></li>
                                        <li><a href="#">Điều khoản sử dụng</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="widget_menu">
                            <h3>Google Map</h3>
                            <div class="span6">
                                <div id="map" style="width: 100%; height: 170px"></div>
                                <script>
                                    function initMap() {
                                        var location = {
                                            lat: 10.7720842,
                                            lng: 106.6577867
                                        };
                                        var map = new google.maps.Map(document
                                            .getElementById('map'), {
                                                zoom: 15,
                                                center: location
                                            });
                                        var marker = new google.maps.Marker({
                                            position: location,
                                            map: map
                                        });
                                    }
                                </script>
                                <script async defer
                                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAZPjM4XSmqXd3L5HbCjHKkKIyDjJ43mM&callback=initMap"></script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v12.0&appId=3346564995654603&autoLogAppEvents=1"
        nonce="ASDASDASDASDASDASD"></script>
    <div class="fb-customerchat" attribution=setup_tool page_id="mtnbeauty.site"></div>
    <script>
        ! function(s, u, b, i, z) {
            var o, t, r, y;
            s[i] || (s._sbzaccid = z, s[i] = function() {
                s[i].q.push(arguments)
            }, s[i].q = [], s[i]("setAccount", z), r = ["widget.subiz.net", "storage.googleapis" + (t = ".com"),
                "app.sbz.workers.dev", i + "a" + (o = function(k, t) {
                    var n = t <= 6 ? 5 : o(k, t - 1) + o(k, t - 3);
                    return k !== t ? n : n.toString(32)
                })(20, 20) + t, i + "b" + o(30, 30) + t, i + "c" + o(40, 40) + t
            ], (y = function(k) {
                var t, n;
                s._subiz_init_2094850928430 || r[k] && (t = u.createElement(b), n = u.getElementsByTagName(b)[
                        0], t.async = 1, t.src = "https://" + r[k] + "/sbz/app.js?accid=" + z, n.parentNode
                    .insertBefore(t, n), setTimeout(y, 2e3, k + 1))
            })(0))
        }(window, document, "script", "subiz", "acrpwbkowjxrsezlpjde")
    </script>
</footer>
