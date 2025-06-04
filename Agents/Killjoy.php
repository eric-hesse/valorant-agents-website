<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Killjoy</title>
    <link rel="stylesheet" href="../styles/Agent.css" />
    <link rel="stylesheet" href="../styles/suche.css" />
    <link rel="icon" href="../Bilder/Killjoy_Agent_Valorant.webp" />
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

    <h1>Killjoy</h1>

    <section>
      <img
        src="../Bilder/Killjoy_Agent_Valorant.webp"
        alt="Bild nicht vorhanden"
      />
      <p>
        Killjoy gehört der Wächter-Klasse an und wurde dem Spiel in
        <b>Episode 1: Zündung</b> hinzugefügt.
      </p>
    </section>

    <section>
      <h2>Fähigkeiten</h2>

      <div class="Reihe">
        <div class="Spalte">
          <img
            src="../Bilder/Fähigkeiten/Alarmbot_Killjoy.webp"
            alt="Bild nicht vorhanden"
          />
        </div>
        <div class="Spalte"><b>Alarmbot</b></div>
        <div class="Spalte">
          RÜSTE einen verdeckten Alarmbot AUS. FEUERE, um einen Roboter
          aufzustellen, der Gegner jagt, die in Reichweite kommen. Wenn er sein
          Ziel erreicht, explodiert der Roboter und belegt den Gegner mit
          „Verwundbar“. HALTE AUSRÜSTEN, um den aufgestellten Roboter
          zurückzurufen.
        </div>
      </div>

      <br />

      <div class="Reihe">
        <div class="Spalte">
          <img
            src="../Bilder/Fähigkeiten/Nanoschwarm_Killjoy.webp"
            alt="Bild nicht vorhanden"
          />
        </div>
        <div class="Spalte"><b>Nanoschwarm</b></div>
        <div class="Spalte">
          RÜSTE eine Nanoschwarm-Granate AUS. FEUERE, um die Granate zu werfen.
          Nach dem Landen tarnt sich der Nanoschwarm. AKTIVIERE den Nanoschwarm,
          um einen Schaden verursachenden Schwarm Nanoroboter loszuschicken.
        </div>
      </div>

      <br />

      <div class="Reihe">
        <div class="Spalte">
          <img
            src="../Bilder/Fähigkeiten/Geschützturm_Killjoy.webp"
            alt="Bild nicht vorhanden"
          />
        </div>
        <div class="Spalte"><b>Geschützturm</b></div>
        <div class="Spalte">
          RÜSTE eine Nanoschwarm-Granate AUS. FEUERE, um die Granate zu werfen.
          Nach dem Landen tarnt sich der Nanoschwarm. AKTIVIERE den Nanoschwarm,
          um einen Schaden verursachenden Schwarm Nanoroboter loszuschicken.
        </div>
      </div>
    </section>

    <section>
      <h2>Ultimative Fähigkeit</h2>
      <div class="Reihe">
        <div class="Spalte">
          <img
            src="../Bilder/Fähigkeiten/Abriegelung_Killjoy.webp"
            alt="Bild nicht vorhanden"
          />
        </div>
        <div class="Spalte"><b>Abriegelung</b></div>
        <div class="Spalte">
          RÜSTE das Abriegelungsfeld aus. FEUERE, um das Feld aufzustellen. Nach
          einer langen Ladephase werden alle Spieler in Reichweite gehindert.
          Das Feld kann zerstört werden.
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
      href="https://valorant.fandom.com/de/wiki/Killjoy"
      target="_blank"
      >Valorant-Fangemeinde
    </a>
  </footer>
</html>
