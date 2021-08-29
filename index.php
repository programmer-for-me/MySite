<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ms-MySite</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
</head>
<body>
    <div id="nav" class="nav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="nav-content">
            <a href="#home">Home</a>
            <a href="#books">Books</a>
            <a href="#sites">Sites</a>
            <a href="#contact">Contact</a>
        </div>
    </div>
    <div id="home">
        <div class="fixed">
            <div class="bar">
                <span onclick="openNav()">
                    <i class="fa fa-bars">
                        
                    </i>
                </span> 
                <div class="logo">
                    MS
                </div>
                <div class="mode">
                    <i class="fas fa-sun"></i>
                    <label class="switch">
                        <input type="checkbox" class = "toggle" onclick="mode()">
                        <span class="slider round"></span>
                    </label>
                    <i class="fas fa-moon"></i>
                </div>
            </div>
        </div>
        <div class="content">
            <span class="welcome">
                
            </span>
        </div>
    </div>
    <div id="books">
        <h1 class="Title">Books</h1>
        <div class="booksGrid">
            <div class="book">
                <img src="./img/AlgorithmsGrow.png" class="bookImg">
                <p class="bookInfo">
                    Algorithms &copy
                </p>
                <a href="./pdf/AlgorithmsNotesForProfessionals.pdf" class="downloadBook">Download</a>
            </div>
            <div class="book">
                <img src="./img/DotNetFrameworkGrow.png" class="bookImg">
                <p class="bookInfo">
                    .NET Framework &copy
                </p>
                <a  href="./pdf/DotNETFrameworkNotesForProfessionals.pdf" class="downloadBook">Download</a>
            </div>
            <div class="book">
                <img src="./img/AndroidGrow.png" class="bookImg">
                <p class="bookInfo">
                    Android &copy
                </p>
                <a  href="./pdf/AndroidNotesForProfessionals.pdf" class="downloadBook">Download</a>
            </div>
            <div class="ad">
               &copy All books are taken from <a href="https:\\goalkicker.com">GoalKicker.com</a>.
            </div>
        </div>
    </div>
    <div id="sites">
        <h1 class="Title">Sites</h1>
        <table class="sitesList">
            <tr>
                <th class="th">
                    Name
                </th>
                <th class="th">
                    Link
                </th>
                <th class="th">
                    About
                </th>
            </tr>
            <tr>
                <td class="siteName">
                    GoalKicker
                </td>
                <td>
                    <a class="siteLink" href="https:\\goalkicker.com">GoalKicker.com</a>
                </td>
                <td class="siteDesc">
                    Free Programming books.
                </td>
            </tr>
            <tr>
                <td class="siteName">
                    MDN Web Docs
                </td>
                <td>
                    <a class="siteLink" href="https:\\developer.mozilla.com">developer.mozilla.com</a>
                </td> 
                <td class="siteDesc">
                    Useful tips and documentations for FrontEnd.
                </td>
            </tr>
            <tr>
                <td class="siteName">
                    W3Schools
                </td>
                <td>
                    <a class="siteLink" href="https:\\w3schools.com">w3schools.com</a>
                </td>
                <td class="siteDesc">
                    Learn programming for free with examples.
                </td>
            </tr>
            <tr>
                <td class="siteName">
                    GitHub
                </td>
                <td>
                    <a class="siteLink" href="https:\\github.com">github.com</a>
                </td>
                <td class="siteDesc">
                    Lots of repositories. Cloud for code.
                </td>
            </tr>
            <tr>
                <td class="siteName">
                    StackOverFlow
                </td>
                <td>
                    <a class="siteLink" href="https:\\stackoverflow.com">stackoverflow.com</a>
                </td>
                <td class="siteDesc">
                    Answers for every quetion about programming.
                </td>
            </tr>
        </table>
    </div>
    <div id="contact">
        <h1 class="Title">Contact</h1>
        <form class="contact-form" action="contactFrom.php" method="post">
            <input required class="form-item" type="text" name="name" placeholder="Write your name">
            <input required class="form-item" type="email" name="mail" placeholder="Write your E-Mail">
            <input class="form-item" type="text" name="subject" placeholder="Subject">
            <textarea required class="form-item" name="message" placeholder="Message"></textarea>
            <button class="btn" type="submit" name="submit">Send E-Mail</button>
        </form>
    </div>
    <!-- add contact theme -->
    <script src="./js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.0/typed.min.js" integrity="sha512-zKaK6G2LZC5YZTX0vKmD7xOwd1zrEEMal4zlTf5Ved/A1RrnW+qt8pWDfo7oz+xeChECS/P9dv6EDwwPwelFfQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        var welcome = new Typed('.welcome', {
            strings: ['Hi!<br> Here you could become a programmer!', 'Welcome!<br> Let`s do some programming!'],
            typeSpeed: 70,
            backSpeed: 0,
            cursorChar: "",
            fadeOut: true,
            loop: true
        });
    </script>
</body>
</html>