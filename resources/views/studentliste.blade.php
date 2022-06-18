@extends('dashboard')
@section('content')
    <div>
    <div class="d-flex justify-content-end mt-2 ajout">
    <a href="#" class="btn btn-primary">ajouter un utilisateur</a>
  </div>
    <table class="table table-bordered border-dark table-hover ">
  <thead class="bg-success">
    <tr>
      <th scope="col" class="matricule">Matricule</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Cycle</th>
      <th scope="col">Niveau d'etude</th>
      <th scope="col">Année academique</th>
      <th scope="col">Email</th>
      <th scope="col" class="matricule">Action</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1745623</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>1er</td>
      <td>premier année</td>
      <td >2021-2022</td>
      <td > bibi@gmail.com</td>
      <td ><a class="btn btn-info" href="#"><i class="fas fa-edit"></i></a>
  <a class="btn btn-danger" href="#"><i class="fas fa-trash"></i></a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>1er</td>
      <td>premiere année</td>
      <td>2020-2022</td>  
      <td > bibi@gmail.com</td>

   <td><a class="btn btn-info" href="#"><i class="fas fa-edit"></i></a>
  <a class="btn btn-danger" href="#"><i class="fas fa-trash"></i></a></td>
    </tr>
   
  </tbody>
</table>
    </div>
     
        
        
  @endsection     