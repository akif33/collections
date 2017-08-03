<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Collections extends CI_Controller {

	/**
	 * collection email start page
	 */
	public function index()
	{
		
		$this->load->view('index');
	}

	public function userCollectionForm(){

		if($post = $this->input->post()){

			$this->load->model('users');

			if ($post["GarbOrRecyOpt"] == 1) {

				$GarbOrRecyOptid = 1; 
			}else{
				$GarbOrRecyOptid = 2; 
			}

			if ($post["12Or24Hrs"] == 1) {

				$notificationTime = 1; 
			}else{
				$notificationTime = 2; 
			}

			$this->users->create($post["inputFname"], $post["inputLName"], $post["inputEmail"], $GarbOrRecyOptid, $notificationTime);

			$data['usersCollectionData'] = $this->users->getAllCollectionNotificationsDirty();

			$this->load->view('collections/collectionTable', $data);

		}else{
			$this->load->view('collections/userCollectionForm');
		}
		


	}

	public function collectionTable(){

		$this->load->model('users');
		
		$data['usersCollectionData'] = $this->users->getAllCollectionNotificationsDirty();

		$usersCollectionData = $this->users->getAllCollectionNotificationsDirty();
		$data['usersCollectionData'] = $usersCollectionData;


        $this->load->view('collections/collectionTable', $data);


	}

	public function testDB (){
		echo $this->db->query('SELECT VERSION()')->row('version');
	}
}
