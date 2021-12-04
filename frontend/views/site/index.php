<?php

/* @var $this \yii\web\View */
/* @var $content string */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

$this->context->layout = false; //不使用布局

AppAsset::register($this);
?>
<html lang="en">
<head>
<title>Logistics &mdash; Colorlib Website Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="statics/css/style.css">

<link rel="stylesheet" href="statics/css/bootstrap.min.css">
<link rel="stylesheet" href="statics/css/magnific-popup.css">
<link rel="stylesheet" href="statics/css/jquery-ui.css">
<link rel="stylesheet" href="statics/css/owl.carousel.min.css">
<link rel="stylesheet" href="statics/css/owl.theme.default.min.css">

<link rel="stylesheet" href="statics/css/bootstrap-datepicker.css">

<link rel="stylesheet" href="statics/css/flaticon.css">



<link rel="stylesheet" href="statics/css/aos.css">

<link rel="stylesheet" href="statics/css/style1.css">

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="200">

<!-- <div class="site-wrap"> -->

<div class="site-mobile-menu site-navbar-target">
  <div class="site-mobile-menu-header">
	<div class="site-mobile-menu-close mt-3">
	  <span class="icon-close2 js-menu-toggle"></span>
	</div>
  </div>
  <div class="site-mobile-menu-body"></div>
</div>

<header class="site-navbar py-3 js-site-navbar site-navbar-target" role="banner" id="site-navbar">

  <div class="container">
	<div class="row align-items-center">
	  
	  <div class="col-11 col-xl-2 site-logo">
		<h1 class="mb-0"><a href="" class="text-white h2 mb-0">AZ</a></h1>
	  </div>
	  <div class="col-12 col-md-10 d-none d-xl-block">
		<nav class="site-navigation position-relative text-right" role="navigation">
		  <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
          <?php
            NavBar::begin([
                'brandLabel' => Yii::$app->name,
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
                ],
            ]);
            $menuItems = [
                ['label' => '主页', 'url' => ['/site/index']],
                //['label' => '冬奥会简介', 'url' => ['#section-about']],
                //['label' => 'Services', 'url' => ['#section-services']],
                //['label' => '体育项目', 'url' => ['#section-industries']],
                //['label' => 'Blog', 'url' => ['#section-industries']],
                //['label' => 'About', 'url' => ['#section-blog']],
                ['label' => '留言板', 'url' => ['/site/contact']],
                ['label' => '关于我们', 'url' => ['/site/about']],
            ];
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => '注册', 'url' => ['/site/signup']];
                $menuItems[] = ['label' => '登陆', 'url' => ['/site/login']];
            } else {
                $menuItems[] = '<li>'
                    . Html::beginForm(['/site/logout'], 'post')
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'btn btn-link logout']
                    )
                    . Html::endForm()
                    . '</li>';
            }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
            ?>
		  </ul>
		</nav>
	  </div>


	  <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>

	  </div>

	</div>
  
  
</header>



<div class="site-blocks-cover overlay" style="background-image: url(statics/image/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5" id="section-主页">
  <div class="container">
	<div class="row align-items-center justify-content-center text-center">

	  <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
		

		<h1 class="text-white font-weight-light text-uppercase font-weight-bold" data-aos="fade-up">2022北京冬奥会</h1>
		<p class="mb-5" data-aos="fade-up" data-aos-delay="100">一场冰雪盛宴</p>
		<p data-aos="fade-up" data-aos-delay="200"><a href="javascript:;" class="btn btn-primary py-3 px-5 text-white">Get Started!</a></p>

	  </div>
	</div>
  </div>
</div>  

