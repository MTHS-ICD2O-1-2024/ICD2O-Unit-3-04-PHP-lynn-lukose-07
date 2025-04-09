<!DOCTYPE html>
<!-- ICS2O-Unit3-02-HTML-PHP -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Fahrenheit to Celsius, PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Lynn Lukose" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link
    rel="stylesheet"
    href="https://code.getmdl.io/1.3.0/material.pink-deep_purple.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link
    rel="apple-touch-icon"
    sizes="180x180"
    href="./apple-touch-icon.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="32x32"
    href="./favicon-32x32.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Fahrenheit to Celsius, PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Fahrenheit to Celsius, PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/pyramid.png" alt="Image of pyramid with labeled sides" width="250" />
      </div>
      <br />
      <div class="page-content">
        Formula: (°F − 32) × 5/9 = °C
        <br />
        <br />
        <br />
        Please enter the temperature in Fahrenheit.
      </div>
      <div class="page-content-php">
        <form action="answer.php" method="GET">
          Fahrenheit:
          <div class="mdl-textfield mdl-js-textfield">
            <input
              class="mdl-textfield__input"
              type=" number"
              step="any"
              pattern="-?[0-9]*(\.[0-9]+)?"
              name="fahrenheit">
            <label class="mdl-textfield__label" for="fahrenheit"></label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
        °F
        <br />
        <!-- Accent-colored raised button with ripple -->
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
          type="submit">
          Convert
        </button>
        </form>
      </div>
    </main>
  </div>
</body>

</html>
