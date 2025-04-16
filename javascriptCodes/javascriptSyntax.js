// ......................Variables.................

// let name ='John'
// const age=12
// const location='Kgl'
// name='peter';

// console.log(name);
// ......................Arrays.................
// const students=[
//     ['John','Peter','Paul','James'],
//     [12,34,45,56]

// ]
// ;
// console.log(students[0][1]);
// console.log(students[1][1]);

// ......................Objects.................
// const student1={
//     name:'Peter',
//     ages:12,
//     location:'Kigali,Rwanda',
//     grade:'grade1',
// }
// const student2={
//     name:'John',
//     ages:23,
//     location:'Musanze,Rwanda',
//     grade:'grade3',

// }
// console.log(student1.name);
// console.log(student1.ages);
// console.log(student2.ages);
// console.log(student2.location);



// ......................classes.................

class students{
constructor(name,age,grade,location){
    this.name=name,
    this.age=age,
    this.grade=grade
    this.location=location
}
vote(){
    if(this.age<18){
        console.log(`Hey ${this.name}, You are not allowed to vote with your ${this.age} years Old..😉`);
    }
    else{
        console.log(`Hey ${this.name}, You are  allowed to vote with your ${this.age} years Old..😊`);
    }
}
}
const student1=new students('John',18,'Grade 11','Kigali');
const student2=new students('Peter',34,'Grade 10','Ruhango');
const student3=new students('Joseph',5,'Grade 2','Musanze');

student3.vote();