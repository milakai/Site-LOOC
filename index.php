<!DOCTYPE html>

<head>
    
    <link rel="stylesheet" href="main.css">

    <?php include("bootstrapinclude.html");?>

</head>


<body style="font-family:calibri">
    <div class="main_container">


        <h1 class="title" style="text-align: center;">
            LOGIN
        </h1>
        <h6>
            <a href="welcome.php"> Return to menu(debug) </a>
        </h6>
        <h2 class="description_txt">
            Please enter your student name or email and password:
        </h2>


        <div class="register_box">
            <div class="login_input_container">
                <input class="form-control" placeholder="username" type="text" id="username" name="username"><br><br>
            </div>

            <div class="input-group mb-3">
                <input placeholder="password" type="password" id="password" class="form-control">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" id="btn" type="button">Show</button>
                </div>
            </div>

            <h3 class="description_txt">
                <a href="resendPassForm.html"> Forgot your password? </a>
            </h3>


            <div>
                <input class="submit" type="submit" value="Submit">
                <h4 class="description_txt">
                            You do not have an account? <a href="createAccForm.html"> Sign-up! </a>
                </h4>
            </div>
        </div>
    </div>
    <script>
        let btn = document.querySelector('#btn');
        let input = document.querySelector('#password');

        btn.addEventListener('mouseover', () => {
            
            input.type = "text"
        
        })
        btn.addEventListener('mouseout', () => {
            
                input.type = "password"
            
        })
    </script>

<?php include("jsinclude.html");?>

</body>