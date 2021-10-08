<?php

namespace App\Controllers;

use App\Models\OwnerModel;
use CodeIgniter\Controller;
class Owner extends BaseController
{
	
	public function index()
	{
	$OwnerModel= new OwnerModel();
	
        $data['ownerdata'] = $OwnerModel->findAll();
		
		
        return view('ownerview', $data);
	
	}
	public function adddata()
    {
		
		$OwnerModel = new OwnerModel();
		
           $m= $this->request->getVar('company');
			$dd= $OwnerModel->insert([
				'company'	=>	$this->request->getPost('company')
				
			]);
		 echo $dd;
	}
	public function editdata()
    {
		$owner_id=$this->request->getPost('owner_id');
		$OwnerModel = new OwnerModel();
		$data['ownerdata'] = $OwnerModel->where('owner_id', $owner_id)->first();
        
        $result = array('company' =>$data['ownerdata']['company'],
		   'owner_id' =>$data['ownerdata']['owner_id']
		   //'branchname' =>$bank->branchname,
		   //'account_name'=>$bank->account_name
		   );
		   //print_r($result);
		print(json_encode($result)) ; 
	}
	public function updatedata()
    {
		$owner_id=$this->request->getPost('owner_id');
		$OwnerModel = new OwnerModel();
		$data = [
	            'company' => $this->request->getVar('company')
	            
	        ];
		$OwnerModel->update($owner_id, $data);
		
        echo "update successfully";
	}
}
