<!DOCTYPE html>
<html>
    <head>
        <title>Training factory</title>
        <!-- CSS -->
        <link href="TFDH/css/main.css" rel="stylesheet">
        <!-- JS -->
    </head>
    <body>
        <div id="body-wrapper">
            <header>
                <div id="title">
                    <img src="TFDH/img/logo.png">
                    <h1>Training centrum Den Haag</h1>
                </div>
                <div id="login-wrapper">
                    <p>Welkom <?=$gebruiker->getLoginname();?> </p>   
                    <?=isset($boodschap)?"<p id = 'boodschap'>$boodschap</p>":""?>
                    <form action="?control=bezoeker&action=uitloggen">
                        <input type="submit" value="uitloggen">
                    </form>
                </div>
                <div class="clear"></div>
            </header>
            <nav>
                <ul>
                    <li><a href="?control=admin&action=default">Home</a></li>
                    <li class="active"><a href="?control=admin&action=instructeurs">Instructeurs</a></li>
                    <li><a href="?control=admin&action=leden">Leden</a></li>
                    <li><a href="?control=admin&action=trainingen">Trainingen</a></li>                    
                </ul>
            </nav>
            <div id="content-wrapper">
                <section id="photo-col">
                    <figure>
                        <img src="TFDH/img/boksen_1.jpg">
                    </figure>
                    <figure>
                        <img src="TFDH/img/boksen_2.jpg">
                    </figure>
                    <figure>
                        <img src="TFDH/img/boksen_3.png">
                    </figure>
                    <div class="clear"></div>
                </section>
                <section id="main-content">
                    <h1>Overzicht instructeurs</h1>
                    <table>
                        <thead>
                            <tr>
                                <td>Naam</td>
                                <td>Email</td>
                                <td>Adres</td>
                                <td>Woonplaats</td>
                                <td>Gebruikersnaam</td>
                                <td>Details</td>
                                <td>Verwijderen</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($instructeurs as $instructeur):?>
                            <tr>
                                <td><?= $instructeur->getFirstname();?> <?= $instructeur->getPreprovision();?> <?= $instructeur->getLastname();?></td>
                                <td><?= $instructeur->getEmailaddress();?></td>
                                <td><?= $instructeur->getStreet();?></td>
                                <td><?= $instructeur->getPlace();?></td>
                                <td><?= $instructeur->getLoginname();?></td>
                                <td title="bewerk de gegevens van deze activiteit"><a href='?control=admin&action=updateInstructeur&id=<?= $instructeur->getId();?>'><img class="img" src="TFDH/img/correct.jpeg"></a></td>
                                <td title="verwijder deze activiteit is definitief"><a href='?control=admin&action=deleteInstructeur&id=<?= $instructeur->getId();?>'><img class="img" src="TFDH/img/delete.png"></a></td>
                            </tr>
                            <?php endforeach;?>
                            <tr>
                                <td>
                                    <a href='?control=admin&action=addInstructeur'>
                                        <figure>
                                            <img src="img/toevoegen.png" alt='voeg een instructeur toe' title='voeg een instructeur toe' />
                                        </figure>
                                    </a>
                                </td>
                                <td colspan='8'>Voeg een instructeur toe</td>
                            </tr>
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
    </body>
</html>