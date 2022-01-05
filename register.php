<!DOCTYPE html>
<head>

    <link rel="stylesheet" href="main.css">

    <?php include("bootstrapinclude.html");?>

</head>

    <body>
    <div class="main_container">


        <h1 class="title" style="text-align: center;">
            Registration
        </h1>
        <h6>
            <a href="welcome.php"> Return to menu(debug) </a>
        </h6>
        <h2 class="description_txt">
            Please complete all the details below(only those with asterisks are mandatory):
        </h2>


        <div class="register_box">
            <div class="login_input_container">
                <h10>
                    First name*
                </h10>
                <input class="form-control" placeholder="Ex: Joe" type="text" id="firstName" name="firstName"><br><br>
            </div>
            <div class="login_input_container">
                <h10>
                    Last name*
                </h10>
                <input class="form-control" placeholder="Ex: Mama" type="text" id="lastName" name="lastName"><br><br>
            </div>
            <div class="login_input_container">
                <h10>
                    Nickname*
                </h10>
                <input class="form-control" placeholder="Ex: Copernicus the Great" type="text" id="nickname" name="nickname"><br><br>
            </div>
            <div class="smth">
                <h10>
                    E-mail address*
                </h10>
                <input class="form-control" placeholder="Ex: joe.mama@domain.com" type="text" id="e-mail" name="e-mail"> <br><br>
            </div>
            <div class="smth">
                <h10>
                    Phone number*
                </h10>
                <input class="form-control" placeholder="Ex: 0165238490" type="text" id="phoneNumber" name="phoneNumber"> <br><br>
            </div>
            <div class="input-group mb-3">
                <h10>
                    Password*
                </h10>
                <input placeholder="password" type="password" id="password" class="form-control"> <br><br>
            </div>
            <div class="input-group mb-3">
                <h10>
                    Confirm password*
                </h10>    
                <input placeholder="Confirm your password" type="password" id="confPassword" class="form-control"> <br><br>
            </div>
            <div class="input-group-append">
                    <button class="btn" id="btn" type="button">Submit</button>
            </div>

        </div>
    </div>
</body>