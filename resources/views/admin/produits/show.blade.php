
@include('layouts.bootstrap')

          <div class="row" style="margin-top:10%">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="/photos/{{ $etudiant->photo }}" alt="Admin" class="rounded-circle" height="150" width="150">
                    <div class="mt-3">
                      <h4>Etudiant:</h4>
                      <p class="text-secondary mb-1">{{ $etudiant->firstname}}</p>
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
                    {{$etudiant->name.' '.$etudiant->firstname}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $etudiant->email }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " href="{{ route('etudiants.index') }}">Revenir à la liste</a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>




