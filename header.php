<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Brasserie Laiton(ブラッスリーレトン公式HP/池袋)</title>
  <meta name="description"content="池袋駅西口（南）から徒歩2分、東京芸術劇場から徒歩1分にあるベーカリー併設のフレンチレストランBrasserie Laiton。
  気取らずにカジュアルに過ごせる空間で、クラシック・スタイルのフランス料理を、自家製パンとともに提供しています。">
  <meta property="og:url" content=" https://laiton.tokyo/information.html">
  <meta property="og:type" content=" website">
  <meta property="og:title" content="ブラッスリーレトン　Brasserie Laiton Information">
  <meta property="og:description" content="池袋駅西口（南）から徒歩2分、東京芸術劇場から徒歩1分にあるベーカリー併設のフレンチレストランBrasserie Laiton。
  気取らずにカジュアルに過ごせる空間で、クラシック・スタイルのフランス料理を、自家製パンとともに提供しています。">
  <meta property="og:site_name" content="ブラッスリーレトン　Brasserie Laiton">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" />
   <!-- Global site tag (gtag.js) - Google Analytics -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=G-W4BHNQPM08"></script>
   <script>
   window.dataLayer = window.dataLayer || [];
   function gtag(){dataLayer.push(arguments);}
   gtag('js', new Date());
   gtag('config', 'G-W4BHNQPM08');
   </script>
   <script>
     var versioningnum = new Date().getTime()
   </script>
  <!-- jqueryの読み込み -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script>
    var versioningNum = new Date().getTime()
    var jsURL = '<?php echo get_template_directory_uri(); ?>/js/main.js?ver=' + versioningNum
    document.write('<script type="text/javascript" src="' + jsURL + '"><\/script>');
  </script>
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <!-- css -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/footer.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/loading.css">
</head>
<body>
  <div class="loader-bg">
    <div class="loader">
      <div class="one"></div>
      <div class="two"></div>
      <div class="three"></div>
      <img class="loading-image" src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
    </div>
  </div>
  <div class="loading-wrapper">
      <div class="wrapper info-wrap">
        <section class="header">
          <div class="nav-var">
            <a href="<?php echo home_url()?>"><img src="<?php echo get_template_directory_uri(); ?>/img/laiton_logo.png" alt="" class="logo"></a>
            <button type="button" class="js-btn btn" id="btn">
              <span class="btn-line"></span>
            </button>
          </div>
          <nav class="navigation">
            <ul id="menu">
              <a href="<?php echo home_url()?>"><li>Home</li></a>
              <a href="<?php echo home_url("/concept")?>"><li>Concept</li></a>
              <a href="<?php echo home_url("/menu")?>"><li>Menu</li></a>
              <a href="<?php echo home_url("/boulangerie")?>"><li>Boulangerie</li></a>
              <a href="<?php echo home_url("/gallerys")?>"><li>Gallery</li></a>
              <a href="<?php echo home_url("/infomation")?>"><li>Information</li></a>
              <a href="<?php echo home_url()?>#access"><li>Access</li></a>
              <a href="https://yoyaku.toreta.in/brasserie-laiton/"><li>Reservation(予約)</li></a>
              <p>Web でのご予約は当日の午前10 時までとなっております。<br>
              それ以降の当日のご予約はお電話にて店舗までご連絡ください。<br>
              <a href="tel:0359049991">03-5904-9991</a>（レストラン直通）</p>
            </ul>
          </nav>
        </section>

        <section class="header-2">
          <h1>この場で、その時も</h1>
            <a href="https://yoyaku.toreta.in/brasserie-laiton/" class="reservation">
              <img src="<?php echo get_template_directory_uri(); ?>/img/reservation.png" alt="">
            </a>
          </section>
          