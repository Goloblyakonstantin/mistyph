//скрипт для прокрутки разделов меню без лого

function function_header_menu_popup()
{
	var elem_header_menu_header=document.getElementById('header_nav_menu-header'); //лого
	var elem_header_menu_popup=document.getElementById('header_nav_menu-nav'); //разделы меню
	var elem_header_menu_logo=document.getElementById('header_nav_menu-img'); //лого
	var header_height=elem_header_menu_header.offsetHeight;

	if (window.matchMedia("(min-width: 800px)").matches)
	{
		if(window.pageYOffset>elem_header_menu_logo.offsetHeight) //если прокрутка дальше лого и мы не на девайсах
		{
			elem_header_menu_header.style.position='fixed';
			elem_header_menu_header.style.zIndex=10;
			elem_header_menu_header.style.top=0-elem_header_menu_logo.offsetHeight+'px';
			document.body.style.paddingTop=header_height+'px';
		}
		else//если лого снова видно
		{
		elem_header_menu_header.style.position='relative';
		document.body.style.paddingTop=0+'px';
		elem_header_menu_header.style.top=0;
		elem_header_menu_header.style.zIndex=0;
		}
	}
	else //обнуляем значения если сменили разрешение
	{
		elem_header_menu_header.style.position='fixed';
		document.body.style.paddingTop=0+'px';
		elem_header_menu_header.style.top=0;
		elem_header_menu_header.style.zIndex=10;
	}
}
