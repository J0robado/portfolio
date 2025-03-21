const hoverableElements = document.querySelectorAll('.cube');
let max = hoverableElements.length;

document.addEventListener('DOMContentLoaded', function() {
    const customCursor = document.getElementById('custom-cursor');

    document.addEventListener('mousemove', function(e) {
        customCursor.style.left = `${e.clientX - customCursor.offsetWidth / 2}px`;
        customCursor.style.top = `${e.clientY - customCursor.offsetHeight / 2}px`;
    });

    document.addEventListener('mousemove', function(e) {
        hoverableElements.forEach(el => {
            const rect = el.getBoundingClientRect();
            const cursorRect = customCursor.getBoundingClientRect();
            if (!(cursorRect.right < rect.left ||
                  cursorRect.left > rect.right ||
                  cursorRect.bottom < rect.top ||
                  cursorRect.top > rect.bottom)) {
                el.classList.add('hover');
            } else {
                el.classList.remove('hover');
            }
        });
    });

    setInterval(function() {
        numeroAleatorio(max);
    }, 2000);
});

function numeroAleatorio(max) {
    let indice = Math.floor(Math.random() * max); 
    hoverableElements[indice].classList.add('hover');
    setTimeout(function() {
        hoverableElements[indice].classList.remove('hover');
    }, 2000);
    setTimeout(function() {
        let indice2 = Math.floor(Math.random() * max); 
        hoverableElements[indice2].classList.add('hover');
        setTimeout(function() {
            hoverableElements[indice2].classList.remove('hover');
        }, 2000);
    }, 500);

}
