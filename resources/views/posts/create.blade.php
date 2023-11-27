<form action="{{ route('posts.store') }}" method="post">
    @csrf
    @safesubmit

    <button type="submit">Create post</button>
</form>