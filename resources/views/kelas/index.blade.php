@extends('template.master')

@section('judul')
    <h1>Halaman Kelas</h1>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
    <div class="card-tools">
    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
      <h3 class="card-title">Data Kelas</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <a href="{{ route('kelas.create') }}" class="btn btn-primary">
          <i class="fas fa-plus-square"></i>
        Tambah   
        </a>
        <br>
        </tr>
        <br>
      <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>No</th>
          <th>Nama Kelas</th>
          <th>Kompetensi Keahlian</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
          @forelse($kelas as $kelas)
         <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $kelas->nama_kelas }}</td>
          <td>{{ $kelas->kompetensi_keahlian }}</td>
          <td>
          <form action="{{ route ('kelas.destroy', $kelas->id) }}" method="POST">
              
              <a href="{{ route('kelas.show', $kelas->id) }}" class="btn btn-info " data-bs-toggle="tooltip" data-bs-placement="top" title="Detail">
                <i class="fa fa-info-circle"></i>
                Detail
              </a>
              <a href="{{ route('kelas.edit', $kelas->id) }}" class="btn btn-warning " data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                <i class="fas fa-edit"></i>
                Edit
              </a>
            @csrf
            @method('DELETE')
           <button type="submit" class="btn btn-danger" value="Delete">
           <i class="far fa-trash-alt"></i> 
           Delete
          </button>
          </form>
            </td>
         </tr>
         @empty
         <tr>
          <td>Data Masih Kosong</td>
        </tr>

        @endforelse
      </table>
    </div>
    <!-- /.card-body -->
  
@endsection