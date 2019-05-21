@extends('layoute.barmenu')
 @section('content')
 
 
 
 
 
 
      <!-- SELECT2 EXAMPLE -->
	  <form>
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Ajouter contrat d' Assurence </h3>

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
               <label for="exampleInputEmail1">code Véhicule</label>
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
			  
			  <div class="form-group">
                <label>Date du contrat d assurence :</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" id="reservation">
                </div>
                <!-- /.input group -->
              </div>
			  <div class="form-group">
                <label>Date fin assurence :</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" id="reservation">
                </div>
                <!-- /.input group -->
              </div>
			  
			    <div class="form-group">
                <label>Date debut Assurence :</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" id="reservation">
                </div>
                <!-- /.input group -->
              </div>




			
			
            
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
			  
			 
			     <div class="form-group">
				 
				 
				 
               <label for="exampleInputEmail1">Nom  d'assurence</label>
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
			      <div class="form-group">
                  <label for="exampleInputEmail1"> Nom de l'agence d'assurence </label>
                  <input type="text" class="form-control" id="exampleInputEmail2" name='Numerochasse' placeholder="Enter plus de détails sur le contrat ">
				 
                </div> 
			  
			      <div class="form-group">
                  <label for="exampleInputEmail1">Discription du contrat d'assurence </label>
                  <input type="text" class="form-control" id="exampleInputEmail2" name='Numerochasse' placeholder="Enter plus de détails sur le contrat ">
				 
                </div> 
			  
			  

			    
			  
					<div class="form-group ">
                  <label for="exampleInputEmail1">Cout d'assurence  </label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name='matricule' placeholder="Enter Cout">
                </div>
				
				
				
				
				
			  <div class="form-group">
                  <label for="exampleInputFile">Photo contart de location </label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block"> telecharge le contart de location </p>
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
 
 