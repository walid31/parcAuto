


 @extends('layoute.barmenu')
 @section('content')
 

     <section class="content">

      <!-- SELECT2 EXAMPLE -->
	  <form>
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Ajouter Véhicule</h3>

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
                  <label for="exampleInputEmail1">Matricule</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name='mattricule' placeholder="Enter email">
                </div>
				 <div class="form-group">
                  <label for="exampleInputEmail1">Code</label>
                  <input type="text" class="form-control" id="exampleInputEmail2" name='code_vehicule' placeholder="Enter email">
                </div>
					 <div class="form-group">
                  <label for="exampleInputEmail1">Numero chasse </label>
                  <input type="Number" class="form-control" id="exampleInputEmail2" name='Numerochasse' placeholder="Enter email">
				 
                </div>
              <div class="form-group">
                <label>Modellel</label>
                <select class="form-control select2" name="modelle"style="width: 100%;">
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
                <label>Carburent</label>
                <select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
                        style="width: 100%;">
                  <option>Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>
              <!-- /.form-group -->
             
              <!-- /.form-group -->
             
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
                <label>Type contrat</label>
                <select class="form-control select2" name  ="type_contart" style="width: 100%;">
                
                  <option>En location </option>
               
                  <option> Au parc </option>
                 
                </select>
              </div>
			     <div class="form-group">
                <label>Type vitesse</label>
                <select class="form-control select2" name  ="type_contart" style="width: 100%;">
                  <option selected="selected">Alabama</option>
                  <option>Alaska</option>
                  <option disabled="disabled">California (disabled)</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>
			  	<div class="form-group col-sm-4">
                  <label for="exampleInputEmail1"> NBR Cheveaux </label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name='mattricule' placeholder="Enter NBR cheuveux">
                </div>
			  
			  	<div class="form-group col-sm-3">
                  <label for="exampleInputEmail1">NBR Place</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name='mattricule' placeholder="Enter NBR Place">
                </div>
					<div class="form-group col-sm-3">
                  <label for="exampleInputEmail1">NBR Porte</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name='matricule' placeholder="Enter NBR Porte">
                </div>
					<div class="form-group ">
                  <label for="exampleInputEmail1">Cout du Véhicule </label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name='matricule' placeholder="Enter Cout">
                </div>
				
				
				
				
				
			  <div class="form-group">
                  <label for="exampleInputFile">Photo carte grise </label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block"> telecharge la carte Grise</p>
                </div>
				<div class="form-group">
                  <label for="exampleInputFile">Photo Voiture </label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block"> telecharge la photo de la voiture</p>
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