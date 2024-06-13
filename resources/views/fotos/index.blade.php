
@extends('layouts.app')

@section('content')
<head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Menangani penyerahan formulir komentar
        $('#commentForm').submit(function(event) {
            event.preventDefault(); // Mencegah formulir untuk melakukan submit biasa

            // Mengambil data formulir komentar
            var formData = $(this).serialize();

            // Mengirimkan permintaan AJAX untuk menyimpan komentar
            $.ajax({
                type: 'POST',
                url: '{{ route("komentars.store") }}',
                data: formData,
                success: function(response) {
                    // Menambahkan komentar baru ke daftar komentar yang sudah ditampilkan
                    $('#comments').append('<div class="comment-body">' + 
                        '<p>' + response.komentar + '</p>' +
                        '<span> by ' + response.user_name + '</span>' +
                        '<span>' + response.created_at + '</span>' +
                        '</div>');
                },
                error: function(xhr, status, error) {
                    // Menangani kesalahan jika ada
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>
<!-- JavaScript untuk modal -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .foto-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            /* padding: 0 10px; */
            /* margin-right: 10px; */
        }
        .foto-item {
            width: 30%; /* Atur lebar setiap item foto */
            margin-bottom: 20px;
            position: relative;
        }
        .foto-item img {
            width: 100%;
            height: 75%;
            border-radius: 20px;
        }
        .comment-btn {
            position: absolute;
            bottom: 10px;
            right: 10px;
            z-index: 1;
            background: none;
            border: none;
            color: #333;
            cursor: pointer;
        }

        .like-delete-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
        }
        .like-btn, .delete-btn {
            background: none;
            border: none;
            color: #333;
            cursor: pointer;
            font-size: 20px;
            margin-right: 5px;
        }
        .like-btn:hover, .delete-btn:hover {
            color: red; /* Ubah warna tombol ketika dihover */
        }
        .like-count {
            color: #333;
            font-size: 14px;
        }

        .dell{
            color: #83bda6;
            /* background-color: rgb(214, 213, 147); */
            border-radius: 20px;
            border: none;
            margin-top: 9px;
            margin-left: 2px;
            padding: 9px;
        }
        .nai{
            color: #ca4933;
            /* background-color: rgb(214, 213, 147); */
            border-radius: 20px;
            border: none;
            margin-top: 9px;
            margin-left: 5px;
            padding: 9px;
        }

        .nai2{
            color: #4d211a;
            /* background-color: rgb(214, 213, 147); */
            border-radius: 20px;
            border: none;
            margin-top: 9px;
            margin-left: 2px;
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
            background-color: #a6cfad;
            /* border: 1px solid #ddd; */
            border-radius: 10px;
            /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
        }

        .card-body{
            background-color: #a6cfad;
            border-top: 15px solid #30A39C; /* Atur lebar dan warna border bagian atas */
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

        .btn-crt{
            margin-left: 75%;
            margin-bottom: 20px;
            color: white;
            background-color: #67bdbb;
            border: 3px solid #8a9aa3;
            border-radius: 10px;
            width: 210px;
            height: 38px;
            font-size: 15px;
            font-family: 'Times New Roman', Times, serif;
            /* border: none; */
            text-align: center;
            padding: 5px 20px; 
            font-weight: 500;
        }

        .btn-crt:hover{
            background-color: #d4cec5;
            border: 3px solid #67bdbb;
            color: white;
        }
        .btn-see{
            background-color: #fcfbf9;
            color: black;
            border: 3px solid #67bdbb;
            border-radius: 20px;
        }

        .btn-see2{
            background-color: #fcfbf9;
            color: black;
            border: 3px solid #07889B;
            border-radius: 10px;
            width: 770px;
        }

        h1{
            font-family:'Times New Roman', Times, serif;
            font-size: 35px;
            font-weight: 550;
        }

    </style>
  </head>
  
  <section id="herofto" class="herofto d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 d-flex flex-column justify-content-center">
  
            {{-- <p style="margin-left: 370px; font-weight: 650;"><small style="color: #30A39C;">Bring your</small> imagination to life!</p>  --}}
   
  </section> 
  

<div class="container">
<section id="values" class="values">

<h1 style="
    font-size: 15px; 
    border:2px solid #4d211a; 
    width:130px; 
    padding:15px; 
    border-radius:20px;"><i class="fas fa-images">  Photos</i></h1>


<hr>

<div class="foto-container">
      @foreach ($fotos as $foto)

    <div class="foto-item">
       <div class="show-image"> <a href="#" data-toggle="modal" data-target="#fotoModal{{ $foto->id }}">
        <img src="{{ asset('images/' . $foto->cover) }}" alt="{{ $foto->judul }}" class="img-fluid">
    </a>

    </div>

    <div class="modal fade" id="fotoModal{{ $foto->id }}" tabindex="-1" role="dialog" aria-labelledby="fotoModalLabel{{ $foto->id }}" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h7 class="modal-title text-muted" style="margin-left: 20px;">Uploaded by {{ $foto->user->name }}</h7>
                    <small class="text-muted" style="margin-left: 400px;">{{ $foto->created_at->diffForHumans() }}</small>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('images/' . $foto->cover) }}" alt="{{ $foto->name }}" class="img-fluid"><br><br>
                    <h3 class="modal-title" id="fotoModalLabel{{ $foto->id }}" style="margin-left: 5px;">{{ $foto->name }}</h3>
                    {{-- <p>{{ $foto->name }}</p> --}}
                    <h5 style="margin-left: 5px;">{{ $foto->deskripsi }}</h5>
                    <br>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <form action="{{ route('komentars.store', $foto->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="foto_id" value="{{ $foto->id }}">
                        <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                        <div class="form-group">
                           <h6><label for="komentar">Komentar:</label></h6>
                            <textarea class="form-control" name="komentar" id="komentar" rows="3" placeholder="Tambahkan Komentar" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-see2">Kirim</button>
                    </form>
                    <h6>Daftar Komentar</h6>
                    <div class="card" style="border:2px solid #07889B;">
                        {{-- @foreach ($fotos as $foto) --}} 
                        @foreach ($foto->komentar as $komentar) 
                            <h8 style="
                            margin-left: 20px; 
                            margin-top:10px; 
                            font-size:12px; 
                            color:#8a9aa3;
                            ">{{ $komentar->user->name }} | {{ $komentar->created_at->diffForHumans() }}</h8>
                            <h7 style="
                            margin-left: 20px; 
                            font-size:18px;
                            ">{{ $komentar->komentar }}</h7>
                            <!-- Tampilkan informasi pengguna atau waktu komentar jika diperlukan -->
                            <!-- Contoh: -->
                            <!-- <p>By: {{ $komentar->user->name }} | {{ $komentar->created_at->diffForHumans() }}</p> -->
                        {{-- @endforeach --}}
                    @endforeach

                    </div>
  
                    <!-- Tambahkan informasi lainnya sesuai kebutuhan -->
                </div>
            </div>
        </div>
    </div>
    

    <div class="like-delete-container">
        <form action="{{ route('likefoto', $foto->id) }}" method="POST">
            @csrf
            @if ($foto->likefoto()->where('user_id', auth()->user()->id)->exists())
                <button type="submit" class="nai" style="color: red;">
                    <i class="fas fa-heart"></i>
                </button> 
            @else
                <button type="submit" class="nai">
                    <i class="far fa-heart"></i>
                </button>
            @endif
            <span class="btn btn-default btn-xs no">{{ $foto->likefoto->count() }}</span>

            <button type="submit" class="nai2" style="margin-left: 20px;">
                <i class="fas fa-comment"></i>
            </button> 
            <span class="btn btn-default btn-xs no">{{ $foto->jumlahKomentar() }}</span>
        </form>
            {{-- <button type="submit" class="nai2" style="margin-left: 20px;">
                <i class="fas fa-comment"></i>
            </button> 
            <span class="btn btn-default btn-xs no">{{ $foto->jumlahKomentar() }}</span>
        </form> --}}
        {{-- <span class="btn btn-default btn-xs no">{{ $foto->likefotoCount() }}</span> --}}
        @if ($foto->user_id === auth()->id())
            <form class="btn btn-default btn-xs dell" action="{{ route('fotos.destroy', $foto->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="dell"> <i class="fas fa-trash"></i>
            </button>
            </form>
        @endif
    </div>
                                
            <div class="post-footer">
               <div class="button-footer">
                   <a class="btn btn-default btn-xs" href="#{{$foto->id}}" data-toggle="modal">
                    {{-- <i class="fas fa-comment"></i>
                    <span class="btn btn-default btn-xs no"></span> --}}
                 <!-- resources/views/komentars/index.blade.php -->
                </a>

        </div>
    </div>
</div>
        @endforeach

</div>
    </div>
</div>
                          
@endsection




