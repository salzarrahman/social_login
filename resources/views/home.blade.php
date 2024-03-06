@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container d-flex justify-content-center align-items-center">

                        <div class="card">



                         <div class="user text-center">

                           <div class="profile">

                             <img src="{{ Session::get('avatar') }}" class="rounded-circle" width="80">

                           </div>

                         </div>


                         <div class="mt-5 text-center">

                           <h4 class="mb-0">{{ Session::get('name') }}</h4>
                           <span class="text-muted d-block mb-2">{{ Session::get('nik_name') }}</span>

                           <button class="btn btn-primary btn-sm follow">Follow</button>


                           <div class="d-flex justify-content-between align-items-center mt-4 px-4">

                             <div class="stats">
                               <h6 class="mb-0">Followers</h6>
                               <span>8,797</span>

                             </div>


                             <div class="stats">
                               <h6 class="mb-0">Projects</h6>
                               <span>142</span>

                             </div>


                             <div class="stats">
                               <h6 class="mb-0">Ranks</h6>
                               <span>129</span>

                             </div>

                           </div>

                         </div>

                        </div>

                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
