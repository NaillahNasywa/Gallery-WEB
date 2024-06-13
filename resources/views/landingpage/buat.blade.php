@extends('layout.lp')

@section('content')
<!-- resources/views/form.blade.php -->

<style>

    .hero1 .text {
       color: #3b505c;
       font-family: 'poppins';
    }
    /* Style untuk form */
    form {
        width: 700px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
        background-color: #119D94;
        color: white;
    }

    /* Style untuk label */
    label {
        display: block;
        margin-bottom: 5px;
        font-weight: 400;
    }

    /* Style untuk input */
    input[type="text"], input[type="file"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 12px;
        box-sizing: border-box; /* Untuk memperhitungkan padding dan border dalam ukuran total elemen */
    }

    /* Style untuk tombol submit */
    button[type="submit"] {
        padding: 10px 20px;
        background-color: #3b505c;
        color: #fff;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        width: 200px;
        margin-top: 12px;
    }

    button[type="submit"]:hover {
        background-color: #e88659;
    }
</style>

<section id="hero1" class="hero1">
    <br>
    <br>
    <br>
    <br>
    <br>
        <div class="text">
          <h3 data-aos=""><strong>+</strong> Create img</h3> 
        </div>
           {{-- <h4 class="span">(Digital Art Colletion)</h4> --}}

           <form action="" method="POST" enctype="multipart/form-data">
            {{-- @csrf --}}

            {{-- <div>
                <label for="gambar">Foto</label>
                <input type="file" id="gambar" name="gambar" accept="image/*" required>
            </div>
        
            <div>
                <label for="Judul">Judul</label>
                <input type="text" id="Judul" name="Judul" placeholder="Tambahkan judul foto" required>
            </div>
        
            <div>
                <label for="Deskripsi">Deskripsi</label>
                <input type="text" id="Deskripsi" name="Deskripsi" placeholder="Tambahkan Deskripsi foto" required>
            </div>

            <div>
                <label for="Tanggal_Unggah">Tanggal Unggah</label>
                <input type="text" id="Tanggal_Unggah" name="Tanggal_Unggah" placeholder="Tambahkan Tanggal foto" required>
            </div>

            <div>
                <label for="Lokasi_File">Lokasi</label>
                <input type="text" id="Lokasi_File" name="Lokasi_File" placeholder="Tambahkan Lokasi File" required>
            </div>

            <div>
                <label for="Album">Album</label>
                <input type="text" id="Album" name="Album" placeholder="Tambahkan Album" required>
            </div>

            <div>
                <label for="user">user</label>
                <input type="text" id="user" name="user" placeholder="Tambahkan user" required>
            </div> --}}
        
            <button type="submit">Simpan</button>
        </form>
</section>

<!DOCTYPE html>
<html>
<head>
    <title>Choose or Drag Image</title>
    {{-- <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }

        #drop-area {
            border: 2px dashed #ccc;
            width: 300px;
            height: 200px;
            display: flex;
            justify-content: center;
            cursor: pointer;
            position: relative;
            border-radius: 10px;
            overflow: hidden;
        }

        #drop-area input[type="file"] {
            display: none;
        }

        #preview {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
        }

        #preview img {
            max-width: 100%;
            max-height: 100%;
            border-radius: 10px;
        }

        #form-container {
            text-align: center;
            width: 300px;
            margin-top: 10px; /* Menambahkan margin-top */
            margin-left: 60px;
        }

        #form-container input[type="text"] {
            width: 100%;
            margin-bottom: 10px;
            padding: 5px;
            box-sizing: border-box;
        }

        #form-container button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            border-radius: 10px;
        }
    </style> --}}
</head>
<body>
    <div id="drop-area" onclick="document.getElementById('fileElem').click();">
        <input type="file" id="fileElem" accept="image/*" onchange="handleFiles(this.files)">
        <label for="fileElem">Choose an image file or drag it here.<br><img id="preview" src="#" alt="Preview"></label>
    </div>
    <div id="form-container">
        <form>
            <input type="text" placeholder="tambahkan judul foto">
            <input type="text" placeholder="tambahkan deskripsi foto">
            <input type="text" placeholder="tambahkan tanggl unggah foto">
            <input type="text" placeholder="tambahkan lokasi file foto">
            <button type="submit">Submit</button>
        </form>
    </div>

    <script>
        function handleFiles(files) {
            var preview = document.getElementById('preview');
            var file = files[0];
            var reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.opacity = '1';
            };

            reader.readAsDataURL(file);
        }

        var dropArea = document.getElementById('drop-area');
        dropArea.addEventListener('dragover', function(e) {
            e.preventDefault();
            dropArea.classList.add('active');
        });

        dropArea.addEventListener('dragleave', function(e) {
            e.preventDefault();
            dropArea.classList.remove('active');
        });

        dropArea.addEventListener('drop', function(e) {
            e.preventDefault();
            dropArea.classList.remove('active');
            var files = e.dataTransfer.files;
            handleFiles(files);
        });
    </script>
</body>
</html>

    
@endsection