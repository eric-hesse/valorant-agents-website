<?php 
// Datenbankverbindung herstellen
$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "valorant agents";
$message = '';           // leere Meldung
$actionDone = false;     // merkt sich, ob etwas erfolgreich war
$errorFields_insert = [];
$fieldErrors_insert = [];
$errorFields_edit = [];
$fieldErrors_edit = [];

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");
$selectedTable = '';
$editRowHtml = '';  // Verhindert Fehler, wenn kein edit_row gesetzt ist


// Verbindung überprüfen
if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

// Tabellennamen aus der Datenbank abrufen
$sql = "SHOW TABLES";
$result = $conn->query($sql);

$tables = [];
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        foreach ($row as $tableName) {
            $tables[] = $tableName;
        }
    }
}

$selectedTable = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['table']) && in_array($_POST['table'], $tables)) {
        $selectedTable = $_POST['table'];
        $sql = "SELECT * FROM " . $conn->real_escape_string($selectedTable) . "";
        $result = $conn->query($sql);
    }

    if (!empty($selectedTable)) {

if (isset($_POST['insert']) && isset($_POST['new'])) {
    $cols = array_keys($_POST['new']);
    $vals = array_map([$conn, 'real_escape_string'], array_values($_POST['new']));

$valid = true;
foreach ($vals as $i => $val) {
    $colName = $cols[$i];

    if (trim($val) === '') {
        $valid = false;
        $errorFields_insert[] = $colName;
        $fieldErrors_insert[$colName] = "Eingabe ungültig: Dieses Feld darf nicht leer sein.";
    }

    if (stripos($colName, 'id') !== false && !ctype_digit($val)) {
        $valid = false;
        $errorFields_insert[] = $colName;
        $fieldErrors_insert[$colName] = "Eingabe ungültig: Muss eine ganze Zahl sein.";
    }
}

if (!$valid) {
    $message = "<p style='color:red;'>❌ Fehler: Ungültige Eingabe – ID muss eine ganze Zahl sein.</p>";
}


    if ($valid) {
        $sql = "INSERT INTO $selectedTable (" . implode(', ', $cols) . ") VALUES ('" . implode("', '", $vals) . "')";
        if ($conn->query($sql)) {
            if ($conn->affected_rows > 0) {
                $message = "<p style='color:green;'>✅ Datensatz erfolgreich eingefügt.</p>";
                $actionDone = true;
            } else {
                $message = "<p style='color:orange;'>⚠️ Kein Datensatz eingefügt – möglicherweise keine neuen Daten.</p>";
            }
        } else {
if (strpos($conn->error, 'Duplicate') !== false) {
                $message = "<p style='color:red;'>❌ Fehler: Primärschlüssel bereits vergeben (doppelter Eintrag).</p>";
            } elseif (strpos($conn->error, 'Incorrect') !== false || strpos($conn->error, 'Data truncated') !== false){
                $message = "<p style='color:red;'>❌ Fehler: Ungültiger Datentyp – z. B. Buchstabe bei Zahl.</p>";
            } else {
                $message = "<p style='color:red;'>❌ Fehler beim Einfügen: " . htmlspecialchars($conn->error) . "</p>";
            }
        }
    
    }
  }


        if (isset($_POST['delete_row']) && isset($_POST['table'])) {
            $row = json_decode($_POST['delete_row'], true);
            $conditions = [];
            foreach ($row as $col => $val) {
                $conditions[] = "$col = '" . $conn->real_escape_string($val) . "'";
            }
            $sql = "DELETE FROM $selectedTable WHERE " . implode(' AND ', $conditions) . " LIMIT 1";

            if ($conn->query($sql)) {
                if ($conn->affected_rows > 0) {
                    $message = "<p style='color:red;'>🗑️ Datensatz erfolgreich gelöscht.</p>";
                    $actionDone = true;
                } else {
                    $message = "<p style='color:orange;'>⚠️ Kein Datensatz gelöscht (nicht gefunden).</p>";
                }
            } else {
                $message = "<p style='color:red;'>❌ Fehler beim Löschen: " . $conn->error . "</p>";
            }
        }

$editRowHtml = '';
if (isset($_POST['edit_row'])) {
    $row = json_decode($_POST['edit_row'], true);
    ob_start();
    ?>
    <div class="edit-overlay">
      <h3>Datensatz bearbeiten</h3>
      <form method="post">
        <?php foreach ($row as $key => $val): ?>
          <div class="form-row">
            <label for="<?php echo $key; ?>"><?php echo htmlspecialchars($key); ?>:</label>
<?php
$isErrorField = in_array($key, $errorFields_edit);
$inputClass = $isErrorField ? 'input-error' : '';

?>
<input type="text" id="<?php echo $key; ?>" name="update[<?php echo $key; ?>]" class="<?php echo $inputClass; ?>" value="<?php echo htmlspecialchars($val); ?>">

          </div>
        <?php endforeach; ?>
        <input type="hidden" name="original" value="<?php echo htmlspecialchars(json_encode($row)); ?>">
        <input type="hidden" name="table" value="<?php echo $selectedTable; ?>">
        <input type="submit" name="do_update" value="Speichern">
      </form>
    </div>
    <?php
    $editRowHtml = ob_get_clean();
}


if (isset($_POST['do_update']) && isset($_POST['update']) && isset($_POST['original'])) {
    $new = $_POST['update'];
    $orig = json_decode($_POST['original'], true);
    $set = [];
    $valid = true;
    $errorFields = [];

    foreach ($new as $col => $val) {
        $val = trim($val);
        if ($val === '') {
            $valid = false;
            $errorFields_edit[] = $col;
            $message = "<p style='color:red;'>❌ Fehler: Feld '" . htmlspecialchars($col) . "' darf nicht leer sein.</p>";
            break;
        }
        if (stripos($col, 'id') !== false && !ctype_digit($val)) {
            $valid = false;
            $errorFields_edit[] = $col;
            $message = "<p style='color:red;'>❌ Fehler: '" . htmlspecialchars($col) . "' muss eine ganze Zahl sein.</p>";
            break;
        }
        $set[] = "$col = '" . $conn->real_escape_string($val) . "'";
    }

    $conditions = [];
    foreach ($orig as $col => $val) {
        $conditions[] = "$col = '" . $conn->real_escape_string($val) . "'";
    }

    if ($valid) {
$sql = "UPDATE $selectedTable SET " . implode(', ', $set) . " WHERE " . implode(' AND ', $conditions) . " LIMIT 1";
$queryResult = $conn->query($sql);

if ($queryResult === true) {
    if ($conn->affected_rows > 0) {
        $message = "<p style='color:green;'>📝 Datensatz erfolgreich aktualisiert.</p>";
        $actionDone = true;
    } else {
        $message = "<p style='color:orange;'>⚠️ Keine Änderung vorgenommen – Daten identisch oder Konflikt.</p>";
    }
} else {
    if (strpos($conn->error, 'Duplicate') !== false) {
        $errorFields = array_keys($new); // markiere alle Felder
        $message = "<p style='color:red;'>❌ Fehler: Primärschlüsselkonflikt – ID bereits vergeben.</p>";
    } elseif (
        strpos($conn->error, 'Incorrect') !== false ||
        strpos($conn->error, 'Data truncated') !== false
    ) {
        $message = "<p style='color:red;'>❌ Fehler: Ungültiger Datentyp – z. B. Buchstabe bei Zahl.</p>";
    } else {
        $message = "<p style='color:red;'>❌ Fehler beim Aktualisieren: " . htmlspecialchars($conn->error) . "</p>";
    }
}

    } else {
        // Formular mit Markierung erneut anzeigen:
        $row = $new;
        ob_start();
        ?>
        <div class="edit-overlay">
          <h3>Datensatz bearbeiten</h3>
          <form method="post">
            <?php foreach ($row as $key => $val): ?>
              <div class="form-row">
                <label for="<?php echo $key; ?>"><?php echo htmlspecialchars($key); ?>:</label>
                <?php
                  $isErrorField = in_array($key, $errorFields_edit);
                  $inputClass = $isErrorField ? 'input-error' : '';
                ?>
                <input type="text" id="<?php echo $key; ?>" name="update[<?php echo $key; ?>]" class="<?php echo $inputClass; ?>" value="<?php echo htmlspecialchars($val); ?>">
              </div>
            <?php endforeach; ?>
            <input type="hidden" name="original" value="<?php echo htmlspecialchars(json_encode($orig)); ?>">
            <input type="hidden" name="table" value="<?php echo $selectedTable; ?>">
            <input type="submit" name="do_update" value="Speichern">
          </form>
        </div>
        <?php
        $editRowHtml = ob_get_clean();
    }
}



    } // Ende if (!empty($selectedTable))
} // Ende if ($_SERVER['REQUEST_METHOD'] === 'POST')

