<!doctype html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="canonical" href="https://fuuri-migaku.com" />
    <!-- meta情報(Yoast SEOで出力) -->
    <title>Yoast自動書き換え</title>
    <!-- ogp(image以外はYoast SEOで出力) -->
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/fuuri_logo_ogp.jpg" />
    <!-- ファビコン -->
    <link href="<?php echo get_template_directory_uri(); ?>/img/fuuri_favicon.png" rel="icon" />
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-K232QKH');
    </script>
    <!-- End Google Tag Manager -->
    <!-- Googleフォント(common.cssにてimport) -->
    <!-- css(functions.phpにて記載) -->
    <?php wp_head(); ?>
</head>

<?php
if (is_front_page()) {
    $body_klass = 'top';
} elseif (is_page('menu')) {
    $body_klass = 'menu';
} elseif (is_post_type_archive('voice')) {
    $body_klass = 'voice';
} elseif (is_post_type_archive('event') || is_singular('event')) {
    $body_klass = 'event';
} elseif (is_post_type_archive('column') || is_singular('column')) {
    $body_klass = 'column';
} elseif (is_page('contact') || is_page('contact/thanks')) {
    $body_klass = 'contact';
} elseif (is_page('apply') || is_page('apply/thanks')) {
    $body_klass = 'apply';
}
?>

<body style="overflow-x: hidden;" class="<?php echo $body_klass; ?>">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K232QKH" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header>
        <a class="logo" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/fuuri_logo.jpg" alt="風理ヒーリングオラクル"></a>
        <!-- グローバルナビ -->
        <nav class="gnav">
            <a class="logo" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/fuuri_logo.jpg" alt="風理ヒーリングオラクル"></a>
            <ul class="gnav_menu">
                <li><a <?php if (is_page('home')) {
                            echo 'class="current"';
                        } ?> href="<?php echo home_url(); ?>">トップ</a></li>
                <li><a <?php if (is_page('menu')) {
                            echo 'class="current"';
                        } ?> href="<?php echo home_url('/menu/'); ?>">個人セッション</a></li>
                <li>
                    <a <?php if (is_post_type_archive('voice')) {
                            echo 'class="current"';
                        } ?> href="<?php echo home_url('/voice/'); ?>">お客様の声</a>
                </li>
                <li><a <?php if (is_post_type_archive('event') || is_singular('event')) {
                            echo 'class="current"';
                        } ?> href="<?php echo home_url('/event/'); ?>">イベント</a></li>

                <li><a <?php if (is_post_type_archive('column') || is_singular('column')) {
                            echo 'class="current"';
                        } ?> href="<?php echo home_url('/column/'); ?>">コラム</a></li>

                <li><a <?php if (is_page('contact') || is_page('contact/check') || is_page('contact/thanks')) {
                            echo 'class="current"';
                        } ?> href="<?php echo home_url('/contact/'); ?>">お問い合わせ</a></li>
                <li><a <?php if (is_page('apply') || is_page('apply/check') || is_page('apply/thanks')) {
                            echo 'class="current"';
                        } ?> href="<?php echo home_url('/apply/'); ?>">セッション・イベントお申し込み</a></li>

                <ul class="sns_list">
                    <li><a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/fuuri8282/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_ig.svg" alt="instagram"></a></li>
                    <li><a target="_blank" rel="noopener noreferrer" href="https://lin.ee/q2YHuEO"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_line.svg" alt="公式LINE"></a></li>
                </ul>
            </ul>
        </nav>
        <!-- ハンバーガーメニュー -->
        <div class="ham">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>