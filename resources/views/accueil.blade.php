<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @include('cdn')
    <title>Accueil</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-warning bg-warning">
        <a class="navbar-brand" href="#">Vente de logement</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Agences <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/clients">Client</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/cites">Cités</a>
              </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-danger my-2 my-sm-0" type="submit">Recherche</button>
          </form>
        </div>
      </nav>
<br>

<div class="card" style="width: 18rem; border-radius: 5vh">
    @foreach($data as $item)
    <div class="card-body">
      <h5 class="card-text">Identité Agences :{{$item['IdA']}}</h5>
      <h6 class="card-text">Libellé Agences :{{$item['LibelleA']}}</h6>
      <p class="card-text">Adresse Agences : {{$item['AdresA']}}</p>
      <a class="card-text">Télephone Agences :{{$item['TelA']}}</a>
      <a class="card-text">Email Agences :{{$item['EmailA']}}</a>
    </div>
    @endforeach
  </div>

<br>
<div class="card">
    <h5 class="card-header">Featured</h5>
    <div class="card-body">
      <h5 class="card-title">Special title treatment</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>


<!---Javascript-->
<script src="{{asset('js/app.js')}}"></script>
</body>



</html>
