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



app.get('/contact',(req,resp)=>{
resp.render('contact',{title:"contact || Page",message:"Welcome to my contact page...."});
})

 
app.listen(5000,()=>{
    console.log('Im listerning on port 5k')
})