const menu = document.querySelector('.menu');
const NavMenu = document.querySelector('.nav-menu');

menu.addEventListener('click', () => {
    menu.classList.toggle('ativo');
    NavMenu.classList.toggle('ativo');
})

const salvar = document.querySelector('#salvar');

salvar.addEventListener('click', () => {
    alert('Alterado com sucesso!')    
})

