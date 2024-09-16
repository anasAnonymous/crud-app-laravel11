<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Screen App</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="/">easyD Screens</a>
        </div>
        <ul class="nav navbar-nav">
        <li class="active"><a href="/">Home</a></li>
        </ul>
    </div>
    </nav>

    <div class="container">
        <div class="text-right">
            <a href="/screen/create" class="btn btn-primary">Create a Screen</a>
        </div>
        <h1>Screens</h1>

        <div class="row">
            @foreach($screens as $screen)
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="screens/{{ $screen->image }}" alt="Screen Media" width="50" height="50">
                        <div class="card-body">
                            <h3 class="card-title">{{ $screen->title }}</h3>
                            <p class="card-text">{{ $screen->description }}</p>
                        </div>
                        <div class="card-footer">
                            <a href="screen/{{ $screen->id }}/edit" class="btn btn-primary btn-sm">Edit</a>
                            <form method="POST" action="/screen/{{$screen->id}}/delete" class="d-inline">
                                @csrf 
                                @method("DELETE")
                                <button type="submit" class="btn btn-info btn-sm">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
    </div>
</body>
</html> -->



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD Screen App</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">easyD Screens</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="mt-2 container">
    <div class="text-right">
      <a href="/screen/create" class="btn btn-primary">Create a Screen</a>
    </div>
    <h1>Screens</h1>

    <div class="row">
      @foreach($screens as $screen)
        <div class="col-md-3">
          <div class="card mb-3 rounded" style="border-radius: 5px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
            <img class="card-img-top" src="screens/{{ $screen->image }}" alt="Screen Media" width="50" height="50" style="height: 200px; object-fit: cover;">
            <div class="card-body">
              <h3 class="card-title mb-2">{{ $screen->title }}</h3>
              <p class="card-text">{{ $screen->description }}</p>
            </div>
            <div class="card-footer">
              <a href="screen/{{ $screen->id }}/edit" class="btn btn-primary btn-sm">Edit</a>
              <form method="POST" action="/screen/{{$screen->id}}/delete" class="d-inline">
                @csrf
                @method("DELETE")
                <button type="submit" class="btn btn-info btn-sm">Delete</button>
              </form>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>