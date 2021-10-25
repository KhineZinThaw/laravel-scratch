<x-layout>
    <article>
        <h1>
           {{ $post->title }}
        </h1>
        <p>
            By <a href="authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in 
            <a href="categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
        </p>
        <p>
            {{ $post->body }}
        </p>
        <a href="/">Go Back</a>
    </article>
</x-layout>