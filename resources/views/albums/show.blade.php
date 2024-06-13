@extends('layouts.app')

@section('content')
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        .btn-see{
            background-color: azure;
            color: black;
            border: 3px solid #67bdbb;
            border-radius: 20px;
        }
    </style>
</head>
<section id="heroprofile" class="heroprofile d-flex align-items-center">
    <div class="container">
        <div class="row">
            <p style="margin-left: 500px; font-weight: 500; font-size: 20px;">
                <strong>{{ $album->name }}</strong>
            </p>
            <p style="margin-left: 500px; font-size: 25px;">
                <strong>{{ $album->deskripsi }}</strong>
            </p>

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addPhotoModal" 
            style="
            width: 200px; 
            margin-left:450px; 
            background-color:azure; 
            color:black
            ">
                ADD PHOTO
            </button>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        @if (!is_null($fotos) && $fotos->isNotEmpty())
        <div class="container">
            <div class="row">
                @foreach ($fotos as $foto)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('images/' . $foto->cover) }}" alt="{{ $foto->name }}" class="img-fluid">
                            </div>
                            {{-- <small class="text-body-secondary">{{ $foto->user->name }}</small> --}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p>Tidak ada foto yang tersedia saat ini.</p>
    @endif
</div>

{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addPhotoModal">
    Tambah Foto
</button> --}}

{{-- </div> --}}

<div class="modal fade" id="addPhotoModal" tabindex="-1" role="dialog" aria-labelledby="addPhotoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addPhotoModalLabel">Add Photo To Album</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('fotos.store', $album->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Description</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="cover">Photo</label>
                        <input type="file" class="form-control-file" id="cover" name="cover" accept="image/*" required>
                    </div>
                    <input type="hidden" name="album_id" value="{{ $album->id }}">
                    <button type="submit" class="btn btn-see">Add Photo</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
