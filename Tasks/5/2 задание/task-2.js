let zad1 = prompt("Сколько будет 2 + 2?");
let zad2 = prompt("Сколько будет 2 * 2?");
let zad3 = prompt("У Пети было 5 яблок. 3 из них он съел, 1 отдал другу. Сколько яблок у Пети осталось?");
let zad4 = prompt("У Маши было 10 конфет. 2 она съела, 1 отдала другу. После мама дала Маше ещё 5 конфет. Сколько в итоге конфет осталось у Маши?");
let zad5 = prompt("Сколько будет 2 + 2 * 2?");

Number(zad1);
Number(zad2);
Number(zad3);
Number(zad4);
Number(zad5);

const reszad1 = 4;
const reszad2 = 4;
const reszad3 = 1;
const reszad4 = 12;
const reszad5 = 6;

let correctAnswer = 0;
let incorretAnswers = 0;

if(zad1 == reszad1){
    correctAnswer = correctAnswer+1;
}else{
    incorretAnswers = incorretAnswers+1;
}

if(zad2 == reszad2){
    correctAnswer = correctAnswer+1;
}else{
    incorretAnswers = incorretAnswers+1;
}

if(zad3 == reszad3){
    correctAnswer = correctAnswer+1;
}else{
    incorretAnswers = incorretAnswers+1;
}

if(zad4 == reszad4){
    correctAnswer = correctAnswer+1;
}else{
    incorretAnswers = incorretAnswers+1;
}

if(zad5 == reszad5){
    correctAnswer = correctAnswer+1;
}else{
    incorretAnswers = incorretAnswers+1;
}

alert(`Конец теста! Правильные ответы - ${correctAnswer}; Неправильные - ${incorretAnswers}.`);