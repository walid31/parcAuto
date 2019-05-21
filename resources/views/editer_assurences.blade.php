
@extends('layoute.barmenu')
@section('content')
    <form action="{{route('update_assurence',['id'=>$assurence->id_assurences])}}" method="post">
        {{ csrf_field()}}

        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Ajouter assurence </h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Nom assurence</label>
                            <input type="text" class="form-control" id="exampleInputl" name='nom_assurence' value="{{$assurence->name_assurence}}" placeholder="Enter nom">
                        </div>



                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-envelope"></i> </div>
                                <input type="text" class="form-control" id="exampleInputEmail1" name='gmail_assurence' value="{{$assurence->email_assurence}}" placeholder="Enter email">
                            </div>


                        </div>





                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Adress assurence</label>
                            <input type="text" class="form-control" value="{{$assurence->add_assurence}}" id="exampleInputl" name='adress_assurence' placeholder="Enter Adress">
                        </div>

                        <div class="form-group">


                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <input name="tele_assurence" type="text" value="{{$assurence->tel_assurence}}" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="">
                            </div>
                        </div>




                        <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Modifier</button>
                <button type="reset" class="btn btn-default">Reset</button>
            </div>
    </form>
    </div>







@endsection('content')
