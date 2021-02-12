@extends('pendaftaran')

@section('main')
<a href="{{ url("pendaftaran/create") }}" class="btn btn-success mb-2">Add New</a>


@if(session()->get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session()->get('success') }}</strong> 
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

    <div class="col md-9">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th cosplan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pendaftaran as $pendaftaran)
                    <tr>
                        
                        <td>{{ $pendaftaran->id }}</td>
                        <td>{{ $pendaftaran->nama }}</td>
                        <td>{{ $pendaftaran->email }}</td>
                        <td>{{ $pendaftaran->phone }}</td>
                        <td>{{ $pendaftaran->adress }}</td>
                        <td>
                        <a class="btn btn-primary" href="{{ url("pendaftaran/{$pendaftaran->id}/edit") }}">EDIT</a>
                        <td>
                            <form action="{{ url("pendaftaran/{$pendaftaran->id}")}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">DELETE</button>
                            </form>
                        </td>

                    </tr>    
                @endforeach
            </tbody>
        </table>
    </div>

@endsection