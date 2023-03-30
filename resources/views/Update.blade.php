<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="col-8">
        <form action="/QueryUpdate/{{ $data->id }}" method="POST">
            @csrf
            <label for="">Nama</label>
            <input name="nama" value="{{ $data->nama }}" type="text" placeholder="Masukan Nama Anda" required><br>
            <label>Jenis Kelamin</label>
            <select name="jeniskelamin">
                <option selected>{{ $data->jeniskelamin }}</option>
                <option value="Pria">Pria</option>
                <option value="Wanita">Wanita</option>
            </select><br>
            <!---<label for="">Jenis Kelamin</label>
            <input type="text" value="{{ $data->jeniskelamin }}" name="jeniskelamin" required placeholder="Pria/Wanita"><br>
            --->
            <label for="">Nomor Telepon</label>
            <input name="notelpon" value="{{ $data->notelpon }}" type="tel" placeholder="Masukan No Telpon" required><br>
            <input type="submit" value="Simpan Data">  
        </form>
    </div>
</body>
</html>