@extends('layoute.barmenu')
@section('content')
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Table Modelle</h3>

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
                        <th>Nom_modelle</th>
                     <th>Nom_marque</th>
                        <th>nom_categorie</th>
                        <th>Option</th>
                       
                    </tr>
                    </thead>
                    <tbody>
                    <!-- $assurences hia li b3athnaha men l controlleur -->
                    @foreach($modelles as $modelle)
                        <tr>
                            <td>{{$modelle->name_modelle}}</td>
                         <td>{{$modelle->id_marque}}</td>
							
							
							<td>{{$modelle->id_categorie}} </td>
                            <td>
							 <a class="btn btn-info" href="{{route('editer_modelles',['id'=>$modelle->id_modelle])}}"><i class="fa fa-edit"></i></a>
							<a class="btn btn-danger" href="{{route('supprimer_modelle',['id'=>$modelle->id_modelle])}}"><i class="fa fa-trash"></i></a></td>
                    

					</tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->

@endsection