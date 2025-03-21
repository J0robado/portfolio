<?php
    $url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $site = "https://$_SERVER[HTTP_HOST]";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/cube.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Martín Muñoz | Desarrollador Web</title>
</head>
<body class="dark-theme">
    <main>
        <div class="share-cont">
            <div class="bg"></div>
            <div class="modal">
                <i class='bx bx-x' id="cl-m"></i>
                <div class="qr">
                    <div class="qr-cont">
                        <div id="qr-code"></div>
                    </div>
                </div>
                <ul>
                    <li><a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>" target="_blank"><i class='bx bxl-facebook-square'></i></a></li>
                    <li><a class="whatsapp" href="https://api.whatsapp.com/send?text=<?php echo $url; ?>" target="_blank"><i class='bx bxl-whatsapp' ></i></a></li>
                    <li><a class="mail" href="mailto:?subject=Mira%20mi%20tarjeta&body=<?php echo $url; ?>" target="_blank"><i class='bx bxs-envelope'></i></a></li>
                    <li><a onclick="share()"><i class='bx bx-export'></i></a></li>
                </ul>
                <div class="d-field" onclick="copyToClipboard()">
                    <input type="text" value="<?php echo $url ?>" id="myInput">
                    <span>Copiar</span>
                </div>
            </div>
        </div>
        <div class="actions">
            <div class="button" id="scrollUpBtn" style="opacity: 0; visibility: hidden;"><i class='bx bx-up-arrow-alt'></i></div>
            <div class="button" id="theme-button"><i class='bx bx-moon'></i></div>
            <div class="button" id="shbtn"><i class='bx bx-share-alt'></i></div>
        </div>
        <section class="home">
            <img class="profile" src="img/perfil.avif" alt="Desarrollador web">
            <div class="txt" id="my-details">
                <h1>Martín Muñoz</h1>
                <span><strong>Diseñador / Desarrollador Web</strong><p>de día... <i>y de noche también</i></p></span>
                <p id="yo">
                    Con más de 3 años de experiencia creando herramientas personalizadas Full Responsive en código nativo. 
                    Me especializo en soluciones eficientes y adaptadas a las necesidades de cada proyecto.
                </p>
                <div class="social">
                    <a href="mailto:martincamino3@gmail.com"><i data-lucide="mail"></i>Contáctame</a>
                </div>
            </div>
        </section>

        <section class="blank">
            <div class="block no-pad grid cl-2">
                <div class="txt" id="block-details">
                    <h2 class="urbanist"><i>Habilidades</i></h2>
                    <p>
                        Con estas tecnologías <i data-lucide="move-up"></i><br>desarrollé los siguientes proyectos<br>
                        (Mi top 10):
                    </p>
                    <i data-lucide="move-down-right" id="arrow-to-p"></i>
                </div>
                <div class="cubes-container">
                    <div id="custom-cursor"></div>
                    <div class="bg">
                        <div class="cubes-row">
                            <div class="cubes-wrap">
                                <div class="cube no-hover">
                                    <div class="front">
                                        <span class="first"></span>
                                        <span class="second"></span>
                                    </div>
                                    <div class="back"></div>
                                    <div class="top">
                                        <span class="first"></span>
                                        <span class="second"></span>
                                        <span class="third"></span>
                                        <span class="fourth"></span>
                                    </div>
                                    <div class="bottom"></div>
                                    <div class="left">
                                        <span class="first"></span>
                                        <span class="second"></span>
                                    </div>
                                    <div class="right"></div>
                                </div>
                            </div>
                            <div class="cubes-wrap">
                                <div class="cube no-hover">
                                    <div class="front">
                                        <span class="first"></span>
                                        <span class="second"></span>
                                    </div>
                                    <div class="back"></div>
                                    <div class="top">
                                        <span class="first"></span>
                                        <span class="second"></span>
                                        <span class="third"></span>
                                        <span class="fourth"></span>
                                    </div>
                                    <div class="bottom"></div>
                                    <div class="left">
                                        <span class="first"></span>
                                        <span class="second"></span>
                                    </div>
                                    <div class="right"></div>
                                </div>
                            </div>
                            <div class="cubes-wrap">
                                <div class="cube no-hover">
                                    <div class="front">
                                        <span class="first"></span>
                                        <span class="second"></span>
                                    </div>
                                    <div class="back"></div>
                                    <div class="top">
                                        <span class="first"></span>
                                        <span class="second"></span>
                                        <span class="third"></span>
                                        <span class="fourth"></span>
                                    </div>
                                    <div class="bottom"></div>
                                    <div class="left">
                                        <span class="first"></span>
                                        <span class="second"></span>
                                    </div>
                                    <div class="right"></div>
                                </div>
                            </div>
                        </div>
                        <div class="cubes-row">
                            <div class="cubes-wrap">
                                <div class="cube no-hover">
                                    <div class="front">
                                        <span class="first"></span>
                                        <span class="second"></span>
                                    </div>
                                    <div class="back"></div>
                                    <div class="top">
                                        <span class="first"></span>
                                        <span class="second"></span>
                                        <span class="third"></span>
                                        <span class="fourth"></span>
                                    </div>
                                    <div class="bottom"></div>
                                    <div class="left">
                                        <span class="first"></span>
                                        <span class="second"></span>
                                    </div>
                                    <div class="right"></div>
                                </div>
                            </div>
                            <div class="cubes-wrap">
                                <div class="cube" style="--border: #e5532d;">
                                    <div class="front">
                                        <span class="first"></span>
                                        <span class="second"></span>
                                    </div>
                                    <div class="back"></div>
                                    <div class="top" style="--cube-top: #FFFFFF;">
                                        <i class='bx bxl-html5' style="color: #e5532d;"></i>
                                        <span class="first"></span>
                                        <span class="second"></span>
                                        <span class="third"></span>
                                        <span class="fourth"></span>
                                    </div>
                                    <div class="bottom"></div>
                                    <div class="left">
                                        <span class="first"></span>
                                        <span class="second"></span>
                                    </div>
                                    <div class="right"></div>
                                </div>
                            </div>
                            <div class="cubes-wrap">
                                <div class="cube" style="--border: #1f79bd;">
                                    <div class="front">
                                        <span class="first"></span>
                                        <span class="second"></span>
                                    </div>
                                    <div class="back"></div>
                                    <div class="top" style="--cube-top: #FFFFFF;">
                                        <i class='bx bxl-css3' style="color: #1f79bd;"></i>
                                        <span class="first"></span>
                                        <span class="second"></span>
                                        <span class="third"></span>
                                        <span class="fourth"></span>
                                    </div>
                                    <div class="bottom"></div>
                                    <div class="left">
                                        <span class="first"></span>
                                        <span class="second"></span>
                                    </div>
                                    <div class="right"></div>
                                </div>
                            </div>
                            <div class="cubes-wrap">
                                <div class="cube no-hover">
                                    <div class="front">
                                        <span class="first"></span>
                                        <span class="second"></span>
                                    </div>
                                    <div class="back"></div>
                                    <div class="top">
                                        <span class="first"></span>
                                        <span class="second"></span>
                                        <span class="third"></span>
                                        <span class="fourth"></span>
                                    </div>
                                    <div class="bottom"></div>
                                    <div class="left">
                                        <span class="first"></span>
                                        <span class="second"></span>
                                    </div>
                                    <div class="right"></div>
                                </div>
                            </div>
                        </div>
                        <div class="cubes-row">
                            <div class="cubes-wrap">
                                <div class="cube second" style="--border: #252525;">
                                    <div class="front">
                                        <span class="first"></span>
                                        <span class="second"></span>
                                    </div>
                                    <div class="back"></div>
                                    <div class="top" style="--cube-top: #252525;">
                                        <i class="icon" style="--icon-size: 9rem; --stroke: #FFFFFF;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 5.5A3.5 3.5 0 0 1 8.5 2H12v7H8.5A3.5 3.5 0 0 1 5 5.5z"/><path d="M12 2h3.5a3.5 3.5 0 1 1 0 7H12V2z"/><path d="M12 12.5a3.5 3.5 0 1 1 7 0 3.5 3.5 0 1 1-7 0z"/><path d="M5 19.5A3.5 3.5 0 0 1 8.5 16H12v3.5a3.5 3.5 0 1 1-7 0z"/><path d="M5 12.5A3.5 3.5 0 0 1 8.5 9H12v7H8.5A3.5 3.5 0 0 1 5 12.5z"/></svg>
                                        </i>
                                        <span class="first"></span>
                                        <span class="second"></span>
                                        <span class="third"></span>
                                        <span class="fourth"></span>
                                    </div>
                                    <div class="bottom"></div>
                                    <div class="left">
                                        <span class="first"></span>
                                        <span class="second"></span>
                                    </div>
                                    <div class="right"></div>
                                </div>
                            </div>
                            <div class="cubes-wrap">
                                <div class="cube" style="--border: #ecda1d;">
                                    <div class="front">
                                        <span class="first"></span>
                                        <span class="second"></span>
                                    </div>
                                    <div class="back"></div>
                                    <div class="top" style="--cube-top: #FFFFFF;">
                                        <i class='bx bxl-javascript' style="color: #ecda1d;"></i>
                                        <span class="first"></span>
                                        <span class="second"></span>
                                        <span class="third"></span>
                                        <span class="fourth"></span>
                                    </div>
                                    <div class="bottom"></div>
                                    <div class="left">
                                        <span class="first"></span>
                                        <span class="second"></span>
                                    </div>
                                    <div class="right"></div>
                                </div>
                            </div>
                            <div class="cubes-wrap">
                                <div class="cube second" style="--border: #ff9a00;">
                                    <div class="front">
                                        <span class="first"></span>
                                        <span class="second"></span>
                                    </div>
                                    <div class="back"></div>
                                    <div class="top" style="--cube-top: #300;">
                                        <i class='icon' style="--icon-size: 9rem;">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.45 498.66"><defs><style>.a{fill:#300;}.b{fill:#ff9a00;}</style></defs><title>adobe-illustrator</title><rect class="a" width="511.45" height="498.66" rx="90.57"/><path class="b" d="M247.84,299.26H168.58l-16.12,50.09a4,4,0,0,1-4.12,3.09H108.2q-3.44,0-2.4-3.78L174.42,151q1-3.09,2.06-7a74.51,74.51,0,0,0,1.37-13.9,2.11,2.11,0,0,1,1.8-2.4,2,2,0,0,1,.6,0H234.8c1.6,0,2.51.57,2.75,1.71L315.43,349c.69,2.28,0,3.43-2.06,3.43h-44.6a3.17,3.17,0,0,1-3.43-2.4ZM180.94,256h54.2q-2.05-6.87-4.8-15.44t-5.83-18.36l-6.18-19.55q-3.09-9.78-5.66-18.88T208,167.17h-.34a276.76,276.76,0,0,1-7.21,27.44q-4.8,15.45-9.78,31.57T180.94,256Z"/><path class="b" d="M361.74,164.08a24.9,24.9,0,0,1-18.87-7.55,27.12,27.12,0,0,1-7.2-19.56,25.17,25.17,0,0,1,7.72-19,26.52,26.52,0,0,1,19-7.38q12.35,0,19.38,7.38a26.52,26.52,0,0,1,7,19,26.78,26.78,0,0,1-7.38,19.56A26.32,26.32,0,0,1,361.74,164.08ZM338.07,349V185c0-2.06.91-3.09,2.74-3.09H383c1.82,0,2.74,1,2.74,3.09V349c0,2.28-.91,3.43-2.74,3.43H341.16C339.1,352.44,338.07,351.29,338.07,349Z"/></svg>
                                        </i>
                                        <span class="first"></span>
                                        <span class="second"></span>
                                        <span class="third"></span>
                                        <span class="fourth"></span>
                                    </div>
                                    <div class="bottom"></div>
                                    <div class="left">
                                        <span class="first"></span>
                                        <span class="second"></span>
                                    </div>
                                    <div class="right"></div>
                                </div>
                            </div>
                        </div>
                        <div class="cubes-row">
                            <div class="cubes-wrap">
                                <div class="cube no-hover">
                                    <div class="front">
                                        <span class="first"></span>
                                        <span class="second"></span>
                                    </div>
                                    <div class="back"></div>
                                    <div class="top">
                                        <span class="first"></span>
                                        <span class="second"></span>
                                        <span class="third"></span>
                                        <span class="fourth"></span>
                                    </div>
                                    <div class="bottom"></div>
                                    <div class="left">
                                        <span class="first"></span>
                                        <span class="second"></span>
                                    </div>
                                    <div class="right"></div>
                                </div>
                            </div>
                            <div class="cubes-wrap">
                                <div class="cube" style="--border: #834bb2;">
                                    <div class="front">
                                        <span class="first"></span>
                                        <span class="second"></span>
                                    </div>
                                    <div class="back"></div>
                                    <div class="top" style="--cube-top: #FFFFFF;">
                                        <i class='bx bxl-php' style="color: #834bb2;"></i>
                                        <span class="first"></span>
                                        <span class="second"></span>
                                        <span class="third"></span>
                                        <span class="fourth"></span>
                                    </div>
                                    <div class="bottom"></div>
                                    <div class="left">
                                        <span class="first"></span>
                                        <span class="second"></span>
                                    </div>
                                    <div class="right"></div>
                                </div>
                            </div>
                            <div class="cubes-wrap">
                                <div class="cube" style="--border: #4a7da4;">
                                    <div class="front">
                                        <span class="first"></span>
                                        <span class="second"></span>
                                    </div>
                                    <div class="back"></div>
                                    <div class="top" style="--cube-top: #FFFFFF;">
                                        <i class='icon' style="--icon-size: 9rem;">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 204.8 105.765"><script xmlns=""/><path d="M0 96.334h6.747V69.7l10.445 23.227c1.232 2.8 2.92 3.806 6.228 3.806s4.93-.995 6.164-3.806L40.03 69.7v26.644h6.748v-26.6c0-2.595-1.04-3.85-3.18-4.498-5.125-1.6-8.564-.216-10.12 3.244l-10.25 22.923L13.3 68.48c-1.492-3.46-4.995-4.844-10.12-3.244C1.038 65.885 0 67.14 0 69.734v26.6zm52.386-21.686h6.745v14.68c-.063.798.256 2.67 3.952 2.727 1.886.03 14.554 0 14.672 0v-17.48h6.76c.03 0-.007 23.834-.006 23.936.037 5.878-7.294 7.155-10.672 7.254H52.533v-4.54l21.342-.001c4.342-.46 3.83-2.617 3.83-3.344v-1.77h-14.34c-6.672-.06-10.92-2.973-10.973-6.323-.005-.3.144-14.995-.004-15.14z" fill="#00618a"/><path d="M89.716 96.334h19.398c2.27 0 4.477-.475 6.23-1.298 2.92-1.34 4.347-3.157 4.347-5.536v-4.93c0-1.947-1.622-3.763-4.8-4.974-1.687-.65-3.763-.995-5.774-.995h-8.175c-2.724 0-4.022-.822-4.346-2.638-.065-.216-.065-.4-.065-.606v-3.07c0-.173 0-.347.065-.563.324-1.384 1.038-1.774 3.438-2 .195 0 .454-.044.65-.044h19.268v-4.497h-18.944c-2.725 0-4.152.173-5.45.562C91.532 67 89.78 69 89.78 72.46v3.936c0 3.028 3.44 5.623 9.212 6.228.65.043 1.298.086 1.946.086h7.007c.26 0 .52 0 .714.044 2.14.173 3.05.562 3.698 1.34.4.4.52.78.52 1.2v3.936c0 .476-.324 1.082-.973 1.6-.584.52-1.557.865-2.855.952-.26 0-.454.043-.713.043h-18.62v4.498zm72.064-7.828c0 4.628 3.438 7.223 10.38 7.742a29.45 29.45 0 0 0 1.946.086h17.582v-4.498h-17.712c-3.957 0-5.45-.995-5.45-3.374v-23.27h-6.747v23.312zm-37.785.234V72.705c0-4.074 2.86-6.545 8.516-7.325a12.94 12.94 0 0 1 1.821-.13h12.807a13.87 13.87 0 0 1 1.886.13c5.656.78 8.516 3.25 8.516 7.325V88.74c0 3.305-1.215 5.074-4.015 6.227l6.646 6h-7.834l-5.377-4.854-5.413.343h-7.216c-1.235 0-2.535-.174-3.966-.564-4.3-1.17-6.37-3.424-6.37-7.152zm7.283-.4c0 .217.065.433.13.694.4 1.864 2.145 2.904 4.8 2.904h6.13l-5.63-5.083h7.834l4.9 4.433c.905-.482 1.5-1.22 1.7-2.167.065-.216.065-.433.065-.65V73.096c0-.173 0-.4-.065-.607-.4-1.733-2.146-2.73-4.746-2.73H136.22c-3 0-4.94 1.3-4.94 3.337v15.256z" fill="#e48e00"/><g fill="#00618a"><path d="M197.624 57.73c-4.147-.112-7.316.273-10.024 1.415-.77.325-1.997.333-2.123 1.298.423.443.49 1.105.825 1.65.647 1.047 1.74 2.45 2.713 3.184 1.064.803 2.16 1.663 3.303 2.36 2.03 1.238 4.296 1.945 6.25 3.184 1.152.73 2.296 1.65 3.42 2.476.555.408.93 1.042 1.65 1.297v-.118c-.38-.483-.477-1.147-.825-1.65l-1.533-1.533c-1.5-2-3.402-3.737-5.425-5.19-1.613-1.158-5.224-2.722-5.897-4.6l-.118-.118c1.144-.13 2.483-.543 3.54-.825 1.773-.475 3.358-.353 5.19-.825l2.477-.708v-.472c-.926-.95-1.586-2.207-2.595-3.066-2.64-2.25-5.523-4.495-8.49-6.37-1.646-1.04-3.68-1.714-5.425-2.595-.587-.296-1.618-.45-2.005-.944-.916-1.168-1.415-2.65-2.122-4-1.48-2.85-2.934-5.964-4.246-8.963-.895-2.045-1.48-4.062-2.594-5.897-5.355-8.804-11.12-14.118-20.048-19.34-1.9-1.11-4.187-1.55-6.605-2.123l-3.892-.236c-.792-.33-1.616-1.3-2.36-1.77-2.958-1.87-10.545-5.933-12.736-.6-1.383 3.373 2.067 6.664 3.302 8.374.866 1.2 1.976 2.543 2.594 3.892.407.886.478 1.775.826 2.713.857 2.3 1.603 4.823 2.712 6.958.56 1.08 1.178 2.218 1.887 3.184.435.593 1.18.854 1.297 1.77-.728 1.02-.77 2.6-1.18 3.892-1.843 5.812-1.148 13.035 1.533 17.337.823 1.32 2.76 4.152 5.425 3.066 2.33-.95 1.8-3.89 2.477-6.486.15-.59.058-1.02.354-1.415v.118l2.123 4.245c1.57 2.53 4.36 5.175 6.722 6.96 1.225.925 2.2 2.525 3.774 3.066v-.118h-.118c-.307-.48-.787-.677-1.18-1.06-.923-.905-1.95-2.03-2.713-3.066-2.15-2.918-4.048-6.11-5.778-9.435-.826-1.587-1.545-3.338-2.24-4.953-.268-.623-.265-1.564-.825-1.887-.763 1.184-1.887 2.14-2.477 3.538-.944 2.234-1.066 4.958-1.415 7.784-.207.074-.115.023-.236.118-1.642-.396-2.22-2.087-2.83-3.538-1.544-3.67-1.83-9.576-.472-13.798.35-1.092 1.94-4.534 1.297-5.543-.307-1.007-1.32-1.6-1.887-2.36-.7-.95-1.402-2.204-1.887-3.302-1.264-2.86-1.854-6.07-3.184-8.963-.636-1.382-1.71-2.78-2.594-4-.978-1.36-2.073-2.364-2.83-4-.27-.585-.636-1.52-.236-2.123a.93.93 0 0 1 .708-.708c.684-.527 2.59.175 3.302.472 1.89.786 3.47 1.534 5.072 2.595.77.5 1.547 1.496 2.476 1.77h1.06c1.66.382 3.52.12 5.07.59 2.742.833 5.198 2.13 7.43 3.538 6.798 4.292 12.355 10.402 16.157 17.7.612 1.173.876 2.294 1.415 3.538 1.087 2.5 2.456 5.093 3.538 7.547 1.08 2.45 2.13 4.92 3.656 6.958.802 1.07 3.9 1.646 5.307 2.24.987.417 2.603.852 3.538 1.415 1.785 1.077 3.515 2.36 5.19 3.54.837.59 3.41 1.883 3.538 2.948z"/><path d="M144.91 12.798c-.865-.016-1.476.094-2.123.236v.118h.118c.412.848 1.14 1.393 1.65 2.123l1.18 2.476.118-.118c.73-.515 1.065-1.338 1.06-2.595-.293-.308-.336-.694-.59-1.062-.337-.49-1-.768-1.415-1.18z" fill-rule="evenodd"/></g><path d="M194.855 91.708c0 2.97 2.347 4.972 4.972 4.972s4.972-2.002 4.972-4.972-2.347-4.972-4.972-4.972-4.972 2.002-4.972 4.972zm8.83 0c0 2.254-1.723 3.938-3.86 3.938-2.16 0-3.86-1.684-3.86-3.938s1.698-3.938 3.86-3.938c2.135 0 3.86 1.684 3.86 3.938zm-2.52 2.838h1.113l-1.63-2.492c.875-.093 1.537-.518 1.537-1.552 0-1.154-.73-1.63-2.134-1.63h-2.215v5.675h.955v-2.453h.888l1.485 2.453zm-2.374-3.25v-1.63h1.1c.57 0 1.26.106 1.26.77 0 .795-.623.862-1.34.862h-1.02z" fill="#e48e00" fill-rule="evenodd"/><script xmlns=""/><script xmlns=""/><link xmlns=""/></svg>
                                        </i>
                                        <span class="first"></span>
                                        <span class="second"></span>
                                        <span class="third"></span>
                                        <span class="fourth"></span>
                                    </div>
                                    <div class="bottom"></div>
                                    <div class="left">
                                        <span class="first"></span>
                                        <span class="second"></span>
                                    </div>
                                    <div class="right"></div>
                                </div>
                            </div>
                            <div class="cubes-wrap">
                                <div class="cube no-hover">
                                    <div class="front">
                                        <span class="first"></span>
                                        <span class="second"></span>
                                    </div>
                                    <div class="back"></div>
                                    <div class="top">
                                        <span class="first"></span>
                                        <span class="second"></span>
                                        <span class="third"></span>
                                        <span class="fourth"></span>
                                    </div>
                                    <div class="bottom"></div>
                                    <div class="left">
                                        <span class="first"></span>
                                        <span class="second"></span>
                                    </div>
                                    <div class="right"></div>
                                </div>
                            </div>
                        </div>
                        <div class="cubes-row">
                            <div class="cubes-wrap">
                                <div class="cube no-hover">
                                    <div class="front">
                                        <span class="first"></span>
                                        <span class="second"></span>
                                    </div>
                                    <div class="back"></div>
                                    <div class="top">
                                        <span class="first"></span>
                                        <span class="second"></span>
                                        <span class="third"></span>
                                        <span class="fourth"></span>
                                    </div>
                                    <div class="bottom"></div>
                                    <div class="left">
                                        <span class="first"></span>
                                        <span class="second"></span>
                                    </div>
                                    <div class="right"></div>
                                </div>
                            </div>
                            <div class="cubes-wrap">
                                <div class="cube no-hover">
                                    <div class="front">
                                        <span class="first"></span>
                                        <span class="second"></span>
                                    </div>
                                    <div class="back"></div>
                                    <div class="top">
                                        <span class="first"></span>
                                        <span class="second"></span>
                                        <span class="third"></span>
                                        <span class="fourth"></span>
                                    </div>
                                    <div class="bottom"></div>
                                    <div class="left">
                                        <span class="first"></span>
                                        <span class="second"></span>
                                    </div>
                                    <div class="right"></div>
                                </div>
                            </div>
                            <div class="cubes-wrap">
                                <div class="cube second" style="--border: #b76111;">
                                    <div class="front">
                                        <span class="first"></span>
                                        <span class="second"></span>
                                    </div>
                                    <div class="back"></div>
                                    <div class="top" style="--cube-top: #f98012;">
                                        <i class="icon" style="--icon-size: 9rem;">
                                            <img src="img/moodle-icon.png">
                                        </i>
                                        <span class="first"></span>
                                        <span class="second"></span>
                                        <span class="third"></span>
                                        <span class="fourth"></span>
                                    </div>
                                    <div class="bottom"></div>
                                    <div class="left">
                                        <span class="first"></span>
                                        <span class="second"></span>
                                    </div>
                                    <div class="right"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="horizontal">
            <div class="pin-wrap">
                <div class="animation-wrap to-right">
                    <div class="item">
                        <div class="proyect">
                            <img src="img/proyecto-1.webp">
                        </div>
                        <div class="pills">
                            <span><i class="bx bxl-html5"></i>HTML</span>
                            <span><i class="bx bxl-css3"></i>CSS</span>
                            <span><i class='bx bxl-javascript'></i>JavaScript</span>
                            <span><i class='bx bxl-php'></i>PHP</span>
                        </div>
                        <p>
                            Rediseño de su sistema de matrículas y desarrollo de un
                            panel para administrar todos los aspectos de su modelo
                            de trabajo: gestión de cursos, horarios, matrículas,
                            equipo de trabajo, respaldos y exportación de datos.
                        </p>
                    </div>
                    <div class="item">
                        <div class="proyect">
                            <img src="img/proyecto-2.webp">
                        </div>
                        <div class="pills">
                            <span><i class="bx bxl-html5"></i>HTML</span>
                            <span><i class="bx bxl-css3"></i>CSS</span>
                            <span><i class='bx bxl-javascript'></i>JavaScript</span>
                            <span><i class='bx bxl-php'></i>PHP</span>
                        </div>
                        <p>
                            Se recuperó, trató y migró una base de datos de más de 16 
                            mil usuarios de tres plataformas mal gestionadas. 
                            Luego, se desarrolló una solución integral que abarca ecommerce, 
                            capacitación en línea, transferencias internas, 
                            emisión de certificados y noticias para la comunidad.
                        </p>
                    </div>
                    <div class="item">
                        <div class="proyect">
                            <img src="img/proyecto-3.webp">
                        </div>
                        <div class="pills">
                            <span><i class="bx bxl-html5"></i>HTML</span>
                            <span><i class="bx bxl-css3"></i>CSS</span>
                            <span><i class='bx bxl-javascript'></i>JavaScript</span>
                            <span><i class='bx bxl-php'></i>PHP</span>
                            <span><i class='bx bxs-graduation'></i>Moodle Web Services</span>
                        </div>
                        <p>
                            Se desarrolló un sistema integrado con Moodle Web Services, 
                            permitiendo al equipo de ventas gestionar la venta de cursos 
                            y matricular a los estudiantes de forma rápida y 
                            sencilla en múltiples programas.
                        </p>
                    </div>
                    <div class="item">
                        <div class="proyect">
                            <img src="img/proyecto-4.webp">
                        </div>
                        <div class="pills">
                            <span><i class="bx bxl-html5"></i>HTML</span>
                            <span><i class="bx bxl-css3"></i>CSS</span>
                            <span><i class='bx bxl-javascript'></i>JavaScript</span>
                            <span><i class='bx bxl-php'></i>PHP</span>
                        </div>
                        <p>
                            Moderno sistema escolar adaptado a los requisitos nacionales, 
                            diseñado para gestionar calificaciones, generar reportes para 
                            distritos, instituciones, padres y alumnos, y permitir la 
                            consulta de notas en línea. 
                            Además, incluye funciones para inspección, contabilidad y secretaría.
                        </p>
                    </div>
                    <div class="item">
                        <div class="proyect">
                            <img src="img/proyecto-5.webp">
                        </div>
                        <div class="pills">
                            <span><i class="bx bxl-html5"></i>HTML</span>
                            <span><i class="bx bxl-css3"></i>CSS</span>
                            <span><i class='bx bxl-javascript'></i>JavaScript</span>
                            <span><i class='bx bxl-php'></i>PHP</span>
                        </div>
                        <p>
                            Catastro de estafas con una sección de noticias detalladas, 
                            un apartado de peticiones y un newsletter. Incluye un panel de gestión 
                            para administrar la base de datos, publicar noticias y personalizar su SEO. 
                            Además, se desarrolló una extensión de navegador que bloquea 
                            los sitios inseguros registrados en la plataforma.
                        </p>
                    </div>
                    <div class="item">
                        <div class="proyect">
                            <img src="img/proyecto-6.webp">
                        </div>
                        <div class="pills">
                            <span><i class="bx bxl-html5"></i>HTML</span>
                            <span><i class="bx bxl-css3"></i>CSS</span>
                            <span><i class='bx bxl-javascript'></i>JavaScript</span>
                            <span><i class='bx bxl-php'></i>PHP</span>
                        </div>
                        <p>
                            Calculadora de interés compuesto con gráfica comparativa, opción de 
                            exportar los datos de rendimiento y un panel avanzado para gestionar 
                            cifras y realizar cálculos complejos sobre los rendimientos de los 
                            miembros del fondo.
                        </p>
                    </div>
                    <div class="item">
                        <div class="proyect">
                            <img src="img/proyecto-7.webp">
                        </div>
                        <div class="pills">
                            <span><i class="bx bxl-html5"></i>HTML</span>
                            <span><i class="bx bxl-css3"></i>CSS</span>
                            <span><i class='bx bxl-javascript'></i>JavaScript</span>
                            <span><i class='bx bxl-php'></i>PHP</span>
                        </div>
                        <p>
                            Sistema de asistencia con tecnología NFC para credenciales estudiantiles, 
                            utilizando sensores para registrar automáticamente el perfil del estudiante, 
                            sus movimientos dentro de la institución y sus horarios. Incluye 
                            estadísticas de asistencia, generación de informes y notificaciones a los 
                            padres en caso de ausencia.
                        </p>
                    </div>
                    <div class="item">
                        <div class="proyect">
                            <img src="img/proyecto-8.webp">
                        </div>
                        <div class="pills">
                            <span><i class="bx bxl-html5"></i>HTML</span>
                            <span><i class="bx bxl-css3"></i>CSS</span>
                            <span><i class='bx bxl-javascript'></i>JavaScript</span>
                            <span><i class='bx bxl-php'></i>PHP</span>
                        </div>
                        <p>
                            Rediseño de eCommerce, migrando de Wix a código nativo, con diseño personalizado. 
                            Incluye panel de administración, sincronización de inventario con el sistema 
                            contable, respaldos y generación de códigos identificadores únicos para 
                            una gestión segura y eficiente de los productos.
                        </p>
                    </div>
                    <div class="item">
                        <div class="proyect">
                            <img src="img/proyecto-9.webp">
                        </div>
                        <div class="pills">
                            <span><i class="bx bxl-html5"></i>HTML</span>
                            <span><i class="bx bxl-css3"></i>CSS</span>
                            <span><i class='bx bxl-javascript'></i>JavaScript</span>
                            <span><i class='bx bxl-php'></i>PHP</span>
                        </div>
                        <p>
                            Plataforma inmobiliaria con un panel de gestión de propiedades 
                            y herramientas personalizadas para optimizar el trabajo de 
                            los asesores de ventas.
                        </p>
                    </div>
                    <div class="item">
                        <div class="proyect">
                            <img src="img/proyecto-10.webp">
                        </div>
                        <div class="pills">
                            <span><i class="bx bxl-html5"></i>HTML</span>
                            <span><i class="bx bxl-css3"></i>CSS</span>
                            <span><i class='bx bxl-javascript'></i>JavaScript</span>
                        </div>
                        <p>
                            Tarjetas de presentación digitales y físicas con NFC, 
                            personalizadas para mostrar servicios y contactar 
                            directamente con el proveedor, manteniendo la información 
                            y contactos siempre actualizados.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>
    <script src="https://unpkg.com/@studio-freight/lenis"></script>

    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/ScrollTrigger.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/easyqrcodejs@4.4.0/dist/easy.qrcode.min.js"></script>

    <script src="js/cubes.js"></script>
    <script src="js/share-cont.js"></script>
    <script src="js/main.js"></script>
</body>
</html>