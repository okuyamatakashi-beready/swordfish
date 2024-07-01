<?php get_header(); ?>

<div class="page__mainVisual flex">
    <div class="page__mainVisual--thumb"></div>
    <div class="page__mainVisual--content">
        <h1>
            <span>Course List</span>
            <b>青の洞窟・恩納村コース</b>
        </h1>
    </div>
</div>


<div class="course__point">
    <div class="left__container">
        <div class="flex">
            <div class="point__thumb point__thumb--01"></div>
            <div class="point__content">
                <h2>
                    <span>Point01</span>
                    <strong>
                        絶景を体感、<br>
                        神秘の青い世界。
                    </strong>
                </h2>
                <p>
                    青の洞窟シュノーケリングでは、太陽の光が海中に反射し、洞窟内を幻想的な青色に染め上げる瞬間を目の当たりにできます。この自然が生み出すアートワークは、どこででも体験できるわけではなく、まさに一生の記憶に残る光景です。
                </p>
            </div>
        </div>
    </div>

    <div class="right__container">
        <div class="flex">
            <div class="point__thumb point__thumb--02"></div>
            <div class="point__content">
                <h2>
                    <span>Point02</span>
                    <strong>
                        色鮮やかな、<br>
                        海の生物との、<br>
                        出会い。
                    </strong>
                </h2>
                <p>
                    青の洞窟の周辺は、多様な海の生物の宝庫。シュノーケリングをしながら、カラフルな熱帯魚や美しい珊瑚礁に出会えるチャンスが満載です。水面から見下ろすだけで、鮮やかな海の世界が広がっているのを感じることができます。
                </p>
            </div>
        </div>
    </div>

    <div class="left__container">
        <div class="flex">
            <div class="point__thumb point__thumb--03"></div>
            <div class="point__content">
                <h2>
                    <span>Point03</span>
                    <strong>
                        安心の、<br>
                        サポート体制。
                    </strong>
                </h2>
                <p>
                    初心者から経験者まで、全てのお客様に安全に楽しんでいただくために、経験豊富なインストラクターが丁寧にサポートします。装備の使い方から、美しい景色を見るためのポイントまで、細かく指導。安心して海の魅力を堪能していただけます。
                </p>
            </div>
        </div>
    </div>

</div>

<div class="amenities">
    <div class="container flex">
        <div class="amenities__content">
            <h3>
                <span>Amenities</span>
                <strong>アメニティ</strong>
            </h3>

            <p>
                ソードフィッシュのツアーを快適にご参加頂くために。こちらのコースをご予約のお客様全員にアメニティをご用意しております。<br><br>

                その他、従来通りパウダールーム・ドライヤー・高圧温水シャワー等は含まれております。
            </p>
        </div>

        <ul class="flex">
            <li>
                <div class="amenities__thumb amenities__thumb--01"></div>
                <b>バスタオル無料レンタル</b>
            </li>
            <li>
                <div class="amenities__thumb amenities__thumb--02"></div>
                <b>
                久米島産 EM シャンプー・<br>リンス無料
                </b>
            </li>
            <li>
                <div class="amenities__thumb amenities__thumb--03"></div>
                <b>
                オーシャンテラスにて<br>
                ウェルカムドリンク
                </b>
            </li>
        </ul>
    </div>
</div>


<div class="menu">
    <div class="menu__wrapper">
    <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
            $args = array(
                'posts_per_page' => '6', //表示件数。-1なら全件表示
                'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
                'paged' => $paged,
                'post_type' => 'aonodoukutsu',
                );
        ?>
        <?php $wp_query = new WP_Query( $args ); ?><!-- クエリの指定 -->

        <?php if ( $wp_query->have_posts() ) :

            while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

        <?php 
            $course_ttl = get_field('course_ttl');
            $course_text = get_field('course_text');
            $course_price = get_field('course_price');
            $course_time = get_field('course_time');
            $course_amount = get_field('course_amount');
            $course_yoyaku = get_field('course_yoyaku');
            $course_img = get_field('course_img');
            ?>
        
        <div class="menu--01">
            <div class="flex">
                <div class="menu__slider menu__slider--01">
                <?php if( have_rows('course_img') ): ?>
                    <?php while( have_rows('course_img') ): the_row();
                        $img = get_sub_field('img');
                    ?>
                    <?php if($course_img): ?>
                        <div class="menu__slider--slide menu__slider--slide01" style="background-image:url(<?php echo $img;?>);"></div>
                    <?php endif; ?>
                <?php endwhile;?>
                <?php endif; ?>
                </div>

                <div class="menu__content">
                    <h3>
                        <span>Menu</span>
                        <strong>
                            <?php echo $course_ttl;?>
                        </strong>
                    </h3>

                    <p class="menu__text">
                    <?php echo $course_text;?>
                    </p>

                    <div class="menu__price">
                        <dl class="flex">
                            <dt>通常料金</dt>
                            <dd><?php echo $course_price;?></dd>
                        </dl>
                    </div>

                    <div class="menu__detail">
                        <dl class="flex">
                            <dt>所要時間</dt>
                            <dd><?php echo $course_time;?></dd>
                        </dl>
                        <dl class="flex">
                            <dt>運行本数</dt>
                            <dd>
                                <?php echo $course_amount;?>
                            </dd>
                        </dl>
                    </div>

                    <div class="menu__btnWrap flex">
                        <a href="<?php the_permalink();?>" class="detail">詳細を見る</a>
                        <a href="<?php echo $course_yoyaku;?>" class="reserve">予約する</a>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile;?>
        <?php endif; ?>

    </div>
</div>


<?php get_footer("page"); ?>