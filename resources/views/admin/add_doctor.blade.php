<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <style type="text/css">
        label{
            display: inline-block;
            width: 200px;
            margin-bottom: 10px;
        }
    </style>
   @include('admin.css')
  <body>
  <div class="container-scroller">

    @include('admin.sidebar')
      <!-- partial -->
    @include('admin.navbar')
    <div class="container-fluid page-body-wrapper">

    <div class="container" align="center" style="padding-top: 100px;">
     <form>

        <div style="padding: 15px;">
            <label>Nama Dokter</label>
            <input type="text" name="name" style="color:black;" placeholder="Nama Dokter">
        
        </div>
        <div style="padding: 15px;">
            <label>No Telp / Whatsapp</label>
            <input type="number" name="name" style="color:black;" placeholder="No Telp / Whatsapp">
        
        </div>
        <div style="padding: 15px;">
            <label>Spesialis (Keahlian)</label>
            <select name="spesialis" style="color:black;">
            <option value="">-- Pilih Spesialis -- </option>
            <option value="">Spesialis Anak</option>
            <option value="">Spesialis Penyakit Dalam</option>
            <option value="">Spesialis Bedah</option>
            <option value="">Spesialis Kandungan</option>
            </select>
        
        </div>

        <div style="padding: 15px;">
            <label>Room No</label>
            <input type="number" name="room " style="color:black;" placeholder="Room No">
        
        </div>
        <div style="padding: 15px;">
            <label>Foto Dokter</label>

            <input type="file" name="file">
        </div>

        <div style="padding: 15px;">

            <input type="" class="btn btn-success" value="Simpan">
        </div>

     </form>

    <div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
