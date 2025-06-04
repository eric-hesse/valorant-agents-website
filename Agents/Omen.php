<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Omen</title>
    <link rel="stylesheet" href="../styles/Agent.css" />
    <link rel="stylesheet" href="../styles/suche.css" />
    <link rel="icon" href="../Bilder/Omen_Agent_Valorant.webp" />
    <script src="../scripts/sript.js"></script>
  </head>

  <body>
    <nav style="position: relative;">
  <a href="../index.php">Startseite</a>
  <a href="../Agentenuebersicht.php">Agenten</a>
  <a href="../Info.php">Info</a>
  <a href="../SQLiteStudio-Datenbank.php">Datenbank</a>

  <div class="search-container">
    <input type="text" id="agentSearch" placeholder="Suchen..." autocomplete="off" />
    <button type="button" onclick="search()">Suchen</button>
  </div>
</nav>

<div id="suggestions"></div>

    <h1>Omen</h1>

    <section>
      <img
        src="../Bilder/Omen_Agent_Valorant.webp"
        alt="Bild nicht vorhanden"
      />
      <p>
        Omen gehört der Taktiker-Klasse an und wurde dem Spiel in
        <b>Episode 1: Zündung</b> hinzugefügt.
      </p>
    </section>

    <section>
      <h2>Fähigkeiten</h2>

      <div class="Reihe">
        <div class="Spalte">
          <img
            src="../Bilder/Fähigkeiten/Paranoia_Omen.webp"
            alt="Bild nicht vorhanden"
          />
        </div>
        <div class="Spalte"><b>Paranoia</b></div>
        <div class="Spalte">
          Feuere SOFORT ein Schattengeschoss nach vorn, das die Sichtweite aller
          Spieler, die es berührt, kurzzeitig verringert. Das Geschoss kann
          Mauern durchdringen.
        </div>
      </div>

      <br />

      <div class="Reihe">
        <div class="Spalte">
          <img
            src="../Bilder/Fähigkeiten/Vernebelte_Schritte_Omen.webp"
            alt="Bild nicht vorhanden"
          />
        </div>
        <div class="Spalte"><b>Vernebelte Schritte</b></div>
        <div class="Spalte">
          RÜSTE eine Schattenschrittfähigkeit aus und sieh dir ihre Reichweite
          an. FEUERE, um kurz zu kanalisieren und dich dann an die markierte
          Position zu teleportieren.
        </div>
      </div>

      <br />

      <div class="Reihe">
        <div class="Spalte">
          <img
            src="../Bilder/Fähigkeiten/Finsterer_Schleier_Omen.webp"
            alt="Bild nicht vorhanden"
          />
        </div>
        <div class="Spalte"><b>Finsterer Schleier</b></div>
        <div class="Spalte">
          RÜSTE eine Schattenkugel aus und sieh dir ihre Reichweite an. FEUERE,
          um die Schattenkugel zum markierten Ort zu schleudern, wo sie eine
          langanhaltende Schattensphäre erschafft, die die Sicht blockiert.
          HALTE DEN ALTERNATIVEN FEUERMODUS beim Zielen gedrückt, um die
          Markierung von dir zu entfernen. HALTE die Fähigkeitstaste beim Zielen
          gedrückt, um die Markierung zu dir zu bewegen.
        </div>
      </div>
    </section>

    <section>
      <h2>Ultimative Fähigkeit</h2>
      <div class="Reihe">
        <div class="Spalte">
          <img
            src="../Bilder/Fähigkeiten/Aus_den_Schatten_Omen.webp"
            alt="Bild nicht vorhanden"
          />
        </div>
        <div class="Spalte"><b>Aus den Schatten</b></div>
        <div class="Spalte">
          RÜSTE eine taktische Karte aus. FEUERE, um deine Teleportation an den
          Zielort zu beginnen. Während der Teleportation erscheint Omen als
          Schatten, der von Gegnern zerstört werden kann, um die Teleportation
          abzubrechen.
        </div>
      </div>
    </section>
  </body>

  <footer>
    Texte und Bilder aus der
    <a
      alt="Link nicht verfügbar"
      title="Animierter Header"
      class="url"
      href="https://valorant.fandom.com/de/wiki/Omen"
      target="_blank"
      >Valorant-Fangemeinde
    </a>
  </footer>
</html>
