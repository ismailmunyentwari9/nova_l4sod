const express = require('express');
const app = express();
const path = require('path');
app.use(express.static(path.join(__dirname,'public')));

app.get('/greetings',(req,resp)=>{
    console.log(__dirname);
resp.send("IM THE ONE YOU HAVE BEEN LOOKING FOR...😊");
})
// ........sending noraml plain text to the browser.........
app.get('/welcome',(req,resp)=>{
    resp.send("Im the home page you have been looking for 🏠🏡");
    })
app.listen(3000,console.log('Im listening on port 3k..😊'));

// .....sending Html files to the browser...
app.get('/',(req,resp)=>{
resp.sendFile(path.join(__dirname,'./views/index.html'));
})
app.get('/about',(req,resp)=>{
    resp.sendFile(path.join(__dirname,'./views/todo.html'))
})
