<!DOCTYPE HTML> 
<html>
    <head>
        <link href="css/desktop.css" rel="Stylesheet" media="screen" />
        <link href="css/tablet.css" rel="stylesheet" media="screen and (min-width: 481px) and (max-width: 768px)" />
        <link href="css/mobile.css" rel="stylesheet" media="screen and (min-width: 0px) and (max-width: 480px)" />
    </head>
    <body>
        <?php
            if(isset($_POST['submit'])){
                $to = "walliscr@sheridanc.on.ca"; // this is your Email address
                $from = $_POST['email']; // this is the sender's Email address
                $name = $_POST['name'];
                $subject = $_POST['subject'];
                $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
                $headers = "From:" . $from;
                // You can also use header('Location: thank_you.php'); to redirect to another page.
            }
        ?>
        <header>
            <img src="images/logo.png" id="logo" alt="Logo" />
            <nav id="navigation">
                <a href="index.html"><img src="images/home.png" class="navLink" alt="HOME" /><span class="navText">HOME</span></a>
                <a href="about.html"><img src="images/about.png" class="navLink" alt="ABOUT" /><span class="navText">ABOUT</span></a>
                <a href="projects.html"><img src="images/projects.png" class="navLink" alt="PROJECTS" /><span class="navText">PROJECTS</span></a>
                <a href="contact.html"><img src="images/contact.png" class="navLink" alt="CONTACT"/><span class="navText">CONTACT</span></a>
            </nav>
        </header>
        <div id="wrapper">
            <div id="contactform">
                <form id="form1" method="post" action="sendmail.php">
                    <input type="text" name="name" class="text" id="YourName" placeholder="Name" /><br />
                    <input type="text" name="email" class="text" id="YourEmail" placeholder="Email address" /><br />
                    <input type="text" name="subject" class="text" id="Subject" placeholder="Subject" /><br />
                    <textarea type="text" name="message" class="text" id="Message" placeholder="Message" Rows="6" cols="30" ></textarea><br />
                    <input type="submit" name="submit" id="submitButton" value="Send"/>
                </form>
                <?php
                    if (mail($to,$subject,$message,$headers)){
                        echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
                    }
                    else {
                        echo "Failed.";
                    }
                ?>
            </div>
            <div id="contactinfo">
                <span id="contacthead">Contact information</span><br />
                <div id="infodiv">
                    <span class="info"><span class="infohead">Phone</span> 647 381 7848</span><br />
                    <span class="info"><span class="infohead">Email</span> walliscr@sheridanc.on.ca</span><br />
                    <span class="info"><span class="infohead"><a href="http://www.linkedin.com/pub/robert-wallischek/74/a77/86b">LinkedIn</a></span></span><br />
                </div> 
            </div>
        </div>
    </body>
</html>