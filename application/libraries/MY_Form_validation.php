<?php
class MY_Form_validation extends CI_Form_validation
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getErrorArray()
    {
        $msg = $this->_error_array;
        foreach ($msg as $key => $value) {
            header('Content-Type: application/json');
            return json_encode(array(
                'type' => 'error',
                'campo' => $key,
                "msg" => $value
            ));
        }
    }

    public function setError($campo, $texto)
    {
        return $campo . "::" . $texto;
    }
}
