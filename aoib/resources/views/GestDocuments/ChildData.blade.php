@extends('layouts.master')

@push('scripts.header')
<link rel="stylesheet" href="{{asset('StyleAdmin/plugins/datatables/dataTables.bootstrap.css')}}">

<link rel="stylesheet" href="{{asset('StyleAdmin/dist/css/skins/_all-skins.min.css')}}">

@endpush

@section('page.header')
<div class="col-md-12">
  <h1>Gestion Consulation Document <small>Enfant</small> </h1>
</div>
@endsection


@section('detail.chemin')
<div class="col-md-12">
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
    <li><a href="#">Gestion Documents</a></li>
    <li class="active">Données des enfants</li>
  </ol>
</div>
@stop


@section('page.body')

<div class="row">
  <div class="col-md-12">
    <div class="box-header">
      <h3 class="box-title">Données des enfants</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">

     <div class="form-group">
      <meta name="csrf-token" content="{{csrf_token() }}"/>
      <label>Choisir la catégorie d'enfant </label>

      <select class="form-control select2"  style="width: 100%;" id="selectCatEnfant" name="nomRaisoc">
       @foreach($childData as $data)
       @if($data->STATUEENF == 2)
       <option value="{{$data->STATUEENF}}"">
       {{"Enfant sélectionné"}}</option>
       @elseif($data->STATUEENF == 3)
       <option value="{{$data->STATUEENF}}">
       {{"Enfant parrainé"}}</option>

       @endif


       @endforeach
     </select>
   </div>
   <input type="text" name="idClientHidden" id="idClientHidden" value="" hidden="">


   <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">

    <div class="row">
      <div class="col-sm-12">
        <table id="table1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
          <thead>
            <tr role="row" STYLE="color: #990000">

             <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 188px;" aria-label="Browser: activate to sort column ascending">MATRICULE</th>

             <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 188px;" aria-label="Browser: activate to sort column ascending">NOM DE L'ENFANT</th>

             <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 15px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">DATE DE NAISSANCE</th>



             <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 15px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">NATIONNALITE</th>




             <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 98px;" aria-label="Platform(s): activate to sort column ascending">NOM DU PERE</th>

             <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 15px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">NOM DE LA MERE</th>

             <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 15px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">NOM DU TUTEUR</th>

             <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 20px;" aria-label="CSS grade: activate to sort column ascending">DOCUMENT</th>


             <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 20px;" aria-label="CSS grade: activate to sort column ascending">ACTION</th>
           </tr>
         </thead>
         <tbody>
          <?php
          $i=0;
          ?>

          <tr role="row" class="odd">
            <td class="sorting_1">{{$i}}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><a href="{{--route('finAjoutEnfant.show',$enf->IDENFANT)--}}"><i class="fa fa-eye btn btn-danger"> </i></a></td>
            <td><i class="fa fa-eye btn btn-danger"> </i></td>
          </tr>
          {{---@endforeach--}}
        </tbody>
        <tfoot>
          <tr></tr>
        </tfoot>
      </table>

    </div>
  </div>
</div>
</div>
<!-- /.box-body -->
</div>
</div>
<!--modal fade MODIFIER & SUPPRIMER-->

<!-- modal fade -->

   <!-- Modal  details-->
    <div class="modal fade" id="myModalDetail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog  modal-lg"  >
        <form method="post" action="" name="DetailReglement"> 
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">Coordonnées du fournisseur</h4>

            </div>
            <!-- /ModalHeader -->
                      <!-- <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                      -->
                      <div class="modal-body">
                        <table width="100%" class="table table-bordered table-hover dataTable"  role="grid" id="example2">
                          <thead> 
                            <tr>  
                              <th>Lieu de naissance</th>
                              <th>Type Formation</th>
                              <th>Date Décès du Père</th>
                              <th>Cause Décès du Père</th>
                              <th>Lieu Décès du Père</th>
                              <th>Date Décès du Mère</th>
                              <th>Cause Décès du Mère</th>
                              <th>Lieu Décès du Mère</th>
                            

                            </tr>

                          </thead>
                          <!-- tableHead -->
                          <tbody> 
                            <tr>
                              <td id="LieuNaissAffich"></td>
                               <td id="TypeFormAffich"></td>
                              <td id="DateDecesPAffich"></td>
                              <td id="CauseDecesPAffich"></td>
                              <td id="lieuDecesPAffich"></td>
                             
                              <td id="DateDecesMAffich"></td>
                              <td id="CauseDecesMAffich"></td>
                              <td id="lieuDecesMAffich"></td>
                         
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


