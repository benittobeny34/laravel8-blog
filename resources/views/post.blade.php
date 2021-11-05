<x-layout>
    <article>
        <h1>{{$post->title}}</h1>
        <div>
            {{$post->body}}
        </div>
        <p><a href="/category/{{$post->category->name}}">{{$post->category->name}}</a></p>
    </article>
    <a href="/">Go Back</a>
</x-layout>