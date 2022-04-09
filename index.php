<!DOCTYPE html>
<!--
Filip Potocnik
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP projekt</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="css/mojCSS.css" rel="stylesheet">
    </head>
    <body>
        <?php
                                                                                                $dbconn3 = pg_connect("host=www2.scptuj.si port=5432 dbname=potocnik.filip user=potocnik.filip password=ShutHouses1");
        

        
        if (!$dbconn3) {
            
            echo "Napaka pri povezavi na database.\n";
            exit;
        }
        
        $sql = "SELECT * FROM uporabniki;";
        
        $result = pg_query($dbconn3, $sql);
        
        if (!$result) {
            echo "Napaka v Query-ju.\n";
            exit;
        }
        
        echo "";

        echo "<table class='table table-striped'>";
        echo "<thead>";
        echo "<tr>
                <th>ID</th>
                <th>IME</th>
                <th>PRIIMEK</th>
                <th>USERNAME</th>
                <th>PASSWORD</th>
              </tr>";
        echo "</thead>";
        
        echo "<tbody>";

        while ($row = pg_fetch_assoc($result)) {
            
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['ime']."</td>";
            echo "<td>".$row['priimek']."</td>";
            echo "<td>".$row['username']."</td>";
            echo "<td>".$row['password']."</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        ?>
        
    </body>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</html>
