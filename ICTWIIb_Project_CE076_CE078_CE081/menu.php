<?php 
    session_start();
    require_once "config (1).php";
        $uname=$_SESSION['username'];
        if(isset($_GET['id']))
        {
            ;
            $id = $_GET['id'];
            $sql = "INSERT INTO `cart` (`email`,`item_detail`) VALUES('$uname' , '$id')";
            $result = mysqli_query($conn, $sql);
        }
        //echo vardump($_SESSION['loggedin']);
        
        //if (!$conn) {
           // die("Sorry we failed to connect: " . mysqli_connect_error());
        //}
        //$sql = " UPDATE `user_detail` SET `item_detail` = '$id' WHERE  `email` = '$uname'";
        //$result = mysqli_query($conn, $sql);
    ?>
    

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Paaji+2&display=swap" rel="stylesheet">
    <style>
        body,
        html {
            scroll-behavior: smooth;
        }

        * {
            box-sizing: border-box;
        }

        .container::after {
            content: "";
            clear: both;
            display: table;
        }

        .dishes {
            float: left;
            width: 50%;
            padding: 5px;
            overflow: auto;
            font-size: 25px;
            /*border: 2px solid black;*/
            font-family: 'Baloo Paaji 2', cursive;
        }

        .dishes img {
            margin-right: 0px;
        }

        .dishes .hide {
            display: none;
        }

        .dishes img:hover+.hide {
            display: inline;
        }

        #back a {
            font-size: 35px;
            text-decoration: none;
            padding: 10px;
            color: black;
            border: 3px solid black;
            border-radius: 30px;
            position: absolute;
            top: 1360vh;
            
        }
        a {
            text-decoration: none;
        }

        li {
            list-style: none;
        }

        header {
            width: 100%;
            height: 50px;
            line-height: 50px;
            text-align: center;
            font-family: sans-serif;
            background-color: lightgreen;
            position: relative;
            top: 0vh;
            left: 0vw;
            position: fixed;
            z-index: 2;
        }

        .brand {
            width: auto;
            height: 100%;
            float: left;
            margin: 0 0 0 5%;
        }

        .menu {
            width: 60%;
            height: 100%;
            float: right;
            position: relative;
            top: 0vh;
        }

        .menu ul {
            width: 100%;
            height: inherit;
            margin: 0;
            padding: 0;
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
        }

        .menu ul a {
            width: 20%;
            height: inherit;
            color: #222;
            display: inline-block;
        }

        .menu ul a:hover {
            background-color: green;
            color: #fff;
        }

        #menuToggle {
            display: none;
        }

        .menu-icon {
            display: none;
        }
        .dishes a{
            border: 2px solid black;
            color: black;
            border-radius: 20px;
            margin-left: 350px;
        }

        /*Início das configurações da Navigation com dispositivos < 768px*/
        @media screen and (max-width: 768px) {
            .menu {
                width: 100%;
                height: auto;
            }

            .menu ul {
                display: block;
                max-height: 0;
                overflow: hidden;
                -webkit-transition: max-height 0.3s;
                -moz-transition: max-height 0.3s;
                -ms-transition: max-height 0.3s;
                -o-transition: max-height 0.3s;
                transition: max-height 0.3s;

            }

            .menu ul a {
                text-align: left;
                width: 100%;
                height: 50px;
                background-color: #f1c40f;
                padding: 10px 0px 10px 5%;
            }

            .menu-icon {
                width: 100px;
                height: inherit;
                display: block;
                position: absolute;
                top: -35px;
                right: 0;
                line-height: 0px;
            }

            #menuToggle:checked ~ ul {
                max-height: 350px;

            }

            .menu-icon i {
                font-size: 1.7em;
            }
            .dishes{
            font-size:15px;
            height:500px;
            }
            .dishes a {
                font-size:20px;
                margin-left:50px;
                width:100px;
            }

        }

        #starter {
            position: absolute;
            top: 70vh;
        }

        #maincourse {
            position: absolute;
            top: 320vh;
        }

        #sweets {
            position: absolute;
            top: 1120vh;
        }

        #drinks {
            position: absolute;
            top: 720vh;
        }

        h1#starterh {
            position: absolute;
            top: 55vh;
            font-size: 50px;
            font-weight: bold;
        }

        h1#maincourseh {
            position: absolute;
            top: 300vh;
            font-size: 50px;
            font-weight: bold;
        }

        h1#sweetsh {
            position: absolute;
            top: 1100vh;
            font-size: 50px;
            font-weight: bold;
        }

        h1#drinksh {
            position: absolute;
            top: 700vh;
            font-size: 50px;
            font-weight: bold;
        }
        .dishes{
            height:100%;
        }
        
    </style>
