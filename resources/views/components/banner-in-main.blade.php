<main class="main">
    <div class="container">
        <div class="main__areas">
            <div class="main__areas__info">
                <h1 class="main__title title">{{ $heder }}</h1>
                <p class="main__text"> {{ $text }} </p>
                <a class="button button__primary" href="#">Перейти в каталог</a>
            </div>
            <div class="main__areas__img-wrapper">
                <img class="areas__img" src="{{ asset('/img/main-banner.webp') }}"
                    alt="Картинка аренды медицинского оборудования">
            </div>
        </div>
    </div>
</main>
