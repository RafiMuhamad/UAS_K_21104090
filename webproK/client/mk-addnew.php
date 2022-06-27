<h3>Tambah data matakuliah</h3>

<div class="alert alert-primary" role="alert" id="sukses">
  Data Mata Kuliah Telah ditambahkan
</div>
<div class="alert alert-danger" role="alert" id="gagal">
  Data Mata Kuliah Gagal ditambahkan
</div>

<form id="mkbaru">
  <div class="mb-3">
    <label for="kodemk" class="form-label">Kode MK</label>
    <input type="text" class="form-control" id="txkode">
    <div id="kodemkHelp" class="form-text">isikan kode MK.</div>
  </div>

  <div class="mb-3">
    <label for="matkuliah" class="form-label">Mata Kuliah</label>
    <input type="text" class="form-control" id="txmatkul">
    <div id="matkulHelp" class="form-text">isikan Nama matakuliah.</div>
  </div>

  <div class="mb-3">
    <label for="dosen" class="form-label">Dosen</label>
    <input type="text" class="form-control" id="txdosen">
    <div id="dosenHelp" class="form-text">isikan dosen.</div>
  </div>
  
  <div class="mb-3">
    <label for="sks" class="form-label">Jumlah SKS</label>
    <input type="text" class="form-control" id="txsks">
    <div id="sksHelp" class="form-text">isikan Jumlah SKS.</div>
  </div>

  <button type="button" class="btn btn-primary" onclick="mkupdate()">Simpan Data</button>
</form>

<script src="mk-update.js"></script>
<script>
  document.getElementById("sukses").style.display="none";
  document.getElementById("gagal").style.display="none";
</script>