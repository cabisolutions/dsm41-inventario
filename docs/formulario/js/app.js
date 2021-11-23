const plantilla = `# Plantilla casos de prueba

## Información
<table>
    <thead>
        <th>ID</th>
        <th>Fecha y hora</th>
        <th>Prioridad</th>
        <th>Tipo de prueba</th>
        <th>Clase</th>
        <th>Software utilizado</th>
    </thead>
    <tbody>
        <tr>
            <td>InformacionID</td>
            <td>InformacionFechaHora</td>
            <td>InformacionPrioridad</td>
            <td>InformacionTipoPrueba</td>
            <td>InformacionClase</td>
            <td>InformacionSoftware</td>
        </tr>
    </tbody>
</table>

## Prueba
<table>
    <thead>
        <th>Subsección</th>
        <th>Nombre</th>
        <th>Descripción</th>
    </thead>
    <tbody>
        <tr>
            <td>PruebaSubseccion</td>
            <td>PruebaNombre</td>
            <td>PruebaDescripcion</td>
        </tr>
    </tbody>
</table>


<table>
    <thead>
        <th>Precondiciones</th>
        <th>Datos de prueba</th>
        <th>Procedimiento</th>
    </thead>
    <tbody>
        <tr>
            <td>PruebaPreciondiciones</td>
            <td>PruebaDatosPrueba</td>
            <td>PruebaProcedimiento</td>
        </tr>
    </tbody>
</table>

## Resultado

<table>
    <thead>
        <th>Esperado</th>
        <th>Actual</th>
        <th>Estatus</th>
    </thead>
    <tbody>
        <tr>
            <td>ResultadoEsperado</td>
            <td>ResultadoActual</td>
            <td>ResultadoEstatus</td>
        </tr>
    </tbody>
</table>

## Notas
ResultadoNotas`;

const btnObtenerMD = document.getElementById('btnObtenerMD');
const btnObtenerImagen = document.getElementById('btnObtenerImagen');

btnObtenerMD.addEventListener('click', (e) => {
    // Obtener caso de prueba
    var casoPrueba = obtenerCasoPrueba();

    var nombre = `${document.getElementById('estatus').selectedOptions[0].value}_${document.getElementById('nombre').value}`;

    // Descargar md
    download(`${nombre}.md`, casoPrueba);
});


btnObtenerImagen.addEventListener('click', (e) => {

    // Obtener caso de prueba
    var casoPrueba = obtenerCasoPrueba();

    // Crear imagen
    var converter = new showdown.Converter(),
        html = converter.makeHtml(casoPrueba);

    casoPrueba = String(html);
    casoPrueba = `<div class="container mx-auto py-10"> ${casoPrueba} </div>`;

    var element = document.getElementById('md');
    element.innerHTML = casoPrueba;

    var tablas = element.getElementsByTagName('table');
    var ths = element.getElementsByTagName('th');
    var tds = element.getElementsByTagName('td');
    var h1s = element.getElementsByTagName('h1');
    var h2s = element.getElementsByTagName('h2');

    var nombre = `${document.getElementById('estatus').selectedOptions[0].value}_${document.getElementById('nombre').value}`;

    for (const tabla of tablas) {
        tabla.classList.add('table-fixed');
        tabla.classList.add('w-full');
        tabla.classList.add('text-left');
        tabla.classList.add('border-collapse');
        tabla.classList.add('border');
        tabla.classList.add('border-gray-200');
        tabla.classList.add('mb-4');
    }

    for (const th of ths) {
        th.classList.add('border');
        th.classList.add('border-gray-200');
        th.classList.add('px-3');
        th.classList.add('py-2');
    }

    for (const td of tds) {
        td.classList.add('border');
        td.classList.add('border-gray-200');
        td.classList.add('px-3');
        td.classList.add('py-2');
    }

    for (const h1 of h1s) {
        h1.classList.add('inline-block');
        h1.classList.add('text-3xl');
        h1.classList.add('font-extrabold');
        h1.classList.add('text-gray-900');
        h1.classList.add('tracking-tight');
        h1.classList.add('mb-4');
    }

    for (const h2 of h2s) {
        h2.classList.add('text-2xl');
        h2.classList.add('text-gray-800');
        h2.classList.add('tracking-tight');
        h2.classList.add('mb-3');
    }

    crearImagen(element, nombre);
});

