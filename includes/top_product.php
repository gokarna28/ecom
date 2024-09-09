<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Card Slider HTML & CSS | CodingNepal</title>
  <!-- Linking Google fonts for icons -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
  <!-- Linking SwiperJS CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <link rel="stylesheet" href="css/top_product.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="container swiper">
    <div class="card-wrapper">
      <!-- Card slides container -->
      <ul class="card-list swiper-wrapper">

        <li class="card-item swiper-slide">
          <div class="product_action_btn">
            <i class="fa-solid fa-cart-shopping"></i>
            <i class="fa-regular fa-heart"></i>
            <i class="fa-solid fa-arrows-rotate"></i>
          </div>
          <a href="#" class="card-link">
            <img src="assets/images/chair.jpg" alt="Card Image" class="card-image">
            <p>category name</p>
            <h2 class="card-title">Amazing Sofa</h2>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <p class="price">Rs.1200</p>
          </a>

        </li>
        <li class="card-item swiper-slide">
          <div class="product_action_btn">
            <i class="fa-solid fa-cart-shopping"></i>
            <i class="fa-regular fa-heart"></i>
            <i class="fa-solid fa-arrows-rotate"></i>
          </div>
          <a href="#" class="card-link">
            <img src="assets/images/sofa.jpg" alt="Card Image" class="card-image">
            <p>category name</p>
            <h2 class="card-title">Amazing Sofa</h2>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <p class="price">Rs.1200</p>
          </a>

        </li>
        <li class="card-item swiper-slide">
          <div class="product_action_btn">
            <i class="fa-solid fa-cart-shopping"></i>
            <i class="fa-regular fa-heart"></i>
            <i class="fa-solid fa-arrows-rotate"></i>
          </div>
          <a href="#" class="card-link">
            <img src="assets/images/product1.jpg" alt="Card Image" class="card-image">
            <p>category name</p>
            <h2 class="card-title">Amazing Sofa</h2>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <p class="price">Rs.1200</p>
          </a>

        </li>
        <li class="card-item swiper-slide">
          <div class="product_action_btn">
            <i class="fa-solid fa-cart-shopping"></i>
            <i class="fa-regular fa-heart"></i>
            <i class="fa-solid fa-arrows-rotate"></i>
          </div>
          <a href="#" class="card-link">
            <img src="assets/images/product2.jpg" alt="Card Image" class="card-image">
            <p>category name</p>
            <h2 class="card-title">Amazing Sofa</h2>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <p class="price">Rs.1200</p>
          </a>

        </li>
        <li class="card-item swiper-slide">
          <div class="product_action_btn">
            <i class="fa-solid fa-cart-shopping"></i>
            <i class="fa-regular fa-heart"></i>
            <i class="fa-solid fa-arrows-rotate"></i>
          </div>
          <a href="#" class="card-link">
            <img src="assets/images/product3.jpg" alt="Card Image" class="card-image">
            <p>category name</p>
            <h2 class="card-title">Amazing Sofa</h2>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <p class="price">Rs.1200</p>
          </a>

        </li>
        <li class="card-item swiper-slide">
          <div class="product_action_btn">
            <i class="fa-solid fa-cart-shopping"></i>
            <i class="fa-regular fa-heart"></i>
            <i class="fa-solid fa-arrows-rotate"></i>
          </div>
          <a href="#" class="card-link">
            <img src="assets/images/storage.jpg" alt="Card Image" class="card-image">
            <p>category name</p>
            <h2 class="card-title">Amazing Sofa</h2>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <p class="price">Rs.1200</p>
          </a>

        </li>
      </ul>
      <!-- Pagination -->
      <div class="swiper-pagination"></div>
      <!-- Navigation Buttons -->
      <div class="swiper-slide-button swiper-button-prev"></div>
      <div class="swiper-slide-button swiper-button-next"></div>
    </div>
  </div>
  <!-- Linking SwiperJS script -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <!-- Linking custom script -->
  <script src="js/top_product.js"></script>
</body>

</html>