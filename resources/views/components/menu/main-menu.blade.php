<ul class="menu menu_main">
    @foreach ($menu as $item)
       <li class="menu__items">
           <a @class(['item', 'item-active' => strripos(url()->current(), $item->lnk)>0]) href="{{ $item->lnk }}">{{ $item->title }}</a>
       </li>
   @endforeach
</ul>
