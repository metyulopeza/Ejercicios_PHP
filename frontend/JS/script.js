// ============================================================
// script.js - menú lateral + carga de pantallas con fetch
//             + navegación por hash (#Ejercicio_40)
// ============================================================

// --- 1. Referencias a elementos del HTML ---
const btnMenu      = document.getElementById('btn_menu');
const menu         = document.getElementById('menu');
const contenido    = document.getElementById('contenido');
const enlaceInicio = menu.querySelector('.enlace-inicio');

// --- 2. Mostrar / ocultar el menú ---
btnMenu.addEventListener('click', () => {
    document.body.classList.toggle('menu-oculto');
});

// --- 3. Utilidades ---

// "frontend/Ejercicios/Ejercicio_40.html"  ->  "Ejercicio_40"
function slug(enlace) {
    return enlace.getAttribute('href').split('/').pop().replace('.html', '');
}

// Deja resaltado solo el enlace activo
function marcarActivo(enlace) {
    menu.querySelectorAll('a.activo').forEach(a => a.classList.remove('activo'));
    enlace.classList.add('activo');
}

// Abre las categorías (<details>) que contienen al enlace
function abrirCategorias(enlace) {
    let categoria = enlace.closest('details');
    while (categoria) {
        categoria.open = true;
        categoria = categoria.parentElement.closest('details');
    }
}

// --- 4. Cargar un fragmento HTML dentro de <main> ---
async function cargarEjercicio(url) {
    try {
        const resp = await fetch(url);
        if (!resp.ok) throw new Error(`HTTP ${resp.status}`);
        contenido.innerHTML = await resp.text();
        window.scrollTo({ top: 0 });
    } catch (err) {
        contenido.textContent = `No se pudo cargar (${err.message}).`;
    }
}

// --- 5. Navegación por hash ---

// Lee el hash de la URL y carga la pantalla que le corresponde
function cargarSegunHash() {
    const nombre  = location.hash.slice(1);                        // "#Ejercicio_40" -> "Ejercicio_40"
    const enlaces = Array.from(menu.querySelectorAll('a'));
    const enlace  = enlaces.find(a => slug(a) === nombre) || enlaceInicio;

    cargarEjercicio(enlace.getAttribute('href'));
    marcarActivo(enlace);
    abrirCategorias(enlace);
}

// El clic en el menú solo cambia la URL; la carga la dispara el hash
menu.addEventListener('click', (e) => {
    const enlace = e.target.closest('a');
    if (!enlace) return;
    e.preventDefault();

    const nombre = slug(enlace);
    if (location.hash === '#' + nombre) {
        cargarSegunHash();          // mismo hash: el navegador no avisa, recargamos a mano
    } else {
        location.hash = nombre;     // cambia la URL y dispara 'hashchange'
    }
});

// Se ejecuta con: clic en el menú, botón atrás, botón adelante
window.addEventListener('hashchange', cargarSegunHash);

// --- 6. Enviar formularios a PHP sin salir de la página ---
contenido.addEventListener('submit', async (e) => {
    e.preventDefault();
    const form   = e.target;
    const salida = contenido.querySelector('.resultado');

    try {
        const resp = await fetch(form.getAttribute('action'), {
            method: form.method || 'POST',
            body: new FormData(form)
        });
        if (!resp.ok) throw new Error(`HTTP ${resp.status}`);
        salida.textContent = await resp.text();
    } catch (err) {
        salida.textContent = `Error al procesar: ${err.message}`;
    }
});

// --- 7. Arranque: al abrir la página o pulsar F5 ---
cargarSegunHash();
