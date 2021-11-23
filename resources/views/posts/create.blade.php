<x-layout>
    <x-slot name="title">
        Add New Post - My BBS
    </x-slot>
    <div class="back-link">
        &laquo; <a href="{{ route('posts.index')}}">Back</a>
    </div>
    <h1>Add New Post</h1>
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <label >Title
            <input type="text" name="title" value="{{old( 'title' )}}">
        </label>
        @error('title')
            <div class="error">{{ $message }}</div>
        @enderror
        <label>
            Body
            <textarea name="body">{{ old( 'body') }}</textarea>
        </label>
        @error('body')
        <div class="error">{{ $message }}</div>
        @enderror
        <button>Add</button>
    </form>
</x-layout>

