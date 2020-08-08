<?php
$servername = "localhost";
$username = "gebgtik9_Shree";
$password = "aaroha@123";
$dbname="aaroha";

// Create connection
$con =  mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}



$sql1 ="SELECT * FROM gallery WHERE Id IN(1,2,3,4,5,6,7,8)";
$sql2 ="SELECT * FROM gallery WHERE Id NOT IN(1,2,3,4,5,6,7,8)";
$picture1 =  mysqli_query($con,$sql1);
$picture2 =  mysqli_query($con,$sql2);
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Image Gallery</title>
        <link rel="stylesheet" href="gallery.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,800&display=swap" rel="stylesheet">
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
        <link rel="stylesheet" href="https://anijs.github.io/lib/anicollection/anicollection.css">
        <link
      rel="stylesheet"
      href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"
    />
    <link
      href="http://fonts.googleapis.com/css?family=Cookie"
      rel="stylesheet"
      type="text/css"
    />
    
        <style>
            /*float removes already white spaces present around images*/
            .navbar{
  width: 100%;
}
.nav-item{
  padding-left: 5px;
  padding-right: 5px;
  color: #262626;
}
.dropdown-item{
background-color: white !important;
text-align: center;
  color: black;
}
.collapse {
  
text-align: center;
  padding: 3px;
  margin-right: 15px;
}

#me{
  color:black;
  font-weight: bold;
  font-size: 18px;
}
.col-twelve,
.col-full {
    width: 100%;
}
footer{
  bottom: 0;
  overflow:hidden;
}
.footer-distributed{
  background-color: #033670;
    width: 100%;
  text-align: left;
  font: bold 16px sans-serif;
  padding: 45px 20px;
   /* box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
  box-sizing: border-box; */
}
.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right {
  display: inline-block;
  vertical-align: top;
}
.footer-distributed .footer-left {
  width: 40%;
}
.footer-distributed .footer-right {
  width: 20%;
}
.footer-distributed h3 {
  color: #ffffff;
  font: normal 36px "Cookie", cursive;
  margin: 0;
}

.footer-distributed h3 span {
  color: #5383d3;
}
.footer-distributed .footer-links {
  color: #ffffff;
  margin: 20px 0 12px;
  padding: 0;
}

.footer-distributed .footer-links a {
  display: inline-block;
  line-height: 1.8;
  text-decoration: none;
  color: inherit;
}
.footer-distributed .footer-company-name {
  color: #8f9296;
  font-size: 14px;
  font-weight: normal;
  margin: 0;
}

.footer-distributed .footer-center {
  width: 35%;
}

