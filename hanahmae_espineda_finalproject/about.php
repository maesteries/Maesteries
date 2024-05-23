<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maesteries</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

        .container {
            width: 100%;
            min-height: 100vh;
            padding-left: 8%;
            padding-right: 8%;
            box-sizing: border-box;
            overflow: hidden;
            position: relative;
            background-color: #fffaf6;
        }

        .navigationBar {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            width: 50px;
            cursor: pointer;
            margin: 30px 0;
        }

        .menu {
            width: 75px;
            cursor: pointer;
            display: none;
        }

        nav {
            flex: 1;
            text-align: right;
        }

        nav ul li {
            list-style: none;
            display: inline-block;
            margin-right: 30px;
        }

        nav ul li a {
            text-decoration: none;
            color: #000;
            font-size: 20px;
        }

        nav ul li a:hover, nav ul li a:active {
            color: #b38b43;
            border-bottom: 3px solid #b38b43;
        }

        h1 {
            text-align: center;
        }

        .socialMedia {
            position: fixed;
            bottom: 15px;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
        }

        .socialMedia img {
            width: 30px;
            height: 30px;
            margin: 5px;
            display: inline-block;
        }
        
        .aboutMe{
            width: 100%;
            display: flex;
            justify-content: display center;
            align-items: center;
        }

        .aboutMe .content img{
            height: auto;
            width: 400px;
            max-width: 100%;
        }

        .text{
            width: 550px;
            max-width: 100%;
            padding: 0 10px;
        }

        .content{
            width: 1280px;
            max-width: 95%;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-around;
        }

        .text h1{
            color: #FF9272;
            font-size: 55px;
            margin-bottom: 20px;
            text-transform: capitalize;
            text-align: left;
        }

        .text h5{
            color: black;
            font-size: 25px;
            margin-bottom: 25px;
            text-transform: capitalize;
            letter-spacing: 2px;
        }

        .text p{
            color: black;
            font-size: 18px;
            line-height: 28px;
            letter-spacing: 1px;
            margin-bottom: 45px;
        }

        button{
            background-color: #FF9272;
            color: black;
            border: 2px solid transparent;
            text-decoration: none;
            padding: 10px 30px;
            border-radius:30px;
            font-size: 15px;
            font-weight: bold;
        }

        button:hover{
            transform: scale(1.2);
            background-color: transparent;
            border: 2px solid #E58366;
            transition: 0.5s;
            cursor: pointer;
        }

        @media only screen and (max-width: 700px){
            nav ul {
                flex-direction: column;
                position: absolute;
                top: 75px;
                right: 0;
                background: linear-gradient(#e5e1dd, #ccc8c4);
                width: 100%;
                max-height: 0px;
                overflow: hidden;
                transition: max-height 0.5s;
                z-index: 2;
            }

            nav ul li {
                display: block;
                margin-top: 10px;
                margin-bottom: 10px;
            }

            nav ul li a {
                color: #b2afac;
            }

            .menu {
                display: block;
            }

            .logo {
                margin: 10px 0;
            }

            .aboutMe{
                width: 100%;
                height: auto;
                padding: 70px 0px;
            }

            .aboutMe .content img{
                margin-bottom: 35px;
            }

            .text h1{
                font-size: 30px;
                margin-bottom: 25px;
            }

        }

    </style>
</head>
<body>
    <div class="container">
        <div class="navigationBar">
            <a href="index.php"><img src="images/logo.png" class="logo"></a>
            <nav>
                <ul id="menuList">
                    <li><a href="books.php">Library</a></li>
                    <li><a href="main.php">Reading List</a></li>
                    <li><a href="about.php">About</a></li>
                </ul>
            </nav>
        </div>

        <section class="aboutMe">
            <div class="content">
                <img src="images/me.png">
                <div class="text">
                    <h1>Hanah Mae V. Espineda</h1>
                    <h5>BSIT 3DG2</h5>
                    <p>"Welcome to my personal website!
                        I'm currently a 3rd year Bachelor of Science in Information Technology (BSIT) student
                        with a passion for web development, programming, and all things tech.
                        My journey in the IT field has been exciting and filled with continuous learning and innovation.
                        Here, you'll find my projects, experiences, and a glimpse into my academic and professional growth.
                        Feel free to explore and connect with me!"</p>
                        <a href="https://mail.google.com/mail/u/7/#inbox" target="_blank">
                              <button type="button">Message Me</button>
                        </a>
                </div>
            </div>
        </section>
     
    </div> 
    
    <div class="socialMedia">
        <a href="https://www.facebook.com/hanahxmaee" target="_blank"><img src="images/fb.png" alt="Facebook"></a>
        <a href="https://www.instagram.com/hanah.maee/" target="_blank"><img src="images/ig.png" alt="Instagram"></a>
        <a href="https://www.tiktok.com/@maesteries" target="_blank"><img src="images/tiktok.png" alt="TikTok"></a>
        <a href="https://www.wattpad.com/user/NeifileTheDreamer" target="_blank"><img src="images/watty.png" alt="Watty"></a>
    </div>

    <script>
        var menuList = document.getElementById("menuList");
        menuList.style.maxHeight = "0px";

        function togglemenu() {
            if (menuList.style.maxHeight === "0px") {
                menuList.style.maxHeight = "130px";
            } else {
                menuList.style.maxHeight = "0px";
            }
        }

    </script>
</body>
</html>
        