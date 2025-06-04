<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Breach</title>
    <link rel="stylesheet" href="../styles/Agent.css" />
    <link rel="stylesheet" href="../styles/suche.css" />
    <link rel="icon" href="../Bilder/Breach_Agent_Valorant.webp" />
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

    <h1>Breach</h1>

    <section>
      <img
        src="../Bilder/Breach_Agent_Valorant.webp"
        alt="Bild nicht vorhanden"
      />
      <p>
        Breach gehört der Aufdecker-Klasse an und wurde dem Spiel in
        <b>Episode 1: Zündung</b> hinzugefügt.
      </p>
    </section>

    <section>
      <h2>Fähigkeiten</h2>

      <div class="Reihe">
        <div class="Spalte">
          <img
            src="../Bilder/Fähigkeiten/Blitzladung_Breach.webp"
            alt="Bild nicht vorhanden"
          />
        </div>
        <div class="Spalte"><b>Blitzladung</b></div>
        <div class="Spalte">
          RÜSTE eine Blendladung aus. FEUERE die Ladung, um eine schnelle
          Explosion durch eine Wand zu schicken. Die Ladung detoniert und
          blendet alle Spieler, die sie sehen.
        </div>
      </div>

      <br />

      <div class="Reihe">
        <div class="Spalte">
          <img
            src="../Bilder/Fähigkeiten/Nachbeben_Breach.webp"
            alt="Bild nicht vorhanden"
          />
        </div>
        <div class="Spalte"><b>Nachbeben</b></div>
        <div class="Spalte">
          RÜSTE eine Fusionsladung aus. FEUERE, um die Ladung in Form einer
          langsamen Explosion durch eine Wand zu schicken. Diese fügt allen
          getroffenen Spielern schweren Schaden zu.
        </div>
      </div>

      <br />

      <div class="Reihe">
        <div class="Spalte">
          <img
            src="../Bilder/Fähigkeiten/Verwerfungslinie_Breach.webp"
            alt="Bild nicht vorhanden"
          />
        </div>
        <div class="Spalte"><b>Verwerfungslinie</b></div>
        <div class="Spalte">
          RÜSTE eine seismische Druckwelle aus. HALTE FEUERN, um die Distanz zu
          erhöhen. LASS LOS, um das Beben zu entfesseln, was alle Spieler im
          Bereich und in einer Linie dorthin kampfunfähig macht.
        </div>
      </div>
    </section>

    <section>
      <h2>Ultimative Fähigkeit</h2>
      <div class="Reihe">
        <div class="Spalte">
          <img
            src="../Bilder/Fähigkeiten/Donnergrollen_Breach.webp"
            alt="Bild nicht vorhanden"
          />
        </div>
        <div class="Spalte"><b>Donnergrollen</b></div>
        <div class="Spalte">
          RÜSTE eine seismische Ladung aus. FEUERE, um ein Beben in Form eines
          großen Kegels durch sämtliches Terrain zu schicken. Das Beben macht
          alle getroffenen Spieler kampfunfähig und wirft sie in die Luft.
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
      href="https://valorant.fandom.com/de/wiki/Breach"
      target="_blank"
      >Valorant-Fangemeinde
    </a>
  </footer>
</html>
