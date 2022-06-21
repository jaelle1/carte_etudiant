@extends('layouts.dashboard')
@section('content')
@if(Session::has('success'))
  <script>
    swal('Success!', '{{Session::get("success")}}', 'success',{
      buttons: "ok"
    });
  </script>
@endif
  <div class="d-flex justify-content-end mt-2 ajout">
    <a href="{{ route('User.create') }}" class="btn btn-primary">ajouter un utilisateur</a>
  </div>

<table class="table table-striped-row rounded-2 table-hover">
  <thead class="table1 bg-success">

    <tr>
      <th scope="col" style="width: 75px;">n°</th>
      <th scope="col">NOM</th>
      <th scope="col">EMAIL</th>
      <th scope="col">TELEPHONE</th>
      <th scope="col" style="width: 75px;" class="text-center">ACTION</th>
    </tr>
  </thead>
  <tbody>
    @if(!empty($users) && $users->count())
    @foreach ($users as $user)
    <tr>
      <th>{{$loop->index + 1}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->telephone}}</td>
      <td>
        <div class="d-flex justify-content-evenly">
        <a class="btn btn-info" href="#"><i class="fas fa-edit"></i></a>

        <form action="{{route('User.destroy',$user->id)}}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger"><i class='fas fa-trash fw-bold'></i></button>
        </form>
    </div>
      </td>
    </tr>
    @endforeach
    @else
    <tr>
      <td colspan="5">Aucun utilisateur</td>
    </tr>
    @endif



  </tbody>
</table>
{!!  $users->links() !!}
@endsection


