<!-- header  -->
<?php include('../components/header.php') ?>

<!-- sidebar -->
<?php include('../components/sidebar.php') ?>

<!-- view product section -->
<section class="bg-slate-50 flex  items-center justify-center py-24 px-4">

    <div class="md:flex hidden w-[20vw]"></div>

    <div class="bg-slate-50 md:w-[80vw] w-full p-4 rounded-md">

        <!-- product details  -->
        <div class=" space-y-4">
            <h2 class="text-lg font-medium">Product table</h2>
            <table id="product_table" class="min-w-full border-collapse border border-slate-100 text-left">
                <thead class="bg-stone-800 text-white">
                    <tr>
                        <th class="border-b border-l border-r p-4">S.N</th>
                        <th class="border-b border-l border-r p-4">Product Image</th>
                        <th class="border-b border-l border-r p-4">Product Name</th>
                        <th class="border-b border-l border-r p-4">Category Name</th>
                        <th class="border-b border-l border-r p-4">Product Price</th>
                        <th class="border-b border-l border-r p-4">Product Discription</th>
                        <th class="border-b border-l border-r p-4">Added On</th>
                        <th class="border-b border-l border-r p-4">Updated On</th>
                        <th class="border-b border-l border-r p-4">Action</th>
                    </tr>
                </thead>
                <tbody id="productData" class="bg-gray-300">
                    <!-- product data  -->
                </tbody>
            </table>

        </div>

        <!-- product update form -->
        <div id="update_product_form"
            class="hidden bg-slate-800/50 w-full h-screen fixed top-0 left-0  items-center justify-center">

            <div
                class="fixed left-1/2  transform -translate-x-1/4 translate-y-1/4 z-50 shadow-md bg-slate-200 p-4 space-x-3 rounded-md  w-1/2 ">
                <div class="w-full flex justify-end">
                    <i onclick="closeProductUpdate()" class="fa-solid fa-xmark text-2xl hover:text-red-500"></i>
                </div>
                <h1 text-xl font-medium>Update Product Details</h1>

                <form class="space-y-4 p-4" method="post" enctype="multipart/form-data">
                    <input id="pro_id" type="hidden" name="pro_id" value="">
                    <div class="flex items-center space-x-6">
                        <div class="flex flex-col space-y-2 w-full">
                            <lable>Product Name</lable>
                            <input class="text-lg border border-slate-500 text-slate-500 px-4 py-1 rounded-md"
                                id="pro_name" type="text" name="pro_name" value="">
                        </div>
                        <div class="flex flex-col space-y-2 w-full">
                            <lable>Product Category</lable>

                            <select name="updated_cate"
                                class="cat-selector text-lg border bg-white border-slate-500 text-slate-500 px-4 py-1 rounded-md">

                                <option id="current_cate" value=""></option>
                                <!-- //category name  -->
                               
                            </select>
                        </div>
                    </div>
                    <div class="w-full flex space-x-6">
                        <div class="w-1/2">
                            <div class="flex flex-col space-y-2">
                                <lable>Product Price</lable>
                                <input class="text-lg border border-slate-500 text-slate-500 px-4 py-1 rounded-md"
                                    id="pro_price" type="text" name="price" value="">
                            </div>
                            <div class="flex flex-col space-y-2">
                                <lable>Product Discription</lable>
                                <textarea
                                    class="text-lg border h-24 border-slate-500 text-slate-500 px-4 py-1 rounded-md"
                                    id="disc" type="text" name="disc" value="">
                            </textarea>
                            </div>
                        </div>
                        <div class="w-1/2 flex items-center space-x-4 py-4">
                            <div class="w-1/2 h-full">
                                <img id="pro_image" src="" alt="no Image" class="w-full h-full object-cover">
                            </div>
                            <div class="w-1/2 h-full flex flex-col items-center justify-center space-y-4">
                                <button onclick="removeImage()"
                                    class="bg-red-600 w-36 border border-slate-400 hover:bg-red-700 text-white px-4 py-2 rounded-md">
                                    Remove
                                </button>
                                <label
                                    class="border w-36 bg-white border-slate-400 px-4 py-2 rounded-md cursor-pointer">
                                    Change Image
                                    <input id="fileInput" class="hidden" type="file" accept="image/*" name="updated_img"
                                        value="">
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <button
                            class="bg-blue-700 text-xl font-medium flex items-center justify-center text-white px-6 py-2 rounded-md hover:bg-stone-800"
                            type="submit" name="update_product">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>


<!-- footer  -->
<?php include('../components/footer.php') ?>