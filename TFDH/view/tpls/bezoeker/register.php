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
                        <table>
                            <tr>
                                <td>Voornaam*</td>
                                <td>
                                    <input required type="text" placeholder="Voornaam invullen" name="fn">
                                </td>
                            </tr>
                            <tr>
                                <td>Tussenvoegsel</td>
                                <td>
                                    <input type="text" placeholder="Tussenvoegsel invullen" name="pp">
                                </td>
                            </tr>
                            <tr>
                                <td>Achternaam*</td>
                                <td>
                                    <input required type="text" placeholder="Achternaam invullen" name="ln">
                                </td>
                            </tr>
                            <tr>
                                <td>Geboortedatum*</td>
                                <td>
                                    <input required type="date"  name="dob">
                                </td>
                            </tr>
                            <tr>
                                <td>Gebruikersnaam*</td>
                                <td>
                                    <input required type="text" placeholder="Gebruikersnaam invullen" name="un">
                                    (te gebruiken om in te loggen)
                                </td>
                            </tr>
                            <tr>
                                <td>Wachtwoord*</td>
                                <td>
                                    <input requiredt type="password" placeholder="Wachtwoord invullen" name="pw">
                                </td>
                            </tr>
                            <tr>
                                <td>Herhaling Wachtwoord*</td>
                                <td>
                                    <input required type="password" placeholder="Wachtwoord herhalen" name="pw2">
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Het wachtwoord is nodig om in te loggen en moet minstens 6 tekens bevatten.</td>
                            </tr>
                            <tr>
                                <td></br></td>
                            </tr>
                            <tr>
                                <td>Geslacht</td>
                                 <td>
                                     Man<input type="radio" name="gender" value="male"> 
                                     Vrouw<input type="radio" name="gender" value="Female">
                                 </td>
                            </tr>
                            <tr>
                                <td></br></td>
                            </tr>
                            <tr>
                                <td>Straat*</td>
                                <td>
                                    <input type="text" placeholder="straat invullen" name="st">
                                </td>
                            </tr>
                            <tr>
                                <td>Postcode*</td>
                                <td>
                                    <input type="text" placeholder="postcode invullen" name="pc">
                                </td>
                            </tr>
                            <tr>
                                <td>Stad</td>
                                <td>
                                    <input type="text" placeholder="Stad invullen" name="ct">
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>
                                    <input type="email" placeholder="Email invullen" name="em">
                                </td>
                            </tr>  
                            <tr>
                                <td></td>
                                <td>
                                    <input type="submit" value="Register">
                                </td>
                            </tr>
                        </table>
                    </form>
                </section>
            </div>
        </div>
    </body>
</html>