@if (Auth::user()->hasRole('owner') )
    @include('production.dashboard.owner')
@endif

@if (Auth::user()->hasRole('admin') )
    @include('production.dashboard.admin')
@endif

@if (Auth::user()->hasRole('talent') )
  @include('production.dashboard.talent')
@endif

@if (Auth::user()->hasRole('client') )
  @include('production.dashboard.client')
@endif

<!-- pusat file di production.dashboard.[role] -->