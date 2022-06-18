@extends('dashboard')
@section('content')
  <div class="d-flex justify-content-end mt-2 ajout">
    <a href="#" class="btn btn-primary">ajouter un utilisateur</a>
  </div>
<table class="table table-bordered border-dark table-hover">
  <thead class="table1 bg-success">
    
    <tr>
      <th scope="col" class="matricule">n°</th>
      <th scope="col">NOM</th>
      <th scope="col">PRENOM</th>
      <th scope="col">EMAIL</th>
      <th scope="col">TELEPHONE</th>
      <th scope="col" class="matricule">ACTION</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>KIENTEGA</td>
      <td>BRIGITTE</td>
      <td></td>
      <td></td>
      <td ><a class="btn btn-info" href="#"><i class="fas fa-edit"></i></a>
  <a class="btn btn-danger" href="#"><i class="fas fa-trash"></i></a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>NAMOUNTOUGOU</td>
      <td>BOUREIMA</td>
      <td></td>
      <td></td>
      <td ><a class="btn btn-info" href="#"><i class="fas fa-edit"></i></a>
  <a class="btn btn-danger" href="#"><i class="fas fa-trash"></i></a></td>
    </tr>
    
    
  </tbody>
</table>
@endsection


