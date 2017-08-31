<!DOCTYPE html>
<html>
<!--

First Website
and comment
in html
(comments can span multiple lines)

-->

<!-- This is the head -->
<!-- All styles and javascript go inside the head -->
    <head>
        <meta charset="utf-8" />
        <title> Jaime Velazquez: Personal Website</title>
       <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
<!-- closing head -->

    <!-- This is the body -->
    <!-- This is where we place the content of our website -->
    <body>
        <header>
            <h1>Jaime Velazquez</h1>
        </header>
        <nav>
            <hr width="50%" />
            <a href="index.html" ><u>Home</u></a>
            <a href="about.html" >About</a>   
            <a href="contact.html">Contact</a>
        </nav>
        
        <br /><br />
        
        <main>
            
            <figure id="me">
                <img src="img/jaime_velazquez.jpg" alt="Picture of me."/>
            </figure>
            
            <div id="welcomeText">
                Hello! <br />
                <p>Thank you for visiting my professional portfolio website.</p>
                
                <p>I am a senior software engineering student at CSUMB.</p>
                
                <p>Feel free to contact me.</p>
                
                <br /><br />
                
                <em>With ordinary talent and extraordinary <strong>perseverance</strong> all things are attainable.</em><br />
                -Thomas F. Buxton
                
            </div>
            
            
            
        </main>
        
        <!-- This is the footer -->
        <!-- The footer goes inside the body but not always -->
        <footer>
            <hr>
            <figure id="logo">
                <img src="img/otter_logo.jpg" alt="CSUMB logo." />
            </figure>
            <font size="-1" color="#000066">
                CST336 Internet Programming. 2017&copy; Velazquez <br />
                <strong>Disclaimer: </strong> The information on this page is fictitious. <br />
                It is used for academic purposes only.
            </font>
        </footer>
        <!-- closing footer -->
        
    </body>
    <!-- closing body -->

</html>