@extends('layouts.app')

@section('menu')
    @include('labo.laboMenu')
@endsection

@section('content')
    <div class="container-fluid">

        <div class="row my-3">

            <div class="col-md-10 mx-auto">

                @titre(['titre' => __('titres.nouvelle_demande'), 'icone' => 'demandes.svg'])

            </div>

        </div>

        <form action="{{ route('demandes.store') }}" method="POST">
            @csrf

            @include('labo.demandeForm.demandePrincipal')

            @include('labo.demandeForm.demandeInformations')

            {{-- @include('labo.demandeForm.demandePrelevement') --}}

            @include('labo.demandeForm.demandeEnvois')

            <div class="row my-3 justify-content-center">

                <div class="col-md-10">

                    @enregistreAnnule(['nomBouton' => 'boutons.continuer', 'route' => route('demandes.index')])

                </div>

            </div>

        </form>

    </div>
@endsection

@section('scripts')
    <script src="{{ url('js/demandeCreate.js') }}"></script>
@endsection
