<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>the groove. Sign Up</title>
    <link rel = "icon" href = "./images/vinyl-base.svg" type = "image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Lato:wght@900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./css/index.css" />
    <link rel="stylesheet" href="./css/signup.css" />

</head>
<body class="white-scroll back-form">
    
    <div class="row g-0">

        <div class="white-background col">
            <div class="form">
                <p class="title">Sign Up</p>
                <form id="formulario" action="?seccion=signup&amp;accion=createuser" method="post">
                    <p><input id="username" name="username" type="text" class="white-input" placeholder="Username"></p>
                    <p><input id="email" name="email" type="email" class="white-input" placeholder="E-Mail"></p>
                    <p><input id="phoneNumber" name="phoneNumber" type="tel" class="white-input" placeholder="Phone Number"></p>
                    <p><input id="password" name="password" type="password" class="white-input" placeholder="Password"></p>
                    <p><input id="repeatpassword" name="repeatpassword" type="password" class="white-input" placeholder="Repeat Password"></p>
                    <div class="position-relative">
                        <a href="?seccion=signup&accion=createuser"><button class="black-button">Start groovin’!</button></a>
                    </div>
                    <br>
                    <a style="color: rgb(0, 0, 0);" href="?seccion=login"><p>Or Log In</p></a>
                </form>
            </div>
        </div>

        <div class="black-background col position-relative">
            <img class="huge-vinyl img-fluid float-end" src="./images/vynil-right.svg" alt="VINYL">
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>