@extends('layouts.dashboard',['view'=>'form'])

@section('title', 'Artículos')
@section('formName', 'Nuevo artículo')

@section('main')
    <form>
        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-4">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" id="name" name="name" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-4">
                <div class="form-group">
                    <label for="barcode">Código de barras</label>
                    <input type="text" id="barcode" name="barcode" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-4">
                <div class="form-group">
                    <label for="price">Precio</label>
                    <input type="number" id="price" name="price" class="form-control">
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-primary">Guardar</button>
    </form>
@endSection
@push('scripts-tail')

@endpush
