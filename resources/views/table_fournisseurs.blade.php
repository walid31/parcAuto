@extends('layoute.barmenu')
@section('content')
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Table Fournisseurs </h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table-responsive index-table table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Telephone</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- $fournisseurs hia li b3athnaha men l controlleur -->
                    @foreach($fournisseurs as $fournisseur)
                        <tr>
                            <td>{{$fournisseur->name_fournisseur}}</td>
                            <td>{{$fournisseur->email_fournisseur}}</td>
                            <td>{{$fournisseur->add_fournisseur}}</td>
                            <td>{{$fournisseur->tel_fournisseur}}</td>
                            <td>
							 <a class="btn btn-info" href="{{route('editer_fournisseurs',['id'=>$fournisseur->id_fournisseur])}}"><i class="fa fa-edit"></i></a>
							<a class="btn btn-danger" href="{{route('supprimer_fournisseurs',['id'=>$fournisseur->id_fournisseur])}}"><i class="fa fa-trash"></i></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->

@endsection