<x-layout>
    @include('_post-header')
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if($posts->count())
            <x-posts-grid :posts="$posts"/>
        @else
            <p class="text-center">No posts yet please check back later</p>
        @endif

    </main>

    {{--    @foreach($posts as $post)--}}
    {{--        <article>--}}
    {{--            <h1><a href="/posts/{{$post->slug}}">{{$post->title}}</a></h1>--}}
    {{--            <div>--}}
    {{--                {!! $post->excerpt !!}--}}
    {{--            </div>--}}
    {{--            <p>--}}
    {{--                By <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> in--}}
    {{--                <a href="/category/{{$post->category->slug}}">{{$post->category->name}}</a>--}}
    {{--            </p>--}}
    {{--        </article>--}}
    {{--    @endforeach--}}
</x-layout>