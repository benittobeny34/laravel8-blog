<x-layout>
    <article>
        <h1>{!!  $post->title !!}</h1>
        <div>
            {!!  $post->body !!}
        </div>
        <p>
            By <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> in
            <a href="/category/{{$post->category->slug}}">{{$post->category->name}}</a>
        </p>
    </article>
    <a href="/">Go Back</a>
</x-layout>