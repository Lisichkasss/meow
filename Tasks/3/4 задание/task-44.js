//Задание 4

//1
console.log(Number("1 2 3 4 5")); //NaN

//2
console.log(Number("1234 5")); //NaN

//3
console.log("12345"); //выведутся все эти числа

//4
console.log(String(false)); //слово false

//5
console.log(Boolean("0000000")); //false, но если нули вставим в скобки - true

//6
console.log(Boolean("0.0000001")); //false, но если вставить в скобки - true

//7
console.log(String(undefined)); //undefined

//8
console.log(Number("100f")) //NaN, т.к имеется буква

//9
console.log(Number("100")) //100

//10
console.log(Number("000001")) //1 