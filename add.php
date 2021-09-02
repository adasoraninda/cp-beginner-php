<html>

<head>
    <title>Tambah Data</title>
</head>

<body>
    <form action="insert.php" method="post">
        <label for="nama">Nama</label>
        <br />
        <input type="text" name="nama" />
        <br />
        <br />
        <label for="alamat">Alamat</label>
        <br />
        <textarea name="alamat" cols="30" rows="10"></textarea>
        <br />
        <br />
        <label for="umur">Umur</label>
        <br />
        <input type="number" name="umur" />
        <br />
        <br />
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <br />
        <select name="jenis_kelamin">
            <option value="Pria">Pria</option>
            <option value="Wanita">Wanita</option>
        </select>
        <br />
        <br />
        <button type="submit">Tambah</button>
    </form>
</body>

</html>