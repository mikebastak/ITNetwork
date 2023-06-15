<?php

class Tabulka
{
    public function show($results)
    {
        echo "<table>";
        echo "<tr><th>ID</th><th>Jméno</th><th>Příjmení</th><th>Věk</th><th>Telefon</th><th>Akce</th></tr>";

        foreach ($results as $result) {
            echo "<tr>";
            echo "<td>" . $result['ID'] . "</td>";
            echo "<td>" . $result['Jméno'] . "</td>";
            echo "<td>" . $result['Příjmení'] . "</td>";
            echo "<td>" . $result['Věk'] . "</td>";
            echo "<td>" . $result['Telefon'] . "</td>";
            echo "<td><button onclick=\"deleteRecord('" . $result['ID'] . "')\">Smazat</button></td>";
            echo "</tr>";
        }
        
        echo "</table>";
        ?>

        <script>
            function deleteRecord(recordID) {
                if (confirm('Opravdu chcete smazat tento záznam?')) {
                    // AJAX požadavek na server pro smazání záznamu
                    var xhr = new XMLHttpRequest();
                    xhr.open('POST', 'smazat.php', true);
                    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState === 4 && xhr.status === 200) {
                            console.log('Záznam byl smazán.');
                            location.reload();
                        }
                    };
                    xhr.send('id=' + encodeURIComponent(recordID));
                }
            }
        </script>

        <?php
    }
}