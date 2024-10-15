@extends('backend.layouts.app')
@section('title', 'Liste des Coupons')

@push('styles')
<!-- Datatable -->
<link href="{{asset('vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
@endpush

@section('content')

<!--**********************************
    Début du contenu
***********************************-->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">

        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Liste des Coupons</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Accueil</a></li>
                    <li class="breadcrumb-item active"><a href="{{route('coupon.index')}}">Coupons</a></li>
                    <li class="breadcrumb-item active"><a href="{{route('coupon.index')}}">Tous les Coupons</a></li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="row tab-content">
                    <div id="list-view" class="tab-pane fade active show col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Liste de tous les Coupons</h4>
                                <a href="{{route('coupon.create')}}" class="btn btn-primary">+ Ajouter un nouveau</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>{{__('#')}}</th>
                                                <th>{{__('Code du Coupon')}}</th>
                                                <th>{{__('Réduction')}}</th>
                                                <th>{{__('Valable à partir de')}}</th>
                                                <th>{{__('Valable jusqu\'à')}}</th>
                                                <th>{{__('Action')}}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($coupon as $c)
                                            <tr>
                                                <td>{{$c->id}}</td>
                                                <td><strong>{{$c->code}}</strong></td>
                                                <td><strong>{{$c->discount}}</strong></td>
                                                <td>{{$c->valid_from}}</td>
                                                <td>{{$c->valid_until}}</td>
                                                <td>
                                                    <a href="{{route('coupon.edit', $c->id)}}"
                                                        class="btn btn-sm btn-primary" title="Modifier"><i
                                                            class="la la-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"
                                                        title="Supprimer" onclick="$('#form{{$c->id}}').submit()"><i
                                                            class="la la-trash-o"></i></a>
                                                    <form id="form{{$c->id}}"
                                                        action="{{route('coupon.destroy', $c->id)}}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <th colspan="7" class="text-center">Aucun Coupon trouvé</th>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!--**********************************
    Fin du contenu
***********************************-->

@endsection

@push('scripts')
<!-- Datatable -->
<script src="{{asset('vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/plugins-init/datatables.init.js')}}"></script>
@endpush
