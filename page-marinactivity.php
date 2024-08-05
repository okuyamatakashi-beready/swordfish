<?php get_header(); ?>

<div class="page__mainVisual flex">
    <div class="page__mainVisual--thumb"></div>
    <div class="page__mainVisual--content">
        <h1>
            <span>Course List</span>
            <b>マリンアクティビティ</b>
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
                        笑顔溢れる、<br>
                        海上アドベンチャー。
                    </strong>
                </h2>
                <p>
                バナナボートとジェットスキーは、家族や女性同士のグループでも存分に楽しめるマリンアクティビティです。バナナボートは、みんなで力を合わせてバランスを取りながら、笑い声が絶えない楽しい時間を過ごせます。ジェットスキーでは、スピードの魅力と海の解放感を存分に味わえるため、アクティブに楽しみたい女性にもおすすめです。
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
                        共有する、<br>
                        特別な思い出作り。
                    </strong>
                </h2>
                <p>
                特別な準備や経験が不要なため、到着してすぐに海の楽しみに飛び込むことができます。バナナボートはグループでの絆を深める絶好のチャンスであり、ジェットスキーは自分のペースで海を感じる自由さを提供します。どちらも、共に挑戦し、笑いあうことで作り上げる特別な思い出になります。
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
                        グループで、<br>
                        楽しめる。
                    </strong>
                </h2>
                <p>
                家族や友人同士での体験は、日常では味わえない特別な思い出を作り出します。特にバナナボートはグループでの参加が前提のアクティビティで、一緒に乗り越える楽しみやチームワークが自然と生まれます。ジェットスキーは、自分で操縦する楽しさを体験でき、互いの挑戦を応援し合うことで絆が深まります。
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
                'post_type' => 'marin',
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