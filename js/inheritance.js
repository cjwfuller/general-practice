//
// Inheritance in Javascript
//

var http = require("http");

// Employee object is the object at the top of the hierarchy
function Employee() {
    this.name = "";
    this.dept = "general";
}

// Manager is an Employee in the department "management"
function Manager() {
    this.dept = "management";
}
Manager.prototype = new Employee;

// Developer is an Employee in the "development" department.  The Developer
// object adds the languages property
function Developer() {
    this.dept = "development";
    this.languages = []
}
Developer.prototype = new Employee;

// Create a Node server
http.createServer(function(request, response) {
    response.writeHead(200, {"Content-Type": "text/plain"});
    // chris is a Developer who knows some languages and has fullname "Fuller, Chris"
    var chris = new Developer; 
    chris.name = "Fuller, Chris";
    chris.languages = ["c", "python", "js", "php"];
    response.write(chris.name);
    response.end();
}).listen(8888);
