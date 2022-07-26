const colors = document.querySelectorAll('.color');
const gamepads = document.querySelectorAll('.gamepad-img')

function changeColor(){
    let primary = this.getAttribute('primary');
    let color = this.getAttribute('color');

    let gamepad = document.querySelector(`.gamepad-img[color="${color}"]`);

    document.documentElement.style.setProperty('--primary', primary);

    colors.forEach (c => c.classList.remove('active'));
    this.classList.add('active');

    gamepads.forEach(s => s.classList.remove('show'));  
    gamepad.classList.add('show');  
};

colors.forEach (c => c.addEventListener('click', changeColor));