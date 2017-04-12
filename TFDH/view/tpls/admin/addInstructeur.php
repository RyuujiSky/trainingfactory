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
                    <h1>Toevoegen van een nieuwe instructeur</h1>
                    <form  method="post">                 
                        <table>
                            <tr>
                                <td>Loginnaam</td>
                                <td>
                                    <input type="text" placeholder="Vul verplicht een loginnaam in" name="loginname"  required="required" value="<?= !empty($form_data['loginname'])?$form_data['loginname']:'';?>">
                                </td>
                            </tr>
                            <tr >
                                <td>Wachtwoord</td>
                                <td>
                                    <input type="text" placeholder='Vul verplicht een wachtwoord in' name="password" required="required" value="<?= !empty($form_data['password'])?$form_data['password']:'';?>" >
                                </td>
                            </tr>
                            <tr> 
                                <td>Voornaam</td>
                                <td>
                                    <input type="text"placeholder='Vul verplicht een voornaam in' name="firstname" required="required" value="<?= !empty($form_data['firstname'])?$form_data['firstname']:'';?>" >
                                </td>
                            </tr>
                            <tr> 
                                <td>Tussenvoegsel</td>
                                <td>
                                    <input type="text" placeholder='Vul eventueel een tussenvoegsel in' name="preprovision" value="<?= !empty($form_data['preprovision'])?$form_data['preprovision']:'';?>" >
                                </td>
                            </tr>
                            <tr> 
                                <td>Achternaam</td>
                                <td>
                                    <input type="text" placeholder='Vul verplicht een achternaam in' name="lastname" required="required" value="<?= !empty($form_data['lastname'])?$form_data['lastname']:'';?>" >
                                </td>
                            </tr>
                            <tr> 
                                <td>Geboortedatum</td>
                                <td>
                                    <input type="text" placeholder='Vul verplicht een geboortedatum in' name="dateofbirth" required="required" value="<?= !empty($form_data['dateofbirth'])?$form_data['dateofbirth']:'';?>" >
                                </td>
                            </tr>
                            <tr> 
                                <td>Geslacht</td>
                                <td>
                                    <input type="text" placeholder='Vul verplicht een geslacht in' name="gender" required="required" value="<?= !empty($form_data['gender'])?$form_data['gender']:'';?>" >
                                </td>
                            </tr>
                            <tr> 
                                <td>E-mailadres</td>
                                <td>
                                    <input type="text" placeholder='Vul verplicht een e-mailadres in' name="emailaddress" required="required" value="<?= !empty($form_data['emailaddress'])?$form_data['emailaddress']:'';?>" >
                                </td>
                            </tr>
                            <tr> 
                                <td>Aangenomen op</td>
                                <td>
                                    <input type="text" placeholder='Vul verplicht een datum in' name="hiring_date" required="required" value="<?= !empty($form_data['hiring_date'])?$form_data['hiring_date']:'';?>" >
                                </td>
                            </tr>
                            <tr> 
                                <td>Salaris</td>
                                <td>
                                    <input type="text" placeholder='Vul verplicht een salaris in' name="salary" required="required" value="<?= !empty($form_data['salary'])?$form_data['salary']:'';?>" >
                                </td>
                            </tr>
                            <tr> 
                                <td>Straat</td>
                                <td>
                                    <input type="text" placeholder='Vul verplicht een straat in' name="street" required="required" value="<?= !empty($form_data['street'])?$form_data['street']:'';?>" >
                                </td>
                            </tr>
                            <tr> 
                                <td>Postcode</td>
                                <td>
                                    <input type="text" placeholder='Vul verplicht een postcode in' name="postal_code" required="required" value="<?= !empty($form_data['postal_code'])?$form_data['postal_code']:'';?>" >
                                </td>
                            </tr>
                            <tr> 
                                <td>Plaats</td>
                                <td>
                                    <input type="text" placeholder='Vul verplicht een plaats in' name="place" required="required" value="<?= !empty($form_data['place'])?$form_data['place']:'';?>" >
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <input type="submit" value="voeg toe">
                                    <input type="reset" value="reset"> 
                                </td>
                            </tr>
                        </table>
                    </form>
                </section>
            </div>
        </div>
    </body>
</html>