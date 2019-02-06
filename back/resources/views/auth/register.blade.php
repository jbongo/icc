@extends('layouts.auth')

@section('content')
<div class="unix-login">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <div class="login-content">
                    <div class="login-logo">
                        {{-- <a href="index.html"><span>ICC</span></a> --}}
                    </div>
                    <div class="login-form">
                        <h4>Créer mon compte</h4>
                        <form method="POST" action="{{ route('register')}}">
                            @csrf
                            <div class="form-group">
                                <label>Nom :</label>
                                <input type="text" name="nom" class="form-control" required >
                                @if ($errors->has('nom'))
                                    <span class="" role="alert">
                                        <strong>{{ $errors->first('nom') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Prénom :</label>
                                <input type="text" name="prenom" class="form-control" required >
                                @if ($errors->has('prenom'))
                                    <span class="" role="alert">
                                        <strong>{{ $errors->first('prenom') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Email :</label>
                                <input type="email" name="email" class="form-control" required >
                                @if ($errors->has('email'))
                                    <span class="" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Mot de passe</label>
                                <input type="password" name="password" class="form-control"  required>
                                @if ($errors->has('password'))
                                    <span class="" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>confirmer Mot de passe</label>
                                <input type="password" name="password_confirmation
                                " class="form-control" required >
                                @if ($errors->has('comfirm-password'))
                                    <span class="" role="alert">
                                        <strong>{{ $errors->first('comfirm-password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="confidentialité" required> accepter les termes et la politique de confidentialité 
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Enregistrer</button>
                           
                            <div class="register-link m-t-15 text-center">
                            <p>Déjà un compte ? <a href="{{route('login')}}"> Se connecter</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
