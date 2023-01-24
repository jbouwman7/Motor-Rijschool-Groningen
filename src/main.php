<?php
    $faqs = 10;
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/style.css">
    <script src="js/app.js" defer></script>
    <title>Motor Rijschool Groningen</title>
</head>

<body>
    <!-- -------------------- 
     -------HEADER------- 
     --------------------  -->
    <nav class="fixed z-50 w-full nav-bar">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex justify-between w-full space-x-7">
                    <!-- Website Logo -->
                    <a href="#" class="flex items-center py-4 px-2 link">
                        <img src="img/logo.png" alt="Logo" class="h-8 w-8 mr-2">
                    </a>
                    <!-- Primary Navbar items -->
                    <div class="hidden md:flex items-center gap-4 space-x-1">
                        <a href="#pakketten" class="nav-text-desktop">Pakketten</a>
                        <a href="#about" class="nav-text-desktop">About</a>
                        <a href="#faq" class="nav-text-desktop">Q&A</a>
                        <a href="#review" class="nav-text-desktop">Reviews</a>
                        <a href="#contact" class="nav-text-desktop">Contact</a>
                    </div>
                </div>
                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button class="outline-none mobile-menu-button">
                        <svg class=" w-6 h-6 text-white hover:text-gray" x-show="!showMenu" fill="none"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- mobile menu -->
        <div class="hidden mobile-menu shadow-md">
            <ul class="">
                <li><a href="#pakketten" class="nav-text-mobile link">Pakketten</a></li>
                <li><a href="#about" class="nav-text-mobile link">About</a></li>
                <li><a href="#faq" class="nav-text-mobile link">Q&A</a></li>
                <li><a href="#review" class="nav-text-mobile link">Reviews</a></li>
                <li><a href="#contact" class="nav-text-mobile link">Contact</a></li>
            </ul>
        </div>
    </nav>


    <!-- ------------------
    -------hero-------
    ------------------ -->
    <div class="hero w-full min-h-screen">
        <video class="absolute object-cover w-full min-h-full" width="100%" height="auto" autoplay loop muted>
            <source src="video/video.mp4">
        </video>
        <!-- <div class="content absolute text-right text-white top-1/3 left-1/2">
            <h1 class="text-7xl md:w-544"><span class="text-primary">Motor</span> Rijschool Groningen</h1>
            <p class="text-3xl mt-2 md:w-333 ml-auto mr-0">Snel en veilig je motor rijbewijs halen</p>
        </div> -->
    </div>
    <!-- -------------------
    -----ABOUT ME------
    ------------------- -->
    <div class="relative overflow-hidden bg-white" id="about">
        <div class="mx-auto max-w-7xl">
            <div class="relative z-10 bg-white pb-8 sm:pb-20 md:pb-24 lg:w-full lg:max-w-2xl lg:pb-28 xl:pb-32">
                <svg class="absolute inset-y-0 right-0 hidden w-48 translate-x-1/2 transform text-white lg:block min-h-screen"
                    fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                    <polygon points="50,0 100,0 50,100 0,100" />
                </svg>
                <main class="mx-auto max-w-7xl px-6 max-md:mt-12 max-lg:mt-16 lg:px-8">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl md:text-6xl">
                            <span class="block xl:inline">Data to enrich your</span>
                            <span class="block text-primary xl:inline">online business</span>
                        </h1>
                        <p
                            class="mt-3 text-base text-gray-500 sm:mx-auto sm:mt-5 sm:max-w-xl sm:text-lg md:mt-5 md:text-xl lg:mx-0">
                            Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo.
                            Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
                    </div>
                </main>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:h-full lg:w-full"
                src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80"
                alt="">
        </div>
    </div>
    <!-- ---------
    -----FAQ------
    ---------- -->
    <!-- This example requires Tailwind CSS v3.0+ -->
    <div class="bg-gray" id="faq">
        <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:py-40 lg:px-8">
            <div class="mx-auto max-w-4xl divide-y divide-primary">
                <h2 class="text-2xl font-bold leading-10 tracking-tight text-gray-900">Frequently asked questions</h2>
                <dl class="mt-10 space-y-6 divide-y divide-primary">
                    <!-- loop trough all questions -->
                    <?php for ($i=0; $i < $faqs; $i++) : ?>
                    <div class="pt-6">
                        <dt>
                            <!-- Expand/collapse question button -->
                            <button type="button"
                                class="flex w-full faq items-start justify-between text-left text-gray-900"
                                aria-controls="faq-0" aria-expanded="false">
                                <span class="text-base font-semibold leading-7">What&#039;s the best thing about
                                    Switzerland?</span>
                                <span class="ml-6 flex h-7 items-center">
                                    <!-- min -->
                                    <svg class="hidden h-6 w-6 faq-icon-min-<?= $i ?> text-primary" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                                    </svg>
                                    <!-- plus -->
                                    <svg class="h-6 w-6 faq-icon-plus-<?= $i ?> text-primary" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                    </svg>
                                </span>
                            </button>
                        </dt>
                        <dd class="mt-2 pr-12" id="faq-0">
                            <p class="text-base leading-7 text-gray-600 faq-text-<?= $i ?> hidden">I don&#039;t know, but the flag is a big plus.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam
                                fugiat.</p>
                        </dd>
                    </div>
                        <?php endfor ?>
                    <!-- end loop -->
                </dl>
            </div>
        </div>
    </div>
    <script>

    </script>
</body>

</html>