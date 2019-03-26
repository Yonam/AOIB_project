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
        function act(){
            var etat = document.getElementById('etatmere');
            var cause = document.getElementById('causedecmere');
            var lieu = document.getElementById('lieudecmere');
            var date = document.getElementById('datedecmere');
            if(etat.value=='décédé'){
                etat.value='en vie'
                cause.disabled=true;
                lieu.disabled=true;
                date.disabled=true;
                cause.value='';
                lieu.value='';
                date.value='';
            }else{
                etat.value='décédé'
                cause.disabled=false;
                lieu.disabled=false;
                date.disabled=false;
            }

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
    @foreach($enfant as $enf)
    <?php
    session_start();
    $_SESSION['IDENFANTAJ']=$enf->IDENFANT;
    ?>

    <form method="POST" action={{ route('finAjoutEnfant.update',$enf->IDENFANT) }}>
        {{ csrf_field() }}
        {{ method_field('PATCH') }}

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
                            <div class="form-group  col-md-8">
                                <label>Nom et prénom :</label>
                                <div class="input-group -copy">
                                    <div class="input-group-addon">
                                        <i class="fa fancytree-active"></i>
                                    </div >
                                    <input type="text" class="form-control pull-right" id="datepicker"  name="Nom"  placeholder="" style=" color: #990000" value="{{$enf->NOMENF}} {{$enf->PRENOMENF}}" disabled >
                                </div>
                            </div>
                            <div class="form-group  col-md-4">
                                <label>sexe :</label>
                                <select class="form-control" id="sexe" name="sexe">
                                    <option>Masculin</option>
                                    <option>Féminin</option>
                                </select>
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

                        <div class="form-group">
                            <label>Lieu de naissance :</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-sort-numeric-asc"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="lieuenf" name="lieuenf" value="" >
                            </div>
                            <!-- /.input group -->
                        </div>

                        <div class="form-group">
                            <label>Adresse :</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-sort-numeric-asc"></i>
                                </div>
                                <textarea class="form-control" rows="2"  id="adresseenf" name="adresseenf" ></textarea>
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
                                <input type="text" class="form-control pull-right" id="causedecpere" name="causedecpere" value="">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Lieu de décès du pére :</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa  fa-user"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="lieudecpere" name="lieudecpere">
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

                        <div class="form-group col-md-3">
                            <label></label>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="etatmere" name="etatmere" value="en vie" onclick="act()"> <b>mère décédé ?</b>
                                </label>
                            </div>
                        </div>

                        <div class="form-group col-md-3">
                            <label>Date de déces de la mére :</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="date" class="form-control pull-right" id="datedecmere" required="" name="datedecmere" disabled="true">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Lieu de déces de la mére :</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="lieudecmere"  name="lieudecmere" disabled="true">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Cause du déces de la mére :</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="causedecmere" name="causedecmere" disabled="true">
                            </div>
                        </div>



                        <div class="form-group  col-md-6">
                            <label>Nombre de frére :</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-at"></i>
                                </div>
                                <input type="number" class="form-control pull-right" id="nbrfrere" name="nbrfrere">
                            </div>
                        </div>

                        <div class="form-group  col-md-6">
                            <label>Nombre de frére qui travail :</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-at"></i>
                                </div>
                                <input type="number" class="form-control pull-right" id="nbrfreretaf" name="nbrfreretaf">
                            </div>
                        </div>

                        <div class="form-group  col-md-6">
                            <label>Nombre de soeur :</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-at"></i>
                                </div>
                                <input type="number" class="form-control pull-right" id="nbrsoeur" name="nbrsoeur">
                            </div>
                        </div>

                        <div class="form-group  col-md-6">
                            <label>Gain mensuel de la famille :</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-institution"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="gain" name="gain">
                            </div>
                            <!-- /.input group -->
                        </div>

                        <div class="form-group  col-md-6">
                            <label>Nom tuteur :</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-institution"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="nomtut" name="nomtut">
                            </div>
                        </div>

                        <div class="form-group  col-md-6">
                            <label>Contact du tuteur:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-institution"></i>
                                </div>
                                <input type="tel" class="form-control pull-right" id="contacttut" name="contacttut">
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
