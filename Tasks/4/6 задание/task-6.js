//6 задание
const userText = prompt("Введите текст".trim());
const wordFromtext = prompt("Введите слово из текста".trim());

const indexOfWord = userText.indexOf(wordFromText);
const result = userText.slice(0, indexOfWord);

alert("Результат: " + result);