<div class="site-section" id="section-about">
  <div class="container">
	<div class="row mb-5">
	  
	  <div class="col-md-5 ml-auto mb-5 order-md-2" data-aos="fade-up" data-aos-delay="100">
		<img src="statics/picture/img_3.jpg" alt="Image" class="img-fluid rounded">
	  </div>
	  <div class="col-md-6 order-md-1" data-aos="fade-up">
		<div class="text-left pb-1 border-primary mb-4">
		  <h2 class="text-primary">冬奥会简介</h2>
		</div>
		<p>冬季奥林匹克运动会（Olympic Winter Games），简称为冬季奥运会、冬奥会。主要由全世界地区举行，是世界规模最大的冬季综合性运动会，每四年举办一届，1994年起与夏季奥林匹克运动会相间举行。参与国主要分布在世界各地，包括欧洲、非洲、美洲、亚洲、大洋洲。由国际奥林匹克委员会(International Olympic Committee)主办。按实际举行次数计算届数。</p>
		<p class="mb-5">1986年，国际奥委会全会决定把冬季奥运会和夏季奥运会从1994年起分开，每两年间隔举行，1992年冬季奥运会是最后一届与夏季奥运会同年举行的冬奥会。自1924年开始第1届，截至2018年共举办了23届，每四年一届。</p>
		
		<ul class="ul-check list-unstyled success">
		  <li>2014年02月07日-2014年02月23日 俄罗斯索契</li>
		  <li>2018年02月09日-2018年02月25日 韩国平昌</li>
		  <li>2022年02月04日-2022年02月20日 中国北京</li>
		</ul>
		
	  </div>
	  
	</div>
  </div>
</div>

<div class="site-section bg-image overlay" style="background-image: url('statics/image/hero_bg_4.jpg');" id="section-how-it-works">
  <div class="container">
	<div class="row justify-content-center mb-5">
	  <div class="col-md-7 text-center border-primary">
		<a href = "/advanced/frontend/web/index.php?r=info"><h2 class="font-weight-light text-primary" data-aos="fade">历史信息</h2></a>
	  </div>
	</div>
	
	<div class="row">
	  <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
		<div class="how-it-work-item">
		  <span class="number">2</span>
		  <div class="how-it-work-body">
			<h2>美国</h2>
			<p class="mb-5">美国共举办过4次夏季奥运会和4次冬季奥运会，分别是1932年2月4日第三届美国普莱西德湖冬季奥运会，1960年2月28日第八届美国斯阔谷冬季奥运会，1980年2月13日第十三届美国普莱西德湖冬季奥运会，2002年2月9日第十九届美国盐湖城冬季奥运会</p>
			</ul>
		  </div>
		</div>
	  </div>

	  <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="500">
		<div class="how-it-work-item">
		  <span class="number">1</span>
		  <div class="how-it-work-body">
			<h2>挪威</h2>
			<p class="mb-5">1952年冬季奥运会来到了现代滑雪的诞生地挪威。奥运圣火从挪威一位著名的滑雪运动员努尔海姆（Sondre Nordheim）家里的炉火中点燃，并经过了94名滑雪运动员的接力传递后来到奥运会主体育场 在主运动场中点燃的大会圣火火炬，成为冬季奥运会第一次正式的圣火。东道主挪威28岁速度滑冰运动员安德森（Hjalmar Andersen）在家乡父老面前，夺得3面速度滑冰金牌，成为第一位在一届冬季奥运会中夺得3面金牌的运动员，他在1,500米、5,000米和 10,000米比赛中以奥运会历史上最大优势成绩夺得这三枚金牌。</p>
			</ul>
		  </div>
		</div>
	  </div>

	  <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
		<div class="how-it-work-item">
		  <span class="number">3</span>
		  <div class="how-it-work-body">
			<h2>德国</h2>
			<p class="mb-5">由于第一次世界大战的原因，德国直到1928年才被允许派队参加冬奥会。在截至目前的22届冬奥会上，只11次参赛的德国总共夺得了78金、78银和53铜，列奖牌总榜第三位，仅次于挪威和美国。同时，德国也是前三名中唯一没有参加全部22届冬奥会的国家。这样一个冰雪运动强国，迄今为止也只举办过一次冬奥会，那就是1936年的德国加米施帕滕基兴冬奥会。那一届冬奥会上，德国队获得3金3银，已经显露出冰雪运动强国的影子。</p>
			</ul>
		  </div>
		</div>
	  </div>

	</div>
  </div>
</div>

