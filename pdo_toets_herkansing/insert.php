<?php
    if(isset($_POST["submit"])){        
        try{
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "pdo_toets_herkansing";

            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $conn->prepare("INSERT INTO burrito (id, burritoformaat, saus, bonen, rijst)
            VALUES (:id, :burritoformaat, :saus, :bonen, :rijst");

            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":burritoformaat", $burritoformaat);
            $stmt->bindParam(":saus", $saus);
            $stmt->bindParam(":bonen", $bonen);
            $stmt->bindParam(":rijst", $rijst);

            $id = null;
            $burritoformaat = $_POST["burritoformaat"];
            $saus = $_POST["saus"];
            $bonen = $_POST["bonen"];
            $rijst = $_POST["rijst"];
            $stmt->execute();

            echo "Het is gelukt";
            header("Refresh: 3; url=./index.php?message=success");
        }catch(ErrorException $e){
            print("Error: " . $e->getMessage());
        }
    }
?>