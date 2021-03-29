<html>
    <head>
        <title> Konversi Tipe </title>
    </head>
    <body>
        <?php
        //variable a
            $a = 300.4;
            echo $a;
            echo "<br>";
            echo "tipe Double : ", doubleval($a), "<br>";
            // Output : menjadi tipe double = 300.4
            echo "tipe Integer : ", intval($a), "<br>";
            // Output : menjadi tipe integer = 300
            echo "tipe String : ", strval($a);
            // Output : menjadi tipe string = 300.4
        ?>
    </body>
</html> 