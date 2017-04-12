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
                    <form method="post" action="?control=bezoeker&action=login">
                        <input type="text" name="username" placeholder="username">
                        <input type="password" name="password" placeholder="wachtwoord">
                        <button>reset ww</button>
                        <input type="submit" value="inloggen">
                    </form>
                </div>
                <div class="clear"></div>
            </header>

            <nav>
                <ul>
                    <li><a href="?control=bezoeker&action=default">Home</a></li>
                    <li><a href="?control=bezoeker&action=training">Trainings Aanbod</a></li>
                    <li><a class="active" href="?control=bezoeker&action=register">Lid worden</a></li>
                    <li><a href="?control=bezoeker&action=rule">Gedragsregels</a></li>
                    <li><a href="?control=bezoeker&action=location">Lokatie & contact</a></li>
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
                    <h1>Lid Worden</h1>
                    <p>Om gebruik te kunnen maken van de lessen moet je bij ons bekend zijn.</br>
                        Vul hieronder alle gegevens in en registreer jezelf.
                    </p>
                    <form method="post" action="?control=bezoeker&action=register">
                        Voornaam* <input required type="text" placeholder="Voornaam invullen" name="fn"></br>
                        Tussenvoegsel <input type="text" placeholder="Tussenvoegsel invullen" name="pp"></br>
                        Achternaam* <input required type="text" placeholder="Achternaam invullen" name="ln"></br>
                        Geboortedatum* <input required type="date"  name="dob"></br>
                        Gebruikersnaam* <input required type="text" placeholder="Gebruikersnaam invullen" name="un"> (te gebruiken om in te loggen)</br>
                        Wachtwoord* <input requiredt type="password" placeholder="Wachtwoord invullen" name="pw"></br>
                        Herhaling Wachtwoord* <input required type="password" placeholder="Wachtwoord herhalen" name="pw2"></br>
                        Het wachtwoord is nodig om in te loggen. moetminstens 6 tekens bevatten.</br>
                        </br>
                        Geslacht Man<input type="radio" name="gender" value="male"> Vrouw<input type="radio" name="gender" value="Female"></br>
                        
                        Straat* <input type="text" placeholder="straat invullen" name="st"></br>
                        Postcode* <input type="text" placeholder="postcode invullen" name="pc"></br>
                        Stad <input type="text" placeholder="Stad invullen" name="ct"></br>
                        Email <input type="email" placeholder="Email invullen" name="em"></br>
                        
                        <input type="submit" value="Register">
                    </form>
                </section>
            </div>
        </div>
    </body>
</html>