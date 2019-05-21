
@extends('layoute.barmenu')
 @section('content')
 
 
 
 
 
 
      <!-- SELECT2 EXAMPLE -->
	  <form enctype="multipart/form-data" action={{route('contrat_location.store')}} method="post">
	  	  {{ csrf_field()}}
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Ajouter contrat de location </h3>

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
                <select class="form-control select2" name='id_voiture' style="width: 100%;">
         	
  
                </select>
              </div>
			  
			  <div class="form-group">
                <label>Date du contrat de location :</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" name="date_contrat_location" class="form-control pull-right" id="reservation">
                </div>
                <!-- /.input group -->
              </div>
			  
			  	  
			    <div class="form-group">
                <label>Date debut location :</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" name="date_debut_location" class="form-control pull-right" id="reservation">
                </div>
                <!-- /.input group -->
              </div>
			  
			  
			  <div class="form-group">
                <label>Date fin location :</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date"name="date_fin_location" class="form-control pull-right" id="reservation">
                </div>
                <!-- /.input group -->
              </div>
		




			
			
            
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
			  
			 
			     <div class="form-group">
				 
				 
				 
            <label for="exampleInputEmail1">fournisseur</label>
                <select class="form-control select2" name='id_fournisseur' style="width: 100%;">
			  @foreach($fournisseurs as $fournisseurs)
					<option value="{{$fournisseurs->id_fournisseur}}">{{$fournisseurs->id_fournisseur}}</option>
				  @endforeach              
                </select>
              </div>
			  
			      <div class="form-group">
                  <label for="exampleInputEmail1">Discription du contrat  </label>
                  <input type="text" class="form-control" id="exampleInputEmail2" name='description_contrat_location' placeholder="Enter plus de détails sur le contrat ">
				 
                </div> 
			  
			  

			    
			  
					<div class="form-group ">
                  <label for="exampleInputEmail1">Cout de la location du Véhicule </label>
                  <input type="Number" class="form-control" id="exampleInputEmail1" 
				  name='cout_location' placeholder="Enter Cout">
                </div>
				
				
				
				
				
			  <div class="form-group">
                  <label for="exampleInputFile">Photo contart de location </label>
                  <input type="file" name='image'id="exampleInputFile">

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
 
 