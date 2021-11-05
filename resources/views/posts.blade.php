<x-layout>
    @foreach($posts as $post)
        <article>
            <h1><a href="/posts/{{$post->slug}}">{{$post->title}}</a></h1>
            <div>
                {!! $post->excerpt !!}
            </div>
            <p>
                By <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> in
                <a href="/category/{{$post->category->slug}}">{{$post->category->name}}</a>
            </p>
        </article>
    @endforeach
</x-layout>