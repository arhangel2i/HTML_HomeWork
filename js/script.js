//создаем переменную, в которую добавляем поиск элемента

let toggleButton = document.getElementById("toggle-theme-btn");
let dark = false;
//
toggleButton.addEventListener('click', function(){
    document.body.classList.toggle('dark')
});