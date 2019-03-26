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
            <div class="col-md-6">
                <div class="box box-primary with-border">
                    <div class="box-header">
                        <h3 class="box-title">Informations sur l'utilisateur</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="form-group">
                            <div class="form-group">
                                <label>Nom de l'utilisateur :</label>
                                <div class="input-group -copy">
                                    <div class="input-group-addon">
                                        <i class="fa fancytree-active"></i>
                                    </div >
                                    <input type="text" class="form-control pull-right" id="nomuser"  name="nomuser"   style=" color: #990000" value=""  >
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Prenom de l'utilisateur :</label>
                                <div class="input-group -copy">
                                    <div class="input-group-addon">
                                        <i class="fa fancytree-active"></i>
                                    </div >
                                    <input type="text" class="form-control pull-right" id="prenomuser"  name="prenomuser"   style=" color: #990000" value=""  >
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Contact de l'utilisateur :</label>
                                <div class="input-group -copy">
                                    <div class="input-group-addon">
                                        <i class="fa fancytree-active"></i>
                                    </div >
                                    <input type="text" class="form-control pull-right" id="contactuser"  name="contactuser" style=" color: #990000" value=""  >
                                </div>
                            </div>
                            <div class="form-group  col-md-6">
                                <label>Login :</label>
                                <div class="input-group -copy">
                                    <div class="input-group-addon">
                                        <i class="fa fancytree-active"></i>
                                    </div >
                                    <input type="text" class="form-control pull-right" id="userlogin"  name="userlogin" style=" color: #990000" value=""  >
                                </div>
                            </div>
                            <div class="form-group  col-md-6">
                                <label>Mots de passe :</label>
                                <div class="input-group -copy">
                                    <div class="input-group-addon">
                                        <i class="fa fancytree-active"></i>
                                    </div >
                                    <input type="text" class="form-control pull-right" id="password"  name="password" style=" color: #990000" value=""  >
                                </div>
                            </div>
                            <!-- /.input group -->
                        </div>

                    </div>
                    <!-- /box  body-->
                </div>
            </div>
            <div class="col-md-6">
                <div class="box box-primary with-border">
                    <div class="box-header">
                        <h3 class="box-title">Droits de l'utilisateur</h3>
                    </div>
                    <div class="box-body">
                        <div class="form-group col-md-6">
                            <label>Nationalité</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa  fa-user"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="nationalite" name="nationalite" value="">
                            </div>
                            <!-- /.input group -->
                        </div>

                        <div class="form-group  col-md-6">
                            <label>langue parler :</label>
                            <select class="form-control" id="langue" name="langue">
                                <option>Fançais</option>
                                <option>Arrab</option>
                                <option>Anglais</option>
                                <option>Allemand</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Formation :</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-sort-numeric-asc"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="formenf" name="formenf" value="" >
                            </div>
                            <!-- /.input group -->
                        </div>

                        <div class="form-group col-md-6">
                            <label>Date de naissance :</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa  fa-user"></i>
                                </div>
                                <input type="date" class="form-control pull-right" id="dateenf" name="dateenf" value="">
                            </div>
                        </div>
                    </div>
                    <!-- /box  body-->
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
