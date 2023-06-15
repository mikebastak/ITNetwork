<?php

class Model
{


    public function navratSeznam()
    {

        $pripojeni = mysqli_connect('localhost', 'root', '', 'projekt');
        if (!$pripojeni) {
            echo('Nepřipojeno!' . mysqli_connect_error());
        }


        $sqlPrikaz = "SELECT * FROM pojištěnci";
        $vysledek = mysqli_query($pripojeni, $sqlPrikaz);


        $polePojistencu = array();
        while ($radek = mysqli_fetch_assoc($vysledek)) {
            $polePojistencu[] = $radek;

        }

        mysqli_close($pripojeni);


        return $polePojistencu;
    }

    public function vytvorPojistence($Jmeno, $Prijmeni, $Vek, $Telefon)
    {

        $pripojeni = mysqli_connect('localhost', 'root', '', 'projekt');
        if (!$pripojeni) {
            echo('Nepřipojeno!' . mysqli_connect_error());
        }



        $sqlPrikaz = "INSERT INTO pojištěnci (ID, Jméno, Příjmení, Věk, Telefon) VALUES ('','$Jmeno', '$Prijmeni', '$Vek', '$Telefon')";

        mysqli_query($pripojeni, $sqlPrikaz);

        $chybovazprava = mysqli_error($pripojeni);

        mysqli_close($pripojeni);


        return $chybovazprava;

    }


}