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
                    <h1>Toevoegen van een nieuwe training</h1>
                    <form  method="post">                 
                        <table>
                            <tr>
                                <td>Beschrijving</td>
                                <td>
                                    <input type="text" placeholder="Vul verplicht een beschrijving in" name="description"  required="required" value="<?= !empty($form_data['description'])?$form_data['description']:'';?>">
                                </td>
                            </tr>
                            <tr >
                                <td>Duur</td>
                                <td>
                                    <input type="text" placeholder='Vul verplicht duur in' name="duration" required="required" value="<?= !empty($form_data['duration'])?$form_data['duration']:'';?>" >
                                </td>
                            </tr>
                            <tr> 
                                <td>Kosten</td>
                                <td>
                                    <input type="text"placeholder='Vul verplicht kosten in' name="extra_costs" required="required" value="<?= !empty($form_data['extra_costs'])?$form_data['extra_costs']:'';?>" >
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