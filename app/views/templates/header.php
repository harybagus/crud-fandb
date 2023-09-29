<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Cek apakah $data['title'] ada -->
    <?php if (isset($data['title'])) : ?>
        <title><?= $data['title']; ?> - F&Bagus</title>
    <?php else : ?>
        <title>F&Bagus</title>
    <?php endif ?>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,200;0,400;0,600;0,800;1,200;1,400;1,600;1,800&display=swap" rel="stylesheet">

    <!-- Google Icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <!-- TailwindCSS -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/css/dist/output.css">
</head>

<body>
    <!-- Header Start -->
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10 px-4 lg:px-0">
        <div class="container lg:px-8 xl:px-16">
            <div class="flex items-center justify-between relative">
                <div class="px-4">
                    <a href="<?= BASEURL ?>/#home" class="font-bold text-xl text-primary block py-4 lg:py-5">F&Bagus</a>
                </div>

                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                        <span class="hamburger-line origin-top-right transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line origin-bottom-right transition duration-300 ease-in-out"></span>
                    </button>

                    <nav id="nav-menu" class="hidden absolute py-4 bg-white shaodw-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="<?= BASEURL ?>/#home" id="nav-home" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary focus:text-primary">Home</a>
                            </li>
                            <li class="group">
                                <a href="<?= BASEURL ?>/food" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Food</a>
                            </li>
                            <li class="group">
                                <a href="<?= BASEURL ?>/beverage" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Beverage</a>
                            </li>
                            <li class="group">
                                <a href="<?= BASEURL ?>/#foodandbeverage" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Food & Beverage</a>
                            </li>
                            <li class="group">
                                <a href="<?= BASEURL ?>/#contact" class="text-base text-dark py-2 ml-8 flex group-hover:text-primary">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->