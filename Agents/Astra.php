<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Astra</title>
    <link rel="stylesheet" href="../styles/Agent.css" />
    <link rel="stylesheet" href="../styles/suche.css" />
    <link rel="icon" href="../Bilder/Astra_Agent_Valorant.webp" />
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

    <h1>Astra</h1>

    <section>
      <img
        src="../Bilder/Astra_Agent_Valorant.webp"
        alt="Bild nicht vorhanden"
      />
      <p>
        Astra gehört der Taktiker-Klasse an und wurde dem Spiel in
        <b>Episode 2: Formation</b> hinzugefügt.
      </p>
    </section>

    <section>
      <h2>Fähigkeiten</h2>

      <div class="Reihe">
        <div class="Spalte">
          <img
            src="../Bilder/Fähigkeiten/Gravitationsbrunnen_Astra.webp"
            alt="Bild nicht vorhanden"
          />
        </div>
        <div class="Spalte"><b>Gravitationsbrunnen</b></div>
        <div class="Spalte">
          Platziere Sterne in Astralform (X) AKTIVIERE einen Stern, um einen
          Gravitationsbrunnen auszulösen. Spieler in der Umgebung werden ins
          Zentrum gezogen und durch die Explosion „verletzlich“.
        </div>
      </div>

      <br />

      <div class="Reihe">
        <div class="Spalte">
          <img
            src="../Bilder/Fähigkeiten/Nova-Impuls_Astra.webp"
            alt="Bild nicht vorhanden"
          />
        </div>
        <div class="Spalte"><b>Nova-Impuls</b></div>
        <div class="Spalte">
          Platziere Sterne in Astralform (X) AKTIVIERE einen Stern, um einen
          Nova-Impuls auszusenden. Der Impuls lädt kurz auf und betäubt dann
          alle Gegner im Wirkungsbereich.
        </div>
      </div>

      <br />

      <div class="Reihe">
        <div class="Spalte">
          <img
            src="../Bilder/Fähigkeiten/Sternnebel_Astra.webp"
            alt="Bild nicht vorhanden"
          />
        </div>
        <div class="Spalte"><b>Sternnebel</b></div>
        <div class="Spalte">
          Platziere Sterne in Astralform (X) AKTIVIERE einen Stern, um ihn in
          einen Sternnebel zu verwandeln (Rauch). Nutze (F), um einen Stern zu
          zerstreuen und ihn nach kurzer Abklingzeit an einem neuen Ort zu
          platzieren. Zerstreuen verursacht dort, wo der Stern war, einen
          kurzlebigen falschen Sternnebel.
        </div>
      </div>
    </section>

    <section>
      <h2>Ultimative Fähigkeit</h2>
      <div class="Reihe">
        <div class="Spalte">
          <img
            src="../Bilder/Fähigkeiten/Kosmische_Spaltung_Astra.webp"
            alt="Bild nicht vorhanden"
          />
        </div>
        <div class="Spalte"><b>Kosmische Spaltung</b></div>
        <div class="Spalte">
          Wenn ihre Kosmische Spaltung aufgeladen ist, kannst du in der
          Astralform mit ALTERNATIVFEUER zielen, dann mit PRIMÄRFEUER einen
          zweiten Ort auswählen. Eine unendliche Kosmische Spaltung verbindet
          die ausgewählten Punkte. Kosmische Spaltung blockt Kugeln und lässt
          Geräusche dumpfer werden.
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
      href="https://valorant.fandom.com/de/wiki/Astra"
      target="_blank"
      >Valorant-Fangemeinde
    </a>
  </footer>
</html>
