var http = require('http');
var url = require('url');
var mysql = require('mysql');
var fs = require('fs');
var express = require('express');
var app = express();

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "1955",
  database: "proyecto_verd_abue"
});

app.post('/LEDon', function(req, res) {
    
	var resultado;
	
	con.connect(function(err) {
      con.query("SELECT * FROM verduras", function (err, result, fields) {
          if (err) throw err;
		  resultado = result;
          console.log(result);
        });
      });

    res.send(resultado);
    // Run your LED toggling code here
});

app.listen(8080);