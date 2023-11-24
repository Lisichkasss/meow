//Задание 1-2
const myName = "Елизавета";
const programmingLanguage = "JavaScript";
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

let firstChar = MyInfoText[0];
console.log(
  MyInfoText.replaceAll(programmingLanguage, programmingLanguage.toUpperCase())
);
console.log(MyInfoText.length);
console.log("Первый символ:", firstChar);
console.log(MyInfoText[MyInfoText.length - 1]);
