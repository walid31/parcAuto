
 @extends('layoute.barmenu')
 @section('content')
 
     <div class="custom-container">
        <div class="box" style="width:100%;margin: 40px auto">
            <div class="box-header">
                <h3 class="box-title" style="float: right; margin: 15px">قائمة القوانين و الأخبار</h3>
                <div class="search form-group" style="width: 30%;float: left;">
                    <form action="'" method="post">
                        {{csrf_field()}}

                        <input type="text" name="val" value="{{(isset($val)?$val:'')}}" style="direction:rtl;width: 80%;float: right" class="form-control">
                        <button type="submit" style="width: 20%;float: right" class="form-control col-sm-4"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
            <div class="box-body">
                <table dir="rtl" class="table-responsive index-table table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>الاسم</th>
                        <th>المحتوى</th>
                        <th width="10%"></th>
                    </tr>
                    </thead>
                    <tbody>
                  
                        <tr>
                            <td>{{$stm->name}}</td>
                            <td>{{$stm->content}}</td>
                            <td>

                                <a href="#" onclick="confirmeMsg({{$stm->id}});" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                   
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>الاسم</th>
                        <th>المحتوى</th>
                        <th width="10%"></th>
                    </tr>
                    </tfoot>
                </table>
                <div class="text-center">
                    <!-- To preserve post's request variables -->
                    {{ $stms->appends(request()->except('page'))->links() }}
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
        <!-- To confirm delete product -->
        <div class="modal fade" id="myModal" role="dialog">
            <div dir="rtl" class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button style="float: left" type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">تأكيد</h4>
                    </div>
                    <div class="modal-body">
                        <p>هل انت متأكد من حذف هذا التنبيه  ؟</p>
                    </div>
                    <div class="modal-footer" style="text-align: left !important;">
                        <button type="button" class="btn btn-default" data-dismiss="modal">اغلاق</button>
                        <a href="" id="confirm-btn" class="btn btn-danger">متأكد</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('propre-script')
    <script>
        function confirmeMsg(id) {
            $('#confirm-btn').attr('href','delete/'+id);
            $("#myModal").modal();
        }
    </script>
 @endsection;