<?php

function getTitle() {
    global $title, $titleSuffix;
    return $title . $titleSuffix;
}
//Deze functie retourneert de waarde van de globale variabele $title, gevolgd door de waarde van de globale variabele $titleSuffix als een dynamische titel voor de pagina.