@extends('layouts.base')
@section('title', 'EN & DES')
@section('title-2',)
@section('title-3', 'Deskripsi')
@section('content')
<div class="col-xl-12 col-lg-12">
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="table-responsive p-3">
                <div class="input-group mb-3">
                    <div class="card-header">
                        <h4>Masukkan Text untuk di Deskripsi</h4>
                    </div>
                    <div class="table table-bordered table-sm">
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
                          </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Proses</button>
            </div>
        </div>
    </div>
</div>
@endsection