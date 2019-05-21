<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="public/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="public/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="public/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="public/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="public/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="public/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="public/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="public/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="public/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
@extends('layoute.barmenu')
 @section('content')
 
 
 
 
 
 
      <!-- SELECT2 EXAMPLE -->
	  <form>
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
                <label>Date du contrat de location :</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" id="reservation">
                </div>
                <!-- /.input group -->
              </div>
			  <div class="form-group">
                <label>Date fin location :</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" id="reservation">
                </div>
                <!-- /.input group -->
              </div>
			  
			    <div class="form-group">
                <label>Date debut location :</label>

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
				 
				 
				 
               <label for="exampleInputEmail1">code Fournisseur</label>
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
                  <label for="exampleInputEmail1">Discription du contrat  </label>
                  <input type="Number" class="form-control" id="exampleInputEmail2" name='Numerochasse' placeholder="Enter plus de détails sur le contrat ">
				 
                </div> 
			  
			  

			    
			  
					<div class="form-group ">
                  <label for="exampleInputEmail1">Cout de lalocation du Véhicule </label>
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
 
 