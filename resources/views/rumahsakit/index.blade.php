@extends('layouts.app',['title' => 'Data Rumah Sakit'])
@section('content')
   <div class="card">
    <h5 class="card-header">Data Rumah Sakit</h5>
    <div class="card-body">
        <h3>Data Rumah Sakit</h3>
        <a href="/rumahsakit/create" class="btn btn-primary">Tambah Data</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>ALAMAT</th>
                    <th>EMAIL</th>
                    <th>TELEPON</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rumahsakits as $rumahsakit)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $rumahsakit->nama }}</td>
                        <td>{{ $rumahsakit->alamat }}</td>
                        <td>{{ $rumahsakit->email }}</td>
                        <td>{{ $rumahsakit->telepon }}</td>
                        <td>
                            <a href="/rumahsakit/{{ $rumahsakit->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                                <button type="submit" class="btn btn-danger btn-sm delete-item" data-id="{{ $rumahsakit->id }}" >
                                    Hapus
                                </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $rumahsakits->links() !!}
    </div>
   </div>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   <script type="text/javascript">
       $(document).ready(function() {
           $('.delete-item').click(function() {
               var id = $(this).data('id');
               var url = '/rumahsakit/' + id;
   
               if (confirm('Apakah kamu yakin ingin mendelete?')) {
                   $.ajax({
                       url: url,
                       type: 'DELETE',
                       data: {
                           _token: '{{ csrf_token() }}'
                       },
                       success: function(response) {
                           if (response.success) {
                               alert(response.success);
                               // Optionally, remove the deleted item from the DOM
                               $('button[data-id="' + id + '"]').closest('tr').remove();
                           } else {
                               alert('Error: ' + response.error);
                           }
                       },
                       error: function(xhr) {
                           alert('Error: ' + xhr.responseText);
                       }
                   });
               }
           });
       });
   </script>

@endsection