


 @extends('layoute.barmenu')
 @section('content')
 			<form>
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Ajouter modelle </h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-xs-3">
		
				 <div class="form-group">
                  <label for="exampleInputEmail1">Nom modelle</label>
                  <input type="text" class="form-control" id="exampleInputl" name='nom_marque' placeholder="Enter nom">
                </div>
					
				
					
				
			
		 </div>
				
			
					
				
					
				
			
		 </div>
				
           
			
			
            
            
            <!-- /.col -->
     
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        
<div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
				<button type="reset" class="btn btn-default">Reset</button>
              </div>        
		</form>
      </div>
				
				
 @endsection('content')