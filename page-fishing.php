<?php get_header(); ?>

<div class="page__mainVisual flex">
    <div class="page__mainVisual--thumb aonodoukutsu__thumb"></div>
    <div class="page__mainVisual--content">
        <h1>
            <span>Course List</span>
            <b>フィッシング・グリル</b>
        </h1>
    </div>
</div>


<div class="menu">
    <div class="menu__wrapper">

    <?php 
            $course_ttl = get_field('course_ttl');
            $course_text = get_field('course_text');
            $course_price = get_field('course_price');
            $twice_price = get_field('twice_price');
            $course_time = get_field('course_time');
            $course_amount = get_field('course_amount');
            $course_yoyaku = get_field('course_yoyaku');
            $course_img = get_field('course_img');
            $course_included = get_field('course_included');
            $course_conditions = get_field('course_conditions');
            $course_pdf = get_field('course_pdf');
            $course_pdf_name = get_field('course_pdf_name');
            $course_min = get_field('course_min');
            $course_noninclude = get_field('course_noninclude');
            $course_option = get_field('course_option');
            $course_belong = get_field('course_belong');
            $course_open = get_field('course_open');
            $course_syugo = get_field('course_syugo');
            $map_url = get_field('map_url');
            $course_bus = get_field('course_bus');
            $course_bikou = get_field('course_bikou');
            $course_cancel = get_field('course_cancel');
            $course_attention = get_field('course_attention');
            $place_ttl = get_field('place_ttl');
            $place_text = get_field('place_text');
            $place_address = get_field('place_address');
            $google_map_url = get_field('google_map_url');
            $place_img = get_field('place_img');
            $place_figcaption = get_field('place_figcaption');
            $place_iframe = get_field('place_iframe');
            $banana = get_field('banana');
            $course_add = get_field('course_add');
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

                    <?php if( have_rows('twice_price') ): ?>
                    <?php while( have_rows('twice_price') ): the_row();
                        $people_price = get_sub_field('people_price');
                        $one_price = get_sub_field('one_price');
                    ?>
                    <?php if($people_price): ?>
                        <div class="menu__price">
                            <p>２名様以上</p>
                            <dl class="flex">
                                <dt>通常料金</dt>
                                <dd><?php echo $people_price;?></dd>
                            </dl>
                        </div>
                    <?php endif; ?>
                    <?php if($one_price): ?>
                        <div class="menu__price">
                            <p>１名様</p>
                            <dl class="flex">
                                <dt>通常料金</dt>
                                <dd><?php echo $one_price;?></dd>
                            </dl>
                        </div>
                    <?php endif; ?>
                    <?php endwhile; ?>
                    <?php if($course_price): ?>
                        <div class="menu__price">
                            <dl class="flex">
                                <dt>通常料金</dt>
                                <dd><?php echo $course_price; ?></dd>
                            </dl>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>


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

                </div>
            </div>
        </div>

    </div>
</div>

