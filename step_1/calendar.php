<?php

$jour = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
$mois; 
$annee;
$script = $argv;
array_shift($script);

// var_dump($test);

$calendrier;

function calendar()
{
    global $script;
    global $calendrier;
    global $jours;
    global $mois;
    
    $first = $script[0];
    $second = $script[1];
    
    switch($first)
    {
        case is_numeric($first) == true :
            if(strlen($first) == '2')
            {
                $mois = date('F', strtotime($first));
            }

            elseif(strlen($first) == '4')
            {
                $annee = date('Y', strtotime($first));
            }

        break;
    }
    switch($second)
     {   
        case is_numeric($second) == true :
            if(strlen($second) == '4')
            {
                $annee = $second;
            }
        break;
        
    }
    
    switch($script)
    {
        case count($script) == "1" :
        $titre = '||' . str_pad($annee, "20", ' ', STR_PAD_BOTH) . '||';
        break;
        
        case count($script) == "2" :
        $MY = $mois . " " . $annee;
        $titre = '||' . str_pad($MY, "20", ' ', STR_PAD_BOTH) . '||';
        break;

    }
    
    $calendrier = array("Titre" => $titre, "Jour" => $jour);

    echo str_pad('', strlen($titre), '=', STR_PAD_BOTH) . PHP_EOL;
    echo  $titre . PHP_EOL;
    echo str_pad('', strlen($titre), '=', STR_PAD_BOTH) . PHP_EOL;


    $daysNumber = cal_days_in_month(CAL_GREGORIAN, $script[0], $script[1]);
    $date = implode('-', $script);
    $date = $date.'-04';

    for($day = 1; $day <= $daysNumber; $day++) {
        $day = date('D d', $day . '-' . implode('-', $script));
        echo str_pad($day, strlen($titre), ' ', STR_PAD_BOTH) . PHP_EOL;
    }
    global $jour;

//    foreach($jour as $value)
//    {
//         echo $value ;
//    }

}

calendar();
