<!DOCTYPE HTML>
<head>
  <style>
    h1{
      text-align : center;
    }
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<br><br><br>
  <div class="container">
  <div class="card border-success mb-3" >
      <div class="card-header bg-transparent border-success">
        <marquee>
          <h3>
            <strong>Edit Resepmu Disini!
            </strong>
          </h3>
        </marquee>
      </div>
      <div class="card-body text-success">
    <h1> EDIT RESEP 
    </h1>
    <br>
    <br>
    <br>
    <form action="/resep/update/{{$resep->id}}" method="post" >
      {{csrf_field()}}
      <input type="hidden" name="id" value="{{$resep->id}}">
      </br>
    <div class="form-group">
      <label for="namamakanan">NAMA MAKANAN
      </label>
      <input type="text" class="form-control" required="required" name="namamakanan" value="{{$resep->namamakanan}}">
      </br>
  </div> 
  <div class="form-group">
    <label for="deskripsi">DESKRIPSI
    </label>
    <input type="text" class="form-control" required="required" name="deskripsi" value="{{$resep->deskripsi}}">
    </br>
  </div>
<div class="form-group">
  <label for="bahandancara">Bahan dan Cara
  </label>
  <input type="text" class="form-control" required="required" name="bahandancara" value="{{$resep->bahandancara}}">
  </br>
</div>
<a href="/resep" type="button" class="btn btn-primary " >Back
    </a> 
<button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data
</button>
</form>
</div>
</body>
