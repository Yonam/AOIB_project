
@extends('layouts.master')


@push('scripts.header')


        <!-- Theme style -->
<link rel="stylesheet" href="{{asset('StyleAdmin/plugins/datatables/dataTables.bootstrap.css')}}">
<!-- AdminLTE Skins. Choose a skin from the css/skins
 folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="{{asset('StyleAdmin/dist/css/skins/_all-skins.min.css')}}">


@endpush

@section('page.header')
    <div class="col-md-12">
        GESTION ENFANTS <small>Liste</small>
    </div>
@stop

@section('detail.chemin')
    <div class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
            <li><a href="#">Gestion Enregistrment</a></li>
            <li class="active">Liste Enfants</li>
        </ol>
    </div>
    @stop
            <!-- /Fin DivRow -->

    @section('page.body')
            <!--  btn btn-block btn-primary -->
    <div class="row">
        <div class="col-xs-12">
            <center>
                <!-- Modification Alert -->
                <div class="alert alert-dismissible alert-success fade in alertEdit" id="alertEdite"  style=" width: 1000px; display: none">

                    <a href="#" class="close" data-dismiss="alert" aria-hidden="true" style="" id="x">&times;</a>
                    <p style="text-align: center">Le client a été modifié avec succès</p>
                </div>
                <!-- Suppression Alerrt -->

                <div class="alert alert-dismissible alert-info fade in alertDelete" id="alertDelet" style=" width: 1000px; display: none">

                    <a href="#" class="close" data-dismiss="alert" aria-hidden="true" style="" id="x">&times;</a>
                    <p>Le client a été supprimé avec succès</p>
                </div>

                <!-- ECHEC -->
                <div class="alert alert-dismissible alert-danger fade in alertEchec"   style=" width: 1000px; display: none">

                    <a href="#" class="close" data-dismiss="alert" aria-hidden="true" style="" id="x">&times;</a>
                    <p style="text-align: center"></p>
                </div>
            </center>
            <div class="box box-primary">
                <div class="box-header">
                    <a class="btn   btn-primary fa fa-print" href="{{url('listeClient/pdf')}}"> IMPRIMER</a>
                    <B><h3 class="">Liste des enfants selectionner</h3></B>


                </div>
                <!-- /.box-header -->
                <div class="box-body">



                    <div class="row">
                        <div class="col-md-12">
                            <form  id="listeFactureForm">
                                <meta name="csrf-token" content="{{csrf_token() }}"/>
                                <input type="text" name="idClientHidden" id="idClientHidden" value="" hidden="">
                                <div class="box box-success">
                                    <div class="col-md-6">
                                        <div class="box-header">
                                            <h3 class="box-title">{{"Données en Français"}}</h3>
                                        </div>
                                        <div class="box-body">
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                <div class="">
                                                    <div class="box-header">
                                                        <h3 class="box-title">Photo de l'enfant</h3>
                                                    </div>
                                                    <div class="box-body">
                                                        <div class="form-group">
                                                            <a class="dropdown-toggle" data-toggle="dropdown">
                                                                <img src="..\as.jpg" alt="">
                                                                <span style="color: #9c1f1f"></span>
                                                            </a>
                                                            <!-- /.input group -->
                                                        </div>
                                                        <!-- Date de la facutre -->
                                                        <div class="form-group">
                                                            <label>Nom de l'enfant:</label>
                                                            <div class="input-group -copy">
                                                                <input type="text" class="form-control pull-right" id="datepicker" required="" name="Nom"  placeholder="TCHAKALA Abdoul" style=" color: #990000" disabled >
                                                            </div>
                                                            <!-- /.input group -->
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                                <div class="col-md-6">
                                                <div class="box box-primary with-border">
                                                    <div class="box-header">
                                                        <h3 class="box-title"></h3>
                                                    </div>
                                                    <!-- /.box-header -->
                                                    <div class="box-body">
                                                        <div class="form-group">
                                                            <label>Nom</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control pull-right" id="nomDuClient" name="nomDuClient" value="{{old('nomDuClient')}}">
                                                            </div>
                                                            <!-- /.input group -->
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Nom</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control pull-right" id="nomDuClient" name="nomDuClient" value="{{old('nomDuClient')}}">
                                                            </div>
                                                            <!-- /.input group -->
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Nom</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control pull-right" id="nomDuClient" name="nomDuClient" value="{{old('nomDuClient')}}">
                                                            </div>
                                                            <!-- /.input group -->
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Nom</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control pull-right" id="nomDuClient" name="nomDuClient" value="{{old('nomDuClient')}}">
                                                            </div>
                                                            <!-- /.input group -->
                                                        </div>

                                                    </div>
                                                    <!-- /box  body-->
                                                </div>
                                            </div>
                                            </div>
                                            <div>
                                                <!-- <input type="submit" name="valider"> -->
                                                <!-- <button class="btn  btn-primary fa fa-check" > Valider</button> -->
                                                <!-- <a class="btn  btn-primary fa fa-check"> Valider </a> -->
                                            </div>
                                            <div class="col-md-">
                                                <div class="form-group">
                                                    <label>Nom</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control pull-right" id="nomDuClient" name="nomDuClient" value="{{old('nomDuClient')}}">
                                                    </div>
                                                    <!-- /.input group -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="box-header">
                                            <h3 class="box-title">{{"Données en Arrab"}}</h3>
                                        </div>
                                        <div class="box-body">
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <div class="">
                                                    <div class="box-header">
                                                        <h3 class="box-title">Photo de l'enfant</h3>
                                                    </div>
                                                    <!-- /.box-header -->
                                                    <div class="box-body">
                                                        <div class="form-group">
                                                            <a class="dropdown-toggle" data-toggle="dropdown">
                                                                <img src="..\as.jpg" alt="">
                                                                <span style="color: #9c1f1f"></span>
                                                            </a>
                                                            <!-- /.input group -->
                                                        </div>
                                                        <!-- Date de la facutre -->
                                                        <div class="form-group">
                                                            <label>Nom de l'enfant:</label>
                                                            <div class="input-group -copy">
                                                                <div class="input-group-addon">
                                                                    <i class="fa fancytree-active"></i>
                                                                </div >
                                                                <input type="text" class="form-control pull-right" id="datepicker" required="" name="Nom"  placeholder="TCHAKALA Abdoul" style=" color: #990000" disabled >
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
                                                        <h3 class="box-title"></h3>
                                                    </div>
                                                    <!-- /.box-header -->
                                                    <div class="box-body">
                                                        <div class="form-group">
                                                            <label>Nom</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control pull-right" id="nomDuClient" name="nomDuClient" value="{{old('nomDuClient')}}">
                                                            </div>
                                                            <!-- /.input group -->
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Nom</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control pull-right" id="nomDuClient" name="nomDuClient" value="{{old('nomDuClient')}}">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Nom</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control pull-right" id="nomDuClient" name="nomDuClient" value="{{old('nomDuClient')}}">
                                                            </div>
                                                            <!-- /.input group -->
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Nom</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control pull-right" id="nomDuClient" name="nomDuClient" value="{{old('nomDuClient')}}">
                                                            </div>
                                                            <!-- /.input group -->
                                                        </div>
                                                    </div>
                                                    <!-- /box  body-->
                                                </div>
                                                </div>
                                            </div>
                                            <div>
                                                <!-- <input type="submit" name="valider"> -->
                                                <!-- <button class="btn  btn-primary fa fa-check" > Valider</button> -->
                                                <!-- <a class="btn  btn-primary fa fa-check"> Valider </a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                    <!-- /col-row -->

                    <br>


                    <br>  <br>  <br>  <br>

                    <?php $no=1;?>
                    {{--@foreach($allClientEntreprise as $data)--}}
                            <!-- tr>
      <td style="text-align:center">{{$no++}} </td>
      <td style="text-align:center">{{--$data->entreprise->raisonsocial--}} -->

                    <!--         </td>
            <td style="text-align:center">{{--$data->entreprise->nifEnt--}}</td>
            <td>{{--$data->nomCli--}}</td>
            <td id="telAffichBrute">{{--$FormaterPhone::formaterTel($data->entreprise->tel)--}}</td>
            <td id="mailAffichBrute">{{--$data->entreprise->email--}}</td>
            <td id="bpAffichBrute">{{--$data->entreprise->bp--}}</td>
            <td id="villeAffichBrute">{{--$data->entreprise->ville--}}</td>
            <td id="quartierAffichBrute">{{--$data->entreprise->quartier--}}</td>
            <td style="text-align:center"> -->

                    <!---Details-->
                    <!--  <a class="btn btn-primary show-modal" type="" data-toggle="modal" data-target="#myModalDetail1" data-id="{{--$data->id--}}"><i class="fa fa-eye"> </i>
             </a> -->

                    <!-- Modification -->
                    <!--    <a class="btn  btn-warning btn-sm edit-modal" type="" data-toggle="modal" data-target="#myModalModify" data-id="{{--$data->id--}}"><i class=" fa fa-edit"> </i>
           </a> -->

                    <!-- Annulation -->

                    <!--            <a class="btn btn-danger delete-modal" type="" data-id="{{--$data->id--}}"> <i class="fa fa-trash">  </i>
              </a>
