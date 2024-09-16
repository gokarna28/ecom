<?php include('../backend/functions.php') ?>

<!-- header  -->
<?php include('../components/header.php') ?>

<!-- sidebar -->
<?php include('../components/sidebar.php') ?>


<!-- dashboard section -->
<section class="bg-slate-50 flex  items-center justify-center py-24 px-4">

    <div class="md:flex hidden w-[20vw]"></div>

    <!-- add product form  -->
    <div class="bg-slate-50 md:w-[80vw] w-full p-4 rounded-md">
        <div class="bg-slate-200 p-4 rounded-md">
            <h2 class="text-lg font-medium">Fill all the category details</h2>

            <form action="" method="post" enctype="multipart/form-data">
                <div class="w-full space-y-4 p-4 ">
                    <div class="flex md:flex-row flex-col  md:items-center items-start w-1/2 md:space-x-6">
                        <div class="flex flex-col w-full space-y-2 text-lg">
                            <label>category Name</label>
                            <span class="text-red-500 text-sm"><?php echo $message?></span>
                            <input class="w-full px-4 py-1 rounded-md border border-slate-300" type="text"
                                name="cate_name" placeholder="Name">
                        </div>

                    </div>
                    <div class="w-full flex justify-start">
                        <button type="submit" name="addCategory"
                            class="bg-blue-700 text-xl font-medium rounded-md py-2 px-6 text-white hover:bg-stone-800">Add
                            Now</button>
                    </div>
                </div>
            </form>
        </div>

        <!-- categories details  -->
        <div class="mt-10 p-4 space-y-4">
            <h2 class="text-lg font-medium">Category table</h2>
            <table class="min-w-full border-collapse border border-slate-400 text-left">
                <thead class="bg-stone-800 text-white">
                    <tr>
                        <th class="border-b border-l border-r p-4">S.N</th>
                        <th class="border-b border-l border-r p-4">Category Name</th>
                        <th class="border-b border-l border-r p-4">Added On</th>
                        <th class="border-b border-l border-r p-4">Updated On</th>
                        <th class="border-b border-l border-r p-4">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-300">
                    <?php get_categories()?>
                </tbody>
            </table>

        </div>

    </div>


</section>


<!-- footer  -->
<?php include('../components/footer.php') ?>