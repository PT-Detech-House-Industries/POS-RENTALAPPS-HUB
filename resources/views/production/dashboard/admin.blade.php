<h3>coming soon, admin page</h3>
<br>
<a href="{{ route('admin.talent.index') }}">Talent</a>
<br>
<form method="POST" action="{{ route('logout') }}">
  @csrf
  <a href="{{ route('logout') }}" onclick="event.preventDefault();
                this.closest('form').submit();">
    <i class="lni lni-power-switch"></i>Logout
  </a>
</form>