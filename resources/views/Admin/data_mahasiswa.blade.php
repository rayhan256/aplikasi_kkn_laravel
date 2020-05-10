<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Ini Data Mahasiswa</h1>
    <table class="table" border="1px">
        <thead>
            <tr>
                <th>No</th>
                <th>Nim</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            @foreach ($mahasiswa as $item)
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $item->nim ?></td>
                    <td><?= $item->nama ?></td>
                    <td><?= $item->prodi ?></td>
                    <td><?= $item->umur ?></td>
                    <td><?= $item->alamat ?></td>
                    <td>
                        <a href="/Admin/UpdateMahasiswa/<?= $item->id_mhs ?>"><button class="btn btn-primary">Edit</button></a>
                        <a href="#"><button class="btn btn-danger">Delete</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
