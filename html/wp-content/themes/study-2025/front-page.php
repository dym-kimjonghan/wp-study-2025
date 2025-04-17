<?php get_header(); ?>
    <main class="container my-5">
        <?php $page_query = get_all_pages();?>

        <?php if($page_query->have_posts()):?>
        <h2 class="text-primary">ページ一覧</h2>
        <?php while($page_query->have_posts()): $page_query->the_post();?>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title"><?php the_title();?></h2>
                        <p class="card-text"><?php the_excerpt();?></p>
                        <a href="<?=get_the_permalink()?>" class="btn btn-primary">ページに移動</a>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile;?>
        <?php wp_reset_postdata();?>
        <?php endif;?>

        <hr class="my-5">

        <div class="row">
            <?php $post_query = get_all_posts();?>
            <?php if($post_query->have_posts()):?>
            <h2 class="text-success">記事一覧</h2>
            <?php while($post_query->have_posts()): $post_query->the_post();?>
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title"><?php the_title();?></h2>
                        <p class="card-text"><?php the_excerpt();?></p>
                        <a href="<?=get_the_permalink()?>" class="btn btn-success">記事に移動</a>
                    </div>
                </div>
            </div>
            <?php endwhile;?>
            <?php wp_reset_postdata();?>
            <?php endif;?>
        </div>


        <hr class="my-5">

        <div class="row">
            <div class="col-md-6">
            <div class="card shadow-sm border-info">
                <div class="card-header bg-info text-white text-center">
                <h2 class="h5 mb-0"><i class="bi bi-folder-fill"></i> カテゴリー一覧</h2>
                </div>
                <div class="card-body">
                <ul class="list-group list-group-flush">
                    <?php 
                    $categories = get_categories();
                    foreach ($categories as $category) {
                    echo '<li class="list-group-item d-flex justify-content-between align-items-center">';
                    echo '<a href="' . get_category_link($category->term_id) . '" class="text-info fw-bold">' . $category->name . '</a>';
                    echo '<span class="badge bg-info text-white rounded-pill">' . $category->count . '</span>';
                    echo '</li>';
                    }
                    ?>
                </ul>
                </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="card shadow-sm border-warning">
                <div class="card-header bg-warning text-white text-center">
                <h2 class="h5 mb-0"><i class="bi bi-tags-fill"></i> タグ一覧</h2>
                </div>
                <div class="card-body">
                <ul class="list-inline">
                    <?php
                    $tags = get_tags();
                    if ($tags) {
                    foreach ($tags as $tag) {
                        echo '<li class="list-inline-item mb-2">';
                        echo '<a href="' . get_tag_link($tag->term_id) . '" class="btn btn-warning btn-sm text-white fw-bold">';
                        echo '<i class="bi bi-tag"></i> ' . $tag->name;
                        echo '</a>';
                        echo '</li>';
                    }
                    }
                    ?>
                </ul>
                </div>
            </div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>