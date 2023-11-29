<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Riwayat Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-4">Edit Data Barang</h1>

        <div class="container">

            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="/editdatabarang/{{ $data->id }}" method="POST" enctype="multipart/form-data">


                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputkodebarang" class="form-label">Kode Barang</label>
                                    <input type="text" name="kodebarang" class="form-control" id="exampleInputkodebarang" aria-describedby="emailHelp" value="{{ $data->kodebarang }}">
                                </div>
                               <div class="mb-3">
                                    <label for="exampleInputnamabarang" class="form-label">Nama Barang</label>
                                     <input type="text" name="namabarang" class="form-control" id="exampleInputnamabarang" aria-describedby="emailHelp" value="{{ $data->namabarang }}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputsatuan" class="form-label">Satuan</label>
                                    <input type="text" name="satuan" class="form-control" id="exampleInputsatuan" aria-describedby="emailHelp" value="{{ $data->satuan }}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputhargasatuan" class="form-label">Harga Satuan</label>
                                    <input type="text" name="hargasatuan" class="form-control" id="exampleInputhargasatuan" aria-describedby="emailHelp" value="{{ $data->hargasatuan}}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputstok" class="form-label">Stok</label>
                                    <input type="text" name="stok" class="form-control" id="exampleInputstok" aria-describedby="emailHelp" value="{{ $data->stok }}">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </body>
</html>
