
@include('layouts.bootstrap')


<div class="row" style="margin-top:10%">
    <div class="col-md-4 mb-3">
      <div class="card">
        <div class="card-body">
          <div class="d-flex flex-column align-items-center text-center">

            <div class="mt-3">
              <h4>user:</h4>
              <p class="text-secondary mb-1">{{ $user->firstname}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-8">
      <div class="card mb-3">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">Nom et prenom</h6>
            </div>
            <div class="col-sm-9 text-secondary">
            {{$user->lastname.' '.$user->firstname}}
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">Email</h6>
            </div>
            <div class="col-sm-9 text-secondary">
              {{ $user->email }}
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-12">
              <a class="btn btn-info " href="{{ route('user.index') }}">Revenir à la liste</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
