<form action="/proses" method="post">
    @csrf
    <label for="nim">NIM</label>
    <input type="number" id="nim" name="nim"> <br>
    <label for="nama">Nama</label>
    <input type="text" id="nama" name="nama"> <br>
    <button type="submit">Kirim</button>
</form>