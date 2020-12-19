<!DOCTYPE HTML>
<head>
  <style>
    h1{
      text-align : center;
    }
    h3{
      color: green;
    }
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
  <br>
  <br>
  <div class="container">
    <div class="card border-success mb-3" >
      <div class="card-header bg-transparent border-success">
        <marquee>
          <h3>
            <strong>Yuk Tambah Resepmu!>>Yuk Tambah Resepmu!>>Yuk Tambah Resepmu!
            </strong>
          </h3>
        </marquee>
      </div>
      <div class="card-body text-success">
        <h1>FORMULIR TAMBAH RESEP 
        </h1>
        <br>
        <br>
        <br>
        <form action="/resep/create" method="post">
          @csrf
          <div class="form-group"> 
            <label for="namamakanan">Nama Makanan
            </label>
            <input type="text" class="form-control" required="required" name="namamakanan">
            </br>
          </div>
        <div class="form-group"> 
          <label for="deskripsi">Deskripsi Makanan
          </label>
          <input type="text" class="form-control" required="required" name="deskripsi">
          </br>
      </div>
      <div class="form-group">
        <label for="bahandancara">Bahan Dan Cara
        </label>
        <input type="text" class="form-control" required="required" name="bahandancara" >
        </br>
    </div>
    
    <a href="/resep" type="button" class="btn btn-primary " >Back
    </a> 
    <button type="submit" class="btn btn-primary float-right">Submit
    </button>
    </form>
  </div>
</div>
</body>
