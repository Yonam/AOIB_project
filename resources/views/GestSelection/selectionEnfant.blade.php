
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
                <!-- /.box-header -->
                <div class="box-body">



                    <div class="row">

                        <div class="col-md-12">
                            <div class="">
                                <div class="box-header" class="col-md-12">
                                    <h3 class="box-title" style="color: #990000;text-align: center">{{"CRITERES DE SELECTION"}}</h3>
                                </div>
                                <div class="box-body">

                                    <form  id="listeFactureForm">
                                        <meta name="csrf-token" content="{{csrf_token() }}"/>

                                        <label>Nombre:</label>
                                        <input type="text" name="idClientHidden" id="idClientHidden" value="" >

                                        <label>Age minimal:</label>
                                        <input type="text" name="idClientHidden" id="idClientHidden" value="" >

                                        <label>Age maximal:</label>
                                        <input type="text" name="idClientHidden" id="idClientHidden" value="" >
                                            <!-- /.input group -->
                                        <button class="btn  btn-primary fa fa-check" > Rechercher</button>
                                    </form>



                                </div>
                                <!-- /box box-body -->
                            </div>
                            <!-- /box box-primary pour faire recher-->




                        </div>
                        <!-- /col-md-2 -->
                    </div>
                    <!-- /col-row -->

                    <br>

                    <div class="table-responsive">
                        <table id="table1New" class="table table-bordered table-striped table-hover graceClassDeleteIdTemporairema newIdOfTable1">
                            <thead>
                            <tr style="color: #9e1a1a">
                                <th style="text-align:center">N* </th>
                                <th style="text-align:center">NOM </th>
                                <th style="text-align:center">PRENOM</th>
                                <th style="text-align:center">DATE NAISSANCE</th>
                                <th style="text-align:center">NOM TUTEUR</th>
                                <th style="text-align:center">CONTACT TUTEUR</th>
                                <th style="text-align:center">LIEU DE NAISSANCE</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i=0;
                            ?>
                            @foreach($enfant as $enf)
                                <?php
                                $i=$i+1;
                                ?>
                                <tr >
                                    <td>{{$i}}</td>
                                    <td>{{$enf->NOMENF}}</td>
                                    <td>{{$enf->PRENOMENF}}</td>
                                    <td>{{$enf->DATENAISS}}</td>
                                    <td>{{$enf->NOMTUTEUR}}</td>
                                    <td>{{$enf->CONTACTTUTEUR}}</td>
                                    <td>{{$enf->LIEUNAISS}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <br>  <br>  <br>  <br>
                </div>
                <!--/box-body -->
            </div>

        </div>
    </div>


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

