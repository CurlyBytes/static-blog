<?php
defined('BASEPATH') or exit('No direct script access allowed');


use Maricopa\Domain\SharedKernel\Models\Entity,
    Maricopa\Domain\SharedKernel\Models\Guid,
    Maricopa\Domain\SharedKernel\Arrayable;


class Curlybytes_Model extends CI_Model
{
    use Arrayable, Guid;

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    
 

}
