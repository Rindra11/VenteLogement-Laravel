<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @include('cdn')

    <title>Agence</title>

</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <i class="fas fa-h3 fa-3x fa-fw"> <h3>Formulaire Agence</h3></i>
     </nav>
<br>
<div class="container">
<nav class="navbar navbar-light bg-light">
 <form action="insertData" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col">
            <label>Identité :</label>
            <input type="number" name="IdA" class="form-control"  placeholder="Identité agence">
          </div>
      <div class="col">
        <label>Libelle :</label>
        <input type="text" name="LibelleA" class="form-control"  placeholder="libelle agence">
      </div>
      <div class="col">
        <label>Adresse :</label>
        <input type="text" name="AdresA" class="form-control" placeholder="Adresse agence">
      </div>
      <div class="col">
        <label>Téléphone :</label>
        <input type="number" name="TelA" class="form-control" placeholder="numéro téléphone">
      </div>
      <div class="col">
        <label>Email :</label>
        <input type="email" name="EmailA" class="form-control" placeholder="Adresse email">
      </div>
    </div>
    <br>
    <button type="submit" class="btn btn-danger btn-sm">Ajouter</button>
  </form>
</nav>
<br><br>

    <table class="table">
        <thead class="bg-warning text-white fw-bold">
            <th>Identité Agences</th>
            <th>Libellé Agences</th>
            <th>Adresse Agences</th>
            <th>Télephone Agences</th>
            <th>Email Agences</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
                <td>{{$item['IdA']}}</td>
                <td>{{$item['LibelleA']}}</td>
                <td>{{$item['AdresA']}}</td>
                <td>{{$item['TelA']}}</td>
                <td>{{$item['EmailA']}}</td>
                <td>
                    <a href="/editagence/{{$item->LibelleA}}" title="Modifier" type="button" class="btn btn-outline-success btn-sm">Modification</a>
                    <a href="{{$item->LibelleA}}" title="Supprimer" type="button" class="btn btn-outline-success btn-sm">Suppression</a>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
</div>

<nav aria-label="Page navigation example">
    <ul class="pagination">
      <li class="page-item"><a class="page-link" href="/accueil">Previous</a></li>
      <li class="page-item"><a class="page-link" href="/clients">1</a></li>
      <li class="page-item"><a class="page-link" href="/cites">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
  </nav>
<script src="{{asset('js/app.js')}}"></script>
</body>

</html>
