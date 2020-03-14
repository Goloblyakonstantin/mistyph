<footer>
  <img src="img/header/logo.png" alt="">
  <nav>
    <?php
  		for($i=1;$i<count($footer_contacts);$i++)
  		{
  			echo'<a href="'.$footer_contacts[$i][2].'"><img src="'.$footer_contacts[$i][4].'"></a>';
  		}
  	?>
  </nav>
</footer>
