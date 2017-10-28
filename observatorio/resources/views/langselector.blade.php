@if(App::getLocale() == 'en')
    <li class="dropdown lang">
        <a href="{{ url('/en/change') }}" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <img width="32px" src="{{ asset('images/en.png') }}"> <span>English</span></a>
        <ul class="dropdown-menu">
            <li><a href="{{ url('/es/change') }}" class=""><img width="32px" src="{{ asset('images/es.png') }}"> <span>Español</span></a></li>
            <li><a href="{{ url('/pt-BR/change') }}" class=""><img width="32px" src="{{ asset('images/pt-BR.png') }}"> <span>Português Brasileiro</span></a></li>
        </ul>
    </li>
@elseif(App::getLocale() == 'pt-BR')
    <li class="dropdown lang">
        <a href="{{ url('/pt-BR/change') }}" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <img width="32px" src="{{ asset('images/pt-BR.png') }}"> <span>Português Brasileiro</span></a>
        <ul class="dropdown-menu">
            <li><a href="{{ url('/en/change') }}" class=""><img width="32px" src="{{ asset('images/en.png') }}"> <span>English</span></a></li>
            <li><a href="{{ url('/es/change') }}" class=""><img width="32px" src="{{ asset('images/es.png') }}"> <span>Español</span></a></li>
        </ul>
    </li>
@else
    <li class="dropdown lang">
        <a href="{{ url('/es/change') }}" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <img width="32px" src="{{ asset('images/es.png') }}"> <span>Español</span></a>
        <ul class="dropdown-menu">
            <li><a href="{{ url('/en/change') }}" class=""><img width="32px" src="{{ asset('images/en.png') }}"> <span>English</span></a></li>
            <li><a href="{{ url('/pt-BR/change') }}" class=""><img width="32px" src="{{ asset('images/pt-BR.png') }}"> <span>Português Brasileiro</span></a></    li>
        </ul>
    </li>
@endif
