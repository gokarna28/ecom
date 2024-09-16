<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YUSHOP</title>

    <base href="http://localhost/MIS/" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <!--header-->
    <div class="fixed z-50 bg-white/50 backdrop-blur-md w-full shadow-md flex items-center justify-between px-10 py-4 ">

        <!-- mobile menu btn -->
        <div class="md:hidden">
            <i class="fa-solid fa-bars text-2xl cursor-pointer" id="navBtn"></i>
        </div>
        <div class="text-2xl font-bold">YUSHOP</div>
        <nav class="items-center md:flex hidden">
            <ul class="flex items-center space-x-6">
                <li class="text-lg font-medium hover:text-blue-600"><a href="#">Home</a></li>
                <li class="text-lg font-medium hover:text-blue-600"><a href="pages/shop.php">Shop</a></li>
                <!-- <li id="categories" class="text-lg font-medium hover:text-blue-600"><a href="#">Categories</a>
                    <div id="dropdownContent"
                        class="hidden origin-top-right absolute  w-56 mx-auto rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
                        <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="dropdownButton">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                role="menuitem">Link 1</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                role="menuitem">Link 2</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                role="menuitem">Link 3</a>
                        </div>
                    </div>
                </li> -->
                <li class="text-lg font-medium hover:text-blue-600"><a href="#">Track Order</a></li>
                <li class="text-lg font-medium hover:text-blue-600"><a href="/blog.php">Blog</a></li>
                <li class="text-lg font-medium hover:text-blue-600"><a href="#">About</a></li>
                <li class="text-lg font-medium hover:text-blue-600"><a href="#">Contact</a></li>

                <li class="text-lg font-medium hover:text-blue-600" id="searchBtn"><i
                        class="fa-solid fa-magnifying-glass"></i></li>
            </ul>
        </nav>
        <div class="md:hidden">
            <i class="fa-solid fa-cart-shopping text-2xl md:mr-2 text-blue-700 cursor-pointer" id="mobileCartBtn"></i>
        </div>
        <div class="items-center md:flex hidden">
            <div class="flex items-center justify-center space-x-6">
                <p class="cursor-pointer text-lg font-medium"><i class="fa-solid fa-arrows-rotate text-xl"></i></p>
                <p class="cursor-pointer text-lg font-medium" id="wishBtn"><i class="fa-regular fa-heart text-xl"></i>
                </p>
                <p class="cursor-pointer text-lg font-medium z-30" id="showMenu"><i
                        class="fa-regular fa-user text-xl mr-2"></i>Sign In</p>
                <button id="cartBtn" class="items-center bg-blue-500 px-4 py-2 rounded-full text-white">
                    <p class="text-lg font-medium"><i class="fa-solid fa-cart-shopping text-xl mr-2"></i>cart
                        $0.00</p>
                </button>
            </div>

        </div>



        <!--accounts signin and register-->
        <div id="loginRegister"
            class="fixed flex right-0 w-full h-screen top-0 justify-end z-50 space-x-4 inset-0 bg-gray-500/50">

            <div id="closeMenu"
                class="bg-slate-50 hover:bg-slate-300 flex items-center justify-center rounded-full w-10 h-10 shadow-md mt-5 text-2xl">
                <i class="fa-solid fa-xmark"></i>
            </div>
            <div class="flex items-start justify-center bg-slate-50 w-1/4 min-h-screen opacity-100 shadow-md p-6">
                <div class="w-full h-full flex flex-col items-center justify-start py-20 space-y-4">
                    <div class="flex flex-col items-center justify-center w-full">
                        <i class="fa-regular fa-user text-2xl font-medium"></i>
                        <p class="text-xl font-semibold">Account</p>
                    </div>
                    <div class="flex flex-col w-full items-start justify-center space-y-4">
                        <div class="flex items-center w-full justify-center space-x-20">
                            <a id="loginBtn" class="text-xl font-semibold text-blue-700 hover:text-blue-700"
                                href="#">Login</a>
                            <a id="registerBtn" class="text-xl font-semibold hover:text-blue-700" href="#">Register</a>
                        </div>
                        <div class="w-full h-[1px] bg-slate-300"></div>
                    </div>
                    <!--login form-->
                    <div id="loginForm" class="w-full h-full items-center justify-center space-y-4">
                        <div class="flex flex-col text-xl space-y-2">
                            <label>Email</label>
                            <input class="px-4 py-2 border rounded-md" type="text" placeholder="Enter your Email">
                        </div>
                        <div class="flex flex-col text-xl space-y-2">
                            <label>Password</label>
                            <input class="px-4 py-2 border rounded-md" type="text" placeholder="Enter your Password">
                        </div>

                        <button
                            class="px-4 py-3 hover:bg-blue-700 text-xl text-white rounded-full font-semibol bg-stone-900 w-full mt-6">Login</button>
                    </div>

                    <!--Register form-->
                    <div id="registerForm" class="w-full hidden h-full items-center justify-center space-y-4">
                        <div class="flex flex-col text-xl space-y-2">
                            <label>Name</label>
                            <input class="px-4 py-2 border rounded-md" type="text" placeholder="Enter your Name">
                        </div>
                        <div class="flex flex-col text-xl space-y-2">
                            <label>Email</label>
                            <input class="px-4 py-2 border rounded-md" type="text" placeholder="Enter your Email">
                        </div>
                        <div class="flex flex-col text-xl space-y-2">
                            <label>Password</label>
                            <input class="px-4 py-2 border rounded-md" type="text" placeholder="Enter your Password">
                        </div>

                        <button
                            class="px-4 py-3 hover:bg-blue-700 text-xl text-white rounded-full font-semibol bg-stone-900 w-full mt-6">Login</button>
                    </div>

                </div>
            </div>
        </div>

        <!--cart sidemenu-->
        <div id="cartMenu"
            class="fixed flex right-0 w-full h-screen top-0 justify-end z-50 space-x-4 inset-0 bg-gray-500/50">

            <div id="closeCart"
                class="bg-slate-50 hover:bg-slate-300 flex items-center justify-center rounded-full w-10 h-10 shadow-md mt-5 text-2xl">
                <i class="fa-solid fa-xmark"></i>
            </div>
            <div
                class="flex flex-col items-start justify-start bg-slate-50 md:w-1/4 w-3/4 min-h-screen opacity-100 shadow-md p-6 space-y-10">

                <div class="flex flex-col items-center justify-center w-full">
                    <i class="fa-solid fa-cart-shopping text-2xl"></i>
                    <p class="text-xl font-semibold">Cart</p>
                </div>

                <div class="flex flex-col items-center justify-start w-full h-full">
                    <div class="bg-slate-50 w-full hover:bg-stone-200 flex items-center justify-center p-2">
                        <div class="flex items-center justify-center w-32 h-20">
                            <img src="assets/images/blog1.jpg" alt="productimage" class="w-full h-full object-cover">
                        </div>
                        <div class="w-full px-4 overflow-hidden">
                            <p class="text-xl font-medium">Amazing Couch</p>
                            <p class="text-lg">1x $220</p>
                            <p class="text-lg">product code</p>
                        </div>
                    </div>
                    <div class="bg-slate-50 w-full hover:bg-stone-200 flex items-center justify-center p-2">
                        <div class="flex items-center justify-center w-32 h-20">
                            <img src="assets/images/blog1.jpg" alt="productimage" class="w-full h-full object-cover">
                        </div>
                        <div class="w-full px-4 overflow-hidden">
                            <p class="text-xl font-medium">Amazing Couch</p>
                            <p class="text-lg">1x $220</p>
                            <p class="text-lg">product code</p>
                        </div>
                    </div>
                </div>
                <div class="w-full flex flex-col items-center">
                    <div class="flex items-center justify-between w-full text-xl">
                        <p>SUBTOTAL:</p>
                        <p>$220</p>
                    </div>
                    <div class="flex flex-col items-center w-full">
                        <button
                            class="px-4 py-3 hover:bg-blue-700 text-xl text-white rounded-full font-semibol bg-stone-900 w-full mt-6">
                            View Cart
                        </button>
                        <button
                            class="px-4 py-3 bg-blue-700 text-xl text-white rounded-full font-semibol hover:bg-stone-700 w-full mt-6">
                            Checkout
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!--wishlist-->
        <div id="wishMenu"
            class="fixed flex right-0 w-full h-screen top-0 justify-end z-50 space-x-4 inset-0 bg-gray-500/50">

            <div id="closeWish"
                class="bg-slate-50 hover:bg-slate-300 flex items-center justify-center rounded-full w-10 h-10 shadow-md mt-5 text-2xl">
                <i class="fa-solid fa-xmark"></i>
            </div>
            <div
                class="flex flex-col items-start justify-start bg-slate-50 w-1/4 min-h-screen opacity-100 shadow-md p-6 space-y-10">

                <div class="flex flex-col items-center justify-center w-full">
                    <i class="fa-solid fa-cart-shopping text-2xl"></i>
                    <p class="text-xl font-semibold">Wish List</p>
                </div>

                <div class="flex flex-col items-center justify-start w-full h-full">
                    <div class="bg-slate-50 w-full hover:bg-stone-200 flex items-center justify-center p-2">
                        <div class="flex items-center justify-center w-32 h-20">
                            <img src="assets/images/blog1.jpg" alt="productimage" class="w-full h-full object-cover">
                        </div>
                        <div class="w-full px-4 overflow-hidden">
                            <p class="text-xl font-medium">Amazing Couch</p>
                            <p class="text-lg">1x $220</p>
                            <p class="text-lg">product code</p>
                        </div>
                    </div>
                    <div class="bg-slate-50 w-full hover:bg-stone-200 flex items-center justify-center p-2">
                        <div class="flex items-center justify-center w-32 h-20">
                            <img src="assets/images/blog1.jpg" alt="productimage" class="w-full h-full object-cover">
                        </div>
                        <div class="w-full px-4 overflow-hidden">
                            <p class="text-xl font-medium">Amazing Couch</p>
                            <p class="text-lg">1x $220</p>
                            <p class="text-lg">product code</p>
                        </div>
                    </div>
                </div>
                <div class="w-full flex items-center">
                    <div class="flex flex-col items-center w-full">
                        <button
                            class="px-4 py-3 hover:bg-blue-700 text-xl text-white rounded-full font-semibol bg-stone-900 w-full mt-6">
                            View Wishlist
                        </button>
                        <button
                            class="px-4 py-3 bg-blue-700 text-xl text-white rounded-full font-semibol hover:bg-stone-700 w-full mt-6">
                            Add All to cart
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!--Search-->
        <div id="searchMenu"
            class="fixed flex right-0 w-full h-screen top-0 justify-end z-50 space-x-4 inset-0 bg-gray-500/50">

            <div class="flex flex-col items-center justify-start bg-slate-50 w-full h-3/4 opacity-100 shadow-md p-6">

                <div id="closeSearch" class="flex w-full items-center justify-end rounded-full text-4xl">
                    <i class="fa-solid fa-xmark hover:text-blue-700"></i>
                </div>
                <div class="flex flex-col space-y-6 items-center justify-start w-full">
                    <h1 class="text-4xl font-bold">What Are You Looking For?</h1>

                    <div class="flex items-center border justify-center text-lg w-1/2">
                        <select class="border-r px-4 py-2">
                            <option>All Categories</option>
                            <option>cate1</option>
                            <option>cate2</option>
                            <option>cate3</option>
                            <option>cate4</option>
                        </select>
                        <input class="px-4 py-2 w-full outline-none" type="text" placeholder="Search for Products">
                        <button class="text-white bg-stone-900 hover:bg-stone-700 px-5 py-2">Search</button>
                    </div>
                </div>

            </div>
        </div>

        <!--Mobile NavMenu-->
        <div id="navMenu"
            class="fixed flex left-0 w-full h-screen top-0 justify-start z-50 space-x-4 inset-0 bg-gray-500/50">

            <div
                class="flex flex-col items-start justify-start bg-slate-50 md:w-1/4 w-3/4 min-h-screen opacity-100 shadow-md p-6 space-y-10">


            </div>
            <div id="closeNav"
                class="bg-slate-50 hover:bg-slate-300 flex items-center justify-center rounded-full w-10 h-10 shadow-md mt-5 text-2xl">
                <i class="fa-solid fa-xmark"></i>
            </div>
        </div>
    </div>