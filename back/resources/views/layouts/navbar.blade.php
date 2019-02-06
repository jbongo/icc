@section('navbar')
<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
		<ul>
			<li class="label">Main</li>
                    <li class="encour"><a class="sidebar-sub-toggle"><i class="large material-icons">desktop_mac</i> Vue d'ensemble <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="#">Tableau de bord</a></li>
                            <li><a href="#">Actualité du réseau</a></li>
                            <li><a href="#">Système et pérformances</a></li>
                        </ul>
                    </li>
                    <li class="label">Administration</li>
                    <li class="encour"><a class="sidebar-sub-toggle"><i class="large material-icons">account_circle</i>Utilisateurs<span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                        <li class="encour"><a href="">Gestion</a></li>
                        <li class="termine"><a href="">Archives</a></li>
                        <li class="encour"><a href="">Paramètres</a></li>
                        </ul>
                    </li>
                    <li class="encour"><a class="sidebar-sub-toggle"><i class="large material-icons">business_center</i>Evenements<span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>

                                <li><a href="">Gestion</a></li>
                                <li class="encour"><a href="">Commissions</a></li>
                                <li class="encour"><a href="">Paramètres</a></li>
                        </ul>
                    </li>
                    <li class="encour" ><a class="sidebar-sub-toggle"><i class="large material-icons">supervisor_account</i>@lang('Disponibilités')<span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>

                        <li class="encour" > <a href="">Gestion</a></li>
                        <li class="encour"><a href="">Ajouter</a></li>
                                <li><a href="#">Archives</a></li>
                                <li><a href="#">Paramètres</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-sub-toggle"><i class="large material-icons">home</i>Planning<span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="">Gestion</a></li>
                            <li><a href="#">Archives</a></li>
                            <li><a href="#">Paramètres</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-sub-toggle"><i class="large material-icons">gavel</i>Formations<span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="">Gestion</a></li>
                            <li><a href="#">Archives</a></li>
                            <li><a href="#">Paramètres</a></li>
                        </ul>
                    </li>
    
                </ul>
            </div>
        </div>
    </div>
@endsection
