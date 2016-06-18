@extends('_layouts.app')

@section('title')
    {{ $post->post_title }} - Plus Two Notes
@stop

@section('content')
    <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--9-col">
            <div class="post mdl-shadow--4dp">
                <span class="post__date">
                    {{ $post->published_at->diffForHumans() }} | {{ $post->published_at->format('M dS, Y') }}
                </span>

                <h3 class="post__title text--thin">{{ $post->post_title }}
                    @if($post->imp)
                        {!! '<span class="post__imp-tag">Imp</span>' !!}
                    @endif
                </h3>

                <div class="post__detail">
                    <span class="post__category">
                        {{ $post->category->category_name }}
                    </span>
                    @if($post->isNotBlog())
                        | <span class="post__grade-subject">
                            {{ $post->grade_subject }}
                        </span>
                    @endif
                </div>

                <div class="post__breadcrumb">
                    @include('_partials.posts.breadcrumb')
                </div>

                <div class="post__body">
                    {!! $post->post_body !!}
                </div>
            </div>
        </div>
        <div class="mdl-cell mdl-cell--3-col mdl-cell--12-col-tablet">
             @include('_partials.posts.recent-posts')
        </div>
    </div>

@stop
