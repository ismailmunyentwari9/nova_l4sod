const http= require('http');
// .....Create Server........
const server = http.createServer((req,resp)=>{
//    resp.end("Hello, I'm from server")
   console.log(req.url);
   if(req.url ==='/'){
    resp.end("This Is Index Page");
   }
   else if(req.url ==='/about'){
    resp.end("This Is About Page");
      }
      else if(req.url ==='/contact'){
    resp.end("This Is Contact Page"); 
   }
   else{
    resp.end("404 Error")
   }
   

})
// ........Listern on port 5000;
server.listen(5000,console.log("I'm listerning on port 5k"));