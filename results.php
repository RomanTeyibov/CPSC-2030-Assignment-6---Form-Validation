<?php
// TAKES A BOOLEAN ARRAY, CHECKS TO MAKE SURE IT DOES NOT CONTAIN FALSE, AND OUTPUTS THE VALID FORM DATA
function displayResults($val_results)
{
    if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST")
    {
        $foundFalse = in_array(false, $val_results);
        if(!$foundFalse)
        {
            $animalList = listAllAnimals();
            echo ' <div class="results">

                        <div class="result-text"> Your email address is: ' . $_POST['email'] . '</div>

                        <div class="result-text"> Your favorite animals are: ' . $animalList . '</div>

                        <div class="result-text">Your favourite date is: ' . $_POST['date'] . '</div>

                    </div>';
        }
    }
}

function listAllAnimals()
{
    $animalList = "<ul>";
    
    foreach($_POST['animals'] as $animal)
    {
        $animalList .= "<li>$animal</li>";
    }
    $animalList .= "</ul>";
    
    return $animalList;
}
