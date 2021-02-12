@extends('pendaftaran')

@section('main')
<br><br><br>
    <div class="row">
        <div class="col-md-8 offset-sm-2">
            <h2 class="display-6">Edit Data</h2>
            <br><br>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 offset-sm-2">
            <form action="{{ url("/pendaftaran/{$pendaftaran->id}") }}" method="post">
            @method('PATCH')
            @csrf
                <div class="form-group">
                    <label for="full_name">Full Name : </label>
                    <input value="{{ $pendaftaran->nama }}" class="form-control" type="text" name="full_name">
                </div>
                <div class="form-group">
                    <label for="email">Email : </label>
                    <input value="{{ $pendaftaran->email }}" class="form-control" type="text" name="email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone : </label>
                    <input value="{{ $pendaftaran->phone }}" class="form-control" type="text" name="phone">
                </div>
                <div class="form-group">
                    <label for="address">Address: </label>
                    <textarea class="form-control" name="address">{{ $pendaftaran->adress }} </textarea> 
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
                
            </form>
        </div>
    </div>
@endsection