document.addEventListener("DOMContentLoaded", function () {
  const input = document.getElementById("agentSearch");
  const suggestions = document.getElementById("suggestions");

  input.addEventListener("input", function () {
    const query = this.value.trim();
    if (query.length === 0) {
      suggestions.innerHTML = "";
      return;
    }

    fetch("../search_agents.php?query=" + encodeURIComponent(query))
      .then((response) => response.json())
      .then((data) => {
        suggestions.innerHTML = "";
        if (data.length === 0) {
          suggestions.style.display = "none";
          return;
        }

        suggestions.style.display = "block";

        data.forEach((agent) => {
          const div = document.createElement("div");
          div.textContent = `${agent.name} (${agent.typ})`;
          div.addEventListener("click", () => {
            window.location.href = "../Agents/" + agent.name + ".php";
          });

          suggestions.appendChild(div);
        });
      });
  });
});
