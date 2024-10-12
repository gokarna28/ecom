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
            <ul id="productList" class="flex space-x-4">
                <li class="card-item border w-1/3 flex flex-col bg-slate-50 hover:border-blue-700 rounded-[10px] overflow-hidden p-2">
                    <div class="product_action_btn absolute py-24 ml-[370px] flex space-y-2 text-white flex-col bg-transparent text-2xl">
                        <i class="fa-solid fa-cart-shopping bg-stone-900 hover:bg-black rounded-full p-2 flex items-center justify-center"></i>
                        <i class="fa-regular fa-heart bg-stone-900 hover:bg-black rounded-full p-2 flex items-center justify-center"></i>
                        <i class="fa-solid fa-arrows-rotate bg-stone-900 hover:bg-black rounded-full p-2 flex items-center justify-center"></i>
                    </div>

                    <div class="flex flex-col items-stretched justify-center">

                        <img src="assets/images/sofa.jpg" alt="Card Image"
                            class="w-full h-[20vw] object-cover rounded-[10px]">
                        <div class="flex flex-col space-y-2">
                            <p class="text-lg text-gray-400">category name</p>
                            <h2 class="text-xl font-bold">Amazing Sofa</h2>
                            <p class="text-lg text-gray-500">Rs.1200</p>
                        </div>
                    </div>

                </li>
            </ul>
        </div>
    </div>
</div>

<!-- footer section -->
<?php include('../includes/footer.php') ?>