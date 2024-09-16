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
    @if($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <strong>{{ $message  }}</strong>
        </div>
    @endif
    <div class="container">
        <h1>New Screen</h1>
        <div class="d-flex justify-content-center">
            <div class="col-sm-8">
                <form method="POST" action="/screen/{{ $screen->id }}/update" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Enter a Title" value="{{ old('title', $screen->title) }}">
                        @if($errors->has('title'))
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" rows="4" class="form-control" placeholder="Enter a Description">{{ old('description', $screen->description) }}</textarea> 
                        @if($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif                        
                    </div>
                    <div class="form-group">
                        <label>Media</label>
                        <input type="file" name="media" class="form-control">
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-success">Save Changes</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</body>
</html>