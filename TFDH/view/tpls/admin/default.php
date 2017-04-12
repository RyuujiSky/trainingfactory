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
                    <li class="active"><a href="?control=admin&action=default">Home</a></li>
                    <li><a href="?control=admin&action=instructeurs">Instructeurs</a></li>
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
                    <h1>Home Admin</h1>
                </section>
            </div>
        </div>
    </body>
</html>