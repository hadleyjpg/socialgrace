<?php 
    $socialgrace_title = rwmb_meta( 'socialgrace_title' );
    $socialgrace_description = rwmb_meta( 'socialgrace_project_description' );
    $socialgrace_handle = rwmb_meta( 'socialgrace_social_media_handle' );
    $socialgrace_insta = rwmb_meta( 'socialgrace_instagram_url' );
    $socialgrace_fb = rwmb_meta( 'socialgrace_facebook_url' );
    $socialgrace_testimonial = rwmb_meta( 'socialgrace_testimonial' );
    $socialgrace_client = rwmb_meta( 'socialgrace_client_name' );
    $images = rwmb_meta( 'socialgrace_image_gallery', array( 'size' => 'large' ) );
    $firstClone_images = rwmb_meta( 'socialgrace_image_gallery', array( 'limit' => 1, 'size' => 'large' ) );
    $firstClone = reset( $firstClone_images );
    $lastClone = end( $images );
?>


<div class="project" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
    <div class="project__intro">
        <div class="project__title">
            <h1><?php echo $socialgrace_title ?></h1>
            <div>
                <h4 class="project--handle"><?php echo $socialgrace_handle ?></h4>
                <ul class="social">
                    <li><a href="<?php echo $socialgrace_fb ?>" target="blank"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg></a></li>
                    <li><a href="<?php echo $socialgrace_insta ?>" target="blank"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg></a></li>
                </ul>
            </div>    
        </div>
        <p><?php echo $socialgrace_description ?></p>
    </div>
</div>

<div class="carousel">
    <div class="carousel__container">
        <div class="carousel__slide">
            <?php
                echo '<img id="firstClone" src="', $firstClone['url'], '">';
                foreach ( $images as $image ) {
                    echo '<img src="', $image['url'], '">';
                }
                echo '<img id="lastClone" src="', $lastClone['url'], '">';
            ?>
        </div>
    </div>
    <button id="prevBtn"><?xml version="1.0" encoding="iso-8859-1"?>
        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
        <path style="fill:#FFC107;" d="M440.437,301.781L266.656,475.584V10.667C266.656,4.776,261.88,0,255.989,0
            c-5.891,0-10.667,4.776-10.667,10.667v464.917L71.541,301.781c-4.237-4.093-10.99-3.975-15.083,0.262
            c-3.992,4.134-3.992,10.687,0,14.82l192,192c4.16,4.171,10.914,4.179,15.085,0.019c0.006-0.006,0.013-0.013,0.019-0.019l192-192
            c4.093-4.237,3.975-10.99-0.262-15.083c-4.134-3.993-10.687-3.993-14.821,0L440.437,301.781z"/>
        <path d="M255.989,512c-2.831,0.005-5.548-1.115-7.552-3.115l-192-192c-4.093-4.237-3.975-10.99,0.262-15.083
            c4.134-3.992,10.687-3.992,14.82,0l184.469,184.448l184.448-184.448c4.237-4.093,10.99-3.975,15.083,0.262
            c3.993,4.134,3.993,10.687,0,14.821l-192,192C261.521,510.879,258.813,511.999,255.989,512z"/>
        <path d="M255.989,512c-5.891,0-10.667-4.776-10.667-10.667V10.667C245.323,4.776,250.098,0,255.989,0
            c5.891,0,10.667,4.776,10.667,10.667v490.667C266.656,507.224,261.88,512,255.989,512z"/>
        </svg>
    </button>
    <button id="nextBtn"><?xml version="1.0" encoding="iso-8859-1"?>
        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
        <path style="fill:#FFC107;" d="M440.437,301.781L266.656,475.584V10.667C266.656,4.776,261.88,0,255.989,0
            c-5.891,0-10.667,4.776-10.667,10.667v464.917L71.541,301.781c-4.237-4.093-10.99-3.975-15.083,0.262
            c-3.992,4.134-3.992,10.687,0,14.82l192,192c4.16,4.171,10.914,4.179,15.085,0.019c0.006-0.006,0.013-0.013,0.019-0.019l192-192
            c4.093-4.237,3.975-10.99-0.262-15.083c-4.134-3.993-10.687-3.993-14.821,0L440.437,301.781z"/>
        <path d="M255.989,512c-2.831,0.005-5.548-1.115-7.552-3.115l-192-192c-4.093-4.237-3.975-10.99,0.262-15.083
            c4.134-3.992,10.687-3.992,14.82,0l184.469,184.448l184.448-184.448c4.237-4.093,10.99-3.975,15.083,0.262
            c3.993,4.134,3.993,10.687,0,14.821l-192,192C261.521,510.879,258.813,511.999,255.989,512z"/>
        <path d="M255.989,512c-5.891,0-10.667-4.776-10.667-10.667V10.667C245.323,4.776,250.098,0,255.989,0
            c5.891,0,10.667,4.776,10.667,10.667v490.667C266.656,507.224,261.88,512,255.989,512z"/>
        </svg>
    </button>
</div>

<div class="container portfolio"><?php the_content(); ?></div>

<blockquote>
    <p><?php echo $socialgrace_testimonial ?></p>
    <h2><?php echo $socialgrace_client ?></h2>
</blockquote>