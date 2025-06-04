<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sage</title>
    <link rel="stylesheet" href="../styles/Agent.css" />
    <link rel="stylesheet" href="../styles/suche.css" />
    <link rel="icon" href="../Bilder/Sage_Agent_Valorant.webp" />
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

    <h1>Sage</h1>

    <section>
      <img
        src="../Bilder/Sage_Agent_Valorant.webp"
        alt="Bild nicht vorhanden"
      />
      <p>
        Sage gehört der Wächter-Klasse an und wurde dem Spiel in
        <b>Episode 1: Zündung</b> hinzugefügt.
      </p>
    </section>

    <section>
      <h2>Fähigkeiten</h2>

      <div class="Reihe">
        <div class="Spalte">
          <img
            src="../Bilder/Fähigkeiten/Verlangsamungssphäre_Sage.webp"
            alt="Bild nicht vorhanden"
          />
        </div>
        <div class="Spalte"><b>Verlangsamungssphäre</b></div>
        <div class="Spalte">
          RÜSTE eine Verlangsamungssphäre aus. FEUERE, um eine
          Verlangsamungssphäre nach vorn zu schleudern. Sie explodiert beim
          Aufprall und hinterlässt ein temporäres Feld, das Spieler verlangsamt.
        </div>
      </div>

      <br />

      <div class="Reihe">
        <div class="Spalte">
          <img
            src="../Bilder/Fähigkeiten/Barriere_Sage.webp"
            alt="Bild nicht vorhanden"
          />
        </div>
        <div class="Spalte"><b>Barriere</b></div>
        <div class="Spalte">
          RÜSTE eine Barriere aus. FEUERE, um eine feste Wand zu platzieren.
          FEUERE IM ALTERNATIVEN MODUS, um die Wand zu drehen.
        </div>
      </div>

      <br />

      <div class="Reihe">
        <div class="Spalte">
          <img
            src="../Bilder/Fähigkeiten/Heilsphäre_Sage.webp"
            alt="Bild nicht vorhanden"
          />
        </div>
        <div class="Spalte"><b>Heilsphäre</b></div>
        <div class="Spalte">
          RÜSTE eine Heilsphäre aus. FEUERE, während sich dein Fadenkreuz über
          einem verwundeten Verbündeten befindet, um ihm einen Heileffekt über
          Zeit zu verleihen. FEUERE IM ALTERNATIVEN MODUS, wenn Sage verwundet
          ist, um dir selbst einen Heileffekt über Zeit zu verleihen.
        </div>
      </div>
    </section>

    <section>
      <h2>Ultimative Fähigkeit</h2>
      <div class="Reihe">
        <div class="Spalte">
          <img
            src="../Bilder/Fähigkeiten/Wiederbelebung_Sage.webp"
            alt="Bild nicht vorhanden"
          />
        </div>
        <div class="Spalte"><b>Wiederbelebung</b></div>
        <div class="Spalte">
          RÜSTE deine Wiederbelebungsfähigkeit aus. FEUERE, während sich dein
          Fadenkreuz über einem toten Verbündeten befindet, um ihn
          wiederzubeleben. Nach einer kurzen Kanalisierung wird der Verbündete
          mit voller Gesundheit wiederbelebt.
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
      href="https://valorant.fandom.com/de/wiki/Sage"
      target="_blank"
      >Valorant-Fangemeinde
    </a>
  </footer>
</html>
