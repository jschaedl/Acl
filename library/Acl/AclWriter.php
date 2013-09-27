<?php

class AclWriter
{
    private $aclStorage;

    public function __construct(StorageBase $aclStorage) {
        $this->aclStorage = $aclStorage;
    }

    public function writeAcl(ACL $acl) {
        return $this->aclStorage->readAcl($acl);
    }
}