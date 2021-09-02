<?php
include('connection.php');

$id = $_GET['id'];

$query = mysqli_query($connect, "SELECT * FROM karyawan WHERE id = '$id' LIMIT 1");
$data = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<html>

<head>
    <title>Ubah Data</title>
</head>

<body>
    <form action="update.php" method="post">

        <input type="hidden" name="id" value="<?php echo $data[0]['id'] ?>">

        <label for="nama">Nama</label>
        <br />
        <input type="text" name="nama" value="<?php echo $data[0]['nama'] ?>" />
        <br />
        <br />
        <label for="alamat">Alamat</label>
        <br />
        <textarea name="alamat" cols="30" rows="10"><?php echo $data[0]['alamat'] ?></textarea>
        <br />
        <br />
        <label for="umur">Umur</label>
        <br />
        <input type="number" name="umur" value="<?php echo $data[0]['umur'] ?>" />
        <br />
        <br />
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <br />
        <select name="jenis_kelamin">
            <option value="Pria" <?php echo ($data[0]['jenis_kelamin'] == 'Pria') ? 'selected' : '' ?>>Pria</option>
            <option value="Wanita" <?php echo ($data[0]['jenis_kelamin'] == 'Wanita') ? 'selected' : '' ?>>Wanita</option>
        </select>
        <br />
        <br />
        <button type="submit">Ubah</button>
    </form>
</body>

</html>