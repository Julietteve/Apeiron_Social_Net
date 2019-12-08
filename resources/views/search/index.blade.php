@extends ('layouts.header')


@section('content')


    @foreach ($users as $user)

<div style=" background-color:#ecf4f4"class="container-fluid">


  <a href="/profiles/{{ $user->id }}">
          <div class="card" style="width: 18rem;">
         <img src=" {{ $user->profile_pic }}" class="card-img-top" alt="...">
          <div class="card-body">
            {{ $user->name }}
            <p class="card-text">
              {{ $user->category }}
            </p>
          </div>
        </div>
      </a>

</div>



    @endforeach


{{ $users->links() }}


@endsection
