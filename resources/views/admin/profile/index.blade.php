@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
      <h1>Meus Dados</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{route('admin.dashboard')}}">Painel de Controle</a></div>
        <div class="breadcrumb-item">Perfil</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row mt-sm-4">
      
        <div class="col-12 col-md-12 col-lg-7">
            
          <div class="card">
            <form method="post" action="{{route('admin.profile.update')}}" class="needs-validation" novalidate="" enctype="multipart/form-data">
                @csrf
              <div class="card-header">
                <h4>Editar Perfil</h4>
              </div>
              <div class="card-body">
                  <div class="row">  
                    <div class="form-group col-12">
                        <div class="mb-3">
                            @if(Auth::user()->image !== null)
                            <img src="{{asset(Auth::user()->image)}}" class=" img-fluid rounded-circle" style="width: 80px; height: auto; object-fit: cover;" alt="{{Auth::user()->name}}">
                            @else
                            <img src="{{asset('backend/assets/img/avatar/avatar-1.png')}}" class=" img-fluid rounded-circle" style="width: 80px; height: auto; object-fit: cover;" alt="{{Auth::user()->name}}">
                            @endif
                        </div>
                        <label>Foto de Perfil</label>
                        <input type="file" name="image" class="form-control"    accept="image/*">
                       
                      </div>                             
                    <div class="form-group col-md-6 col-12">
                      <label>Nome</label>
                      <input type="text" class="form-control" name="name" 
                      value="{{Auth::user()->name}}" required="">
                     
                    </div>
                    <div class="form-group col-md-6 col-12">
                      <label>E-mail</label>
                      <input type="email" class="form-control" name="email" 
                      value="{{Auth::user()->email}}" required="">
                    
                    </div>
                  </div>
              </div>
              <div class="card-footer text-right">
                <button class="btn btn-primary" type="submit">Atualizar</button>
              </div>
            </form>
          </div>
        </div>

        <div class="col-12 col-md-12 col-lg-7">
         
            
           
          <div class="card">
            <form method="post" action="{{route('admin.profile.password')}}" class="needs-validation" novalidate="" enctype="multipart/form-data">
                @csrf
              <div class="card-header">
                <h4>Atualizar Senha</h4>
              </div>
              <div class="card-body">
                  <div class="row">  
                    <div class="form-group col-12">
                      <label>Senha Atual</label>
                      <input type="password" name="current_password" placeholder="Digite sua senha atual" class="form-control">
                    </div>      
                    <div class="form-group col-12">
                      <label>Nova Senha</label>
                      <input type="password" name="password" placeholder="Digite sua nova senha" class="form-control">
                    </div>
                    <div class="form-group col-12">
                      <label>Confirme sua senha</label>
                      <input type="password" name="password_confirmation" placeholder="Digite sua nova senha novamente" class="form-control">
                    </div>
                  </div>
              </div>
              <div class="card-footer text-right">
                <button class="btn btn-primary" type="submit">Atualizar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection
