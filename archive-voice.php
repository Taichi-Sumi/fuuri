<?php get_header(); ?>
<div class="key">
    <h1 class="page_title">Voice</h1>
    <img src="<?php echo get_template_directory_uri(); ?>/img/key_voice.jpg" alt="音叉とパワーストーンの写真">
</div>

<main>
    <div class="inner">
        <section class="sec_voice">
            <?php get_title('お客様の声'); ?>

            <?php
            // Pagenavi
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;

            // サブループ設定
            $args = [
                'post_type' => 'voice',
                'posts_per_page' => 3,
                'paged' => $paged,

            ];
            $voice_query = new WP_Query($args);
            ?>
            <?php if ($voice_query->have_posts()) : ?>
                <?php while ($voice_query->have_posts()) : $voice_query->the_post(); ?>
                    <section class="voice_box">
                        <h3 class="voice_title">
                            <?php echo SCF::get('name'); ?> &nbsp;
                            <?php
                            echo SCF::get('age');
                            echo SCF::get('sex');
                            ?>
                        </h3>

                        <p class="voice_text">
                            <?php echo nl2br(SCF::get('comment')); ?>
                        </p>
                    </section>
                    <!-- /section.voice_box -->

                    <a href="<?php echo home_url('/apply/') ?>" class="submit_btn">個人セッションお申し込み</a>

                <?php endwhile; ?>
            <?php endif; ?>

            <!-- Pagenavi -->
            <?php if (function_exists('wp_pagenavi')) {
                wp_pagenavi(['query' => $voice_query]);
            } ?>
        </section>
        <!-- /section.voice -->
    </div>
    <!-- /div.inner -->

    <?php get_footer(); ?>