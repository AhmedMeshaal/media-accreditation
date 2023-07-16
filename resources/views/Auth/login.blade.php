<h1>login</h1>
<form action="{{ route('login') }}" method="POST" enctype="multipart/form-data">

    @csrf
    <input type="email" name="email"/>
    <BR> <input type="password" name="password"/>

    <BR>

    <button class="btn btn-success">Login</button>
    <BR>
</form>
