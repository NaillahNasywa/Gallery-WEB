@extends('layouts.app')

@section('content')


<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .btn-see{
            background-color: #2d2b2b;
            color: white;
            border: 2px solid #30A39C;
            border-radius: 20px;
        }

        .btn-see:hover{
            color: #EFEDBE;
        }

        .btn-dell{
            background-color: #2d2b2b;
            color: white;
            border: 2px solid #30A39C;
            border-radius: 20px;
            margin-top: 15px;
        }

        .btn-dell:hover{
            color: #EFEDBE;
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
        {{-- @if ($albums->isEmpty() && $fotos->isEmpty())
            <div class="col">
                <p style="margin-left: 450px; font-weight: 650;"><small style="color: #30A39C;">No Albums and Photos,</small> Create New</p> 
            </div>
        @endif --}}
        <br>
        <h4 style="margin-left: 450px; font-weight: 650; margin-top:30px;">{{ Auth::user()->name}}</h4> 
        <h5 style="margin-left: 450px; font-weight: 600; font-size:15px;"<p>{{ Auth::user()->bio }}</p></h5> 
        <a href="{{ route('profile.edit') }}" class="btn btn-primary" style="
        width: 200px; 
        margin-left: 450px;
        background-color:azure; 
        color:black;
        border-radius:30px;
    ">
        Edit Profile
    </a>
    
    </div>
</section>
<br>
<br>
@if ($albums->isEmpty() && $fotos->isEmpty())
<div class="col">
    <p style="margin-left: 550px; font-weight: 650; font-size:20px;"><small style="color: #30A39C;">No Albums and Photos,</small> Create New</p> 
</div>
@endif
    {{-- <p style="margin-left: 530px; font-weight: 650;"><small style="color: #30A39C;"></small> {{ Auth::user()->name}}</p>  --}}
    {{-- <p style="margin-left: 530px; font-weight: 650;"><small style="color: #30A39C;">Password</small> {{ Auth::user()->email}}</p>  --}}

    <h1 style="
    font-size: 16px; 
    border:2px solid #4d211a; 
    width:115px; 
    padding:15px; 
    border-radius:20px;
    margin-left:60px;
    margin-bottom:20px;
    "><i class="fas fa-camera-retro"> Album</i></h1>

    <a href="{{ route('albums.index') }}" style="
    margin-left:1000px;
    color:rgb(23, 25, 25);
    font-size:25px;
    ">+</a>
    <hr>

<div class="container">
    <div class="row">
        @foreach ($albums as $album)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-header">{{ $album->name }}</div>
                    <div class="card-body">
                        <p>Description: {{ $album->deskripsi }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('albums.show', $album->id) }}" class="btn btn-see"><i class="fas fa-eye"></i> </a>

                        @if ($album->user_id === auth()->id())
                        <a href="{{ route('albums.edit', $album->id) }}" class="btn btn-see"> <i class="fas fa-edit"></i> </a>
                        <form class="btn btn-default btn-xs dell" action="{{ route('albums.destroy', $album->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-dell"> <i class="fas fa-trash"></i>
                        </button>
                        </form>
                    @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<br>
<br>

<h1 style="
font-size: 16px; 
border:2px solid #4d211a;
width:130px; padding:15px; 
border-radius:20px;
margin-left:60px;
"><i class="fas fa-images">  Photos</i></h1>

<a href="{{ route('fotos.create') }}" style="
margin-left:1000px;
color:rgb(23, 25, 25);
font-size:25px;
">+</a>

<hr>

<div class="container">
    <div class="row">
        @if (!is_null($fotos) && $fotos->isNotEmpty())
            @foreach ($fotos as $foto)
                @if ($foto->user_id == auth()->id()) <!-- Mengecek apakah user id foto sama dengan user yang login -->
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            {{-- <div class="card-body">  --}}
                                <img src="{{ asset('images/' . $foto->cover) }}" alt="{{ $foto->nama }}" class="img-fluid">
                             {{-- </div> --}}
                            <form class="btn btn-default btn-xs dell" action="{{ route('fotos.destroy', $foto->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="dell" style="
                                color: rgb(90, 84, 84); 
                                width:35px;
                                height:35px;
                                margin-left:250px;
                                background-color: white; 
                                border: 2px solid rgb(65, 191, 191);
                                padding:10px;
                                border-radius:10px;"> <i class="fas fa-trash"></i>
                                </button>
                                </form>
                                
                            {{-- <small class="text-body-secondary">{{ $foto->user->name }}</small> --}}
                        </div>
                    </div>
                @endif
            @endforeach
        @endif
    </div>
</div>
@endsection
