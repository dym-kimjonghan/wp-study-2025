<?php get_header(); ?>
<main class="container my-5">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <article class="mb-5">
            <h1 class="text-success"><?php the_title(); ?></h1>
            <div class="meta mb-3">
                <span>投稿日: <?php the_date(); ?></span>
            </div>
            <div class="content">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; endif; ?>

    <div class="text-center my-4">
        <a href="javascript:history.back()" class="btn btn-secondary">戻る</a>
    </div>
</main>
<?php get_footer(); ?>