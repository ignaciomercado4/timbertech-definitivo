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
        function clonarTablaSinCampoAcciones() {
            const originalTable = document.getElementById('elementoPDF');
            const cloneTable = originalTable.cloneNode(true);

            const rows = cloneTable.rows;
            for (let row of rows) {
                row.deleteCell(-1);
            }

            const container = document.createElement('div');
            container.appendChild(cloneTable);
            
            return container;
        }

        // crea y descarga el PDF
        document.getElementById('crearPDF').addEventListener('click', () => {
            const container = clonarTablaSinCampoAcciones();
            html2pdf().from(container).save();
        });

        
        // crea y descarga el XLSX
        function tablaAExcel(type) {
            const container = clonarTablaSinCampoAcciones();
            const table = container.querySelector('table');
            const workbook = XLSX.utils.table_to_book(table, {sheet: "sheet1"});
            XLSX.writeFile(workbook, 'produccion.' + type);
        }

        document.getElementById('crearXLSX').addEventListener('click', () => {
            tablaAExcel('xlsx');
        });

    </script>
@endsection
