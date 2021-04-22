@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">About of {{ Auth::user()->name }}</div>

                <div class="card-body">
                   
<ol>
    <li>{{ Auth::user()->id }}</li>
    <li>{{ Auth::user()->name }}</li>
    <li>{{ Auth::user()->email }}</li>
</ol>
                    
                    
                    
                        
                    

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
