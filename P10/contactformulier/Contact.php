<?php

    if(!empty($_GET["formsent"])) {
        $contact = 'Formulier succesvol opgestuurd!';
    }
    else{
        $contact = ' 
    <div class="contact">
        <form action="' . ROOT_URL . '">
            <input type="hidden" name="module" value="contact">
            <input type="hidden" name="formsent" value="1">

            <label for="fname">Voornaam</label>
            <input type="text" id="fname" name="firstname" placeholder="Jouw naam"><br>

            <label for="lname">Achternaam</label>
            <input type="text" id="lname" name="lastname" placeholder="Jouw achternaam"><br>

            <label for="subject">Jouw reden om je aan te melden bij de Rode Raketten</label><br>
            <textarea id="subject" name="subject" placeholder="Geef jouw reden!" style="height:200px"></textarea>

            <input type="submit" value="Verstuur"><br>
        </form>
    </div>';
    }

    return $contact;
?>