</head>

<body>  
    <header>
        <figure class="brand">MENU</figure>
        <nav class="menu">
            <input type="checkbox" id="menuToggle">
            <label for="menuToggle" class="menu-icon"><i class="fa fa-bars"></i></label>
            <ul>
                <a href="#starter">
                    <li>Starter</li>
                </a>
                <a href="#maincourse">
                    <li>Main Course</li>
                </a>
                <a href="#drinks">
                    <li>Drinks</li>
                </a>
                <a href="#sweets">
                    <li>Desserts/Sweets</li>
                </a>
            </ul>
        </nav>
    </header>
    <center style="font-size: 40px ; font-family: 'Dancing Script', cursive;">
        <h1>Varities Of Dosas</h1>
    </center>
    <center style="font-size: 20px;font-family: 'Dancing Script', cursive;">
        <h2>U might fall in love with ;</h2>
    </center>
    <div class="container">
        <h1 id="starterh" style="font-family: 'Dancing Script', cursive;">Starters</h1>
        <div id="starter">
            <div class="dishes">
                <img src="img72.png" alt="" style="width:100%">
                <div class="hide">75 Rs.<br></div>
                MASALA CHANA

                <a href=menu.php?id="MASALA-CHANA-75rs">add to cart</a>
            </div>
            <div class="dishes">
                <img src="img10.jpg" alt="" style="width:89%">
                <div class="hide"><br>150 Rs.<br></div>
                PANEER TIKKA

                <a href=menu.php?id="PANEER-TIKKA-150rs">add to cart</a>
            </div>
            <div class="dishes">
                <img src="img152.jpg" alt="" style="width:100%">
                <div class="hide">50 Rs.<br></div>
                MASALA PAPAD

                <a href=menu.php?id="MASALA-PAPAD-50rs">add to cart</a>
            </div>
            <div class="dishes">
                <img src="img172.jpg" alt="" style="width:100%">
                <div class="hide">120 Rs.<br></div>
                HARA BHARA KABAB

                <a href=menu.php?id="HARA-BHARA-KABAB-120rs">add to cart</a>
            </div>
        </div>
        <h1 id="maincourseh" style="font-family: 'Dancing Script', cursive;">Main Course</h1>
        <div id="maincourse">
            <div class="dishes">
                <img src="d1.jpg" alt="" style="width:94%">
                <div class="hide" style="width:200px"><br>150 Rs.<br></div>
                MASALA DOSA

                <a href=menu.php?id="MASALA-DOSA-150rs">add to cart</a>
            </div>
            <div class="dishes">
                <img src="d5.jpg" alt="" style="width:100%">
                <div class="hide">140 Rs.<br></div>
                NYLON DOSA

                <a href=menu.php?id="NYLON-DOSA-140rs">add to cart</a>
            </div>
            <div class="dishes">
                <img src="d6.jpg" alt="" style="width:95%">
                <div class="hide"><br>140 Rs.<br></div>
                PAPER DOSA

                <a href=menu.php?id="PAPER-DOSA-140rs">add to cart</a>
            </div>
            <div class="dishes">
                <img src="d7.jpg" alt="" style="width:100%">
                <div class="hide"><br>150 Rs.<br></div>
                CHINESE DOSA

                <a href=menu.php?id="CHINESE-DOSA-150rs">add to cart</a>
            </div>
            <div class="dishes">
                <img src="d8.jpg" alt="" style="width:95%">
                <div class="hide"><br>100 Rs.<br></div>
                JINI DOSA

                <a href=menu.php?id="JINI-DOSA-100rs">add to cart</a>
            </div>
            <div class="dishes">
                <img src="d9.jpg" alt="" style="width:100%">
                <div class="hide">150 Rs.<br></div>
                CHEESE DOSA

                <a href=menu.php?id="CHEESE-DOSA-150rs">add to cart</a>
            </div>
            <div class="dishes">
                <img src="d10.jpg" alt="" style="width:97%">
                <div class="hide">40 Rs.<br></div>
                CHEESE CORN DOSA

                <a href=menu.php?id="CHEESE-CORN-DOSA-40rs">add to cart</a>
            </div>
            <div class="dishes">
                <img src="d11.jpg" alt="" style="width:90%">
                <div class="hide"><br>150 Rs.<br></div>
                SCHEZWAN DOSA

                <a href=menu.php?id="SCHWEZAN-DOSA-150rs">add to cart</a>
            </div>
        </div>
        <h1 id="drinksh" style="font-family: 'Dancing Script', cursive;">Drinks</h1>
        <div id="drinks">
            <div class="dishes">
                <img src="cc.png" alt="" style="width:100%">
                <div class="hide">40 Rs.<br></div>
                Coca Cola<br>

                <a href=menu.php?id="COCA-COLA-40rs">add to cart</a>
            </div>
            <div class="dishes">
                <img src="sp.jpg" alt="" style="width:100%">
                <div class="hide">40 Rs.<br></div>
                Sprite<br>

                <a href=menu.php?id="SPRITE-40rs">add to cart</a>
            </div>
            <div class="dishes">
                <img src="bm.jpg" alt="" style="width:100%">
                <div class="hide">30 Rs.<br></div>
                Buttermilk<br>

                <a href=menu.php?id="BUTTERMILK-30rs">add to cart</a>
            </div>
        </div>
        <h1 id="sweetsh" style="font-family: 'Dancing Script', cursive;">Desserts/Sweets</h1>
        <div id="sweets">
            <div class="dishes">
                <img src="ice.jpg" alt="" style="width:99%">
                <div class="hide">140 Rs.<br></div>
                CHOCOLATE ICE-CREAM

                <a href=menu.php?id="CHOCOLATE-ICE-CREAM-140rs">add to cart</a>
            </div>
            <div class="dishes">
                <img src="cake.png" alt="" style="width:100%">
                <div class="hide">130 Rs.<br></div>
                BLACK FOREST

                <a href=menu.php?id="BLACK-FOREST-130rs">add to cart</a>
            </div>
            <div class="dishes">
                <img src="img13.jpg" alt="" style="width:100%">
                <div class="hide">120 Rs.<br></div>
                RASGULLA<br>

                <a href=menu.php?id="RASGULLA-120rs">add to cart</a>
            </div>
            <div class="dishes">
                <img src="img14.jpg" alt="" style="width:100%">
                <div class="hide">50 Rs.<br></div>
                LASSI<br>

                <a href=menu.php?id="LASSI-50rs">add to cart</a>
            </div>

            <div class="dishes">
                <img src="img164.jpg" alt="" style="width:100%">
                <div class="hide">130 Rs.<br></div>
                GAJAR KA HALWA

                <a href=menu.php?id="GAJAR-KA-HALWA-130rs">add to cart</a>
            </div>
        </div>
    </div>
    <div id="back">
        <p>
            <center><a href="homepage.html" class="">back</a></center>
        </p>
    </div>
    

</body>

</html>