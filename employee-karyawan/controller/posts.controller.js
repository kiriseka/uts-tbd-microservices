const pool = require('../database/index')

const postController = {
    getAll: async (req, res) => {
        try {
            const [rows, fields] = await pool.query('select * from mc')
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
            const [rows, fields] = await pool.query('select * from mc where id = ?', [id])
            res.json({
                data: rows
            })
        } catch (error) {
            console.log(error)
        }
    },
    create: async (req, res) => {
        try {
            const { id, nama, deskripsi, gambar } = req.body
            const sql = 'insert into mc (id, nama, deskripsi, gambar) values (?, ?, ?, ?)'
            const [rows, fields] = await pool.query(sql, [id, nama, deskripsi, gambar])
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
            const { nama, deskripsi, gambar } = req.body
            const { id } = req.params
            const sql = 'update mc set nama = ?, deskripsi = ?, gambar = ? where id = ?'
            const [rows, fields] = await pool.query(sql, [nama, deskripsi, gambar, id])
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
            const [rows, fields] = await pool.query('delete from mc where id = ?', [id])
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