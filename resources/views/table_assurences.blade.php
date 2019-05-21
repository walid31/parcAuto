@extends('layoute.barmenu')
@section('content')
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Table assurences </h3>

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
                    <!-- $assurences hia li b3athnaha men l controlleur -->
                    @foreach($assurences as $assurence)
                        <tr>
                            <td>{{$assurence->name_assurence}}</td>
                            <td>{{$assurence->email_assurence}}</td>
                            <td>{{$assurence->add_assurence}}</td>
                            <td>{{$assurence->tel_assurence}}</td>
                            <td>
							 <a class="btn btn-info" href="{{route('editer_assurences',['id'=>$assurence->id_assurences])}}"><i class="fa fa-edit"></i></a>
							<a class="btn btn-danger" href="{{route('supprimer_assurences',['id'=>$assurence->id_assurences])}}"><i class="fa fa-trash"></i></a></td>
                        </tr>
                    @endforeach
                    </tbody>id_assurences
                </table>
            </div>
            <!-- /.box-body -->

@endsection