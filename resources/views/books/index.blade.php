{{-- <script src="https://cdn.tailwindcss.com"></script> --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


<a href="/books/create">Create a book</a>
<a href="/books/delete">Show deleted books</a>


@foreach ($books as $book)
    <div>
        <a href="/books/{{ $book->id }}">{{ $book->id }}</a> -
        {{ $book->name }} -
        {{ $book->isbn }} -
        {{ $book->price }} $
        <a href="/books/{{ $book->id }}/edit">Edit</a>
        <form action="/books/{{ $book->id }}" method="post" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach
{{ $books->links() }}
