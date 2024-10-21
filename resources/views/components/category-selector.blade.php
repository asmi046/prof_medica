
<section class="category_selection">
    <div class="container">
        @foreach ($all_categories as $item)
            <a href="{{ route('category', $item->slug) }}" @class([
                'cat_point',
                'active' => ($curent && $curent->slug === $item->slug)
                ]
                )> {{ $item->title }}</a>
        @endforeach
    </div>
</section>
