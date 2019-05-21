@extends('layoute.barmenu')
@section('content')
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Table Voitures</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <button type="button" class="btn btn-primary" style=" display:block; margin:auto;" data-toggle="modal" data-target="#exampleModal">
                Rechercher
              </button>
              
              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Recherhcer</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    
                          
                    <div class="modal-body">
                            <form class="form-inline" action=" {{route('voiture.search')}}" method="get">
                                {{ csrf_field() }}
                                    <input class="form-control mr-sm-2" value="search" name="search" style=" display:block; margin:auto;" type="search" placeholder="Search" aria-label="Search">
                                    
                                    <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <div class="input-group-text">
                                                <input type="radio" name="check" value="id_modelle" aria-label="Checkbox for following text input">
                                                <label for="check_modelle">Modelle</label>
                                              </div>
                                            </div>
                                    </div>
                                    <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <div class="input-group-text">
                                                <input type="radio" name="check" value="matricule" aria-label="Checkbox for following text input">
                                                <label for="check_modelle">Matricule</label>
                                              </div>
                                            </div>
                                    </div>
                                    <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <div class="input-group-text">
                                                <input type="radio" name="check" value="id_voiture" aria-label="Checkbox for following text input">
                                                <label for="check_modelle">Code voiture</label>
                                              </div>
                                            </div>
                                    </div>              
                       </div>
                     <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                     </div>
                    </form>
                    </div>
                </div>
              </div>

            <div class="box-body">
                <table class="table-responsive index-table table table-bordered table-striped">
                    <thead>
                    <tr>
					   <th>code_voiture</th>
                     <th>Matricule</th>
                     
                  
					
					 <th>modelle</th>
					<th>type de contrat </th>
				    <th>type de vitesse </th>
					   	   
						  
                        <th>Option</th>
                       
                    </tr>
                    </thead>
                    <tbody>
                    <!-- $assurences hia li b3athnaha men l controlleur -->
                 
					  @foreach($voitures as $voiture)
					      <tr>   <td>{{$voiture->id_voiture}}</td>
                         <td>{{$voiture->matricule}}</td>
						 		<td>{{$voiture->id_modelle}} </td>
										<td><?php if($voiture->type_contrat==1) echo "En Location"; else echo "A NOUS";?> </td>
									    <td><?php if($voiture->type_vitesset==1) echo "Automatique"; else echo "Manuel";?> </td>
										<td ><a class="btn btn-info" href="{{route('editer_voitures',['id'=>$voiture->id_voiture])}}"><i class="fa fa-edit"></i></a>
							<a class="btn btn-danger" href="{{route('supprimer_voiture',['id'=>$voiture->id_voiture])}}"><i class="fa fa-trash"></i></a>
							<a class="btn btn-danger" href="{{route('detais_voiture',['id'=>$voiture->id_voiture])}}"><i class="fa fa-trash"></i></a></td>
							
							</td>
							</tr>
</td>
					    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->

@endsection