<div class="site-section border-bottom" id="section-our-team">
  <div class="container">
	<div class="row justify-content-center mb-5">
	  <div class="col-md-7 text-center border-primary">
	  <a href = "/advanced/frontend/web/index.php?r=records"><h2 class="font-weight-light text-primary" data-aos="fade">世界纪录</h2></a>
	  </div>
	</div>
	<div class="row">
	  <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
		<div class="person">
		  <img src="statics/picture/person_2.jpg" alt="Image" class="img-fluid rounded mb-5 w-75 rounded-circle">
		  <h3>滑雪</h3>
		  <p class="position text-muted">以滑雪板为主要工具</p>
		  <p class="mb-4">滑雪的最高时速是男子世界记录248公里/小时,女子229.均1999年创造的。速度滑雪：是以滑雪板为主要工具在专门的雪道上沿直线快速滑降的一种雪上竞速运动。由于这项运动滑降的速度极快，通常以公里计量成绩，因此又有人称其为调高速滑降滑雪”、“雪上一级方程式赛车”、“超速高山滑雪”以及“公路计量的速度”等等。</p>

		</div>
	  </div>
	  <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
		<div class="person">
		  <img src="statics/picture/person_1.jpg" alt="Image" class="img-fluid rounded mb-5 w-75 rounded-circle">
		  <h3>钢架雪车</h3>
		  <p class="position text-muted">雪车也称“有舵雪橇“</p>
		  <p class="mb-4">2021年11月13日，在钢架雪车欧洲杯第一站挪威利勒哈默尔站比赛中，23岁的绵阳姑娘黎禹汐作为中国钢架雪车选手参加女子组比赛。这是中国钢架雪车队2021—2022赛季出征外赛的第一站，江油中学2013级毕业学生黎禹汐在12日的首站比赛上以第一轮成绩53秒62，第二轮成绩53秒83，两轮都位列第一，总成绩1分47秒45毫无悬念摘得金牌。第二站比赛于13日进行，黎禹汐延续了前一天比赛的好状态，以1分47秒00夺冠。这是我国女子钢架雪车在国际比赛中获得的第一个冠军，同时在11月13日的比赛中，黎禹汐刷新了挪威利勒哈默尔赛道的女子最好成绩，创造了新的世界纪录！</p>
		</div>
	  </div>
	  <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
		<div class="person">
		  <img src="statics/picture/person_4.jpg" alt="Image" class="img-fluid rounded mb-5 w-75 rounded-circle">
		  <h3>四人雪车</h3>
		  <p class="position text-muted">一种集体乘坐雪车，可操纵方向的雪橇</p>
		  <p class="mb-4">耿文强：中国雪车运动员，2015年进入中国国家队并被选为中国钢架雪车队队长，2016年在瑞士圣莫里兹钢架雪车国际邀请赛中他获得铜牌，填补了中国在该项目上奖牌的空白；同年11月在德国钢架雪车洲际杯比赛中他又获得铜牌。2020年在国际雪车联合会钢架雪车世界杯法国拉普拉涅站比赛中，耿文强获得男子第三名，代表中国首次登上该项目世界杯领奖台。</p>
		</div>
	  </div>
	</div>
  </div>
</div>





