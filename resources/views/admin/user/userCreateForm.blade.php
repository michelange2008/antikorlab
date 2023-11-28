<form id="userCreateForm" action="{{ route('user.store') }}" method="POST">
  @csrf
  
  <div class="row">
    
    <div class="col-md-12">
      
      @if (session()->has('creation.usertype'))
      
      @include('admin.form.inputUsertypeCache', ['usertype' => session('creation.usertype')])
      
      @else
      
      @include('admin.form.inputUsertype')
      
      @endif
      
      
    </div>

  </div>
  
  <div class="row">
    
    <div class="col-md-12">
      
      @include('admin.form.identite')
      
  </div>
  
</div>

<div id="enregistreAnnule" class="row  my-3 justify-content-center">
  
  <div class="col-md-12">
    
    @enregistreAnnule(['nomBouton' => __('boutons.continuer'), 'route' => route('user.index')])
    
  </div>
  
</div>


</form>
