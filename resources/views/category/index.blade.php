@extends('layouts.main')

@section('title', 'Категории')

@section('content')
<main class="blog">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">Категории</h1>
        <section class="featured-posts-section">
            <div class="row">
                @foreach($categories as $category)
                    <div class="col-md-4 fetured-post blog-post" data-aos="fade-up">
                        <div class="blog-post-thumbnail-wrapper">
                            <img src="{{ asset('storage/' . $category->preview_image ) }}" alt="картинка категории">
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="blog-post-category">{{ $category->posts->count() }}</p>
                        </div>
                        <a href="{{ route('category.post.index', $category->id) }}" class="blog-post-permalink">
                            <h6 class="blog-post-title">Посты: {{ $category->title }}</h6>
                        </a>
                    </div>
                @endforeach

            </div>
            <div class="row">
                <div class="m-auto">
                    {{ $categories->links() }}
                </div>
            </div>
        </section>
    </div>

</main>
@endsection
