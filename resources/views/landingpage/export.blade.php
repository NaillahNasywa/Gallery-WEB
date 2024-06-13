@extends('layouts.app')

@section('content')

{{-- <!DOCTYPE html>
<html lang="en"> --}}
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>

    <!-- Tautan untuk file CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.2/css/buttons.dataTables.css">

    <!-- Tautan untuk file JavaScript -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.print.min.js"></script>

    <!-- Skrip untuk inisialisasi DataTables -->
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                layout: {
                    topStart: {
                        buttons: ['csv', 'excel', 'pdf', 'print']
                    }
                }
            });
        });
    </script>
</head>
<body>
    <section id="hero3" class="hero3 d-flex align-items-center">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 d-flex flex-column justify-content-center">
      
                <p style="margin-left: 500px; font-weight: 650;"><small style="color: #30A39C;">EXPORT</small> ALBUM</p> 
       
      </section> 
  <div class="container">
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
  </div>

{{-- </body>
</html> --}}

{{-- <section id="portfolio" class="portfolio"> --}}

    

    
@endsection