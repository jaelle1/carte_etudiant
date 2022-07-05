@extends('layouts.dashboard')
@section('content')
<div>
  <div class="d-flex justify-content-end mt-2 ajout">
    @if(!empty($students) && $students->count())

    <a href="{{ route('Student.create') }}" class="btn btn-primary">ajouter un Etudiant</a>
    <a href="{{ route('Student.create') }}" class="btn btn-success">CARTE</a>

  </div>
  @if (session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
  @endif
  <div class="table-responsive">
    <table class="table table-bordered border-dark table-hover ">


      <thead class="bg-success">
        <tr>
          <th scope="col" class="matricule">N°</th>
          <th scope="col">Matricule</th>
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
        @foreach ($students as $student)
        <tr>
          <th scope="row">{{$loop->index+1}}</th>
          <td>{{ $student -> matricule }}</td>
          <td>{{ $student -> nom }}</td>
          <td>{{ $student -> prenom }}</td>
          <td>{{ $student -> cycle }}</td>
          <td>{{ $student -> niveau }}</td>
          <td>{{ $student -> annee }}</td>
          <td>{{ $student -> email }}</td>
          <td>
          <form action="{{ route('Student.update', $student->id) }}" method="POST">
              @csrf
              @method('PUT')
              <button type="submit" class="fas fa-edit"></button>
            </form>
            <!-- <a href="{{ route('Student.update', $student->id) }}"><i class="fas fa-edit"></i></a> -->
            <a href="{{ route('pdfView',['id' => $student->id]) }}"><i class="fas fa-eye"></i></a>

            <form action="{{ route('Student.destroy', $student->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="fas fa-trash"></button>
            </form>
          </td>

        </tr>
        @endforeach
        @else
        <tr>
          <a href="{{ route('Student.create') }}" class="btn btn-primary">ajouter un Etudiant</a>

          <td colspan="5">Aucun utilisateur</td>
        </tr>
        @endif

      </tbody>
    </table>
  </div>



  @endsection