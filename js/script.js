//создаем переменную, в которую добавляем поиск элемента
let userName = prompt("Введите ваше имя");
let userField = document.getElementById("UserId");
userField.innerText = "Пользователь: " + userName;

let toggleButton = document.getElementById("toggle-theme-btn");
let dark = false;
//
toggleButton.addEventListener('click', function(){
    document.body.classList.toggle('dark')
});