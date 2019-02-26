@extends('layouts.dashboard')
@section('header_name')
    Ajouter un utilisateur
@stop
@extends('layouts.navbar')
@extends('layouts.header')
@section('content')

@section('content')

<div class="row">
    <div class="">  
            <div class="login-form">
                <h4>Créer un compte</h4>
                <form method="POST" action="{{ route('users.store')}}">
                    @csrf
                        
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group">
                            <label>Civilité : <sup>*</sup> </label>
                            <select class="form-control" name="civilite" id="">
                                @if(old('civilite'))
                                <option value="{{old('civilite')}}">{{old('civilite')}}</option>
                                @endif
                                <option value="Mr">Mr</option>
                                <option value="Mme">Mme</option>
                                <option value="Mlle">Mlle</option>
                            </select>
                            @if ($errors->has('civilite'))
                                <span class="" role="alert">
                                    <strong>{{ $errors->first('civilite') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Nom : <sup>*</sup></label>
                            <input type="text" name="nom" class="form-control"  value="{{old('nom')}}"required >
                            @if ($errors->has('nom'))
                                <span class="" role="alert">
                                    <strong>{{ $errors->first('nom') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Prénom : <sup>*</sup></label>
                            <input type="text" name="prenom" class="form-control" value="{{old('prenom')}}" required >
                            @if ($errors->has('prenom'))
                                <span class="" role="alert">
                                    <strong>{{ $errors->first('prenom') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Email : <sup>*</sup></label>
                            <input type="email" name="email" class="form-control" value="{{old('email')}}" required >
                            @if ($errors->has('email'))
                                <span class="" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group">
                            <label>Date de naissance : <sup>*</sup></label>
                            <input type="date" name="date_naissance" class="form-control" value="{{old('date_naissance')}}" required >
                            @if ($errors->has('date_naissance'))
                                <span class="" role="alert">
                                    <strong>{{ $errors->first('date_naissance') }}</strong>
                                </span>
                            @endif
                        </div><div class="form-group">
                            <label>Téléphone : <sup>*</sup></label>
                            <input type="tel" name="telephone" class="form-control" value="{{old('telephone')}}" required >
                            @if ($errors->has('telephone'))
                                <span class="" role="alert">
                                    <strong>{{ $errors->first('telephone') }}</strong>
                                </span>
                            @endif
                        </div>
                    
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 ">
                        <div class="form-group">
                            <label>profession :</label>
                            <input type="text" name="profession" class="form-control" value="{{old('profession')}}" >
                            @if ($errors->has('profession'))
                                <span class="" role="alert">
                                    <strong>{{ $errors->first('profession') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>adresse :</label>
                            <input type="text" name="adresse" class="form-control" value="{{old('adresse')}}" >
                            @if ($errors->has('adresse'))
                                <span class="" role="alert">
                                    <strong>{{ $errors->first('adresse') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group">
                            <label>ville :</label>
                            <input type="text" name="ville" class="form-control" value="{{old('ville')}}"  >
                            @if ($errors->has('ville'))
                                <span class="" role="alert">
                                    <strong>{{ $errors->first('ville') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Code postal :</label>
                            <input type="text" name="code_postal" class="form-control" value="{{old('code_postal')}}"  >
                            @if ($errors->has('code_postal'))
                                <span class="" role="alert">
                                    <strong>{{ $errors->first('code_postal') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Date de baptême :</label>
                            <input type="date" name="date_bapteme" class="form-control" value="{{old('date_bapteme')}}" >
                            @if ($errors->has('date_bapteme'))
                                <span class="" role="alert">
                                    <strong>{{ $errors->first('date_bapteme') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Date de nouvelle naissance :</label>
                            <input type="date" name="date_nouvelle_naissance" class="form-control" value="{{old('date_nouvelle_naissance')}}" >
                            @if ($errors->has('date_nouvelle_naissance'))
                                <span class="" role="alert">
                                    <strong>{{ $errors->first('date_nouvelle_naissance') }}</strong>
                                </span>
                            @endif
                        </div>
                    
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6  col-md-6 col-sm-6 col-xs-6 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-xs-offset-3">
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
                                <input type="password" name="password_confirmation" class="form-control" required >
                                @if ($errors->has('comfirm-password'))
                                    <span class="" role="alert">
                                        <strong>{{ $errors->first('comfirm-password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div>
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Enregistrer</button>
                    
                    
                </form>
            </div>
        </div>
</div>

@endsection
