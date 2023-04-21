<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @include('cdn')
    <title>Cités</title>
</head>
<body>
    <div class="container">
    <h1>Formulaire Cités</h1>

 <form action="citesData" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col">
            <label>Identité cité :</label>
            <input type="number" name="IdC" class="form-control"  placeholder="Identité cités">
          </div>
      <div class="col">
        <label>Libelle Cités :</label>
        <input type="text" name="LibelleC" class="form-control"  placeholder="libelle cités">
      </div>
      <div class="col">
        <label>Identité Agences :</label>
        <input type="number" name="IdA" class="form-control" placeholder="Adresse agence">
      </div>
    </div>
    <br>
    <button type="submit" class="btn btn-danger btn-sm" >Ajouter</button>
  </form>
<br><br>

    <table class="table">
        <thead class="bg-dark text-white fw-bold">
            <th>Identité cité</th>
            <th>Libellé cité</th>
            <th>Identité agence</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
                <td>{{$item['IdC']}}</td>
                <td>{{$item['LibelleC']}}</td>
                <td>{{$item['IdA']}}</td>
                <td>
                    <a href="" title="Modifier" type="button" class="btn btn-primary btn-sm">Modification</a>
                    <a href="" title="Supprimer" type="button" class="btn btn-primary btn-sm">Suppression</a>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
</div>

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
