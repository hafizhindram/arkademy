<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GrandBootCamp</title>

    <!-- Scripts -->
    <script src="{{ asset('/js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <p>GrandBootCamp</p>
        </a>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
    <h1 class="mt-5">Jawaban Soal Nomor 1</h1>
    <p>Jawaban bisa dilihat pada link berikut <a href="{{'api/nomorsatu'}}">{{url('api/nomorsatu')}}</a></p>
    <br>

    <h1>Jawaban Soal Nomor 2</h1>
    <div>
    @if(Session::has('flash_message'))
    <div class="alert alert-success alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
        {!! session('flash_message') !!}
    </div>
    @else
    <div class="alert alert-danger alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
        Validasi gagal
    </div>
    @endif

    <form action="{{ route('soaldua')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Username</label>
            <input type="text" class="form-control" name="username">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-default" value="Kirim">
        </div>
    </form>
    </div>
    <br>

    <h1>Jawaban Soal Nomor 3</h1>
    <p>Jawaban bisa dilihat pada link berikut <a href="{{'api/nomortiga'}}">{{url('api/nomortiga')}}</a></p>
    <br>

    <h1>Jawaban Soal Nomor 4</h1>
    <p></p>
    <br>

    <h1>Jawaban Soal Nomor 5</h1>
    <p></p>
    <br>

    <h1>Jawaban Soal Nomor 6</h1>
    <p>SELECT cat.id, cat.name, COUNT(prod.id) AS jumlah_product from product_categories cat, products prod WHERE cat.id=prod.category_id GROUP BY prod.category_id</p>
    <br>

    <h1>Jawaban Soal Nomor 7</h1>
    <div class="col-md-8">
    <table class="table table-hover">
      <tbody>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>JUMLAH PRODUCT</th>
      </tr>
      @foreach($datas as $data)
      <tr>
        
        <td>{{$data->id}}</td>
        <td>{{$data->name}}</td>
        <td>{{$data->Jumlah_Product}}</td>
        
      </tr>
      @endforeach
      </tbody>
    </table>
    </div>
    </div>
    <!-- /.container -->


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
