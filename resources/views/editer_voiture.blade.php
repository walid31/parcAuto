
@extends('layoute.barmenu')
@section('content')
    <form action="{{route('update_voiture',['id'=>$voitures->id_voiture])}}" method="post">
        {{ csrf_field()}}

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
                  <input type="Number" class="form-control" id="exampleInputEmail1"  value="{{$voitures->matricule}}" name='matricule' placeholder="Enter Matricule">
                </div>
				 <div class="form-group">
                  <label for="exampleInputEmail1">Code</label>
                  <input type="Number" class="form-control" id="exampleInputEmail2" name='code_vehicule' value="{{$voitures->id_voiture}}" placeholder="Enter code">
                </div>
					 <div class="form-group">
                  <label for="exampleInputEmail1">Numero chasse </label>
                  <input type="Number" class="form-control" id="exampleInputEmail2" name='numero_chasse' value="{{$voitures->numero_chasse}}" placeholder="Enter Numero chasse">
				 
                </div>
              <div class="form-group">
                <label>Modellel</label>
                <select class="form-control select2" name="id_modelle"  style="width: 100%;">
         @foreach($modelles as $modelle)
					<option value="{{$modelle->id_modelle}}">{{$modelle->name_modelle}}</option>
				  @endforeach
                </select>
              </div>
			   <div class="form-group">
                <label>Carburent</label>
  <select class="form-control select2" multiple="multiple"  name="carburent"data-placeholder="Select a State"
                        style="width: 100%;">
                      @foreach($carburents as $carburent)
					<option value="{{$carburent->id_carburent}}">{{$carburent->name_carburent}}</option>
				  @endforeach
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
                <select class="form-control select2" name="type_contrat" style="width: 100%;">
                
                  <option value="1">En location </option>
               
                  <option value="2"> A Nous </option>
                 
                </select>
              </div>
			     <div class="form-group">
                <label>Type vitesse</label>
                <select class="form-control select2" name  ="type_vitesse" style="width: 100%;">
               
                  <option value="1">Automatique</option>
                  <option value="2">Manuel</option>
         
                </select>
              </div>
			  	<div class="form-group col-sm-4">
                  <label for="exampleInputEmail1"> NBR Cheveaux </label>
                  <input type="number" class="form-control" id="exampleInputEmail1" name='nbr_cheveaux'  value="{{$voitures->nbr_cheveaux}}"placeholder="Enter NBR cheuveux">
                </div>
			  
			  	<div class="form-group col-sm-3">
                  <label for="exampleInputEmail1">NBR Place</label>
                  <input type="Number" class="form-control" id="exampleInputEmail1" name='nbr_place' value="{{$voitures->nbr_place}}"placeholder="Enter NBR Place">
                </div>
					<div class="form-group col-sm-3">
                  <label for="exampleInputEmail1">NBR Porte</label>
                  <input type="Number" class="form-control" id="exampleInputEmail1" name='nbr_porte'  value="{{$voitures->nbr_porte}}"placeholder="Enter NBR Porte">
                </div>
					<div class="form-group ">
                  <label for="exampleInputEmail1">Cout du Véhicule </label>
                  <input type="Number" class="form-control" id="exampleInputEmail1" name='cout'value="{{$voitures->valeur}}" placeholder="Enter Cout">
                </div>
				
				
				
				
				
			  <div class="form-group">
                  <label for="exampleInputFile">Photo carte grise </label>
                  <input type="file" name="image_grise" accept="image/*" id="exampleInputFile">

                  <p class="help-block"> telecharge la carte Grise</p>
                </div>
				<div class="form-group">
                  <label for="exampleInputFile">Photo Voiture </label>
                  <input type="file" name="image_voiture" accept="image/*" id="exampleInputFile">

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

