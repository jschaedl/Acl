<?php

class Acl 
{
    //private $users;
    //private $groups;
    //private $roles;
    //private $rights;
    
    private $userGroupMap;
    private $rigthRoleMap;
    private $roleGroupMap;
    
    //public function addUser(User $user) {}
 	//public function addGroup(Group $group) {}
 	//public function addRole(Role $role) {}
 	//public function addRight(Right $right) {}
 	//public function addResource(Resource $resource) {}
 	
    public function addUserToGroup(User $user, Group $group) {}
    public function addRightToRole(Right $right, Role $role) {}
    public function addRoleToGroup(Role $role, Group $group) {}
    //public function addResourceToRole(Resource $resource, Role $role) {}
    
    public function getGroups(User $user) {}
    public function getRoles(Group $group) {}
    public function getRights(Role $role) {}
    //public function getResources(Role $role) {}
    
    //public function allow(Role $role, Resource $resource) {}
    //public function deny(Role $role, Resource $resource) {}
    
    //public function isAllowed(User $user, Resource $resource) {}
    public function hasRight(User $user, Right $right) {}
}