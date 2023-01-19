<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8" />
    <title>Hockey Eersteklas</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />

    <link rel="manifest" href="site.webmanifest" />
    <link rel="apple-touch-icon" href="icon.png" />
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/main.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Faster+One&family=Roboto+Mono&family=Sofia+Sans&display=swap" rel="stylesheet">

    <meta name="theme-color" content="#fafafa" />
  </head>

  <body>
    <div class="wrapper">
      <header>
        <h1>Hockey Eersteklas</h1>
        <p>Fair-play statestieken</p>
      </header>

      <main>
        <p>
          De SPORT-bond ziet toe op een eerlijk verloop van de competitie. Onze
          topsporters dienen een voorbeeld te zijn voor de vele amateurs in de
          sport. Daarom streven we naar eerlijke games; een sportieve omgang met
          elkaar. Daar hoort ook bij dat er weinig overtredingen plaatsvinden
          tijdens een wedstrijd. Op deze website geven we inzicht in het verloop
          van de competitie tot nu toe. U ziet de wedstrijden met de minste
          overtredingen, maar voor bewustwording brengen we ook de wedstrijden
          met de meeste overtredingen in beeld.
        </p>
        <div class="items">
          <div class="item-small">
            <h2>Aantal overtredingen:</h2>
            <p class="num">
              <?php require('data/totaleOvertredingen.txt'); ?>
            </p>
          </div>
          <div class="item-small">
            <h2>Gemiddeld per wedstrijd:</h2>
            <p class="num">
              <?php require('data/gemiddeldeOvertredingen.txt'); ?>
            </p>
          </div>
        </div>
        <div class="items">
          <div class="item-large">
            <h2>Wedstrijden met de meeste overtredingen:</h2>
            <pre><?php require('data/zwartboek.txt'); ?></pre>
          </div>
        </div>
        <div class="items">
          <div class="item-large">
            <h2>
              Wedstrijden met minder dan 2 overtredingen (laatste 21 dagen):
            </h2>
            <pre><?php require('data/eregalerij.txt'); ?></pre>
          </div>
        </div>
      </main>

      <footer>
        <p>
          Deze website is gemaakt in het kader van een praktijkopdracht bij de
          opleiding Software Developer, Curio Breda.
        </p>
        <p>&copy; 2023 | TTB4-SSD1C | Jort Kouwenberg, Koen van Vlimmeren.</p>
      </footer>
    </div>
  </body>
</html>
