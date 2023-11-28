{{-- Fragment destiné à afficher l'image qui doit être téléchargée avec le champs input  --}}
<div class="row justify-content-start align-items-center my-3">

  <div class="col-md-4">
    {{-- il faut passer le chemin de l'image et le nom en paramètres --}}
    @isset($nouveau)

      <span>@lang('form.choisir_file')&nbsp;:</span>

    @else

      <img class="img-50" src="{{ url($chemin.$file) }}" alt="{{ $image }}">

    @endisset

  </div>

  <div class="col-md-8">

    <div id="group_{{ $name }}" class="input-group image-preview">
      {{-- il faut aussi passer en parametre le préfixe du nom car possibilité qu'il y ait deux champs inputImage --}}
      <input type="hidden" name="{{ $name }}_default" value="{{ $value ?? '' }}">

      <input id="input_dis_{{ $name }}" type="text" class="form-control image-preview-filename" disabled="disabled" value="{{ $image ?? '' }}" > <!-- don't give a name === doesn't send on POST/GET -->

      <span class="input-group-btn">
        <!-- image-preview-clear button -->
        {{-- <button id="bouton_{{ $name }}" type="button" class="btn btn-default image-preview-clear" style="display:none;">

          <i class="fas fa-window-close text-danger"></i> @lang('form.del')

        </button> --}}
        <!-- image-preview-input -->
        <div id="input_{{ $name }}" class="btn btn-default image-preview-input">

          <i class="fas fa-folder-open"></i>

          <span id="span_{{ $name }}" class="image-preview-input-title">@lang('form.browse')</span>

          <input type="file" 
                accept="image/png, image/jpeg, image/gif,image/svg, application/pdf, application/vnd.oasis.opendocument.text,
                application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document" 
                name="{{ $name }}_nouvelle"

            @isset($nouveau)

              @if ($nouveau) required  @endif

            @endisset > <!-- rename it -->

        </div>

      </span>



    </div><!-- /input-group image-preview [TO HERE]-->

    @error('image_nouvelle')

      <div class="alert alert-danger">{{ __($message) }}</div>

    @enderror

  </div>
  {{-- traduction pour le javascript --}}
  <div id="changer" class="d-none">@lang('form.change')</div>

</div>

@section('script_inputImage')

  <script src="{{ url('js/inputImage.min.js') }}"></script>

@endsection

@section('css_inputImage')

  <link rel="stylesheet" href="{{ url('css/inputImage.min.css') }}">

@endsection
