@extends("layouts.dashboard")
@section("content")
@if ($errors->any())

<div class="alert alert-danger">
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</div>
@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-info">

                <div class="card-body ">

                    <form method="POST" action="{{route('Student.store')}}" enctype="multipart/form-data">
                        @csrf
                        @method('POST')



                        <div class="row mb-3">

                            <div class="col-md">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="nom" required autocomplete="name" placeholder="Nom" autofocus>

                                @error('nom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md">
                                <input type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" required autocomplete="prenom" placeholder="Prenom" autofocus>

                                @error('prenom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>



                        </div>
                        <div class="row mb-3">


                            <div class="col-md">
                                <input type="email" class="form-control @error('cycle') is-invalid @enderror" name="email" placeholder="email" required autocomplete="email">

                                @error('cycle')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            


                        </div>
                        <div class="row mb-3">


                            <div class="col-md">
                                <input type="text" class="form-control @error('cycle') is-invalid @enderror" name="cycle" placeholder="cycle" required autocomplete="cycle" value="License">

                                @error('cycle')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('niveau_etude') is-invalid @enderror" name="niveau" placeholder="niveau d'etude" required autocomplete="niveau_etude" value="1">

                                @error('niveau')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>



                        </div>
                        <div class="row mb-3">

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('annee') is-invalid @enderror" name="annee" placeholder="Année academique" required autocomplete="annee" value="2021-2022">

                                @error('annee')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" required autocomplete="photo" accept="image/png, image/jpg, image/jpeg">

                                @error('photo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                        </div>

                        <div class="row mb-">
                            <div class="col-md-6 offset-md-3">
                                <button type="submit" class="btn btn-primary w-100">
                                    {{ __('ajouter') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection