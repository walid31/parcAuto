


 @extends('layoute.barmenu')
 @section('content')
	  <form enctype="multipart/form-data" action={{route('marque.store')}} method="post">
	  {{ csrf_field()}}
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Ajouter marque </h3>

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
                  <label for="exampleInputEmail1">Nom marque</label>
                  <input type="text" class="form-control" id="exampleInputl" name='nom_marque' placeholder="Enter nom">
                </div>
					
				
		
				
					
				
			
		 </div>
				

            <!-- /.col -->
            <div class="col-md-6">
				
			  <div class="form-group">
                  <label for="exampleInputFile">logo marque</label>
                  <input type="file" name="image" accept="image/*" id="exampleInputFile">

                  <p class="help-block"> telecharge logo </p>
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