<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cypher</title>
    <link rel="stylesheet" href="../styles/Agent.css" />
    <link rel="stylesheet" href="../styles/suche.css" />
    <link rel="icon" href="../Bilder/Cypher_Agent_Valorant.webp" />
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

    <h1>Cypher</h1>

    <section>
      <img
        src="../Bilder/Cypher_Agent_Valorant.webp"
        alt="Bild nicht vorhanden"
      />
      <p>
        Cypher gehört der Wächter-Klasse an und wurde dem Spiel in
        <b>Episode 1: Zündung</b> hinzugefügt.
      </p>
    </section>

    <section>
      <h2>Fähigkeiten</h2>

      <div class="Reihe">
        <div class="Spalte">
          <img
            src="../Bilder/Fähigkeiten/Cypherkäfig_Cypher.webp"
            alt="Bild nicht vorhanden"
          />
        </div>
        <div class="Spalte"><b>Cypherkäfig</b></div>
        <div class="Spalte">
          Schleudere den Cyberkäfig SOFORT vor Cypher auf den Boden. Aktiviere,
          um eine Zone zu erschaffen, die Gegnern die Sicht nimmt.
        </div>
      </div>

      <br />

      <div class="Reihe">
        <div class="Spalte">
          <img
            src="../Bilder/Fähigkeiten/Fallendraht_Cypher.webp"
            alt="Bild nicht vorhanden"
          />
        </div>
        <div class="Spalte"><b>Fallendraht</b></div>
        <div class="Spalte">
          RÜSTE einen Fallendraht aus. FEUERE, um einen zerstörbaren und
          verdeckten Stolperdraht am Zielort zu platzieren, der einen Draht
          zwischen dem Zielort und der gegenüberliegenden Mauer spannt.
          Gegnerische Spieler, die durch den Stolperdraht laufen, werden nach
          kurzer Zeit festgehalten, aufgedeckt und kampfunfähig gemacht, wenn
          sie das Gerät nicht rechtzeitig zerstören. Du kannst diese Fähigkeit
          aufheben, um sie ERNEUT EINZUSETZEN.
        </div>
      </div>

      <br />

      <div class="Reihe">
        <div class="Spalte">
          <img
            src="../Bilder/Fähigkeiten/Spionagekamera_Cypher.webp"
            alt="Bild nicht vorhanden"
          />
        </div>
        <div class="Spalte"><b>Spionagekamera</b></div>
        <div class="Spalte">
          RÜSTE eine Spionagekamera aus. FEUERE, um die Spionagekamera am
          Zielort zu platzieren. REAKTIVIERE diese Fähigkeit, um den Blickwinkel
          der Kamera zu steuern. FEUERE beim Steuern der Kamera, um einen
          Ortungspfeil zu verschießen. Dieser Pfeil deckt die Position des
          getroffenen Spielers auf.
        </div>
      </div>
    </section>

    <section>
      <h2>Ultimative Fähigkeit</h2>
      <div class="Reihe">
        <div class="Spalte">
          <img
            src="../Bilder/Fähigkeiten/Neuronaler_Diebstahl_Cypher.webp"
            alt="Bild nicht vorhanden"
          />
        </div>
        <div class="Spalte"><b>Neuronaler Diebstahl</b></div>
        <div class="Spalte">
          Setze diese Fähigkeit SOFORT bei einem toten gegnerischen Spieler ein,
          um die Position aller lebenden gegnerischen Spieler aufzudecken.
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
      href="https://valorant.fandom.com/de/wiki/Cypher"
      target="_blank"
      >Valorant-Fangemeinde
    </a>
  </footer>
</html>
