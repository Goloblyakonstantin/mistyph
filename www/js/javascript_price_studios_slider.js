//слайдер студий для цен
	var array_price_slides_index=0;
	var array_price_slider_polosa=document.getElementById('main_section_2-slider_polosa'); //полоса слайдера
	var array_price_slides=document.getElementsByClassName('main_section_2-div_0-slider_polosa-div_0'); //элементы в слайдере
	var price_studios_slider_start_interval=0;
	var price_studios_slider_start_interval_auto=0;
	console.log('Привет! этот сайт сделал Голобля Константин :)');
if(array_price_slider_polosa!=null) //если слайдер существует - стартуем
{
	price_studios_slider_start();
	var price_studios_slider_start_interval=setInterval(price_studios_slider_start,500);
	var price_studios_slider_start_interval_auto=setTimeout(price_studios_slider_scroll_auto,5000);
}
//старт
function price_studios_slider_start()
{
	array_price_slides_length=0;
	for(let i=0;i<array_price_slides.length;i++)
		array_price_slides_length+=array_price_slides[i].offsetWidth; //длинна слайдера
	array_price_slider_polosa.style.width=array_price_slides_length+1+"px";
}
//прокрутка
function price_studios_slider_scroll(scroll_id)
{
	clearTimeout(price_studios_slider_start_interval_auto);
	price_studios_slider_start_interval_auto=setTimeout(price_studios_slider_scroll_auto,10000);
	array_price_slides_index+=scroll_id;;
	if(array_price_slides_index>=array_price_slides.length)
		array_price_slides_index=0;
	else if(array_price_slides_index<0)
		array_price_slides_index=array_price_slides.length-1;
	array_price_slides_index_length=0;
	for(let i=0;i<array_price_slides_index;i++) //длинна пройденного сдвига
		array_price_slides_index_length+=array_price_slides[array_price_slides_index].offsetWidth
	array_price_slider_polosa.style.left=-array_price_slides_index_length+"px";
}
//авто прокрутка
function price_studios_slider_scroll_auto()
{
	array_price_slides_index++;
	clearTimeout(price_studios_slider_start_interval_auto);
	price_studios_slider_start_interval_auto=setTimeout(price_studios_slider_scroll_auto,5000);
	if(array_price_slides_index>=array_price_slides.length)
		array_price_slides_index=0;
	else if(array_price_slides_index<0)
		array_price_slides_index=array_price_slides.length-1;
	array_price_slides_index_length=0;
	for(let i=0;i<array_price_slides_index;i++) //длинна пройденного сдвига
		array_price_slides_index_length+=array_price_slides[array_price_slides_index].offsetWidth
	array_price_slider_polosa.style.left=-array_price_slides_index_length+"px";
}
