{{-- issu de enpratique.blade.php --}}
<div class="col-md-12 p-3">

  <h4 class="p-3 alert-rouge-tres-fonce">@lang('enpratique.conservation_envoi')</h4>

</div>

<div class="col-md-12 mx-3 py-3">

  <ul class="list-unstyled">

    @foreach ($enpratiqueConserve as $element) {{-- enpratiqueConserve.json --}}

      <li class="media my-3">

        <img class="d-none d-sm-block img-thumbnail" src="{!! url('storage/img/icones/'.$element->image) !!}" alt="{{ $element->image }}">

        <div class="media-body ml-3 pt-2">

          <h4>@lang($element->h4)</h4>

          <ul class="lead">

            @foreach ($element->p as $p)

              <li>
                <span class="font-weight-bold color-bleu-tres-fonce">
                    @lang($p->gras)
                </span>
                  @lang($p->normal)
              </li>

            @endforeach

          </ul>

        </div>

      </li>

    @endforeach

  </ul>

</div>

<div class="col-12 my-3">

  <p class="h3">@lang('enpratique.uptoyou')</p>

  <div class="row ">

    <div class="card-deck">

      @foreach ($enpratiqueEnvoi->contenu as $element) {{-- enpratiqueEnvoi.json --}}


          <div class="card bg-rouge-tres-clair mb-3" style="min-width:300px">
            <div class="card-header alert-secondary">
              <img class='img-90' src="{!! url('storage/img/icones/'.$element->prefixe.'svg') !!}" alt="icon">
            </div>
            <div class="card-body">
              <h4>@lang($enpratiqueEnvoi->prefixe.$element->prefixe.'h4')</h4>
              <p>@lang($enpratiqueEnvoi->prefixe.$element->prefixe.'p')</p>
            </div>
            <div class="card-footer">
              @if ($element->type == 'route')

                <a class="btn btn-bleu {{ $element->id }}" href="{{ route($element->route) }}">@lang($enpratiqueEnvoi->prefixe.$element->prefixe.'libelle')</a>

              @elseif ($element->type == 'mail')

                <a class="btn btn-bleu" href="mailto:$element->mail">@lang($enpratiqueEnvoi->prefixe.$element->prefixe.'libelle')</a>

              @else

                <a class="btn btn-bleu" href="{{ url('storage/'.$element->file) }}">@lang($enpratiqueEnvoi->prefixe.$element->prefixe.'libelle')</a>

              @endif

          </div>
        </div>

      @endforeach
    </div>


  </div>

</div>
