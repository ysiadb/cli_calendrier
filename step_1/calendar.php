<?php

$jours = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
$init = "01";
$mois;
$annee;
$script = $argv;
array_shift($script);


$calendrier;

function calendar()
{
    global $script;
    global $calendrier;
    global $jours;
    global $mois;

    
    if (count($script) == "2") {
        $first = $script[0];
        $second = $script[1];

        switch ($first) {
            case is_numeric($first) == true:
                if (strlen($first) == '2') {
                    $mois = date('F', strtotime($first . '/01/' . $second));
                    $mois_numeric = $first;

                } elseif (strlen($first) == '4') {
                    $annee = date('Y', strtotime($first . '/01/' . $second));
                    var_dump($annee);
                }
                break;
        }
        switch ($second) {
            case is_numeric($second) == true:
                if (strlen($second) == '4') {
                    $annee = date('Y', strtotime($first. '/01/' .$second));
                }
                elseif(strlen($second) == '2')
                {
                    $mois = date('F', strtotime($second . '/01/' . $second));
                    $mois_numeric = $second;

                }
                break;
        }
        $str_jours = '| ' . implode(' | ', $jours) . ' |';

        switch ($script) {
            case count($script) == "1":
                $titre = str_pad($annee, strlen($str_jours), ' ', STR_PAD_BOTH);
                break;

            case count($script) == "2":
                $titre = str_pad($mois . " " . $annee, strlen($str_jours) - "4", ' ', STR_PAD_BOTH);
                break;
        }

        $calendrier = array("Titre" => $titre, "Jour" => $jours);


        echo str_pad('', strlen($str_jours), '=', STR_PAD_BOTH) . PHP_EOL;
        echo  '||' . $titre . '||' . PHP_EOL;
        echo str_pad('', strlen($str_jours), '=', STR_PAD_BOTH) . PHP_EOL;
        echo $str_jours . PHP_EOL;



        global $init;
        $daysNumber = cal_days_in_month(CAL_GREGORIAN, $mois_numeric, $annee);


        for ($day = 1; $day <= $daysNumber; $day++) {

            $string = date('D', mktime(0, 0, 0, $mois_numeric, $day, $annee));

            switch ($day) {

                case  $string == 'Mon':
                    if (strlen($day) == '1') {

                        if ($day == '1') {
                            echo '|    ' . $day;
                        } else {
                            echo '|    ' . $day;
                        }
                    }
                    if (strlen($day) == '2') {

                        if ($day == '1') {
                            echo '|   ' . $day;
                        } else {
                            echo '|   ' . $day;
                        }
                    }
                    break;

                case  $string == 'Tue':
                    if (strlen($day) == '1') {

                        if ($day == '1') {
                            echo '      |    ' . $day;
                        } else {
                            echo '|    ' . $day;
                        }
                    }
                    if (strlen($day) == '2') {

                        if ($day == '1') {
                            echo '                       |   ' . $day;
                        } else {
                            echo '|   ' . $day;
                        }
                    }
                    break;

                case $string == 'Wed':
                    if (strlen($day) == '1') {
                        if ($day == '1') {
                            echo '            |    ' . $day;
                        } else {
                            echo '|    ' . $day;
                        }
                    }
                    if (strlen($day) == '2') {
                        if ($day == '1') {
                            echo '                       |   ' . $day;
                        } else {
                            echo '|   ' . $day;
                        }
                    }
                    break;

                case  $string == 'Thu':
                    if (strlen($day) == '1') {

                        if ($day == '1') {
                            echo '                  |    ' . $day;
                        } else {
                            echo '|    ' . $day;
                        }
                    }
                    if (strlen($day) == '2') {

                        if ($day == '1') {
                            echo '                       |   ' . $day;
                        } else {
                            echo '|   ' . $day;
                        }
                    }
                    break;

                case  $string == 'Fri':
                    if (strlen($day) == '1') {
                        if ($day == '1') {
                            echo '                        |    ' . $day;
                        } else {
                            echo '|    ' . $day;
                        }
                    }
                    if (strlen($day) == '2') {
                        if ($day == '1') {
                            echo '                        |   ' . $day;
                        } else {
                            echo '|   ' . $day;
                        }
                    }

                    break;

                case  $string == 'Sat':
                    if (strlen($day) == '1') {
                        if ($day == '1') {
                            echo '                              |    ' . $day;;
                        }
                        else
                        {

                            echo '|    ' . $day;
                        }
                        
                    }
                    if (strlen($day) == '2') {
                        echo '|   ' . $day;
                    }
                    break;

                case  $string == 'Sun':
                    if (strlen($day) == '1') {
                        if ($day == '1') {
                            echo '                                    |    ' . $day . '|' . PHP_EOL;
                            echo str_pad('', strlen($str_jours), '-', STR_PAD_BOTH) . PHP_EOL;
                        } else {
                            echo '|    ' . $day . '|' . PHP_EOL;
                            echo str_pad('', strlen($str_jours), '-', STR_PAD_BOTH) . PHP_EOL;
                        }
                    }
                    if (strlen($day) == '2') {
                        if ($day == '1') {
                            echo '                  |  ' . $day . '|' . PHP_EOL;
                            echo str_pad('', strlen($str_jours), '-', STR_PAD_BOTH) . PHP_EOL;
                        } else {
                            echo '|   ' . $day . '|' . PHP_EOL;
                            echo str_pad('', strlen($str_jours), '-', STR_PAD_BOTH) . PHP_EOL;
                        }
                    }

                    break;

                }



            // if (date('D', $script[0] . "/". ))
            // $day = date('D d', mktime(0, 0, 0, $script[0], $day, $script[1]));
            // echo str_pad($day, strlen($str_jours), ' ', STR_PAD_BOTH) . PHP_EOL;
        }
    }

    if (count($script) == "1") {
        $script = implode(' ', $script);
        $script = explode('-', $script);

        $first = $script[0];
        $second = $script[1];
    
            switch ($first) {
                case is_numeric($first) == true:
                    if (strlen($first) == '2') {
                        $mois = date('F', strtotime($first . '/01/' . $second));
                        $mois_numeric = $first;
                    } elseif (strlen($first) == '4') {
                        $annee = date('Y', strtotime($first . '/01/' . $second));
                    }
                    break;
            }
            switch ($second) {
                case is_numeric($second) == true:
                    if (strlen($second) == '4') {
                        $annee = date('Y', strtotime($first . '/01/' . $second));
                    }
                    if (strlen($second) == '2') {
                        $mois = date('F', strtotime($second . '/01/' . $first));
                        $mois_numeric = $second;
                    }
                    break;
            }
            $str_jours = '| ' . implode(' | ', $jours) . ' |';
    
            switch ($script) {
                case count($script) == "1":
                    $titre = str_pad($annee, strlen($str_jours), ' ', STR_PAD_BOTH);
                    break;
    
                case count($script) == "2":
                    $titre = str_pad($mois . " " . $annee, strlen($str_jours) - "4", ' ', STR_PAD_BOTH);
                    $daysNumber = cal_days_in_month(CAL_GREGORIAN, $mois_numeric, $annee);

                    break;
            }
    
            $calendrier = array("Titre" => $titre, "Jour" => $jours);
    
    
            echo str_pad('', strlen($str_jours), '=', STR_PAD_BOTH) . PHP_EOL;
            echo  '||' . $titre . '||' . PHP_EOL;
            echo str_pad('', strlen($str_jours), '=', STR_PAD_BOTH) . PHP_EOL;
            echo $str_jours . PHP_EOL;
    
    
    
            global $init;
    
    
            for ($day = 1; $day <= $daysNumber; $day++) {
    
                $string = date('D', mktime(0, 0, 0, $mois_numeric, $day, $annee));
    
                switch ($day) {
    
                    case  $string == 'Mon':
                        if (strlen($day) == '1') {
    
                            if ($day == '1') {
                                echo '|    ' . $day;
                            } else {
                                echo '|    ' . $day;
                            }
                        }
                        if (strlen($day) == '2') {
    
                            if ($day == '1') {
                                echo '|   ' . $day;
                            } else {
                                echo '|   ' . $day;
                            }
                        }
                        break;
    
                    case  $string == 'Tue':
                        if (strlen($day) == '1') {
    
                            if ($day == '1') {
                                echo '      |    ' . $day;
                            } else {
                                echo '|    ' . $day;
                            }
                        }
                        if (strlen($day) == '2') {
    
                            if ($day == '1') {
                                echo '                       |   ' . $day;
                            } else {
                                echo '|   ' . $day;
                            }
                        }
                        break;
    
                    case $string == 'Wed':
                        if (strlen($day) == '1') {
                            if ($day == '1') {
                                echo '            |    ' . $day;
                            } else {
                                echo '|    ' . $day;
                            }
                        }
                        if (strlen($day) == '2') {
                            if ($day == '1') {
                                echo '                       |   ' . $day;
                            } else {
                                echo '|   ' . $day;
                            }
                        }
                        break;
    
                    case  $string == 'Thu':
                        if (strlen($day) == '1') {
    
                            if ($day == '1') {
                                echo '                  |    ' . $day;
                            } else {
                                echo '|    ' . $day;
                            }
                        }
                        if (strlen($day) == '2') {
    
                            if ($day == '1') {
                                echo '                       |   ' . $day;
                            } else {
                                echo '|   ' . $day;
                            }
                        }
                        break;
    
                    case  $string == 'Fri':
                        if (strlen($day) == '1') {
                            if ($day == '1') {
                                echo '                        |    ' . $day;
                            } else {
                                echo '|    ' . $day;
                            }
                        }
                        if (strlen($day) == '2') {
                            if ($day == '1') {
                                echo '                        |   ' . $day;
                            } else {
                                echo '|   ' . $day;
                            }
                        }
    
                        break;
    
                    case  $string == 'Sat':
                        if (strlen($day) == '1') {
                            if ($day == '1') {
                                echo '                              |    ' . $day;;
                            }
                            else
                            {
    
                                echo '|    ' . $day;
                            }
                            
                        }
                        if (strlen($day) == '2') {
                            echo '|   ' . $day;
                        }
                        break;
    
                    case  $string == 'Sun':
                        if (strlen($day) == '1') {
                            if ($day == '1') {
                                echo '                                    |    ' . $day . '|' . PHP_EOL;
                                echo str_pad('', strlen($str_jours), '-', STR_PAD_BOTH) . PHP_EOL;
                            } else {
                                echo '|    ' . $day . '|' . PHP_EOL;
                                echo str_pad('', strlen($str_jours), '-', STR_PAD_BOTH) . PHP_EOL;
                            }
                        }
                        if (strlen($day) == '2') {
                            if ($day == '1') {
                                echo '                  |  ' . $day . '|' . PHP_EOL;
                                echo str_pad('', strlen($str_jours), '-', STR_PAD_BOTH) . PHP_EOL;
                            } else {
                                echo '|   ' . $day . '|' . PHP_EOL;
                                echo str_pad('', strlen($str_jours), '-', STR_PAD_BOTH) . PHP_EOL;
                            }
                        }
    
                        break;
    
                    }
    
    
    
                // if (date('D', $script[0] . "/". ))
                // $day = date('D d', mktime(0, 0, 0, $script[0], $day, $script[1]));
                // echo str_pad($day, strlen($str_jours), ' ', STR_PAD_BOTH) . PHP_EOL;
            }
        

    }

    // setlocale(LC_TIME, "fr_FR");
    // echo strftime("%G,%Y",strtotime($date)) . "\n";
    // echo strftime('%d',strtotime($date)) . "\n";

    global $jour;
    echo PHP_EOL;
}


calendar();
