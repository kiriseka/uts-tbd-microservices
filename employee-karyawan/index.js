require('dotenv').config();

const express = require('express');
const app = express();
const postsRouter = require('./routes/posts.router');

app.use(express.json());
app.use(express.urlencoded({ extended: false }));

app.use('/', postsRouter)
app.use('/gambar', express.static('images'))

const PORT = process.env.PORT || 3000

app.listen(PORT, () => {
    console.log("Server running...")
})