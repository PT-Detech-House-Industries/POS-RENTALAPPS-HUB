@if (Auth::user()->role == 'admin' )
    @include('admin.dashboard')
@endif

@if (Auth::user()->role == 'talent' )
    @include('talent.dashboard')
@endif

@if (Auth::user()->role == 'client' )
    @include('client.dashboard')
@endif


