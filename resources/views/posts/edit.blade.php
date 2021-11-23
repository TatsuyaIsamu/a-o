<x-layout>
    <x-slot name="title">
        Add Edit Post - My BBS
    </x-slot>
    <div class="back-link">
        &laquo; <a href="{{ route('posts.show', $post)}}">Back</a>
    </div>
    <h1>Edit Post</h1>
    <form action="{{ route('posts.update', $post)}}" method="post">
        @method('PATCH')
        @csrf
        <label >Title
            <input type="text" name="title" value="{{old( 'title', $post->title)}}">
        </label>
        @error('title')
            <div class="error">{{ $message }}</div>
        @enderror
        <label>
            Body
            <textarea name="body">{{ old( 'body', $post->body) }}</textarea>
        </label>
        @error('body')
        <div class="error">{{ $message }}</div>
        @enderror
        <button>Update</button>
    </form>
</x-layout>

