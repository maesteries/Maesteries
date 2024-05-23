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

        body{

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

        .home{
            width: 100%;
            min-height: 70vh;
            display: flex;
            align-items: center;
            gap: 7em;
            padding: 5x 12% 0;
        }

        .home-content{
            max-width: 800px;
        }

        .home-content h3{
            font-size: 50px;
        }

        .home-content h1{
            font-size: 80px;
            line-height: 1.2;
            color: orange;
        }

        .home-content p{
            font-size: 25px;
            margin: 25px 0 30px;
        }

        .btn-box{
            color: black;
            border: 2px solid transparent;
            text-decoration: none;
            border-radius:30px;
            font-size: 15px;
            font-weight: bold;
        }

        .btn-1{
            padding: 15px 28px;
            background-color: sandybrown;
            color: white;
            border: 2px solid transparent;
            border-radius: 10px;
            font-size: 20px;
            letter-spacing: 1px;
            font-weight: 600;
            transition: 0.5 ease;
            cursor: pointer;
        }

        .btn-1:hover{
            background-color: orange;
            color: white;
            border: 2px solid sandybrown;
        }

        
        .btn-2{
            padding: 15px 28px;
            background-color: salmon;
            color: white;
            border: 2px solid transparent;
            border-radius: 10px;
            font-size: 20px;
            letter-spacing: 1px;
            font-weight: 600;
            transition: 0.5 ease;
            cursor: pointer;
        }

        .btn-2:hover{
            background-color: orange;
            color: white;
            border: 2px solid sandybrown;
        }

        .img-box {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .img-box img {
            max-width: 100%;
            height: auto;
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

            .header {
                width: 100%;
                margin-top: 60px;
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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="books.php">Library</a></li>
                    <li><a href="main.php">Reading List</a></li>
                    <li><a href="about.php">About</a></li>
                </ul>
            </nav>
            <img src="images/menu.png" class="menu" onclick="togglemenu()">
        </div>

        <section class="home">
            <div class="home-content">
                <h3>Welcome to</h3>
                <h1> <span>Maesteries </span>Library</h1>

                <p>This is our online library, where the works of "NeifileTheDreamer" is brought to life.
                    Dive into a collection of heart touching novels written by her.
                    These works range across genres and subjects, creating a complex tapestry of narrative that captivates and inspires.</p>
                    <div class="btn-box">
                    <a href="books.php" class="btn btn-1">Read Her Stories</a>
                    <a href="https://www.wattpad.com/user/NeifileTheDreamer" target="_blank" class="btn btn-2">Visit Her Wattpad</a>
                    </div>
            </div>
            <div class="img-box">
                    <img src="images/background.png" alt="Book Image" class="Book">
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
        
