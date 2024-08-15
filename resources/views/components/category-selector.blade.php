<section class="category_selection">
    <div class="container">
        @foreach ($all_categories as $item)
            <a href="#" class="cat_point"> {{ $item->title }} </a>
        @endforeach
    </div>
</section>
