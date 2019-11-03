<div class="sidebar">
        <div class="sidebar-inner">
          <!-- ### $Sidebar Header ### -->
          <div class="sidebar-logo">
            <div class="peers ai-c fxw-nw">
              <div class="peer peer-greed">
                <a class="sidebar-link td-n" href="{{ url('home') }}">
                  <div class="peers ai-c fxw-nw">
                    <div class="peer">
                      <div class="logo">
                        <img src="{{ asset('img/logo_msas.png') }}" alt="">
                      </div>
                    </div>
                    <div class="peer peer-greed">
                      <h5 class="lh-1 mB-0 logo-text"></h5>
                    </div>
                  </div>
                </a>
              </div>
              <div class="peer">
                <div class="mobile-toggle sidebar-toggle">
                  <a href="" class="td-n">
                    <i class="ti-arrow-circle-left"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>

        <ul class="sidebar-menu scrollable pos-r">
            <li class="nav-item mT-30 actived">
              <a class="sidebar-link" href="{{ url('home') }}">
                <span class="icon-holder">
                  <i class="c-blue-500 ti-home"></i>
                </span>
                <span class="title">Dashboard</span>
              </a>
            </li>
            @if(Auth()->check() && Auth()->user()->role == 'agence')
            <li class="nav-item">
              <a class='sidebar-link' href="{{url('request/create')}}">
                <span class="icon-holder">
                  <i class="c-blue-500 ti-pencil"></i>
                </span>
                <span class="title">Enregistrement</span>
              </a>
            </li>
            <li class="nav-item">
              <a class='sidebar-link' href="{{ url('events') }}">
                <span class="icon-holder">
                  <i class="c-deep-orange-500 ti-calendar"></i>
                </span>
                <span class="title">Calendrier</span>
              </a>
            </li>
            <li class="nav-item">
              <a class='sidebar-link' href="{{ url('laboratoire') }}">
                <span class="icon-holder">
                  <i class="c-deep-purple-500 ti-comment-alt"></i>
                </span>
                <span class="title">Labo Representés</span>
              </a>
            </li>
            <li class="nav-item">
              <a class='sidebar-link' href="{{ url('autorisation') }}">
                <span class="icon-holder">
                  <i class="c-indigo-500 ti-bar-chart"></i>
                </span>
                <span class="title">Autorisations</span>
              </a>
            </li>
            <li class="nav-item">
              <a class='sidebar-link' href="{{ url('demande') }}">
                <span class="icon-holder">
                  <i class="c-light-blue-500 ti-share"></i>
                </span>
                <span class="title">Demandes</span>
              </a>
            </li>
            @elseif(Auth()->check() && Auth()->user()->role == 'labo')

            <li class="nav-item">
              <a class='sidebar-link' href="{{url('request/create')}}">
                <span class="icon-holder">
                  <i class="c-blue-500 ti-pencil"></i>
                </span>
                <span class="title">Enregistrement</span>
              </a>
            </li>
            <li class="nav-item">
              <a class='sidebar-link' href="{{ url('events') }}">
                <span class="icon-holder">
                  <i class="c-deep-orange-500 ti-calendar"></i>
                </span>
                <span class="title">Calendrier</span>
              </a>
            </li>
            <li class="nav-item">
              <a class='sidebar-link' href="{{ url('autorisation') }}">
                <span class="icon-holder">
                  <i class="c-indigo-500 ti-bar-chart"></i>
                </span>
                <span class="title">Autorisations</span>
              </a>
            </li>
            <li class="nav-item">
              <a class='sidebar-link' href="{{ url('demande') }}">
                <span class="icon-holder">
                  <i class="c-light-blue-500 ti-share"></i>
                </span>
                <span class="title">Demandes</span>
              </a>
            </li>
            @elseif(Auth()->check() && Auth()->user()->role == 'pharmacien')
            <li class="nav-item">
              <a class='sidebar-link' href="{{url('request/create')}}">
                <span class="icon-holder">
                  <i class="c-blue-500 ti-pencil"></i>
                </span>
                <span class="title">Evaluation</span>
              </a>
            </li>
            <li class="nav-item">
              <a class='sidebar-link' href="{{ url('events') }}">
                <span class="icon-holder">
                  <i class="c-deep-orange-500 ti-calendar"></i>
                </span>
                <span class="title">Recevabilites</span>
              </a>
            </li>
            <li class="nav-item">
              <a class='sidebar-link' href="{{ url('autorisation') }}">
                <span class="icon-holder">
                  <i class="c-indigo-500 ti-bar-chart"></i>
                </span>
                <span class="title">Autorisations</span>
              </a>
            </li>
            <li class="nav-item">
              <a class='sidebar-link' href="{{ url('demande') }}">
                <span class="icon-holder">
                  <i class="c-light-blue-500 ti-share"></i>
                </span>
                <span class="title">Demandes</span>
              </a>
            </li>
            @else

            @endif
          </ul>
        </div>
      </div>
