<?php
$faqs = 5;
$reviews = 5;
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/style.css">
    <!-- <script src="https://cdn.tailwindcss.com/%22%3E"></script> -->
    <script src="https://kit.fontawesome.com/b17e2f4f7d.js" crossorigin="anonymous"></script>
    <script src="js/app.js" defer></script>
    <title>Motor Rijschool Groningen</title>
</head>

<body class="text-dark-gray">
    <!-- -------------------- 
     -------HEADER------- 
     --------------------  -->
    <nav class="fixed z-50 w-full nav-bar">
        <div class="max-w-7xl mx-auto px-6">
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
                        <a href="#partner" class="nav-text-desktop">Partnership</a>
                    </div>
                </div>
                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button class="outline-none mobile-menu-button">
                        <svg class=" w-6 h-6 text-white hover:text-gray" x-show="!showMenu" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
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
                <li><a href="#partner" class="nav-text-desktop">Partnership</a></li>
            </ul>
        </div>
    </nav>


    <!-- ---------
    -----hero-----
    ---------- -->
    <div class="hero w-full min-h-screen">
        <video class="absolute object-cover w-full min-h-full" width="100%" height="auto" autoplay loop muted>
            <source src="video/video.mp4">
        </video>
        <!-- <div class="content absolute text-right text-white top-1/3 left-1/2">
            <h1 class="text-7xl md:w-544"><span class="text-primary">Motor</span> Rijschool Groningen</h1>
            <p class="text-3xl mt-2 md:w-333 ml-auto mr-0">Snel en veilig je motor rijbewijs halen</p>
        </div> -->
    </div>
    <!-- -------------
    -----ABOUT ME-----
    -------------- -->
    <div class="flex md:flex-row-reverse flex-col w-full md:justify-between" id="about">
        <main class="my-auto max-w-7xl px-6 max-md:my-8 lg:px-8">
            <div class="sm:text-center md:text-right">
                <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-4xl md:text-5xl">
                    <span class="block xl:inline">Data to enrich your</span>
                    <span class="block text-primary xl:inline">online business</span>
                </h1>
                <p class="mt-3 text-base text-gray-500 sm:mx-auto sm:mt-5 sm:max-w-xl sm:text-lg md:mt-5 md:text-xl md:mr-0">
                    Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo.
                    Elit sunt amet fugiat veniam occaecat fugiat aliqua.
                </p>
            </div>
        </main>
        <div class="md:clip md:max-w-1/3">
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 xl:h-[30rem]" src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80" alt="">
        </div>
    </div>
    <!-- ---------
    -----FAQ------
    ---------- -->
    <div class="bg-gray" id="faq">
        <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:py-40 lg:px-8">
            <div class="divide-y divide-primary">
                <h2 class="text-2xl font-bold leading-10 tracking-tight text-gray-900">Frequently asked questions</h2>
                <dl class="mt-10 space-y-6 divide-y divide-primary">
                    <!-- loop trough all questions -->
                    <?php for ($i = 0; $i < $faqs; $i++) : ?>
                        <div class="pt-6">
                            <dt>
                                <!-- Expand/collapse question button -->
                                <button type="button" class="flex w-full faq items-start justify-between text-left text-gray-900" aria-controls="faq-0" aria-expanded="false">
                                    <span class="text-base font-semibold leading-7">What&#039;s the best thing about
                                        Switzerland?
                                    </span>
                                    <span class="ml-6 flex h-7 items-center">
                                        <!-- plus -->
                                        <svg class="h-6 w-6 f-icon f-icon-<?= $i ?> text-primary transform transition-transform ease-in duration-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                        </svg>
                                    </span>
                                </button>
                            </dt>
                            <dd class="mt-2 pr-12" id="faq-0">
                                <p class="text-base leading-7 text-gray-600 f-text f-text-<?= $i ?> transform transition-transform ease-in-out delay-500 hidden">I don&#039;t know, but the flag is a big plus.
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
    <!-- -------------
    -----revieuws-----
    -------------- -->
    <div class="bg-white" id="review">
        <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:py-40 lg:px-8">
            <h2 class="text-2xl font-bold leading-10 tracking-tight text-gray-900 mb-5">Reviews</h2>

            <div class="-my-10">
                <div class="flex space-x-4 text-sm text-gray-500">
                    <div class="flex-none py-10">
                        <img src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80" alt="" class="h-10 w-10 rounded-full bg-gray-100">
                    </div>
                    <div class="flex-1 py-10">
                        <h3 class="font-medium text-gray-900">Emily Selman</h3>
                        <p><time datetime="2021-07-16">July 16, 2021</time></p>

                        <div class="mt-4 flex items-center">
                            <?php for ($i = 0; $i < 5; $i++) : ?>
                                <!-- minister geel -->
                                <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                </svg>
                            <?php endfor ?>
                        </div>
                        <p class="sr-only">5 out of 5 stars</p>

                        <div class="prose prose-sm mt-4 max-w-none text-gray-500">
                            <p>This icon pack is just what I need for my latest project. There's an icon for just about anything I could ever need. Love the playful look!</p>
                        </div>
                    </div>
                </div>

                <!-- --------- -->
                <div class="flex space-x-4 text-sm text-gray-500">
                    <div class="flex-none py-10">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80" alt="" class="h-10 w-10 rounded-full bg-gray-100">
                    </div>
                    <div class="flex-1 py-10 border-t border-primary">
                        <h3 class="font-medium text-gray-900">Hector Gibbons</h3>
                        <p><time datetime="2021-07-12">July 12, 2021</time></p>

                        <div class="mt-4 flex items-center">
                            <?php for ($i = 0; $i < 5; $i++) : ?>
                                <!-- minister geel -->
                                <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                </svg>
                            <?php endfor ?>
                        </div>
                        <p class="sr-only">5 out of 5 stars</p>

                        <div class="prose prose-sm mt-4 max-w-none text-gray-500">
                            <p>Blown away by how polished this icon pack is. Everything looks so consistent and each SVG is optimized out of the box so I can use it directly with confidence. It would take me several hours to create a single icon this good, so it's a steal at this price.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ------------
    -----contact-----
    ------------- -->
    <div class="bg-gray" id="contact">
        <div class="mx-auto max-w-7xl py-16 px-6 sm:py-24 lg:px-8">
            <h2 class="sr-only">Contact us</h2>

            <div class="grid grid-cols-1 lg:grid-cols-3">
                <!-- Contact information -->
                <div class="relative overflow-hidden py-10 px-6 sm:px-10 xl:p-12">
                    <div class="pointer-events-none absolute inset-0 sm:hidden" aria-hidden="true">
                        <svg class="absolute inset-0 h-full w-full" width="343" height="388" viewBox="0 0 343 388" fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                            <path d="M-99 461.107L608.107-246l707.103 707.107-707.103 707.103L-99 461.107z" fill="url(#linear1)" fill-opacity=".1" />
                            <defs>
                                <linearGradient id="linear1" x1="254.553" y1="107.554" x2="961.66" y2="814.66" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#fff"></stop>
                                    <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <div class="pointer-events-none absolute top-0 right-0 bottom-0 hidden w-1/2 sm:block lg:hidden" aria-hidden="true">
                        <svg class="absolute inset-0 h-full w-full" width="359" height="339" viewBox="0 0 359 339" fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                            <path d="M-161 382.107L546.107-325l707.103 707.107-707.103 707.103L-161 382.107z" fill="url(#linear2)" fill-opacity=".1" />
                            <defs>
                                <linearGradient id="linear2" x1="192.553" y1="28.553" x2="899.66" y2="735.66" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#fff"></stop>
                                    <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <div class="pointer-events-none absolute top-0 right-0 bottom-0 hidden w-1/2 lg:block" aria-hidden="true">
                        <svg class="absolute inset-0 h-full w-full" width="160" height="678" viewBox="0 0 160 678" fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                            <path d="M-161 679.107L546.107-28l707.103 707.107-707.103 707.103L-161 679.107z" fill="url(#linear3)" fill-opacity=".1" />
                            <defs>
                                <linearGradient id="linear3" x1="192.553" y1="325.553" x2="899.66" y2="1032.66" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#fff"></stop>
                                    <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium ">Contact information</h3>
                    <p class="mt-6 max-w-3xl text-base ">Nullam risus blandit ac aliquam justo ipsum. Quam mauris volutpat massa dictumst amet. Sapien tortor lacus arcu.</p>
                    <dl class="mt-8 space-y-6">
                        <dt><span class="sr-only">Phone number</span></dt>
                        <dd class="flex text-base ">
                            <a href="tel:0630559016" class="hover:text-secondary flex">
                                <!-- Heroicon name: outline/phone -->
                                <svg class="h-6 w-6 flex-shrink-0 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                </svg>
                                <span class="ml-3">06 3055 9016</span>
                            </a>
                        </dd>
                        <dt><span class="sr-only">Email</span></dt>
                        <dd class="flex text-base">
                            <a href="mailto:info@rijschoolsanderhoekstra.nl" class="hover:text-secondary flex">
                                <!-- Heroicon name: outline/envelope -->
                                <svg class="h-6 w-6 flex-shrink-0 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                </svg>
                                <span class="ml-3">info@rijschoolsanderhoekstra.nl</span>
                            </a>
                        </dd>
                    </dl>
                    <ul role="list" class="mt-8 flex space-x-12">
                        <li>
                            <a class="hover:text-secondary" href="https://nl-nl.facebook.com/rijschoolsanderhoekstra">
                                <span class="sr-only">Facebook</span>
                                <i class="fab fa-facebook fa-2xl"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/rijschoolsanderhoekstra/?hl=en" class="hover:text-secondary">
                                <span class="sr-only">Instagram page</span>
                                <i class="fab fa-instagram fa-2xl"></i>
                            </a>
                        </li>
                        <li>
                            <a class="hover:text-secondary" href="#">
                                <span class="sr-only">whatsapp</span>
                                <i class="fab fa-whatsapp fa-2xl"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Contact form -->
                <div class="py-10 px-6 sm:px-10 lg:col-span-2 xl:p-12">
                    <h3 class="text-lg font-medium text-gray-900">Send us a message</h3>
                    <form action="#" method="POST" class="mt-6 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
                        <div>
                            <label for="first-name" class="block text-sm font-medium text-gray-900">First name</label>
                            <div class="mt-1">
                                <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-gray-300 py-3 px-4 text-gray-900 shadow-sm focus:border-primary focus:ring-primary">
                            </div>
                        </div>
                        <div>
                            <label for="last-name" class="block text-sm font-medium text-gray-900">Last name</label>
                            <div class="mt-1">
                                <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-gray-300 py-3 px-4 text-gray-900 shadow-sm focus:border-primary focus:ring-primary">
                            </div>
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-900">Email</label>
                            <div class="mt-1">
                                <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-gray-300 py-3 px-4 text-gray-900 shadow-sm focus:border-primary focus:ring-primary">
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between">
                                <label for="phone" class="block text-sm font-medium text-gray-900">Phone</label>
                                <span id="phone-optional" class="text-sm text-gray-500">Optional</span>
                            </div>
                            <div class="mt-1">
                                <input type="text" name="phone" id="phone" autocomplete="tel" class="block w-full rounded-md border-gray-300 py-3 px-4 text-gray-900 shadow-sm focus:border-primary focus:ring-primary" aria-describedby="phone-optional">
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="subject" class="block text-sm font-medium text-gray-900">Subject</label>
                            <div class="mt-1">
                                <input type="text" name="subject" id="subject" class="block w-full rounded-md border-gray-300 py-3 px-4 text-gray-900 shadow-sm focus:border-primary focus:ring-primary">
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <div class="flex justify-between">
                                <label for="message" class="block text-sm font-medium text-gray-900">Message</label>
                                <span id="message-max" class="text-sm text-gray-500">Max. 500 characters</span>
                            </div>
                            <div class="mt-1">
                                <textarea id="message" name="message" rows="4" class="block w-full rounded-md border-gray-300 py-3 px-4 text-gray-900 shadow-sm focus:border-primary focus:ring-primary" aria-describedby="message-max"></textarea>
                            </div>
                        </div>
                        <div class="sm:col-span-2 sm:flex sm:justify-end">
                            <button type="submit" class="mt-2 inline-flex w-full items-center justify-center rounded-md border border-transparent bg-primary px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-opacity-90 hover:text-neutral-200 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 sm:w-auto">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ------------
    -----footer -----
    ------------- -->

    <footer class="p-4 bg-primary-light sm:p-6">
        <div class="mx-auto max-w-7xl py-16 px-6 sm:py-24 lg:px-8">
            <div class="md:flex md:justify-between ">
                <div class="mb-6 md:mb-0">
                    <a href="#" class="flex items-center">
                        <img src="img/logo.png" class="h-8 mr-3" alt="FlowBite Logo" />
                        <span class="self-center text-2xl font-semibold">Motor Rijschool Groningen</span>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <ul class="text-gray-600">
                            <li class="mb-4">
                                <a href="#pakketten" class="hover:underline">Pakketten</a>
                            </li>
                            <li>
                                <a href="#about" class="hover:underline">Over mij</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <ul class="text-gray-600">
                            <li class="mb-4">
                                <a href="#faq" class="hover:underline ">Q & A</a>
                            </li>
                            <li>
                                <a href="#review" class="hover:underline">Review</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <ul class="text-gray-600">
                            <li class="mb-4">
                                <a href="#contact" class="hover:underline">Contact</a>
                            </li>
                            <li>
                                <a href="#partner" class="hover:underline">Partnership</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-primary sm:mx-auto lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center">© 2023 <a href="#" class="hover:underline">Motor RIjschool Groningen</a>. All Rights Reserved.
                </span>
                <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                    <a href="https://nl-nl.facebook.com/rijschoolsanderhoekstra" class="text-gray-500 hover:text-gray-900">
                        <span class="sr-only">Facebook</span>
                        <i class="fab fa-facebook fa-lg"></i>
                    </a>
                    <a href="https://www.instagram.com/rijschoolsanderhoekstra/?hl=en" class="text-gray-500 hover:text-gray-900">
                        <span class="sr-only">Instagram page</span>
                        <i class="fab fa-instagram fa-lg"></i>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900">
                        <span class="sr-only">whatsapp</span>
                        <i class="fab fa-whatsapp fa-lg"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>





</body>

</html>