<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--Importing external JS libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500' rel='stylesheet' type='text/css'>
    <link rel="icon" href="favicon.ico">

    <!-- This CSS contains most of classes that are used by this website. -->
    <link rel="stylesheet" type="text/css" href="./CSS/main.css">

    <!-- Internal libraries -->
    <script src="./JS/slideshow.js" ></script>
    <script src="./JS/legacy.js" > </script>
  </head>

  <body onload="movieiconhide();preload();">
    <!-- JavaScript Section -->
    <script src="Scripts/lib/three.js/build/three.min.js"></script>
    <script src="Scripts/lib/three.js/build/TrackballControls.js"></script>
    <script src="Scripts/lib/three.js/examples/js/loaders/OBJLoader.js"></script>
    <script src="Scripts/lib/three.js/examples/js/loaders/MTLLoader.js"></script>
    <script src="Scripts/lib/dat-gui/build/dat.gui.min.js"></script>
    <script src="Scripts/lib/stats.js/build/stats.min.js"></script>		

    <!-- Game Scripts -->
    <script src="Scripts/objects/model.js"></script>
    <script src="Scripts/objects/modelManager.js"></script>
    <script src="Scripts/objects/snapPoint.js"></script>
    <script src="Scripts/core/scene.js"></script>	

    <!-- menu container -->
    <div class="structure">
      <ul class="navbar">
        <li id="home" class="menu" >
          <a href="./customize-your-lift-and-lock-arm.php">
            <p align="center">Customize an Arm</p>
          </a>
        </li>
        <li id="home" class="menu" >
          <a href="./build-your-lift-and-lock-system.php">
            <p align="center">Build a System</p>
          </a>
        </li>
      </ul>
    </div>
  </body>
</html>