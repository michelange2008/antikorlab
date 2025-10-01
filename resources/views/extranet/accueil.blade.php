@extends("layouts.app")

@section('menu')

  @include("extranet.menuExtranet")

@endsection

@section('content')

  <main>

    <noscript>
      <div class="container-fluid alert-secondary">
        <div class="row py-3 justify-content-center">
          <div class="col-md-8 bg-danger p-3 text-white shadow-lg">
            <h4>@lang('accueil.javascript.titre')</h4>
            <p>
              @lang('accueil.javascript.texte')
            </p>
            <a class="btn btn-bleu" href="https://www.enable-javascript.com/fr/" target="_blank">@lang('commun.know_more')</a>.
          </div>
        </div>
      </div>
    </noscript>

    @include('extranet.accueil.accueil_carousel')

    <div class="container-fluid text-center">

      @isset($new)

        @include('extranet.news.news_display')

      @endisset

      @include('extranet.accueil.accueil_entetes')


    </div>

  </main>

@endsection
