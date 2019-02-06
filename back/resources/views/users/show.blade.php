@extends('layouts.dashboard')
@section('header_name')
    Informations sur l' utilisateur
@stop
@extends('layouts.navbar')
@extends('layouts.header')
@section('content')
@section('pageActuelle')
@lang('Informations de l\'utilisateurs')
@endsection
@if (session('ok'))
<div class="alert alert-success alert-dismissible fade in">
   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
   <a href="#" class="alert-link"><strong> {{ session('ok') }}</strong></a> 
</div>
@endif       
<div class="row">
   <div class="col-lg-9 col-md-9 col-sm-9 ">
      <div class="card alert">
         <div class="col-lg-12">
            <div class="card alert">
               <div class="card-header">
                  <h4></h4>
               </div>
               <div class="card-body">
                  <div class="user-profile m-t-15">
                     <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                <a href="{{route('users.index')}}" class="btn btn-warning btn-flat btn-addon  m-l-5"><i class="ti-angle-left"></i>@lang('Liste d\'utilisateurs')</a>
                        </div>
                       
                        <div class="col-lg-7  col-md-7 col-sm-7 col-xs-7">
                           <div class="user-photo ">
                              <img class="img-responsive" height="120px" width="130px" src="{{asset('/images/photo_profile/'.(($user->photo_profile) ? $user->photo_profile : "user.png"))}}" alt="">
                              {{-- 
                              <div class="user-send-message"><button class="btn btn-primary btn-addon" type="button"><i class="ti-email"></i>Contacter</button></div>
                              --}}
                           </div>
                        </div>
                    
                     </div>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="col-lg-3 col-md-3 col-sm-3">
      <div class="card alert">
         <div class="card-header">
            <h4 class="f-s-14">Dernière connexion de l'utilisateur</h4>
         </div>
         <div class="card-body">
            <ul class="timeline">
               <li>
                  <div class="timeline-badge primary"><i class="fa fa-smile-o"></i></div>
                  <div class="timeline-panel">
                     <div class="timeline-heading">
                       
                     </div>
                     <div class="timeline-body">
                        <p>10 minutes ago</p>
                     </div>
                  </div>
               </li>
            
            </ul>
         </div>
      </div>
      <!-- /# card -->
   </div>

 
   
</div>

</div>


<div class="row">
   <div class="col-lg-12">
      <div class="card p-0">
         <div class="media">
            <div class="p-5 bg-info media-left media-middle">
               <i class="ti-user f-s-28 color-white"></i>
            </div>
            <div class="p-10 media-body">
               <h4 class="color-warning m-r-10">@lang('Informations de base') </h4>
               <div class="progress progress-sm  m-b-0">
                  <div class="progress-bar boxshadow-none  bg-dark" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="row">
   <div class="col-lg-6">
      <div class="panel lobipanel-basic panel-dark">
         <div class="panel-heading">
            <div class="panel-title"></div>
         </div>
         <div class="panel-body">
            <p class="xxx">
               <span class="info-title"><b>Civilité</b></span> : <span class="info-value"> {{($user->situation_matrimoniale == null ? "____________" : $user->situation_matrimoniale   )}}</span>
            </p>
            <p class="xxx">
               <span class="info-title"><b>Nom Prenom </b></span> : <span class="info-value"> {{($user->nom_jeune_fille == null ? "____________" : $user->nom_jeune_fille   )}}</span>
            </p>
            <p class="xxx">
               <span class="info-title"><b>Email </b></span> : <span class="info-value"> {{($user->ville_naissance == null ? "____________" : $user->ville_naissance   )}}</span>
            </p>
            <p class="xxx">
               <span class="info-title"><b>Téléphone </b></span> : <span class="info-value"> {{($user->date_naissance == null ? "____________" : $user->date_naissance   )}}</span>
            </p>
            <p class="xxx">
               <span class="info-title"><b>Ville </b></span> : <span class="info-value"> {{($user->pays_naissance == null ? "____________" : $user->pays_naissance   )}}</span>
            </p>
            <p class="xxx">
               <span class="info-title"><b>Adresse</b></span> : <span class="info-value"> {{($user->nationnalite == null ? "____________" : $user->nationnalite   )}}</span>
            </p>
         </div>
      </div>
   </div>
   <!-- /# column -->
   <div class="col-lg-6">
      <div class="panel lobipanel-basic panel-dark">
         <div class="panel-heading">
            <div class="panel-title"></div>
         </div>
         <div class="panel-body">
            <p class="xxx">
               <span class="info-title"><b>Date de baptême </b></span> : <span class="info-value"> {{($user->nom_prenom_pere == null ? "____________" : $user->nom_prenom_pere   )}}</span>
            </p>
            <p class="xxx">
               <span class="info-title"><b>Date de nouvelle naissance </b></span> : <span class="info-value"> {{($user->nom_prenom_mere == null ? "____________" : $user->nom_prenom_mere   )}}</span>
            </p>
            <p class="xxx">
               <span class="info-title"><b>Profession </b></span> : <span class="info-value"> {{($user->comment_connu_styli == null ? "____________" : $user->comment_connu_styli   )}}</span>
            </p>
            <p class="xxx">
               <span class="info-title"><b>Pôle </b></span> : <span class="info-value"> {{($user->ville_naissance == null ? "____________" : $user->ville_naissance   )}}</span>
            </p>
            <p class="xxx">
               <span class="info-title"><b>Rôle</b></span> : <span class="info-value"> {{($user->ou_souhaiter_exercer == null ? "____________" : $user->ou_souhaiter_exercer   )}}</span>
            </p>
         </div>
      </div>
   </div>
   <!-- /# column -->
</div>
<div class="row">
<div class="col-lg-12">
   <div class="card p-0">
      <div class="media">
         <div class="p-5 bg-info media-left media-middle">
            <i class="ti-user f-s-28 color-white"></i>
         </div>
         <div class="p-10 media-body">
            <h4 class="color-warning m-r-10">@lang('Autres Informations') </h4>
            <div class="progress progress-sm m-t-10 m-b-0">
               <div class="progress-bar boxshadow-none  bg-dark" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<div class="row">
   <div class="col-lg-12 ">
      <div class="panel lobipanel-basic panel-info">
         <div class="panel-heading">
            <div class="panel-title"></div>
         </div>
         <div class="panel-body">
            <p class="xxx">
               <span class="info-title"><b>Date d'intégration au département</b></span> : <span class="info-value"> {{($user->statut_juridique == null ? "____________" : $user->statut_juridique   )}}</span>
            </p>
            <p class="xxx">
               <span class="info-title"><b>Date de création du compte</b></span> : <span class="info-value"> {{($user->numero_siret == null ? "____________" : $user->numero_siret   )}}</span>
            </p>
            <p class="xxx">
               <span class="info-title"><b>Date de dernière modification</b></span> : <span class="info-value"> {{($user->code_caf == null ? "____________" : $user->code_caf   )}}</span>
            </p>
            
         </div>
      </div>
   </div>

  
</div>

@endsection