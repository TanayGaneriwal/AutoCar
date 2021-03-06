<!doctype html>
<html>
    <head>
        <title>Contact Us</title>
        <link rel="stylesheet" href="CU.css">
        <link rel="stylesheet" type="text/css" href="homestyle.css">

    </head>
    <body style="background-image:url(background.jpg); background-repeat: no-repeat; background-size:cover;height: 100%; overflow: hidden;">
        <header>
            <div class="header">
              <h1>AutoCar Productions</h1>
            </div>
        </header>
        <nav>
           <ul class="ull">
               <li id="li"><a href="Home.php">Home</a></li>
               <li id="li"><a href="about.php">About</a></li>
               <li id="li"><a href="products.php">Products</a></li>
               <li id="li"><a href="news.php">News</a></li>
               <li id="li"><a href="CU.php">Contact Us</a></li>
           </ul>
        </nav>
        <div class="contact-title">
            <h1>WELCOME</h1>
            <h2>WE ARE ALWAYS HERE TO HELP YOU</h2>
        </div>
        <div class="contact-form">
            <form id="contact-form" method="post" action="contact_form.php ">
                <input name="name" type="text" class="form-control" placeholder="Your Name" required><br>
                <input name="email" type="email" class="form-control" placeholder="Your Email" required><br>
                <textarea name="message" class="form-control" placeholder="Message" rows="4" required></textarea><br>
                <input type="submit" class="form-control submit" value="SEND MESSAGE">
            </form>
        </div>
</body>
</html>    
        