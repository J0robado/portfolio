const linkIn = document.getElementById("myInput");

function setLink(){
    linkIn.value = window.location.href;
}

function copyToClipboard() {
    let input = document.querySelector(".d-field input");
    let label = document.querySelector(".d-field span");
    input.select();
    input.setSelectionRange(0, 99999);
    document.execCommand("copy");
    label.innerHTML = "Copiado!";
}

function share() {
    if (navigator.share) {
        navigator.share({
            text: 'Mira mi portfolio',
            url:  window.location.href,
        })
        .then(() => console.log('Éxito en compartir'))
        .catch((error) => console.log('Error al compartir', error));
    } else {
        console.log('La API de compartir no está soportada en tu navegador');
    }
}

const shBtn = document.getElementById('shbtn');
const bg = document.querySelector('.bg');
const modal = document.querySelector('.share-cont');
const clmod = document.querySelector('#cl-m');

shBtn.onclick =()=>{
    modal.classList.toggle('show');
}

bg.onclick =()=>{
    modal.classList.toggle('show');
}

clmod.onclick =()=>{
    modal.classList.toggle('show');
}

const qrContainer = document.querySelector("#qr-code");

let colorLight = "#ffffff", // Fondo
    colorDark = "#000000",  // Color de los puntos
    text = window.location.href,
    size = 500;

// Función para generar el QR
function generateQRCode() {
    const options = {
        text: text,
        width: size,
        height: size,
        colorDark: colorDark,
        colorLight: colorLight,
        quietZone: 10, // Espaciado alrededor del QR
        logo: "img/favicon.png", // Agregar un logo
        logoBackgroundTransparent: true, // Fondo transparente en logo
        dotScale: 1, // Escala de los puntos del QR        
        // 🔹 Personalizar los "ojos" del QR
        PO: "#f15a24", // Color de los ojos exteriores
        PI: "#f15a24" 
    };

    // Limpiar contenido previo
    qrContainer.innerHTML = "";

    // Generar QR en el contenedor
    new QRCode(qrContainer, options);
}

// Función para obtener la imagen en DataURL
function resolveDataUrl() {
    return new Promise((resolve) => {
        setTimeout(() => {
            const canvas = qrContainer.querySelector("canvas");
            resolve(canvas.toDataURL("image/png"));
        }, 50);
    });
}

setLink();
generateQRCode();