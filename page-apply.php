<?php get_header(); ?>
<div class="key">
    <h1 class="page_title">Apply</h1>
    <img src="<?php echo get_template_directory_uri(); ?>/img/key_contact_apply.jpg" alt="パワーストーンの画像">
</div>
<main>
    <div class="inner">
        <section class="sec_contact">
            <?php get_title('お申し込み'); ?>

            <div class="flow_area">
                <ul>
                    <li <?php if (is_page('apply')) {
                            echo 'class="current"';
                        } ?>>1.入力</li>
                    <li <?php if (is_page('thanks')) {
                            echo 'class="current"';
                        } ?>>2.送信</li>
                </ul>
            </div>
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <script type="text/javascript">
                        let submitted = false;
                    </script>
                    <iframe name="hidden_iframe" id="hidden_iframe" style="display: none" onload="if(submitted){window.location='<?php echo home_url('apply/thanks') ?>';}"></iframe>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>

            <?php
            if (is_page('thanks')) {
                echo '<a href="' . home_url() . '" class="btn">トップページへ戻る</a>';
            } ?>

        </section>
        <!-- /section.column_detail -->
    </div>
    <!-- /div.inner -->
    <?php get_footer(); ?>