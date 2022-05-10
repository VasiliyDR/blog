@extends('layouts.main')

@section('title', 'Категории')

@section('content')
<main class="blog">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">Категории</h1>
        <section class="featured-posts-section">
            <ol>
                @foreach($categories as $category)
                <li><a href="{{ route('category.post.index', $category->id) }}">{{ $category->title }}</a></li>
                @endforeach
            </ol>
        </section>
    </div>

</main>
@endsection
