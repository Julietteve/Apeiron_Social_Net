@extends ('layouts.header')


@section('content')


<ul>


    @foreach ($users as $user)
        <li>{{ $user->name }}</li>
          <li>{{ $user->country }}</li>

    @endforeach
</ul>

{{ $users->links() }}


@endsection
