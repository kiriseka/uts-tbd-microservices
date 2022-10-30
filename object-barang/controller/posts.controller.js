const pool = require('../database/index')

const postController = {
    getAll: async (req, res) => {
        try {
            const [rows, fields] = await pool.query('select * from pesta')
            res.json({
                data: rows
            })
        } catch (error) {
            console.log(error)
        }
    },
    getById: async (req, res) => {
        try {
            const { id } = req.params
            const [rows, fields] = await pool.query('select * from pesta where id = ?', [id])
            res.json({
                data: rows
            })
        } catch (error) {
            console.log(error)
        }
    },
    create: async (req, res) => {
        try {
            const { id, nama, harga, deskripsi, gambar } = req.body
            const sql = 'insert into pesta (id, nama, harga, deskripsi, gambar) values (?, ?, ?, ?, ?)'
            const [rows, fields] = await pool.query(sql, [id, nama, harga, deskripsi, gambar])
            res.json({
                data: rows
            })
        } catch (error) {
            console.log(error)
            res.json({
                status:'error'
            })
        }
    },
    update: async (req, res) => {
        try {
            const { nama, harga, deskripsi, gambar } = req.body
            const { id } = req.params
            const sql = 'update pesta set nama = ?, harga = ?, deskripsi = ?, gambar = ? where id = ?'
            const [rows, fields] = await pool.query(sql, [nama, harga, deskripsi, gambar, id])
            res.json({
                data: rows
            })
        } catch (error) {
            console.log(error)
            res.json({
                status:'error'
            })
        }
    },
    delete: async (req, res) => {
        try {
            const { id } = req.params
            const [rows, fields] = await pool.query('delete from pesta where id = ?', [id])
            res.json({
                data: rows
            })
        } catch (error) {
            console.log(error)
            res.json({
                status:'error'
            })
        }
    }
}

module.exports = postController;