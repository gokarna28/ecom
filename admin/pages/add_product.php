<!-- header  -->
<?php include('../components/header.php') ?>

<!-- sidebar -->
<?php include('../components/sidebar.php') ?>


<!-- dashboard section -->
<section class="bg-slate-50 h-full flex  justify-center pt-24 px-4">

    <div class="md:flex hidden w-[20vw]"></div>

    <!-- add product form  -->
    <div class="bg-slate-50 md:w-[80vw] flex flex-col w-full space-y-4 md:p-4">
        <h2 class="text-lg font-medium">Fill all the product details</h2>

        <div id="productResponse"></div>
        <form id="productForm" enctype="multipart/form-data">
            <div class="w-full space-y-4 p-3 ">
                <div class="flex  md:flex-row flex-col md:items-center items-start w-full md:space-x-6">
                    <div class="flex flex-col w-full space-y-2 text-lg">
                        <label>Product Name</label>
                        <input class="w-full px-4 py-1 rounded-md border border-slate-300" type="text" id="pro_name"
                            placeholder="Name" required>
                    </div>
                    <div class="flex flex-col w-full space-y-2 text-lg">
                        <label>Category</label>
                        <select id="pro_category" class="w-full px-4 py-1 rounded-md border border-slate-300 bg-white"
                            required>
                            <option disabled selected value="">--Select--</option>
                            <!-- category id and name dynamic -->

                        </select>
                    </div>
                </div>
                <div class=" flex md:flex-row flex-col items-center w-full md:space-x-6">
                    <div class="flex flex-col w-full space-y-2 text-lg">
                        <label>Price</label>
                        <input class="w-full px-4 py-1 rounded-md border border-slate-300" type="number" id="pro_price"
                            placeholder="Price" required>
                    </div>
                    <div class="flex flex-col w-full space-y-2 text-lg">
                        <label>Product Image</label>
                        <input
                            class="w-full cursor-pointer px-4 py-1 rounded-md border bg-white utline-none border-slate-300"
                            type="file" id="pro_image" required>
                    </div>
                </div>
            </div>
            <div class="px-4 flex flex-col w-full space-y-2 text-lg">
                <label>Discription</label>
                <textarea class="border border-slate-300 w-full h-24 rounded-md px-4 py-1 text-lg" id="pro_discription"
                    placeholder="Discription" required></textarea>
            </div>
            <div class="w-full flex items-center justify-start p-4">
                <button type="submit" id="addProduct"
                    class="bg-blue-700 text-xl font-medium rounded-md py-2 px-6 text-white hover:bg-stone-800">Add
                    Now</button>
            </div>
        </form>
    </div>
</section>


<!-- footer  -->
<?php include('../components/footer.php') ?>