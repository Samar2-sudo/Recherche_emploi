<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords"
        content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
    <!-- Css -->
    <link rel="stylesheet" href="assets/dist/styles.css">
    <link rel="stylesheet" href="assets/dist/all.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <title>Dashboard | Tailwind Admin</title>
</head>

<body>
    <!-- Container -->
    <div class="mx-auto bg-grey-400">
        <!-- Screen -->
        <div class="min-h-screen flex flex-col">
            <!-- Header Section -->
            <header class="bg-nav">
                <div class="flex justify-between">
                    <div class="p-1 mx-3 inline-flex items-center">
                        <i class="fas fa-bars pr-2 text-white" onclick="sidebarToggle()"></i>
                        <h1 class="text-white p-2">Logo</h1>
                    </div>
                    <div class="p-1 flex flex-row items-center">
                        <a href="https://github.com/tailwindadmin/admin"
                            class="text-white p-2 mr-2 no-underline hidden md:block lg:block">Github</a>

                        <img onclick="profileToggle()" class="inline-block h-8 w-8 rounded-full"
                            src="https://avatars0.githubusercontent.com/u/4323180?s=460&v=4" alt="">
                        <a href="#" onclick="profileToggle()"
                            class="text-white p-2 no-underline hidden md:block lg:block">Adam Wathan</a>
                        <div id="ProfileDropDown"
                            class="rounded hidden shadow-md bg-white absolute pin-t mt-12 mr-1 pin-r">
                            <ul class="list-reset">
                                <li><a href="#"
                                        class="no-underline px-4 py-2 block text-black hover:bg-grey-light">My
                                        account</a></li>
                                <li><a href="#"
                                        class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Notifications</a>
                                </li>
                                <li>
                                    <hr class="border-t mx-2 border-grey-ligght">
                                </li>
                                <li><a href="#"
                                        class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
            <!-- /Header -->

            <div class="flex flex-1">
                <!-- Sidebar -->
                <aside id="sidebar"
                    class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block">
                    <ul class="list-reset flex flex-col">


                        <li class="w-full h-full py-3 px-2 border-b border-light-border">
                            <a href="{{ route('categories.index') }}"
                                class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                <i class="fas fa-list float-left mx-2"></i>
                                Categories
                                <span><i class="fa fa-angle-right float-right"></i></span>
                            </a>
                        </li>

                        <li class="w-full h-full py-3 px-2 border-b border-light-border">
                            <a href="{{ route('entreprise.index') }}"
                                class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                <i class="fas fa-building float-left mx-2"></i>
                                Entreprises
                                <span><i class="fa fa-angle-right float-right"></i></span>
                            </a>
                        </li>

                        <li class="w-full h-full py-3 px-2 border-b border-light-border">
                            <a href="{{ route('offres.index') }}"
                                class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                <i class="fas fa-file float-left mx-2"></i>
                                Offres
                                <span><i class="fa fa-angle-right float-right"></i></span>
                            </a>
                        </li>

                        <!-- New Users Button -->
                        <li class="w-full h-full py-3 px-2 border-b border-light-border">
                            <a href="{{ route('users.index') }}"
                                class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                <i class="fas fa-users float-left mx-2"></i>
                                Users
                                <span><i class="fa fa-angle-right float-right"></i></span>
                            </a>
                        </li>
                        <!-- End of New Users Button -->

                    </ul>
                </aside>
                <!-- /Sidebar -->

                <!-- Main -->
                <main class="py-4">
                    @yield('content')
                </main>
                <!-- /Main -->

            </div>
            <!-- Footer -->
            <footer class="bg-grey-darkest text-white p-2">
                <!-- ... (existing footer content) ... -->
            </footer>
            <!-- /Footer -->

        </div>

    </div>
    <script src="./main.js"></script>
</body>

</html>