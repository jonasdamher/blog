@extends('panel.layouts.dashboard',['view'=>'form'])

@section('title', 'Publicación')
@section('formName', 'Nueva publicación')

@section('main')
    <form>
        <div class="row">
           
            <div class="col-xs-12 col-md-6 col-lg-4">
                <div class="form-group">
                    <label for="name">Título</label>
                    <input type="text" id="name" name="name" class="form-control">
                </div>
            </div>

            <div class="col-xs-12 col-md-6 col-lg-4">
                <div class="form-group">
                    <label for="description">Descripción</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>
            </div>

            <div class="col-xs-12 col-md-6 col-lg-4">
                <div class="form-group">
                    <label for="formFile" class="form-label">Default file input example</label>
                    <input class="form-control" type="file" id="formFile">
                </div>
            </div>

            <div class="col-xs-12 col-md-6 col-lg-4">
                <label for="category" class="form-label">Categoría</label>

                <select class="form-select" id="category" name="category_id" aria-label="Categoría">
                    <option selected>--Seleccionar--</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>

            <div class="col-xs-12 col-md-6 col-lg-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="disabled">
                    <label class="form-check-label" for="disabled">
                        No mostrar en la web
                    </label>
                </div>
            </div>

        </div>
        <button type="button" class="btn btn-primary mt-4">Guardar</button>
    </form>
@endSection
@push('scripts-tail')
@endpush
