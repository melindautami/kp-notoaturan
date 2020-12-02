<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    input[type=text], select, textarea {
        width: 75%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
    }

    label {
    padding: 12px 12px 12px 0;
    display: inline-block;
    }

    input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
    }

    input[type=submit]:hover {
    background-color: #45a049;
    }

</style>
</head>
<body>

<h2 align= "center">Form Pengaduan Masyarakat</h2>

<div class="container">
  <form action="/pengaduan_status.php">
    <div class="row">
      <div class="col-25">
        <label for="name">Nama</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="tname" placeholder="Isikan nama anda..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subjek_aduan">Subjek Aduan</label>
      </div>
      <div class="col-75">
        <input type="text" id="subjek_aduan" name="subjek_aduan" placeholder="Masukan Subjek yang ingin anda adukan..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="deskripsi">Deskripsi</label>
      </div>
      <div class="col-75">
        <textarea id="deskripsi" name="deskripsi" placeholder="Tuliskan penjelasan secara lengkap.." style="height:200px"></textarea>
      </div>
    </div>
    <div>
    <div class="col-25">
        <label for="bukti_aduan">Bukti Pengaduan</label>
      </div>
        <input type="file" id="bukti_aduan" name="bukti_aduan">
    </div>  
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>

</body>
</html>
