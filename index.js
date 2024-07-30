const express = require('express');
const mysql = require('mysql');
const app = express();
const port = 3000;

const db = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'teste_js'
});

db.connect((err) => {
    if (err) {
        throw err;
    }
    console.log('Conectado ao banco de dados');
});

app.get('/api/nomes', (req, res) => {
    const sql = 'SELECT nome FROM info_pessoal';
    db.query(sql, (err, result) => {
        if (err) throw err;
        res.json(result);
    });
});

app.use(express.static('public'));

app.listen(port, () => {
    console.log(`Servidor rodando em http://localhost:${port}`);
});
