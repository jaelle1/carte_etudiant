@extends("layouts.dashboard")
@section("content")

<div class="container carte col-md-5" style="height: 250px;">
    <div class="row">
        <div class="col-md-3 image">
            <b class="logo-icon">

                <img src="{{asset('IMAGES/esi.jpg')}}" alt="logo de esi" class="logoesi" width="60" />

            </b>
        </div>
        <div class="col-md-9 licence">
            <h3 class="licence fw-bold text-center mt-2" style="font-size: 13px;">LICENCE ANALYSE ET PROGRAMMATION</h3>
            <h3 class="texte text-danger fw-bold" style="font-size: 13px;">Carte d'étudiant &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; 2021-2022
            </h3>
        </div>
    </div>

    <div class="row element fw-bold fs-5 bg-info" style="margin-top: 10px;">
        <div class="col-md-2" style="height: 110px; width: 110px;">
            <b class="logo-icon">

                <img src="{{asset('IMAGES/photos/'. $student->photo)}}" alt="logo de esi" class="logoesi" width="125" />

            </b>
        </div>
        <div class="etudiant col-md-3 ">
            <h6 style="font-size: 16px;" class="fw-bold">Etudiant(e):</h6>
            <h6 style="font-size: 16px;" class="fw-bold">Matricule:</h6>
            <h6 style="font-size: 16px;" class="fw-bold">Niveau:</h6>
            <h6 style="font-size: 16px;" class="fw-bold">Cycle:</h6>
        </div>

        <div class="col me-2">
            <h6 style="font-size: 16px;">{{ $student->nom }} &nbsp {{ $student->prenom }}</h6>
            <h6 style="font-size: 16px;">{{ $student -> matricule }}</h6>
            <h6 style="font-size: 16px;">{{ $student->niveau }} </h6>
            <h6 style="font-size: 16px;">{{ $student->cycle }} </h6>
        </div>
    </div>
    <div class="row mt-4">
        <span class="text-center fw-bold" style="font-size: 15px;">www.unb.esi.carteetudiant@gmail.com</span>
    </div>

</div>

</div>



@endsection