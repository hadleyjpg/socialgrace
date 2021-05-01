<?php get_header(); ?>
<body>

    <main>
        <?php
        
        if( have_posts() ) {
            while( have_posts() ) {
                the_post();
                get_template_part('template-parts/content', 'service');
            }
        }
        
        ?>
    </main>

<?php get_footer(); ?>