<?php /*Template Name: 全宽页面 */ ?>

<?php get_header();?>
<section class="index_area">
    <div class="container">
        <div class="row g-3">
            <div class="col-lg-12">
                <div class="post_container_title">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="post_container mb-4">
                    <?php while( have_posts() ): the_post(); $p_id = get_the_ID(); ?>
                    <article class="wznrys">
                    <?php the_content(); ?>
                    </article>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>