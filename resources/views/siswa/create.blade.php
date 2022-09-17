<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name View Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h1>Add Data</h1>
    <form action="{{ route('siswa.store') }}" method="post">
      @csrf
    <div class="mb-2">
          <input type="text"name="siswa" class="form-control" placeholder="Name">
    </div>
    <div class="mb-2">
          <input type="text"name="gender" class="form-control" placeholder="Gender">
        </div>
    <div class="mb-2">
          <input type="text"name="hobby" class="form-control" placeholder="hobby">
        </div>
        <div class="mb-2">
          <input type="reset" class="btn btn-secondary"> &nbsp; <input type="submit" value="Save" class="btn btn-primary">
        </div>
      </form>
    
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
<!-- Aditya -->