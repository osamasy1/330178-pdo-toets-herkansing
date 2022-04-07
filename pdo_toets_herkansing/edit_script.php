<?php
    try{
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "pdo_toets_herkansing";

        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("UPDATE burrito set burritoformaat = :burritoformaat, saus = :saus, 
        bonen= :bonen, rijst = :rijst WHERE id = :id");


        $stmt->bindParam(":burritoformaat", $burritoformaat);
        $stmt->bindParam("saus", $saus);
        $stmt->bindParam("bonen", $bonen);
        $stmt->bindParam(":rijst", $rijst);
        $stmt->bindParam(":id", $id);

        
        $id = $_POST["id"];
        $burritoformaat = $_POST["burritoformaat"];
            $saus = $_POST["saus"];
            $bonen = $_POST["bonen"];
            $rijst = $_POST["rijst"];

            $stmt->execute();


            if($stmt == true){
                echo "Het is goed gewijzigd";
                header("Refresh: 3; url=./index.php?message=goed");
            }

    }catch(ErrorException $e){
        print("Error: " . $e->getMessage());
    }
