<div class="deznav">
    <div class="deznav-scroll">
        <div class="main-profile">
            <div class="image-bx">
                <img src="images/{{Auth::user()->profile}}" alt="">
                <a href="javascript:void(0);"><i class="fa fa-cog" aria-hidden="true"></i></a>
            </div>
            <h5 class="name"><span class="font-w400">Salut,</span> {{Auth::user()->nom}}</h5>
            <p class="email"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="95f8f4e7e4e0f0efefefefd5f8f4fcf9bbf6faf8">{{Auth::user()->email}}</a></p>
        </div>
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Menu Principal</li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-144-layout"></i>
                    <span class="nav-text">Gestion Utilisateur</span>
                </a>
                <ul aria-expanded="false">
                    <li><a class="collapse-item" href="{{route('Patient.index')}}">Ajouter un Utilisateur</a></li>
                    <li><a class="collapse-item" href="{{route('Visite.index')}}">Sessions Utilisateur</a></li>
                    <li><a class="collapse-item" href="{{route('test.index')}}">Historique actions</a></li>
                </ul>

            </li>
            <li class="nav-label">Menu Mineur</li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-077-menu-1"></i>
                    <span class="nav-text">Apps</span>
                </a>
                <ul aria-expanded="false">
                    <li><a class="collapse-item" href="{{route('Patient.index')}}">Patients</a></li>
                    <li><a class="collapse-item" href="{{route('Visite.index')}}">Visite</a></li>
                    <li><a class="collapse-item" href="{{route('test.index')}}">Test</a></li>
                    <li><a class="collapse-item" href="{{route('Paiement.index')}}">Paiements</a></li>
                    <li><a class="collapse-item" href="{{route('traitement.index')}}">Traitement</a></li>
                    <li><a class="collapse-item" href="{{route('salle.index')}}">Salle</a></li>
                    <li><a class="collapse-item" href="{{route('rapport.index')}}">Rapport</a></li>
                    <li><a class="collapse-item" href="{{route('operation.index')}}">Operation</a></li>
                </ul>
            </li>
            
        </ul>
        <div class="copyright">
            <p><strong>Genie Logiciel</strong> © 2023 </p>
            <p class="fs-12">Conçu et Developper <span class="heart"></span> par M.Kone & L.Gassamba</p>
        </div>
    </div>
</div>