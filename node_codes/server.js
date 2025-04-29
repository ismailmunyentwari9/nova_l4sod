const http= require('http');
const server= http.createServer((req,resp)=>{

    // resp.end("Hello, this is your Node.js server!");
    console.log(req.url);
    if(req.url==='/'){
        resp.end("I'm home page");
    }
    else if(req.url==='/about'){
        resp.end("I'm about page");
    }
    else if(req.url==='/services'){
        resp.end("I'm services pages");
    }
    else{
        resp.end("404 error");
    }

});
server.listen(3000,console.log("I'm listening on port 3k"));