<footer class="footer">
    <div class="container">
        <div class="footer__wrapper">
            <a href="#"><img class="footer__logo logo" src="{{ asset('/img/icons/logo-icon.svg') }}" alt="ПрофМедика"></a>

            <nav class="footer__navigation navigation">
                <ul class="menu menu_main">
                    @foreach ($main_menu as $item)
                        <li class="menu__items">
                            <a @class(['item', 'item-active' => strripos(url()->current(), $item->lnk)>0]) href="{{ $item->lnk }}">{{ $item->title }}</a>
                        </li>
                    @endforeach
                </ul>

                <ul class="menu menu_sub">
                    @foreach ($dop_menu as $item)
                        <li class="menu__items">
                            <a @class(['item', 'item-active' => strripos(url()->current(), $item->lnk)>0]) href="{{ $item->lnk }}">{{ $item->title }}</a>
                        </li>
                    @endforeach
                </ul>

                <a href="tel:+7{{ phone_format($phone) }}" class="menu__call">{{ $phone }}</a>
                <a href="#" class="menu__mobile-button">
                    <img src="{{ asset('/img/icons/menu-icon.svg') }}" alt="Мобильное меню">
                </a>
            </nav>
        </div>
    </div>
</footer>