</td>
</tr> -->
                    {{--@endforeach--}}

                    <!--  </tbody>
                   </table>
                 -->

                    <!-- Modal  details-->
                    <div class="modal fade" id="myModalDetail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                        <div class="modal-dialog">
                            <form method="post" action="" name="DetailReglement">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel">Coordonnées du client</h4>

                                    </div>
                                    <!-- /ModalHeader -->
                                    <!-- <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                    -->
                                    <div class="modal-body">
                                        <table width="100%" class="table table-bordered table-hover dataTable"  role="grid" id="example2">
                                            <thead>
                                            <tr>
                                                <th>Téléphone</th>
                                                <th>Email</th>
                                                <th>BP</th>
                                                <th>Ville</th>
                                                <th>Quartier</th>

                                            </tr>

                                            </thead>
                                            <!-- tableHead -->
                                            <tbody>
                                            <tr>
                                                <td id="telAffich"></td>
                                                <td id="mailAffich"></td>
                                                <td id="bpAffich"></td>
                                                <td id="villeAffich"></td>
                                                <td id="quartierAffich"></td>
                                            </tr>

                                            </tbody>

                                        </table>
                                        <!-- /table -->
                                    </div>
                                    <!-- /ModalBBody -->
                                    <div class="modal-footer">
                                        <input type="text" name="" hidden value="<?php //if(isset($d)){ echo $d->CODE_CMDE;} ?>">
                                        <!--                                                         <button type="submit" class="btn btn-success fa fa-money" value=""  name="encaisser"> Valider</button>
                                        --> <button type="button" class="btn btn-danger fa fa-close" data-dismiss="modal"> Fermer</button>
                                    </div>

                                </div>
                                <!-- /ModealContent -->

                            </form>


                        </div>
                        <!-- /ModelDialog -->
                    </div>
                    <!-- /DivModalFadeDetail -->





                    <!--modal fade MODIFIER & SUPPRIMER-->
                    <div class="modal fade" id="myModalModify1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">  </h4>

                                </div>
                                <!-- /ModalHeader -->
                                <div class="modal-body">
                                    <!--  <div>
                                     <p class="error text-center alert alert-danger hidden"></p>
                                   </div> -->
                                    <form class="form-horizontal" role="modal" id="formModifier">
                                        {{--csrf_field()--}}
                                        <meta name="csrf-token" content="{{csrf_token() }}"/>

                                        <!-- <div class="row">    -->
                                        <div class="form-group">
                                            <label for="nif" class="control-label col-sm-2">NIF</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="nif" id="NIF" value="">
                                                <p class="error errorNif text-center alert alert-danger hidden"></p>

                                            </div>
                                        </div>
                                        <!--   </div> -->

                                        <br/>
                                        <!-- <div class="row">   -->
                                        <div class="form-group">
                                            <label for="nomRaiSoc" class="control-label col-sm-2">Nom/Raison social</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="nomRaiSoc" id="nomRaiSoc" value="" required="">
                                                <p class="error  errorNomRaiSoc text-center alert alert-danger hidden"></p>

                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label for="nomDuClient" class="control-label col-sm-2">Nom du client</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="nomDuClient" id="nomDuClient" value="">
                                                <p class="error errorNomCli text-center alert alert-danger hidden"></p>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label for="telephone" class="control-label col-sm-2">Téléphone</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="tel" name="telephone" id="telephone" value=""  data-inputmask='"mask": "(999) 99999999"' data-mask>
                                                <p class="error errorTel text-center alert alert-danger hidden"></p>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label for="mail" class="control-label col-sm-2">Email</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="email" name="mail" id="mail" value="">
                                                <p class="error  errorMail text-center alert alert-danger hidden"></p>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label for="bp" class="control-label col-sm-2">BP</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="bp" id="bp" value="">
                                                <p class="error errorBp text-center alert alert-danger hidden"></p>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label for="ville" class="control-label col-sm-2">Ville</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="ville" id="ville" value="p">
                                                <p class="error errorVille text-center alert alert-danger hidden"></p>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label for="ville" class="control-label col-sm-2">Quatier</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="quartier" id="quartier" value="">
                                                <p class="error errorQuartier text-center alert alert-danger hidden"></p>
                                                <input type="text" value="" id="hidden" name="id" hidden>
                                                <input type="text" value="" id="hidenEnt_id" name="ent_id" hidden>
                                            </div>

                                        </div>
                                        <!--     </div> -->

                                        {{--FORM DELETE POST--}}
                                        <div class="deletecontent">
                                            Etes-vous sûr de vouloir supprimer ce <span class="title"></span>?
                                            <input type="text" value="" id="hidden" name="id">
                                            <input type="text" value="" id="hidenEnt_id" name="ent_id">
                                            <span class="hidden id"></span>

                                        </div>

                                        <!-- /table -->
                                    </form>
                                </div>
                                <!-- /ModalBBody -->
                                <div class="modal-footer">


                                    <button type="button" class="btn actionBtn" data-dismiss="modal">
                                        <span id="footer_action_button" class="fa"></span>
                                    </button>

                                    <button type="button" class="btn btn-warning" data-dismiss="modal">
                                        <span class="fa "></span>Fermer
                                    </button>


                                </div>

                            </div>
                            <!-- /ModealContent -->

                            <!--  </form> -->
                            <!-- DetailReglementForm -->


                        </div>
                        <!-- /ModelDialog -->
                    </div>
                    <!-- modal fade -->



                </div>
                <!--/box-body -->
            </div>

        </div>
    </div>

    <!-- /Fin xs -->




    @endsection


    @push('scripts.footer')


            <!-- SlimScroll 1.3.0 -->
    <script src="{{ asset('StyleAdmin/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
    <!-- iCheck 1.0.1 -->


    <!-- DataTables -->

    <script src="{{ asset('StyleAdmin/plugins/datatables/jquery.dataTables.js')}}"></script>

    <script src="{{ asset('Styldata-lobiideAdmin/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>

    <script src="{{ asset('StyleAdmin\lobiadmin/plugins/input-mask/jquery.inputmask.js')}}"></script>
    <script src="{{ asset('StyleAdmin\lobiadmin/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
    <script src="{{ asset('StyleAdmin\lobiadmin/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
    <!-- date-range-picker -->



    <script type="text/javascript">

        $(document).ready(function(){
            //alertify.alert('Je suis nouveau lo');
            //alert('cc');
            // alert($('data-id').val());
            $('#example2').DataTable();
            // $('#table1').DataTable();
            //$('#example4').DataTable();

            //FOR MOMENT
            $('table1New').DataTable();

            $('#example21').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });

            // alert('ccxxc');
            $("[data-mask]").inputmask();
            listeLo();

            //$('#cacheTh').hide();

