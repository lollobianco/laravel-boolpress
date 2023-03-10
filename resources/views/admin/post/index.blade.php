@extends('layouts.app')
@section('title', 'All recipes')

@section('content')
  <div class="container">

    @foreach ($posts as $post)
      <div class="mb-4 text-white d-flex">


        <div class="rounded-left card-body col-7 bg-secondary">
          <h3 class="card-title">{{ $post->title }}</h3>

          @foreach ($post->tags as $tag)
            @if (is_null($tag->name))
            @else
              <span class="badge bg-light text-dark mb-3">{{ $tag['name'] }}</span>
            @endif
          @endforeach

          @if (is_null($post->category))
            <p class="card-text">{{ $post->body }}</p>
          @else
            <div class="d-flex">
              <h4 class="card-text mb-2">{{ $post->category['name'] }}</h4>
            </div>
            <div class="card-text mb-3">{!! Str::words($post->body, 70, '...') !!}</div>
          @endif


          <div class="d-flex">

            <div class="">
              <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-primary mr-3">
                Show Post
              </a>
            </div>
            <div>
              <a class="btn btn-warning mr-3" href="{{ route('admin.posts.edit', $post->id) }}">
                Edit Post
              </a>
            </div>

            <form class="ml-auto" action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">

              @csrf
              @method('DELETE')

              <button type="submit" class="btn btn-danger">Delete Post</button>

            </form>

          </div>

        </div>

        @if (is_null($post->cover))
          <div class="rounded-right card-body col-5 bg-secondary d-flex align-items-center justify-content-center">
            <h2>No picture available</h2>
          </div>
        @else
          <div
            class="rounded-right card-body bg-secondary col-5 shadow-sm d-flex align-items-center justify-content-center">
            <img src="{{ asset("storage/$post->cover") }}" class="card-img-top rounded p-1 bg-light shadow-lg"
              alt="...">
          </div>
        @endif
      </div>
    @endforeach

    <div>{{ $posts->links() }}</div>

  </div>
@endsection
