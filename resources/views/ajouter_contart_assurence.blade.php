@extends('layoute.barmenu')
 @section('content')
 
 
 
 
 
 
      <!-- SELECT2 EXAMPLE -->
 <form enctype="multipart/form-data" action={{route('contrat_assurence.store')}} method="post">
	  {{ csrf_field()}}
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
                <select class="form-control select2" name='id_voiture' style="width: 100%;">
				@foreach($voitures as $voitures)
					<option value="{{$voitures->id_voiture}}">{{$voitures->id_voiture}}</option>
				@endforeach               
                </select>
              </div>
			  
			  <div class="form-group">
                <label>Date du contrat d assurence :</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right"  name="date_contrat_assurence"id="reservation">
                </div>
                <!-- /.input group -->
              </div>
			  
			  	    <div class="form-group">
                <label>Date debut Assurence :</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" name="date_debut_assurence"id="reservation">
                </div>
                <!-- /.input group -->
              </div>
			  
	
			  <div class="form-group">
                <label>Date fin assurence :</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" name ="date_fin_assurence"id="reservation">
                </div>
                <!-- /.input group -->
              </div>
			  
		




			
			
            
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
			  
			 
			     <div class="form-group">
				 
				 
		             <label for="exampleInputEmail1">Nom  d'assurence</label>
                <select class="form-control select2" name='id_assurence' style="width: 100%;">
     		  @foreach($assurences as $assurence)
					<option value="{{$assurence->id_assurences}}">{{$assurence->id_assurences}}</option>
				  @endforeach
				  
				            
                </select>
              </div>
			   
			  	
			  
			      <div class="form-group">
				  
                  <label for="exampleInputEmail1">Discription du contrat d'assurence </label>
                  <input type="text" class="form-control" id="exampleInputEmail2" name='description_contrat_assurence' placeholder="Enter plus de détails sur le contrat ">
				 
                </div> 
			  
			  

			    
			  
					<div class="form-group ">
                  <label for="exampleInputEmail1">Cout d'assurence  </label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name='cout_assurence' placeholder="Enter Cout">
                </div>
				
				
				
				
				
			  <div class="form-group">
                  <label for="exampleInputFile">Photo contart de Assurence </label>
                  <input type="file" name="img" id="exampleInputFile">

                  <p class="help-block"> telecharge le contart d'Assurence </p>
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
 
 