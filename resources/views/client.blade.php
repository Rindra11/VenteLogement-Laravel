<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @include('cdn')

    <title>Client</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
       <i class="fas fa-h3 fa-3x fa-fw"> <h3>Formulaire Client</h3></i>
    </nav>

<br>
<div class="container">
<nav class="navbar navbar-light bg-light">
 <form action="clientData" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col">
            <label>Identité :</label>
            <input type="number" name="IdCl" class="form-control"  placeholder="Identité client">
          </div>
      <div class="col">
        <label>Nom :</label>
        <input type="text" name="NomCl" class="form-control"  placeholder="Votre nom">
      </div>
      <div class="col">
        <label>Adresse :</label>
        <input type="text" name="AdrsCl" class="form-control" placeholder="Votre Adresse">
      </div>
      <div class="col">
        <label>Lieu de travail :</label>
        <input type="text" name="LieuTraCl" class="form-control" placeholder="Lieu">
      </div>
    </div>
    <br>
    <button type="submit" class="btn btn-danger btn-sm">Ajouter</button>
  </form>
</nav>
<br><br>

<table class="table">
    <thead class="bg-dark text-white fw-bold">
        <th>Identité client</th>
        <th>Nom client</th>
        <th>Adresse client</th>
        <th>Lieu du Travail</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach($data as $item)
        <tr>
            <td>{{$item['IdCl']}}</td>
            <td>{{$item['NomCl']}}</td>
            <td>{{$item['AdrsCl']}}</td>
            <td>{{$item['LieuTraCl']}}</td>
            <td>
                <a href="/client{{$item->IdCl}}" title="Modifier" type="button" class="btn btn-danger btn-sm">Modification</a>
                <a href="/client{{$item->IdCl}}" title="Supprimer" type="button" class="btn btn-danger btn-sm">Suppression</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
<br>
<nav aria-label="Page navigation example">
    <ul class="pagination">
      <li class="page-item"><a class="page-link" href="/accueil">Previous</a></li>
      <li class="page-item"><a class="page-link" href="/">1</a></li>
      <li class="page-item"><a class="page-link" href="/clients">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
  </nav>

<script src="{{asset('js/app.js')}}"></script>
</body>

</html>
