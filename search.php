<?php
if (isset($_GET['query'])) {
    $search = $_GET['query'];

    include 'valorant_agents.php'; // stellt Verbindung zur SQLite her

    $stmt = $db->prepare("SELECT * FROM agents WHERE name LIKE :query");
    $stmt->bindValue(':query', "%$search%", PDO::PARAM_STR);
    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    header('Content-Type: application/json');
    echo json_encode($results);
}
?>
