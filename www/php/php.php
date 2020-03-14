<?php

$keywords=file_get_contents('text/keywords/keywords_text.txt');
$description=file_get_contents('text/keywords/description_text.txt');

$text_main_aboutme=file_get_contents('text/main/main_aboutme_text.txt');

$price_price_array_text_1=array(array('Как происходит съемка?',file_get_contents('text/price/faq/price_faq_text_0.txt')),
				array('Выбор даты и времени',file_get_contents('text/price/faq/price_faq_text_1.txt')),
				array('Предоплата',file_get_contents('text/price/faq/price_faq_text_2.txt')),
				array('Выбор идеи, образа и студии',file_get_contents('text/price/faq/price_faq_text_3.txt')),
				array('Как я отдаю фотографии?',file_get_contents('text/price/faq/price_faq_text_4.txt')),
				array('Дополнительные услуги',file_get_contents('text/price/faq/price_faq_text_5.txt')));

//portfolio
	//подгрузка фото в портфолио
	//foreach (glob($path."*.{jpg,png,gif}", GLOB_BRACE) as $filename)
		$portfolio_directory="img/portfolio";    // Папка с изображениями
		$allowed_types=array("jpg", "png", "gif");  //разрешеные типы изображений
		$file_parts=array();
		$portfolio_photos_array=array();
		  $ext="";
		  $title="";
		  $i=0;
		//пробуем открыть папку
		  $dir_handle= @opendir($portfolio_directory) or die("Ошибка при открытии папки!!");
		while($file=readdir($dir_handle))    //поиск по файлам
		{
			if($file=="." || $file == "..") continue;  //пропустить ссылки на другие папки
				$file_parts = explode(".",$file);          //разделить имя файла и поместить его в массив
			$ext = strtolower(array_pop($file_parts));   //последний элеменет - это расширение
			if(in_array($ext,$allowed_types))
			{
				$portfolio_photos_array[$i]=$file;
				$i++;
			}
		}
		closedir($dir_handle);  //закрыть папку

		$price_price_array_studios=array(array('img/price/studios/studios_img_0.jpg','212,<br/>зал 51st','1390₽',file_get_contents('text/price/studios/price_studios_text_0.txt')),
					array('img/price/studios/studios_img_1.jpg','DiStudio,<br/>зал Грей','600₽',file_get_contents('text/price/studios/price_studios_text_1.txt')),
					array('img/price/studios/studios_img_2.jpg','Polygon,<br/>зал Текстурный','1300₽',file_get_contents('text/price/studios/price_studios_text_2.txt')),
					array('img/price/studios/studios_img_3.jpg','Polygon,<br/>зал Циклорама-лофт','1500₽',file_get_contents('text/price/studios/price_studios_text_3.txt')),
					array('img/price/studios/studios_img_4.jpg','SkyPoint на Зверинской,<br/>зал Лекционный','600₽',file_get_contents('text/price/studios/price_studios_text_4.txt')),
					array('img/price/studios/studios_img_5.jpg','SkyPoint на Мойке,<br/>зал Simple','600₽',file_get_contents('text/price/studios/price_studios_text_5.txt')),
					array('img/price/studios/studios_img_6.jpg','Grace Studio,<br/>большой зал','900₽',file_get_contents('text/price/studios/price_studios_text_5.txt')),
					array('img/price/studios/studios_img_7.jpg','Grace Studio,<br/>маленький зал','800₽',file_get_contents('text/price/studios/price_studios_text_5.txt')),
					array('img/price/studios/studios_img_8.jpg','State,<br/>Little State','1200₽',file_get_contents('text/price/studios/price_studios_text_5.txt')));
		//переменные в контакты
		$footer_contacts=array(array('Телефон',89633495080,'tel:89633495080','TEL'),
					array('VK','vk.com/id182463808','http://vk.com/id182463808','VK','img/footer/footer_logo_vk.png'),
					array('Instagram','instagram/mistyph','https://www.instagram.com/mistyph/','IG','img/footer/footer_logo_ig.png'),
					array('Whatsapp','whatsapp/89633495080','https://wa.me/79633495080?text=ФОТОСЪЕМКА','WA','img/footer/footer_logo_wa.png'),
					array('Telegram','telegram/mistyph','tg://resolve?domain=emastyugina','TG','img/footer/footer_logo_tg.png'),
					array('Gmail','gmail.com/emastyugina27','mailto:emastyugina27@gmail.com?subject=ФОТОСЕССИЯ','G+','img/footer/footer_logo_gmail.png'),
					array('Facebook','facebook/mistyph','https://www.facebook.com/profile.php?id=100015713717417','FB','img/footer/footer_logo_fb.png'));

?>
