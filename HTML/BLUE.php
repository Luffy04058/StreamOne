<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <title>One piece</title>
    <!-- style.css -->
   
   
    <link rel="stylesheet" href="../css/Index.css" />
    <link rel="stylesheet" href="../css/navbar.css">
		<link rel="stylesheet" href="../css/menu.css">
	
    <!-- pack-icon -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <!-- Menu -->
		
		<?php 
			include "../interface/menu.php";
		?>
		<!-- Nav bar 4 parties sites  -->
		<?php 
			include "../interface/navbar.php";
		?>
    </header>
	<body>
		


    <!------------------------------------------------------------------Section boutton--------------------------------------------------------------------------------->
    <video id="video" controls poster="https://image.jeuxvideo.com/medias-crop-1200-675/162948/1629476147-7549-card.jpeg ">
      <source src=  
              <?php
      if (isset($_GET['ep'])) {
      if ( $_GET['ep']<=9) {
          echo 'https://16.mugiwara.xyz/op/saga-1/hd/op-0' . $_GET['ep'] . '.mp4';
          } else{
          echo 'https://16.mugiwara.xyz/op/saga-1/hd/op-' . $_GET['ep'] . '.mp4'; 
          }
          } else {
          echo 'https://16.mugiwara.xyz/op/saga-1/hd/op-01.mp4';
          }
          ?> 
        >
        <p>Votre navigateur ne prend pas en charge les vidéos HTML5.
          Voici 
          <a href="myVideo.mp4">un lien pour télécharger la vidéo
          </a>.
        </p>
        </video>
      <h5>Saga 1: East blue (01-61) 
      </h5>
      <ul class="play-list">
        <div class="scroll-container"> 
          <div class="scroll-page">
            <div class="couleur"> 
              <?php 
$i = 1;
echo '<ul>';
while ($i<62) {
echo '<li><a href="../HTML/BLUE.php?ep=' . $i . '" id="ep' . $i . '">Episode ' . $i . '</a></li>';
$i = $i + 1;
}
echo '</ul>';
?>
            </div>
          </div>
        </div>
        </div>
      </ul>
    <!-- javascript.js -->
<script src="main.js" defer></script>  
 
  </body>
</html>