@extends('admin.layouts.master')
@section('css')
<style>

</style>
@endsection

@section('content')
<div class="card col-md-12 col-sm-12 mt-5">
    <form action="#" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-header">
            <div class="card-title">ADD PRODUCTS</div>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label class="form-label">name product</label>
                <input type="text" class="form-control" name="nom_equipe" placeholder="nom d'equipe">
            </div>
            <div class="mb-3">
                <label class="form-label">activity </label>
                <select name='activity_id' class="custom-select custom-select-sm form-control form-control-sm">
                    <option value="">select activité</option>
                    @foreach ($activites as $ac)
                    <option value="{{ $ac->id }}">{{ $ac->nom }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">responsable equipe</label>
                <select name='respo_equipe' class="custom-select custom-select-sm form-control form-control-sm">
                    <option value="">select responsable</option>
                    @foreach ($membres as $mm)
                    <option value="{{ $mm->id }}">{{ $mm->nom_complete }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">logo</label>
                <input type="file" class="form-control" id="logo" name="logo" placeholder="choose logo">
            </div>

        </div>
        <div class="card-footer">
            <input type="submit" class="btn btn-rounded btn-primary" value="Ajouter equipe">
        </div>
    </form>
</div>
@endsection
<!-- Row -->