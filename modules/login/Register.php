<?php
    if(!empty($_POST["formsent"])) {
        $register = 'Formulier succesvol opgestuurd!';

         $sql = "INSERT INTO form_table (voornaam, achternaam, geslacht, geboortedatum, gebruikersnaam, wachtwoord)
                VALUES('" . $_POST['firstname'] . "', '" . $_POST['lastname'] . "','" . $_POST['geslacht'] . "','" . $_POST['geboortedatum'] . "','" . $_POST['gebruikersnaam'] . "','" . $_POST['wachtwoord'] . "');";
         executeDatabase($sql);
    }
    else{
        $register = ' 
    <div class="contact">
        <form action="' . ROOT_URL . '"?module="login" method="post">
            <input type="hidden" name="formsent" value="1">

            <label for="fname">Voornaam</label>
            <input type="text" id="fname" name="firstname" placeholder="Jouw naam"><br>

            <label for="lname">Achternaam</label>
            <input type="text" id="lname" name="lastname" placeholder="Jouw achternaam"><br>

            <label for="geslacht">Kies uw geslacht:</label>
                <select id="geslacht" name="geslacht">
                    <option value="man">Man</option>
                    <option value="vrouw">Vrouw</option>
                </select><br>

                <input type="date" name="Geboortedatum"><br>

            <input type="text" name="Gebruikersnaam" placeholder="Kies uw Gebruikersnaam!"><br>
            
            <input type="password" name="Wachtwoord" placeholder="Kies uw wachtwoord!"><br>

            <input type="submit" value="Verstuur"><br>
        </form>
    </div>';
    }

    return $register;
?>