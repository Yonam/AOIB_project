@extends('layouts.master')

@push('scripts.header')



@endpush

@section('page.header')
    <div class="col-md-12">
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
                            <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                <thead>
                                <tr role="row" STYLE="color: #990000">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 15px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">N*</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 188px;" aria-label="Browser: activate to sort column ascending">NOM DE L'ENFANT</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 188px;" aria-label="Platform(s): activate to sort column ascending">NOM DU PERE</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 20px;" aria-label="CSS grade: activate to sort column ascending">ACTION</th>
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
                                <tr role="row" class="odd">
                                    <td class="sorting_1">{{$i}}</td>
                                    <td>{{$enf->NOMENF}}  {{$enf->PRENOMENF}}</td>
                                    <td>{{$enf->NOMPERE}}</td>
                                    <td><a href="{{ route('finAjoutEnfant.show',$enf->IDENFANT) }}"><button>Completer</button></a></td>
                                </tr>
                                    @endforeach
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
@stop
