@extends('admin.layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Principal')

{{-- Content body: main page content --}}

@section('content_body')
<div class="container">
    <div class="h1 text-center">
        <p style="font-family: Bold">Panel Principal</p>
    </div>
    <div class="Bienvenida Card">
        <div class="col-lg-10 mb-4 order-0 mx-auto">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-black">Bienvenido {{auth()->user()->name}}!! 😎🎉</h5>
                            <p class="mb-2">
                                <br>Al sistema de administracion de tu Ecommerce2V. <br><br>Sistema desarrollado por Ximena.
                            </p>
                    
                            <a href="{{ config('app.company_url', '') }}" target="_blank" class="btn btn-sm btn-primary">Contactar con el Desarrollador</a>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img
                            src="{{ asset("img/panelcard.png") }}"
                            height="160"
                            alt="img del sistema"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cartas">
        <div class="row">
          <div class="col">
            <x-adminlte-small-box title="{{$suscritos}}" text="Suscritos" icon="fas fa-bullhorn text-dark"
                theme="success" url="{{route('suscritoWeb')}}" url-text="Ver SuscritosWeb"/>
          </div>
          <div class="col order-12">
            <x-adminlte-small-box title="{{$categorias}}" text="Categorias" icon="fas fa-boxes text-dark"
                theme="danger" url="{{route('categoria')}}" url-text="Ver registro Categorias"/>
          </div>
          <div class="col order-1">
            <x-adminlte-small-box title="{{$productos}}" text="Productos" icon="fas fa-archive text-dark"
                theme="info" url="{{route('producto')}}" url-text="Ver registro Productos"/>
          </div>
        </div>
    </div>
</div>
@stop

{{-- Push extra CSS --}}

@push('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@endpush

{{-- Push extra scripts --}}

@push('js')

@endpush