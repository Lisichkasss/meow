//Задание 2
//1
console.log(+"50"); //неявное
console.log(Number("50"), typeof Number("50"));

//2
console.log(Number("100")); //явное
console.log(Number("100"), typeof Number("100"));

//3
console.log("" + 1); //неявное
console.log(Number(1));

//4
console.log(String(1)); //явное
console.log(String(1), typeof String(1));

//5
console.log(Boolean(0)); //явное
console.log(Boolean(0), typeof Boolean(0));

//6
console.log(+"001"); //неявное
console.log(Number("001"), typeof Number("001"));

//7
console.log(1 + ""); //неявное
console.log(Number(1));

//8
console.log(Boolean(1)); //явное
console.log(Boolean(1), typeof Boolean(1));

//9
console.log(String(001)); //явное
console.log(String(001), typeof String(001));

//10
console.log(Number("Hello World")); //явное
console.log(Number("Hello World"), typeof Number("Hello World"));
