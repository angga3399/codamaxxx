<?php
class Welcome extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model(array('M_xml','M_detailCF'));
  	 	$this->load->database();
        $this->load->helper(array('form', 'url'));
  	 	
  	 	
	}
	public function index()
	{
		$this->load->model('M_detailCF');
		$data['evn'] = $this->M_detailCF->kegiatanMen();
		$this->load->view('index', $data);

	}

	public function detailCFD($idCarFree)
	{
		$this->load->model('M_detailCF');
		$data['no'] = $this->M_detailCF->select($idCarFree);
		$data['jdw'] = $this->M_detailCF->getJadwal($idCarFree);
		$this->load->view('detailCFD', $data);
	}

	public function listEvent($idJadwal)
	{
		$this->load->model('M_listEvent');
		$data['evn'] = $this->M_listEvent->getEvent($idJadwal);
		$this->load->view('listEvent', $data);
	}

	public function tampilXML()
	{
		$this->load->model('M_xml');
        $xml['xml'] = $this->M_xml->tampilXML();

		$this->load->view('xml/dataMapXML', $xml);
	}

}
