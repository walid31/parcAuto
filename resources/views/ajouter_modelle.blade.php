


 @extends('layoute.barmenu')
 @section('content')
 			<form   enctype="multipart/form-data"  action={{route('modelle.store')}} method="post">
				  {{ csrf_field()}}
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
            <div class="col-xs-4">
		
				 <div class="form-group">
                  <label for="exampleInputEmail1">Nom modelle</label>
                  <input type="text" class="form-control" id="exampleInputl" name='nom_modelle' placeholder="Enter nom">
                </div>
					</div>
					 <div class="col-xs-4">
				<div class="form-group">
               <label for="exampleInputEmail1">Categorie</label>
                <select class="form-control select2" name='id_categorie' style="width: 100%;">
                  <!-- doka rana b3atna les categories l hadi l view via le controller-->
				  @foreach($categories as $categorie)
					<option value="{{$categorie->id_categorie}}">{{$categorie->name_categorie}}</option>
				  @endforeach
                </select>
              </div>
			  </div>
			   <div class="col-xs-4">
			  <div class="form-group">
               <label for="exampleInputEmail1"> Marque</label>
                <select class="form-control select2" name='id_marque' style="width: 100%;">
                 @foreach($marques as $marque)
					<option value="{{$marque->id_marque}}">{{$marque->name_marque}}</option>
				  @endforeach
                </select>
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