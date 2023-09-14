<!DOCTYPE html>
<html>
<head>
    <title>Account Settings</title>
    <link rel="stylesheet" href="../Afval/css/account.css">
    <link rel="stylesheet" href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<header>Welkom, [Naam Gebruiker]!</header>

<div id="nav">

  <div id="navi"><a class='bx bxs-user-account' href="Account.php"></a></div>
  <div id="navi"><a class='bx bx-home-alt' href="Home.php"></a></div>
  <div id="navi"><a class='bx bx-shopping-bag' href="Rewards.php"></a></div>
  <div id="navi"><a class='bx bx-coin' href="Donate.php"></a></div>
  <div id="navi"><a class='fa fa-qrcode' href="Qr.php"></a></div>
  
</div>
  
    <div id="container">
        <div id="tekst">
        <form method="POST" action="">
            <b>Login</b>
            <div>
                <label for="username">Gebruikersnaam:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div>
                <label for="password">Wachtwoord:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div>
                <button id="login" type="submit" name="login">Inloggen</button>
                <a href="NogNietGemaakt.php"><p>Nog geen account? Registreer.</p></a>
            </div>
        </form>
        </div>
    </div>


    <div id="container2">
        <div id="tekst2">
            <p>

            </p>
        </div>
    </div>
</body>

<footer></footer>

</html>