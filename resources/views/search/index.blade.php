@extends ('layouts.header')


@section('content')


<div class="all">


<div class="container-fluid">

  <div class=" card-container row">

      @foreach ($users as $user)

    <div class="col-sm-12 col-lg-3">

          <a href="/profile/{{ $user->id }}">
                <div class="card" style="width: 18rem">
                  <img src=" {{ $user->profile_pic }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class=" c-name card-text">{{ $user->name }}</p>
                 <p class=" c-country card-text">{{ $user->country }}  </p>
                 <p class="card-text">{{ $user->category }}  </p>
              </div>
            </div>
          </a>
    </div>
      @endforeach



  </div>




</div>


</div>


{{ $users->links() }}


@endsection
