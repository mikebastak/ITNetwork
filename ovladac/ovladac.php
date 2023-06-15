<?php


include '../model/model.php';
include '../ovladac/VypisTabulky.php';

class ovladac
{


    public function nactiPojistence(): void
    {
        $model = new Model();
        $tabulka = new Tabulka();


        $pojistenci = $model->navratSeznam();

        $tabulka->show($pojistenci);
    }

}