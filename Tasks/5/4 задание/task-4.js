
let i = 0;
do{
    let newStudent = prompt('Введите имя нового студента!');
    newStudent = newStudent.trim();
    if(newStudent){
        alert(`Добро пожаловать, ${newStudent}!`);
    }
    i += 1;
}while(i < 3)