@extends("dashboard")
@section("content")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-info">

                <div class="card-body ">
                    <form method="POST" action="">
                        @csrf

                        <div class="row mb-3"> 

                            <div class="col-md">
                                <input id="matricule" type="text" class="form-control @error('matricule') is-invalid @enderror" name="matricule"  required autocomplete="matricule" placeholder="N° matricule" autofocus>

                                @error('matricule')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                           
                           
                        </div>
                        <div class="row mb-3">

                            <div class="col-md">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"  required autocomplete="name" placeholder="Nom" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md">
                                <input  type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom"  required autocomplete="prenom" placeholder="Prenom" autofocus>

                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                           
                        

                        </div>
                        <div class="row mb-3">

                           
                            <div class="col-md">
                                <input  type="text" class="form-control @error('cycle') is-invalid @enderror" name="cycle"  placeholder="cycle" required autocomplete="cycle">

                                @error('cycle')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('niveau_etude') is-invalid @enderror" name="niveau_etude" placeholder="niveau d'etude" required autocomplete="niveau_etude">

                                @error('niveau_etude')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         </div>
                     

                       
                        </div>
                        <div class="row mb-3">

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('annee') is-invalid @enderror" name="annee" placeholder="Année academique" required autocomplete="annee_academique">

                                @error('annee')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input  type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" required autocomplete="photo">

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