<div class="site-section bg-light" id="section-services">
  <div class="container">
	<div class="row justify-content-center mb-5" data-aos="fade-up">
	  <div class="col-md-7 text-center border-primary">
		<h2 class="mb-0 text-primary">Our Services</h2>
		<p class="color-black-opacity-5">Lorem ipsum dolor sit amet.</p>
	  </div>
	</div>
	<div class="row align-items-stretch">
	  <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
		<div class="unit-4 d-flex">
		  <div class="unit-4-icon mr-4"><span class="text-primary flaticon-plane"></span></div>
		  <div>
			<h3>Air Freight</h3>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
			<p><a href="#">Learn More</a></p>
		  </div>
		</div>
	  </div>
	  <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
		<div class="unit-4 d-flex">
		  <div class="unit-4-icon mr-4"><span class="text-primary flaticon-boat-ship"></span></div>
		  <div>
			<h3>Ocean Freight</h3>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
			<p><a href="#">Learn More</a></p>
		  </div>
		</div>
	  </div>
	  <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
		<div class="unit-4 d-flex">
		  <div class="unit-4-icon mr-4"><span class="text-primary flaticon-truck"></span></div>
		  <div>
			<h3>Land Transportation</h3>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
			<p><a href="#">Learn More</a></p>
		  </div>
		</div>
	  </div>


	  <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="300">
		<div class="unit-4 d-flex">
		  <div class="unit-4-icon mr-4"><span class="text-primary flaticon-warehouse"></span></div>
		  <div>
			<h3>Warehousing</h3>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
			<p><a href="#">Learn More</a></p>
		  </div>
		</div>
	  </div>
	  <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="400">
		<div class="unit-4 d-flex">
		  <div class="unit-4-icon mr-4"><span class="text-primary flaticon-wooden"></span></div>
		  <div>
			<h3>Storage</h3>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
			<p><a href="#">Learn More</a></p>
		  </div>
		</div>
	  </div>
	  <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="500">
		<div class="unit-4 d-flex">
		  <div class="unit-4-icon mr-4"><span class="text-primary flaticon-worldwide"></span></div>
		  <div>
			<h3>Worldwide Delivery</h3>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
			<p><a href="#">Learn More</a></p>
		  </div>
		</div>
	  </div>

	</div>
  </div>
</div>



<div class="site-section block-13" id="section-industries">

  <div class="container">
	<div class="row justify-content-center mb-5">
	  <div class="col-md-7 text-center border-primary">
		<h2 class="mb-0 text-primary"><a href="/advanced/frontend/web/index.php?r=sports">体育项目</a></h2>
		<p class="color-black-opacity-5">常见的冬奥项目</p>
	  </div>
	</div>
  </div>

  <div class="owl-carousel nonloop-block-13">
	<div>
	  <a class="unit-1 text-center">
		<img src="statics/picture/img_1.jpg" alt="Image" class="img-fluid">
		<div class="unit-1-text">
		  <h3 class="unit-1-heading">冰壶</h3>
		</div>
	  </a>
	</div>

	<div>
	  <a class="unit-1 text-center">
		<img src="statics/picture/img_2.jpg" alt="Image" class="img-fluid">
		<div class="unit-1-text">
		  <h3 class="unit-1-heading">短道速滑</h3>
		</div>
	  </a>
	</div>

	<div>
	  <a class="unit-1 text-center">
		<img src="statics/picture/img_3.jpg" alt="Image" class="img-fluid">
		<div class="unit-1-text">
		  <h3 class="unit-1-heading">北京冬奥会旗帜</h3>
		</div>
	  </a>
	</div>

	<div>
	  <a class="unit-1 text-center">
		<img src="statics/picture/img_4.jpg" alt="Image" class="img-fluid">
		<div class="unit-1-text">
		  <h3 class="unit-1-heading">滑冰</h3>
		</div>
	  </a>
	</div>

	<div>
	  <a class="unit-1 text-center">
		<img src="statics/picture/img_5.jpg" alt="Image" class="img-fluid">
		<div class="unit-1-text">
		  <h3 class="unit-1-heading">冰球</h3>
		</div>
	  </a>
	</div>


  </div>
</div>




<div class="site-section border-bottom">
  <div class="container">

	<div class="row justify-content-center mb-5">
	  <div class="col-md-7 text-center border-primary">
		<h2 class="font-weight-light text-primary"><a href = "/advanced/frontend/web/index.php?r=ogmessage">用户留言</a></h2>
	  </div>
	</div>

	<div class="slide-one-item 主页-slider owl-carousel">
	  <div>
		<div class="testimonial">
		  <figure class="mb-4">
			<img src="statics/picture/person_1.jpg" alt="Image" class="img-fluid mb-3">
			
		  </figure>
		  <blockquote>
			<p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
			<p class="author"> &mdash; John Trump</p>
		  </blockquote>
		</div>
	  </div>
	  <div>
		<div class="testimonial">
		  <figure class="mb-4">
			<img src="statics/picture/person_2.jpg" alt="Image" class="img-fluid mb-3">
			
		  </figure>
		  <blockquote>
			<p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
			<p class="author"> &mdash; Roger Moore</p>
		  </blockquote>
		</div>
	  </div>

	  <div>
		<div class="testimonial">
		  <figure class="mb-4">
			<img src="statics/picture/person_4.jpg" alt="Image" class="img-fluid mb-3">
		  </figure>
		  <blockquote>
			<p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
			<p class="author"> &mdash; Ben Carson</p>
		  </blockquote>
		</div>
	  </div>

	  <div>
		<div class="testimonial">
		  <figure class="mb-4">
			<img src="statics/picture/person_5.jpg" alt="Image" class="img-fluid mb-3">
		  </figure>
		  <blockquote>
			<p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
			<p class="author"> &mdash; Jed Smith</p>
		  </blockquote>
		</div>
	  </div>

	</div>
  </div>
