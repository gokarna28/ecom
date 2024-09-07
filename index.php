<?php
include('includes/header.php');
?>

<!--hero section-->
<div class="relative w-full md:h-[90vh] h-[70vh] bg-slate-100 flex items-start justify-start">
    <div class="absolute top-0 w-full h-full">
        <img src="assets/images/hero.jpg" alt="hero image" class="w-full h-full object-cover">
    </div>

    <div
        class="relative md:w-2/5 w-full h-full flex flex-col items-start md:space-y-6 space-y-4 md:ml-40 mt-40 md:px-0 px-4">
        <p class="md:text-xl text-sm">THE NEXT GENERATION</p>
        <h1 class="md:text-7xl text-3xl font-semibold md:font-bold">YUSHOP<br>
            <span class="txt-rotate md:text-6xl text-2xl font-normal md:font-semibold" data-period="2000"
                data-rotate='[ "Your Dream Home.", "Comfort Redefined.", "Meets Comfort.", "Inspired Living", "Exceptional Quality." ]'></span>
        </h1>
        <p class="md:text-xl text-sm">We believe that your home should be a reflection of your personality and a
            sanctuary of
            comfort. </p>
        <button
            class="items-center bg-blue-500 hover:bg-stone-950 px-6 py-4 rounded-full text-white md:text-2xl text-sm font-medium">
            <a href="#"><i class="fa-solid fa-cart-shopping mr-2"></i>Buy Now-$220</a>
        </button>
    </div>
</div>

<!--service section-->
<div class="md:flex flex-wrap hidden bg-stone-800 text-white justify-center md:justify-evenly w-full h-full">
    <div class="flex items-center space-x-4 py-8">
        <i class="fa-solid fa-truck-fast text-4xl"></i>
        <div class="items-start">
            <p class="text-2xl font-medium">Fastest Shipping</p>
            <p class="text-lg">Order at $39 order</p>
        </div>
    </div>
    <div class="flex items-center space-x-4">
        <i class="fa-solid fa-money-bill text-4xl"></i>
        <div class="items-start">
            <p class="text-2xl font-medium">100% Safe Payments</p>
            <p class="text-lg">9 month installments</p>
        </div>
    </div>
    <div class="flex items-center space-x-4">
        <i class="fa-solid fa-box text-4xl"></i>
        <div class="items-start">
            <p class="text-2xl font-medium">14 Days Return</p>
            <p class="text-lg">Shop with confidance</p>
        </div>
    </div>
    <div class="flex items-center space-x-4">
        <i class="fa-solid fa-message text-4xl"></i>
        <div class="items-start">
            <p class="text-2xl font-medium">24/7 Online Support</p>
            <p class="text-lg">Delivered to home</p>
        </div>
    </div>
</div>

<!--category carasol-->
<!-- <div>categories</div> -->

<!--all product lookout-->
<div
    class=" flex md:flex-row flex-col md:space-x-20 space-y-6 justify-center md:px-4 px-2 py-20 w-full h-screen items-stretch">
    <div class="md:w-1/2 w-full h-full items-center justify-center">
        <img src="assets/images/lookout.jpg" alt="lookout" class="w-full h-full object-cover rounded-[20px]">
    </div>
    <div class="flex md:w-1/2 w-full md:space-y-8 space-y-4 md:px-10 h-auto flex-col items-start justify-center">
        <p class="md:text-xl text-sm">YUSHOP OFFERS MOST EXCEPTIONAL PRODUCTS</p>
        <h2 class="md:text-5xl text-3xl font-medium">Lookout Smart products here,<br> there, everywhere.</h2>
        <p class="md:text-lg text-sm">Save when you shop the Best Buy Outlet for clearance, open-box, refurbished and
            pre-owned items save more
            with coupons and 70% off. Super value deals 2024.</p>
        <button
            class="items-center bg-blue-500 hover:bg-stone-950 px-6 py-4 rounded-full text-white md:text-2xl text-sm font-medium">
            <a href="#">View All Products</a>
        </button>
    </div>
</div>

<!--trending items carasoul-->
<!-- <div>
    <h1>Shop Our Trending Items</h1>
    <div>
        <div>
            <img src="">
            <p>product title</p>
            <p>description</p>
            <span>stars rating</span>
            <p>price</p>
        </div>
    </div>
</div> -->

