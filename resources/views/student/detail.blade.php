<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail siswa</title>
</head>
<body>
<h2>Detail siswa</h2>

    <form method="post" action=" ">
        <label for="">NIS:</label>
        <input type="number" id="nis" name="nis" value="{{ $student->nis }}" readonly><br>
    
        <label for="">Nama::</label>
        <input type="text" id="nama" name="nama" value="{{ $student->nama }}" readonly><br>
        
        <label for="">Kelas:</label>
        <input type="text" id="kelas_id" name="kelas_id" value="{{ $student->kelas_id }}" readonly><br>

        <label for="">Tanggal Lahir:</label>
        <input type="date" id="tgl_lahir" name="tgl_lahir" value="{{ $student->tgl_lahir }}" readonly><br>

        <label for="">Alamat:</label>
        <input type="text" id="alamat" name="alamat" value="{{ $student->alamat }}" readonly><br>
</body>
</html>
