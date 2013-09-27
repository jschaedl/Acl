<?php

abstract class StorageBase 
{
    abstract public function readAcl();
    abstract public function writeAcl(ACL $acl);
}