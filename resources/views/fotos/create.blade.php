@extends('layouts.app')

@section('content')
<head>
    
    <script src="{{ asset('assets-web/js/fto.js') }}"></script>

    <style>
        .container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .inputImg {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            border: 2px dashed #ccc; /* tambahkan garis putus-putus */
            padding: 20px; /* tambahkan padding */
            border-radius: 10px; /* tambahkan sudut bulat */
            width: 40%;
            height: 400px;
        }

        .inputImg:hover {
            border-color: #aaa; /* ubah warna saat kursor di atasnya */
        }

        .inputImg img {
            max-width: 100%;
            max-height: 100%;
        }

        .card-body {
            margin-left: 80px;
        }

        .form-control {
            border-radius: 10px;
            /* background-color: bisque; */
        }

        .btn-save {
            margin-top: 1rem; /* Adjust as needed */
            padding: 10px 20px; /* tambahkan padding */
            background-color: #30A39C; /* warna latar belakang */
            color: #fff; /* warna teks */
            border: none; /* hilangkan batas */
            border-radius: 5px; /* tambahkan sudut bulat */
            cursor: pointer;
            transition: background-color 0.3s ease; /* animasi saat hover */
        }

        .btn-save:hover {
            background-color: #3B505C; /* ubah warna saat hover */
            color: white;
        }


    </style>
</head>

<section id="hero3" class="hero3 d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 d-flex flex-column justify-content-center">
  
            <p style="margin-left: 440px; font-weight: 650;"><small style="color: #30A39C;">CREATE</small> PHOTO</p> 
   
  </section> 
  <br>

<div class="cardfto">
    <form action="{{ route('fotos.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container">
        <input accept="image/*" type="file" name="cover" id="cover" style="display: none;">
        <label for="cover" class="inputImg" style="cursor: pointer;">
            Choose an image file
            <img class="blah" src="#" alt="">
        </label>
        <div class="card-body">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="name">Description</label>
                <input type="text" name="deskripsi" class="form-control" required>
            </div>
            {{-- <div class="form-group">
                <label for="cover">Cover</label>
                <input type="file" name="cover" class="form-control" required>
            </div> --}}
            <div class="form-group">
                <label for="album_id">Album ^ </label>
                <select name="album_id" class="form-control" required>
                    @if($albums)
                        @foreach ($albums as $album)
                            <option value="{{ $album->id }}">{{ $album->name }}</option>
                        @endforeach
                    @else
                        <option value="" disabled selected>Tidak ada album</option>
                    @endif
                </select>
            </div>
            <button type="submit" class="btn btn-save">Save</button>
        </div>
        </div>
    </form>
</div>

@endsection
