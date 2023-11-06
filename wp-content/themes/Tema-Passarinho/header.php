<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Teste para programador WordPress</title>
    <link rel="icon" href="<?php echo get_site_icon_url(); ?>" sizes="32x32" />
    <link rel="stylesheet" href="<?php echo get_theme_root_uri(); ?>/Tema-Passarinho/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- topo -->
        <section class="topo">
            <!-- Center -->
            <div class="center">
                <!-- Header -->
                <header>
                    <!-- logo -->
                    <div class="logo">
                        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_root_uri(); ?>/Tema-Passarinho/images/logo.svg" alt="logo do site"></a>
                    </div>
                    <!-- logo -->
                    <nav>
                        <!-- menu-desktop -->
                        <ul class="menu-desktop">
                            <li>
                                <a href="<?php echo home_url(); ?>">Home</a>
                            </li>
                            <li>
                                <a href="/StrongWay/passarinhos/">Passarinhos</a>
                            </li>
                            <li>
                                <a href="/StrongWay/cadastrar/">Cadastrar passarinhos</a>
                            </li>
                        </ul>
                        <!-- menu-desktop -->
                        <!-- menu-mobile -->
                        <div class="menu-mobile">
                        <i class="fas fa-bars"></i>
                            <ul class="menu-mobile--links">
                                <li>
                                    <a href="<?php echo home_url(); ?>">Home</a>
                                </li>
                                <li>
                                    <a href="/StrongWay/passarinhos/">Passarinhos</a>
                                </li>
                                <li>
                                    <a href="/StrongWay/cadastrar/">Cadastrar passarinhos</a>
                                </li>
                            </ul>
                        </div>
                        <!-- menu-mobile -->
                    </nav>
                </header>
                