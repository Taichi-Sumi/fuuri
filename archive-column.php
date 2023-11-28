<?php get_header(); ?>
<div class="key">
    <h1 class="page_title">Column</h1>
    <img src="<?php echo get_template_directory_uri(); ?>/img/key_column.jpg" alt="パワーストーンの画像">
</div>

<main>
    <div class="inner">
        <section class="sec_column">
            <?php get_title('コラム一覧'); ?>
            <!-- /div.title_comp -->
            <ul class="col_list">
                <?php
                // Pagenavi
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;

                // サブループ設定
                $args = [
                    'post_type' => 'column',
                    'posts_per_page' => 5,
                    'paged' => $paged,
                ];

                $column_query = new WP_Query($args);
                ?>
                <?php if ($column_query->have_posts()) : ?>
                    <?php while ($column_query->have_posts()) : $column_query->the_post(); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>">
                                <div class="flex_l">
                                    <h3 class="col_title"><?php the_title(); ?></h3>
                                    <div class="col_text date_wrap">
                                        <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
                                    </div>
                                </div>
                                <div class="flex_r">
                                    <!-- サムネイル画像取得 -->
                                    <?php $image = SCF::get('img'); ?>
                                    <!-- コラム画像がある場合 -->
                                    <?php if (!empty($image)) : ?>
                                        <img class="col_pic" src="<?php echo wp_get_attachment_url($image); ?>" alt="コラム説明画像">
                                        <!-- コラム画像がない場合 -->
                                    <?php else : ?>
                                        <img class="col_pic" src="https://placehold.jp/c7c7c7/ffffff/100x100.png?text=No%20Image" alt="No Image">
                                    <?php endif; ?>
                                </div>
                            </a>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
            <!-- Pagenavi -->
            <?php if (function_exists('wp_pagenavi')) {
                wp_pagenavi(['query' => $column_query]);
            } ?>
        </section>
        <!-- /section.column -->
    </div>
    <!-- /div.inner -->
    <?php get_footer(); ?>