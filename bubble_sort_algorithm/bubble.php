
    <a href="../index.php">Wróć do strony głównej</a>

    <hr>

    <h2>Algorytm sorowania bąbelkowego</h2>

    <p>
        Złożoność najlepszego przypadku:    O( n ) <br>
        Złożoność przeciętnego przypadku:   O( n<sup>2</sup> )<br>
        Złożoność najgorszego przypadku:    O( n<sup>2</sup> )<br>
        <br>
        Złożoność pamięciowa:               O ( 1 )<br>

    </p>

    <hr>
        Tablica: ['55', '109', '11', '4', '95', '2', '242', '911', '53', '33', '77', '95', '354', '43', '2', '3', '95', '33', '53', '66']
        <p>Liczba elementów w tablicy: 20</p>
    <hr>

    <?php

    $tablica = ['55', '109', '11', '4', '95', '2', '242', '911', '53', '33', '77', '95', '354', '43', '2', '3', '95', '33', '53', '66'];

    $lenght = count($tablica);

    for($i = 0; $i < $lenght; $i++){

        for($j = 0; $j < $lenght - 1; $j++){

            if($tablica[$j] > $tablica[$j + 1]){ //$tablica[$j] => 55 > $tablica[$j + 1] => 109

                $temp = $tablica[$j + 1];  // 0 = 109

                $tablica[$j + 1] = $tablica[$j]; // 109 <= 11

                $tablica[$j] = $temp; //11 <= 109

            }
        }
    }

    foreach ($tablica as $value){

        echo $value." ";

    }