//$('#new').trigger('click');

        });


        //SHW FUNCTION GENRE AFFICHAGE DU MODAL
        $(document).on('click', '.show-modal', function(){
            $('#myModalDetail').modal('show');
            var t = $(this).parents('tr');

            //alert(t);

            //RECUPERATION DE LA LIGNE SUE LEQUEL SE TROUVE LE BOUTTOTN SHOW MODAL
            var tds=t.find('td').html(); //Il ne trouve q'un seule element du coup en  croyant que je peux affihcer les  contenus des autres cellules avec, c'est fautx, il ne retorune qu'n éléemnt
            var td=t.find('td');

            // var id = td.eq(0);
            // var tds=t.find('td').html();
            // var td=t.find('td');
            // var id = td.eq(0).html();
            // var nomRaiSoc = td.eq(1).html();
            // var nif = td.eq(2).html();
            // var nom = td.eq(3).html();
            // var tel = td.eq(4).html();
            // var email = td.eq(5).html();
            // var bp = td.eq(6).html();
            // var ville = td.eq(7).html();
            // var quartier = td.eq(8).html();

            // recupChampInBtn();

            //RECUPERATION DES CHAMPS MIS DAZNS LE BOUTTON myModalDetail
            var tel1 = $(this).attr('monTelBtn');
            var email1 = $(this).attr('monMailBtn');
            var bp1 = $(this).attr('monBpBtn');
            var ville1 = $(this).attr('monVilleBtn');
            var quartier1 = $(this).attr('monQuartierBtn');

            var nomRaiSoc = td.eq(0).html();
            var nif = td.eq(1).html();
            var nom = td.eq(2).html();
            var tel = td.eq(3).html();
            //ville1= (ville1 == 'null') ? ' ' : ville1;
            // var tel = tel1;
            var email = td.eq(4).html();
            var email = email1;
            var bp = td.eq(5).html();
            //var bp = bp1;
            var ville = td.eq(6).html();
            // var ville = ville1;
            var quartier = td.eq(7).html();
            // var quartier = quartier1;
//            var p = $('.graceClassDeleteIdTemporairema').attr('id');
// alert(p);
            //alert(td.eq(8).html());
            //***TESTING****//
            // alert(td.eq(1).html()); //alert(td.eq(1));//alert(td[2]);alert(td[3]);alert(td[4]);alert(td[5]);alert(td[6]);alert(td[7]); alert(td[8]);
            // var c = td[1].innerHtml
            // $('#telAffich').html(c);

            //****AFFECTATION AU CHAMP DU MODAL**////

            $("#telAffich").html(tel) ;
            $("#mailAffich").html(email);
            $("#bpAffich").html(bp);
            $("#villeAffich").html(ville);
            $("#quartierAffich").html(quartier);

        });

        //FONCTION DE RECUPERATIONN DE CHAMP DANS ELS BOUTTON
        recupChampInBtn = function(){
            var tel1 = $(this).attr('monTelBtn');
            var email1 = $(this).attr('monMailBtn');
            var bp1 = $(this).attr('monBpBtn');
            var ville1 = $(this).attr('monVilleBtn');
            var quartier1 = $(this).attr('monQuartierBtn');

            // alertify.alert(tel1);
            // alertify.alert(email1);
            // alertify.alert(ville1);
            //alertify.alert(tel1);
            alertify.alert(quartier1);
        }

        //FUNCTION EDIT POST

        $(document).on('click', '.edit-modal', function(){
            var t = $(this).parents('tr');
            //alert(t);
            //Recupration des val des attributs qu'on a créer dasn le remplissage du tableau par ajxx
            var id = $(this).attr('monAtt');
            var idEnt_id = $(this).attr('monAttEnt_Id');
            //RECUPERATION DE LA LIGNE SUE LEQUEL SE TROUVE LE BOUTTOTN SHOW MODAL

            var tds=t.find('td').html();
            var td=t.find('td');
            // var id = td.eq(0).html();
            // var nomRaiSoc = td.eq(1).html();
            // var nif = td.eq(2).html();
            // var nom = td.eq(3).html();
            // var tel = td.eq(4).html();
            // var email = td.eq(5).html();
            // var bp = td.eq(6).html();
            // var ville = td.eq(7).html();
            // var quartier = td.eq(8).html();


            //  var id = td.eq(0).html();
            var nomRaiSoc = td.eq(0).html();
            var nif = td.eq(1).html();
            var nom = td.eq(2).html();
            var tel = td.eq(3).html();
            var email = td.eq(4).html();
            var bp = td.eq(5).html();
            var ville = td.eq(6).html();
            var quartier = td.eq(7).html();
            //AFFECTATION AU VALUE DES CHAMPS  DES FORMULAIRE DU MODAL

            $('#NIF').val(nif); $('#nomRaiSoc').val(nomRaiSoc); $('#telephone').val(tel); $('#mail').val(email); $("#bp").val(bp); $('#ville').val(ville); $('#quartier').val(quartier); $("#nomDuClient").val(nom ); $("#hidden").val(id); $('#hidenEnt_id').val(idEnt_id);

            $("#footer_action_button").text('Modifier Client');
            $('#footer_action_button').addClass('fa-check');
            $('#footer_action_button').removeClass('fa-trash');
            $(".actionBtn").addClass('edit');

            $(".actionBtn").addClass('btn-success');
            $(".actionBtn").removeClass('btn-danger');

            $("#myModalModify1").modal('show');
            $('.modal-title').html("<B>Modification du client</B>");

            $('.deletecontent').hide();
            $('.form-horizontal').show();

        });


        //lISTE TABLE

        function listeLo(){
            // alert('je viens de la table');
            url="";
            $.ajax({
                url: "{{url('ListeClientJson')}}",
                type: 'GET',
                dataType: 'json',
                success: function (json) {

                    //    var table = $('#table1').DataTable({
                    //      'destroy' : true,
                    //      'searching' : true,
                    //      'paging': true,
                    //      "columnDefs": [
                    //     { "targets": [ 0 ],  "visible": false
                    //   },


                    //   ]

                    // });
                    //FOR MOMENT table.clear();


                    // $.each(json.datas, funtion(key, value){
                    //    table.row.add([value.raisonsocial]);
                    // });
                    $.each(json.datas,function(key, value){
                        table.row.add([ value.id ,value.entreprise.raisonsocial, value.entreprise.nifEnt, value.nomCli,value.entreprise.tel, value.entreprise.email, value.entreprise.bp, value.entreprise.ville, value.entreprise.quartier, '<a class="btn btn-primary show-modal" type="" data-toggle="modal" data-target="#myModalDetail1" monTelBtn='+value.entreprise.tel+' monMailBtn='+value.entreprise.email+' monBpBtn='+value.entreprise.bp+' monVilleBtn='+value.entreprise.ville+' monQuartierBtn='+value.entreprise.quartier+'><i class="fa fa-eye"> </i></a> <a class="btn  btn-warning btn-sm edit-modal" type="" data-toggle="modal" data-target="#myModalModify" monAtt='+value.id+' monAttEnt_Id='+value.entreprise_id+'> <i class=" fa fa-edit"> </i></a> <a class="btn btn-danger delete-modal" type=""  monAtt='+value.id+' monAttEnt_Id='+value.entreprise_id+'> <i class="fa fa-trash">  </i></a>',
                        ]);
                    })
                    table.draw();
                },
            });
        }

        //MODIFICATION


        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
            }
        });


        $('.modal-footer').on('click', '.edit', function(){
            var data1;
            var $form = $('#formModifier');
            data1 = new FormData($form);
            //  alert();
            $.ajax({
                url:"{{url('editClient')}}",
                type:"POST",
                data:{
                    nif:$('#NIF').val(), nomRaiSoc:$('#nomRaiSoc').val(), telephone:$('#telephone').val(), mail:$('#mail').val(), bp:$("#bp").val(), ville:$('#ville').val(), quartier:$('#quartier').val(), nomDuClient:$("#nomDuClient").val(), id:$("#hidden").val(), ent_id:$("#hidenEnt_id").val()
                },
                //    data: $form.serialize(),
                //    contentType:false,
                //   cache:false,
                //  processData:false,
                // dataType:'json',
                success:function(data){

                    //alert('Modification prise en compte');
                    //$('.graceClassDeleteIdTemporairema').attr('id', 'NewIdtb');
                    //$('.graceClassDeleteIdTemporairema').attr('id', 'newIdOfTable');
                    if(data.errors){
                        // $('.alertEchec').find("p").html(' ');
                        //$('.alertEchec').show();
                        $('#myModalModify1').modal({
                            keyboard:false,
                        })
                        alertify.error('Echec de la modification!');
                        //$('.error').removeClass('hidden');

                        if(data.errors.nif ){
                            $('.errorNif').removeClass('hidden');
                            $('.errorNif').text(data.errors.nif);

                        }else{
                            $('.errorNif').addClass('hidden');

                        }
                        if(data.errors.nomRaiSoc ){
                            $('.errorNomRaiSoc').removeClass('hidden');
                            $('.errorNomRaiSoc').text(data.errors.nomRaiSoc);
                        }else{
                            $('.errorNomRaiSoc').addClass('hidden');

                        }


                        if(data.errors.telephone){
                            $('.errorTel').removeClass('hidden');
                            $('.errorTel').text(data.errors.telephone);
                        }else{
                            $('.errorTel').addClass('hidden');
                        }

                        if(data.errors.mail){
                            $('.errorMail').removeClass('hidden');
                            $('.errorMail').text(data.errors.mail);
                        }else{
                            $('.errorMail').addClass('hidden');
                        }

                        if(data.errors.bp){
                            $('.errorBp').removeClass('hidden');

                            $ ('.errorBp').text(data.errors.bp);
                        }else{
                            $('.errorBp').addClass('hidden');
                        }

                        if(data.errors.ville){
                            $('.errorVille').removeClass('hidden');

                            $('.errorVille').text(data.errors.ville);
                        }else{
                            $('.errorVille').addClass('hidden');
                        }

                        if(data.errors.quartier){
                            $('.errorQuartier').removeClass('hidden');

                            $('.errorQuartier').text(data.errors.ville);
                        }else{
                            $('.errorQuartier').addClass('hidden');
                        }




                        // $('.errorTel').text(data.errors.telephone);
                        // $('.errorMail').text(data.errors.mail);
                        // $('.errorNomRaiSoc').text(data.errors.nomRaiSoc);
                        // $('.errorVille').text(data.errors.ville);

                        // $.each(data.errors, function(key, value){
                        //         //$('#alert1').removeClass('alert-danger');
                        //        // $('#alert1').addClass('alert-danger');
                        //        $('.alertEdit').hide();
                        //        $('.alertEchec').show();
                        //        $('.alertEchec').append('<p>'+value+'</p>');

                        //         // $('.alert-danger').child('p').remove();
                        //       });


                    } else{
                        // $('.error').removeClass('visible');
                        //   $('.errorVille').hidden();
                        //   $('.errorNif').removeClass('visible');
                        //   $('.errorTel').removeClass('visible');
                        //   $('.errorMail').removeClass('visible');
                        //   $('.error').removeClass('visible');
                        //   $('.errorVille').removeClass('visible');
                        $('.error').addClass('hidden');
                        alertify.success('Le client a été modifié avec succès!')
                        $('.alertEchec').hide();

                        listeLo();
                    }
                }
            })

        });

        // function listeLo(){

        //   var table = $('#table1').DataTable({

        //   });
        //   table.clear();

        //  table.draw();
        //  alert(7)

        //       }




        //FUNCTION EDIT POST

        $(document).on('click', '.delete-modal', function(){
            var t = $(this).parents('tr');
            //alert(t);

            var id = $(this).attr('monAtt');
            var idEnt_id = $(this).attr('monAttEnt_Id');
            //alert(id);
            //alert(idEnt_id);
            //RECUPERATION DE LA LIGNE SUE LEQUEL SE TROUVE LE BOUTTOTN SHOW MODAL
            var tds=t.find('td').html();
            var td=t.find('td');
            //  var id = td.eq(0).html();

            // var nomRaiSoc = td.eq(1).html();
            // var nif = td.eq(2).html();
            // var nom = td.eq(3).html();
            // var tel = td.eq(4).html();
            // var email = td.eq(5).html();
            // var bp = td.eq(6).html();
            // var ville = td.eq(7).html();
            // var quartier = td.eq(8).html();

            //AFFECTATION AU VALUE DES CHAMPS  DES FORMULAIRE

            // $('#NIF').val(nif); $('#nomRaiSoc').val(nomRaiSoc); $('#telephone').val(tel); $('#mail').val(email); $("#bp").val(bp); $('#ville').val(ville); $('#quartier').val(quartier); $("#nomDuClient").val(nom );
            $("#hidden").val(id);
            $('#hidenEnt_id').val(idEnt_id);
            //var g=  $('#hidden').val();
            //alert(g);

            $("#footer_action_button").text('Supprimer Client');
            $('#footer_action_button').addClass('fa-trash');
            $('#footer_action_button').removeClass('fa-check ');
            $(".actionBtn").addClass('delete');

            $(".actionBtn").addClass('btn-danger');
            $(".actionBtn").removeClass('btn-success');


            $('.modal-title').html("<B>Supprimer ce  client</B>");

            $('.deletecontent').show();
            $('.form-horizontal').hide();
            $("#myModalModify1").modal('show');

        });




        $('.modal-footer').on('click', '.delete', function(){

            $.ajax({
                type :'POST',
                url :"{{url('deleteClient')}}",
                data:{
                    id:$("#hidden").val(), ent_id:$("#hidenEnt_id").val()
                },
                success:function(data){
                    //   alert('ell');
                    alertify.success('Suppression terminée avec succès');
                    listeLo();
                },
            })
        });


        function listeMouvement() {
            // alert(sessionStorage.getItem("anneeEnCours"))


            var url = LobiAdmin.DEFAULT_URL+'Caisse/mouvement';
            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'json',
                success: function (json) {

                    var table = $('#tabMouv').DataTable({
                        'destroy' : true,
                        'searching' : true,
                    });
                    table.clear();

                    $.each(json.mouvements,function(key,value) {
                        table.row.add([value.DATE,value.NOM_CAISSE,value.LIB_JOURNAL,'<strong>'+value.type+'</strong>','<strong>'+value.MONTANT+'</strong>','<a href="javascript:void(0)" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i></a> <a href="javascript:void(0)" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>']);
                    });
                    table.draw();
                },
                error: function (xhr, status, code) {
                    Lobibox.alert('error', {
                        msg:code,
                        position : 'center'
                    });
                }
            });
        }

    </script>
    @endpush

