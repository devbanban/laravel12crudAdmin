<form action="/post" method="POST">
    @csrf
    <input type="text" name="name" required placeholder="name">
    <button type="submit"> Submit </button>
</form>