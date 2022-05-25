
<h3>Tambah Data Mahasiswa</h3>
<form action="">
    <div class="mb-3">
        <label class="form-label">NIM</label>
        <input type="text" class="form-control" id="txnim" placeholder="Isikan NIM">
    </div>

    <div class="mb-3">
        <label class="form-label">NAMA</label>
        <input type="text" class="form-control" id="txnama" placeholder="Isikan NIM">
    </div>

    <div class="mb-3">
        <label class="form-label">Jurusan</label>
        <select id="txjr" class="form-select">
            <option value="MTI">MTI</option>
            <option value="SK">SK</option>
            <option value="KAB">KAB</option>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Tanggal Lahir</label>
        <input type="text" class="form-control" id="txtgl" placeholder="Isikan NIM">
    </div>

    <div class="mb-3">
        <label class="form-label">Jenis Kelamin</label>
        <select id="txjkel" class="form-select">
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label"></label>
        <button  type="button" onclick="storedata()" class="bt btn-primery">Simpan Data</button>
        <button  type="button" onclick="batal()" class="bt btn-warning">Batal</button>
    </div>
</form>

<script>
    function batal() {
  location.replace("https://www.w3schools.com")
}
</script>
<script src="pagemhsstoredata.js"></script>