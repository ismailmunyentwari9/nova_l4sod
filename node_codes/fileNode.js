const http = require('http');
const fs = require('fs');
const server = http.createServer((req, resp) => {
    if (req.url === '/') {
        console.log(req.url);
        fs.readFile('./views/index.html', (err, page) => {
            if (err) {
                resp.end(`Failed to read file: ${err}`);
            }
            else {
                resp.end(page);
            }
        })
    }
    else if (req.url === '/about') {
        console.log(req.url);
        fs.readFile('./views/about.html', (err, page) => {
            if (err) {
                resp.end(`Failed to find page: ${err}`);
            }
            else{
                resp.end(page);
            }
        })
    }
    else{
        console.log(req.url);   
        fs.readFile('./views/404.html',(err,page)=>{
          if(err){
             resp.end(`Failed to find page: ${err}`);
          }
          else{
            resp.end(page);
          }
        })
    }
})

server.listen(3000, console.log("I'm listening on port 3k...."));

