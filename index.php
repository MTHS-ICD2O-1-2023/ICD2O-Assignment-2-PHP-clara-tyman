<!DOCTYPE html>
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="The area and perimeter of a Trapezoid" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Clara Tyman" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
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
  <script src="./answer.php"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  </div>
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <span class="mdl-layout-title">The area and perimeter of a trapizoid calculation program</span>
    </div>
  </header>
  <div class="content">
    <div class="row">
      <div class="column">
        <!-- Numeric Textfield -->
        <form action="answer.php" method="POST">
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="base-of-trapezoid-1" />
            <label class="mdl-textfield__label" for="sample4">Base value #1 of Trapezoid</label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
          <!-- Numeric Textfield -->
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text pattern=" -?[0-9]*(\.[0-9]+) name="base-of-trapezoid-2" />
            <label class="mdl-textfield__label" for="sample4">Base value #2 of Trapezoid</label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
          <!-- Numeric Textfield with Floating Label -->
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="height-of-trapezoid" />
            <label class="mdl-textfield__label" for="sample4">Height of Trapezoid</label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
          <!-- Numeric Textfield with Floating Label -->
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="side-of-trapezoid-1" />
            <label class="mdl-textfield__label" for="sample4">Side value #1 of Trapezoid
            </label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
          <!-- Numeric Textfield with Floating Label -->
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="side-of-trapezoid-2" />
            <label class="mdl-textfield__label" for="sample4">Side value #2 of Trapezoid
            </label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
          <div>
            <!-- Button -->
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
              Calculate
            </button>
        </form>
      </div>
    </div>
    <div class="column-2">
      <br />
      <br />
      <img src="./images/Area-of-a-Trapezoid (1).png" alt="Area of a Trapezoid formula" class="area-formula" />
      <br />
      <br />
      <img src="./images/tapezoid Perimeter (1).jpeg" alt="Perimeter of a Trapezoid formula" class="perimeter-formula" />
      <br />
    </div>
  </div>
  </div>
</body>

</html>