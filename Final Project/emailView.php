<?php
    require('header.php');

    $servername = "localhost";  
    $username = "root";         
    $password = "";            
    $dbname = "emaillist";      

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sort_by = isset($_GET['sort_by']) ? $_GET['sort_by'] : 'email'; 
    $sort_order = isset($_GET['sort_order']) ? $_GET['sort_order'] : 'ASC'; 

    $query = "SELECT * FROM emaillist ORDER BY $sort_by $sort_order";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        echo "<h1 style='color: white;'>Email List</h1>";

        echo "<p style='color: white;'>Sort by:</p>";
        echo "<form method='GET' action='viewEmails.php'>";
        echo "<select name='sort_by' style='font-size: 1.2em; padding: 5px;'>";
        echo "<option value='email' " . ($sort_by == 'email' ? 'selected' : '') . ">Email</option>";
        echo "<option value='PkmnTundra' " . ($sort_by == 'PkmnTundra' ? 'selected' : '') . ">Pokemon: Tundra</option>";
        echo "<option value='EternalWinter' " . ($sort_by == 'EternalWinter' ? 'selected' : '') . ">Eternal Winter</option>";
        echo "<option value='UpgradeAcademy' " . ($sort_by == 'UpgradeAcademy' ? 'selected' : '') . ">Upgrade Academy</option>";
        echo "<option value='RicoSeige' " . ($sort_by == 'RicoSeige' ? 'selected' : '') . ">RicoSeige</option>";
        echo "<option value='OfAngelsOfDemons' " . ($sort_by == 'OfAngelsOfDemons' ? 'selected' : '') . ">Of Angels/Of Demons</option>";
        echo "<option value='PkmnVR' " . ($sort_by == 'PkmnVR' ? 'selected' : '') . ">PokemonVR</option>";
        echo "<option value='60SecsIsland' " . ($sort_by == '60SecsIsland' ? 'selected' : '') . ">60 Seconds: Island</option>";
        echo "<option value='NS_SeaTurtle' " . ($sort_by == 'NS_SeaTurtle' ? 'selected' : '') . ">NS: Sea Turtle</option>";
        echo "<option value='BestGame' " . ($sort_by == 'BestGame' ? 'selected' : '') . ">Best Game</option>";
        echo "<option value='Concepts' " . ($sort_by == 'Concepts' ? 'selected' : '') . ">Concepts</option>";
        echo "</select>";
        echo "<select name='sort_order' style='font-size: 1.2em; padding: 5px;'>";
        echo "<option value='ASC' " . ($sort_order == 'ASC' ? 'selected' : '') . ">Ascending</option>";
        echo "<option value='DESC' " . ($sort_order == 'DESC' ? 'selected' : '') . ">Descending</option>";
        echo "</select>";
        echo "<input type='submit' value='Sort' style='font-size: 1.2em; padding: 5px 10px; cursor: pointer;' />";
        echo "</form>";

        echo "<table border='1' cellpadding='10' cellspacing='0' style='border-collapse: collapse; margin-top: 20px;'>";
        echo "<tr style='background-color: #f2f2f2;'>
                <th>Email</th>
                <th>Pokemon: Tundra</th>
                <th>Eternal Winter</th>
                <th>Upgrade Academy</th>
                <th>RicoSeige</th>
                <th>Of Angels/Of Demons</th>
                <th>PokemonVR</th>
                <th>60 Seconds: Island</th>
                <th>NS: Sea Turtle</th>
                <th>Best Game</th>
                <th>Concepts</th>
              </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['email']) . "</td>";
            echo "<td>" . ($row['PkmnTundra'] ? 'Yes' : 'No') . "</td>";
            echo "<td>" . ($row['EternalWinter'] ? 'Yes' : 'No') . "</td>";
            echo "<td>" . ($row['UpgradeAcademy'] ? 'Yes' : 'No') . "</td>";
            echo "<td>" . ($row['RicoSeige'] ? 'Yes' : 'No') . "</td>";
            echo "<td>" . ($row['OfAngelsOfDemons'] ? 'Yes' : 'No') . "</td>";
            echo "<td>" . ($row['PkmnVR'] ? 'Yes' : 'No') . "</td>";
            echo "<td>" . ($row['60SecsIsland'] ? 'Yes' : 'No') . "</td>";
            echo "<td>" . ($row['NS_SeaTurtle'] ? 'Yes' : 'No') . "</td>";
            echo "<td>" . ($row['BestGame'] ? 'Yes' : 'No') . "</td>";
            echo "<td>" . ($row['Concepts'] ? 'Yes' : 'No') . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<p style='color: white;'>No records found.</p>";
    }

    $conn->close();

    require('footer.php');
?>
