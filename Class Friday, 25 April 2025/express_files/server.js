const express = require('express');
const path = require('path');

const app = express();
app.set('view engine','ejs');   
app.use(express.static(path.join(__dirname,'public')));

// .......routes....................
app.get('/',(req,resp)=>{
    resp.sendFile(path.join(__dirname,'./views/index.html'));
})
app.get('/todo',(req,resp)=>{
    resp.sendFile(path.join(__dirname,'./views/todo.html'));
})


app.get('/test',(req,resp)=>{
    resp.render('test',{message:'Im from ejs file 😊🎉',title:'To do list 🥇'});
})



 
app.listen(5000,()=>{
    console.log('Im listerning on port 5k')
})