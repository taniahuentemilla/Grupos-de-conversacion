@extends('welcome')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
    
					{{ \Session::get('email') }}

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

