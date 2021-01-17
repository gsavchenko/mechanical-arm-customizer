<?php
include './Templates/PHP/header.php'
?>

<div class="container">
 <h1><div id="liftandlocktitle" style="position:absolute; top:100px; left:50%; margin-left:-490px; overflow:hidden; text-align:left; font-size:100px; font-family:'Roboto'; font-weight:300;">Videos</div></h1>

  <div class="tile" style="top: 250px; position:absolute;">
    <?php
      $items = array("Lift and Lock Inverted Head Post to Standard Bone"
                , "Lift and Lock M2 Lift Shaft to M2 Riser Assembly"
              /*,2 ,3 ,4 ,5 ,6*/);
      foreach ($items as $value) {
    ?>
        <div onclick="showVideo('<?php echo $value;?>')" class="tileitem">
          <img class="thumbnail" src="./images/thumbnails/<?php echo $value;?>.jpg">
          <?php echo $value; ?>
        </div>
    <?php
      }
    ?>

  </div>
</div>
<div onclick="backdrop(this)" id="backdrop"></div>
<div class="videobox" id="m2demovideo">
  <video id = "player" style="height:100%; width:100%" class = "videodemo" controls>
    <source src="./videos/Lift and Lock M2 Lift Shaft to M2 Riser Assembly.mp4" type="video/mp4">
  </video>
  <!-- <iframe class="videodemo" id="player" style="height:100%; width:100%" frameborder="0" allowfullscreen></iframe> -->
  <img onclick="backdrop(this);" src="what's new page/exit-icon.jpg" style="position:absolute; top:9px; right:9px; height:25px; cursor:pointer;" />
</div>

<div id="specificationsscroll" class="footer" style="top:800px;">Ideas for Independent Living 2014</div>
</body>
</html>
