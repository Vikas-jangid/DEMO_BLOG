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
    private $Blog_title;

    /**
     * 
     * @ORM\Column(type="text" , length="100")
     */
    private $Author;

    /**
     * 
     * @ORM\Column(type="text" , length="255")
     */
    private $Blog_description;

    public function getId() {
        return $this->id;
    }

    public function setId($Id) {
        $this->id = $Id;
    }

    public function getBlog_Title() {
        return $this->Blog_title;
    }

    public function setBlog_Title($Blog_Title) {
        $this->Blog_title = $Blog_Title;
    }

    public function getAuthor() {
        return $this->Author;
    }

    public function setAuthor($Author) {
        $this->Author = $Author;
    }
    
    public function getBlog_description() {
        return $this->Blog_description;
    }

    public function setBlog_description($Blog_description) {
        $this->Blog_description = $Blog_description;
    }

}
