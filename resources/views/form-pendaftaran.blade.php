<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Wisata Ticketing</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/pricing/">

    

    <!-- Bootstrap core CSS -->
<link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="/assets/pricing.css" rel="stylesheet">
  </head>
  <body>
    
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check" viewBox="0 0 16 16">
    <title>Check</title>
    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
  </symbol>
</svg>

<div class="container py-3">
  <header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
        <span class="fs-4">Wisata Niaga</span>
      </a>

      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 text-dark text-decoration-none" href="/informasi">Data</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="#">Tengtang Kami</a>
      </nav>
    </div>
  </header>

  <main>
    <div class="py-5 text-center">
      <h2>Form Pemesanan</h2>
      <p class="lead">Untuk melakukan pemesanan tempat wisata silahkan mengisi formulir dibawah ini.</p>
    </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Masukan Data</h4>
        <form action="{{ route('tikets.store') }}" method="post" class="needs-validation" novalidate>
            @csrf
          <div class="row g-3">
            <div class="col-12">
              <label for="name" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" name="nama" id="name" placeholder="" value="" required>
              <div class="invalid-feedback">
                Wajib Diisi.
              </div>
            </div>
            <div class="col-12">
              <label for="nid" class="form-label">Nomor Identitas</label>
              <div class="input-group has-validation">
                <input type="text" class="form-control" name="nik" id="nid" placeholder="" required>
              <div class="invalid-feedback">
                  Wajib Diisi.
                </div>
              </div>
            </div>
            <div class="col-12">
              <label for="nohp" class="form-label">No. Hp</label>
              <div class="input-group has-validation">
                <input type="text" class="form-control" name="no_hp" id="nohp" placeholder="" required>
              <div class="invalid-feedback">
                  Wajib Diisi.
                </div>
              </div>
            </div>
            <div class="col-12">
              <label for="twisata" class="form-label">Tempat Wisata</label>
              <select class="form-select" name="tempat_wisata" id="twisata" required>
                <option value="">Pilih...</option>
                <option>Baturaden</option>
                <option>Pantai Menganti</option>
                <option>Kebumen</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>
            <div class="col-12">
              <label for="tanggal" class="form-label">Tanggal Kunjungan</label>
              <div class="input-group has-validation">
                <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="" required>
              <div class="invalid-feedback">
                  Wajib Diisi.
                </div>
              </div>
            </div>
            <div class="col-12">
              <label for="pdewasa" class="form-label">Pengunjung Dewasa</label>
              <div class="input-group has-validation">
                <input type="text" class="form-control" name="p_dewasa" id="pdewasa" value="" placeholder="" required>
              <div class="invalid-feedback">
                  Wajib Diisi.
                </div>
              </div>
            </div>
            <div class="col-12">
              <label for="panak" class="form-label">Pengunjung Anak-Anak</label>
              <div class="input-group has-validation">
                <input type="text" class="form-control" name="p_anak" id="panak" value="" placeholder="" required>
              <div class="invalid-feedback">
                  Wajib Diisi.
                </div>
              </div>
            </div>
            <div class="col-12">
              <label for="harga" class="form-label">Harga</label>
              <div class="input-group has-validation">
               Rp. {{$tikets->harga}}
              <div class="invalid-feedback">
                  Wajib Diisi.
                </div>
              </div>
            </div>
            <div class="col-12">
            <label for="totbay" class="form-label">Total Bayar</label>
              <div class="input-group has-validation">
                  Rp. 0
              <div class="invalid-feedback">
                  Wajib Diisi.
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <button type="submit" class="btn btn-dark">Pesan Tiket</button>
            </div>
        </form>
            <div class="col-sm-4">
              <button type="submit" class="btn btn-dark">Hitung Total Bayar</button>
            </div>
            <div class="col-sm-4">
              <button type="submit" class="btn btn-dark">Cancel</button>
            </div>

      </div>
    </div>
  </main>
  
		
		</script>

  <footer class="pt-4 my-md-5 pt-md-5 border-top">
  </footer>
</div>
  </body>
</html>

