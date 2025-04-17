<?php get_header(); ?>
<main class="container my-5">
    <h1 class="text-success"><?php single_cat_title(); ?></h1>
    <div class="row">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title"><?php the_title(); ?></h2>
                        <p class="card-text"><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-success">続きを読む</a>
                    </div>
                </div>
            </div>
        <?php endwhile; else: ?>
            <p>記事が見つかりませんでした。</p>
        <?php endif; ?>
    </div>

    <div class="text-center my-4">
        <a href="javascript:history.back()" class="btn btn-secondary">戻る</a>
    </div>
</main>
<?php get_footer(); ?>
