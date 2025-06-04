<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "valorant agents";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");

if ($conn->connect_error) {
    echo json_encode([]);
    exit;
}

$query = isset($_GET['query']) ? $conn->real_escape_string($_GET['query']) : '';

$sql = "
SELECT DISTINCT a.Name AS name, a.Typ AS typ
FROM agenten a
LEFT JOIN agenten_fähigkeiten af ON a.Agent_ID = af.Agent_ID
LEFT JOIN fähigkeiten f ON af.Fähigkeit_ID = f.Fähigkeit_ID
WHERE a.Name LIKE '%$query%'
   OR a.Typ LIKE '%$query%'
   OR f.Bezeichnung LIKE '%$query%'
LIMIT 10
";

$result = $conn->query($sql);
$output = [];

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $output[] = ['name' => $row['name'], 'typ' => $row['typ']];
    }
}

echo json_encode($output);
?>
