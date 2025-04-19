const express = require('express');
const app = express();


// ....getting user requests...
app.get('/',(req,resp)=>{
resp.send("I'm Home Page");
})

app.get('/about',(req,resp)=>{
    resp.send("I'm About Page");
    })
// .....listern on port 5000...
const port =5000;


app.listen(port,()=>{
    console.log("Im listerning on port 5k ");
});