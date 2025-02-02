<x-app-layout>
  <html>
    <head>
      <title>Añadir nuevo evento</title>
      <meta content="">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <style>
        body {
          font-family: 'Exo', sans-serif;
        }
        .header-col {
          background: #E3E9E5;
          color: #536170;
          text-align: center;
          font-size: 20px;
          font-weight: bold;
        }
        .header-calendar {
          background: #EE192D;
          color: white;
        }
        .box-day {
          border: 1px solid #E3E9E5;
          height: 150px;
        }
        .box-dayoff {
          border: 1px solid #E3E9E5;
          height: 150px;
          background-color: #ccd1ce;
        }
      </style>
    </head>
    <body>
      <div class="container my-4">
        <div class="bg-white p-5 rounded-lg shadow-lg">
          <h1>Añadir nuevo evento</h1><br>
          <a class="btn btn-default mb-3" style="background-color: gray; color: white;" href="{{ asset('/Evento/index') }}">Atrás</a>
          <hr>

          @if (count($errors) > 0)
            <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
          @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>{{ $message }}</strong>
            </div>
          @endif

            <form action="{{ asset('/Evento/create') }}" method="post">
              @csrf
              <div class="form-group">
                <label>Titulo</label>
                <input type="text" class="form-control" name="titulo">
              </div>
              <div class="form-group">
                <label>Descripcion del Evento</label>
                <input type="text" class="form-control" name="descripcion">
              </div>
              <div class="form-group">
                <label>Fecha</label>
                <input type="date" class="form-control" name="fecha">
              </div>
              <br>
              <input type="submit" class="btn btn-info" style="background-color: #55aed7; color: white;" value="Guardar">
            </form>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <footer class="page-footer font-small blue pt-4">
        <!-- Copyright -->
      </footer>
      <!-- Footer -->
    </body>
  </html>
</x-app-layout>
