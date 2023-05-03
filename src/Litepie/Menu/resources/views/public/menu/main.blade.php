@foreach ($menus as $menu)
    @if ($menu->hasChildren())
        <li class="{{ $menu->active ?? '' }} nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{$menu->name}} <span class="ion ion-ios-arrow-down"></span></a>
            @include('menu::menu.sub.main', array('menus' => $menu->getChildren()))
        </li>
    @else
        <li  class="nav-item {{ $menu->active ?? '' }}">
            <a href="{{trans_url($menu->url)}}" class="nav-link">
                {{$menu->name}}
            </a>
        </li>
    @endif
@endforeach
