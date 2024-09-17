<!-- sidebar  -->
<div
    class="bg-slate-800 md:w-[20vw] w-80dvw md:flex  text-white top-0 left-0 fixed md:p-10 p-6 hidden flex-col items-center h-screen">
    <div class="text-4xl font-bold w-full">YUSHOP</div>
    <!-- side nav -->
    <div class="mt-20 w-full">
        <ul class="flex flex-col items-start space-y-6  md:text-lg text-sm w-full">
            <li><a class="flex items-center space-x-6" href="#">
                    <i class="fa-solid fa-gauge"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li><a class="flex items-center space-x-6" href="pages/add_categories.php">
                    <i class="fa-solid fa-list"></i>
                    <p>Categories</p>
                </a>
            </li>

            <li class="flex items-center space-x-6">
                <div class="w-full relative">
                    <span onclick="showProduct()" class="flex items-center justify-between cursor-pointer">
                        <i class="fa-solid fa-cubes-stacked"></i>
                        Products <i class="fa fa-chevron-down down text-sm"></i>
                    </span>
                    <ul class="flex flex-col pl-10 overflow-hidden transition-all ease-in-out duration-300 max-h-0 opacity-0"
                        id="productList">
                        <li class="mt-4 text-lg list-none hover:text-blue-600 transition-all ease-in-out duration-300">
                            <a href="pages/add_product.php">Add Products</a>
                        </li>
                        <li class="mt-4 text-lg list-none hover:text-blue-600 transition-all ease-in-out duration-300">
                            <a href="pages/view_product.php">View Products</a>
                        </li>

                    </ul>
                </div>
            </li>
            <li><a class="flex items-center space-x-6" href="#">
                    <i class="fa-solid fa-users"></i>
                    <p>Custormers</p>
                </a>
            </li>
            <li><a class="flex items-center space-x-6 w-full" href="#">
                    <i class="fa-solid fa-file-invoice"></i>
                    <p>Invoices</p>
                </a>
            </li>
            <li><a class="flex items-center space-x-6 w-full" href="#">
                    <i class="fa-solid fa-cookie"></i>
                    <p>Order</p>
                </a>
            </li>
        </ul>
    </div>
</div>