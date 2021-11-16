<?php

 get_header(); ?>

<?php if( have_posts() ) the_post(); ?>

<?php 
    $post_id = get_the_id();
    inv_track_post_views( $post_id );
    
    $auth_id = strval( get_the_author_meta( 'ID' ) );
    $avatar = inv_get_author_avatar( $auth_id );   

    $categories = get_the_category();
    $category_id = $categories[0]->cat_ID;
    $category_link = get_category_link( $category_id );
    $category_name = get_cat_name( $category_id );
?>
<div id="primary" class="content-area" >
    <main id="main" class="blog-main" >

    <article class="article">
        <div class="container">

            <p class="article__article-info article-info">
                <span class="article-info__date"><?php echo get_the_date(); ?></span>
                <a href="<?php echo $category_link; ?>" class="article-info__category"><?php echo $category_name; ?></a>
            </p>

            <h1 class="article__title">
                <?php the_title(); ?>
            </h1> 
            <div class="article__excerp">
                <?php the_excerpt(); ?>
            </div>

            <div class="article__author article-author">
                <img src="<?php echo $avatar ?>" alt="" class="article-author__image">
                <div class="article-author__name"><?php the_author(); ?></div>
            </div>

            <div class="article__thumbnail rounded"> 
                <?php the_post_thumbnail(); ?>
            </div>
            
            <div class="article__body content-area">
                <?php the_content(); ?>
            </div> 

            <div class="article__share">
                Share
            </div> 

            <div class="article__banner">
                <?php get_template_part( 'template-parts/banner', 'after-article' ); ?>         
            </div>        
            
        </div>    
    </article>
    
    </main>
</div>


<?php
get_footer();