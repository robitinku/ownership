<?php

namespace App\Models;

use CodeIgniter\Model;

class OwnerModel extends Model
{
	protected $table = 'owners';

	protected $primaryKey = 'owner_id ';

	protected $allowedFields = ['company'];

}

?>