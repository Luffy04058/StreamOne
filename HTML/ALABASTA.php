<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>One piece</title>
<!-- style.css -->
<link rel="stylesheet" href="Alabasta.css">
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
    <img src="https://wallpapercave.com/wp/wp9419107.jpg" alt="">
    <div class="text">
        <h1>One Piece<br><span>Alabasta</span></h1>
    </div>
    <div class="btn">
        <a href="#video"><button type="button">WATCH NOW</button></a>
    </div>
</section>


<!------------------------------------------------------------------Section boutton--------------------------------------------------------------------------------->

    
<video id="video" controls poster="https://cdna.artstation.com/p/assets/covers/images/001/290/302/large/kimberly-schoenmakers-onepiecealabasta.jpg?1443721941 ">
    <source src=  
    <?php
if (isset($_GET['ep'])) {
    echo 'https://16.mugiwara.xyz/op/saga-2/hd/op-' . $_GET['ep'] . '.mp4'; 
} else {
    echo 'https://16.mugiwara.xyz/op/saga-2/hd/op-62.mp4';
}
?> 
    >
   <p>Votre navigateur ne prend pas en charge les vidéos HTML5.
       Voici <a href="myVideo.mp4">un lien pour télécharger la vidéo</a>.</p>
  </video>
  
  
 <h5>Saga 2: Alabasta(62-135) </h5>
  
  
      <ul class="play-list">
          <div class="scroll-container"> 
              <div class="scroll-page">
                <div class="couleur">

   
<?php 

$i = 62;
echo '<ul>';
while ($i<136) {
    echo '<li><a href="../HTML/ALABASTA.php?ep=' . $i . '" id="ep' . $i . '">Episode ' . $i . '</a></li>';
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