<?php include("connection.php"); ?>
<?php include("connection1.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      complete responsive tour and travel agency website design tutorial
    </title>

    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header>
      <div id="menu-bar" class="fas fa-bars"></div>
      <a href="#" class="logo"><span>T</span>ravel UP </a>
      <nav class="navbar">
        <a href="#home">home</a>
        <a href="#book">book</a>
        <a href="#packages">packages</a>
        <a href="#services">services</a>
        <a href="#gallery">gallery</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
      </nav>
      <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>
        <i class="fas fa-user" id="login-btn"></i>
      </div>
      <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here..." />
        <label for="search-bar" class="fas fa-search"></label>
      </form>
    </header>
    <div class="login-form-container">
      <i class="fas fa-times" id="form-close"></i>
      <form action="">
        <h3>login</h3>
        <input type="email" class="box" placeholder="enter your email" />
        <input type="password" class="box" placeholder="enter your password" />
        <input type="submit" value="login now" class="btn" />
        <input type="checkbox" id="remember" />
        <label for="remember">remember me</label>
        <p>forget password? <a href="#">click here</a></p>
        <p>don't have and account? <a href="#">register now</a></p>
      </form>
    </div>
    <section class="home" id="home">
      <div class="content">
        <h3>adventure is worthwhile</h3>
        <p>dicover new places with us, adventure awaits</p>
        <a href="#" class="btn">discover more</a>
      </div>
      <div class="controls">
        <span class="vid-btn active" data-src="images/vid-1.mp4"></span>
        <span class="vid-btn" data-src="images/vid-2.mp4"></span>
        <span class="vid-btn" data-src="images/vid-3.mp4"></span>
        <span class="vid-btn" data-src="images/vid-4.mp4"></span>
        <span class="vid-btn" data-src="images/vid-5.mp4"></span>
      </div>
      <div class="video-container">
        <video
          src="images/video-section.mp4"
          id="video-slider"
          loop
          autoplay
          muted
        ></video>
      </div>
    </section>
    <section class="book" id="book">
      <h1 class="heading">
        <span>b</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span class="space"></span>
        <span>n</span>
        <span>o</span>
        <span>w</span>
      </h1>
      <div class="row">
        <div class="image">
          <img src="images/book-img.svg" alt="" />
        </div>
        <form action="#" method="POST">
          <div class="inputBox">
            <h3>where to</h3>
            <input type="text" placeholder="Select Country" name="whereto" />
          </div>
          <div class="inputBox">
            <h3>how many</h3>
            <input
              type="number"
              placeholder="number of guests"
              name="howmany"
            />
          </div>
          <div class="inputBox">
            <h3>arrivals</h3>
            <input type="date" name="arrivals" />
          </div>
          <div class="inputBox">
            <h3>leaving</h3>
            <input type="date" name="leaving" />
          </div>
          <input type="submit" class="btn" value="book now" name="register" />
        </form>
      </div>
    </section>
    <section class="packages" id="packages">
      <h1 class="heading">
        <span>p</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>
      </h1>

      <div class="box-container">
        <div class="box">
          <img src="images/p-1.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i> mumbai</h3>
            <p>
              The city has hypnotized every soul that has come across its
              exclusivity and developed taste for it.
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">$90.00 <span>$120.00</span></div>
            <a
              href="#"
              class="btn"
              onclick="location.href = 'https://www.maharashtratourism.gov.in/-/mumbai-city'"
              >book now</a
            >
          </div>
        </div>

        <div class="box">
          <img src="images/p-2.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i> hawaii</h3>
            <p>Hawaii is not a state of mind, but a state of grace.</p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">$90.00 <span>$120.00</span></div>
            <a
              href="#"
              class="btn"
              onclick="location.href = 'https://www.gohawaii.com/'"
              >book now</a
            >
          </div>
        </div>

        <div class="box">
          <img src="images/p-3.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i> sydney</h3>
            <p>
              The best things about Sydney are free: the sunshine’s free, and
              the harbour’s free, and the beach is free.
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">$90.00 <span>$120.00</span></div>
            <a
              href="#"
              class="btn"
              onclick="location.href = 'https://www.australia.com/en-in/facts-and-planning.html?cid=paid-search|in|SYD798|brand|Google||||||||||&ef_id=Cj0KCQjwqs6lBhCxARIsAG8YcDjnL7Kp1aA7WtZUzb_SuEH4al8yuFQLJS_pz7MCcwjAUE2QegWlzvcaAjerEALw_wcB:G:s&s_kwcid=AL!4635!3!445369802092!b!!g!!%2Bexcursions%20%2Bin%20%2Baustralia&utm_actcampaign=9509291891&gad=1'"
              >book now</a
            >
          </div>
        </div>

        <div class="box">
          <img src="images/p-4.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i> paris</h3>
            <p>Paris or paradise? It’s easy to mix them up.</p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">$90.00 <span>$120.00</span></div>
            <a
              href="#"
              class="btn"
              onclick="location.href = 'https://parisjetaime.com/eng/'"
              >book now</a
            >
          </div>
        </div>

        <div class="box">
          <img src="images/p-5.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i> tokyo</h3>
            <p>
              Living right in the heart of Tokyo itself is quite like living in
              the mountains.
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">$90.00 <span>$120.00</span></div>
            <a
              href="#"
              class="btn"
              onclick="location.href = 'https://www.gotokyo.org/en/index.html'"
              >book now</a
            >
          </div>
        </div>

        <div class="box">
          <img src="images/p-6.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i> egypt</h3>
            <p>
              Egypt is not a country we live in but a country that lives within
              us.
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">$90.00 <span>$120.00</span></div>
            <a
              href="#"
              class="btn"
              onclick="location.href = 'https://egypt.travel/'"
              >book now</a
            >
          </div>
        </div>
      </div>
    </section>
    <section class="services" id="services">
      <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
      </h1>
      <div class="box-container">
        <div class="box">
          <i class="fas fa-hotel"></i>
          <h3>affordable hotels</h3>
          <p>
            Find & compare great deals on travel UP.Compare the prices of 10084
            hotels. Find your ideal accommodation from hundreds of great deals
            and save with www.travel UP.in
          </p>
        </div>
        <div class="box">
          <i class="fas fa-utensils"></i>
          <h3>food and drinks</h3>
          <p>Explore the best places to eat and drink around the globe.</p>
        </div>
        <div class="box">
          <i class="fas fa-bullhorn"></i>
          <h3>safty guide</h3>
          <p>
            Your safety is your personal responsibility. Always follow the
            correct procedures. Never take shortcuts. Take responsibility and
            clean up if you made a mess.
          </p>
        </div>
        <div class="box">
          <i class="fas fa-globe-asia"></i>
          <h3>around the world</h3>
          <p>
            No matter where in the world you want to go, we can help get you
            there.
          </p>
        </div>
        <div class="box">
          <i class="fas fa-plane"></i>
          <h3>fastest travel</h3>
          <p>You dream it. We plant it.</p>
        </div>
        <div class="box">
          <i class="fas fa-hiking"></i>
          <h3>adventures</h3>
          <p>Beauty, Charm, And Adventure.</p>
        </div>
      </div>
    </section>
    <section class="gallery" id="gallery">
      <h1 class="heading">
        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>y</span>
      </h1>

      <div class="box-container">
        <div class="box">
          <img src="images/featured-north-bondi-australia.jpg" alt="" />
          <div class="content">
            <h3>amazing</h3>
            <p>A Destination For The New Millennium.</p>
            <a href="#" class="btn">see more</a>
          </div>
        </div>
        <div class="box">
          <img src="images/g-2.jpg" alt="" />
          <div class="content">
            <h3>Enchanting</h3>
            <p>A More Rewarding Way To Travel.</p>
            <a href="#" class="btn">see more</a>
          </div>
        </div>
        <div class="box">
          <img src="images/g-3.jpg" alt="" />
          <div class="content">
            <h3>Inspiring</h3>
            <p>Adventure Awaits, Go Find It.</p>
            <a href="#" class="btn">see more</a>
          </div>
        </div>
        <div class="box">
          <img src="images/gallery-4.jpg" alt="" />
          <div class="content">
            <h3>Picturesque</h3>
            <p>Adventures Fill Soul.</p>
            <a href="#" class="btn">see more</a>
          </div>
        </div>
        <div class="box">
          <img src="images/g-5.jpg" alt="" />
          <div class="content">
            <h3>Peaceful</h3>
            <p>Awaken To A Different World.</p>
            <a href="#" class="btn">see more</a>
          </div>
        </div>
        <div class="box">
          <img src="images/g-6.jpg" alt="" />
          <div class="content">
            <h3>Vibrant</h3>
            <p>Big Agency Deals Small Agency Feel.</p>
            <a href="#" class="btn">see more</a>
          </div>
        </div>
        <div class="box">
          <img src="images/g-7.jpg" alt="" />
          <div class="content">
            <h3>calm</h3>
            <p>Buy Yourself The Freedom.</p>
            <a href="#" class="btn">see more</a>
          </div>
        </div>
        <div class="box">
          <img src="images/g-8.jpg" alt="" />
          <div class="content">
            <h3>Alive</h3>
            <p>Caring Your Hobbies.</p>
            <a href="#" class="btn">see more</a>
          </div>
        </div>
        <div class="box">
          <img src="images/g-9.jpg" alt="" />
          <div class="content">
            <h3>Attractive</h3>
            <p>Collect Moment.</p>
            <a href="#" class="btn">see more</a>
          </div>
        </div>
      </div>
    </section>
    <section class="review" id="review">
      <h1 class="heading">
        <span>r</span>
        <span>e</span>
        <span>v</span>
        <span>i</span>
        <span>e</span>
        <span>w</span>
      </h1>

      <div class="swiper-container review-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="box">
              <img src="images/pic1.png" alt="" />
              <h3>valencia</h3>
              <p>
                Experience the most exciting short vacation in Thailand. Climb
                rocks, explore mangrove forests in Krabi and rejuvenate on the
                beautiful beaches of Phuket.
              </p>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="box">
              <img src="images/pic2.png" alt="" />
              <h3>mark bidden</h3>
              <p>
                Clear your head in Shimla and Manali. Experience the thrill of
                skiing in Solang valley & explore the Tibetan monasteries.
              </p>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="box">
              <img src="images/pic3.png" alt="" />
              <h3>cristine</h3>
              <p>
                Immerse yourself in the beauty of Maldives. Explore the gorgeous
                Paradise Island and click beautiful pictures on the scenic
                beaches. Fill your holiday with excitement and indulge in
                adventure sports like scuba diving, windsurfing and more.
              </p>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="box">
              <img src="images/pic4.png" alt="" />
              <h3>robert downny jr</h3>
              <p>
                View the breathtaking sunrise from Tiger Hill. Go sightseeing in
                Gangtok & Darjeeling. Spend a day exploring Changu Lake & Baba
                Mandir.
              </p>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="contact" id="contact">
      <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
      </h1>

      <div class="row">
        <div class="image">
          <img src="images/contact-img.svg" alt="" />
        </div>

        <form action="#" method="post">
          <div class="inputBox">
            <input type="text" placeholder="name" name="name" />
            <input type="email" placeholder="email" name="email" />
          </div>
          <div class="inputBox">
            <input type="number" placeholder="number" name="number" />
            <input type="text" placeholder="subject" name="subject" />
          </div>
          <textarea
            placeholder="message"
            name="message"
            id=""
            cols="30"
            rows="10"
          ></textarea>
          <input type="submit" class="btn" value="send message" name="submit" />
        </form>
      </div>
    </section>
    <section class="brand-container">
      <div class="swiper-container brand-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="images/1.jpg" alt="" /></div>
          <div class="swiper-slide"><img src="images/2.jpg" alt="" /></div>
          <div class="swiper-slide"><img src="images/3.jpg" alt="" /></div>
          <div class="swiper-slide"><img src="images/4.jpg" alt="" /></div>
          <div class="swiper-slide"><img src="images/5.jpg" alt="" /></div>
          <div class="swiper-slide"><img src="images/6.jpg" alt="" /></div>
        </div>
      </div>
    </section>
    <section class="footer">
      <div class="box-container">
        <div class="box">
          <h3>about us</h3>
          <p>Explore the Unexplored.Now travel the world without any hassle!</p>
        </div>
        <div class="box">
          <h3>branch locations</h3>
          <a href="#">india</a>
          <a href="#">USA</a>
          <a href="#">japan</a>
          <a href="#">france</a>
        </div>
        <div class="box">
          <h3>quick links</h3>
          <a href="#">home</a>
          <a href="#">book</a>
          <a href="#">packages</a>
          <a href="#">services</a>
          <a href="#">gallery</a>
          <a href="#">review</a>
          <a href="#">contact</a>
        </div>
        <div class="box">
          <h3>follow us</h3>
          <a href="#">facebook</a>
          <a href="#">instagram</a>
          <a href="#">twitter</a>
          <a href="#">linkedin</a>
        </div>
      </div>

      <h1 class="credit">
        created by <span> DF </span> | all rights reserved!
      </h1>
    </section>
    <script src="script.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>

<?php 
if($_POST['submit'])
{
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$query="INSERT INTO form VALUES( '$name','$email', '$number','$subject','$message')";
$data = mysqli_query($conn,$query);

if($data){
  echo "DATA INSERTED INTO DATABASE";
}
else{
  echo "FAILED";
}
}
?>

<?php
if($_POST['register'])
{
$whereto=$_POST['whereto'];
$howmany=$_POST['howmany'];
$arrivals=$_POST['arrivals'];
$leaving=$_POST['leaving'];

$query="INSERT INTO bookform VALUES( '$whereto','$howmany', '$arrivals','$leaving')";
$data = mysqli_query($conn1,$query);

if($data){
  echo "DATA INSERTED INTO DATABASE";
}
else{
  echo "FAILED";
}
}
?>