function obtenerCasoPrueba() {
    // Nuevo caso prueba
    var casoPrueba = plantilla;

    // Información
    casoPrueba = casoPrueba.replace(/InformacionID/g, document.getElementById('id').value);
    casoPrueba = casoPrueba.replace(/InformacionFechaHora/g, document.getElementById('fechaHora').value);
    casoPrueba = casoPrueba.replace(/InformacionPrioridad/g, document.getElementById('prioridad').selectedOptions[0].value);
    casoPrueba = casoPrueba.replace(/InformacionTipoPrueba/g, document.getElementById('tipoPrueba').value);
    casoPrueba = casoPrueba.replace(/InformacionClase/g, document.getElementById('clase').selectedOptions[0].value);
    casoPrueba = casoPrueba.replace(/InformacionSoftware/g, document.getElementById('software').value);

    // Prueba
    casoPrueba = casoPrueba.replace(/PruebaSubseccion/g, document.getElementById('subseccion').value);

    var nombre = document.getElementById('nombre').value;
    nombre = nombre.replace(/\n\r?/g, '<br />');

    casoPrueba = casoPrueba.replace(/PruebaNombre/g, nombre)    ;

    // Descriocion
    var descripcion = document.getElementById('descripcion').value;
    descripcion = descripcion.replace(/\n\r?/g, '<br />');

    casoPrueba = casoPrueba.replace(/PruebaDescripcion/g, descripcion);

    // Precondiciones
    var precondiciones = document.getElementById('precondiciones').value;
    precondiciones = precondiciones.replace(/\n\r?/g, '<br />');

    casoPrueba = casoPrueba.replace(/PruebaPreciondiciones/g, precondiciones);

    // Datos prueba
    var datosPrueba = document.getElementById('datosPrueba').value;
    datosPrueba = datosPrueba.replace(/\n\r?/g, '<br />');

    casoPrueba = casoPrueba.replace(/PruebaDatosPrueba/g, datosPrueba);

    // Procedimiento
    var procedimiento = document.getElementById('procedimiento').value;
    procedimiento = procedimiento.replace(/\n\r?/g, '<br />');

    casoPrueba = casoPrueba.replace(/PruebaProcedimiento/g, procedimiento);

    // Resultado

    // Esperado
    var esperado = document.getElementById('esperado').value;
    esperado = esperado.replace(/\n\r?/g, '<br />');

    casoPrueba = casoPrueba.replace(/ResultadoEsperado/g, esperado);

    // Actual
    var actual = document.getElementById('actual').value;
    actual = actual.replace(/\n\r?/g, '<br />');
    casoPrueba = casoPrueba.replace(/ResultadoActual/g, actual);
    
    casoPrueba = casoPrueba.replace(/ResultadoEstatus/g, document.getElementById('estatus').selectedOptions[0].value);

    // Notas
    var notas = document.getElementById('notas').value;
    notas = notas.replace(/\n\r?/g, '<br />');
    
    casoPrueba = casoPrueba.replace(/ResultadoNotas/g, notas);

    return casoPrueba;
}


async function crearImagen(html, nombre) {
    html2canvas(html).then(function (canvas) {
        var link = document.createElement("a");
        document.body.appendChild(link);
        link.download = `${nombre}.jpg`;
        link.href = canvas.toDataURL();
        link.target = '_blank';
        link.click();
        document.body.removeChild(link);
        html.innerHTML = '';
    });
}


function download(nombreArchivo, text) {
    var element = document.createElement('a');
    element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(text));
    element.setAttribute('download', nombreArchivo);
    element.style.display = 'none';
    document.body.appendChild(element);
    element.click();
    document.body.removeChild(element);
}

