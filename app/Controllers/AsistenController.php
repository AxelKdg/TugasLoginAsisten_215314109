<?php

namespace App\Controllers;

use App\Models\AsistenModel;
use App\Models\LoginModel;

class AsistenController extends BaseController
{
    protected $model;
    protected $loginModel;

    public function __construct()
    {
        $this->model = new AsistenModel();
        $this->loginModel = new LoginModel();
    }

    public function index()
    {
        $session = session();
        if ($session->has('username')) {
            $username = $session->get('username');
            $asisten = $this->model->findAll();
            $data = [
                'title' => 'Daftar Asisten',
                'asisten' => $asisten,
                'username' => $username
            ];
            return view('AsistenView', $data);
        } else {
            return redirect()->to(base_url('/asisten/login'));
        }
    }

    public function simpan()
    {
        helper('form');
        $session = session();
        if ($session->has('username')) {
            $username = $session->get('username');
            $asisten = $this->model->findAll();
            $data = [
                'title' => 'Form Pendaftaran',
                'asisten' => $asisten,
                'username' => $username
            ];

            // Memeriksa apakah melakukan submit data atau tidak.
            if (!$this->request->is('post')) {
                return view('/asisten/simpan');
            }
            // Mengambil data yang disubmit dari form
            $post = $this->request->getPost([
                'nim', 'nama', 'praktikum',
                'ipk'
            ]);
            // Mengakses Model untuk menyimpan data
            model(AsistenModel::class)->simpan($post);
            return view('/asisten/success');
        } else {
            return redirect()->to(base_url('asisten/login'));
        }
    }
    public function update()
    {
        $session = session();
        if ($session->has('username')) {
            $username = $session->get('username');
            $asisten = $this->model->findAll();
            $data = [
                'title' => 'Daftar Asisten',
                'asisten' => $asisten,
                'username' => $username
            ];
            // Memeriksa apakah melakukan submit data atau tidak.
            if (!$this->request->is('post')) {
                return view('/asisten/update');
            }
            // Mengambil data yang disubmit dari form
            $post = $this->request->getPost([
                'nim', 'nama', 'praktikum',
                'ipk'
            ]);
            // Mengakses Model untuk menyimpan data
            $model = model(AsistenModel::class);
            $model->ubah($post);
            return redirect()->to(base_url('/asisten'));
        } else {
            return redirect()->to(base_url('asisten/login'));
        }
    }

    public function delete()
    {
        helper('form');
        $session = session();
        if ($session->has('username')) {
            $username = $session->get('username');
            $asisten = $this->model->findAll();
            $data = [
                'title' => 'Form Delete',
                'asisten' => $asisten,
                'username' => $username
            ];
            // Memeriksa apakah melakukan submit data atau tidak.
            if (!$this->request->is('post')) {
                return view('/asisten/delete');
            }
            // Mengambil data yang disubmit dari form
            $post = $this->request->getPost([
                'nim'
            ]);

            // Mengakses Model untuk menyimpan data
            $model = model(AsistenModel::class);
            $model->delete($post);
            return redirect()->to(base_url('/asisten'));
        } else {
            return redirect()->to(base_url('asisten/login'));
        }
    }
    public function login()
    {
        $session = session();
        if ($session->has('username')) {
            return redirect()->to(base_url('asisten'));
        }
        return view('asisten/login');
    }

    public function search()
    {
        $session = session();
        if ($session->has('username')) {
            $username = $session->get('username');
            $asisten = $this->model->findAll();
            $data = [
                'title' => 'Form Pendaftaran',
                'asisten' => $asisten,
                'username' => $username
            ];
            if (!$this->request->is('post')) {
                return view('/asisten/search');
            }

            $nim = $this->request->getPost(['key']);

            $model = model(AsistenModel::class);
            $asisten = $model->ambil($nim['key']);

            $data = ['hasil' => $asisten];
            return view('/asisten/search', $data);
        } else {
            return redirect()->to(base_url('asisten/login'));
        }
    }

    public function check()
    {
        $post = $this->request->getPost(['username', 'password']);
        $loginModel = model(LoginModel::class);
        $check = $this->loginModel->periksa($post);

        if ($check > 0) {
            $session = session();
            $session->set('username', $post['username']);
            return redirect()->to(base_url('/asisten'));
        } else {
            return view('/login/fail');
        }
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('asisten/login'));
    }
}
