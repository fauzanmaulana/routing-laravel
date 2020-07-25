window.scrollClick = (target) => {
    let toContainer = target;
    do {
        toContainer = toContainer.parentNode;
        if (!toContainer) return;
        toContainer.scrollTop += 1;
    } while (toContainer.scrollTop == 0);

    let targetY = 0;
    do {
        if (target == toContainer) break;
        targetY += target.offsetTop;
    } while (target = target.offsetParent);

    scroll = (c, a, b, i) => {
        i++; if (i > 30) return;
        c.scrollTop = a + (b - a) / 30 * i;
        setTimeout(() => { scroll(c, a, b, i); }, 15);
    }
    scroll(toContainer, toContainer.scrollTop, targetY, 0);
}



let wall = document.querySelector('.wall')

for(let i = 1; i <= 4; i++){
    const compwall = `<div class="wall${i}"></div>`
    wall.insertAdjacentHTML('beforeend', compwall)
}