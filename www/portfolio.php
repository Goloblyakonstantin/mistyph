<?php require_once('php/php.php') ?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="/css/portfolio_css.css">
    <link rel="stylesheet" href="/css/header_css.css">
    <link rel="stylesheet" href="/css/footer_css.css">
		<meta name="keywords" content="<?php echo $keywords ?>">
		<meta name="description" content="<?php echo $description ?>">
		<link rel="shortcut icon" href="img/ico/ico.ico" type="image/x-icon">
    <title>Портфолио</title>
  </head>
  <body onload="setInterval(function_header_menu_popup,20), setTimeout(go_preload,10);">
    <div id="preloader" class="preloader">
      <h1>Загружаем</h1>
    </div>
    <?php require_once('header.php') ?>
    <main>
      <section class="main_section_0">
        <?php //таблица для портфолио
        	$num=0;
        	for($i=0;$i<4;$i++)
        	{
        		echo'<div class="main_section_0-div_0">';
        			for($j=0;$j<count($portfolio_photos_array)/4;$j++) //пройдёмся по массиву и разделим на 4(поровну для столбцов)
        			{
        				echo'<img src='.$portfolio_directory.'/'.$portfolio_photos_array[$num].'>';
        				$num++;
        			}
        		echo'</div>';
        	}
        ?>
      </section>
    </main>
    <?php require_once('footer.php') ?>
    <script src="js/javascript_header_menu.js"></script>
    <script src="js/javascript_preloader.js"></script>
  </body>
  <script>
  window.history.pushState({},"Hide",'Portfolio');
      if(typeof window.history.replaceState == 'function')
  	{
          window.history.pushState({},"Hide",'Portfolio');
      }
  </script>
</html>
