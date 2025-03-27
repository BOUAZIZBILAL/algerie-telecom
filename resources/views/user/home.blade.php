@extends('layouts.user')

@section('content')
<div class="bg-primary pt-10 pb-21"></div>
<div class="container-fluid mt-n22 px-6">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <!-- Page header -->
            <div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="mb-2 mb-lg-0">
                        <h3 class="mb-0  text-white">Bienvenue {{ ucfirst(Auth::user()->role) }}</h3>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
<!-- middle page -->
