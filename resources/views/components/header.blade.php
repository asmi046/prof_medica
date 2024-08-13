<header class="header">
    <div class="container container__header">
        <div class="header__wrapper">
            <a href="#"><img class="header__logo logo" src="{{ asset('/img/icons/logo-icon.svg') }}" alt="Логотип Профмедика"></a>

            <nav class="header__navigation navigation">
                <x-menu.main-menu :menu="$main_menu"></x-menu.main-menu>
                <a href="tel:+7{{ phone_format($phone) }}" class="menu__call">{{ $phone }}</a>
            </nav>
        </div>
</header>
