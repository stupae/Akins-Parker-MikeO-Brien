<?php

namespace Swim\Entity;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Security\Core\User\UserInterface;


class User implements UserInterface
{
    /**
     * User id.
     *
     * @var integer
     */
    protected $user_id;

    /**
     * Username.
     *
     * @var string
     */
    protected $username;

    /**
     * Salt.
     *
     * @var string
     */
    protected $salt;

    /**
     * Password.
     *
     * @var integer
     */

    protected $password;


    /**
     * Role.
     *
     * ROLE_USER or ROLE_ADMIN.
     *
     * @var string
     */
    protected $role;

    /**
     * The filename of the main artist image.
     *
     * @var string
     */
    protected $image;

    /**
     * When the artist entity was created.
     *
     * @var DateTime
     */
    protected $createdAt;

    /**
     * The temporary uploaded file.
     *
     * $this->image stores the filename after the file gets moved to "images/".
     *
     * @var \Symfony\Component\HttpFoundation\File\UploadedFile
     */

    protected $file;


    // custom properties
    protected $firstname;
    protected $lastname;
    protected $spouse_firstname;
    protected $spouse_lastname;
    protected $mobile;
    protected $home;
    protected $email;
    protected $address;

    public function getFirstName()
    {
        return $this->firstname;
    }

    public function setFirstName($firstname)
    {
        $this->firstname = ucwords($firstname);
    }

    public function getLastName()
    {
        return $this->lastname;
    }

    public function setLastName($lastname)
    {
        $this->lastname = ucwords($lastname);
    }

    public function getSpouseFirstName()
    {
        return $this->spouse_firstname;
    }

    public function setSpouseFirstName($firstname)
    {
        $this->spouse_firstname = $firstname;
    }

    public function getSpouseLastName()
    {
        return $this->spouse_lastname;
    }

    public function setSpouseLastName($lastname)
    {
        $this->spouse_lastname = $lastname;
    }

    public function getMobile()
    {
        return $this->mobile;
    }

    public function setMobile($mobile)
    {
        $this->mobile= $mobile;
    }

    public function getHome()
    {
        return $this->home;
    }

    public function setHome($home)
    {
        $this->home= $home;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email= $email;
    }

    public function getUserId()
    {
        return $this->user_id;
    }

    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @inheritDoc
     */
    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @inheritDoc
    */
    public function getSalt()
    {
        return $this->salt;
    }

    public function setSalt($salt)
    {
        $this->salt = $salt;
    }

    /**
     * @inheritDoc
     */
    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }


    public function getImage() {
        // Make sure the image is never empty.
        if (empty($this->image)) {
            $this->image = 'placeholder.gif';
        }

        return $this->image;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    public function getFile() {
        return $this->file;
    }

    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
    }

    /**
     * @inheritDoc
     */
    public function getRoles()
    {
        return array($this->getRole());
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role) {
        $this->role = $role;
    }

    /**
     * @inheritDoc
     */
    public function eraseCredentials()
    {
    }


    /**
     * Gets the value of address.
     *
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets the value of address.
     *
     * @param mixed $address the address
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }
}