.footer-distributed .footer-center i {
  background-color: #33383b;
  color: whitesmoke;
  font-size: 25px;
  width: 38px;
  height: 38px;
  border-radius: 50%;
  text-align: center;
  line-height: 42px;
  margin: 10px 15px;
  vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope {
  font-size: 17px;
  line-height: 38px;
}

.footer-distributed .footer-center p {
  display: inline-block;
  color: whitesmoke;
  vertical-align: middle;
  margin: 0;
}

.footer-distributed .footer-center p span {
  display: block;
  font-weight: normal;
  font-size: 14px;
  line-height: 2;
}

.footer-distributed .footer-center p a {
  color: #5383d3;
  text-decoration: none;
}

.footer-distributed .footer-right {
  width: 20%;
}

.footer-distributed .footer-company-about {
  line-height: 20px;
  color: #d1d1d8;
  font-size: 13px;
  font-weight: normal;
  margin: 0;
}

.footer-distributed .footer-company-about span {
  display: block;
  color: whitesmoke;
  font-size: 14px;
  font-weight: bold;
  margin-bottom: 20px;
}

.footer-distributed .footer-icons {
  margin-top: 25px;
}

.footer-distributed .footer-icons a {
  width: 35px;
  height: 35px;
  cursor: pointer;

  font-size: 20px;
  text-align: center;
  line-height: 35px;

  margin-right: 3px;
  margin-bottom: 5px;
}

@media (max-width: 880px) {
  .footer-distributed {
    font: bold 14px sans-serif;
  }

  .footer-distributed .footer-left,
  .footer-distributed .footer-center,
  .footer-distributed .footer-right {
    display: block;
    width: 100%;
    margin-bottom: 40px;
    text-align: center;
  }

  .footer-distributed .footer-center i {
    margin-left: 0;
  }
  .main {
    line-height: normal;
    font-size: auto;
  }
}
.col-twelve,
.col-full {
    width: 100%;
}
.footer-bottom {
    margin-top: 5.4rem;
    text-align: center;
    font-size: 14px;
}

.footer-bottom .copyright span {
    display: inline-block;
}

.footer-bottom .copyright span::after {
    content: "|";
    display: inline-block;
    padding: 0 1rem 0 1.2rem;
    color: rgba(255, 255, 255, 0.05);
}

.footer-bottom .copyright span:last-child::after {
    display: none;
}
/* ------------------------------------------------------------------- 
 * ## go to top
 * ------------------------------------------------------------------- */
.go-top {
    position: fixed;
    bottom: 30px;
    right: 30px;
    z-index: 600;
    display: none;
}

.go-top a, .go-top a:visited {
    text-decoration: none;
    border: 0 none;
    display: block;
    height: 60px;
    width: 60px;
    line-height: 60px;
    text-align: center;
    background: black;
    color: rgba(255, 255, 255, 0.5);
    text-align: center;
    text-transform: uppercase;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.go-top a i, .go-top a:visited i {
    font-size: 18px;
    line-height: inherit;
}

.go-top a:hover, .go-top a:focus {
    color: #FFFFFF;
}


        </style>
 
    </head>
    <body>
    <nav class="navbar  navbar-expand-lg navbar-light " style="background:white;" >
      <a class="navbar-brand" href="#">
<img src="logo.png" width="50%" height="50%" alt="">
</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index.html" class="nav-link"  id="me">Home</a></li>
        
          
         

        <li class="nav-item"><a href="event.php" class="nav-link" id="me">Events</a></li>
            <li class="nav-item"><a href="project.html" class="nav-link" id="me">Project</a></li>
            <li class="nav-item dropdown" >
              <a id="me" class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Chapters
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" id="me" href="nitb.html">NIT-B</a>
                <a class="dropdown-item" id="me" href="#ihmb.html">IHM-B</a>
              </div>
            </li>
            <li class="nav-item"><a href="gallery.php" class="nav-link" id="me">Gallery</a></li>
            <li class="nav-item"><a href="team.php" class="nav-link" id="me">Team</a></li>
            <li class="nav-item"><a href="joinus.php" class="nav-link" id="me">Join</a></li>
           
            <li class="nav-item">
                <button type="button"  class="btn btn-primary btn-rounded">
                   <a href="Txntest.php" style="text-decoration:none;color:white"> DONATE</a>
                </button>
            </li>
        </ul>
      </div>
    </nav>
        <div class="team-section">
            <span class="border"></span>
            <h1>Gallery</h1>
            <span class="border"></span>
          </div>
       
        
        
        <div class="photo" >
        <?php while($pic = mysqli_fetch_assoc($picture1)) : ?> 
          <a href="<?php echo $pic['Image'] ?>" data-toggle="lightbox" data-gallery="example-gallery"> <img  class="<?php echo $pic['Animation_Class'] ?>" src="<?php echo $pic['Image'] ?>"></a> 
          
                <?php endwhile; ?>
        </div>
        <div class="photo" >
        <?php while($pic = mysqli_fetch_assoc($picture2)) : ?> 
          <a href="<?php echo $pic['Image'] ?>" data-toggle="lightbox" data-gallery="example-gallery"> <img  data-anijs="<?php echo $pic['Animation_Class'] ?>" src="<?php echo $pic['Image'] ?>"></a> 
          
                <?php endwhile; ?>
        </div>
       


          <footer class="footer-distributed">
            <div class="footer-left">
              <h3>Aa<span>ro</span>ha</h3>
      
              <p class="footer-links">
                <a href="#">Home</a>
                ·
                <a href="#">About Us</a>
                ·
                <a href="#">Blog</a>
                ·
                <a href="#">Events</a>
                ·
                <a href="#">Projects</a>
                ·
                <a href="#">Contact</a>
              </p>
      
              <p class="footer-company-name">&copy; 2020</p>
            </div>
      
            <div class="footer-center">
              <!-- <div>
                <i class="fa fa-map-marker"></i>
                <p>
                  <span>Anna Nagar slums,Rachna Nagar,Bhopal</span> Madhya Pradesh,
                  India
                </p>
              </div> -->
      
              <div>
                <i class="fa fa-phone"></i>
                <p>+91 75663 09722</p>
              </div>
      
              <div>
                <i class="fa fa-envelope"></i>
                <p>
                  <a href="#" style="color: #2C8AF6;">aaroha.youthorg@gmail.com</a>
                </p>
              </div>
            </div>

            <div class="footer-right">
              <p class="footer-company-about">
                <span>About Us</span>
                Aaroha is a youth organization which works for the upliftment of the
                underprivileged children.
              </p>
      
              <div class="footer-icons">
                <a href="https://www.facebook.com/aaroha.youthorg/">
                  <img src="https://img.icons8.com/nolan/40/facebook-new.png"
                /></a>
                <a href="#"
                  ><img src="https://img.icons8.com/nolan/40/twitter.png"
                /></a>
                <a href="https://www.facebook.com/aaroha.youthorg/"
                  ><img src="https://img.icons8.com/nolan/40/instagram-new.png"
                /></a>
              </div>
            </div>
            <div class="row footer-bottom">
      
        <div class="col-twelve">
          <div class="copyright">
            <span>© Copyright Aaroha 2020</span>
            <span>Crafted with ❤ by <a href="https://www.linkedin.com/mwlite/in/aditi-khandelwal-799480172">Aditi Khandelwal, </a><a
                href="https://www.linkedin.com/in/neha-parmar-242a89175/">Neha Parmar</a> and <a
                href="https://www.linkedin.com/mwlite/in/prakriti-shrivastava-b55172199">Prakriti Shrivastava</a></span>
          </div>
      
          <div class="go-top">
            <a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
          </div>
        </div>
      
      </div>
        </footer>
        
      <!-- AniJS core library -->
<script src="https://anijs.github.io/lib/anijs/anijs-min.js"></script> 
  
<!-- Include to use $addClass, $toggleClass or $removeClass -->
<script src="https://anijs.github.io/lib/anijs/helpers/dom/anijs-helper-dom-min.js"></script>


<script src="https://anijs.github.io/lib/anijs/helpers/scrollreveal/anijs-helper-scrollreveal-min.js"></script>  
     
          <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>  
<script>
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
</script>  
</body>
</html>