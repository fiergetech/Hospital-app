<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Doctor</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
      <div class="container-fluid page-body-wrapper">
        <div class="container" style="padding-top: 100px;">

        @if (session()->has('message'))
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            {{ session()->get('message') }}
          </div>
        @endif
        
          <form class="needs-validation" novalidate enctype="multipart/form-data" action="{{ url('upload_doctor') }}" method="post">
            @csrf
            <div class="form-group row">
              <label for="name" class="col-sm-2 col-form-label">Nama Dokter</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" placeholder="Nama Dokter" required style="color: #FFFF;">
                <div class="invalid-feedback">
                  Please provide a valid name.
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="phone" class="col-sm-2 col-form-label">No Telp / Whatsapp</label>
              <div class="col-sm-10">
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="No Telp / Whatsapp" required style="color: #FFFF;">
                <div class="invalid-feedback">
                  Please provide a valid phone number.
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="spesialis" class="col-sm-2 col-form-label">Spesialis (Keahlian)</label>
              <div class="col-sm-10">
                <select class="form-control" id="spesialis" name="spesialis" required style="color: #FFFF;">
                  <option value="">-- Pilih Spesialis --</option>
                  <option value="anak">Spesialis Anak</option>
                  <option value="penyakit_dalam">Spesialis Penyakit Dalam</option>
                  <option value="bedah">Spesialis Bedah</option>
                  <option value="kandungan">Spesialis Kandungan</option>
                </select>
                <div class="invalid-feedback">
                  Please select a specialization.
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="room" class="col-sm-2 col-form-label">Room No</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" id="room" name="room" placeholder="Room No" required style="color: #FFFF;">
                <div class="invalid-feedback">
                  Please provide a valid room number.
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="file" class="col-sm-2 col-form-label">Foto Dokter</label>
              <div class="col-sm-10">
                <input type="file" class="form-control-file" id="file" name="file" required>
                <div class="invalid-feedback">
                  Please upload a photo.
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-success">Simpan</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          var forms = document.getElementsByClassName('needs-validation');
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>