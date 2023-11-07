// Функция для запуска анимации чисел
function animateCounters() {
// Получаем все элементы с классом "count"
const counters = document.querySelectorAll('.count');

// Запускаем перебор элементов
counters.forEach((counter) => {
// Получаем значение, до которого нужно увеличить число
const target = +counter.getAttribute('data-count');
// Получаем текущее значение числа
const count = +counter.innerText;
// Вычисляем разницу между целевым и текущим значением числа
const diff = target - count;

// Если текущее значение числа равно целевому, просто возвращаемся
if (diff === 0) {
  return;
}

// Вычисляем шаг увеличения числа
const duration = 10000; // Длительность анимации в миллисекундах
const steps = 80; // Количество кадров анимации
const step = diff / (duration / steps);

// Запускаем анимацию
let current = count;
let i = 0;
const animate = () => {
  current += step;
  counter.innerText = Math.round(current);

  // Если достигнуто целевое значение, останавливаем анимацию
  if ((step > 0 && current >= target) || (step < 0 && current <= target)) {
    counter.innerText = target;
    return;
  }

  // Запускаем следующий кадр анимации
  if (i < steps) {
    i++;
    requestAnimationFrame(animate);
  }
};

// Запускаем первый кадр анимации
requestAnimationFrame(animate);
});
}

const options = {
  root: null,
  rootMargin: '0px',
  threshold: 0.5 // Элемент будет считаться видимым, если он попадает в зону видимости на 50% или более
};

const observer = new IntersectionObserver((entries, observer) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      animateCounters();
      observer.unobserve(entry.target);
    }
  });
}, options);

const targetElement = document.querySelector('.onas-number');
if (targetElement) {
  observer.observe(targetElement);
} else {
  console.error('Не удалось найти целевой элемент на странице');
}


