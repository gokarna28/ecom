<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <!-- Linking SwiperJS CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/css/slider.php">
</head>
<body>
  <div class="container swiper">
    <div class="slider-wrapper">
      <div class="card-list swiper-wrapper">
        <div class="card-item swiper-slide">
          <img src="images/img-1.jpg" alt="User Image" class="user-image">
          <h2 class="user-name">James Wilson</h2>
          <p class="user-profession">Software Developer</p>
          <button class="message-button">Message</button>
        </div>
        <div class="card-item swiper-slide">
          <img src="images/img-2.jpg" alt="User Image" class="user-image">
          <h2 class="user-name">Sarah Johnson</h2>
          <p class="user-profession">Graphic Designer</p>
          <button class="message-button">Message</button>
        </div>
        <div class="card-item swiper-slide">
          <img src="images/img-3.jpg" alt="User Image" class="user-image">
          <h2 class="user-name">Michael Brown</h2>
          <p class="user-profession">Project Manager</p>
          <button class="message-button">Message</button>
        </div>
        <div class="card-item swiper-slide">
          <img src="images/img-4.jpg" alt="User Image" class="user-image">
          <h2 class="user-name">Emily Davis</h2>
          <p class="user-profession">Marketing Specialist</p>
          <button class="message-button">Message</button>
        </div>
        <div class="card-item swiper-slide">
          <img src="images/img-5.jpg" alt="User Image" class="user-image">
          <h2 class="user-name">Christopher Garcia</h2>
          <p class="user-profession">Data Scientist</p>
          <button class="message-button">Message</button>
        </div>
        <div class="card-item swiper-slide">
          <img src="images/img-6.jpg" alt="User Image" class="user-image">
          <h2 class="user-name">Richard Wilson</h2>
          <p class="user-profession">Product Designer</p>
          <button class="message-button">Message</button>
        </div>
      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-slide-button swiper-button-prev"></div>
      <div class="swiper-slide-button swiper-button-next"></div>
    </div>
  </div>
  <!-- Linking SwiperJS script -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <!-- Linking custom script -->
  <script src="assets/js/slider.js"></script>
</body>
</html>