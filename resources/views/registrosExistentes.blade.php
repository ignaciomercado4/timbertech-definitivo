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
            <button class="btn mb-3" style="background-color: #7e1919; color: white;" id="crearXLSX">Descargar XLSX</button>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        @include('components.tablaRegistrosExistentes')    
    </div>

    {{-- link html2pdf --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    
    {{-- link html2xlsx --}}
    <script src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
    
    <script>
        // pasar tabla a pdf
        document.getElementById('crearPDF').addEventListener('click', () => {
            const element = document.getElementById('elementoPDF');
            html2pdf(element);
        });

        // pasar tabla a xlsx
        function tablaAExcel(type){
            let data = document.querySelector('#elementoPDF');

            let file = XLSX.utils.table_to_book(data, {sheet: "sheet1"});

            XLSX.write(file, { bookType: type, bookSST: true, type: 'base64' });

            XLSX.writeFile(file, 'produccion.' + type);
        }

        document.getElementById('crearXLSX').addEventListener('click', () =>  {
            tablaAExcel('xlsx');
        });

    </script>
@endsection
