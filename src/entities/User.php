<?php
/**
 * @Entity @Table(name="users")
 **/
class User
{
     /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    /** @Column(type="string") **/
    protected $login;
	
	/** @Column(type="string") **/
    protected $email;
	
	/** @Column(type="string") **/
    protected $hash;
    
    /** @Column(type="string") **/
    protected $role;
	
	/** @Column(type="datetime") **/
    protected $created;
    
    /** @Column(type="datetime") **/
    protected $lastlogin;
	

    public function getId()
    {
        return $this->id;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;
        return $this;
    }
	
	public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
	
	public function getHash()
    {
        return $this->hash;
    }
    
    public function setHash($hash)
    {
        $this->hash = $hash;
        return $this;
    }

    public function setRole($roles)
    {
        $this->role = implode(',', $roles);
        return $this;
    }
	
	public function getRole()
    {
        return explode(',', $this->role);
    }

    public function getCreated()
    {
        return $this->created;
    }
    
    
    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }
    
    public function setLastlogin($last)
    {
        $this->lastlogin = $last;
    }
    
    public function getLastlogin()
    {
        return $this->lastlogin;
    }
    

}