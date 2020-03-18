<?php require_once('php/php.php') ?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="/css/main_css.css">
    <link rel="stylesheet" href="/css/header_css.css">
    <link rel="stylesheet" href="/css/footer_css.css">
		<meta name="keywords" content="<?php echo $keywords ?>">
		<meta name="description" content="<?php echo $description ?>">
		<link rel="shortcut icon" href="img/ico/ico.ico" type="image/x-icon">
    <title>Главная</title>
  </head>
  <body onload="setInterval(function_header_menu_popup,20), setTimeout(go_preload,10);">
    <div id="preloader" class="preloader">
      <h1>Загружаем</h1>
    </div>
    <?php require_once('header.php') ?>
    <main>
      <section class="main_section_background">

      </section>
      <section class="main_section_0">
        <img class="main_section_0-img" src="img/main/aboutme.jpg" alt="">
        <div class="main_section_0-div_0">
          <h1>ОБО МНЕ</h1>
          <h3>Привет!</h3>
          <?php echo'<p>'.$text_main_aboutme.'</p>' ?>
        </div>
      </section>
    </main>
    <?php require_once('footer.php') ?>
    <script src="js/javascript_header_menu.js"></script>
    <script src="js/javascript_preloader.js"></script>
  </body>
</html>
<script>
window.history.pushState({},"Hide",'Main');
  if(typeof window.history.replaceState == 'function')
	{
    window.history.pushState({},"Hide",'Main');
  }
</script>
