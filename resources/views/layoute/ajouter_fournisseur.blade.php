


 @extends('layoute.barmenu')
 @section('content')
 				  <form>
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Ajouter Fournisseur </h3>

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
                  <label for="exampleInputEmail1">Nom fournisseur</label>
                  <input type="text" class="form-control" id="exampleInputl" name='nom_fournisseur' placeholder="Enter nom">
                </div>
					
				
					
						<div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon">  
				  <i class="fa fa-envelope"></i> </div>
                  <input type="text" class="form-control" id="exampleInputEmail1" name='gmail_fournisseur' placeholder="Enter email">
                </div>

			
		 </div>
				
           
			
			
            
            </div>
            <!-- /.col -->
            <div class="col-md-6">
			
				 <div class="form-group">
                  <label for="exampleInputEmail1">Adress fournisseur</label>
                  <input type="text" class="form-control" id="exampleInputl" name='nom_fournisseur' placeholder="Enter Adress">
                </div>
			
              <div class="form-group">
			  
			 
				<div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="">
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
                <button type="submit" class="btn btn-primary">Submit</button>
				<button type="reset" class="btn btn-default">Reset</button>
              </div>        
		</form>
      </div>
				
				
				
				
				
				
			
 @endsection('content')