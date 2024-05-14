
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

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">

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

				<ul id="gnav" class="flex">
					<li>
						<a href="/">ホーム</a>
					</li>
					<li>
						<a href="/about">Sword Fishとは</a>
					</li>
					<li class="course">
						<a href="">コース</a>
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

		<div class="hidden__menu">
			<div class="container">
				<ul class="flex">
					<li>
						<a href="/aonodokutsu">
							<div class="course__thumb aonodokutsu"></div>
							<p>青の洞窟・恩納村コース</p>
						</a>
					</li>
					<li>
						<a href="">
							<div class="course__thumb sup"></div>
							<p>SUP・シーカヤック</p>
						</a>
					</li>
					<li>
						<a href="">
							<div class="course__thumb marinactivity"></div>
							<p>マリンアクティビティ</p>
						</a>
					</li>
					<li>
						<a href="">
							<div class="course__thumb pala"></div>
							<p>パラセーリング</p>
						</a>
					</li>
					<li>
						<a href="">
							<div class="course__thumb bbq"></div>
							<p>BBQ</p>
						</a>
					</li>
					<li>
						<a href="">
							<div class="course__thumb fishing"></div>
							<p>フィッシング＆グリル</p>
						</a>
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