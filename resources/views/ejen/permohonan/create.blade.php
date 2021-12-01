@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Todos Create') }}</div>

                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>Kategori Permohonan</label>
                            <select name="kategori_permohonan_id" class="form-control">
                                @foreach ($senarai_kategori_permohonan as $kategori_permohonan)
                                    <option value="{{ $kategori_permohonan->id }}">{{ $kategori_permohonan->name }}</option>
                                @endforeach
                            </select>

                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan Permohonan Saya!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
