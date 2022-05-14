const express = require('express')
const bodyParser = require('body-parser')
const app = express()
const { Client } = require('pg')
const port = process.env.PORT || 4000
const client = new Client({
   host: 'localhost',
   user: 'root',
   database: 'postgres',
   password: 'secret',
   port: '5432'
})
app.use(bodyParser.urlencoded({extended: false}))
app.post('/login', (req, res) => {
    let userName = req.body.userName
    let userPass = req.body.userPass
    let userRole = req.body.userRole
    client.query(`INSERT INTO demo(username, userpass, userrole) VALUES ('${userName}','${userPass}','${userRole}')`)
    client.query('SELECT * FROM demo', function(err, result, fields){
        if (err) throw err
        console.log(result.rows)
    })
    res.sendStatus(204)
})

client.connect(function(err){
    if(err){
        throw err
    } else {
        console.log(`Connected!`)
        client.query('SELECT * FROM demo', function(err, result, fields){
            if (err) throw err
            console.log(result.rows)
        })
    }
})
app.listen(port, () => { console.log(`Listening on port ${port}`)})
