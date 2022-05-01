const express = require('express')
const bodyParser = require('body-parser')
const app = express()
const { Client } = require('pg')
const port = process.env.PORT || 4000
const client = new Client({
   host: 'localhost',
   user: 'root',
   database: 'demo',
   password: 'secret',
   port: '5432'
})
app.use(bodyParser.urlencoded({extended: false}))
app.post('/login', (req, res) => {
    let userName = req.body.userName
    let userPass = req.body.userPass
    console.log(`Login user ${userName}`)
    client.query(`INSERT INTO demo_2(id, content, description) VALUES ('4','${userName}','${userPass}')`)
})
client.connect(function(err){
    if(err){
        throw err
    } else {

        console.log(`Connected!`)
    }
})
app.listen(port, () => { console.log(`Listening on port ${port}`)})