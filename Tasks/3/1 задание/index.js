//Задание 1
let age = 18;
console.log(Number(age), Boolean(age), String(age));

let names = "Максим";
console.log(Number(names), Boolean(names), String(names));

let isGreater = 5 > 1;
console.log(Number(isGreater), Boolean(isGreater), String(isGreater));

let nulls = null;
console.log(Number(nulls), Boolean(nulls), String(nulls));

let under = undefined;
console.log(Number(under), Boolean(under), String(under));

let obj = new Object();
console.log(Number(obj), Boolean(obj), String(obj));

let bigi = 2n;
console.log(Number(bigi), Boolean(bigi), String(bigi));

let sym = Symbol("id");
console.log(Boolean(sym), String(sym));