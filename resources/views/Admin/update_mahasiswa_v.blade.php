<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Mahasiswa</title>
</head>
<body>
    <form action="/Admin/UpdateMahasiswa/Proses" method="post">
        @foreach ($mahasiswa as $item)
        {{ csrf_field() }}
        <input type="text" name="id_mhs" value="{{$item->id_mhs}}">
        <div class="form-group">
            <label for="">Nim</label>
            <input type="text" class="form-control" name="nim" value=" {{$item->nim}}">
        </div>
        <div class="form-group">
            <label for="">Nama</label>
            <input type="text" class="form-control" name="nama" value="{{$item->nama}}">
        </div>
        <div class="form-group">
            <label for="">Prodi</label>
            <input type="text" class="form-control" name="prodi" value="{{$item->prodi}}">
        </div>
        <div class="form-group">
            <label for="">Umur</label>
            <input type="text" class="form-control" name="umur" value="{{$item->umur}}">
        </div>
        <div class="form-group">
            <label for="">Alamat</label>
            <input type="text" class="form-control" name="alamat" value="{{$item->alamat}}">
        </div>
        <div class="form-group">
            <label for="">Id Kelompok</label>
            <input type="text" class="form-control" name="id_kelompok" value="{{$item->id_kelompok}}">
        </div>
        @endforeach
        <input type="submit" value="Submit">
    </form>
</body>
</html>
