@extends('public.layouts.master')
@section('content')
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-12">
                    <h1 class="mb-3" style="font-size: 2em">Tin Tức
                    </h1>
                    <div class="blog">
                        @foreach ($posts as $post)
                            <div class="row row-0 gap-3 mb-3">
                                <div class="col-3">
                                    <a href="{{ route('post.show', $post->slug) }}"><img src="{{ asset($post->image) }}"
                                            class="w-100 h-100 object-cover card-img-start" alt="Bài Post"></a>

                                </div>

                                <div class="col">

                                    <div class="card-body">
                                        <a href="{{ route('post.show', $post->slug) }}">
                                            <h4 class="card-title title-text">{{ $post->title }}</h4>
                                        </a>

                                        <p>Ngày viết: {{ $post->created_at->format('d/m/Y') }}</p>
                                        <p class="text-muted">{{ $post->excerpt }}</p>
                                        @foreach ($post->categories as $category)
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
