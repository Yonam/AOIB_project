@extends('layouts.master')

@push('scripts.header')
<!-- Theme style -->
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
            <li><a href="#">Gestion des sélections</a></li>
            <li class="active">Consultation de document</li>
        </ol>
    </div>
@stop
@section('page.body')

        <div class="row">
            <div class="col-md-12">
                <div class="box-header">
                <h3 class="box-title">Enfants en cours d'enregistrement</h3>
            </div>
                <!-- /.box-header -->
                <div class="box-body">
                <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">

                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                <thead>
                                <tr role="row" STYLE="color: #990000">
                                   
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 188px;" aria-label="Browser: activate to sort column ascending">NOM DE L'ENFANT</th>

                                   

                                      <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 15px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">NATIONNALITE</th>


                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 188px;" aria-label="Platform(s): activate to sort column ascending">NOM DU PERE</th>
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
                                    <td><a href="{{--route('finAjoutEnfant.show',$enf->IDENFANT)--}}"><button>Completer</button></a></td>
                                </tr>
                                    {{---@endforeach--}}
                                </tbody>
                                <tfoot>
                                <tr></tr>
                                </tfoot>
                            </table>
                                  @foreach($AllEnfants as $data)
        {{$data->NOMENF}}
        {{$data->PRENOMENF}}
        {{$data->NATIONALITE}}
        {{$data->STATUEENF}}

@endforeach

                        </div>
                    </div>
                </div>
            </div>
                <!-- /.box-body -->
            </div>
        </div>
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


           <br/>
           <!-- <div class="row">   -->          
            <div class="form-group">
              <label for="nomEnfant" class="control-label col-sm-2">Nom </label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="nomEnfant" id="nomEnfant" value="" required="" disabled="">
                   <p class="error  errorNomRaiSoc text-center alert alert-danger hidden"></p>
                
              </div>

            </div>
           
            <div class="form-group">
                <label class="control-label col-sm-2">Dossier à complèter </label>
                <div class="col-sm-10">
                   <input type="file" id="acteNaiss" name="acteNaiss">


               </div>
           </div>

                    

           

            


            {{--FORM DELETE POST--}}
            <div class="deletecontent">
             <!--  Etes-vous sûr de vouloir supprimer ce <span class="title"></span>?
                <input type="text" value="" id="hidden" name="id">
            <input type="text" value="" id="hidenEnt_id" name="ent_id">
              <span class="hidden id"></span> -->

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
@stop

@push('scripts.footer')

<!-- DataTables -->

<script src="{{ asset('StyleAdmin/plugins/datatables/jquery.dataTables.js')}}"></script>

<script src="{{ asset('Styldata-lobiideAdmin/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function(){
       $('#example').DataTable({
        "paging" : true, 
        "lengthChange" : false,
        "searching" : true,
        "ordering" : true,  
        "info" : true,
        "autoWidth" : false,
       });
     // alert('cc');

      //ListeEnfantAllForDocument
      listeEnfant();

    });


//ListeEnfant

function listeEnfant(){
//alert('je suis');
    $.ajax({
        url:"{{url('ListeEnfantJson')}}",
        type:'GET',
        dataType : 'json',
        success:function(json){
            var table = $('#example').DataTable({
                'destroy' : true,
                'searching' : true,

            });
            table.clear();

            $.each(json.datas, function(key, value){
                table.row.add([value.NOMENF, value.NATIONALITE, value.NOMPERE, '<a class="btn  btn-warning btn-sm edit-modal" type="" data-toggle="modal" data-target="#myModalModify" monAttIdEnfant='+value.id+'> <i class=" fa fa-edit"> </i></a>'
                    ]);
            })
            table.draw();
          
        }
    })
}

//EditEnfantPourDocument
$(document).on('click', '.edit-modal', function(){
    var t = $(this).parents('tr');

    //recuperation de la valeur de l'id passé dans le button a travers ajax
    var id = $(this).attr('monAttIdEnfant');

    var td = t.find('td');

    //Affection de certains info sur la ligne cournte au champ du modal

    var nomEnfant = td.eq(0).html();
    $('#nomEnfant').val(nomEnfant);

     $("#myModalModify1").modal('show');

     $("#footer_action_button").text('Completer dossier');

    $(".actionBtn").addClass('edit');

     $(".actionBtn").addClass('btn-success');



    
});
</script>



@endpush

