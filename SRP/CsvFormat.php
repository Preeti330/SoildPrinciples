<?php

class csvFormat{

    public function getCsvFormat(){
        $model=new User();
        $data =$model->getUserList();
        return "CSV Format";
    }

}

?>