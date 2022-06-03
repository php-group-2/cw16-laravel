<form action="/books/{{ $book->id }}" method="post">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ $book->name }}">
    </div>
    <div>
        <label for="isbn">isbn</label>
        <input type="text" name="isbn" id="isbn" value="{{ $book->isbn }}">
    </div>
    <div>
        <label for="price">Price</label>
        <input type="text" name="price" id="price" value="{{ $book->price }}">
    </div>
    <button type="submit">Edit</button>
</form>
