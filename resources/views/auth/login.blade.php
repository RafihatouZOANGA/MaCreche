<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Connexion</title>
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

  <div class="container">
    <div class="row">
      <div class="col-6">
        <img class="img-fluid" src="images/baby_login.jpg" alt="">
      </div>
      <div class="col-4">
        <div class="wrapper fadeInDown">
            <div id="formContent"> 
                <h2 class="active debut"> Connexion</h2> 
                <div class="fadeIn first">
                </div>
                <form action="{{route('login')}}" method="post">
                @csrf
                <input type="email" id="login" required class="fadeIn second @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                <input type="password" required id="password" class="fadeIn third @error('password') is-invalid @enderror" name="password" placeholder="Mot de passe">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input font-weight-bold" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label font-weight-bold text-primary" for="remember">
                                    {{ __('Se souvenir de moi!') }}
                        </label>
                    </div>
                </div>
                <input type="submit" class=" fadeIn fourth" value="Se connecter">
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-6 offset-md-6">
    <a class="btn text-center back_btn" href=""> Retour</a>
  </div>

  {{-- <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a> --}}

</body>

</html>