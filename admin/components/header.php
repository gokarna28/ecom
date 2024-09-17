<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <base href="http://localhost/MIS/admin/" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>

</head>

<body class="bg-slate-50">
    <!-- header  -->
    <div class="p-4 border bg-white shadow-lg flex justify-between items-center fixed top-0 w-full">
        <div class=" md:flex hidden w-[20vw]"></div>

        <div class="w-1/2 border rounded-full px-6 py-2 flex items-center justify-between sapce-x-6">
            <input class="bg-transparent text-xl w-full outline-none" typpe="search" placeholder="Search here">
            <i class="fa-solid fa-magnifying-glass text-2xl"></i>
        </div>
        <div class="flex items-center w- justify-end ">
            <div class="bg-slate-red-400 w-12 h-12 rounded-full overflow-hidden">
                <img src="assets/images/profile.jpg" alt="Profile image" class="w-full h-full object-cover">
            </div>
        </div>
    </div>