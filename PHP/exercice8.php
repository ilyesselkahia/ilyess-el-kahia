<ul>
    <?php
    $infoSquad = [
        'Ilyess' => [
            'nom' => 'EL KAHIA',
            'prénom' => 'Ilyess',
            'age' => '35 ans',
            'sexe' => 'Homme',
            'ville' => 'Agadir',
        ],

        'Youssef' => [
            'nom' => 'DIOUNI',
            'prénom' => 'Youssef',
            'age' => '24 ans',
            'sexe' => 'Homme',
            'ville' => 'Casablanca',
        ],

        'Ziad' => [
            'nom' => 'TIARIMITI',
            'prénom' => 'Ziad',
            'age' => '20 ans',
            'sexe' => 'Homme',
            'ville' => 'Agadir',
        ],

        'Amine' => [
            'nom' => 'Saila',
            'prénom' => 'Amine',
            'age' => '24 ans',
            'sexe' => 'Homme',
            'ville' => 'Sidi Hmed',
        ],

        'Zakaria' => [
            'nom' => 'ZAKARIA',
            'prénom' => 'Zakaria',
            'age' => '24 ans',
            'sexe' => 'Homme',
            'ville' => 'Youssoufia',
        ],

        'Abdelilah' => [
            'nom' => 'ABDELILAH',
            'prénom' => 'Abdelilah',
            'age' => '24 ans',
            'sexe' => 'Homme',
            'ville' => 'Youssoufia',
        ],

        
    ];

    $infoSquad['formation'] = 'WebDev';


    foreach ($infoSquad as $info => $liste) {
        foreach($liste as $menbre) {
            echo "<li>$menbre</li><br><br>";
        }
    }
    ?>
</ul>