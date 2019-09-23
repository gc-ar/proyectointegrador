<!doctype html>
<html lang="es">
  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="carrousel.css">
      <title>E-Commerce</title>
</head>
  <body>
        <header>
           <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
             <a class="navbar-brand" href="#">Carousel</a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarCollapse">
               <ul class="navbar-nav mr-auto">
                 <li class="nav-item active">
                   <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link" href="#">Link</a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link disabled" href="#">Disabled</a>
                 </li>
               </ul>
               <form class="form-inline mt-2 mt-md-0">
                 <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                 <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
               </form>
             </div>
           </nav>
      </header>

      <main role="main">

           <div id="myCarousel" class="carousel slide" data-ride="carousel">
             <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
             </ol>
             <div class="carousel-inner">
               <div class="carousel-item active">
                 <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                 <div class="container">
                   <div class="carousel-caption text-left">
                     <h1>Los mejores uniformes escolares</h1>
                     <p>Visite nuestra tienda de artículos</p>
                     <p><a class="btn btn-lg btn-primary" href="#" role="button">Visitar galería</a></p>
                   </div>
                 </div>
               </div>
               <div class="carousel-item">
                 <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                 <div class="container">
                   <div class="carousel-caption">
                     <h1>Todos los modelos</h1>
                     <p>Tenemos los uniformes para todos los colegios de Buenos Aires</p>
                     <p><a class="btn btn-lg btn-primary" href="#" role="button">Ver listado</a></p>
                   </div>
                 </div>
               </div>
               <div class="carousel-item">
                 <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                 <div class="container">
                   <div class="carousel-caption text-right">
                     <h1>¡Promociones!</h1>
                     <p>Visite nuestra sección de promociones</p>
                     <p><a class="btn btn-lg btn-primary" href="#" role="button">Visitar</a></p>
                   </div>
                 </div>
               </div>
             </div>
             <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
             </a>
             <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
             </a>
          </div>
          <div class="container mb-4">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-4 mb-4">
                <img src="img/hospitalario.jpg" alt="" class="img-fluid">
              </div>
              <div class="col-12 col-md-6 col-lg-4 mb-4">
                <img src="img/hospitalario.jpg" alt="" class="img-fluid">
              </div>
              <div class="col-12 col-md-6 col-lg-4 mb-4">
                <img src="img/egresados.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
    </main>

       <!-- FOOTER -->
      <footer class="container">

        <?php include_once 'footer.php'; ?>
    </footer>

          <!-- Optional JavaScript -->
          <!-- jQuery first, then Popper.js, then Bootstrap JS -->
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
