<head>
    <link rel="stylesheet" href="../../assets/css/styles.css">
</head>

<?php
    include '../headfoot/header1.php'
?>

<div class="account-body">
    <div class="h1-ausloggen">
        <h2><a href="#">Ausloggen</a></h2>
        <h1>Willkommen <br> 'CallPHP GetName'</h1>
    </div>
    <h2>Accountinformationen</h2>
    <div class="account-properties">
        <div class="account-form">
            <form action="" method="get">
                <div class="account-form-object">
                    <label for="firstname">Vorname</label>
                    <br>
                    <input type="text" id="firstname" name="firstname" value="Max">
                </div>
                
                <div class="account-form-object">
                    <label for="lastname">Nachname</label>
                    <br>
                    <input type="text" id="lastname" name="lastname" value="Mustermann">
                </div>

                <div class="account-form-object">
                    <label for="birthday">Geburtsdatum</label>
                    <br>
                    <input type="date" id="birthday" name="birthday" value="2020-10-09">
                </div>

                <div class="account-form-object">
                    <label for="email">E-Mail</label>
                    <br>
                    <input type="email" id="email" name="email" value="praesident@fh-erfurt.de">
                </div>

                <div class="account-form-object">
                    <label for="number">Telefonnummer</label>
                    <br>
                    <input type="number" id="number" name="number" value="03603171819;">
                </div>
                <div class="account-form-object">
                    <br>
                    <input type="submit" name="submit" id="submit" value="Account ändern">
                </div>  
            </form>
        </div>
    </div>

    <!-- style="background-color:red;" -->
    
    <h2>Adressen</h2>
    <div class="account-adresses">
        <?php
            for($Index = 0; $Index < 5; $Index++)
            {
                ?>
                    <form class="account-adress-form" action="" method="post">
                        
                        <div  class="account-adress-form-object">
                            <label for="street">Strase:</label>
                            <br>
                            <input type="text" name="street" id="street" value="Altonaerstrasse">
                        </div>

                        <div class="account-adress-form-object">
                            <label for="number">Hausnummer:</label>
                            <br>
                            <input type="number" name="number" id="number" value="25">
                        </div>
                        
                        <div class="account-adress-form-object">
                            <label for="zipcode">Postleitzahl:</label>
                            <br>
                            <input type="zipcode" name="zipcode" id="zipcode" value="55122">
                        </div>
                        
                        <div class="account-adress-form-object">
                            <label for="city">Stadt:</label>
                            <br>
                            <input type="city" name="city" id="city" value="Erfurt">
                        </div>
                        
                        <div class="account-adress-form-object">
                            <br>
                            <input type="submit" name="delete" value="Adresse löschen">
                        </div>

                        <div class="account-adress-form-object">
                            <br>
                            <input type="submit" name="save" value="Änderung Speichern">
                        </div>
                    </form>

                <?php
            }
        ?>
    </div>
    <!-- Für Tabelleneinträge große Kacheln programmieren, 1 pro Reihe anstatt 2 Pro Reihe bei Speisekarte -->
    <h2>Bestellungen</h2>
    <div class="account-orderlist-body">
        <table>
            <thead>
                <td>Bestellnummer</td>
                <td>Bestelldatum</td>
                <td>Lieferadresse</td>
                <td>Produktinformationen</td>
                <td>Gesamtpreis</td>
                <td>Ernuet Wiederholen?</td>
            </thead>
            <tbody>
            <?php
            for($Index = 0; $Index < 4; $Index++)
            {
                ?>
                    <tr>
                        <td>Nr: 7</td>
                        <td>20.11.2020</td>
                        <td>
                            <ul>
                                <li>Altonaerstrasse 34</li>
                                <li>55122 Erfurt</li>
                            </ul>
                        </td>
                        <td>
                            <table>
                                <thead>
                                    <td>Produkt</td>
                                    <td>Anzahl</td>
                                    <td>Preis</td>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Chilli Burger</td>
                                        <td>2</td>
                                        <td>3.99 €</td>
                                    </tr>
                                    <tr>
                                        <td>ChilliCheese Nuggets</td>
                                        <td>1</td>
                                        <td>7.99 €</td>
                                    </tr>
                                    <tr>
                                        <td>Choco Shake</td>
                                        <td>2</td>
                                        <td>1.99 €</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td>19.95 €</td>
                        <td><button>Erneut Bestellen</button></td>
                    </tr>
                </tbody>
                <?php
                }
                ?>
        </table>
    </div>
</div>


<?php
    include '../headfoot/footer.php'
?>