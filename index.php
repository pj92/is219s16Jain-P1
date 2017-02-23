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
    <link href='css\styles.css' rel="stylesheet"/>

</head>

<body>
  <!-- Navbar-->
  <nav class="navbar transparent navbar-default navbar-fixed-top" id="portfolio navbar">
    <div class="container">
      <div class="navbar-header">
        <!-- Logo -->
        <a href = ""><img class="navbar-brand" src = "images/logo.png"></a>
        <!--toggle menu-->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data.target="#navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav navbar-nav" style="font-weight: bold;">
          <li><a href="#1">Education</a>
          <li><a href="#2">Interests</a>
          <li><a href="#3">Work Experience</a>
          <li><a href="#4">Contact Information</a>
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
  <div class="container">
    <section>
        <div class="page-header" id="1">
          <h2>
  </div><!-- End of Education-->




  <script scr="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script>
  $(document).ready(function(){
$('.nav li a').click(function() {
  if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
  && location.hostname == this.hostname) {
    var $target = $(this.hash);
    $target = $target.length && $target
    || $('[name=' + this.hash.slice(1) +']');
    if ($target.length) {
      var targetOffset = $target.offset().top;
      $('html,body')
      .animate({scrollTop: targetOffset}, 1000);
     return false;
    }
  }
});
});
</script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</body>

</html>
