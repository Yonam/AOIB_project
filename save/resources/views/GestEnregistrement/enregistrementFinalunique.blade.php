@extends('layouts.master')

@push('scripts.header')



@endpush

@section('page.header')
    <div class="col-md-12">
        <h1>Gestion Enregistrement <small>Enfant</small> </h1>
    </div>
@endsection


@section('detail.chemin')
    <script>
        function activer(){
            document.form.causedecesmere.disabled=false;
        }
    </script>
    <div class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
            <li><a href="#">Gestion Enregistrement</a></li>
            <li class="active">Nouvel enregistrement</li>
        </ol>
    </div>
@stop
@section('page.body')

    <form method="POST" action="endAjout">
        {{ csrf_field() }}

        @foreach($enfant as $enf)
        <?php
            session_start();
            $_SESSION['IDENFANT']=$enf->IDENFANT;
        ?>
            <div class="row">
            <div class="col-md-6">
                <div class="box box-primary with-border">
                    <div class="box-header">
                        <h3 class="box-title">Informations sur l'enfant</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="form-group">
                            <a class="dropdown-toggle" data-toggle="dropdown">
                                <img src="../{{ $enf->PHOTOPASS }}" alt="" height="222px" width="222px">
                                <span style="color: #9c1f1f"></span>
                            </a>
                        </div>
                        <div class="form-group">
                            <label>Nom et prénom :</label>
                            <div class="input-group -copy">
                                <div class="input-group-addon">
                                    <i class="fa fancytree-active"></i>
                                </div >
                                <input type="text" class="form-control pull-right" id="datepicker"  name="Nom"  placeholder="" style=" color: #990000" value="{{$enf->NOMENF}}  {{$enf->PRENOMENF}}" disabled >
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
                        <h3 class="box-title">Informations sur l'enfant</h3>
                    </div>
                    <div class="box-body">
                        <div class="form-group col-md-6">
                            <label>Nationalité</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa  fa-user"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="nationalite" name="nationalite" value="{{old('nomDuClient')}}">
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
                                <input type="text" class="form-control pull-right" id="formation" name="formation" value="{{old('nif')}}" >
                            </div>
                            <!-- /.input group -->
                        </div>

                        <div class="form-group col-md-6">
                            <label>Date de naissance :</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa  fa-user"></i>
                                </div>
                                <input type="date" class="form-control pull-right" id="datenaiss" name="datenaiss" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Adresse :</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-sort-numeric-asc"></i>
                                </div>
                                <textarea class="form-control" rows="2"  id="Adresseenf" name="Adresseenf" ></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- /box  body-->
                </div>
            </div>
            <div class="col-md-12">
                <div class="box box-success" style="padding-bottom: 6%">
                    <div class="box-header">
                        <h3 class="box-title">Informations sur la famille</h3>
                    </div>
                    <hr>
                    <div class="box-body">

                        <div class="form-group col-md-6">
                            <label>Nom du pére :</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa  fa-user"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="nompere" name="nompere" value="{{$enf->NOMPERE}}" disabled>
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Date de décès du pére :</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa  fa-user"></i>
                                </div>
                                <input type="date" class="form-control pull-right" id="datedecespere" name="datedecespere" value="">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Cause du décès du pére :</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa  fa-user"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="casedecespere" name="casedecespere" value="">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Nom de la mére :</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa  fa-user"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="nommere" name="nommere" value=" ">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="nommere" name="nommere" value="Décédé" onchange="activer()"> mère décédé ?
                                </label>
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Cause du déces de la mére :</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="causedecesmere" required="" name="causedecesmere" disabled="true">
                            </div>
                        </div>

                        <div class="form-group  col-md-6">
                            <label>Nombre de frére :</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-at"></i>
                                </div>
                                <input type="number" class="form-control pull-right" id="nbrfrere" name="nbrfrere" value="{{old('mail')}}">
                            </div>
                        </div>

                        <div class="form-group  col-md-6">
                            <label>Nombre de frére qui travail :</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-at"></i>
                                </div>
                                <input type="number" class="form-control pull-right" id="nbrfreretf" name="nbrfreretf" value="{{old('mail')}}">
                            </div>
                        </div>

                        <div class="form-group  col-md-6">
                            <label>Nombre de soeur :</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-at"></i>
                                </div>
                                <input type="number" class="form-control pull-right" id="nbrsoeur" name="nbrsoeur" value="">
                            </div>
                        </div>

                        <div class="form-group  col-md-6">
                            <label>Gain mensuel de la famille :</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-institution"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="gain" name="gain" value="">
                            </div>
                            <!-- /.input group -->
                        </div>

                        <div class="form-group  col-md-6">
                            <label>Nom tuteur :</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-institution"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="nomtuteur" name="nomtuteur" value="{{old('ville')}}">
                            </div>
                        </div>

                        <div class="form-group  col-md-6">
                            <label>Contacte du tuteur:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-institution"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="contacttuteur" name="contacttuteur" value="{{old('ville')}}">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="box-footer col-lg-12" >
                <br>
                <button class="btn btn-primary col-lg-4 col-md-3"   style="margin-left:3%">Valider</button>
                <button class="btn btn-default col-lg-4  col-md-4 col-lg-push-2" type="reset">Annuler</button>
            </div>

        </div>
        <script>
            function activer(){
                document.form.causedecesmere.disabled=false;
            }
        </script>

        @endforeach
    </form>
@stop
