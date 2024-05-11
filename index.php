
<!DOCTYPE html>
	<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
		
		
		<title>SwordFish</title>


		<!-- CSS -->
		<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css">
		<link href="<?php echo get_template_directory_uri(); ?>/scss/main.css?<?php echo date('Ymd'); ?>" rel="stylesheet" type="text/css">
		<link href="<?php echo get_template_directory_uri(); ?>/scss/slick-theme.css?<?php echo date('Ymd'); ?>" rel="stylesheet" type="text/css">
		<link href="<?php echo get_template_directory_uri(); ?>/scss/slick.css?<?php echo date('Ymd'); ?>" rel="stylesheet" type="text/css">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/common/favicon.ico" id="favicon">

		<script>
			(function(d) {
				var config = {
				kitId: 'nxu4hva',
				scriptTimeout: 3000,
				async: true
				},
				h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
			})(document);
		</script>
		
		<?php wp_head(); ?>
	</head>
<body>
		<!-- <div id="full_screen">
			<div id="iframe_player_api"></div>
			<span id="close_btn"><img src="</?php echo get_template_directory_uri(); ?>/images/close.png" width="60" alt="×" /></span>
		</div> -->

	<header id="header">
		<div class="header__wrap">
			<div class="flex">
				<a href="/" class="header__logo">
					<img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.svg">
				</a>

				<ul class="flex">
					<li>
						<a href="">ホーム</a>
					</li>
					<li>
						<a href="">Sword Fishとは</a>
					</li>
					<li>
						<a href="">メニュー</a>
					</li>
					<li>
						<a href="">Food</a>
					</li>
					<li>
						<a href="">特徴</a>
					</li>
					<li>
						<a href="">スタッフ</a>
					</li>
					<li>
						<a href="">お知らせ</a>
					</li>
					<li>
						<a href="">予約</a>
					</li>
				</ul>
			</div>
		</div>
	</header>
	<!-- //header -->

	<div id="toggle">
		<span></span>
		<span></span>
		<span></span>
	</div>

	<main>
		<div id="mv">
			<div class="mv__wrapper">
				<video id="videoTop" autoplay muted playsinline loop width="1920px" height="1080px">
					<source src="<?php echo get_template_directory_uri(); ?>/images/video/pc_mv.mp4" type="video/mp4">
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

							<a href="/" class="common__btn">詳しく見る</a>
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
							<a href="/" class="common__btn common__btn--white">青の洞窟・恩納村コース</a>
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
							<a href="/" class="common__btn common__btn--white">セットメニュー</a>
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

						<a href="/" class="common__btn">詳しく見る</a>
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
			</div>
		</section>

	</main>
	

</body>

<?php wp_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.arctext.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/infiniteslidev2.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/index.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/movie.js"></script>
	
</html>