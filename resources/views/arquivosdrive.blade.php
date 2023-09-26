@extends('layout')

@section('content')
    @if (!empty($message))
        <div class="alert alert-success"> {{$message}}</div>
    @endif
    <div class="row">
        <form method="POST" action="{{ route('drive.store') }}"  enctype="multipart/form-data">
            <h2>Envio de Arquivos para o Google Drive</h2>
            <p>Por enquanto temos upload.</p>
            @csrf
            <input type="file" class="form-control" name="arquivoDrive"><br>
            <input type="submit" class="btn btn-sm btn-block btn-warning">
        </form>
    </div>
@endsection
