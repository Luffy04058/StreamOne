
<!------------------------------------------------------------------Section boutton--------------------------------------------------------------------------------->

<!-- boutton avant apres -->
<h1>
<?php
if (isset($_GET['livre'])) {
    echo 'Scan' .$_GET['livre']; 
} 
?>
</h1>

<h2>
<?php
if (isset($_GET['Page'])) {
    echo 'Page' .$_GET['Page']; 
} 
?>
</h2>


<div class="icon-down">
<i class='bx bxs-down-arrow' style='color:#ffffff'  ></i>

</div>


<!-- SCAN -->

<!-- boutton avant -->


<div class="icon-av">
<a href= 
<?php 
if (isset($_GET['livre'])) {
    if($_GET['livre']==1058){ 
        echo '"../SiteNSI/scan.php?livre=' .strval(intval($_GET['livre'])-14) . '&Page=1"';
     } else {
        echo '"../SiteNSI/scan.php?livre=' .strval(intval($_GET['livre'])+1) . '&Page=1"'; 
   }
}
        ?> 
   



><i class='bx bxs-right-arrow' style='color:#ffffff'  ></i></i> </a>
</div>




<!-- boutton arriere -->
<div class="icon-ar">
<a href= 
<?php

if (isset($_GET['livre'])) {
    if($_GET['livre']==1044){ 
        echo '"../SiteNSI/scan.php?livre=' .strval(intval($_GET['livre'])+14) . '&Page=1"'; 
    }else{
        echo '"../SiteNSI/scan.php?livre=' .strval(intval($_GET['livre'])-1) . '&Page=1"'; 

    }
}
?>
><i class='bx bxs-left-arrow bx-flip-vertical' style='color:#ffffff' ></i> </a>
</div>


<!-- PAGE .................................................................................................................................................-->

<!-----------------------------------------------------boutton av.................................................... -->
<div class="icon2-av">
<a href= 
<?php 
if (isset($_GET['Page'])) {
    if($_GET['Page']==15){ 
        echo '"../SiteNSI/scan.php?livre=' . $_GET['livre'] . '&Page=' .strval(intval($_GET['Page'])-14) . '"'; 
    }else{
        echo '"../SiteNSI/scan.php?livre=' . $_GET['livre'] . '&Page=' .strval(intval($_GET['Page'])+1) . '"';
    }
    }

    
    
?> ><i class='bx bx-caret-right-circle 'id="icon3" style='color:#fa5353'></i> </a>
</div>

<!-- boutton ar  -->

<div class="icon2-ar">

<a href= 
<?php 
if (isset($_GET['Page'])) {
    if($_GET['Page']==1){ 
        echo '"../SiteNSI/scan.php?livre=' . $_GET['livre'] . '&Page=' .strval(intval($_GET['Page'])+14) . '"'; 
    }else{
        echo '"../SiteNSI/scan.php?livre=' . $_GET['livre'] . '&Page=' .strval(intval($_GET['Page'])-1) . '"';
    }
    }
    
?> 
><i class='bx bx-caret-left-circle' id="icon3"style='color:#fa5353'  ></i></a>
</div>

<!------------------------------------------------------------------------------------------------------------------------------------------ -->

<img src=
<?php
if (isset($_GET['livre'])){
    echo 'Scan/OnePiece' . $_GET['livre'] . '/Page' . $_GET['Page'] . '.png'; 
    
}
?> 
>


<!------------------------------------------------ Liste page  ---------------------------------------------------------->

<div class="liste"> 

<?php 
$i = 1;
echo '<ul>';
    while ($i<21) {
        echo '<li><a href="../SiteNSI/scan.php?livre='. $_GET['livre'].'&Page=' . $i . '" id="Page' . $i . '">' . $i . '</a></li>';
        $i ++ ;
}
echo '</ul>';
?> 


</div>

<!-- ----------------liste scan------------------- -->

    <div class="icon2">
        <i class='bx bxs-book' style='color:#ffffff'  ></i>
    </div>
<div class="liste2"> 


<?php 
$i = 1044;
echo '<ul>';
while ($i<1058) {
    echo '<li><a href="../SiteNSI/scan.php?livre=' . $i . '&Page=1' . '"id="livre' . $i . '">' . $i . '</a></li>';
    $i ++ ;
}
echo '</ul>';
?>

</div>

<!-- PAGE .................................................................................................................................................-->

<!---------------------------------------------------------boutton av.................................................... -->

<a href= 
<?php 
if (isset($_GET['Page'])) {
    if($_GET['Page']==15){ 
        echo '"../SiteNSI/scan.php?livre=' . $_GET['livre'] . '&Page=' .strval(intval($_GET['Page'])-14) . '"'; 
    }else{
        echo '"../SiteNSI/scan.php?livre=' . $_GET['livre'] . '&Page=' .strval(intval($_GET['Page'])+1) . '"';
    }
}
?> ><button class="next-av"></button></a>

<!-- boutton ar  -->
<a href= 
<?php 
if (isset($_GET['Page'])) {
    if($_GET['Page']==1){ 
        echo '"../SiteNSI/scan.php?livre=' . $_GET['livre'] . '&Page=' .strval(intval($_GET['Page'])+14) . '"'; 
    }else{
        echo '"../SiteNSI/scan.php?livre=' . $_GET['livre'] . '&Page=' .strval(intval($_GET['Page'])-1) . '"';
    }
}
?> ><button class="next-ar"></button></a>