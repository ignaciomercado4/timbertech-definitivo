@extends('layouts.basicLayout')

@section('title', 'Iniciar registro')

@section('content')
    <div class="row-12 text-center">
        <div class="col-12">
            <h1 class="h1 josefin mt-2">
                Registros creados:
            </h1>
            <hr>
            @include('components.filtros')
            <button class="btn mb-3" style="background-color: #296928; color: white;" id="crearPDF">Descargar PDF</button>
            <button class="btn mb-3" style="background-color: #7e1919; color: white;" id="crearPDF">Descargar CSV</button>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        @include('components.tablaRegistrosExistentes')    
    </div>

    {{-- link html2pdf --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    
    <script>
        document.getElementById('crearPDF').addEventListener('click', () => {
            const element = document.getElementById('elementoPDF');
            html2pdf(element);
        });
    </script>
@endsection
