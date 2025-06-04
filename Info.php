<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Info</title>
    <link rel="stylesheet" href="styles/Info.css" />
    <link rel="stylesheet" href="styles/suche.css" />
    <link rel="icon" href="Bilder/Info_Logo.png" />
    <script src="scripts/sript.js"></script>
  </head>

  <body>
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

    <section><h2>Quellen</h2></section>

    <section>
      <ul>
        <li>
          <a
            alt="Link nicht verfügbar"
            title="Animierter Header"
            class="url"
            href="https://www.youtube.com/watch?v=sfhF0iZmUK8&ab_channel=FreakMotions"
            target="_blank"
            >Animierter Header
          </a>
        </li>

        <br />

        <li>
          <a
            alt="Link nicht verfügbar"
            title="Agentenübersicht"
            class="url"
            href="https://beebom.com/wp-content/uploads/2023/07/Valorant-characters-agents-and-their-abilities.png"
            target="_blank"
            >Agentenübersicht
          </a>
        </li>

        <br />

        <li>
          <a
            alt="Link nicht verfügbar"
            title="Agentenübersicht"
            class="url"
            href="https://valorant.fandom.com/de/wiki/VALORANT_Wiki"
            target="_blank"
            >Texte + Bilder der Agenten
          </a>
        </li>
      </ul>
    </section>
  </body>
</html>
