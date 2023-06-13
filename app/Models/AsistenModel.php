<?php

namespace App\Models;

use CodeIgniter\Model;

class AsistenModel extends Model
{
    protected $table = 'asisten';
    protected $primaryKey = 'nim';
    protected $allowedFields = ['nim', 'nama', 'praktikum', 'ipk'];
    protected $useAutoIncremenet = false;

    public function simpan($record)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('asisten');
        $builder->insert($record);
    }

    public function hapus($nim)
    {
        $this->where(['nim' => $nim])->delete($nim);
    }

    public function ubah($data)
    {
        $this->save([
            'nim' => $data['nim'],
            'nama' => $data['nama'],
            'praktikum' => $data['praktikum'],
            'ipk' => $data['ipk'],
        ]);
    }
    public function ambil($nim)
    {
        return $this->where(['nim' => $nim])->first();
    }
}
