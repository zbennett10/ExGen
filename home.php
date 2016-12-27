<html>
    <head>
        <title>Home</title>

        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

        <style>
            
            a{
                text-decoration: none;
                color: white;
                font-size: 20px;
            }

            a:hover {
                color: black;
            }

            .nav {
                width: 312px;
                height: 102px;
                background-color: #1a98e6;
                border: 2px solid black;
                color: white;
                font-family: 'montserrat';
                float: right;
                display: flex;
                align-items: center;
                text-align: center;
                margin-top: 20px;
                margin-right: 20px;

            }

            li {
                display: inline;
                margin-right: .7em;
            }

            img {
                margin-left: 20px;
                margin-top: 20px;
            }
            
            footer {
                clear: both;
                margin-top: 25px;
            }
        </style>
    </head>

        <?php
            session_start();
            if($_SESSION['user']) {

            } else {
                header("location: index.php");
            }

            $user = $_SESSION['user'];
        ?>


    <body>

        <img src="assets/logo.png"/>

        <div class="nav">

          

            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li class="logout"><a href="logout.php"> Logout </a></li>
            </ul>
        </div>

        
        <footer></footer>
            
        
        <script>
            const footerElement = document.querySelector('footer');
            footerElement.innerText = `ExGen - Zachary Bennett © ${(new Date()).getFullYear()}`;
        </script>
        
    </body>
</html>