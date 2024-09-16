<!DOCTYPE html>
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
        <li><a href="#">Page 1</a></li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
        </ul>
    </div>
    </nav>

    <div class="container">
        <div class="text-right">
            <a href="/screen/create" class="btn btn-primary">Create a Screen</a>
        </div>
        <h1>Screens</h1>

        <!-- <div class="card" style="width: 18rem;">
            @foreach($screens as $screen)
            <img class="card-img-top" src="screens/{{ $screen->image}}" alt="Screen Media" width="50" height="50">
            <div class="card-body">
                <h3 class="card-title">{{ $screen->title }}</h3>
                <p class="card-text">{{ $screen->description }}</p>
            </div>
            @endforeach
            <div class="card-footer">
                <a href="/" class="btn btn-primary btn-sm">Edit</a>
                <a href="/" class="btn btn-info btn-sm">Delete</a>
            </div>
        </div> -->
        
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
</html>