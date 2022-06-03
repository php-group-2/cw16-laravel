<form action="/books" method="post">
    @csrf
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="isbn">isbn</label>
        <input type="text" name="isbn" id="isbn">
    </div>
    <div>
        <label for="price">Price</label>
        <input type="text" name="price" id="price">
    </div>
    <button type="submit">Create</button>
</form>

