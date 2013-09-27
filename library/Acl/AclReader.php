<?php

class AclReader 
{
    private $aclStorage;
    
 	public function __construct(StorageBase $aclStorage) {
 	    $this->aclStorage = $aclStorage;
 	}
 	
 	public function readAcl() {
        return $this->aclStorage->readAcl();
 	}
}