<!--testimonials-->
<div class="w-full md:h-screen h-full bg-gray-100 py-20 items-center justify-center">
    <div class="flex md:flex-row flex-col items-stretch h-full justify-center md:space-x-20 space-y-6 md:px-20">
        <div class="flex flex-col md:w-1/2 w-full h-auto space-y-8 items-start justify-center px-10">
            <p class="md:text-xl text-sm text-slate-700">CLIENT'S TESTIMONIALS</p>
            <h2 class="md:text-5xl text-3xl font-medium">5K+ Satisfied Customers<br>Let's Look Reviews</h2>
            <div class="bg-blue-600 h-1 w-40 rounded-full"></div>
            <p class="md:text-xl text-sm text-slate-700">Loream Save when you shop the Best Buy Outlet for clearance,
                open-box,
                refurbished and pre-owned items save more with coupons and 70% off. Super value deals 2022.</p>
            <a class="md:text-xl text-lg text-blue-700 md:font-medium hover:text-stone-900" href="#">View All Reviews
                ></a>
        </div>
        <div class="flex flex-col md:w-1/2 w-full h-auto px-10 space-y-4 justify-center items-center">
            <div
                class="flex md:flex-row flex-col space-y-4 items-stretch bg-stone-200 justify-start rounded-[20px] p-4">
                <div class="flex items-center justify-center h-auto w-full">
                    <img src="assets/images/p1.jpg" alt="testimonial image" class="w-[100px] h-[100px] rounded-full">
                </div>
                <div class="flex flex-col items-start justify-center md:space-y-6 space-y-4">
                    <p class="md:text-lg text-sm">
                        As always a 5 star! I bought this theme the third or fourth time so far... really loving it.
                        The new update from 6.9 is awesome.
                    </p>
                    <div class="text-orange-400">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="md:text-xl text-lg font-medium">John Doe</p>
                </div>
            </div>
            <div class="w-full flex items-center justify-center space-x-10">
                <i class="fa-solid fa-less-than bg-slate-300 rounded-full p-2 hover:shadow-md"></i>
                <i class="fa-solid fa-greater-than bg-slate-300 rounded-full p-2 hover:shadow-md"></i>
            </div>
        </div>


    </div>
</div>

<!--top blogs -->
<div class="flex flex-col w-full md:h-screen h-full space-y-6 px-4 py-20 items-center justify-start">
    <div class="flex flex-col space-y-4">
        <h1 class="md:text-4xl text-3xl font-semibold md:font-bold">Top Blogs</h1>
        <div class="bg-blue-600 md:w-40 w-32 h-1 rounded-full"></div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 h-full w-full p-4">
        <!-- Blog 1 -->
        <div class="flex flex-col items-center justify-between p-4 space-y-4">
            <div class="flex flex-col items-center justify-center w-full h-auto rounded-[20px] overflow-hidden">
                <img src="assets/images/blog2.jpg" alt="blogimg" class="w-full h-full object-cover">
            </div>
            <div class="flex flex-col space-y-2 w-full text-start">
                <p class="text-xl font-medium">The Future of the Home Design</p>
                <a class="text-lg font-md text-blue-700" href="#">Continue Reading <i
                        class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="flex justify-between w-full">
                <div class="flex items-center space-x-4">
                    <img src="assets/images/p1.jpg" alt="blog author" class="w-10 h-10 rounded-full">
                    <p class="text-sm font-semibold">by Rose Tyler</p>
                </div>
                <div>January 20, 2024</div>
            </div>
        </div>

        <!-- Blog 2 -->
        <div class="flex flex-col items-center justify-between p-4 space-y-4">
            <div class="flex flex-col items-center justify-center w-full h-auto rounded-[20px] overflow-hidden">
                <img src="assets/images/blog3.jpg" alt="blogimg" class="w-full h-full object-cover">
            </div>
            <div class="flex flex-col space-y-2 w-full text-start">
                <p class="text-xl font-medium">The Future of the Home Design</p>
                <a class="text-lg font-md text-blue-700" href="#">Continue Reading <i
                        class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="flex justify-between w-full">
                <div class="flex items-center space-x-4">
                    <img src="assets/images/p1.jpg" alt="blog author" class="w-10 h-10 rounded-full">
                    <p class="text-sm font-semibold">by Rose Tyler</p>
                </div>
                <div>January 20, 2024</div>
            </div>
        </div>

        <!-- Blog 3 -->
        <div class="flex flex-col items-center justify-between p-4 space-y-4">
            <div class="flex flex-col items-center justify-center w-full h-auto rounded-[20px] overflow-hidden">
                <img src="assets/images/blog1.jpg" alt="blogimg" class="w-full h-full object-cover">
            </div>
            <div class="flex flex-col space-y-2 w-full text-start">
                <p class="text-xl font-medium">The Future of the Home Design</p>
                <a class="text-lg font-md text-blue-700" href="#">Continue Reading <i
                        class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="flex justify-between w-full">
                <div class="flex items-center space-x-4">
                    <img src="assets/images/p1.jpg" alt="blog author" class="w-10 h-10 rounded-full">
                    <p class="text-sm font-semibold">by Rose Tyler</p>
                </div>
                <div>January 20, 2024</div>
            </div>
        </div>
    </div>


</div>

<!--trusted companies-->
<div>Trusted companies carasoul</div>

<!--footer section-->
<div>
    <div>
        <div>
            <h2>Company</h2>
            <p>About Us</p>
            <p>Careers</p>
            <p>Affilites</p>
            <p>Blog</p>
        </div>
        <div>
            <h2>Shop</h2>
            <p>Appliances</p>
            <p>Gedgets</p>
            <p>Wearables</p>
            <p>Shop All</p>
        </div>
        <div>
            <h2>Support</h2>
            <p>Contact Us</p>
            <p>Returns</p>
            <p>Frequently Asked Questions</p>
            <p>Privacy</p>
        </div>
        <div>
            icons
        </div>
    </div>

</div>

<script src="js/script.js"></script>
</body>

</html>