<section class="slider_section">
   <div class="slider">
     <?php
       $images = [
         'images/valmont-banner.png',
         'images/skiibannermilem.png',
         'images/banner-1.png',
       ]; // danh sách các hình ảnh
       foreach ($images as $image) {
         echo '<div><img src="' . $image . '"></div>';
       }
     ?>
      </div>
      <button class="slick-prev">Previous</button>
      <button class="slick-next">Next</button>
   </div>
 </section>
 
 <!-- CSS cho slider -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
 <link rel="stylesheet" href="/public/home/css/style.css" />
 
 
 <!-- JavaScript cho slider -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
 <script>
   $(document).ready(function(){
     $('.slider_section').slick({
       autoplay: true, // tự động chạy
       autoplaySpeed: 50, // thời gian chờ giữa các slide
       arrows: true, // hiển thị nút điều hướng
       dots: true, // hiển thị các chấm đánh dấu
     });
   });
 </script>
