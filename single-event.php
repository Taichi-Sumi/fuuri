<?php get_header(); ?>
<div class="key">
    <h1 class="page_title">Event</h1>
    <img src="<?php echo get_template_directory_uri(); ?>/img/key_event.jpg" alt="パワーストーンの画像">
</div>

<main>
    <div class="inner">

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <section class="sec_event_detail">
                    <?php get_title('イベント詳細'); ?>

                    <?php
                    //サムネイル画像
                    $image = SCF::get('img');
                    // イベント日程
                    $year = SCF::get('date_y');
                    $month = SCF::get('date_m');
                    $day = SCF::get('date_d');
                    $youbi = SCF::get('date_day');
                    $time = SCF::get('time');
                    ?>
                    <?php if (!empty($image)) : ?>
                        <img class="event_pic" src="<?php echo wp_get_attachment_url($image); ?>" alt="イベント説明画像">
                    <?php else : ?>
                        <img class="event_pic" src=" https://placehold.jp/c7c7c7/ffffff/230x230.png?text=No%20Image" alt="No Image">
                    <?php endif; ?>
                    <dl>
                        <dd>イベント名</dd>
                        <dt><?php echo SCF::get('name'); ?></dt>
                        <dd>日程</dd>
                        <dt>
                            <time datetime="<?php echo $year; ?>-<?php echo $month; ?>-<?php echo $day; ?>">
                                <?php echo $year; ?>年<?php echo $month; ?>月<?php echo $day; ?>日
                            </time><?php echo $youbi; ?>&ensp;<?php echo $time; ?>
                        </dt>
                        <dd>場所</dd>
                        <dt>
                            <?php echo nl2br(SCF::get('place')); ?>
                        </dt>
                        <dd>内容</dd>
                        <dt>
                            <p>
                                <?php echo nl2br(SCF::get('content')); ?>
                            </p>
                        </dt>
                        <!-- 公式サイトの名前とリンクがある場合のみ、公式サイト項目表示 -->
                        <?php if (!empty(SCF::get('url')) && !empty(SCF::get('official_site')) || (!empty(SCF::get('url2')) && !empty(SCF::get('official_site2')))) : ?>
                            <dd>公式サイト</dd>
                        <?php endif; ?>
                        <!-- 公式サイト１の名前とURLがある場合のみ表示(外部リンクアイコンのみ表示される現象を防ぐため) -->
                        <?php if (!empty(SCF::get('url')) && !empty(SCF::get('official_site'))) : ?>
                            <dt>
                                <a target="_blank" rel="noopener noreferrer" href="<?php echo SCF::get('url') ?>" class="jump_link"><?php echo nl2br(SCF::get('official_site')) ?></a>
                            </dt>
                        <?php endif; ?>
                        <!-- 公式サイト2の名前とURLがある場合のみ表示(外部リンクアイコンのみ表示される現象を防ぐため) -->
                        <?php if (!empty(SCF::get('url2')) && !empty(SCF::get('official_site2'))) : ?>
                            <dt>
                                <a target="_blank" rel="noopener noreferrer" href="<?php echo SCF::get('url2') ?>" class="jump_link"><?php echo nl2br(SCF::get('official_site2')) ?></a>
                            </dt>
                        <?php endif; ?>
                    </dl>

                </section>
                <!-- /section.event_detail -->
            <?php endwhile; ?>
        <?php endif; ?>

        <a href="<?php echo home_url('/apply/') ?>" class="submit_btn">イベントお申し込み</a>
        <button type="button" onclick="history.back()" class="btn" style="border: none;">イベント一覧に戻る</button>

    </div>
    <!-- /div.inner -->
    <?php get_footer(); ?>