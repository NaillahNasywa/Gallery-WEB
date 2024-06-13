<!-- resources/views/report.blade.php -->

@extends('layouts.app')

@section('content')
<head>
    <style>
    .cradrprt{
        background-color: rgb(152, 202, 170);
        border: 5px solid #6a6565;
        margin-left: 410px;
        width: 300px;
        border-radius: 30px;
        margin-top: 15px;
        padding: 5;
        font-weight: 600;
    }
    </style>
</head>

<section id="hero3" class="hero3 d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 d-flex flex-column justify-content-center">
  
          <p style="margin-left: 360px; font-weight: 650;"><small style="margin-left:140px; color: rgb(224, 215, 215);">REPORT</small><br> ALL COUNT ALBUM AND PHOTO</p> 
          
   
  </section> 
    <div class="container">
        <div class="cradrprt">
            <p style="margin-left: 80px">COUNT ALBUM : {{ $albumCount }}</p><hr style="border: 2px solid #f7f1f1;">
            <p style="margin-left: 80px">COUNT PHOTO: {{ $fotoCount }}</p>
        </div>
<br>
<hr style="border: 2px solid #7E7878;">
    <h2 style="margin-left:500px">Album</h2>
    <hr style="border: 2px solid #7E7878;">
  
        <table id="example" class="display nowrap" style="width:100%">
          <thead>
              <tr>
                  <th>id</th>
                  <th>name</th>
                  <th>Description</th>
                  <th>Upload Date</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($albums as $album)
              <tr>
                  <td>{{$album->id}}</td>
                  <td>{{$album->name}}</td>
                  <td>{{$album->deskripsi}}</td>
                  <td>{{$album->tanggal}}</td>
              </tr>
              @endforeach
          </tbody>
          <tfoot>
              <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Upload Date</th>
              </tr>
          </tfoot>
      </table>
        
<br>
<hr style="border: 2px solid #7E7878;">
<h2 style="margin-left:500px">Photo</h2>
<hr style="border: 2px solid #7E7878;">
    
    <table id="example" class="display nowrap" style="width:100%">
      <thead>
          <tr>
              <th>id</th>
              <th>name</th>
              <th>Description</th>
              <th>Upload Date</th>
              <th>Photo</th>
              <th>Album</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($fotos as $foto)
          <tr>
              <td>{{$foto->id}}</td>
              <td>{{$foto->name}}</td>
              <td>{{$foto->deskripsi}}</td>
              <td>{{$foto->tanggal}}</td>
              <td><img src="{{asset('images/'.$foto->cover)}}" alt="Foto" style="width:100px;"></td>
              <td>{{$foto->album->name}}</td>
          </tr>
          @endforeach
      </tbody>
      <tfoot>
          <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Description</th>
              <th>Upload Date</th>
              <th>Photo</th>
              <th>Album</th>
          </tr>
      </tfoot>
  </table>
    </div>
@endsection
