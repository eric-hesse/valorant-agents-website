<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Startseite</title>
    <link rel="stylesheet" href="styles/suche.css" />
    <link rel="stylesheet" href="styles/style.css" />
    <link rel="icon" href="Bilder/Valorant_Logo.png" />
    <script src="scripts/sript.js"></script>
  </head>

  <body>
    <header>
      <video
        id="backround-video"
        src="Bilder/Hintergrund.mp4"
        autoplay
        muted
        width="100%"
      ></video>
    </header>

    <nav style="position: relative">
      <a href="index.php">Startseite</a>
      <a href="Agentenuebersicht.php">Agenten</a>
      <a href="Info.php">Info</a>
      <a href="SQLiteStudio-Datenbank.php">Datenbank</a>

      <div class="search-container">
        <input
          type="text"
          id="agentSearch"
          placeholder="Suchen..."
          autocomplete="off"
        />
        <button type="button" onclick="search()">Suchen</button>
      </div>
    </nav>

    <div id="suggestions"></div>

    <div style="padding: 20px">
      <section>
        <h1>Willkommen auf der Valorant Agentenübersicht!</h1>

        Willkommen auf unserer Startseite, dem zentralen Anlaufpunkt für alles
        rund um die faszinierenden Fähigkeiten der Valorant Agents! Tauche ein
        in die Welt des taktischen Shooter-Erlebnisses, in dem jedes Individuum
        eine einzigartige Rolle spielt und mit einzigartigen Fähigkeiten
        ausgestattet ist.
      </section>

      <section>
        <h3>Entdecke die Vielfalt der Agents</h3>

        In Valorant dreht sich alles um die Auswahl des richtigen Agents für
        deine Spielweise. Jeder Agent bringt nicht nur einzigartige Fähigkeiten
        mit, sondern auch eine eigene Hintergrundgeschichte und Persönlichkeit.
        Ob du nun als Jett mit Geschwindigkeit durch die Karte düst, als Sage
        deine Verbündeten heilst oder als Brimstone mit taktischen Rauchgranaten
        das Schlachtfeld beherrschst - die Möglichkeiten sind endlos.

        <br />
        <br />
        <hr />

        <h3>Taktisches Gameplay</h3>
        Die Fähigkeiten der Agents sind der Schlüssel zu einem erfolgreichen
        Spiel. Lerne, sie geschickt einzusetzen, um den Verlauf der Runden zu
        beeinflussen. Von Angriff bis Verteidigung, jede Fähigkeit kann den
        entscheidenden Unterschied ausmachen. Koordiniere dich mit deinem Team,
        um maximale Effizienz zu erzielen und die Oberhand über die Gegner zu
        gewinnen.

        <br />
        <br />
        <hr />

        <h3>Fähigkeiten in Valorant</h3>
        Jeder Agent hat individuelle Fähigkeiten, welche am Anfang der Runde mit
        Kredits (Währung) gekauft werden müssen. Bis auf die ultimative
        Fähigkeiten, welche durch eine Anzahl von Ult-Punkten aufgeladen werden
        muss. Ult-Punkte werden durch verschiedene Aktionen im Spiel gesammelt.

        <br />
        <br />
        <hr />

        <h3>Aktuelle Updates und Patch Notes</h3>
        Bleibe stets auf dem neuesten Stand mit den aktuellsten Informationen zu
        Valorant. Wir halten dich über Balance-Änderungen, neue Agents und
        spannende Events auf dem Laufenden, damit du immer weißt, was in der
        Welt von Valorant gerade passiert. Erkunde unsere Seite und vertiefe
        dein Wissen über die Fähigkeiten der Valorant Agents. Egal, ob du ein
        erfahrener Spieler oder ein Neuling in der Welt von Valorant bist, hier
        findest du alles, was du brauchst, um dein Spielerlebnis zu optimieren.
        Viel Spaß beim Erkunden und viel Erfolg auf dem Schlachtfeld!
      </section>
    </div>

    <div id="searchResults" style="padding: 20px"></div>

    <footer>
      Beispieltext von
      <a
        alt="Link nicht verfügbar"
        title="Animierter Header"
        class="url"
        href="https://chat.openai.com"
        target="_blank"
        >ChatGPT
      </a>
    </footer>
  </body>
</html>
