<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chamber</title>
    <link rel="stylesheet" href="../styles/Agent.css" />
    <link rel="stylesheet" href="../styles/suche.css" />
    <link rel="icon" href="../Bilder/Chamber_Agent_Valorant.webp" />
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

    <h1>Chamber</h1>

    <section>
      <img
        src="../Bilder/Chamber_Agent_Valorant.webp"
        alt="Bild nicht vorhanden"
      />
      <p>
        Chamber gehört der Wächter-Klasse an und wurde dem Spiel in
        <b>Episode 3: Reflexion</b> hinzugefügt.
      </p>
    </section>

    <section>
      <h2>Fähigkeiten</h2>

      <div class="Reihe">
        <div class="Spalte">
          <img
            src="../Bilder/Fähigkeiten/Kopfjäger_Chamber.webp"
            alt="Bild nicht vorhanden"
          />
        </div>
        <div class="Spalte"><b>Kopfjäger</b></div>
        <div class="Spalte">
          AKTIVIEREN, um eine schwere Pistole anzulegen. ALT. FEUERMODUS mit
          angelegter Pistole, um über Visier zu zielen.
        </div>
      </div>

      <br />

      <div class="Reihe">
        <div class="Spalte">
          <img
            src="../Bilder/Fähigkeiten/Markenzeichen_Chamber.webp"
            alt="Bild nicht vorhanden"
          />
        </div>
        <div class="Spalte"><b>Markenzeichen</b></div>
        <div class="Spalte">
          PLATZIERE eine Falle, die nach Gegnern scannt. Wenn ein sichtbarer
          Gegner in ihre Reichweite kommt, beginnt die Falle herunterzuzählen
          und destabilisiert dann das Terrain in direkter Umgebung, wodurch ein
          temporäres Feld erzeugt wird, das Spieler in ihm verlangsamt.
        </div>
      </div>

      <br />

      <div class="Reihe">
        <div class="Spalte">
          <img
            src="../Bilder/Fähigkeiten/Rendezvous_Chamber.webp"
            alt="Bild nicht vorhanden"
          />
        </div>
        <div class="Spalte"><b>Rendezvou</b></div>
        <div class="Spalte">
          PLATZIERE eien Teleporter. Während du dich auf dem Boden und in der
          Reichweite des Teleporters befindest, kannst du REAKTIVIEREN, um dich
          schnell zum Teleporter zu teleportieren. Du kannst den Teleporter
          aufheben, um ihn ERNEUT EINZUSETZEN.
        </div>
      </div>
    </section>

    <section>
      <h2>Ultimative Fähigkeit</h2>
      <div class="Reihe">
        <div class="Spalte">
          <img
            src="../Bilder/Fähigkeiten/Glanzleistung_Chamber.webp"
            alt="Bild nicht vorhanden"
          />
        </div>
        <div class="Spalte"><b>Glanzleistung</b></div>
        <div class="Spalte">
          AKTIVIEREN, um ein mächtiges, individuelles Präzisionsgewehr
          herbeizurufen, das Gegner bei einem direkten Treffer sofort tötet.
          Wenn du einen Gegner tötest, wird ein temporäres Feld erzeugt, das
          Spieler verlangsamt.
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
      href="https://valorant.fandom.com/de/wiki/Chamber"
      target="_blank"
      >Valorant-Fangemeinde
    </a>
  </footer>
</html>
