const express=require('express');
const mysql = require("mysql");
const bodyParser=require('body-parser');

const app = express();
app.set('view engine','ejs');
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({extended:true}));
// ...connect db.........
const db= mysql.createConnection({
    host:'localhost',
    user:'root',
    password:'',
    database:'school'
})
db.connect((err)=>{
    if(err){
        console.log(`Internal Server Error ${err}`);
        return;
    }
    else{
        console.log('db connected well 👌');
    }
})

// ........C (create datas).....
app.get('/',(req,resp)=>{
    resp.render('form');
})
app.post('/student',(req,resp)=>{
 const {name,age,email,grade,phone,adress}=req.body;

 const sql =`INSERT INTO students VALUES(NULL,'${name}','${age}','${email}','${grade}','${phone}','${adress}')`;

 db.query(sql,(err)=>{
    if(err){
        resp.status(500).send(`Error adding student ${err}`);

    }
    else{
        resp.redirect('students');
    }
 })
    
    
})
app.get('/students',(req,resp)=>{
    const sql =`SELECT * FROM students`;
    db.query(sql,(err,results)=>{
        if(err){
            resp.status(500).send(`Failed to retrieve data...${err}`);
        }
        else{
            resp.render('students',{results})
            console.log(results);
        }
    })
    
});
app.get('/delete/:delete_id',(req,resp)=>{
    console.log(req.params);
    const {delete_id}=req.params;
    const sql =`DELETE FROM students WHERE id=${delete_id}`;
        db.query(sql,(err)=>{
            if(err){
                resp.status(500).send(`Failed to delete data ${err}`);
            }
            else{
                resp.redirect('/students');
            }
        })
})




app.listen(3000,console.log("Im listerning on port 3k.."))