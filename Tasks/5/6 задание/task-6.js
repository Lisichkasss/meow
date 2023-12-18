clientName = "Игорь";
clientSpentForAllTime = 110;

if (clientSpentForAllTime >= 100 && clientSpentForAllTime < 300) {
  discount = 10;
} else if (clientSpentForAllTime >= 300 && clientSpentForAllTime < 500) {
  discount = 20;
} else if (clientSpentForAllTime >= 500) {
  discount = 30;
}

clientSpentToday = 25;

clientSpentForAllTime += clientSpentToday;

alert("Вам предоставляется скидка в " + discount + "%!");

alert("Спасибо, " + clientName + "! К оплате " + clientSpentToday * (100 - discount) / 100 + "$. За все время в нашем ресторане вы потратили " + clientSpentForAllTime + "$.");