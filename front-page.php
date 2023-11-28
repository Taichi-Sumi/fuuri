<?php get_header(); ?>
<div class="key_top">
    <h1 class="page_title">Healing&<br>Oracle<br>fuuri</h1>
    <img src="<?php echo get_template_directory_uri(); ?>/img/key_home.jpg" alt="女性とオラクルカードの写真">
</div>

<main>
    <div class="inner">
        <section class="copy">
            <h2 class="section_title copy_title">変わりたくても<br>変われないあなたへ</h2>
            <p class="text copy_text">
                「変わりたくても変われない」<br>
                「人生を誰かの脇役と思っている」<br>
                「"どうせ"、"だって"から抜け出したい」<br>
                <br>
                そう感じるなら、<br><span>今から</span>変えてみませんか？<br>
                <br>
                すべてはご自身次第<br>
                世界は創造できる
            </p>
        </section>
        <!-- /section.copy -->

        <section class="about_fuuri">
            <?php get_title('fuuriについて'); ?>

            <p class="text">
                私は過去に挫折を経験したことで、目に見えないエネルギーに興味を持ち、人生を楽しく望み通りに創造することに情熱を注いできました。<br><br>
                私が長年の研究と実験を通じて身に着けた知識とスキルを、エネルギーヒーリングやオラクルカードリーディングを通して提供しています。<br><br>
                私と一緒に、ご自身の世界を軽やかに、自由自在に変化させてみませんか？
            </p>
            <dl class="license">
                <dt>資格</dt>
                <dd>クンダリーニレイキヒーリング</dd>
                <dd>クォンタムエネルギーヒーリング</dd>
            </dl>
            <a href="<?php echo home_url('/menu/'); ?>" class="btn">ヒーリングについてもっと見る</a>
        </section>
        <!-- /section.about -->

        <section class="about">
            <?php get_title('ヒーリングについて'); ?>


            <img class="pic" src="<?php echo get_template_directory_uri(); ?>/img/healing01.jpg" alt="女性の手の写真">
            <p class="text">
                ヒーリングセッションで、心と体の健康を取り戻しましょう。<br>
                疲れやストレスが溜まった身体や、心の不調に効果的です。<br>
                自然治癒力を高め、心身ともにリラックスできるセッションをご提供しています。
            </p>
            <a href="<?php echo home_url('/menu/'); ?>" class="btn">ヒーリングについてもっと見る</a>
        </section>
        <!-- /section.about -->

        <img class="pic" src="<?php echo get_template_directory_uri(); ?>/img/oracle01.jpg" alt="オラクルカードの写真">

        <section class="voice">
            <?php get_title('お客様の声'); ?>

            <p class="text">
                自分でもそうかなと思っていたことが、カードでも出て、今後どうしていったら良いかの方向性がわかって迷いがなくなりました！<br>
                カードを見て自分の思ったことを先に聞いてくださったので、自分の考え方の癖がわかった上で、説明をしてもらえたのでいろいろな視点で捉えられたのが良かったです。<br>
                <br>
                順番や聞いてくださる感じがとても良くて内容が自然に入ってきて納得だし、今後の方向性もはっきりして良かったです。<br>
                カードを自分でどう思ったか言わないで説明に入ったらここまでしっくりこなかった気がします。また風理さんの体験談もとても参考になりました。<br>
                ハイヤーセルフからのメッセージでは守られてるんだな〜という安心感も得られました！<br>
                <br>
                丁寧に見たり聞いたりヒーリングしてくださって、すごく人を助けたいという思いが伝わってきて嬉しかったです。<br>
                精神的にも身体的にも変化を起こせるのがすごい〜と思いました。<br>
                <br>
                すごく丁寧に接してくださるので、セッションとかオンラインでのサービスに慣れていない方でも安心して受けられると思いました。<br>
                何かに迷っている方や決めきれない方、身体も楽になるので頑張り過ぎてる方とかにも良いと思いました。<br>
            </p>
            <a href="<?php echo home_url('/voice/'); ?>" class="btn">お客様の声をもっと読む</a>
        </section>
        <a href="<?php echo home_url('/apply/'); ?>" class="submit_btn">ヒーリングお申し込み</a>
        <!-- /section.voice -->
    </div>
    <!-- /div.inner -->

    <?php get_footer(); ?>