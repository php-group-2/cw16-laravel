@foreach ($books as $book)
    <div>
        <a href="/books/{{ $book->id }}">{{ $book->id }}</a> -
        {{ $book->name }} -
        {{ $book->isbn }} -
        {{ $book->price }} $
        <a href="/books/{{ $book->id }}/edit">Edit</a>
        <form action="/books/{{ $book->id }}/force" method="post" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit">delete forever</button>
        </form>
        <form action="/books/{{ $book->id }}/restore" method="post" style="display: inline;">
            @csrf
            @method('PUT')
            <button type="submit">undo</button>
        </form>
    </div>
@endforeach