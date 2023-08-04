<?php

$lol = array(
    "Nic"=>
    [
        'hobi' => 'cocol sambel',
        'hobby' => 'ngebucin'
    ],
    "Vian"=>
    [
        'hobi' => 'berenang',
        'hobby' => 'makan'
    ]
);

foreach ($lol as $hobi=> $key) {
    echo "<br>".$hobi.":"."<br>";
    foreach ($key as $key1 => $value) {
        echo "<br>".$key1." "."="." ".$value."<br>";
    }
}

for ($i=0; $i < 10; $i++) { 
    echo "<br>".$i;
}

// while ($a <= 10) {
//     echo $a;
//     $a++;
// }
?>
<div class="container" border="1">
<div class="table-responsive">
    <table class="table table-primary" border="1" width=100%>
        <thead>
            <tr>
                <th scope="col"> NO</th>
                <th scope="col"> Menu</th>
                <th scope="col"> Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $a = 1;
            while ($a <= 10) {
                $t = "<tr class=''>
                    <td scope='row'>R1C1</td>
                    <td>R1C2</td>
                    <td>R1C3</td>
                </tr>";
                echo $t;
                $a++;
            }srand()
            // <tr class="">
            //     <td scope="row">Item</td>
            //     <td>Item</td>
            //     <td>Item</td>
            // </tr>
            ?>
        </tbody>
    </table>
</div>
</div>