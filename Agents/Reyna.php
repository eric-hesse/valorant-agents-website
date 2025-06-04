<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reyna</title>
    <link rel="stylesheet" href="../styles/Agent.css" />
    <link rel="stylesheet" href="../styles/suche.css" />
    <link rel="icon" href="../Bilder/Reyna_Agent_Valorant.webp" />
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

    <h1>Reyna</h1>

    <section>
      <img
        src="../Bilder/Reyna_Agent_Valorant.webp"
        alt="Bild nicht vorhanden"
      />
      <p>
        Reyna gehört der Duellanten-Klasse an und wurde dem Spiel in
        <b>Episode 1: Zündung</b> hinzugefügt.
      </p>
    </section>

    <section>
      <h2>Fähigkeiten</h2>

      <div class="Reihe">
        <div class="Spalte">
          <img
            src="../Bilder/Fähigkeiten/Verzehren_Reyna.webp"
            alt="Bild nicht vorhanden"
          />
        </div>
        <div class="Spalte"><b>Verzehren</b></div>
        <div class="Spalte">
          Von Reyna getötete Gegner hinterlassen Seelenkugeln, die drei Sekunden
          bestehen bleiben. Verzehre SOFORT eine nahe Seelenkugel, was für kurze
          Zeit schnell heilt. Steigt die durch diese Fähigkeit erhaltene
          Gesundheit über 100, verfällt diese langsam. Wenn KAISERIN aktiv ist,
          wird diese Fähigkeit automatisch eingesetzt und verbraucht die
          Seelenkugel nicht.
        </div>
      </div>

      <br />

      <div class="Reihe">
        <div class="Spalte">
          <img
            src="../Bilder/Fähigkeiten/Starren_Reyna.webp"
            alt="Bild nicht vorhanden"
          />
        </div>
        <div class="Spalte"><b>Starren</b></div>
        <div class="Spalte">
          RÜSTE ein ätherisches, zerstörbares Auge aus. AKTIVIERE, um das Auge
          eine kurze Strecke nach vorne zu werfen. Das Auge schränkt die Sicht
          von Gegnern ein, die es ansehen.
        </div>
      </div>

      <br />

      <div class="Reihe">
        <div class="Spalte">
          <img
            src="../Bilder/Fähigkeiten/Seelenkugel_Reyna.webp"
            alt="Bild nicht vorhanden"
          />
        </div>
        <div class="Spalte"><b>Seelenkugel</b></div>
        <div class="Spalte">
          Verzehrt SOFORT eine nahe Seelenkugel und verleiht für kurze Zeit
          Unberührbarkeit. Wenn KAISERIN aktiv ist, wird Reyna zudem unsichtbar.
        </div>
      </div>
    </section>

    <section>
      <h2>Ultimative Fähigkeit</h2>
      <div class="Reihe">
        <div class="Spalte">
          <img
            src="../Bilder/Fähigkeiten/Kaiserin_Reyna.webp"
            alt="Bild nicht vorhanden"
          />
        </div>
        <div class="Spalte"><b>Kaiserin</b></div>
        <div class="Spalte">
          Verleiht SOFORT einen Kampfrausch, was Feuer- sowie Ausrüstungs- und
          Nachladegeschwindigkeit stark erhöht. Ein Kill setzt die Dauer zurück.
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
      href="https://valorant.fandom.com/de/wiki/Reyna"
      target="_blank"
      >Valorant-Fangemeinde
    </a>
  </footer>
</html>
