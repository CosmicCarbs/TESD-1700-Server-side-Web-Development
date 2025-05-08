<?php
    require('header.php');
?>

<?php
    $servername = "localhost";  
    $username = "root";
    $password = "";                      
    $dbname = "emaillist";      

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    echo '<pre>';
    var_dump($_POST); 
    echo '</pre>';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format. Please try again.";
            exit();
        } else {
            echo "Valid email: " . $email . "<br>";
        }

        $preferences = [];
        $projects = [
            'PkmnTundra', 'EternalWinter', 'UpgradeAcademy', 'RicoSeige',
            'OfAngelsOfDemons', 'PkmnVR', '60SecsIsland', 'NS:SeaTurtle', 'BestGame', 'Concepts'
        ];

        foreach ($projects as $project) {
            $preferences[$project] = isset($_POST[$project]) ? 1 : 0;
            echo "$project: " . $preferences[$project] . "<br>";  
        }

        $stmt = $conn->prepare("INSERT INTO emaillist (email, PkmnTundra, EternalWinter, UpgradeAcademy, 
            RicoSeige, OfAngelsOfDemons, PkmnVR, 60SecsIsland, NS:SeaTurtle, BestGame, Concepts)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        if ($stmt === false) {
            echo "Failed to prepare the SQL statement: " . $conn->error;
            exit();
        }

        echo "Prepared SQL statement: INSERT INTO emaillist (email, PkmnTundra, EternalWinter, UpgradeAcademy, 
            RicoSeige, OfAngelsOfDemons, PkmnVR, 60SecsIsland, NS:SeaTurtle, BestGame, Concepts) 
            VALUES ('" . $email . "', " . implode(", ", $preferences) . ")<br>";

        $stmt->bind_param("siiiiiiiiii", $email, $preferences['PkmnTundra'], $preferences['EternalWinter'], 
            $preferences['UpgradeAcademy'], $preferences['RicoSeige'], $preferences['OfAngelsOfDemons'], 
            $preferences['PkmnVR'], $preferences['60SecsIsland'], $preferences['NS:SeaTurtle'], 
            $preferences['BestGame'], $preferences['Concepts']);

        if ($stmt->execute()) {
            echo "Your preferences have been saved successfully!";
            die();
        } else {
            echo "There was an error saving your preferences: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }
?>

<?php
    require('footer.php');
?>
