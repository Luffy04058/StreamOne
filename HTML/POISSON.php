<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>One piece</title>
<!-- style.css -->
<link rel="stylesheet" href="POISSON.css">
<link rel="stylesheet" href="arc.css">
<!-- pack-icon -->
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

<!-- responsive -->
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<!-- Header -->
  <header>
    
    <!-- Nav-back -->
    <div class="nav-back"></div>
    <!-- Nav -->
    <div class="nav container">

        <!-- Logo -->
    <a href="../../Streamone" class="logo">STREAM<span>one</span></a>

     <!-- Nav Icon -->
     <div class="nav-icons">
        <i class='bx bx-bell bx-tada' id="bell-icon"><span></span></i>
        <i class='bx bxs-download ' style='color:#fffbfb' ></i>
        <i class='bx bxs-user' id="connect_button"></i>
        <div class="menu-icon">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </div>

        
    <!-- Menu -->
    
    <div class="menu">
       <img src="https://i.pinimg.com/736x/8d/8b/5a/8d8b5ac326b638c35f38719dd061fc4f.jpg" alt=""> 
        <div class="navbar">
            <li><a href="../../Streamone">Home</a></li>
            <li><a href="#Chapter">Chapter</a></li>
            <li><a href="#Comming">Coming</a></li>
            <li><a href="#About">About</a></li>
            <li><a href="../account.php">Sign in</a></li>
            
            </div>
        </div>

    </div>
   
    
    <!-- Notification -->


</header>
<!-- section background  -->
<div class="section1-back"></div>

<!-- Home section star  -->
<section class="home container" id="home">
    <img src="https://2img.net/image.noelshack.com/fichiers/2015/08/1424283884-550371-ryugu-palace2.png" alt="">
    <div class="text">
        <h1>One Piece<br><span>ILE DES HOMMES<br>POISSONS</span></h1>
    </div>
    <div class="btn">
        <a href="#video"><button type="button">WATCH NOW</button></a>
    </div>
</section>


<!------------------------------------------------------------------Section boutton--------------------------------------------------------------------------------->

    
<video id="video" controls poster="https://i.pinimg.com/originals/f4/78/08/f478081535639bc64c0c79528e209eff.jpg ">
    <source src=  
    <?php
    if (isset($_GET['ep'])) {
    echo 'https://17.mugiwara.xyz/op/saga-7/hd/' . $_GET['ep'] . '.mp4'; 
} else {
    echo 'https://17.mugiwara.xyz/op/saga-/hd/517.mp4';
}
?>
> 
   <p>Votre navigateur ne prend pas en charge les vidéos HTML5.
       Voici <a href="myVideo.mp4">un lien pour télécharger la vidéo</a>.</p>
  </video>
  
  
 <h5>Saga 4: Iles des hommes poissons (517-574) </h5>
  
  
      <ul class="play-list">
          <div class="scroll-container"> 
              <div class="scroll-page">
                <div class="couleur">

   
<?php 

$i = 517;
echo '<ul>';
while ($i<575) {
    echo '<li><a href="../HTML/POISSON.php?ep=' . $i . '" id="ep' . $i . '">Episode ' . $i . '</a></li>';
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