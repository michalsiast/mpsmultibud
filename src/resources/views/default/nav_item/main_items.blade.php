@if($items->count() > 0)
    <ul>
        @foreach($items as $item)
            @php
                $isActive = false;
                $url = null;
                $target = '_self';
                if($item->page) {
                    $url = route($item->page->type);
                } else {
                    $url = url()->to($item->url);
                }
                if($item->target) {
                    $target = $item->target;
                }
                $isActive = request()->fullUrlIs($url);
            @endphp

            @if($item->navItems->count() > 0)
                <li class="menu-item-has-children {{ $isActive ? 'active' : '' }}">
                    <a href="{{ $url }}" target="{{ $target }}">{{ $item->label }}</a>
                    <ul class="dp-menu">
                        @foreach($item->navItems as $subItem)
                            @php
                                $isActive = false;
                                $url = null;
                                $target = '_self';
                                if($subItem->page) {
                                    $url = route($subItem->page->type);
                                } else {
                                    $url = url()->to($subItem->url);
                                }
                                if($subItem->target) {
                                    $target = $subItem->target;
                                }
                                $isActive = request()->fullUrlIs($url);
                            @endphp
                            <li class="{{ $isActive ? 'active' : '' }}">
                                <a href="{{ $url }}" target="{{ $target }}">{{ $subItem->label }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @else
                <li class="{{ $isActive ? 'active' : '' }}">
                    <a href="{{ $url }}" target="{{ $target }}">{{ $item->label }}</a>
                </li>
            @endif
        @endforeach
    </ul>
@endif
