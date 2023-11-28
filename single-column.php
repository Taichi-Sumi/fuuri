<?php get_header(); ?>
<div class="key">
    <h1 class="page_title">Column</h1>
    <img src="<?php echo get_template_directory_uri(); ?>/img/key_column.jpg" alt="パワーストーンの画像">
</div>

<main>
    <div class="inner">

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <section class="sec_column_detail">
                    <?php get_title(the_title('', '', false)); ?>

                    <!-- サムネイル画像取得 -->
                    <?php $image = SCF::get('img'); ?>
                    <!-- コラム画像がある場合 -->
                    <?php if (!empty($image)) : ?>
                        <img class="col_pic" src="<?php echo wp_get_attachment_url($image); ?>" alt="コラム説明画像">
                        <!-- コラム画像がない場合 -->
                    <?php else : ?>
                        <img class="col_pic" src="https://placehold.jp/c7c7c7/ffffff/230x230.png?text=No%20Image" alt="No Image">
                    <?php endif; ?>

                    <p>
                        <?php echo nl2br(SCF::get('col_text')); ?>
                    </p>
                </section>
                <!-- /section.column_detail -->
            <?php endwhile; ?>
        <?php endif; ?>
        <div class="flex_box">
            <?php previous_post_link('%link', '◁ 前のコラムへ');
            ?>
            <?php next_post_link('%link', '次のコラムへ ▷');
            ?>
        </div>

        <button type="button" onclick="history.back()" class="btn" style="border: none;">コラム一覧に戻る</button>
    </div>
    <!-- /div.inner -->

    <?php get_footer(); ?>