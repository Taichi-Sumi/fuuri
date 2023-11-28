<!-- page topボタン -->
<p id="page-top"><a href="#">▲<br>top</a></p>
</main>

<footer>
    <nav class="gnav">
        <img class="footer_logo" src="<?php echo get_template_directory_uri(); ?>/img/fuuri_logo.jpg" alt="風理ヒーリングオラクル">
        <ul class="gnav_menu">
            <li><a href="<?php echo home_url(); ?>">トップ</a></li>
            <li><a href="<?php echo home_url('/menu/'); ?>">個人セッション</a></li>
            <li><a href="<?php echo home_url('/voice/'); ?>">お客様の声</a></li>
            <li><a href="<?php echo home_url('/event/'); ?>">イベント</a></li>
            <li><a href="<?php echo home_url('/column/'); ?>">コラム</a></li>
            <li><a href="<?php echo home_url('/contact/'); ?>">お問い合わせ</a></li>
            <li><a href="<?php echo home_url('/apply/'); ?>">セッション・イベントお申し込み</a></li>
            <ul class="sns_list">
                <li><a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/fuuri8282/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_ig.svg" alt="instagram"></a></li>
                <li><a target="_blank" rel="noopener noreferrer" href="https://lin.ee/q2YHuEO"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_line.svg" alt="公式LINE"></a>
                </li>
            </ul>
        </ul>
    </nav>
    <p><small>&copy; 2023 Healing&Oracle fuuri</small></p>
</footer>

<!-- JavaScriptはfunctions.phpで記載（42~） -->
<?php wp_footer(); ?>
</body>

</html>