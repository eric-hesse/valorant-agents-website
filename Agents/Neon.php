<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Neon</title>
    <link rel="stylesheet" href="../styles/Agent.css" />
    <link rel="stylesheet" href="../styles/suche.css" />
    <link rel="icon" href="../Bilder/Neon_Agent_Valorant.webp" />
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

    <h1>Neon</h1>

    <section>
      <img
        src="../Bilder/Neon_Agent_Valorant.webp"
        alt="Bild nicht vorhanden"
      />
      <p>
        Neon gehört der Duellanten-Klasse an und wurde dem Spiel in
        <b>Episode 4: Störung</b> hinzugefügt.
      </p>
    </section>

    <section>
      <h2>Fähigkeiten</h2>

      <div class="Reihe">
        <div class="Spalte">
          <img
            src="../Bilder/Fähigkeiten/Relaisblitz_Neon.webp"
            alt="Bild nicht vorhanden"
          />
        </div>
        <div class="Spalte"><b>Relaisblitz</b></div>
        <div class="Spalte">
          Schleudere SOFORT einen Energieblitz, der einmal abprallt. Wenn der
          Blitz auf eine Oberfläche trifft, elektrisiert er die Fläche unter dem
          Aufschlagspunkt mit einer erschütternden Explosion.
        </div>
      </div>

      <br />

      <div class="Reihe">
        <div class="Spalte">
          <img
            src="../Bilder/Fähigkeiten/Überholspur_Neon.webp"
            alt="Bild nicht vorhanden"
          />
        </div>
        <div class="Spalte"><b>Überholspur</b></div>
        <div class="Spalte">
          FEUERE zwei Energieströme auf den Boden, die sich ein kurzes Stück
          nach vorn bewegen oder bis sie auf ein Hindernis treffen. Die Ströme
          erheben sich zu Wänden aus statischer Elektrizität, die die Sicht
          blockieren und Gegnern, die sie durchqueren, Schaden zufügen.
        </div>
      </div>

      <br />

      <div class="Reihe">
        <div class="Spalte">
          <img
            src="../Bilder/Fähigkeiten/Hochtourig_Neon.webp"
            alt="Bild nicht vorhanden"
          />
        </div>
        <div class="Spalte"><b>Hochtourig</b></div>
        <div class="Spalte">
          Kanalisiere SOFORT Neons Kraft für höhere Geschwindigkeit. Wenn
          aufgeladen, löse mit dem ALT. FEUERMODUS ein elektrisiertes Rutschen
          aus. Die Rutschaufladung setzt sich alle zwei Kills zurück.
        </div>
      </div>
    </section>

    <section>
      <h2>Ultimative Fähigkeit</h2>
      <div class="Reihe">
        <div class="Spalte">
          <img
            src="../Bilder/Fähigkeiten/Spannungsspitze_Neon.webp"
            alt="Bild nicht vorhanden"
          />
        </div>
        <div class="Spalte"><b>Spannungsspitze</b></div>
        <div class="Spalte">
          Entfessle für kurze Zeit Neons volle Macht und Geschwindigkeit.
          FEUERE, um diese Macht in einen tödlichen Laserstrahl mit hoher
          Bewegungsgenauigkeit zu kanalisieren. Die Dauer setzt sich mit jedem
          Kill zurück.
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
      href="https://valorant.fandom.com/de/wiki/Neon"
      target="_blank"
      >Valorant-Fangemeinde
    </a>
  </footer>
</html>
