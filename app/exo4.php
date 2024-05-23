<?php

$array = [12, 65, 95, 41, 85, 63, 71, 64];

$arrayA = [12, "le", 95, 12, 85, "le", 71, "toi", 95, "la"];
$arrayB = [85, "toi", 95, "la", 65, 94, 85, "avec", 37, "chat"];

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <title>Introduction PHP - Exo 4</title>
</head>

<body class="dark-template">
    <div class="container">
        <header class="header">
            <h1 class="main-ttl">Introduction PHP - Exo 4</h1>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li><a href="index.php" class="main-nav-link">Entrainement</a></li>
                    <li><a href="exo2.php" class="main-nav-link">Donnez moi des fruits</a></li>
                    <li><a href="exo3.php" class="main-nav-link">Donnez moi de la thune</a></li>
                    <li><a href="exo4.php" class="main-nav-link active">Donnez moi des fonctions</a></li>
                    <li><a href="exo5.php" class="main-nav-link">Netflix</a></li>
                    <li><a href="exo6.php" class="main-nav-link">Mini-site</a></li>
                </ul>
            </nav>
        </header>

        <!-- QUESTION 1 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 1</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau et retourne la chaîne de caractère HTML permettant d'afficher les valeurs du tableau sous la forme d'une liste.</p>
            <div class="exercice-sandbox">
                <ul>
                    <?php
                    function turnArrayHtml(array $array): string
                    {
                        $html = "";
                        foreach ($array as $value) {
                            $html .= "<li>{$value}</li>";
                        }
                        return $html;
                    }
                    echo turnArrayHtml($array);
                    ?>
                </ul>

            </div>
        </section>

        <!-- QUESTION 2 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 2</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau d'entiers et retourne uniquement les valeurs paires. Afficher les valeurs du tableau sous la forme d'une liste HTML.</p>
            <div class="exercice-sandbox">
                <ul>
                    <?php
                    /**
                     * 
                     *
                     * @param array 
                     *
                     * @return string 
                     */
                    function getEvenValuesAsHtmlList(array $arrayA): string
                    {
                        $html = '';
                        $evenValues = [];

                        foreach ($arrayA as $value) {
                            if (is_int($value) && $value % 2 === 0) {
                                $evenValues[] = $value;
                            }
                        }
                        foreach ($evenValues as $value) {
                            $html .= "<li>{$value}</li>";
                        }
                        return $html;
                    }
                    echo getEvenValuesAsHtmlList($arrayA);
                    ?>
                </ul>
            </div>
        </section>

        <!-- QUESTION 3 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 3</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau d'entiers et retourne uniquement les entiers d'index pair</p>
            <div class="exercice-sandbox">
                <?php
                function getEvenIndexValues($array)
                {
                    $result = array();
                    for ($i = 0; $i < count($array); $i++) {
                        if ($i % 2 == 0) {
                            $result[] = $array[$i];
                        }
                    }
                    return $result;
                }

                $evenIndexValues = getEvenIndexValues($array);
                var_dump($evenIndexValues);

                ?>
            </div>
        </section>

        <!-- QUESTION 4 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau d'entiers. La fonction doit retourner les valeurs du tableau mulipliées par 2.</p>
            <div class="exercice-sandbox">
                <?php
                function multiplyByTwo($array)
                {
                    $result = array();
                    foreach ($array as $value) {
                        $result[] = $value * 2;
                    }
                    return $result;
                }

                $multipliedArray = multiplyByTwo($array);
                var_dump($multipliedArray);
                ?>
            </div>
        </section>

        <!-- QUESTION 4 bis -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4 bis</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau d'entiers et un entier. La fonction doit retourner les valeurs du tableau divisées par le second paramètre</p>
            <div class="exercice-sandbox">
                <?php
                function divideByNumber($array, $number)
                {

                    $result = [];
                    foreach ($array as $value) {
                        $result[] = $value / $number;
                    }
                    return $result;
                }
                var_dump(divideByNumber($array, 3));

                ?>
            </div>
        </section>

        <!-- QUESTION 5 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 5</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau d'entiers ou de chaînes de caractères et retourne le tableau sans doublons</p>
            <div class="exercice-sandbox">
                <?php
                function removeDuplicates($arrayA)
                {
                    return array_unique($arrayA);
                }

                $arrayWithoutDuplicates = removeDuplicates($arrayA);
                var_dump($arrayWithoutDuplicates);

                ?>
            </div>
        </section>

        <!-- QUESTION 6 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 6</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre 2 tableaux et retourne un tableau représentant l'intersection des 2</p>
            <div class="exercice-sandbox">
                <?php
                function getArrayIntersection($arrayA, $arrayB)
                {
                    return array_intersect($arrayA, $arrayB);
                }

                $intersectionArray = getArrayIntersection($arrayA, $arrayB);
                var_dump($intersectionArray);

                ?>
            </div>
        </section>

        <!-- QUESTION 7 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 7</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre 2 tableaux et retourne un tableau des valeurs du premier tableau qui ne sont pas dans le second</p>
            <div class="exercice-sandbox">
                <?php
                function compareArray($arrayA, $arrayB)
                {
                    return array_diff($arrayA, $arrayB);
                }

                $diffArray = compareArray($arrayA, $arrayB);
                var_dump($diffArray);

                ?>
            </div>
        </section>


        <!-- QUESTION 8 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 8</h2>
            <p class="exercice-txt">Réécrire la fonction précédente pour lui ajouter un paramètre booléen facultatif. Si celui-ci est à true, le tableau retourné sera sans doublons</p>
            <div class="exercice-sandbox">
                <?php
                function compareTwoArray($arrayA, $arrayB, $removeDuplicates = false)
                {
                    $diffArray = array_values(array_diff($arrayA, $arrayB));
                    if ($removeDuplicates) {
                        $diffArray = array_unique($diffArray);
                    }
                    return $diffArray;
                }

                var_dump(compareTwoArray($arrayA, $arrayB, true));
                ?>
            </div>
        </section>


        <!-- QUESTION 9 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 9</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau et un entier et retourne les n premiers éléments du tableau.</p>
            <div class="exercice-sandbox">
                <?php
                function getFirstElements($array, $n)
                {
                    if ($n < 0 || $n > count($array)) {
                        return "Erreur : La valeur de n doit être comprise entre 0 et " . count($array);
                    }

                    return array_slice($array, 0, $n);
                }

                $firstElements = getFirstElements($arrayB, 5);

                if (is_array($firstElements)) {
                    var_dump ($firstElements);
                } else {
                    echo $firstElements;
                }
                ?>
            </div>
        </section>
    </div>
    <div class="copyright">© Guillaume Belleuvre, 2023 - DWWM</div>
</body>

</html>