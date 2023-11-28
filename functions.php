<?php
/* ===============================
アクションフックを使ってcss,jsを読み込ませる
================================ */
function fuuri_enqueue()
{
    // reset.css
    wp_enqueue_style(
        'fuuri-reset',
        get_template_directory_uri() . '/css/common/reset.css',
        [],
        filemtime(get_theme_file_path('/css/common/reset.css'))
    );

    // common.css
    wp_enqueue_style(
        'fuuri-common',
        get_template_directory_uri() . '/css/common/common.css',
        [],
        filemtime(get_theme_file_path('/css/common/common.css'))
    );

    //jQuery
    wp_enqueue_script(
        'fuuri-jquery',
        'https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js',
        [],
        '',
        true //第５引数をtrueでfooterで読み込み
    );

    //main.js
    wp_enqueue_script(
        'fuuri-main',
        get_template_directory_uri() . '/js/main.js',
        [],
        filemtime(get_theme_file_path('/js/main.js')),
        true //第５引数をtrueにするとfooterで読み込んでくれる
    );

    if (is_front_page()) { //TOPページの場合のみ読み込み
        //top.css
        wp_enqueue_style(
            'fuuri-top',
            get_template_directory_uri() . '/css/page/top.css',
            [],
            filemtime(get_theme_file_path('/css/page/top.css'))
            //ver自動更新=キャッシュクリア
        );
    }

    //menu.css
    if (is_page('menu')) {
        wp_enqueue_style(
            'fuuri-menu',
            get_template_directory_uri() . '/css/page/menu.css',
            [],
            filemtime(get_theme_file_path('/css/page/menu.css'))
        );
    }

    //voice.css
    if (is_post_type_archive('voice')) {
        wp_enqueue_style(
            'fuuri-voice',
            get_template_directory_uri() . '/css/page/voice.css',
            [],
            filemtime(get_theme_file_path('/css/page/voice.css'))
        );
    }


    if (is_singular('event')) { //イベント投稿ページの場合
        //Google icon1
        wp_enqueue_style(
            'google-icon1',
            'https://fonts.googleapis.com/icon?family=Material+Icons'
        );

        //Google icon2
        wp_enqueue_style(
            'google-icon2',
            'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0'
        );

        //event01.css
        wp_enqueue_style(
            'fuuri-voice01',
            get_template_directory_uri() . '/css/page/event01.css',
            [],
            filemtime(get_theme_file_path('/css/page/event01.css'))
        );
    }

    //event.css
    if (is_post_type_archive('event')) {
        wp_enqueue_style(
            'fuuri-event',
            get_template_directory_uri() . '/css/page/event.css',
            [],
            filemtime(get_theme_file_path('/css/page/event.css'))
        );
    }

    // column01.css
    if (is_singular('column')) {
        wp_enqueue_style(
            'fuuri-column01',
            get_template_directory_uri() . '/css/page/column01.css',
            [],
            filemtime(get_theme_file_path('/css/page/column01.css'))
        );
    }

    //column.css
    if (is_post_type_archive('column')) {
        wp_enqueue_style(
            'fuuri-column',
            get_template_directory_uri() . '/css/page/column.css',
            [],
            filemtime(get_theme_file_path('/css/page/column.css'))
        );
    }

    //contact.css
    if (is_page([
        'contact',
        'contact/thanks',
        'apply',
        'apply/thanks'
    ])) {
        wp_enqueue_style(
            'fuuri-contact',
            get_template_directory_uri() . '/css/page/contact.css',
            [],
            filemtime(get_theme_file_path('/css/page/contact.css'))
        );
    }
}
// アクションフック
add_action('wp_enqueue_scripts', 'fuuri_enqueue');

/* =========================
オリジナル関数(タイトルコンポーネント)
========================= */

function get_title($title)
{
    echo '<div class="title_comp">';
    echo '<h2 class="section_title">' . $title . '</h2>';
    echo '<img src="' . get_template_directory_uri() . '/img/fuuri_logo_base.png" alt="タイトル背景の丸" class="title_bg">';
    echo '</div>';
}
/* =========================
auto p, auto br 解除
========================= */
//授業
// if (is_page(['contact', 'apply'])) {
//     remove_filter('the_content', 'wpautop');
// }

function mvwpform_autop_filter()
{
    if (class_exists('MW_WP_Form_Admin')) {
        $mw_wp_form_admin = new MW_WP_Form_Admin();
        $forms = $mw_wp_form_admin->get_forms();
        foreach ($forms as $form) {
            add_filter('mwform_content_wpautop_mw-wp-form-' . $form->ID, '__return_false');
        }
    }
}
mvwpform_autop_filter();