</div>

<div class="site-section" id="section-blog">
  <div class="container">
	<div class="row justify-content-center mb-5">
	  <div class="col-md-7 text-center border-primary">
		<h2 class="font-weight-light text-primary">Our Blog</h2>
		<p class="color-black-opacity-5">See Our Daily News &amp; Updates</p>
	  </div>
	</div>
	<div class="row mb-5 align-items-stretch">
	  <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
		<div class="h-entry">
		  <a href="single.html"><img src="statics/picture/blog_1.jpg" alt="Image" class="img-fluid"></a>
		  <h2 class="font-size-regular"><a href="single.html">How Logistics Company Improve Spendings</a></h2>
		  <div class="meta mb-4">by Jed Wilson <span class="mx-2">&bullet;</span> Jan 18, 2021 <span class="mx-2">&bullet;</span> <a href="#">News</a></div>
		  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
		</div> 
	  </div>
	  <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
		<div class="h-entry">
		  <a href="single.html"><img src="statics/picture/blog_2.jpg" alt="Image" class="img-fluid"></a>
		  <h2 class="font-size-regular"><a href="single.html">How Logistics Company Improve Spendings</a></h2>
		  <div class="meta mb-4">by Jed Wilson <span class="mx-2">&bullet;</span> Jan 18, 2021 <span class="mx-2">&bullet;</span> <a href="#">News</a></div>
		  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
		</div> 
	  </div>
	  <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
		<div class="h-entry">
		  <a href="single.html"><img src="statics/picture/blog_3.jpg" alt="Image" class="img-fluid"></a>
		  <h2 class="font-size-regular"><a href="single.html">How Logistics Company Improve Spendings</a></h2>
		  <div class="meta mb-4">by Jed Wilson <span class="mx-2">&bullet;</span> Jan 18, 2021 <span class="mx-2">&bullet;</span> <a href="#">News</a></div>
		  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
		</div>
	  </div>
	</div>
	<div class="row">
	  <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="300">
		<p class="mb-0"><a href="javascript:;" class="btn btn-primary py-3 px-5 text-white">View All Blog Posts</a></p>
	  </div>
	</div>
  </div>
</div>

