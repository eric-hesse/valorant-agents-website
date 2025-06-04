<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Skye</title>
    <link rel="stylesheet" href="../styles/Agent.css" />
    <link rel="stylesheet" href="../styles/suche.css" />
    <link rel="icon" href="../Bilder/Skye_Agent_Valorant.webp" />
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

    <h1>Skye</h1>

    <section>
      <img
        src="../Bilder/Skye_Agent_Valorant.webp"
        alt="Bild nicht vorhanden"
      />
      <p>
        Skye gehört der Aufdecker-Klasse an und wurde dem Spiel in
        <b>Episode 1: Zündung</b> hinzugefügt.
      </p>
    </section>

    <section>
      <h2>Fähigkeiten</h2>

      <div class="Reihe">
        <div class="Spalte">
          <img
            src="../Bilder/Fähigkeiten/Bahnbrecher_Skye.webp"
            alt="Bild nicht vorhanden"
          />
        </div>
        <div class="Spalte"><b>Bahnbrecher</b></div>
        <div class="Spalte">
          RÜSTE einen „Tasmanischer Tiger“-Anhänger AUS. FEUERE, um die
          Kontrolle über das Raubtier zu übernehmen. Drücke FEUERN, während du
          die Kontrolle hast, um nach vorne zu springen, eine erschütternde
          Explosion zu verursachen und direkt getroffenen Gegnern Schaden
          zuzufügen.
        </div>
      </div>

      <br />

      <div class="Reihe">
        <div class="Spalte">
          <img
            src="../Bilder/Fähigkeiten/Gedeihen_Skye.webp"
            alt="Bild nicht vorhanden"
          />
        </div>
        <div class="Spalte"><b>Gedeihen</b></div>
        <div class="Spalte">
          RÜSTE einen „Heilung“-Anhänger AUS. HALTE FEUERN gedrückt, um zu
          kanalisieren und Verbündete in Sicht- und Reichweite zu heilen. Kann
          mehrfach verwendet werden, bis Skyes Heilungsleiste erschöpft ist.
          Skye kann sich nicht selbst heilen.
        </div>
      </div>

      <br />

      <div class="Reihe">
        <div class="Spalte">
          <img
            src="../Bilder/Fähigkeiten/Wegweiser_Skye.webp"
            alt="Bild nicht vorhanden"
          />
        </div>
        <div class="Spalte"><b>Wegweiser</b></div>
        <div class="Spalte">
          RÜSTE einen „Falken“-Anhänger AUS. FEUERE, um den Falken auszusenden.
          HALTE FEUERN gedrückt, um den Falken in Richtung deines Fadenkreuzes
          zu lenken. Feuere ERNEUT, während der Falke fliegt, um ihn in einen
          Blitz zu verwanden, der eine Trefferbestätigung abspielt, wenn ein
          Gegner in Sicht- und Reichweite war.
        </div>
      </div>
    </section>

    <section>
      <h2>Ultimative Fähigkeit</h2>
      <div class="Reihe">
        <div class="Spalte">
          <img
            src="../Bilder/Fähigkeiten/Rudel_Skye.webp"
            alt="Bild nicht vorhanden"
          />
        </div>
        <div class="Spalte"><b>Rudel</b></div>
        <div class="Spalte">
          RÜSTE einen „Rudel“-Anhänger aus. FEUERE, um drei Sucher auf die drei
          nahegelegensten Gegner zu hetzen. Wenn ein Sucher sein Ziel findet,
          wird dessen Sicht eingeschränkt.
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
      href="https://valorant.fandom.com/de/wiki/Skye"
      target="_blank"
      >Valorant-Fangemeinde
    </a>
  </footer>
</html>
