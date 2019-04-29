<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    function __construct(){
        parent::__construct();
        if(!$this->session->has_userdata('logged_in')){
            redirect('login');
        }
    }

	public function index()
	{
	    $data['product'] = $this->model_all->get('tb_produk')->result();
		$this->template->load('product/index', $data);
	}

    public function create()
    {
        $this->template->load('product/create');
    }

    public function store(){

	    $data = array(
            'nama_produk' => $this->input->post('name'),
            'stok' => $this->input->post('stock'),
            'harga_produk' => $this->input->post('price'),
            'tipe_produk' => $this->input->post('type')
        );

        $this->model_all->store($data, 'tb_produk');

        redirect('product');
    }

    public function show($id){
        $where = array('id_produk' => $id);
        $data['product'] = $this->model_all->show($where, 'tb_produk')->result();
        $this->template->load('product/edit', $data);
    }

    public function update($id){
        $data = array(
            'nama_produk' => $this->input->post('name'),
            'stok' => $this->input->post('stock'),
            'harga_produk' => $this->input->post('price'),
            'tipe_produk' => $this->input->post('type')
        );

        $where = array(
            'id_produk' => $id
        );

        $this->model_all->update($where, $data, 'tb_produk');

        redirect('product');
    }

    public function delete($id){
        $where = array(
            'id_produk' => $id
        );

        $this->model_all->delete($where, 'tb_produk');

        redirect('product');
    }
}
