<?php
 class messages{
    private const MESSAGE_SUCESS_ADD="query_succes_add";
    private const MESSAGE_ERROR_ADD="query_error_add";
    private const MESSAGE_ERROR_ITEMS="query_error_items";
    private const MESSAGE_SUCCESS_DELETE="query_success_delete";
    private const MESSAGE_ERROR_DELETE="query_error_delete";
    private const MESSAGE_SUCCESS_UPDATE="query_success_update";
    private const MESSAGE_ERROR_UPDATE="query_error_update";
    private $listMessages=[];
    public function __construct(){
        $this->listMessages=[
            messages::MESSAGE_SUCESS_ADD=>"Add Exitoso",
            messages::MESSAGE_ERROR_ADD=>"Add Error",
            messages::MESSAGE_ERROR_ITEMS=>"Itema Error",
            messages::MESSAGE_SUCCESS_DELETE=>"Delete exitoso",
            messages::MESSAGE_ERROR_DELETE=>"Delete error",
            messages::MESSAGE_SUCCESS_UPDATE=>"Update Exitoso",
            messages::MESSAGE_ERROR_UPDATE=>"Update error"
        ];
    }
    public function getMessageHash($key){
        return  $this->listMessages[$key];
    }
 }
?>