<?php
    /**
     * Template header
     * Ce template intégré dans tous les modèles de thème
     * @link :https://developer.wordpress.org/themes/
     * @package : 31w
     */
?>
<!DOCTYPE html>
<html <?php language_attributes(); // Va chercher attribut de langue dans les paramètres WP ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); // Mm chose pour le charset?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Remplace title -->
    <?php wp_head(); ?>
</head>
<body>
    <section class="site">
        <header class="site__header">
            <section class="site__branding">
                <h1><a href="<?= esc_url( home_url( '/' ) ) ?>"><?= bloginfo( 'name' ); ?></a></h1>
                <h2><?= bloginfo( 'description' ); ?></h2>
            </section>
            <nav class="site__navigation">
                Menu
            </nav>
        </header>
<?php wp_head(); ?>