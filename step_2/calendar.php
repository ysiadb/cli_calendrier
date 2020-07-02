<?php

$jours = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
$init = "01";
$mois = ['', '01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'];
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


    if (count($script) == "1") {
        $annee = implode('', $script);
        $mm = $mois;
        $ref = date('F', mktime(0, 0, 0, $mm[1], 0, $annee));


        foreach ($mm as $value) {

            switch ($value) {
                case $value == '01':
                    switch ($annee) {
                        case is_numeric($annee) == true:
                            if (strlen($annee) == '4') {
                                $mois_numeric = $mm[1];
                                $mois = date('F', mktime(0, 0, 0, $mois_numeric, 0, $annee));
                                $annee = date('Y', strtotime($mois_numeric . '/01/' . $annee));
                            }
                            break;
                    }

                    $str_jours = '| ' . implode(' | ', $jours) . ' |';

                    switch ($script) {
                        case count($script) == "1":
                            $titre = str_pad($annee, strlen($str_jours), ' ', STR_PAD_BOTH);
                            break;
                    }
                    break;


                case $value == "02":
                    switch ($annee) {
                        case is_numeric($annee) == true:
                            if (strlen($annee) == '4') {
                                $mois_numeric = $mm[2];
                                $mois = date('F', mktime(0, 0, 0, $mois_numeric, 0, $annee));
                                $annee = date('Y', strtotime($mois_numeric . '/01/' . $annee));
                            }
                            break;
                    }

                    $str_jours = '| ' . implode(' | ', $jours) . ' |';

                    switch ($script) {
                        case count($script) == "1":
                            $titre = str_pad($annee, strlen($str_jours), ' ', STR_PAD_BOTH);
                            break;
                    }
                    break;

                case $value == '03':
                    switch ($annee) {
                        case is_numeric($annee) == true:
                            if (strlen($annee) == '4') {
                                $mois_numeric = $mm[3];
                                $mois = date('F', mktime(0, 0, 0, $mois_numeric, 0, $annee));
                                $annee = date('Y', strtotime($mois_numeric . '/01/' . $annee));
                            }
                            break;
                    }

                    $str_jours = '| ' . implode(' | ', $jours) . ' |';

                    switch ($script) {
                        case count($script) == "1":
                            $titre = str_pad($annee, strlen($str_jours), ' ', STR_PAD_BOTH);
                            break;
                    }
                    break;

                case $value == '04':
                    switch ($annee) {
                        case is_numeric($annee) == true:
                            if (strlen($annee) == '4') {
                                $mois_numeric = $mm[4];
                                $mois = date('F', mktime(0, 0, 0, $mois_numeric, 0, $annee));
                                $annee = date('Y', strtotime($mois_numeric . '/01/' . $annee));
                            }
                            break;
                    }

                    $str_jours = '| ' . implode(' | ', $jours) . ' |';

                    switch ($script) {
                        case count($script) == "1":
                            $titre = str_pad($annee, strlen($str_jours), ' ', STR_PAD_BOTH);
                            break;
                    }
                    break;

                case $value == '05':
                    switch ($annee) {
                        case is_numeric($annee) == true:
                            if (strlen($annee) == '4') {
                                $mois_numeric = $mm[5];
                                $mois = date('F', mktime(0, 0, 0, $mois_numeric, 0, $annee));
                                $annee = date('Y', strtotime($mois_numeric . '/01/' . $annee));
                            }
                            break;
                    }

                    $str_jours = '| ' . implode(' | ', $jours) . ' |';

                    switch ($script) {
                        case count($script) == "1":
                            $titre = str_pad($annee, strlen($str_jours), ' ', STR_PAD_BOTH);
                            break;
                    }
                    break;

                case $value == '06':
                    switch ($annee) {
                        case is_numeric($annee) == true:
                            if (strlen($annee) == '4') {
                                $mois_numeric = $mm[6];
                                $mois = date('F', mktime(0, 0, 0, $mois_numeric, 0, $annee));
                                $annee = date('Y', strtotime($mois_numeric . '/01/' . $annee));
                            }
                            break;
                    }

                    $str_jours = '| ' . implode(' | ', $jours) . ' |';

                    switch ($script) {
                        case count($script) == "1":
                            $titre = str_pad($annee, strlen($str_jours), ' ', STR_PAD_BOTH);
                            break;
                    }
                    break;

                case $value == '07':
                    switch ($annee) {
                        case is_numeric($annee) == true:
                            if (strlen($annee) == '4') {
                                $mois_numeric = $mm[7];
                                $mois = date('F', mktime(0, 0, 0, $mois_numeric, 0, $annee));
                                $annee = date('Y', strtotime($mois_numeric . '/01/' . $annee));
                            }
                            break;
                    }

                    $str_jours = '| ' . implode(' | ', $jours) . ' |';

                    switch ($script) {
                        case count($script) == "1":
                            $titre = str_pad($annee, strlen($str_jours), ' ', STR_PAD_BOTH);
                            break;
                    }
                    break;


                case $value == '08':
                    switch ($annee) {
                        case is_numeric($annee) == true:
                            if (strlen($annee) == '4') {
                                $mois_numeric = $mm[8];
                                $mois = date('F', mktime(0, 0, 0, $mois_numeric, 0, $annee));
                                $annee = date('Y', strtotime($mois_numeric . '/01/' . $annee));
                            }
                            break;
                    }

                    $str_jours = '| ' . implode(' | ', $jours) . ' |';

                    switch ($script) {
                        case count($script) == "1":
                            $titre = str_pad($annee, strlen($str_jours), ' ', STR_PAD_BOTH);
                            break;
                    }
                    break;

                case $value == '09':
                    switch ($annee) {
                        case is_numeric($annee) == true:
                            if (strlen($annee) == '4') {
                                $mois_numeric = $mm[9];
                                $mois = date('F', mktime(0, 0, 0, $mois_numeric, 0, $annee));
                                $annee = date('Y', strtotime($mois_numeric . '/01/' . $annee));
                            }
                            break;
                    }

                    $str_jours = '| ' . implode(' | ', $jours) . ' |';

                    switch ($script) {
                        case count($script) == "1":
                            $titre = str_pad($annee, strlen($str_jours), ' ', STR_PAD_BOTH);
                            break;
                    }
                    break;

                case $value == '10':
                    switch ($annee) {
                        case is_numeric($annee) == true:
                            if (strlen($annee) == '4') {
                                $mois_numeric = $mm[10];
                                $mois = date('F', mktime(0, 0, 0, $mois_numeric, 0, $annee));
                                $annee = date('Y', strtotime($mois_numeric . '/01/' . $annee));
                            }
                            break;
                    }

                    $str_jours = '| ' . implode(' | ', $jours) . ' |';

                    switch ($script) {
                        case count($script) == "1":
                            $titre = str_pad($annee, strlen($str_jours), ' ', STR_PAD_BOTH);
                            break;
                    }
                    break;

                case $value == '11':
                    switch ($annee) {
                        case is_numeric($annee) == true:
                            if (strlen($annee) == '4') {
                                $mois_numeric = $mm[11];
                                $mois = date('F', mktime(0, 0, 0, $mois_numeric, 0, $annee));
                                $annee = date('Y', strtotime($mois_numeric . '/01/' . $annee));
                            }
                            break;
                    }

                    $str_jours = '| ' . implode(' | ', $jours) . ' |';

                    switch ($script) {
                        case count($script) == "1":
                            $titre = str_pad($annee, strlen($str_jours), ' ', STR_PAD_BOTH);
                            break;
                    }
                    break;

                case $value == '12':
                    switch ($annee) {
                        case is_numeric($annee) == true:
                            if (strlen($annee) == '4') {
                                $mois_numeric = $mm[12];
                                $mois = date('F', mktime(0, 0, 0, $mois_numeric, 0, $annee));
                                $annee = date('Y', strtotime($mois_numeric . '/01/' . $annee));
                            }
                            break;
                    }

                    $str_jours = '| ' . implode(' | ', $jours) . ' |';

            }
        }
        $calendrier = array("Titre" => $titre, "Jour" => $jours);



        $daysNumber = cal_days_in_month(CAL_GREGORIAN, $mois_numeric, $annee);

        for ($month = 01; $month <= 12; $month++) {

            $new_month = date('F', mktime(0, 0, 0, $month, '01', $annee));
            $titre = str_pad($new_month . " " . $annee, strlen($str_jours) - '4', ' ', STR_PAD_BOTH);


            echo str_pad('', strlen($str_jours), '=', STR_PAD_BOTH) . PHP_EOL;
            echo  '||' . $titre . '||' . PHP_EOL;
            echo str_pad('', strlen($str_jours), '=', STR_PAD_BOTH) . PHP_EOL;
            echo $str_jours . PHP_EOL;

            for ($day = 1; $day <= $daysNumber; $day++) {

                $string = date('D', mktime(0, 0, 0, $month, $day, $annee));

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
                            } else {

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
                }
                echo PHP_EOL . PHP_EOL . PHP_EOL;
        }
    }

}

calendar();
