<?php get_header(); ?>
<div class="key">
    <h1 class="page_title">Event</h1>
    <img src="<?php echo get_template_directory_uri(); ?>/img/key_event.jpg" alt="パワーストーンの画像">
</div>

<main>
    <div class="inner">
        <section class="sec_event">
            <?php get_title('イベント一覧'); ?>

            <ul class="event_list">

                <?php
                // Pagenavi
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;

                //サブループ設定
                $args = [
                    'post_type' => 'event',
                    'posts_per_page' => 5,
                    'paged' => $paged,
                ];
                $event_query = new WP_Query($args);
                ?>

                <?php if ($event_query->have_posts()) : ?>
                    <?php while ($event_query->have_posts()) : $event_query->the_post(); ?>
                        <!-- サムネイル画像 -->
                        <?php $image = SCF::get('img'); ?>
                        <li>
                            <a class="polaroid" href="<?php the_permalink(); ?>">
                                <?php if (!empty($image)) : ?>
                                    <img class="event_pic" src="<?php echo wp_get_attachment_url($image); ?>" alt="イベント説明画像">
                                <?php else : ?>
                                    <img class="event_pic" src=" https://placehold.jp/eeeeee/999999/230x230.png?text=No%20Image" alt="No Image">
                                <?php endif; ?>

                                <h3 class="event_title"><?php echo SCF::get('name'); ?></h3>
                                <p class="event_text"><?php echo nl2br(SCF::get('desc')); ?></p>
                                <p class="event_btn">イベント詳細</p>
                            </a>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>

            <!-- Pagenavi -->
            <?php if (function_exists('wp_pagenavi')) {
                wp_pagenavi(['query' => $event_query]);
            } ?>
            <!-- /section.voice_box -->
        </section>
        <!-- /section.voice -->
    </div>
    <!-- /div.inner -->
    <?php get_footer(); ?>