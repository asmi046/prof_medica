<div id="main_side_menue" class="side_menue_wrapper">
    <div class="shadow"></div>
    <nav class="side_menue">

        <a href="{{ route('home') }}">
            <img src="{{ asset('img/logo.svg') }}" alt="">
        </a>

        <nav class="side_menu">
            <ul class="main_menu">
                @foreach ($menu as $item)
                   <li class="menu__items">
                       <a @class(['item', 'item-active' => strripos(url()->current(), $item->lnk)>0]) href="{{ $item->lnk }}">{{ $item->title }}</a>
                   </li>
               @endforeach
            </ul>
        </nav>

        <div class="side_buttom">
            <a href="tel:+7{{ phone_format($phone) }}" class="side_menu_phone">{{ $phone }}</a>
            <a href="mailto{{ $email }}:">{{ $email }}</a>
        </div>
    </nav>
</div>

<div class="show_menue_button">
    <x-burger-icon></x-burger-icon>
</div>

