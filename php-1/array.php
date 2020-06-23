<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>

<body>
    <h1>Berlatih Array</h1>

    <?php
    echo "<h3> Soal No 1 </h3>";
    /* 
            SOAL NO 1
            Kelompokkan nama-nama di bawah ini ke dalam Array.
            Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
            Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
        */
    $kids = array("Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"); // Lengkapi di sini
    echo "<pre>";
    print_r($kids);
    echo "</pre>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    $adults = array("Hopper", "Nancy",  "Joyce", "Jonathan", "Murray");

    echo "<pre>";
    print_r($adults);
    echo "</pre>";
    echo "<h3> Soal No 2</h3>";

    /* 
            SOAL NO 2
            Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
        */
    echo "Cast Stranger Things: ";
    echo "<br>";
    echo "Total Kids: " . count($kids); // Berapa panjang array kids
    echo "<br>";
    echo "<ol>";
    echo "<li> $kids[0] </li>";
    echo "<li> $kids[1] </li>";
    echo "<li> $kids[2] </li>";
    echo "<li> $kids[3] </li>";
    echo "<li> $kids[4] </li>";
    echo "<li> $kids[5] </li>";

    // Lanjutkan

    echo "</ol>";

    echo "Total Adults: " . count($adults); // Berapa panjang array adults
    echo "<br>";
    echo "<ol>";
    echo "<li> $adults[0] </li>";
    echo "<li> $adults[1] </li>";
    echo "<li> $adults[2] </li>";
    echo "<li> $adults[3] </li>";
    echo "<li> $adults[4] </li>";
    // Lanjutkan

    echo "</ol>";

    echo "<br>";
    echo "<h3>Soal No 3</h3>";


    /*
            SOAL No 3
            Susun data-data berikut ke dalam bentuk Asosiatif Array (Array Multidimensi)
            
            Name: "Will Byers"
            Age: 12,
            Aliases: "Will the Wise"
            Status: "Alive"

            Name: "Mike Wheeler"
            Age: 12,
            Aliases: "Dungeon Master"
            Status: "Alive"

            Name: "Jim Hopper"
            Age: 43,
            Aliases: "Chief Hopper"
            Status: "Deceased"

            Name: "Eleven"
            Age: 12,
            Aliases: "El"
            Status: "Alive"
            
        */
    $biodata = [
        ["nama" => "Will Byers", "age" => 12, "aliases" => "Will the Wise", "status" => "Alive"],
        ["nama" => "Mike Wheeler", "age" => 12, "aliases" => "Dungeon Master", "status" => "Alive"],
        ["nama" => "Jim Hopper", "age" => 43, "aliases" => "Chief Hopper", "status" => "Deceased"],
        ["nama" => "Eleven", "age" => 12, "aliases" => "El", "status" => "Alive"]
    ];
    print_r($biodata);

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<h4>Cetak dengan Foreach:</h4>";

    foreach ($biodata as $cetak) {
        echo "Nama : " . $cetak["nama"] . "<br>";
        echo "Age : " . $cetak["age"] . "<br>";
        echo "Aliases : " . $cetak["aliases"] . "<br>";
        echo "Status : " . $cetak["status"] . "<br><br>";
    }


    //cara lain
    echo "<br>";
    echo "<br>";

    echo '<pre>';
    print_r($biodata);
    echo '</pre>';
    foreach ($biodata as $bio => $biodata) {
        foreach ($biodata as $bios => $biosx) {
            echo ucfirst($bios) . ": $biosx <br>";
        }
    }

    ?>
</body>

</html>