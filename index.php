<?php
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //
    // DB Settings
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //
    $dbServer   = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dataBase = "page";
    // *** //
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //
    // Connection to DB
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //
    $dbConn = new mysqli(
        $dbServer,
        $dbUser,
        $dbPassword,
        $dataBase,
        3306
    );
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //
    // Check connection to the DB
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //
    if($dbConn->connect_error)
        die("dbConnsfehler: " . $dbConn->connect_error);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
    @layer utilities {
      .standardInputStyle {
        border: 1px solid black;
        padding: 2px;
      }
    }
  </style>
</head>
<body >
    <header>
        <?php
            include "menu.php";
        ?>
    </header>
    <main class="h-screen flex flex-col items-center justify-center py-2">
        <?php
            if(isset($_GET["page"])){
                switch($_GET["page"]){
                    case "contact":
                        include "contact.php";
                        break;
                    case "contactspeichern":
                        include "contactspeichern.php";
                        break;
                    case "admindashboard":
                        include "admindashboard.php";
                        break;
                    default:
                        include "home.php";
                        break;
                }
            }
        ?>
    </main>
    <footer>
        <?php 
            include "footer.php";
        ?>
    </footer>
    
</body>
</html>
<?php
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //
    // Close DB Connection
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //
    $dbConn->close();
?>