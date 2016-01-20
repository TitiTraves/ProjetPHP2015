



  
<head >
        
        <title>Accueil</title>
        <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
        <style>
  .slide1{
  background-image: url('./img/Fallout4.jpg');
  height: 500px;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}
.slide2{
  background-image: url('./img/portal.jpg');
  height: 500px;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}
.slide3{
  background-image: url('./img/lol.jpg');
  height: 500px;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}
.carousel-caption h1{
  font-size: 5.4em;
  font-family: 'Pacifico', cursive;
  padding-bottom: .4em;
}
.carousel-caption p{
  font-size: 2em;
}
</style>
</head>
<body background="./img/blacktheme.jpg">
<div id="theCarousel" class="carousel slide" data-ride="carousel">
 
  
  <ol class="carousel-indicators">
    <li data-target="#theCarousel" data-slide-to="0" class="active"> </li >
    <li data-target="#theCarousel" data-slide-to="1"> </li>
    <li data-target ="#theCarousel" data-slide-to="2"> </li>
  </ol >
 
 
  <div class="carousel-inner">
    <div class="item active" >
    <div class ="slide1"></div>
    <div class="carousel-caption">
       <h1>Sortie de Fallout 5 en approche</h1>
      <p>Venez d'ores et déjà réserver votre copie</p>
    </div>
  </div>
  <div class="item">
  <div class="slide2"></div>
  <div class="carousel-caption">
    <h1 color="blue">Chaque mois</h1>
    <p>De nouvelles démos gratuites</p>
  </div>
  </div>
  <div class="item">
  <div class="slide3"></div>
  <div class="carousel-caption">
  
  <p>Rejoignez une communauté de joueurs passionés</p>
  </div>
  </div>
  </div>
 
  
  <a class="left carousel-control" href="#theCarousel" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left"> </span>
  </a>
  <a class="right carousel-control" href="#theCarousel" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
  </div>
    
</body>

