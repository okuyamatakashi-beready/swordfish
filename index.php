<?php get_header(); ?>

	<main>
		<div id="mv">
			<div class="mv__wrapper">
				<video id="videoTop" autoplay muted playsinline loop width="1920px" height="1080px">
					<source src="<?php echo get_template_directory_uri(); ?>/images/video/mainvisual.webm">
				</video>
				<p class="catch">
					海で見つける<br>
					まだ見ぬ新しい自分
				</p>
			</div>
		</div>
		<!-- //mv -->

		<section id="about">
			<div class="left_container">
				<div class="flex">
					<div class="about__slider">
						<div class="about__slider--slide">
							<img src="<?php echo get_template_directory_uri(); ?>/images/top/about_slide01.jpg">
						</div>
						<div class="about__slider--slide">
							<img src="<?php echo get_template_directory_uri(); ?>/images/top/about_slide02.jpg">
						</div>
						<div class="about__slider--slide">
							<img src="<?php echo get_template_directory_uri(); ?>/images/top/about_slide03.jpg">
						</div>
					</div>

					<div class="about__right">
						<div class="section__content">
							<h2 class="section__content--ttl">
								<small>Shop Infomation</small>
								<span>Sword Fishとは</span>
							</h2>

							<p class="section__content--text">
								サイトの紹介文が入りますサイトの紹介文が入りますサイトの紹介文が入ります
								サイトの紹介文が入りますサイトの紹介文が入ります
								サイトの紹介文が入りますサイトの紹介文が入りますサイトの紹介文が入ります
								サイトの紹介文が入りますサイトの紹介文が入ります
								サイトの紹介文が入りますサイトの紹介文が入りますサイトの紹介文が入ります
							</p>

							<a href="/about" class="common__btn">詳しく見る</a>
						</div>
					</div>
				</div>
				<!-- //flex -->
			</div>
		</section>

		<div class="scroll__textWrapper">
			<div class="big__slideText">SWORD FISH DIVING SHOP</div>
			<div class="big__slideText">SWORD FISH DIVING SHOP</div>
		</div>

		<section id="menu">
			<div class="menu__wrapper flex">
				<div class="menu__wrapper--left">
					<ul class="flex">
						<li class="aonodokutsu">
							<a href="/aonodokutsu" class="common__btn common__btn--white">青の洞窟・恩納村コース</a>
						</li>
						<li class="sup">
							<a href="/" class="common__btn common__btn--white">SUP・シーカヤック</a>
						</li>
						<li class="marinactivity">
							<a href="/" class="common__btn common__btn--white">マリンアクティビティ</a>
						</li>
						<li class="pala">
							<a href="/" class="common__btn common__btn--white">パラセーリング</a>
						</li>
						<li class="bbq">
							<a href="/" class="common__btn common__btn--white">BBQ</a>
						</li>
						<li class="fishing">
							<a href="/" class="common__btn common__btn--white">フィッシング＆グリル</a>
						</li>
					</ul>
				</div>

				<div class="menu__wrapper--right">
					<div class="section__content">
						<h2 class="section__content--ttl">
							<small>Menu</small>
							<span>メニュー</span>
						</h2>

						<p class="section__content--text">
							ソードフィッシュでは、青の洞窟ツアーやシーカヤックツアー、マリンスポーツなどを通して、
							沖縄のステキな思い出をたくさん作っていただきたい！また家族や友人との大切な思い出にしてほしい！
							そんな気持ちでお客様をお待ちしております！お客様の笑顔に出会えることが私たちの一番の楽しみです！
						</p>

						<!-- <a href="/" class="common__btn">詳しく見る</a> -->
					</div>
				</div>
			</div>
		</section>

		<div class="scroll__textWrapper">
			<div class="big__slideText">SWORD FISH DIVING SHOP</div>
			<div class="big__slideText">SWORD FISH DIVING SHOP</div>
		</div>

		<div id="feature">
			<div class="container">
				<div class="feature__content feature__content--01 feature__content--left flex">
					<div class="feature__text feature__text--left flex">
						<span>特徴01</span>
						<div class="feature__ttl">
							<strong>当日予約OK！</strong>
							<p>
								当日のご予約でも大丈夫！お電話にて、<br>
								ご予約の上、各コースの集合時間をご確認頂き、<br>
								集合時間に間に合うようお越しください。
							</p>
						</div>
					</div>

					<div class="feature__images feature__images--01"></div>
				</div>

				<div class="feature__content feature__content--02 feature__content--right flex">
					<div class="feature__text feature__text--right flex">
						<span>特徴02</span>
						<div class="feature__ttl">
							<strong>水着だけでOK！</strong>
							<p>
								持ち物は、水着とタオルだけでOK！<br>
								シュノーケルの水中メガネ、ウエットスーツなどの<br>
								必要器材は各コース料金に含まれております。
							</p>
						</div>
					</div>

					<div class="feature__images feature__images--02"></div>
				</div>

				<div class="feature__content feature__content--03 feature__content--left flex">
					<div class="feature__text feature__text--left flex">
						<span>特徴03</span>
						<div class="feature__ttl">
							<strong>雨の日でも開催！</strong>
							<p>
								雨が降っていても海の状態がよければツアーは開催いたします。<br>
								ただ台風や海洋状況によっては中止になる場合がございます。
							</p>
						</div>
					</div>

					<div class="feature__images feature__images--03"></div>
				</div>
			</div>
		</div>

		<section id="staff">
			<div class="container">
				<h2 class="sec_ttl--center">
					<span>Staff</span>
					<strong>スタッフ</strong>
				</h2>

				<ul class="flex">
				<?php
					$paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
					$args = array(
						'posts_per_page' => '1',
						'post_status' => 'publish',
						'paged' => $paged,
						'post_type' => 'swordfish-staff',
					);
					?>
					<?php $my_query = new WP_Query( $args ); ?><!-- クエリの指定 -->

						<?php if ( $my_query->have_posts() ) :

							while ( $my_query->have_posts() ) : $my_query->the_post(); ?>

					<?php 
						$name = get_field('name');
						$job = get_field('job');
						$img = get_field('img');
					?>
					<li>
						<div class="member__thumb" style="background-image:url(<?php echo $img;?>);"></div>
						<div class="member__text">
							<b><?php echo $name;?></b>
							<span><?php echo $job;?></span>
						</div>
					</li>
					<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>	
				</ul>
			</div>
		</section>

		<section id="news">
			<div class="container">
				<h2 class="sec_ttl--center">
					<span>News</span>
					<strong>お知らせ</strong>
				</h2>

				<ul class="flex">
				<?php
					$paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
					$args = array(
						'posts_per_page' => '6',
						'post_status' => 'publish',
						'paged' => $paged,
						'post_type' => 'post',
					);
					?>
					<?php $my_query = new WP_Query( $args ); ?><!-- クエリの指定 -->

						<?php if ( $my_query->have_posts() ) :

							while ( $my_query->have_posts() ) : $my_query->the_post(); ?>

						<li style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)">
							<a href="<?php the_permalink(); ?>">
								<div class="post_ttl">
									<span class="cat">グルメ</span>
									<h3><?php the_title();?></h3>
								</div>
							</a>
						</li>
					<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>	

				</ul>

				<a href="/news" class="common__btn">詳しく見る</a>
			</div>
		</section>



<?php get_footer(); ?>