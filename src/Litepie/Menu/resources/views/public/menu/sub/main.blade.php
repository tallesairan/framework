<div class="dropdown-menu">
    @foreach ($menus as $menu)
        @if ($menu->hasChildren())
            <li class="dropdown-item {{ $menu->active ?? '' }}">
                <a href="{{trans_url($menu->url)}}" >{{$menu->name}} S</a>
                @include('menu::menu.sub.main', array('menus' => $menu->getChildren()))
            </li>
        @else
            <a class="dropdown-item {{ $menu->active ?? '' }}" href="{{trans_url($menu->url)}}">
                {{$menu->name}}
            </a>
        @endif
    @endforeach
</div>
