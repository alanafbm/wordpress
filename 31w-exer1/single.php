<?php get_header(); ?>
<h1>Mon premier modèle WordPress</h1>
<?php
    if(have_posts()) :
        while(have_posts()) : the_post(); ?>
            <h2> <?php the_title() ?> </h2>
            <p><?= get_the_content(); ?></p>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php
        $titre = get_the_title();
        $sigle = substr($titre, 0, 8);
        $heure = substr($titre, -6);
    ?>
    <code><?= $sigle; ?></code>
    <code><?= $heure; ?></code>

<?php get_footer(); ?>