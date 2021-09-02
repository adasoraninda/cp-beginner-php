<?php

include('connection.php');

$query = mysqli_query($connect, "SELECT * FROM karyawan");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);
// print_r($results);
?>

<html>

<head>
    <title>Belajar CRUD PHP</title>
</head>

<body>
    <a href="add.php">Tambah Data</a>

    <br /><br />

    <form action="search.php" method="get">
        <input type="text" name="keyword" placeholder="Keyword .." />
        <button type="submit">Cari Data</button>
    </form>

    <br />
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Umur</th>
            <th>Jenis Kelamin</th>
            <th colspan="2">Pilihan</th>
        </tr>
        <?php foreach ($results as $result) : ?>
            <tr>
                <td><?php echo $result['nama'] ?></td>
                <td><?php echo $result['alamat'] ?></td>
                <td><?php echo $result['umur'] ?></td>
                <td><?php echo $result['jenis_kelamin'] ?></td>
                <td><a href="edit.php?id=<?php echo $result['id'] ?>">Edit</a></td>
                <td><a href="delete.php?id=<?php echo $result['id'] ?>">Hapus</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>