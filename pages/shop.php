<!-- header section -->
<?php include('../includes/header.php') ?>

<div class="h-full w-full py-24">

    <!-- category nav section -->
    <div class="flex items-center justify-evenly border-b">
        <div class="items-center flex flex-col">
            <img src="assets/images/logo/chair.png" width="50">
            <p>Chair</p>
        </div>
        <div class="items-center flex flex-col">
            <img src="assets/images/logo/sofa.png" width="50">
            <p>Chair</p>
        </div>
        <div class="items-center flex flex-col">
            <img src="assets/images/logo/closet.png" width="50">
            <p>Chair</p>
        </div>
        <div class="items-center flex flex-col">
            <img src="assets/images/logo/lamps.png" width="50">
            <p>Chair</p>
        </div>
        <div class="items-center flex flex-col">
            <img src="assets/images/logo/mirror.png" width="50">
            <p>Chair</p>
        </div>
        <div class="items-center flex flex-col">
            <img src="assets/images/logo/table.png" width="50">
            <p>Chair</p>
        </div>
    </div>

    <!--right and left side-->
    <div class="flex items-center">
        <!-- left side category filter -->
        <div class="bg-slate-400 w-1/4 h-full">
            filter
        </div>
        <!-- right side products -->
        <div class="w-3/4 h-full p-10">
            <ul>
                <li class="border w-1/3 flex flex-col bg-slate-50 rounded-[10px] overflow-hidden p-2">
                    <div class="absolute">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <i class="fa-regular fa-heart"></i>
                        <i class="fa-solid fa-arrows-rotate"></i>
                    </div>
                    <a href="#" class="flex flex-col items-stretched justify-center">
                        <img src="assets/images/sofa.jpg" alt="Card Image"
                            class="w-full h-1/2 object-cover rounded-[10px]">
                        <div>
                            <p class="text-lg text-gray-400">category name</p>
                            <h2 class="text-xl font-bold">Amazing Sofa</h2>
                            <div class="text-yellow-500 flex">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <p class="text-lg text-gray-500">Rs.1200</p>
                        </div>
                    </a>

                </li>
            </ul>
        </div>
    </div>
</div>

<!-- footer section -->
<?php include('../includes/footer.php') ?>