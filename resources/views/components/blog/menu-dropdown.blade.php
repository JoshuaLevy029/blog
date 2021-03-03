@if ($item->menu_id == 0)
    <x-navbar::nav-dropdown title="{{$item->name}}" icon="{{$item->icon?$item->icon:''}}" direction="dropdown" id="drop{{$item->id}}">
        <x-slot name="content">
            @foreach ($menu as $i)
                @if ($i->type == 'dropdown')
                    @php $submenu = $i->submenu; @endphp
                    <x-blog::menu-dropdown :item=$i :menu=$submenu/>
                @else
                    @php $redirect = ($i->type == 'redirect') ? true : false; @endphp
                    <x-navbar::nav-dropdown-item title="{{$i->name}}" icon="{{$i->icon?$i->icon:''}}" route="{{$i->route?$i->route:''}}" :redirect=$redirect/>
                @endif
            @endforeach
        </x-slot>
    </x-navbar::nav-dropdown>
@else
    <li class="dropdown-item dropdown-submenu p-0">
        <a href="#" data-toggle="dropdown" class="dropdown-toggle dropdown-item w-100" id="drop{{$item->id}}">
            @if($item->icon) <i class="{{$item->icon}} mr-1"></i> @endif {{$item->name}}
        </a>
        <ul class="dropdown-menu  rounded-0 white border-0 z-depth-1" aria-labelledby="drop{{$item->id}}">
            @foreach ($menu as $i)
                @if ($i->type == 'dropdown')
                    @php $submenu = $i->submenu; @endphp
                    <x-blog::menu-dropdown :item=$i :menu=$submenu/>
                @else
                    <li class="dropdown-item p-0">
                        @if ($i->type == 'redirect')
                            <a href="{{$i->route}}" target="{{$i->target}}" class="dropdown-item w-100">
                                @if($i->icon) <i class="{{$i->icon}} mr-1"></i> @endif {{$i->name}}
                            </a>    
                        @else
                            <a href="{{$i->route?($i->data?route($i->route,eval($i->data)):route($i->route)):''}}" class="dropdown-item w-100">
                                @if($i->icon) <i class="{{$i->icon}} mr-1"></i> @endif {{$i->name}}
                            </a>
                        @endif
                    </li>
                @endif
            @endforeach
        </ul>
    </li>
@endif