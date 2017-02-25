<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="description" content="Portfolio">
    <meta name="author" content="Palash Jain">
    <title>Palash Jain</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

    <!-- custom css-->
    <link href='css\styles.css' rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

</head>

<body>
  <!-- Navbar-->
  <nav class="navbar transparent navbar-invert navbar-fixed-top" id="portfolio navbar">
    <div class="container">
      <div class="navbar-header" style="color:#FFF">
        <!-- Logo -->
        <span class="glyphicon glyphicon-console"></span>
        <p>Palash Jain</p>
        <!--toggle menu-->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data.target="#navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav navbar-nav" style="font-size: 17px;">
          <li><a href="#1">Education</a></li>
          <li><a href="#2">Interests</a></li>
          <li><a href="#3">Work Experience</a></li>
          <li><a href="#4">Contact Information</a></li>
        </ul>
      </div>
    </div><!--End Container-->

  </nav>

  <!-- jumbotron-->

  <div class="jumbotron">
      <div class="container">
        <br><br><br><br><br><br><br>
        <h1 style="color: #000000">Hi, I'm Palash Jain, an Web Developer currently working at Medina=Citi</h1>
        <br><br><br>
      </div>
  </div><!-- End of Jumbotron-->

  <!-- Education -->
  	<div class="container-fluid " style = "background-color: #CCCCCC">
  		<section>
  			<div class="page-header" id="1">
    				<h2 class="text-center">Education</h2>
    			</div>

    			<div class="row">

    				<div class="col-sm-4 " >
    					<img src="images/njit.png" class="img-responsive" alt="NJIT">
    				</div>
            <div class="col-sm-8 text-center" >
    					<h3>NJIT - Anticipated graduation - 2018</h3>
              <br><br><br><br><br>
              <h4>Currently, I'm a Junior majoring in Web & Information Systems at NJIT.</h4>
    				</div>
          </div>
        </section>
    		</div><!-- End of Education -->

  <!-- Interest -->
  <div class="container-fluid" style = "background-color: gray;">
    <section>
        <div class="page-header" id="2">
          <H2 class="text-center" style = "border-bottom: transparent;">Interest</h2></div>
    			<div class="row">
    				<div class="col-md-4 text-center">
    							<span class="glyphicon glyphicon-tower"></span>
    							<h4>Games</h4>
    							<p>I like to play computer games and console games i.e.PS4, Xbox etc.</p>
                  <br>
    				</div>


    				<div class="col-md-4 text-center">
    							<span class="glyphicon glyphicon-console"></span>
    							<h4>Website Design</h4>
    							<p>In my free time i like to design websites and its applications.</p>
                  <br>
            </div>


    				<div class="col-md-4 text-center">
    							<span class="glyphicon glyphicon-screenshot"></span>
    							<h4>Cars</h4>
    							<p>I love talking about cars and knowing more about it. I drive a Mercedez-Benz C300 AMG. </p>

    				</div>
    			</div>
    		</div><!-- end row -->
      </section>
  <!-- End of Education-->


  <!-- Work -->
  <div class="container-fluid" style = "background-color: #CCCCCC" >
    <section>
        <div class="page-header" id="3">
          <H2 class="text-center">Work Experience</h2></div>
        </div>
        <div class="row " style = "background-color: #CCCCCC">
          <div class="col-sm-8 text-center" >
            <h3 >Medina=Citi</h3>
            <br><br>
            <h4>I have been working at Medina=Citi since summer of 2016. I'm the lead web developer for the company.</h4>
          </div>
          <div class="col-sm-4 " >
            <img src="images/medina.png" class="img-responsive" alt="NJIT">
          </div>
        </div>
      </section>
  </div><!-- End of Work-->

  <!-- Contact -->
  <div class="container-fluid" style = "background-color: gray;" >
    <section>
      <div class="page-header text-center" id="4">
          <h2>Contact Information</h2>
        </div>

        <div class="row ">
          <div class="col-sm-8 text-center " style = "font-size: 19px">
          </br></br></br>
            <address>
              <strong>Palash Jain</strong></br>
              2 Concord Dr, </br>
              Kendall Park, NJ, 08824</br>
              Email: pj92@njit.edu</br>
              732(666)3025
            </address>
          </div>
          <div class="col-sm-4 pull-right" >
            <img src="images/palash11.jpg" class="img-responsive" alt="palash">
          </div>
        </section>
          </div><!-- End of Contact-->




  <script scr="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script scr="js/bootstrap.js"></script>
  <script>
  $('a[href*="#"]:not([href="#"])').click(function() {
  if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    if (target.length) {
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 1000);
      return false;
    }
  }
});
</script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</body>

</html>