@stop

@push('scripts.footer')
<!-- DataTables -->

<script src="{{ asset('StyleAdmin/plugins/datatables/jquery.dataTables.js')}}"></script>
<script  type="text/javascript"  src="{{asset('js/test.js')}}"></script> 
<!-- <script type="text/javascript" src='C12MAJ.JS'></script> -->
<!-- <script src="{{URL::asset('js/test.js')}}">  </script> -->
<!-- <script src="{{asset('resources\views\partials/test.js')}}"></script> 
--><script type="text/javascript">
  $(document).ready(function(){
    listLo();
    modalDetail();
   //changeEtatTableSelect();
   // cece();
  // listeLo();
  //listLo();
});
  $('#selectCatEnfant').change(function(){
    var enfantVal = $(this).val();
  //  alert(enfantVal);

    $.ajaxSetup({
      headers:{
        'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
      }
    });

    $.ajax({
      url:"{{url('chercheInfoEnfantById')}}/"+enfantVal,
      type:"GET",
      dataType:'json',
      data:{
        idEnfant:enfantVal
      },
      success:function(response){
        //$x = response.datas.
       // alert('pepe1');
      //var table = $("#table1").DataTable();
      var table = $('#table1').DataTable({
        'destroy' : true,
        'searching' : true,
        'paging': true,
             //    "columnDefs": [
             //   { "targets": [ 0 ], 
             //    "visible": false
             // },

             
             // ]
           });

      table.clear();

      $.each(response.datas, function(key, value){
        table.row.add([value.MATRICULE, value.NOMENF, value.DATENAISS, value.NATIONALITE, value.NOMPERE, value.NOMMERE, value.NOMTUTEUR,  '<a class="btn btn-primary show-modal1" type="" data-toggle="modal" data-target="#myModalModify1" monLieuNBtn='+value.LIEUNAISS+'><i class="fa fa-eye"> </i></a>' ,  '<a class="btn  btn-warning btn-sm show-modal" type="" data-toggle="modal" data-target="#myModalDetail" monAttIdEnfant='+value.id+' monLieuNaissBtn='+value.LIEUNAISS+' monTypeFormBtn='+value.TYPEFORMATION+' monDateDecPereBtn='+value.DATEDECESPERE+' monCauseDecBtn='+value.CAUSEDECESPERE+' monLieuDecPBtn='+value.LIEUDECESPERE+' monDateDecMereBtn='+value.  DATEDECESMERE+' monCauseDecMereBtn='+value.CAUSEDECESMERE+' monLieuDecMBtn='+value.LIEUDECESMERE+'> <i class=" fa fa-edit"> </i></a>'
          ]);
      });
      table.draw();



    }

  });

  });

// $(document).on('click', '.show-modal', function(){
//   var lNE = $(this).attr('monLieunaissbtn');
//   var a = $('#LieuNaissAffich').html(lNE);
//     var t = $(this).parents('tr');
//     alert(a);

//     //recuperation de la valeur de l'id passé dans le button a travers ajax
//     // var id = $(this).attr('monAttIdEnfant');

//     // var td = t.find('td');

//     //Affection de certains info sur la ligne cournte au champ du modal

//     var nomEnfant = td.eq(0).html();
//     $('#nomEnfant').val(nomEnfant);

//      $("#myModalDetail").modal('show');

//      $("#footer_action_button").text('Completer dossier');

//     $(".actionBtn").addClass('edit');

//      $(".actionBtn").addClass('btn-success');

//     // $('.edit-modal').hide();



    
// });



//EditEnfantPourDocument
// $(document).on('click', '.edit-modal', function(){
//     var t = $(this).parents('tr');

//     //recuperation de la valeur de l'id passé dans le button a travers ajax
//     var id = $(this).attr('monAttIdEnfant');

//     var td = t.find('td');

//     //Affection de certains info sur la ligne cournte au champ du modal

//     var nomEnfant = td.eq(0).html();
//     $('#nomEnfant').val(nomEnfant);

//      $("#myModalModify1").modal('show');

//      $("#footer_action_button").text('Completer dossier');

//     $(".actionBtn").addClass('edit');

//      $(".actionBtn").addClass('btn-success');



    
// });



</script>
@endpush

