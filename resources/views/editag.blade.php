<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @include('cdn')
    <title>Edit Agence</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <i class="fas fa-h3 fa-3x fa-fw"> <h3>Formulaire Agence</h3></i>
     </nav>
     <br>
     @csrf
     <div class="row">
         <div class="col">
            <form action="editagence" method="POST">
                <label>Libelle :</label>
                <input type="text" name="LibelleA" value="{{ $editagence->LibelleA }}" class="form-control"  placeholder="libelle agence">
                <button type="submit" class="btn btn-danger btn-sm">Modifier</button>
            </form>
        </div>
     </div>
</body>
</html>
