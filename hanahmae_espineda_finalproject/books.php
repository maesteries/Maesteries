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

        .gallery-wrap {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0px auto 0 auto;
        }

        .gallery{
            width: 900px;
            display: flex;
            overflow-x: scroll;
        }

        .gallery div{
            width: 100%;
            display: grid;
            grid-template-columns: auto auto auto;
            grid-gap: 10px;
            padding: 5px;
            flex: none;
        }

        .gallery div img{
            width: 100%;
            transition: transform 0.5s;
        }

        .gallery::-webkit-scrollbar{
            display: none;
        }

        #backBtn, #nextBtn{
            width: 50px;
            cursor: pointer;
            margin: 20px;
        }

        .wrapper{
            width: 100%;
            height: 60vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: none;
        }

        .pic{
            width:500px;
            position: relative;
        }

        img{
            width:100%;
            display: block;
            margin:auto;
        }

        .info{
            width:100%;
            height: 100%;
            top:0;
            Left:0;
            position: absolute;
            background:rgba(255, 250, 246, 0.6);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            opacity: 0;
            transition: 0.6s;
        }

        .info:hover{
            opacity: 1;
        }
        
        .info h1{
            font-size: 20px;
            color:#FFFFFF;
            margin-bottom: 15px;
        }

        .info h1 a{
            text-decoration: none;
            color: #000;
        }

        .info > *{
            transform:translateY(25px);
            transition: transform 0.6s;
        }

        .info:hover > *{
            transform:translateY(0px);
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

        <h1>Maesteries Books</h1>
        <div class="gallery-wrap">
        <img src="images/back.png" id="backBtn">
        <div class="gallery">
                <div>
                    <div class="wrapper">
                        <div class="pic">
                            <span>
                                <img src="images/B1.png">
                                <div class="info">
                                    <h1><a href="https://www.wattpad.com/myworks/188526177-his-woeful-stare-sixth-of-ace-xeidrine-" 
                                    target="_blank">Read in Wattpad</a>
                                    </h1>
                                </div>        
                            </span>
                        </div>        

                        <div class="pic">
                            <span>
                                <img src="images/B2.png">
                                <div class="info">
                                    <h1><a href="https://www.wattpad.com/story/224393400-brows-of-the-past-sixth-of-ace-axti-%E2%9C%93" 
                                    target="_blank">Read in Wattpad</a>
                                    </h1>
                                </div>        
                            </span>
                        </div>   

                        <div class="pic">
                            <span>
                                <img src="images/B3.png">
                                <div class="info">
                                    <h1><a href="https://www.wattpad.com/story/231042595-eyes-of-imperfection-sixth-of-ace-coast" 
                                    target="_blank">Read in Wattpad</a>
                                    </h1>
                                </div>        
                            </span>
                        </div>   
                    </div>        
                </div>        
                
                <div>
                <div class="wrapper">
                        <div class="pic">
                            <span>
                                <img src="images/B4.png">
                                <div class="info">
                                    <h1><a href="https://www.wattpad.com/story/231042746-his-distinctive-steps-sixth-of-ace" 
                                    target="_blank">Read in Wattpad</a>
                                    </h1>
                                </div>        
                            </span>
                        </div>        

                        <div class="pic">
                            <span>
                                <img src="images/B5.png">
                                <div class="info">
                                    <h1><a href="https://www.wattpad.com/story/231043358-chasing-nostalgic-memories-sixth-of-ace" 
                                    target="_blank">Read in Wattpad</a>
                                    </h1>
                                </div>        
                            </span>
                        </div>   

                        <div class="pic">
                            <span>
                                <img src="images/B6.png">
                                <div class="info">
                                    <h1><a href="https://www.wattpad.com/story/231043098-walk-beyond-barricades-sixth-of-ace" 
                                    target="_blank">Read in Wattpad</a>
                                    </h1>
                                </div>        
                            </span>
                        </div>   
                    </div>   
                </div>
    </div>
        <img src="images/next.png" id="nextBtn">
    </div>
    
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

        let scrollContainer = document.querySelector(".gallery");
        let backBtn = document.getElementById("backBtn");
        let nextBtn = document.getElementById("nextBtn");     
        
        scrollContainer.addEventListener("wheel", (evt) => {
            evt.preventDefault();
            scrollContainer.scrollLeft += evt.deltaY;
            scrollContainer.style.scrollBehavior = "auto";
        });

        nextBtn.addEventListener("click", () =>{
            scrollContainer.style.scrollBehavior = "smooth";
            scrollContainer.scrollLeft += 900;
        });

        backBtn.addEventListener("click", () =>{
            scrollContainer.style.scrollBehavior = "smooth";
            scrollContainer.scrollLeft -= 900;
        });

    </script>
</body>
</html>
        
