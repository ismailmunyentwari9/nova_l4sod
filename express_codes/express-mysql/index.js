const express = require("express");
const mysql = require("mysql");
const bodyParser = require("body-parser");

const app = express();
app.use(bodyParser.json());
app.set("view engine", "ejs");
app.use(bodyParser.urlencoded({ extended: true }));

// .....create DataBase.......

const db = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "school",
});

db.connect((err) => {
  if (err) {
    console.log("Failed to connect to db..");
  } else {
    console.log("db connected well 👍");
  }
});

// ...create Routes......
app.get("/form", (req, resp) => {
  resp.render("form");
});
// ....route to get body{form} datas
app.post("/add", (req, resp) => {
  const { name, age, email } = req.body;
  const sql = `INSERT INTO students(name,age,email) VALUES('${name}','${age}','${email}')`;

  db.query(sql, (err) => {
    if (err) {
      resp.send(`Internal Server Error: ${err}`);
    } else {
      resp.redirect("/");
    }
  });
});

// ..Retrive students fro db....

app.get("/", (req, resp) => {
  const sql = `SELECT * FROM students`;
  db.query(sql, (err, results) => {
    if (err) {
      resp.send("Internal server erro..");
    } else {
      console.log(results);
      resp.render("table", { results });
    }
  });
});

app.get("/delete/:id", (req, resp) => {
  const { id } = req.params;
  const sql = `DELETE FROM students WHERE 
id=${id}`;
  db.query(sql, (err) => {
    if (err) {
      resp.send(`Internal server erro: ${err}`);
    } else {
      resp.redirect("/");
    }
  });
});

app.get("/edit/:id", (req, resp) => {
  const { id } = req.params;
  const sql = `SELECT * FROM students WHERE id=${id}`;
  db.query(sql, (err, results) => {
    if (err) {
      resp.send(`Internal server erro:${err}`);
    } else {
        resp.render('edit',{results});
    }
  });
});

app.post("/edit", (req, resp) => {
    const { id,name, age, email } = req.body;
    const sql = `UPDATE students SET name='${name}',age='${age}',email='${email}' WHERE id=${id}`;
  
    db.query(sql, (err) => {
      if (err) {
        resp.send(`Internal Server Error: ${err}`);
      } else {
        resp.redirect("/");
      }
    });
  });
  
app.listen(3000, console.log("I'm listening on port 3k >>>👌..."));
