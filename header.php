<html <?php language_attributes(); ?>>
<head>

    <meta charset="<?php bloginfo('charset') ?>">



    <meta name"viewport" content="width=device-width, init-scale=1">

    <!-- pour internet explorer : S'assurer que le navigateur utilise la derniere version du moteur de rendue -->

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>

    <!-- bootstrap Css feuille de style touojurs botstrap devant notre feuille css-->

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- style CSS -->

    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">

    <!-- shiv -->

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
    <script srcd="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></sccript>
    <![endif]-->

</head>

<body <?php body_class() ?>>

<!--
<header>

    <h1><a href="<?php esc_url(home_url('/')) ?>"><?php bloginfo('name')?></a></h1>
    <h2><?php bloginfo('description')?></h2>
</header>
-->

<div class="navbar-fixed">

<?php wp_nav_menu(
    array(
        'theme_location' => 'main_menu',
        'container' => 'nav',
        'container_class' => 'nav-wrapper',

    )
);  ?>

</div>
