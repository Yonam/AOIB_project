@extends('layouts.master')

@push('scripts.header')



@endpush

@section('page.header')
    <div class="col-md-12" style="background-color: #1d75b3">
  <h1>Gestion Enregistrement <small>Enfant</small> </h1>
    </div>
@endsection


@section('detail.chemin')
  <div class="col-md-12">
  <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="#">Gestion Enregistrement</a></li>
        <li class="active">Nouvel enregistrement</li>
      </ol>
  </div>
@stop
 @section('page.body')
<form method="POST">
    {{ csrf_field() }}
 <div class="row">	
    <div class="col-md-12">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title" style="color: #990000">Dossier à fournir</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label>Acte de naissance </label>
                        <input type="file" id="acteNaiss" name="acteNaiss">
                        <br>
                        <label>Acte de déces du père </label>
                        <input type="file" id="acteDecesPere" name="acteDecesPere">
                        <br>
                        <label>Photo passeport de l'enfant  </label>
                        <input type="file" id="photo" name="photo">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box box-danger">
            @if ($errors->has('date'))
            <span class="help-block">
                <strong>{{ $errors->first('date') }}</strong>
            </span>
            @endif
                <div class="box-header">
                    <h3 class="box-title" style="color: #990000">Inforamtions</h3>
                </div>
                <div class="box-body" class="col-lg-6">
                    <div class="form-group">
                        <label>Nom de l'enfant </label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa  fa-user"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="nomEnfant" name="nomEnfant" value="" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Prenom de l'enfant </label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa  fa-user"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="prenomEnfant" name="prenomEnfant" value="" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nom & Prénom(s) du père </label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa  fa-user"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="nomPere" name="nomPere" value=""  required >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
    <div class="box-footer col-lg-12" >
        <br>
        <button class="btn btn-primary col-lg-4 col-md-3" type="submit" style="margin-left:3%">Valider</button>
        <button class="btn btn-default col-lg-4  col-md-4 col-lg-push-2" type="reset">Annuler</button>
    </div>
</form>
 @stop
