<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Inscription</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- <link href="img/favicon.png" rel="icon"> a remplacer par l'icone du logo-->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="style/bootstrap-4.6.0-dist/css/bootstrap.min.css">
  <link href="style/css/style.css" rel="stylesheet">

</head>

<body>
   
  <div class="vide mt-5"></div>
  {{-- <div class="col-10">
    <div class=" wordart slate offset-md-3 text-fluid"> <span class="word"> Bienvenue à la crèche</span></div>
  </div> --}}

  <div class="container">
    <div class="row">
      <div class="col-6">
        <img class="img-fluid" src="images/baby_login.jpg" alt="">
      </div>
      <div class="col-4">
        <div class="fadeInDown">
          <div id="formContent">
              
              <h2 class="active debut">Inscription</h2>

              <!-- Formulaire -->
              <form action="{{route('membre.store')}}" method="post">
              @csrf
              <input type="text" id="login" class="fadeIn second" name="name" placeholder="Nom d'utilisateur">
              <input type="email" id="login" class="fadeIn second" name="email" placeholder="Email">
              <input type="password" id="password" class="fadeIn third" name="password" placeholder="Mot de passe">
              <input type="password" id="password" class="fadeIn third" name="password_confirmation" placeholder="Confirmez votre mot de passe">
              <input type="submit" class=" fadeIn fourth" value="S'inscrire">
              </form>
   
          </div>
      </div>
      </div>
    </div>
  </div>

  <div class="vide">
    <a class="btn text-center back_btn" href=""> Retour</a>
  </div>

  {{-- <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a> --}}

</body>

</html>