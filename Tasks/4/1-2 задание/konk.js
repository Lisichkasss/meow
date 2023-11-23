//Задание 1-2
const myName = "Елизавета";
const programmingLanguage = "JavaScript";
let firstChar = str["JAVASCRIPT"];
let lastChar = str[str.length-1];
const courseCreatorName = "Чёботов Н.М";
const reasonText = "Обучиться веб-дизайну";
const numberOfMonth = "6 месяцев";
let MyInfoText =
  "Всем привет! Меня зовут, " +
  myName +
  ". Сейчас я изучаю язык программирования " +
  programmingLanguage +
  " на курсе по " +
  programmingLanguage +
  " у " +
  courseCreatorName +
  ". Я хочу стать веб-разработчиком, потому что " +
  reasonText +
  ". До этого я изучала " +
  numberOfMonth +
  ". Я уверена, что пройду данный курс до конца!";

console.log(MyInfoText);
console.log(MyInfoText.length);
console.log("Первый символ:", firstChar);
console.log("Последний символ:", lastChar);