<div class="site-section bg-light" id="section-contact">
  <div class="container">
	<div class="row justify-content-center mb-5">
	  <div class="col-md-7 text-center border-primary">
		<h2 class="font-weight-light text-primary">登陆/注册</h2>
		<p class="color-black-opacity-5">See Our Daily News &amp; Updates</p>
	  </div>
	</div>
	<div class="row">
	  <div class="col-md-7 mb-5">

		

		<form action="#" class="p-5 bg-white">
		 

		  <div class="row form-group">
			<div class="col-md-6 mb-3 mb-md-0">
			  <label class="text-black" for="fname">First Name</label>
			  <input type="text" id="fname" class="form-control">
			</div>
			<div class="col-md-6">
			  <label class="text-black" for="lname">Last Name</label>
			  <input type="text" id="lname" class="form-control">
			</div>
		  </div>

		  <div class="row form-group">
			
			<div class="col-md-12">
			  <label class="text-black" for="email">Email</label> 
			  <input type="email" id="email" class="form-control">
			</div>
		  </div>

		  <div class="row form-group">
			
			<div class="col-md-12">
			  <label class="text-black" for="subject">Subject</label> 
			  <input type="subject" id="subject" class="form-control">
			</div>
		  </div>

		  <div class="row form-group">
			<div class="col-md-12">
			  <label class="text-black" for="message">Message</label> 
			  <textarea name="message" id="message" cols="30" rows="7" class="form-control"></textarea>
			</div>
		  </div>

		  <div class="row form-group">
			<div class="col-md-12">
			  <input type="submit" value="Send Message" class="btn btn-primary py-2 px-4 text-white">
			</div>
		  </div>


		</form>
	  </div>
	  <div class="col-md-5">
		
		<div class="p-4 mb-3 bg-white">
		  <p class="mb-0 font-weight-bold">Address</p>
		  <p class="mb-4">计算机学院, 海河教育园区南开大学, 津南区, 天津</p>

		  <p class="mb-0 font-weight-bold">Phone</p>
		  <p class="mb-4"><a href="#">+86 18713012939</a></p>

		  <p class="mb-0 font-weight-bold">Email Address</p>
		  <p class="mb-0"><a href="#">1119886232@qq.com</a></p>

		</div>
		
		<div class="p-4 mb-3 bg-white">
		  <h3 class="h5 text-black mb-3">More Info</h3>
		  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur? Fugiat quaerat eos qui, libero neque sed nulla.</p>
		  <p><a href="#" class="btn btn-primary px-4 py-2 text-white">Learn More</a></p>
		</div>

	  </div>
	</div>
  </div>
</div>


<footer class="site-footer">
  <div class="container">
	<div class="row">
	  <div class="col-md-9">
		<div class="row">
		  <div class="col-md-5 mr-auto">
			<h2 class="footer-heading mb-4">冬奥会简介</h2>
			<p>冬季奥林匹克运动会（Olympic Winter Games），简称为冬季奥运会、冬奥会。主要由全世界地区举行，是世界规模最大的冬季综合性运动会，每四年举办一届，1994年起与夏季奥林匹克运动会相间举行。参与国主要分布在世界各地，包括欧洲、非洲、美洲、亚洲、大洋洲。由国际奥林匹克委员会(International Olympic Committee)主办。按实际举行次数计算届数。</p>
		  </div>
		  
		  <div class="col-md-3">
			<h2 class="footer-heading mb-4">Quick Links</h2>
			<ul class="list-unstyled">
			  <li><a href="#">冬奥会简介</a></li>
			  <li><a href="#">Services</a></li>
			  <li><a href="#">用户留言</a></li>
			  <li><a href="#">登陆/注册</a></li>
			</ul>
		  </div>
		  <div class="col-md-3">
			<h2 class="footer-heading mb-4">Follow Us</h2>
			<a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
			<a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
			<a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
			<a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
		  </div>
		</div>
	  </div>
	  <div class="col-md-3">
		<h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
		<form action="#" method="post">
		  <div class="input-group mb-3">
			<input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
			<div class="input-group-append">
			  <button class="btn btn-primary text-white" type="button" id="button-addon2">Send</button>
			</div>
		  </div>
		</form>
	  </div>
	</div>
	<div class="row pt-5 mt-5 text-center">
	  <div class="col-md-12">
		<div class="border-top pt-5">
		  <p>Copyright &copy; 2021.指数小队 All rights reserved.</p>
		</div>
	  </div>
	  
	</div>
  </div>
</footer>
<!-- </div> -->



<script src="statics/js/jquery-3.3.1.min.js"></script>
<script src="statics/js/jquery-migrate-3.0.1.min.js"></script>
<script src="statics/js/jquery-ui.js"></script>
<script src="statics/js/jquery.easing.1.3.js"></script>
<script src="statics/js/popper.min.js"></script>
<script src="statics/js/bootstrap.min.js"></script>
<script src="statics/js/owl.carousel.min.js"></script>
<script src="statics/js/jquery.stellar.min.js"></script>
<script src="statics/js/jquery.countdown.min.js"></script>
<script src="statics/js/jquery.magnific-popup.min.js"></script>
<script src="statics/js/bootstrap-datepicker.min.js"></script>
<script src="statics/js/aos.js"></script>
<script src="statics/js/main.js"></script>

</body>
</html>
