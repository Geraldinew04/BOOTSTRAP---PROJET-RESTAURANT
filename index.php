<?php include("./partials/header.php") ?>

<div class="container">

  <div class="row">
    <div class="col-sm-12">

      <div class="card">
        <div class="card mb-3">
          <img class="card-img-top" src="img/restaurant.jpg" alt="Card image cap" style="max-width: 1200px; width: 100%; height: 600px">
          
          <div class="card-body">
            <h5 class="card-title">A propos de nous</h5>
            <p class="card-text">
            Cantina Kahlo, c'est la passion de la cuisine mexicaine authentique. 
            Nos tacos, burritos et autres plats sont élaborés dans le respect de celle-ci, tout en y apportant une touche street food, et sont à déguster dans un cadre décoré aux couleurs et à l'éffigie de la célèbre peintre mexicaine, Frida Kahlo.
            </p>
          </div>
        </div>

      </div>
      
    </div>
  </div>
</div>

<br>

<div class="container">
  <div class="row">

    <div class="col-sm-6 col-xs-12">

      <div class="card" style="margin-top: 15px; ">
        <ul class="list-group list-group-flush">
          <li class="list-group-item list-group-item-warning" >Nos desserts en suggestion</li>
          <li class="list-group-item d-flex justify-content-between align-items-center">Churros nutella / sucre 
              <span class="badge badge-info badge-pill"> 5,00€</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">Tarte au citron 
            <span class="badge badge-info badge-pill"> 5,00€</span>
          </li>
        </ul>
      </div>
      
    </div>
   
    <div class="col-sm-6 col-xs-12">

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: 15px; ">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
       </ol>

        <div class="carousel-inner">
          <div class="carousel-item">
            <img class="d-block w-100" src="img/resto2.jpg" alt="restaurant" style="max-width: 600px; width: 100%; height: 250px;">
          </div>

          <div class="carousel-item active">
            <img class="d-block w-100" src="img/tequila.jpg" alt="tequila" style="max-width: 600px; width: 100%; height: 250px;">
              <div class="carousel-caption d-none d-md-block">
                <h5><strong>HAPPY HOUR </strong> tous les JEUDIS, VENDREDIS et SAMEDIS de <strong> 22H à 23H</strong></h5>
                <p><strong>SHOTS DE TEQUILA A 1€ !!</strong></p>
              </div>
          </div>

          <div class="carousel-item">
            <img class="d-block w-100" src="img/chili_burrito.jpg" alt="burrito" style="max-width: 600px; width: 100%; height: 250px;">
            <div class="carousel-caption d-none d-md-block" style="color: #FFF;">
                <h5 style="background-color: rgba(255, 0, 0, 0.4);"><strong>STUDENT DEAL 6€ </strong></h5>
                <p style="background-color: rgba(255, 0, 0, 0.4);"><strong>1 burrito + 1 boisson </strong> - <em>sur présentation de votre student card</em></p>
            </div>
          </div>

        
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
          </a>
      </div>

     
      
    </div>
    
  </div>
</div>

<br>
 
  

<?php include("./partials/footer.php") ?>


