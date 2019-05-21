@extends('layoute.barmenu')
@section('content')
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Table Categorie</h3>

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
                    
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- $fournisseurs hia li b3athnaha men l controlleur -->
                    @foreach($categories as $categorie)
                        <tr>
                            <td>{{$categorie->name_categorie}}</td>
                         
                       
                            <td>
							<a class="btn btn-info" href=""><i class="fa fa-edit"></i></a>
							<a class="btn btn-danger" href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->

@endsection