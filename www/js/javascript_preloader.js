//преоадер
    function go_preload()
    {
      var preloader=document.getElementById('preloader');
      if (!preloader.classList.contains('done'))
      {
          preloader.classList.add('done')
      }
    }
