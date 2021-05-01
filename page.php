<?php 
    get_header(); 
    $socialgrace_heading = rwmb_meta( 'socialgrace_heading' );
    $socialgrace_description = rwmb_meta( 'socialgrace_description' );
    $title = get_the_title();

    if(has_post_thumbnail()) {
        echo '<div class="header">
        <div class="header__img">' .
            get_the_post_thumbnail() .
            '<h1 class="header__title">' . $title . '</h1>
        </div>
        <div class="header__text">
            <h2>' . $socialgrace_heading . '</h2>
            <p>' . $socialgrace_description . '</p>
        </div>
    </div>';
}

?>
<main>
    <?php
    
    if( have_posts() ) {
        while( have_posts() ) {
            the_post();
            get_template_part('template-parts/content', 'page');
        }
    }
    
    ?>
</main>

<?php get_footer(); ?>