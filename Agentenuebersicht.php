<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Valorant Agentenübersicht</title>
    <link rel="stylesheet" href="styles/Agentenübersicht.css" />
    <link rel="stylesheet" href="styles/suche.css" />
    <link rel="icon" href="Bilder/Valorant_Logo.png" />
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

    <br />
    <br />

    <img
      src="Bilder/Agentenübersicht.png"
      alt="Bild nicht vorhanden"
      usemap="#charakter-map"
      class="Agentenübersicht"
    />

    <map name="#charakter-map">
      <area
        alt="Bild nicht vorhanden"
        title="Brimstone"
        class="Brimstone"
        href="Agents/Brimstone.php"
        coords="25,119,120,215"
        shape="rect"
      />
      <area
        alt="Bild nicht vorhanden"
        title="Viper"
        class="Viper"
        href="Agents/Viper.php"
        coords="126,118,221,216"
        shape="rect"
      />
      <area
        alt="Bild nicht vorhanden"
        title="Omen"
        class="Omen"
        href="Agents/Omen.php"
        coords="227,118,323,215"
        shape="rect"
      />
      <area
        alt="Bild nicht vorhanden"
        title="Killjoy"
        class="Killjoy"
        href="Agents/Killjoy.php"
        coords="328,120,423,214"
        shape="rect"
      />
      <area
        alt="Bild nicht vorhanden"
        title="Cypher"
        class="Cypher"
        href="Agents/Cypher.php"
        coords="429,116,524,213"
        shape="rect"
      />
      <area
        alt="Bild nicht vorhanden"
        title="Sova"
        class="Sova"
        href="Agents/Sova.php"
        coords="528,118,626,215"
        shape="rect"
      />
      <area
        alt="Bild nicht vorhanden"
        title="Sage"
        class="Sage"
        href="Agents/Sage.php"
        coords="630,118,727,216"
        shape="rect"
      />
      <area
        alt="Bild nicht vorhanden"
        title="Phoenix"
        class="Phoenix"
        href="Agents/Phoenix.php"
        coords="25,220,120,315"
        shape="rect"
      />
      <area
        alt="Bild nicht vorhanden"
        title="Jett"
        class="Jett"
        href="Agents/Jett.php"
        coords="126,220,221,315"
        shape="rect"
      />
      <area
        alt="Bild nicht vorhanden"
        title="Reyna"
        class="Reyna"
        href="Agents/Reyna.php"
        coords="225,220,323,316"
        shape="rect"
      />
      <area
        alt="Bild nicht vorhanden"
        title="Raze"
        class="Raze"
        href="Agents/Raze.php"
        coords="327,220,423,315"
        shape="rect"
      />
      <area
        alt="Bild nicht vorhanden"
        title="Breach"
        class="Breach"
        href="Agents/Breach.php"
        coords="429,220,525,317"
        shape="rect"
      />
      <area
        alt="Bild nicht vorhanden"
        title="Skye"
        class="Skye"
        href="Agents/Skye.php"
        coords="530,219,627,315"
        shape="rect"
      />
      <area
        alt="Bild nicht vorhanden"
        title="Yoru"
        class="Yoru"
        href="Agents/Yoru.php"
        coords="632,219,727,315"
        shape="rect"
      />
      <area
        alt="Bild nicht vorhanden"
        title="Astra"
        class="Astra"
        href="Agents/Astra.php"
        coords="25,320,121,417"
        shape="rect"
      />
      <area
        alt="Bild nicht vorhanden"
        title="KAY/O"
        class="KAY/O"
        href="Agents/KAYO.php"
        coords="125,321,222,417"
        shape="rect"
      />
      <area
        alt="Bild nicht vorhanden"
        title="Chamber"
        class="Chamber"
        href="Agents/Chamber.php"
        coords="228,321,323,418"
        shape="rect"
      />
      <area
        alt="Bild nicht vorhanden"
        title="Neon"
        class="Neon"
        href="Agents/Neon.php"
        coords="326,320,423,418"
        shape="rect"
      />
      <area
        alt="Bild nicht vorhanden"
        title="Fade"
        class="Fade"
        href="Agents/Fade.php"
        coords="429,321,525,418"
        shape="rect"
      />
      <area
        alt="Bild nicht vorhanden"
        title="Harbor"
        class="Harbor"
        href="Agents/Harbor.php"
        coords="530,322,625,418"
        shape="rect"
      />
      <area
        alt="Bild nicht vorhanden"
        title="Gekko"
        class="Gekko"
        href="Agents/Gekko.php"
        coords="630,320,727,417"
        shape="rect"
      />
    </map>
  </body>
</html>
