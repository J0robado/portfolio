const lenis = new Lenis({
    smooth: true,       
    speed: 1.5,
    smoothWheel: true,   
    smoothTouch: true,   
    wheelMultiplier: 0.8,
    touchMultiplier: 0.1,
    easing: (t) => 1 - Math.pow(1 - t, 8), 

});

function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
}
requestAnimationFrame(raf);

gsap.ticker.add((time) => {
  lenis.raf(time * 1000);
});
gsap.ticker.lagSmoothing(0);
const horizontalSections = gsap.utils.toArray('section.horizontal')

horizontalSections.forEach(function (sec, i) {	

    var thisPinWrap = sec.querySelector('.pin-wrap');
    var thisAnimWrap = thisPinWrap.querySelector('.animation-wrap');

    var getToValue = () => -(thisAnimWrap.scrollWidth - window.innerWidth); 

    gsap.fromTo(thisAnimWrap, { 
        x: () => thisAnimWrap.classList.contains('to-right') ? 0 : getToValue() 
    }, { 
        x: () => thisAnimWrap.classList.contains('to-right') ? getToValue() : 0, 
        ease: "none",
        scrollTrigger: {
        trigger: sec,		
        start: "top 0%",
        end: () => "+=" + (thisAnimWrap.scrollWidth - window.innerWidth),
        pin: thisPinWrap,
        invalidateOnRefresh: true,
        //anticipatePin: 1,
        scrub: true,
        //markers: true,
        }
    });

});	

const proyects = document.querySelectorAll(".proyect");

proyects.forEach(function (pro, i) {	
    if (window.innerWidth > 768) {
        pro.addEventListener("mousemove", function (e) {
            let img = this.querySelector("img");
            let rect = this.getBoundingClientRect();
            let x = (e.clientX - rect.left) / rect.width * 100;
            let y = (e.clientY - rect.top) / rect.height * 100;
            
            img.style.transformOrigin = `${x}% ${y}%`;
            img.style.transform = "scale(2.5)";
        });
    }
});

proyects.forEach(function (pro, i) {	
    pro.addEventListener("mouseleave", function () {
        this.querySelector("img").style.transform = "scale(1)";
    });
});

const blockSections = gsap.utils.toArray('.block')

blockSections.forEach(function (sec, i) {	
    gsap.fromTo(sec,
        { 
            paddingLeft: "var(--padding-b-d)",
            backgroundColor: "transparent",
            borderColor: "transparent",
            borderRadius: "0px",
        },
        { 
            paddingLeft: "0rem",
            backgroundColor: "var(--tooltip)",
            borderColor: "var(--text-color-2)",
            borderTopLeftRadius: "var(--scroll-border-radius-t)", 
            borderTopRightRadius: "var(--scroll-border-radius-r)", 
            borderBottomLeftRadius: "var(--scroll-border-radius-l)", 
            borderBottomRightRadius: "var(--scroll-border-radius-b)", 
            scrollTrigger: {
                trigger: sec,
                start: "top 60%",
                end: "top 50%",
                scrub: true,
                invalidateOnRefresh: true,
            }
        }
    );

});


gsap.fromTo("#arrow-to-p",
    { 
        left: "100%",
        opacity: "0",
        transform: "rotate(0deg)",
    },
    { 
        left: "0%",
        opacity: "1",
        transform: "rotate(45deg)",
        scrollTrigger: {
            trigger: "#arrow-to-p",
            start: "top 85%",
            end: "top 50%",
            scrub: true,
            invalidateOnRefresh: true,
        }
    }
);
gsap.fromTo("#arrow-to-p",
    { 
        top: "0rem",
    },
    { 
        top: "1rem",
        scrollTrigger: {
            trigger: "#arrow-to-p",
            start: "top 49%", 
            end: "top 30%", 
            scrub: true,
            invalidateOnRefresh: true,
        }
    }
);
gsap.fromTo("#arrow-to-p",
    { 
        top: "1rem",
    },
    { 
        top: "2rem",
        scrollTrigger: {
            trigger: "#arrow-to-p",
            start: "top 30%", 
            end: "top 10%", 
            scrub: true,
            invalidateOnRefresh: true,
        }
    }
);

const blankSections = gsap.utils.toArray('section.blank')

blankSections.forEach(function (sec, i) {	
    gsap.fromTo(sec,
        { 
            padding: "0rem",
        },
        { 
            paddingLeft: "var(--scroll-padd)",
            paddingRight: "var(--scroll-padd)",
            scrollTrigger: {
                trigger: sec,
                start: "top 60%",
                end: "top 40%",
                scrub: true,
                invalidateOnRefresh: true,
            }
        }
    );

});

ScrollTrigger.refresh();

const profilePic = document.querySelector(".profile");

const themeButton = document.getElementById('theme-button')
const themeButtonIcon = document.querySelector('#theme-button i')
const darkTheme = 'dark-theme'
const iconTheme = 'bx-sun'

const selectedTheme = localStorage.getItem('selected-theme')
const selectedIcon = localStorage.getItem('selected-icon')

const getCurrentTheme = () => document.body.classList.contains(darkTheme) ? 'dark' : 'light'
const getCurrentIcon = () => themeButtonIcon.classList.contains(iconTheme) ? 'bx bx-moon' : 'bx bx-sun'

if (selectedTheme) {
  document.body.classList[selectedTheme === 'dark' ? 'add' : 'remove'](darkTheme)
  themeButtonIcon.classList[selectedIcon === 'bx bx-moon' ? 'add' : 'remove'](iconTheme)
}

themeButton.addEventListener('click', () => {
    document.body.classList.toggle(darkTheme)
    themeButtonIcon.classList.toggle(iconTheme)
    localStorage.setItem('selected-theme', getCurrentTheme())
    localStorage.setItem('selected-icon', getCurrentIcon())
})


const scrollUpBtn = document.getElementById('scrollUpBtn');

window.onload = function() {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        scrollUpBtn.style.opacity = "1";
        scrollUpBtn.style.visibility = "visible";
    } else {
        scrollUpBtn.style.opacity = "0";
        scrollUpBtn.style.visibility = "hidden";
    }
};

window.onscroll = function() {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        scrollUpBtn.style.opacity = "1";
        scrollUpBtn.style.visibility = "visible";
    } else {
        scrollUpBtn.style.opacity = "0";
        scrollUpBtn.style.visibility = "hidden";
    }
};

scrollUpBtn.onclick = function() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
};