// cool so down below, the fist lines starting wiht "let" are just linking the
// things that I have created in style and html files. cool cool.j

let main = document.querySelector('main');
let previous = document.querySelector('.previous'); /**let previous div smth. go to the previous image */
let next = document.querySelector('.next');
let image = document.querySelector('.image');
let title = document.querySelector('.title');
let counter = document.querySelector('.counter');
let mode = document.querySelector('.mode');
let cursor = document.querySelector('.cursor');
let splash = document.querySelector('.splash');

let darkMode = false;

mode.addEventListener('click', () => {
    darkMode = !darkMode;

    if(darkMode){
        document.documentElement.style.setProperty('--main-color', '#161616');
        document.documentElement.style.setProperty('--secondary-color', '#ded9d9');
        document.documentElement.style.setProperty('--third-color', '#9c9c9c');
        document.documentElement.style.setProperty('--title-color', '#FFFFFF');
    }else{
        document.documentElement.style.setProperty('--main-color', '#FFFFFF');
        document.documentElement.style.setProperty('--secondary-color', '#ded9d9');
        document.documentElement.style.setProperty('--third-color', '#9c9c9c');
        document.documentElement.style.setProperty('--title-color', '#161616');
    }
})


// idomiai mes cia jokiu parameters mouse shape nedavem, bet jis suprato, gal del clientx ir y?

window.addEventListener('mousemove', (e) => {
    cursor.style.transform = `translate3d(${e.clientX}px, ${e.clientY}px, 0)`;
})


// okay so mouse enter - one thing happens
// then we created funcion mouse leave and then told what whill happen when the moouse
// leave the NEXT or PREVIOUS field (entering other field) or div.

next.addEventListener('mouseenter', () => {
    cursor.classList.remove('left');
    cursor.classList.add('right');

})

next.addEventListener('mouseleave', () => {
    removeCursorClass(cursor);
})

previous.addEventListener('mouseenter', () => {
    cursor.classList.remove('right');
    cursor.classList.add('left');

})

previous.addEventListener('mouseleave', () => {
    removeCursorClass(cursor);
})

function removeCursorClass(element){
    element.classList.remove('left')
    element.classList.remove('right')
}


let locations = ['LONDON', 'PARIS', 'NEW YORK', 'COPENHAGEN', 'MADRID']; // locations array
image.style.backgroundImage = 'url(./gimages/1.jpg)';
counter.querySelector('p').innerText = '1/5';
title.querySelector('p').innerText = locations[0];


previous.addEventListener('click', () =>{
    let num = +image.style.backgroundImage.split ('/')[2][0]; // we split and we get an array of 3 items. we select the last item - 2. then we slect first thing item by sellecting 0. wow! + is to make the thing as an integer, as a number?
    // console.log(num)
     num == 1 ? num = 5 : num--; //-- is to go back to the previous image. atkreipk demesi kaip viskas atitraukta vienu space. kad visi funkcija applyintu po visko kas yra apacioje?
     image.style.backgroundImage = `url(./gimages/${num}.jpg`; // important stupid quotes. TEMPLATE LITERAL?
     counter.querySelector('p').innerText = `${num}/5`; // backticks!!!
     title.querySelector('p').innerText = `${locations[num - 1]}`; // cool stuff. we created locations, now we modify it together with num.. damn its powerful. just need to know the syntax and know when to use what
})

next.addEventListener('click', () =>{
    let num = +image.style.backgroundImage.split ('/')[2][0];
    // console.log(num) // pirmai sita naudojom kaip indikatoriu, kad zinotume consolej kaip ka daryti
     num == 5 ? num = 1 : num++; // if the number is 5 (final image), OTHERWISE we will increment by one. opposite of the previous thing. 
     image.style.backgroundImage = `url(./gimages/${num}.jpg`; 
     counter.querySelector('p').innerText = `${num}/5`; 
     title.querySelector('p').innerText = `${locations[num - 1]}`;
})

// wow so this is crazy. we creted an array above me, then we added a function in our document that browser reads and it knows to display this information (arrawy of each individula letters) only because we later called out thif fucntion. so simple. 
    // console.log(splashTitleArray); 


function loadPage(){
    let html = '';
    let splashTitle = document.querySelector('.splash-title');
    let splashTitleArray = splashTitle.innerText.split('');
    splashTitleArray.forEach(letter => {
        html += `<span>${letter}</span>` // this is magic. check console. each letter is individual element now
    })
    splashTitle.innerHTML = html;

    [...splashTitle.querySelectorAll('span')].forEach((span, idx) => {
        setTimeout(() => {
            span.style.transform = 'translateY(0px)'
        }, (idx + 1) * 50);
    })

    setTimeout(() => {
        splash.classList.add('active');

        setTimeout(() => {
            main.style.transform = `translateY(0px)`;
            main.style.opacity = 1;
            splash.style.display = 'none';
            image.style.transform = 'scale(1)';
        }, 200)
    }, 1500)
}

loadPage()








