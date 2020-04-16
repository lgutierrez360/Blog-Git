<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
//use Symfony\Component\Security\Core\User\UserInterface;
/*
AdvancedUserInterface extiende a UserInterface y necesaria para implementar el acceso de usuarios 
*/
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UsersRepository")
 */
class Users implements AdvancedUserInterface
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     * @Assert\NotBlank()
     */
    private $name;

    /**
     * @var string
     * @Assert\NotBlank()
     */
    private $surname;

    /**
     * @var string
     * @Assert\NotBlank()
     */
    private $email;

    /**
     * @var string
     * @Assert\NotBlank()
     */
    private $nick;

    /**
     * @var string
     * @Assert\NotBlank()     
     */
    private $password;

    /**
     * @var \DateTime
     */
    private $create_at = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     */
    public $is_active;

    /**
     * @var string
     */
    private $administrator;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Users
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set surname
     *
     * @param string $surname
     *
     * @return Users
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Users
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set nick
     *
     * @param string $nick
     *
     * @return Users
     */
    public function setNick($nick)
    {
        $this->nick = $nick;

        return $this;
    }

    /**
     * Get nick
     *
     * @return string
     */
    public function getNick()
    {
        return $this->nick;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Users
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set create_at
     *
     * @param \DateTime $create_at
     *
     * @return Users
     */
    public function setCreate_at($create_at)
    {
        $this->create_at = $create_at;

        return $this;
    }

    /**
     * Get create_at
     *
     * @return \DateTime
     */
    public function getCreate_at()
    {
        return $this->create_at;
    }

    /**
     * Set is_active
     *
     * @param integer $is_active
     *
     * @return Users
     */
    public function setIsActive($is_active)
    {
        $this->is_active = $is_active;

        return $this;
    }

    /**
     * Get is_active
     *
     * @return integer
     */
    public function getIsActive()
    {
        return $this->is_active;
    }

    /**
     * Set administrator
     *
     * @param string $administrator
     *
     * @return Users
     */
    public function setAdministrator($administrator)
    {
        $this->administrator = $administrator;

        return $this;
    }

    /**
     * Get administrator
     *
     * @return string
     */
    public function getAdministrator()
    {
        return $this->administrator;
    }

    /* INTRODUCIMOS LOS SIGUIENTES MÉTODOS *******************************************/
    public function getUsername(){  
        return $this->email;
    }
    public function getRoles(){ 
        return array('ROLE_USER','ROLE ADMIN');
    }    

    public function getSalt(){
        return null; 
    }
    public function eraseCredentials(){  }
    
    /*
    Metodos necesarios para implementar la interface AdvancedUserInterface
    */
    public function isAccountNonExpired()
    {
        return true;
    }

    public function isAccountNonLocked()
    {
        return true;
    }

    public function isCredentialsNonExpired()
    {
        return true;
    }

    public function isEnabled()
    {
        return $this->is_active;
    }

}

