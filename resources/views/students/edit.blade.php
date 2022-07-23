<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <br>
        <a class="btn btn-success" href="{{ route('students.index') }}"> back</a>
        <br>
        <br>
        <form action="{{ route('students.update',$student->id) }}" method="post">

            @csrf
            @method('PUT')
            <div class="form-floating mb-3">
                <input type="number" min=0 name="nis" class="form-control" id="floatingInput" placeholder="input nis" required value="{{ $student->nis }}">
                <label for="floatingInput">Nis</label>
              </div>
              <div class="form-floating mb-3" >
                <input type="text" name="nama" class="form-control" id="floatingPassword" placeholder="input nama" required value="{{ $student->nama }}">
                <label for="floatingPassword">Nama</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" name="rayon" class="form-control" id="floatingPassword" placeholder="input rayon" required value="{{ $student->rayon }}">
                <label for="floatingPassword">Rayon</label>
              </div>
              <div class="form-floating">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
