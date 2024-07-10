
<!DOCTYPE html>
<html lang="{{str_replace('_','-',app()->getLocale())}}">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login &mdash; Marketplace</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('backend/assets/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/assets/modules/fontawesome/css/all.min.css')}}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{asset('backend/assets/modules/bootstrap-social/bootstrap-social.css')}}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('backend/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('backend/assets/css/components.css')}}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body style="background:#410454;">
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="{{asset('backend/assets/img/mklogo_white.png')}}" alt="logo" width="100" class="shadow-light rounded-circle shadow" >
            </div>

            <div class="card card-primary" style="background: #270432; color:#fff; border:none;">
              <div class="card-header"><h4>Acesso Adminstrativo</h4></div>

              <div class="card-body">
                <form method="POST" action="{{route('login')}}"  class="needs-validation" novalidate="" >
                    @csrf
                  <div class="form-group">
                 
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus placeholder="Digite seu e-mail" value="{{old('email')}}">
                    @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{$errors->first('email')}}
                    </div>
                    @endif
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    
                      <div class="float-right">
                        @if(Route::has('password.request'))
                        <a href="{{route('password.request')}}" class="text-small" style="color: #fff">
                          Esqueceu sua senha?
                        </a>
                        @endif
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required placeholder="Digite sua senha" value="{{old('password')}}">
                   @if($errors->has('password'))
                   <div class="invalid-feedback">
                    {{$errors->first('password')}}
                   </div>
                   @endif
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Manter conectado</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-warning btn-lg btn-block" style="color: #000" tabindex="4">
                      Entrar
                    </button>
                  </div>
                </form>
                
              </div>
            </div>
           
            <div class="simple-footer" style="color: #fff">
                Todos os Direitos Reservados &copy; <?= date('Y') ?>
                <br> Desenvolvido por <a  href="https://github.com/diegovilhalva">Diego Vilhalva</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="{{asset('backend/assets/modules/jquery.min.js')}}"></script>
  <script src="{{asset('backend/assets/modules/popper.js')}}"></script>
  <script src="{{asset('backend/assets/modules/tooltip.js')}}"></script>
  <script src="{{asset('backend/assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('backend/assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{asset('backend/assets/modules/moment.min.js')}}"></script>
  <script src="{{asset('backend/assets/js/stisla.js')}}"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="{{asset('backend/assets/js/scripts.js')}}"></script>
  <script src="{{asset('backend/assets/js/custom.js')}}"></script>
</body>
</html>
