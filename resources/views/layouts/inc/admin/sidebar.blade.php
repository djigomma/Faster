<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ asset("admin/dashboard")}}">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="mdi mdi-circle-outline menu-icon"></i>
          <span class="menu-title">Chauffeurs</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ asset("/ch")}}">Liste des Chauffeurs</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ asset("/chauffeur/create")}}">Ajouter un Chauffeur</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ asset("/client")}}">
          <i class="mdi mdi-account menu-icon"></i>
          <span class="menu-title">Les Clients</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{asset('/reservation')}}">
          <i class="mdi mdi-file-document-box-outline menu-icon"></i>
          <span class="menu-title">Reservation</span>
        </a>
      </li>
    </ul>
  </nav>