<?php
  namespace app\database\contracts;
  interface crud{
    public  function create();
    public function read();
    public  function update();
    public  function delete();
  }
?>