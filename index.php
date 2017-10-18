<?php
    
    setlocale(LC_ALL, 'nl_NL');
    
    echo date ('j F ');     // huidige datum zal voorzijnen, F voor naam van het maand in letters.

    function getTheDate (){
        $seizoenen = ["lente", "zomer", "hefst", "winter"];
        date('j l');
        

        if (date('j') < 20 && date('m') <= 3) {     // functie date, j verwijst naar dag, && staat for AND, m verwijst naar de maand.
            echo $seizoenen[3];       // winter
                   }
        else if(date('j') <= 21 && date('m') <= 6){
            echo $seizoenen[0];       // lente
        } else if (date('j') <= 22 && date('m') <= 9) {
            echo $seizoenen[1];       // zomer
        }else if (date('j') <= 21 && date('m')<= 12){
            echo $seizoenen[2];       // herft
        }
    }

getTheDate(); // zal het huidige seizoen tonen.

