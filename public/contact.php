<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <title>Contact_form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <ul>
            <li>
                <a href="template.html">Home</a>
            </li>
            <li>
                <a href="account">Account</a>
            </li>
            <li>
                <a href="trading">Trading</a>
            </li>
            <li>
                <a href="margin">Margin</a>
            </li>
            <li>
                <a href="f.a.q">F.A.Q</a>
            </li>
            <li>
                <a href="contact.php">Contact</a>
            </li>

            <li class="ul_right">
                Trading platform
            </li>
        </ul>
    </nav>

    <header>
        <div class="ban">
        </div>
    </header>

    <h1 class><i>' your crypto trading place '</i></h1>
    <br><br><br>

    
    <form method="post" action="form.php">

        <label name>First name:</label>
        <input type="text" name="user_name">
              
        <label last_name>Last name:</label>
        <input type="text" name="user_last_name">
                
        <label email>Your email:</label>
        <input type="email" name="email">
            
        <label password>Password:</label>
        <input type="password" name="password" placeholder="8 characters minimum">
                
        <br>
                
        <label genrechoice1>Male</label>
        <input type="radio" value="male" name="gender">
                    
        <label genrechoice2>Female</label>
        <input type="radio" value="female" name="gender">
                
        <label genrechoice3>Other</label>
        <input type="radio" value="other" name="gender">
        <br>
        <input type="submit" value="Submit" class="button">
    </form>
    
</body>

</html>