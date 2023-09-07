<h4>Fitur</h4>
<a href="{{ route('user.index') }}">Users All</a>
<br>
<a href="{{ route('client.index') }}">Client</a>
<br>
<a href="{{ route('talent.index') }}">Talent</a>
<br>
<a href="{{ route('service.talent.index') }}">Service Talent</a>
<br>
<a href="{{ route('order.service.index') }}">Order Service</a>
<br>
<a href="{{ route('order.temp.index') }}">Order Temp Service</a>
<br>
<a href="{{ route('order.detail.index') }}">Order Detail Service</a>
<!-- <br>
<a href="#">Payment Service</a>
<br>
<a href="#">Rating Talent</a>
<br>
<a href="#">Report Talent</a> -->
<br><br>
<p>daftar dengan akun social media (masih gagal)</p>
<a href="{{ url('/auth/google') }}">Masuk dengan Google</a>
<br>
<a href="{{ url('/auth/facebook') }}">Masuk dengan Facebook</a>

<form method="POST" action="{{ route('logout') }}">
  @csrf
  <a href="{{ route('logout') }}" onclick="event.preventDefault();
                this.closest('form').submit();">
    <i class="lni lni-power-switch"></i>Logout
  </a>
</form>