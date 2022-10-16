@extends('layout.admin')

@section('content')
<div class="container">
    <div id="dashbcolor" class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body dash">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Efetuou o login com sucesso') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
