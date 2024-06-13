@extends('layouts.app')

@section('content')
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        h1{
            margin-left: 520px;
            font-family:'Times New Roman', Times, serif;
        }
        .text2 {
            width: 380px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f7f7f785;
            border-radius: 10px;
            border: 2px solid #30A39C;
            box-shadow: 15px 15px 15px rgba(0, 0, 0, 0.1);
        }

        .text2 p {
           color: #333;
           font-size: 20px;
           margin-left: 100px;
           font-family:'Times New Roman', Times, serif;
           border: 2px solid #30A39C;
           border-radius: 20px;
           margin-right: 110px;
           padding: 5px;
        }
        .text2 label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
            font-family:'Times New Roman', Times, serif;
        }

        .text2 input[type="text"],
        .text2 textarea {
            width: calc(100% - 12px); /* Menghindari horizontal scrollbar */
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s ease-in-out;
        }

        .text2 input[type="text"]:focus,
        .text2 textarea:focus {
            border-color: #161616; /* Ubah warna border saat input mendapat fokus */
            outline: none;
        }

        .text2 button[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #30A39C;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .text2 button[type="submit"]:hover {
            background-color: #3B505C; /* Efek hover untuk tombol submit */
        }

        .btn-see{
            background-color: #2d2b2b;
            color: white;
            border: 2px solid #30A39C;
        }

        .dell{
            color: #2d2b2b;
            /* background-color: rgb(214, 213, 147); */
            border-radius: 20px;
            border: none;
            margin-top: 5px;
            margin-left: 90px;
            padding: 9px;
        }

        .card{
            box-shadow: 0 10px 10px #30A39C;
            border: 2px solid #30A39C;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            border-bottom-right-radius: 2px;
            border-bottom-left-radius: 1px;
        }

        .card-footer{
            background-color: #EFEDBE;
            /* border: 1px solid #ddd; */
            border-radius: 10px;
            /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
        }

        .card-body{
            background-color: #EFEDBE;
            border-top: 20px solid #7E7878; /* Atur lebar dan warna border bagian atas */
            border-top-left-radius: 0px;
            border-top-right-radius: 70px;
            border-bottom-right-radius: 2px;
            border-bottom-left-radius: 1px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: white;
             /* border: 3px solid #181818; */
            /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
            border-radius: 10px;
        }

    </style>
</head>
<section id="hero3" class="hero3 d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 d-flex flex-column justify-content-center">
  
            <p style="margin-left: 550px; font-weight: 650;"><span style="color: #30A39C;">EDIT</span> PROFILE</p> 
   
  </section> 
  <br>


    <div class="text2">
        <p> + Edit Profile</p>
                    <form method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}" required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="bio">Bio</label>
                            <textarea id="bio" name="bio" class="form-control" placeholder="add bio">{{ old('bio', $user->bio) }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>
                </div>
                <br>
                <br>
                <hr>
             

@endsection
