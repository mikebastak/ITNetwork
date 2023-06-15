<?php

class formular
{
    public function show()
    {

        $Jmeno = (isset($_POST['Jmeno'])) ? $_POST['Jmeno'] : '';
        $Prijmeni = (isset($_POST['Prijmeni'])) ? $_POST['Prijmeni'] : '';
        $Vek = (isset($_POST['Vek'])) ? $_POST['Vek'] : '';
        $Telefon = (isset($_POST['Telefon'])) ? $_POST['Telefon'] : '';


        echo('            
            <form method="post" action="../ovladac/ValidaceZpravy.php">
                <table><tr>
                
                    <td>Jméno</td>
                    <td><input type="text" name="Jmeno" value="' . htmlspecialchars($Jmeno) . '" /></td>
                </tr>
                
                <tr>               
                    <td>Příjmení</td>
                    <td><input type="text" name="Prijmeni" value="' . htmlspecialchars($Prijmeni) . '" /></td>
                </tr>
                
                <tr>
                    <td>Věk</td>
                    <td><input type="number" name="Vek" value="' . htmlspecialchars($Vek) . '" /></td>
                </tr>
                
                <tr>
                    <td>Telefon</td>
                    <td><input type="tel" name="Telefon" value="' . htmlspecialchars($Telefon) . '" /></td>
                </tr>
                
                </table>
                <input type="submit" value="Odeslat" />
              
                
            </form>
        ');
    }
}