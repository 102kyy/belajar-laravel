<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    {{-- NAVBAR --}}
    @include('layouts.navbar')
    {{-- /NAVBAR --}}

    {{-- content --}}
   <div class="section">
        <div class="container">
            {{-- row 1 --}}
            <div class="row mt-5">
                <center><h2>List Produk</h2></center>
            </div>
            {{-- row 2 --}}
            
            <div class="row mt-5">
                @foreach ($produks as $data)
                <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img src="data:image/jpeg;base64,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" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $data->nama_produk }}</h5>
                     <p class="card-text text-danger"><b>{{ $data->tanggal_produksi }}</b></p>
                     <p class="card-text"><b>Jumlah Stock : </b>{{ $data->jumlah }}</p>
                     <p class="card-text"><b>Spesifikasi Produk :</b> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, fugiat</p>
                     <a href="{{ url('produk/' . $data->id) }}" class="btn btn-dark">Order here</a>
                     </div>
                    </div>
                    </div>
                    @endforeach
                </div>
        </div>
    </div>
    {{-- /content --}}

    {{-- footer --}}
    @include('layouts.footer')
    {{-- /footer --}}


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

  </body>
</html>