<h1>Here is the dashboard</h1>
<BR><BR>

<form id="logout-form" action="{{ route('logout') }}" method="POST">
    @csrf
    <button class="nav-link" type="submit">
        {{ __('Logout') }}
    </button>
</form>
