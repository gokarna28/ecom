<!-- header  -->
<?php include('../components/header.php') ?>

<!-- sidebar -->
<?php include('../components/sidebar.php') ?>

<?php include('../backend/product_update.php')?>

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
                <div id="update_form_container">
                    <!-- //update form here  -->
                </div>
            </div>
        </div>
    </div>

</section>


<!-- footer  -->
<?php include('../components/footer.php') ?>