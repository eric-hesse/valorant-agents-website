// Funktion zur Weiterleitung basierend auf Agentennamen
function search() {
  const query = document.getElementById("searchInput").value.trim();

  if (!query) {
    alert("Bitte gib einen Agentennamen ein.");
    return;
  }

  // Formatierung: erster Buchstabe groß, Rest klein
  const formattedName = query.charAt(0).toUpperCase() + query.slice(1).toLowerCase();

  // Liste aller verfügbaren Agenten
  const existingAgents = [
    "Astra", "Breach", "Brimstone", "Chamber", "Clove", "Cypher", "Deadlock", "Fade",
    "Gekko", "Harbor", "Iso", "Jett", "Kayo", "Killjoy", "Neon", "Omen", "Phoenix",
    "Raze", "Reyna", "Sage", "Skye", "Sova", "Viper", "Yoru"
  ];

  if (existingAgents.includes(formattedName)) {
    // Leitet zur Agenten-Seite weiter
    window.location.href = `Agents/${formattedName}.html`;
  } else {
    alert(`Agent "${formattedName}" wurde nicht gefunden.`);
  }
}

// Event Listener, damit Enter funktioniert – auf allen Seiten
document.addEventListener("DOMContentLoaded", function () {
  const input = document.getElementById("searchInput");
  if (input) {
    input.addEventListener("keydown", function (event) {
      if (event.key === "Enter") {
        search();
      }
    });
  }
});
