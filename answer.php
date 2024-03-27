<!DOCTYPE html>
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="The area of a Trapezoid" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Clara Tyman" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style2.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_purple-pink.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link sizes="32x32" href="favicon-32x32.png" />
  <link sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>The area and perimeter of a trapizoid calculation program</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script src="./index.php"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">The area and perimeter of a trapizoid calculation program</span>
      </div>
    </header>
    <div class="page-content-php">
      <div name="user-info">
        <?php
        $baseOfTrapezoid1 = $_POST["base-of-trapezoid-1"];
        $baseOfTrapezoid2 = $_POST["base-of-trapezoid-2"];
        $heightOfTrapezoid = $_POST["height-of-trapezoid"];
        $sideOfTrapezoid1 = $_POST["side-of-trapezoid-1"];
        $sideOfTrapezoid2 = $_POST["side-of-trapezoid-2"];

        // process
        $area = (($baseOfTrapezoid1 + $baseOfTrapezoid2) * $heightOfTrapezoid) / 2;
        $perimeter = $baseOfTrapezoid1 + $baseOfTrapezoid2 + $sideOfTrapezoid1 + $sideOfTrapezoid2;

        // output
        echo "The perimeter of the trapezoid is = " . $perimeter . " cm.";
        echo "<br />";
        echo "<br />";
        echo "The area of the trapezoid is " . $area . " cm².";
        ?>
      </div>
    </div>
    <div class="column-2">
      <br />
      <br />
      <img src="./images/Area-of-a-Trapezoid.png" alt="Area of a Trapezoid formula" class="area-formula" />
      <br />
      <br />
      <img src="./images/tapezoid Perimeter.jpeg" alt="Perimeter of a Trapezoid formula" class="perimeter-formula" />
      <br />
    </div>
    </main>
  </div>
</body>

</html>