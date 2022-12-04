@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Agrega reserva) }}</div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf

                        <div class="row mb-3"> 
                            <label for="cantidad" class="col-md-4 col-form-label text-md-end">{{ __('cantidad') }}</label>

                            <div class="col-md-6">
                                <input id="cantidad" type="number" class="form-control @error('cantidad') is-invalid @enderror" name="cantidad" value="{{ old('cantidad') }}" required autocomplete="cantidad" autofocus>

                                @error('cantidad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="monto" class="col-md-4 col-form-label text-md-end">{{ __('monto') }}</label>

                            <div class="col-md-6">
                                <input id="monto" type="number" class="form-control @error('monto') is-invalid @enderror" name="monto" value="{{ old('monto') }}" required autocomplete="monto">

                                @error('monto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="fecha_inicio" class="col-md-4 col-form-label text-md-end">{{ __('fecha_inicio') }}</label>

                            <div class="col-md-6">
                                <input id="fecha_inicio" type="date" class="form-control @error('fecha_inicio') is-invalid @enderror" name="fecha_inicio" value="{{ old('fecha_inicio') }}" required autocomplete="fecha_inicio">

                                @error('fecha_inicio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="fecha_fin" class="col-md-4 col-form-label text-md-end">{{ __('fecha_fin') }}</label>

                            <div class="col-md-6">
                                <input id="fecha_fin" type="date" class="form-control @error('fecha_fin') is-invalid @enderror" name="fecha_fin" value="{{ old('fecha_fin') }}" required autocomplete="fecha_fin">
                                @error('fecha_fin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="n_dias" class="col-md-4 col-form-label text-md-end">{{ __('n_dias') }}</label>

                            <div class="col-md-6">
                                <input id="n_dias" type="number" class="form-control @error('n_dias') is-invalid @enderror" name="n_dias" value="{{ old('n_dias') }}" required autocomplete="n_dias">
                                @error('n_dias')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="precio_tot" class="col-md-4 col-form-label text-md-end">{{ __('precio_tot') }}</label>

                            <div class="col-md-6">
                                <input id="precio_tot" type="number" class="form-control @error('precio_tot') is-invalid @enderror" name="precio_tot" value="{{ old('precio_tot') }}" required autocomplete="precio_tot">
                                @error('precio_tot')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="room_id" class="col-md-4 col-form-label text-md-end">{{ __('room_id') }}</label>

                            <div class="col-md-6">
                                <input id="room_id" type="number" class="form-control @error('room_id') is-invalid @enderror" name="room_id" value="{{ old('room_id') }}" required autocomplete="room_id">
                                @error('room_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="user_id" class="col-md-4 col-form-label text-md-end">{{ __('user_id') }}</label>

                            <div class="col-md-6">
                                <input id="user_id" type="number" class="form-control @error('user_id') is-invalid @enderror" name="user_id" value="{{ old('user_id') }}" required autocomplete="user_id">
                                @error('user_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="customer_id" class="col-md-4 col-form-label text-md-end">{{ __('customer_id') }}</label>

                            <div class="col-md-6">
                                <input id="customer_id" type="number" class="form-control @error('customer_id') is-invalid @enderror" name="customer_id" value="{{ old('customer_id') }}" required autocomplete="customer_id">
                                @error('customer_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   < {{ __('bookings') }} >
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