$primaryKeys = [];
$foreignKeys = [];

if (!empty($selectedTable)) {
    $pkQuery = $conn->query("SHOW KEYS FROM $selectedTable WHERE Key_name = 'PRIMARY'");
    if ($pkQuery instanceof mysqli_result) {
        while($pk = $pkQuery->fetch_assoc()) {
            $primaryKeys[] = $pk['Column_name'];
        }
    } else {
        echo "<p style='color:red;'>Fehler bei Primärschlüsselabfrage: " . $conn->error . "</p>";
    }

    $fkQuery = $conn->query("
        SELECT COLUMN_NAME 
        FROM INFORMATION_SCHEMA.KEY_COLUMN_USAGE 
        WHERE TABLE_SCHEMA = '$dbname' 
          AND TABLE_NAME = '$selectedTable' 
          AND REFERENCED_TABLE_NAME IS NOT NULL
    ");
    if ($fkQuery instanceof mysqli_result) {
        while($fk = $fkQuery->fetch_assoc()) {
            $foreignKeys[] = $fk['COLUMN_NAME'];
        }
    } else {
        echo "<p style='color:red;'>Fehler bei Fremdschlüsselabfrage: " . $conn->error . "</p>";
    }
}




// Ergebnis nach Änderungen neu laden
$sql = "SELECT * FROM " . $conn->real_escape_string($selectedTable) . "";
$result = $conn->query($sql);
$fields = [];
if ($result instanceof mysqli_result) {
    $fields = $result->fetch_fields();
}




?>

<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Datenbank</title>
    <link rel="stylesheet" href="styles/SQLiteStudio-Datenbank.css" />
    <link rel="stylesheet" href="styles/suche.css" />
    <link rel="icon" href="Bilder/Datenbank_Logo.png" />
    <script src="scripts/sript.js"></script>
  </head>

  <style>table {
  border-style: solid;
  border-width: 1px;
  border-color: black;
  border-collapse: collapse;
}
table tr {
  background-color: white;
}
table tr.header {
  background-color: #dddddd;
}
table tr.title {
  background-color: #eeeeee;
}
table tr td {
  padding: 0px 3px 0px 3px;
  border-style: solid;
  border-width: 1px;
  border-color: #666666;
}
table tr td.null {
  color: #999999;
  text-align: center;
  padding: 0px 3px 0px 3px;
  border-style: solid;
  border-width: 1px;
  border-color: #666666;
}
table tr td.separator {
  padding: 0px 3px 0px 3px;
  border-style: solid;
  border-width: 1px;
  border-color: #666666;
  background-color: #dddddd;
}
table tr td.rownum {
  padding: 0px 3px 0px 3px;
  border-style: solid;
  border-width: 1px;
  border-color: #666666;
  background-color: #dddddd;
  text-align: right;
}

.table-container {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  justify-content: flex-start;
}

.edit-overlay {
  position: fixed;
  top: 80px;
  right: 20px;
  width: 320px;
  max-height: 90vh;
  overflow-y: auto;
  background-color: white;
  border: 2px solid #B2525E;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
  padding: 20px;
  border-radius: 8px;
  z-index: 1000;
}

.edit-overlay h3 {
  margin-top: 0;
}

.edit-overlay input[type="submit"] {
  margin-top: 10px;
}

.edit-overlay input[type="text"],
.edit-overlay input[type="number"],
.edit-overlay input:not([type="submit"]) {
  width: 100%;
  padding: 6px 10px;
  margin-bottom: 10px;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f5f5f5;
  transition: border-color 0.3s, background-color 0.3s;
}

.edit-overlay input:focus {
  border-color: #B2525E;
  background-color: #fff;
  outline: none;
}

.edit-overlay .form-row {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}

.edit-overlay .form-row label {
  width: 40%;
  font-weight: bold;
}

.edit-overlay .form-row input[type="text"] {
  width: 60%;
  padding: 6px 10px;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f5f5f5;
  transition: border-color 0.3s, background-color 0.3s;
}

.edit-overlay .form-row input:focus {
  border-color: #B2525E;
  background-color: #fff;
  outline: none;
}


td.primary-key {
  background-color: #d4edda;
  font-weight: bold;
}

td.foreign-key {
  background-color: #d1ecf1;
}

td.pk-agent_id {
  background-color: #d4edda; /* hellgrün */
  font-weight: bold;
}

td.pk-fähigkeit_id {
  background-color: #fff3cd; /* hellgelb */
  font-weight: bold;
}

/* Standard-Fallback */
td.primary-key {
  background-color: #e2e3e5;
  font-weight: bold;
}

table th {
  padding: 0px 3px;
  border-style: solid;
  border-width: 1px;
  border-color: #666666;
  background-color: #dddddd;
  text-align: left;
}

.input-error {
  border: 2px solid red;
  background-color: #ffe6e6;
}

input[type="text"],
input[type="number"],
input[type="submit"],
input[type="search"],
select {
  border-radius: 6px;
  padding: 6px 10px;
  border: 2px solid #ccc;
  background-color: #f9f9f9;
  transition: border-color 0.3s, background-color 0.3s;
}

input:focus,
select:focus {
  border-color: #B2525E;
  background-color: #fff;
  outline: none;
}

/* Einheitliches Aussehen wie beim Bearbeiten */
form input[name^="new["] {
  width: 100%;
  padding: 6px 10px;
  margin-bottom: 10px;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f5f5f5;
  transition: border-color 0.3s, background-color 0.3s;
}

/* Fokus-Effekt */
form input[name^="new["]:focus {
  border-color: #B2525E;
  background-color: #fff;
  outline: none;
}

form input[name^="new["] {
  width: 180px; /* Oder was dir gefällt */
  padding: 6px 10px;
  margin-bottom: 0;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f5f5f5;
  transition: border-color 0.3s, background-color 0.3s;
}



</style>

  <body>
    <nav style="position: relative;">
  <a href="index.php">Startseite</a>
  <a href="Agentenuebersicht.php">Agenten</a>
  <a href="Info.php">Info</a>
  <a href="SQLiteStudio-Datenbank.php">Datenbank</a>

  <div class="search-container">
    <input type="text" id="agentSearch" placeholder="Suchen..." autocomplete="off" />
    <button type="button" onclick="search()">Suchen</button>
  </div>
</nav>

<div id="suggestions"></div>
  
  </section>
  <?php if (isset($fields)): ?>

<?php endif; ?>

<section><h1>Datenbank-Tabellen-Anzeige</h1></section>

  <section> 
    <?php echo $editRowHtml; ?>

<?php if (!empty($message)): ?>
  <div style="margin: 15px 0; padding: 10px; border: 1px solid #ccc;
      background-color: <?php
        if (strpos($message, '✅') !== false || strpos($message, '📝') !== false) echo '#d4edda';
        elseif (strpos($message, '🗑️') !== false) echo '#f8d7da';
        elseif (strpos($message, '❌') !== false) echo '#f8d7da';
        elseif (strpos($message, '⚠️') !== false) echo '#fff3cd';
        else echo '#f9f9f9';
      ?>;">
    <?php echo $message; ?>
  </div>
<?php endif; ?>



    <form method="post">
      <input type="hidden" name="table" value="<?php echo $selectedTable; ?>">
        <select name="table" required>
    <option value="">--Bitte auswählen--</option>
    <?php foreach($tables as $table): ?>
        <option value="<?php echo $table; ?>" <?php if($selectedTable === $table) echo 'selected'; ?>>
            <?php echo $table; ?>
        </option>
    <?php endforeach; ?>
</select>

        <input type="submit" value="Tabelle anzeigen">
    </form>



<?php if (isset($selectedTable) && isset($result) && $result): ?>
  <?php if ($result->num_rows > 0): ?>
    <br>
    <h2><u>Inhalt der Tabelle: <?php echo htmlspecialchars($selectedTable); ?></u></h2>
    <?php if (isset($selectedTable) && !empty($primaryKeys)): ?>
    <div style="margin-top: 20px; margin-bottom: 10px;">
        <strong>Primärschlüssel:</strong>
        <div style="display: flex; gap: 10px; margin-top: 5px;">
<?php foreach ($primaryKeys as $key): 
    $color = '#e2e3e5'; // Standard grau
    if ($key === 'Agent_ID') {
        $color = '#d4edda'; // grün
    } elseif ($key === 'Fähigkeit_ID') {
        $color = '#fff3cd'; // gelb
    }
?>
    <div style="background-color: <?php echo $color; ?>; padding: 3px 8px;">
        <?php echo htmlspecialchars($key); ?>
    </div>
<?php endforeach; ?>

        </div>
    </div>
<?php endif; ?>
<br>
<h4>Neuen Datensatz hinzufügen:</h4>
<form method="post" style="display: flex; flex-direction: row; flex-wrap: wrap; gap: 20px; align-items: flex-end; margin-top: 10px;">
  <input type="hidden" name="table" value="<?php echo $selectedTable; ?>">
<?php foreach ($fields as $field): ?>
  <?php
    $name = $field->name;
    $hasError = isset($errorFields) && in_array($name, $errorFields_insert);
    $class = $hasError ? 'input-error' : '';
  ?>
  <div style="display: flex; flex-direction: column; align-items: flex-start; gap: 4px;">
    <label for="new_<?php echo $name; ?>" style="font-weight: bold;"><?php echo htmlspecialchars($name); ?>:</label>
    <input
      id="new_<?php echo $name; ?>"
      name="new[<?php echo $name; ?>]"
      class="<?php echo $class; ?>"
      required
    >
    <?php if ($hasError && isset($fieldErrors[$name])): ?>
      <span style="color: red; font-size: 0.9em;"><?php echo $fieldErrors[$name]; ?></span>
    <?php endif; ?>
  </div>
<?php endforeach; ?>

<div style="display: flex; flex-direction: column; align-items: flex-start; gap: 4px; margin-top: 0px;">
  <label>&nbsp;</label>
  <input type="submit" name="insert" value="Hinzufügen" style="padding: 6px 12px;">
</div>

</form>


    <br>
    <table>
      <tr>
        <?php foreach ($fields as $field): ?>
          <th><?php echo htmlspecialchars($field->name); ?></th>
        <?php endforeach; ?>
        <th>Aktionen</th>
      </tr>

      <?php while($row = $result->fetch_assoc()): 
        $rowJson = htmlspecialchars(json_encode($row), ENT_QUOTES, 'UTF-8'); ?>
        <tr>
          <?php foreach ($row as $column => $value): 
            $class = '';
            if (in_array($column, $primaryKeys)) {
              $class = 'pk-' . strtolower($column);
            } elseif (in_array($column, $foreignKeys)) {
              $class = 'foreign-key';
            }
          ?>
            <td class="<?php echo $class; ?>"><?php echo htmlspecialchars($value); ?></td>
          <?php endforeach; ?>
          <td>
            <form method="post" style="display:inline;">
              <input type="hidden" name="edit_row" value="<?php echo $rowJson; ?>">
              <input type="hidden" name="table" value="<?php echo $selectedTable; ?>">
              <input type="submit" value="Bearbeiten">
            </form>
            <form method="post" style="display:inline;" onsubmit="return confirm('Eintrag wirklich löschen?');">
              <input type="hidden" name="delete_row" value="<?php echo $rowJson; ?>">
              <input type="hidden" name="table" value="<?php echo $selectedTable; ?>">
              <input type="submit" value="Löschen">
            </form>
          </td>
        </tr>
      <?php endwhile; ?>
    </table>

  <?php else: ?>
    <p>⚠️ Keine Daten in der ausgewählten Tabelle gefunden.</p>
  <?php endif; ?>
<?php endif; ?>



  </section>

   <section>
     <div class="table-container">
      <table>
      <tr class="title">
        <td colspan="4" align="center">Tabelle: agenten</td>
      </tr>
      <tr class="header">
        <td align="right">
          <b><i>#</i></b>
        </td>
        <td><b>Agent_ID</b></td>
        <td><b>Typ</b></td>
        <td><b>Name</b></td>
      </tr>
      <tr>
        <td class="rownum"><i>1</i></td>
        <td align="left">1</td>
        <td align="left">Taktiker</td>
        <td align="left">Brimstone</td>
      </tr>
      <tr>
        <td class="rownum"><i>2</i></td>
        <td align="left">2</td>
        <td align="left">Taktiker</td>
        <td align="left">Viper</td>
      </tr>
      <tr>
        <td class="rownum"><i>3</i></td>
        <td align="left">3</td>
        <td align="left">Taktiker</td>
        <td align="left">Omen</td>
      </tr>
      <tr>
        <td class="rownum"><i>4</i></td>
        <td align="left">4</td>
        <td align="left">Initiator</td>
        <td align="left">Breach</td>
      </tr>
      <tr>
        <td class="rownum"><i>5</i></td>
        <td align="left">5</td>
        <td align="left">Wächter</td>
        <td align="left">Cypher</td>
      </tr>
      <tr>
        <td class="rownum"><i>6</i></td>
        <td align="left">6</td>
        <td align="left">Initiator</td>
        <td align="left">Sova</td>
      </tr>
      <tr>
        <td class="rownum"><i>7</i></td>
        <td align="left">7</td>
        <td align="left">Wächter</td>
        <td align="left">Sage</td>
      </tr>
      <tr>
        <td class="rownum"><i>8</i></td>
        <td align="left">8</td>
        <td align="left">Duellant</td>
        <td align="left">Phoenix</td>
      </tr>
      <tr>
        <td class="rownum"><i>9</i></td>
        <td align="left">9</td>
        <td align="left">Duellant</td>
        <td align="left">Jett</td>
      </tr>
      <tr>
        <td class="rownum"><i>10</i></td>
        <td align="left">10</td>
        <td align="left">Duellant</td>
        <td align="left">Reyna</td>
      </tr>
      <tr>
        <td class="rownum"><i>11</i></td>
        <td align="left">11</td>
        <td align="left">Wächter</td>
        <td align="left">Killjoy</td>
      </tr>
      <tr>
        <td class="rownum"><i>12</i></td>
        <td align="left">12</td>
        <td align="left">Initiator</td>
        <td align="left">Skye</td>
      </tr>
      <tr>
        <td class="rownum"><i>13</i></td>
        <td align="left">13</td>
        <td align="left">Duellant</td>
        <td align="left">Yoru</td>
      </tr>
      <tr>
        <td class="rownum"><i>14</i></td>
        <td align="left">14</td>
        <td align="left">Taktiker</td>
        <td align="left">Astra</td>
      </tr>
      <tr>
        <td class="rownum"><i>15</i></td>
        <td align="left">15</td>
        <td align="left">Initiator</td>
        <td align="left">KAY/O</td>
      </tr>
      <tr>
        <td class="rownum"><i>16</i></td>
        <td align="left">16</td>
        <td align="left">Wächter</td>
        <td align="left">Chamber</td>
      </tr>
      <tr>
        <td class="rownum"><i>17</i></td>
        <td align="left">17</td>
        <td align="left">Duellant</td>
        <td align="left">Neon</td>
      </tr>
      <tr>
        <td class="rownum"><i>18</i></td>
        <td align="left">18</td>
        <td align="left">Initiator</td>
        <td align="left">Fade</td>
      </tr>
      <tr>
        <td class="rownum"><i>19</i></td>
        <td align="left">19</td>
        <td align="left">Taktiker</td>
        <td align="left">Harbor</td>
      </tr>
      <tr>
        <td class="rownum"><i>20</i></td>
        <td align="left">20</td>
        <td align="left">Initiator</td>
        <td align="left">Gekko</td>
      </tr>
      <tr>
        <td class="rownum"><i>21</i></td>
        <td align="left">21</td>
        <td align="left">Duellant</td>
        <td align="left">Raze</td>
      </tr>
    </table>
    <br /><br />
       <table>
      <tr class="title">
        <td colspan="3" align="center">Tabelle: fähigkeiten</td>
      </tr>
      <tr class="header">
        <td align="right">
          <b><i>#</i></b>
        </td>
        <td><b>Fähigkeit_ID</b></td>
        <td><b>Bezeichnung</b></td>
      </tr>
      <tr>
        <td class="rownum"><i>1</i></td>
        <td align="left">1</td>
        <td align="left">Rauch</td>
      </tr>
      <tr>
        <td class="rownum"><i>2</i></td>
        <td align="left">2</td>
        <td align="left">Heilung</td>
      </tr>
      <tr>
        <td class="rownum"><i>3</i></td>
        <td align="left">3</td>
        <td align="left">Drohne</td>
      </tr>
      <tr>
        <td class="rownum"><i>4</i></td>
        <td align="left">4</td>
        <td align="left">Wand</td>
      </tr>
      <tr>
        <td class="rownum"><i>5</i></td>
        <td align="left">5</td>
        <td align="left">Schaden</td>
      </tr>
      <tr>
        <td class="rownum"><i>6</i></td>
        <td align="left">6</td>
        <td align="left">Blendung</td>
      </tr>
      <tr>
        <td class="rownum"><i>7</i></td>
        <td align="left">7</td>
        <td align="left">Alarm</td>
      </tr>
      <tr>
        <td class="rownum"><i>8</i></td>
        <td align="left">8</td>
        <td align="left">Wiederbelebung</td>
      </tr>
      <tr>
        <td class="rownum"><i>9</i></td>
        <td align="left">9</td>
        <td align="left">Aufklärung</td>
      </tr>
      <tr>
        <td class="rownum"><i>10</i></td>
        <td align="left">10</td>
        <td align="left">Waffe</td>
      </tr>
      <tr>
        <td class="rownum"><i>11</i></td>
        <td align="left">11</td>
        <td align="left">Bewegung</td>
      </tr>
      <tr>
        <td class="rownum"><i>12</i></td>
        <td align="left">12</td>
        <td align="left">Betäubung</td>
      </tr>
    </table>
    <table>
      <tr class="title">
        <td colspan="3" align="center">Tabelle: agenten_fähigkeiten</td>
      </tr>
      <tr class="header">
        <td align="right">
          <b><i>#</i></b>
        </td>
        <td><b>Agent_ID</b></td>
        <td><b>Fähigkeit_ID</b></td>
      </tr>
      <tr>
        <td class="rownum"><i>1</i></td>
        <td align="left">1</td>
        <td align="left">1</td>
      </tr>
      <tr>
        <td class="rownum"><i>2</i></td>
        <td align="left">1</td>
        <td align="left">5</td>
      </tr>
      <tr>
        <td class="rownum"><i>3</i></td>
        <td align="left">1</td>
        <td align="left">11</td>
      </tr>
      <tr>
        <td class="rownum"><i>4</i></td>
        <td align="left">2</td>
        <td align="left">1</td>
      </tr>
      <tr>
        <td class="rownum"><i>5</i></td>
        <td align="left">2</td>
        <td align="left">4</td>
      </tr>
      <tr>
        <td class="rownum"><i>6</i></td>
        <td align="left">2</td>
        <td align="left">5</td>
      </tr>
      <tr>
        <td class="rownum"><i>7</i></td>
        <td align="left">3</td>
        <td align="left">1</td>
      </tr>
      <tr>
        <td class="rownum"><i>8</i></td>
        <td align="left">3</td>
        <td align="left">6</td>
      </tr>
      <tr>
        <td class="rownum"><i>9</i></td>
        <td align="left">3</td>
        <td align="left">11</td>
      </tr>
      <tr>
        <td class="rownum"><i>10</i></td>
        <td align="left">4</td>
        <td align="left">5</td>
      </tr>
      <tr>
        <td class="rownum"><i>11</i></td>
        <td align="left">4</td>
        <td align="left">6</td>
      </tr>
      <tr>
        <td class="rownum"><i>12</i></td>
        <td align="left">4</td>
        <td align="left">12</td>
      </tr>
      <tr>
        <td class="rownum"><i>13</i></td>
        <td align="left">5</td>
        <td align="left">1</td>
      </tr>
      <tr>
        <td class="rownum"><i>14</i></td>
        <td align="left">5</td>
        <td align="left">7</td>
      </tr>
      <tr>
        <td class="rownum"><i>15</i></td>
        <td align="left">5</td>
        <td align="left">9</td>
      </tr>
      <tr>
        <td class="rownum"><i>16</i></td>
        <td align="left">6</td>
        <td align="left">5</td>
      </tr>
      <tr>
        <td class="rownum"><i>17</i></td>
        <td align="left">6</td>
        <td align="left">9</td>
      </tr>
      <tr>
        <td class="rownum"><i>18</i></td>
        <td align="left">7</td>
        <td align="left">2</td>
      </tr>
      <tr>
        <td class="rownum"><i>19</i></td>
        <td align="left">7</td>
        <td align="left">4</td>
      </tr>
      <tr>
        <td class="rownum"><i>20</i></td>
        <td align="left">7</td>
        <td align="left">8</td>
      </tr>
      <tr>
        <td class="rownum"><i>21</i></td>
        <td align="left">7</td>
        <td align="left">11</td>
      </tr>
      <tr>
        <td class="rownum"><i>22</i></td>
        <td align="left">8</td>
        <td align="left">4</td>
      </tr>
      <tr>
        <td class="rownum"><i>23</i></td>
        <td align="left">8</td>
        <td align="left">5</td>
      </tr>
      <tr>
        <td class="rownum"><i>24</i></td>
        <td align="left">8</td>
        <td align="left">6</td>
      </tr>
      <tr>
        <td class="rownum"><i>25</i></td>
        <td align="left">8</td>
        <td align="left">8</td>
      </tr>
      <tr>
        <td class="rownum"><i>26</i></td>
        <td align="left">9</td>
        <td align="left">1</td>
      </tr>
      <tr>
        <td class="rownum"><i>27</i></td>
        <td align="left">9</td>
        <td align="left">10</td>
      </tr>
      <tr>
        <td class="rownum"><i>28</i></td>
        <td align="left">9</td>
        <td align="left">11</td>
      </tr>
      <tr>
        <td class="rownum"><i>29</i></td>
        <td align="left">10</td>
        <td align="left">2</td>
      </tr>
      <tr>
        <td class="rownum"><i>30</i></td>
        <td align="left">10</td>
        <td align="left">6</td>
      </tr>
      <tr>
        <td class="rownum"><i>31</i></td>
        <td align="left">10</td>
        <td align="left">11</td>
      </tr>
      <tr>
        <td class="rownum"><i>32</i></td>
        <td align="left">11</td>
        <td align="left">5</td>
      </tr>
      <tr>
        <td class="rownum"><i>33</i></td>
        <td align="left">11</td>
        <td align="left">7</td>
      </tr>
      <tr>
        <td class="rownum"><i>34</i></td>
        <td align="left">11</td>
        <td align="left">12</td>
      </tr>
      <tr>
        <td class="rownum"><i>35</i></td>
        <td align="left">12</td>
        <td align="left">2</td>
      </tr>
      <tr>
        <td class="rownum"><i>36</i></td>
        <td align="left">12</td>
        <td align="left">3</td>
      </tr>
      <tr>
        <td class="rownum"><i>37</i></td>
        <td align="left">12</td>
        <td align="left">6</td>
      </tr>
      <tr>
        <td class="rownum"><i>38</i></td>
        <td align="left">12</td>
        <td align="left">9</td>
      </tr>
      <tr>
        <td class="rownum"><i>39</i></td>
        <td align="left">13</td>
        <td align="left">6</td>
      </tr>
      <tr>
        <td class="rownum"><i>40</i></td>
        <td align="left">13</td>
        <td align="left">9</td>
      </tr>
      <tr>
        <td class="rownum"><i>41</i></td>
        <td align="left">13</td>
        <td align="left">11</td>
      </tr>
      <tr>
        <td class="rownum"><i>42</i></td>
        <td align="left">14</td>
        <td align="left">1</td>
      </tr>
      <tr>
        <td class="rownum"><i>43</i></td>
        <td align="left">14</td>
        <td align="left">4</td>
      </tr>
      <tr>
        <td class="rownum"><i>44</i></td>
        <td align="left">14</td>
        <td align="left">12</td>
      </tr>
      <tr>
        <td class="rownum"><i>45</i></td>
        <td align="left">15</td>
        <td align="left">5</td>
      </tr>
      <tr>
        <td class="rownum"><i>46</i></td>
        <td align="left">15</td>
        <td align="left">6</td>
      </tr>
      <tr>
        <td class="rownum"><i>47</i></td>
        <td align="left">15</td>
        <td align="left">8</td>
      </tr>
      <tr>
        <td class="rownum"><i>48</i></td>
        <td align="left">15</td>
        <td align="left">12</td>
      </tr>
      <tr>
        <td class="rownum"><i>49</i></td>
        <td align="left">16</td>
        <td align="left">7</td>
      </tr>
      <tr>
        <td class="rownum"><i>50</i></td>
        <td align="left">16</td>
        <td align="left">10</td>
      </tr>
      <tr>
        <td class="rownum"><i>51</i></td>
        <td align="left">16</td>
        <td align="left">11</td>
      </tr>
      <tr>
        <td class="rownum"><i>52</i></td>
        <td align="left">17</td>
        <td align="left">4</td>
      </tr>
      <tr>
        <td class="rownum"><i>53</i></td>
        <td align="left">17</td>
        <td align="left">10</td>
      </tr>
      <tr>
        <td class="rownum"><i>54</i></td>
        <td align="left">17</td>
        <td align="left">11</td>
      </tr>
      <tr>
        <td class="rownum"><i>55</i></td>
        <td align="left">17</td>
        <td align="left">12</td>
      </tr>
      <tr>
        <td class="rownum"><i>56</i></td>
        <td align="left">18</td>
        <td align="left">9</td>
      </tr>
      <tr>
        <td class="rownum"><i>57</i></td>
        <td align="left">18</td>
        <td align="left">11</td>
      </tr>
      <tr>
        <td class="rownum"><i>58</i></td>
        <td align="left">18</td>
        <td align="left">12</td>
      </tr>
      <tr>
        <td class="rownum"><i>59</i></td>
        <td align="left">19</td>
        <td align="left">1</td>
      </tr>
      <tr>
        <td class="rownum"><i>60</i></td>
        <td align="left">19</td>
        <td align="left">4</td>
      </tr>
      <tr>
        <td class="rownum"><i>61</i></td>
        <td align="left">19</td>
        <td align="left">12</td>
      </tr>
      <tr>
        <td class="rownum"><i>62</i></td>
        <td align="left">20</td>
        <td align="left">5</td>
      </tr>
      <tr>
        <td class="rownum"><i>63</i></td>
        <td align="left">20</td>
        <td align="left">6</td>
      </tr>
      <tr>
        <td class="rownum"><i>64</i></td>
        <td align="left">20</td>
        <td align="left">12</td>
      </tr>
      <tr>
        <td class="rownum"><i>65</i></td>
        <td align="left">21</td>
        <td align="left">5</td>
      </tr>
      <tr>
        <td class="rownum"><i>66</i></td>
        <td align="left">21</td>
        <td align="left">10</td>
      </tr>
      <tr>
        <td class="rownum"><i>67</i></td>
        <td align="left">21</td>
        <td align="left">11</td>
      </tr>
    </table>
    <br /><br />
</div>
<i> <br> <br> Dokument erstellt von SQLiteStudio v3.4.17 am Di Jun 3 18:17:54 2025</i
    >

  <script>
  // Scrollposition beim Absenden merken
  document.querySelector("form").addEventListener("submit", function () {
    localStorage.setItem("scrollY", window.scrollY);
  });

  // Scrollposition nach dem Laden wiederherstellen
  window.addEventListener("load", function () {
    const scrollY = localStorage.getItem("scrollY");
    if (scrollY !== null) {
      window.scrollTo(0, parseInt(scrollY));
      localStorage.removeItem("scrollY"); // danach wieder löschen
    }
  });
</script>

  </body>
</html>

<?php
// Verbindung schließen
$conn->close();
?>