<section id="infomation">
    <div class="container">
        <h2>補足内容</h2>
    </div>

    <div class="info__wrapper container">
        <?php if($course_conditions): ?>
            <dl class="flex">
                <dt>ご参加条件</dt>
                <dd>
                    <?php echo $course_conditions;?>
                    <?php if($course_pdf): ?>
                        <a href="<?php echo $course_pdf;?>" download="<?php echo $course_pdf_name;?>" class="common__btn">
                            <span>病歴診断書のダウンロードはこちらから</span>
                        </a>
                    <?php endif; ?>
                </dd>
            </dl>
        <?php endif; ?>
        <?php if($course_min): ?>
            <dl class="flex">
                <dt>最小催行人数</dt>
                <dd><?php echo $course_min;?></dd>
            </dl>
        <?php endif; ?>
        <?php if($course_price): ?>
            <dl class="flex">
                <dt>料金</dt>
                <dd><span><?php echo $course_price;?></span></dd>
            </dl>
        <?php endif; ?>
        <?php if($course_included): ?>
            <dl class="flex">
                <dt>料金に含まれるもの</dt>
                <dd><?php echo $course_included;?></dd>
            </dl>
        <?php endif; ?>
        <?php if($course_noninclude): ?>
            <dl class="flex">
                <dt>料金に含まれないもの</dt>
                <dd><?php echo $course_noninclude;?></dd>
            </dl>
        <?php endif; ?>
        <?php if($course_option): ?>
            <dl class="flex">
                <dt>オプション</dt>
                <dd><?php echo $course_noninclude;?></dd>
            </dl>
        <?php endif; ?>
        <?php if($course_belong): ?>
            <dl class="flex">
                <dt>持参するもの</dt>
                <dd><?php echo $course_belong;?></dd>
            </dl>
        <?php endif; ?>
        <?php if($course_open): ?>
            <dl class="flex">
                <dt>所要時間・開始時間</dt>
                <dd><?php echo $course_open;?></dd>
            </dl>
        <?php endif; ?>
        <?php if($course_syugo): ?>
            <dl class="flex">
                <dt>集合場所・時間</dt>
                <dd>
                    <?php echo $course_syugo;?>
                    <?php if($map_url): ?>
                        <a href="<?php echo $map_url;?>" target="_blank" class="common__btn common__btn--map">
                            <div class="flex">
                                <img src="<?php echo get_template_directory_uri();?>/images/common/map_icon.svg" alt="">
                                <span>Google Mapで見る</span>
                            </div>
                        </a>
                    <?php endif; ?>
                </dd>
            </dl>
        <?php endif; ?>
        <?php if($course_bus): ?>
            <dl class="flex">
                <dt>送迎について</dt>
                <dd><?php echo $course_bus;?></dd>
            </dl>
        <?php endif; ?>
        <?php if($course_bikou): ?>
            <dl class="flex">
                <dt>備考</dt>
                <dd><?php echo $course_bikou;?></dd>
            </dl>
        <?php endif; ?>
        <?php if($course_cancel): ?>
            <dl class="flex">
                <dt>キャンセルポリシー</dt>
                <dd><?php echo $course_cancel;?></dd>
            </dl>
        <?php endif; ?>
        <?php if($course_attention): ?>
            <dl class="flex">
                <dt>注意事項</dt>
                <dd><?php echo $course_attention;?></dd>
            </dl>
        <?php endif; ?>


    </div>
</section>

<div class="scroll__textWrapper">
    <div class="big__slideText">SWORD FISH DIVING SHOP</div>
    <div class="big__slideText">SWORD FISH DIVING SHOP</div>
</div>


<section id="meeting">
    <div class="container">
        <h3>
            <span>The meeting place</span>
            <strong>
                集合場所
            </strong>
        </h3>

        <div class="meeting__wrapper flex">
            <div class="left__content">
                <b><?php echo $place_ttl;?></b>

                <p>
                    <?php echo $place_text;?>
                </p>
                <dl class="flex">
                    <dt><?php echo $place_address;?></dt>
                    <dd>
                        <?php if($map_url): ?>
                            <a href="<?php echo $map_url;?>" target="_blank" class="common__btn common__btn--map">
                                <div class="flex">
                                    <img src="<?php echo get_template_directory_uri();?>/images/common/map_icon.svg" alt="">
                                    <span>Google Mapで見る</span>
                                </div>
                            </a>
                        <?php endif; ?>
                    </dd>
                </dl>
            </div>

            <div class="right__content">
                <div class="meeting__thumb" style="background-image:url(<?php echo $place_img;?>);">
                    <p><?php echo $place_figcaption;?></p>
                </div>
            </div>
        </div>

        <div class="map__iframe">
            <?php echo $place_iframe;?>
        </div>


        <a href="<?php echo $course_yoyaku;?>" class="reserve__btn">
            予約する
        </a>

        
    </div>
</section>

<?php get_footer(); ?>