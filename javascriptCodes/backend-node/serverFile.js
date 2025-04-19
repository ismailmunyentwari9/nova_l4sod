  const http = require('http');
  const fs= require('fs');

  const server=http.createServer((req,resp)=>{
    if(req.url==='/'){
      fs.readFile('./views/index.html',(err,file)=>{
          if(err){
          console.log("Internal Server Error..")
          }
          else{
            resp.end(file)
          }
      })
    }
    else if(req.url==='/service'){
      fs.readFile('./views/service.html',(err,file)=>{
        if(err){
          console.log("Internal Server Error..");
        }
        else{
          resp.end(file);
        }
      })
    }
    else if(req.url==='/contact'){
      fs.readFile('./views/contact.html',(err,file)=>{
        if(err){
          console.log(`Internal server Error:${err}`)
        }
        else{
          resp.end(file);
        }
      })
    }
    else{
      fs.readFile('./views/404.html',(err,file)=>{
          if(err){
            console.log(`Internal Server Eror: ${err}`)
          }
          else{
            resp.end(file);
          }
      })
    }
  })
  server.listen(4000,console.log("I'm listerning on port 4k"))