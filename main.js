
const go1Button = document.getElementById('Go1');
const go2Button = document.getElementById('Go2');
const container = document.getElementById('container');

go1Button.addEventListener(
    'click', () => {
    container.classList.add('right-panel-active');
    }
);
go2Button.addEventListener('click', () => {
    container.classList.remove('right-panel-active');}
);
