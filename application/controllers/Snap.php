<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Snap extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct()
    {
        parent::__construct();
        $params = array('server_key' => 'Mid-server-5dRPQlTmLB5wmGbshEA1Zh05', 'production' => true);
		$this->load->library('midtrans');
		$this->midtrans->config($params);
		$this->load->helper('url');
		$this->load->model('home_model');	
    }

    public function index()
    {
    	$this->load->view('checkout_snap');
    }

    public function token()
    {
		$id_transaksi = $this->input->post('id_transaksi');
		$harga = $this->input->post('harga');
		$nama = $this->input->post('nama');
		$no_hp = $this->input->post('no_hp');
		$paket = $this->input->post('paket');
		$total = $this->input->post('total');
		$id_paket = $this->input->post('id_paket');
		$id_game = $this->input->post('id_game');
		$userid = $this->input->post('userid');
		$zoneid = $this->input->post('zoneid');

		$data = array('id_transaksi' =>$id_transaksi,
						'userid' =>$userid,
						'zoneid' => $zoneid,
						'id_game' => $id_game,
						'id_paket' => $id_paket,
						'biaya_admin' => 4000,
						'nama_user' => $nama,
						'no_telp' => $no_hp,
						'metode_bayar' => '1');
		$this->home_model->pesan($data);

		// Required
		$transaction_details = array(
		  'order_id' => $id_transaksi,
		  'gross_amount' => $total, // no decimal allowed for creditcard
		);

		// Optional
		$item1_details = array(
		  'id' => $id_paket,
		  'price' => $harga,
		  'quantity' => 1,
		  'name' => $nama
		);

		// Optional
		$item2_details = array(
		  'id' => '1',
		  'price' => 4000,
		  'quantity' => 1,
		  'name' => 'Biaya Admin'
		);

		// Optional
		$item_details = array ($item1_details, $item2_details);

		// Optional
		// $billing_address = array(
		//   'first_name'    => "Andri",
		//   'last_name'     => "Litani",
		//   'address'       => "Mangga 20",
		//   'city'          => "Jakarta",
		//   'postal_code'   => "16602",
		//   'phone'         => "081122334455",
		//   'country_code'  => 'IDN'
		// );

		// Optional
		// $shipping_address = array(
		//   'first_name'    => "Obet",
		//   'last_name'     => "Supriadi",
		//   'address'       => "Manggis 90",
		//   'city'          => "Jakarta",
		//   'postal_code'   => "16601",
		//   'phone'         => "08113366345",
		//   'country_code'  => 'IDN'
		// );

		// Optional
		$customer_details = array(
		  'first_name'    => $nama,
		  'phone'         => $no_hp,
		);

		// Data yang akan dikirim untuk request redirect_url.
        $credit_card['secure'] = true;
        //ser save_card true to enable oneclick or 2click
        //$credit_card['save_card'] = true;

        $time = time();
        $custom_expiry = array(
            'start_time' => date("Y-m-d H:i:s O",$time),
            'unit' => 'hour', 
            'duration'  => 5
        );
        
        $transaction_data = array(
            'transaction_details'=> $transaction_details,
            'item_details'       => $item_details,
            'customer_details'   => $customer_details,
            'credit_card'        => $credit_card,
            'expiry'             => $custom_expiry
        );

		error_log(json_encode($transaction_data));
		$snapToken = $this->midtrans->getSnapToken($transaction_data);
		error_log($snapToken);
		echo $snapToken;
    }

    public function finish()
    {
    	$result = json_decode($this->input->post('result_data'),true);
    	$data = array('id_transaksi' => $result['order_id'],
    					'total_bayar' => $result['gross_amount'],
    					'status' => $result['status_code'],
    					'tgl_transaksi' => $result['transaction_time'],
    					'bank'		=> $result['va_numbers'][0]['bank'],
    					'virtual_account' => $result['va_numbers'][0]['va_number'],
    					'link_pdf' => $result['pdf_url'],
    			);
    	$simpan = $this->home_model->edit($data);
    	redirect(base_url('home/invoice/'. $result['order_id']), 'refresh');
    }
}
