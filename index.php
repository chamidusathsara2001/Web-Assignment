<html>
  <head>   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
    <link rel="stylesheet" href="style.css">
    <title>Ray Photographers</title>
  </head>
  <body>
    <!--navigation bar -->
    <div class="container">
      <div class="logo">
        <img src="Images/ray photography.png" alt="logo of the website" width="150"/>
      </div>
      <div class="topnav">
        <a href="#home">Home</a>
        <a href="#gallery">Gallery</a>
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
      </div>
    </div>

    <!-- Slideshow -->
    <div id ="home" class="slideshow-container">
      <div class="mySlides fade">
        <img src="Images/Slideshow-ninearch.jpeg" alt="Nine-Aerch Bridge" style="width:100%">
        <div class="text">Nine Arch Bridge, Demodara</div>
      </div>
      <div class="mySlides fade">
        <img src="Images/Slideshow-lighthouse.jpeg" alt="An image of a lighthouse"style="width:100%">
        <div class="text">Galle Lighthouse</div>
      </div>
      <div class="mySlides fade">
        <img src="Images/Slideshow-ella.jpeg" alt="ella"style="width:100%">
        <div class="text">Ella Train</div>
      </div>
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

    <!-- Gallery -->
    <div class="main">
      <h1 id="gallery">Gallery</h1>
      <hr>
      <div class="row">
        <div class="column">
          <div class="content">
            <img src="Images/sigiriya.jpeg" alt="Sigiriya Rock" style="width:100%">
          </div>
        </div>
        <div class="column">
          <div class="content">
            <img src="Images/ruwanwaliseya.jpeg" alt="Ruwanwelisaya" style="width:100%">
          </div>
        </div>
        <div class="column">
          <div class="content">
            <img src="Images/lighthouse2.jpeg" alt="Lighthouse" style="width:100%">
          </div>
        </div>
        <div class="column">
          <div class="content">
            <img src="Images/candle.jpeg" alt="Candle" style="width:100%">
          </div>
        </div>
        <div class="column">
          <div class="content">
            <img src="Images/lotus.jpeg" alt="Lotus" style="width:100%">
          </div>
        </div>
        <div class="column">
          <div class="content">
            <img src="Images/paddy.jpeg" alt="Grass" style="width:100%">
          </div>
        </div>
        <div class="column">
          <div class="content">
            <img src="Images/sky.jpeg" alt="Sky" style="width:100%">
          </div>
        </div>
        <div class="column">
          <div class="content">
            <img src="Images/waterfall.jpeg" alt="Waterfall" style="width:100%">
          </div>
        </div>
      </div>
    </div>
    
    <!-- About -->
    <div id="about" class="about-section">
    <hr>
      <h1>About Us</h1>
      <p>We are a team of photographers who are devoted to capture your special day</p>
    </div>
    <div class="row">
       <div class="column">
          <h2>Our Mission</h2>
          <p>  To document memories and stories of magical personal events with warmth and artistry to preserve those moments in your family's legacy</p>
      </div>
      <div class="column">
          <h2>Our Vision</h2>
          <p>To be with you for all of life's important moments</p>
      </div>
    </div>
    <hr>
    <!-- Contact -->
    <div class="container">
        <h1 id="contact">Contact</h1>
        <p>Leave us a message : </p>
        <form action="contactinfo.php" method="post">
            <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Your name..">
            <label for="phone">Mobile</label>
                <input type="tel" name="mobile" placeholder="Your mobile..">
            <label for="email">E-mail</label>
                <input type="email" name="email" placeholder="Your email..">
            <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>
            <input type="submit" value="Submit">
        </form>
    </div>

    <!-- Back to top Button-->
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <script>
      var  mybutton = document.getElementById("myBtn");
      function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 1;
      }
    </script>

    <!-- F0oter -->
    <footer>
        <div class="footer">
        FOLLOW US:
            <i class="fab fa-facebook"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter"></i>
            <p>@RayPhotographers</p>
        </div>
    </footer>
    <script src="slideshow.js"></script>
  </body>
</html>
