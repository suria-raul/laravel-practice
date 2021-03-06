<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ url('nerds') }}">Nerd Alert</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ route('nerds.index') }}">View All Nerds</a></li>
            <li><a href="{{ route('nerds.create') }}">Create a Nerd</a>
        </ul>
    </nav>

    <h1>Update this Nerd</h1>

    <!-- if there are creation errors, they will show here -->
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <form action="{{ route('nerds.update', $nerd->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="{{ $nerd->email }}">
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{ $nerd->name }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Nerd Level</label>
            <input type="text" class="form-control" id="level" placeholder="Enter level" name="nerd_level" value="{{ $nerd->nerd_level }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
</body>
</html>
