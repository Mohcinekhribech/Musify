<form method="POST" action="/testlaravel/example-app/public/post">
    @csrf
    <input name='title' type="text">
    <input name='description' type="text">
    <input type="submit" value="store">
</form>