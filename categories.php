<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Slider</title>
    <!-- Linking SwiperJS CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <!-- Linking TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom SwiperJS navigation buttons */
        .swiper-button-prev, .swiper-button-next {
            color: #fff;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: rgba(0, 0, 0, 0.5);
        }
        .swiper-button-prev:hover, .swiper-button-next:hover {
            background: rgba(0, 0, 0, 0.8);
        }
    </style>
</head>
<body class="bg-gray-800 flex items-center justify-center min-h-screen">
    <div class="swiper-container w-full max-w-4xl">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="https://via.placeholder.com/800x400?text=Slide+1" alt="Slide 1" class="w-full h-full object-cover">
            </div>
            <div class="swiper-slide">
                <img src="https://via.placeholder.com/800x400?text=Slide+2" alt="Slide 2" class="w-full h-full object-cover">
            </div>
            <div class="swiper-slide">
                <img src="https://via.placeholder.com/800x400?text=Slide+3" alt="Slide 3" class="w-full h-full object-cover">
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Navigation -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>

    <!-- Linking SwiperJS script -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Custom SwiperJS initialization script -->
    <script>
        const swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
</body>
</html>
