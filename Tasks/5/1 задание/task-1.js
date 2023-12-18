let existedUserLogin = "the_best_user";

let existedUserPassword = 12345678;

userLogin = prompt("Введите логин");
userLogin = userLogin.trim();

userPassword = prompt("Введите пароль");
userPassword = Number(userPassword.trim());

if(existedUserLogin === userLogin && existedUserPassword === userPassword){
    alert(`Добро пожаловать, ${existedUserLogin}`);
}else{
    alert(`Логин и (или) Пароль введены неверно!`);
}