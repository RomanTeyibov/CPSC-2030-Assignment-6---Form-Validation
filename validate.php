<?php
// CHECK EACH INPUT FOR VALID OR INVALID
// RETURNS TRUE OR FALSE
// ON FALSE, ALSO ECHOES ERROR MESSAGE
function validate($type)
{
    if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST")
    {
        if($type == "email")
        {
            $pattern = '#^(.+)@([^\.].*)\.([a-z]{2,})$#';
            $checked = preg_match($pattern, $_POST['email']);
            if($checked)
            {
                return true;
            }
            else
            {
                echo "<span class='failure-message'>Please enter a valid email.</span>";
                return false;
            }
        }
        else if($type == "date")
        {
            $pattern = '#\d{4}/((0[1-9])|(1[0-2]))/((0[1-9])|([12][0-9])|(3[01]))#';
            $checked = preg_match($pattern, $_POST['date']);
            if($checked)
            {
                return true;
            }
            else
            {
                echo "<span class='failure-message'>Please enter a valid date in yyyy/mm/dd format.</span>";
                return false;
            }
        }
        else if($type == "animals")
        {
            if(isset($_POST['animals']))
            {
               $numberOfAnimals = count($_POST['animals']); 
            }
            else
            {
                $numberOfAnimals = 0;
            }
            if($numberOfAnimals >= 3)
            {
                return true;
            }
            else
            {
                echo "<span class='failure-message'>Please choose at least 3 animals.</span>";
                return false;
            }
        }
    }
}
?>
