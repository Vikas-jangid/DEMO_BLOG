<?php

namespace App\Entity;

use App\Repository\BlogRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BlogRepository::class)
 */
class Blog {

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * 
     * @ORM\Column(type="text" , length="100")
     */
    private $BlogTitle;

    /**
     * 
     * @ORM\Column(type="text" , length="100")
     */
    private $Author;

    /**
     * 
     * @ORM\Column(type="text" , length="255")
     */
    private $BlogDescription;

    public function getId() {
        return $this->id;
    }

    public function setId($Id) {
        $this->id = $Id;
    }

    public function getBlogTitle() {
        return $this->BlogTitle;
    }

    public function setBlogTitle($BlogTitle) {
        $this->BlogTitle = $BlogTitle;
    }

    public function getAuthor() {
        return $this->Author;
    }

    public function setAuthor($Author) {
        $this->Author = $Author;
    }
    
    public function getBlogDescription() {
        return $this->BlogDescription;
    }

    public function setBlogDescription($BlogDescription) {
        $this->BlogDescription = $BlogDescription;
    }

}
