<!DOCTYPE HTML>
<html>
  <head>
    <title>
      Daftar Resepku
    </title>
    <style>
      body{
        background: -webkit-linear-gradient( bottom, lightgrey, grey);
        background-repeat: no-repeat;
       background-size: cover; 
      }
      .card{
        position: absolute;
        top: 100px;
        border: 1px solid #000;
      }
      h1{
        font-family: "Comic Sans MS", cursive;
        color: white;
        text-shadow: 3px 2px 1px black;
      }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  </head>
  <body>
    <a href="/home" type="button" class="btn btn-primary btn-lg " >BACK
    </a> 
    <a href="resep/add" type="button" class="btn btn-primary btn-lg" >Tambah Resep
    </a> 
    <div class ="container">
      <strong>
        <marquee>
          <h1>DAFTAR RESEPKU : 
          </h1>
        </marquee>
      </strong>
      <marquee>
        <img src="images/a.jpg" height="100"> 
        <img src="images/b.jpg" height="100">
        <img src="images/c.jpg" height="100">
        <img src="images/d.jpg" height="100">
        <img src="images/makanan-khas-kebumen.jpg" height="100">
        <img src="images/r.jpg" height="100">
        <img src="images/g.jpg" height="100">
        <img src="images/e.jpg" height="100">
        <img src="images/f.jpg" height="100">
      </marquee>
      @foreach($data_resep as $rsp)
      <br>
      <div class="card-group">
        <div class="card text-white bg-dark mb-3" >
          <div class="card-header">{{$rsp->namamakanan}}
          </div>
          <center>
            <h5 class="card-title">{{$rsp->deskripsi}}
            </h5>
          </center>
          <p class="card-text"style="text-align:center">{{$rsp->bahandancara}}
          </p>
          <p class="card-text">
            <small>Created at : {{$rsp->created_at}}
            </small>
          </p>
          <a href="resep/edit/{{$rsp->id}}" class="btn btn-primary">Edit
          </a>
          <a href="resep/delete/{{$rsp->id}}" class="btn btn-secondary" >Hapus
          </a>
        </div>
      </div>
      @endforeach
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
      </script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
      </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
      </script>
      </body>
    </html>
