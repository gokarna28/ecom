<?php include('../backend/functions.php') ?>
<!-- header  -->
<?php include('../components/header.php') ?>

<!-- sidebar -->
<?php include('../components/sidebar.php') ?>

<!-- dashboard section -->
<section class="bg-slate-50 flex  items-center justify-center py-24 px-4">

    <div class="md:flex hidden w-[20vw]"></div>

    <!-- add category form  -->
    <div class="bg-slate-50 md:w-[80vw] w-full p-4 rounded-md">

        <!-- categories details  -->
        <div class=" space-y-4">
            <h2 class="text-lg font-medium">Product table</h2>
            <table class="min-w-full border-collapse border border-slate-100 text-left">
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
                <tbody class="bg-gray-300">
                    <?php get_product() ?>
                </tbody>
            </table>

        </div>

    </div>


</section>


<!-- footer  -->
<?php include('../components/footer.php') ?>