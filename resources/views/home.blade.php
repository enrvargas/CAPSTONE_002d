@extends('tablar::page')

@section('content')

<link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Overview
                    </div>
                    <h1 class="page-title">
                        PCTweezers
                    </h1>
                </div>
                <!-- Page title actions -->
    
                <div class="col-12 col-md-auto ms-auto d-print-none text-center">
                    <div class="btn-list">
                        <a href="{{ route('unascitas.create') }}" class="btn btn-primary btn-lg">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <line x1="12" y1="5" x2="12" y2="19"/>
                                <line x1="5" y1="12" x2="19" y2="12"/>
                            </svg>
                            Crear Cita
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Quiénes somos -->
     <br>
     <br>
     <br>
     <div style="text-align: center; margin-top: 40px;">
        <h2>¿Quiénes somos?</h2>
        <br>
        <p>En PCTweezers, somos una plataforma dedicada a conectar a personas con técnicos expertos en areas de la informatica. Nuestra misión es </p>
        <p>facilitar la búsqueda y programación de citas con técnicos calificados para resolver problemas con tus computadores.</p>
        <p>Nos enorgullece ofrecer un servicio de calidad, asegurando que cada usuario encuentre la solución que necesita de manera rápida y eficiente.</p>
       
    </div>

    <!-- Ventajas -->
     <br>
     <br>
     <br>
    <div class="container-xl mt-5">
        <h2 class="text-center mb-4">¿Por qué elegirnos?</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-lg mb-3" width="36" height="36"
                             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <circle cx="12" cy="12" r="9"/>
                            <polyline points="9 12 12 15 15 9"/>
                        </svg>
                        <h4>Profesionales calificados</h4>
                        <p>Todos nuestros técnicos están certificados y cuentan con amplia experiencia.</p><br><br><br><br><br>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-lg mb-3" width="36" height="36"
                             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <rect x="3" y="4" width="18" height="16" rx="3"/>
                            <circle cx="9" cy="10" r="2"/>
                            <line x1="15" y1="8" x2="17" y2="8"/>
                            <line x1="15" y1="12" x2="17" y2="12"/>
                            <line x1="7" y1="16" x2="17" y2="16"/>
                        </svg>
                        <h4>Facilidad de uso</h4>
                        <p>Con nuestra plataforma, agendar una cita es rápido y sencillo.</p><br><br><br><br><br>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-lg mb-3" width="36" height="36"
                             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M12 3v18"/>
                            <path d="M12 7l4 4-4 4-4-4z"/>
                        </svg>
                        <h4>Soporte continuo</h4>
                        <p>Brindamos soporte durante y después del servicio para garantizar tu satisfacción.</p><br><br><br><br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection