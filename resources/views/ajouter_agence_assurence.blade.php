


 @extends('layoute.barmenu')
 @section('content')
 			<form>
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Ajouter Agence d'assurence </h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-xs-6">
		
				 <div class="form-group">
                  <label for="exampleInputEmail1">Nom agence</label>
                  <input type="text" class="form-control" id="exampleInputl" name='nom_marque' placeholder="Enter nom">
                </div>
					</div>
					 <div class="col-xs-6">
				<div class="form-group">
               <label for="exampleInputEmail1"> Nom d'assurence </label>
                <select class="form-control select2" name='code_Véhicule' style="width: 100%;">
                  <option selected="selected">Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>
			  </div>
			   <div class="col-xs-4">
			  
					
						<div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon">  
				  <i class="fa fa-envelope"></i> </div>
                  <input type="text" class="form-control" id="exampleInputEmail1" name='gmail_agence_assurence' placeholder="Enter email">
                </div></div></div>
					   <div class="col-xs-4">
				 <div class="form-group">
                  <label for="exampleInputEmail1">Adress agence_assurence</label>
                  <input type="text" class="form-control" id="exampleInputl" name='address_agence_assurence' placeholder="Enter Adress">
                </div></div>
				 <div class="form-group">
			  
			 	   <div class="col-xs-4">
				<div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="">
                </div> 
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