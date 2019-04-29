<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {

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
        $query = 'SELECT tb_transaksi.*, tb_produk.nama_produk FROM tb_transaksi INNER JOIN tb_produk ON 
        tb_transaksi.id_produk = tb_produk.id_produk ORDER BY tb_transaksi.tanggal_transaksi DESC';

        $data['transaction'] = $this->model_all->query($query);

        $this->template->load('transaction/index', $data);
    }

    public function create()
    {
        $data['product'] = $this->model_all->get('tb_produk')->result();
        $this->template->load('transaction/create', $data);
    }

    public function chart()
    {
        $query = 'SELECT tb_produk.nama_produk, SUM(tb_transaksi.id_transaksi) as sold
        FROM tb_transaksi INNER JOIN tb_produk ON tb_transaksi.id_produk = tb_produk.id_produk 
        GROUP BY tb_produk.id_produk';

        $data['transaction'] = $this->model_all->query($query);

        $this->template->load('transaction/chart', $data);
    }

    public function store(){

        $product_id = $this->input->post('product');
        $count = $this->input->post('count');
        $total = 0;
        $stock = 0;

        $where = array(
            'id_produk' => $product_id
        );

        $product = $this->model_all->show($where, 'tb_produk')->result();

        foreach ($product as $item){
            $total = $item->harga_produk * $count;
            $stock = $item->stok;
        }

        $data = array(
            'id_produk' => $product_id,
            'jumlah_produk' => $count,
            'total_harga' => $total,
            'tanggal_transaksi' => date('Y-m-d')
        );

        $this->model_all->store($data, 'tb_transaksi');
        $this->minusCount($product_id, $stock, $count);

        redirect('transaction');
    }

    private function minusCount($id, $stock, $count){
        $data = array(
            'stok' => $stock - $count,
        );

        $where = array(
            'id_produk' => $id
        );

        $this->model_all->update($where, $data, 'tb_produk');

        return true;
    }
}
