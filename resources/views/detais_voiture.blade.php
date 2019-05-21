@extends('layoute.barmenu')
@section('content')
<div class="col-md-4">
<div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="{{$voitures->photo_voiture}}" alt="User profile picture">

              <h3 class="profile-username text-center"> Voiture {{$voitures->id_voiture}}</h3>


              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Matricule</b> <a class="pull-right">{{$voitures->matricule}}</a>
                </li>
                <li class="list-group-item">
                  <b>Numero_chasse</b> <a class="pull-right">{{$voitures->numero_chasse}}</a>
                </li>
                <li class="list-group-item">
                  <b>Modelle</b> <a class="pull-right">{{$voitures->id_modelle}}</a>
                </li>
				<li class="list-group-item">
                  <b>type  carburent</b> <a class="pull-right">{{$voitures->id_carburent}}</a>
                </li>
				<li class="list-group-item">
                  <b>Nbr place</b> <a class="pull-right">{{$voitures->nbr_place}}</a>
                </li>
				<li class="list-group-item">
                  <b>Nbr porte</b> <a class="pull-right">{{$voitures->nbr_place}}</a>
                </li>
				<li class="list-group-item">
                  <b>Nbr cheveaux</b> <a class="pull-right">{{$voitures->cheveaux}}</a>
                </li>
				<li class="list-group-item">
                  <b>Type vitesse</b> <a class="pull-right"><?php if($voitures->type_vitesset==1) echo "Automatique"; else echo "Manuel";?></a>
                </li>
				<li class="list-group-item">
                  <b>Contrat</b> <a class="pull-right"><?php if($voitures->type_contrat==1) echo "En Location"; else echo "A NOUS";?> </a>
                </li>
				
				
              </ul>

            </div>
            <!-- /.box-body -->
          </div>
		  </div>
		<div class="col-md-8">  
		  <div class="post">
                  <div class="user-block">
                    
                    <span class="description"> carte grise </span>
                  </div>
                  <!-- /.user-block -->
                  <div class="row margin-bottom">
                    <div class="col-sm-6">
                      <img class="img-responsive" src="{{$voitures->photo_voiture}}" alt="Photo">
					  <img class="img-responsive" src="{{$voitures->photo_voiture}}" alt="Photo">
                    </div>
                    <!-- /.col -->
                   
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->


                
                </div>
				</div>
@endsection('content')