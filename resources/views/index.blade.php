<x-layout>
    <x-slot name="title">
        My BBS
    </x-slot>
    <h1>
        <span>My BBS</span>
        <a href="{{ route('posts.create')}}">[Add]</a>
    </h1>
    <ul>
        @forelse ($posts as $index => $post)
            <a href="{{ route('posts.show', $post)}}">
                <li>{{ $post->title }}</li>
            </a>
        @empty
            <li>No Posts yet </li>
        @endforelse
    </ul>
</x-layout>
