<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Project.
 * Describe a project.
 *
 * @ORM\Entity(repositoryClass=ProjectRepository::class)
 */
class Project
{
    /**
     * ID of the project.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * Title of the project.
     *
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * Images of the project.
     *
     * @ORM\Column(type="json")
     */
    private $images = [];

    /**
     * Description of the project.
     *
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * Tag of the project.
     * It corresponds to the framework in which I work on the project (degree, company...).
     *
     * @ORM\Column(type="string", length=255)
     */
    private $tag;

    /**
     * @ORM\Column(type="json", nullable=true)
     */
    private $files = [];

    /**
     * Getter of the ID of the project.
     *
     * @return integer|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Getter of the title of the project.
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * Setter of the title of the project.
     *
     * @param string $title Title to set to the project.
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Getter of the images of the project.
     *
     * @return array|null
     */
    public function getImages(): ?array
    {
        return $this->images;
    }

    /**
     * Setter of the images of the project.
     *
     * @param array $images Images to set to the project.
     *
     * @return self
     */
    public function setImages(array $images): self
    {
        $this->images = $images;

        return $this;
    }

    /**
     * Getter of the description of the project.&
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Setter of the description of the project.
     *
     * @param string $description Description to set to the project.
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Getter of the tag of the project.
     *
     * @return string|null
     */
    public function getTag(): ?string
    {
        return $this->tag;
    }

    /**
     * Setter of the tag of the project.
     *
     * @param string $tag Tag to set to the project.
     *
     * @return self
     */
    public function setTag(string $tag): self
    {
        $this->tag = $tag;

        return $this;
    }

    public function getFiles(): ?array
    {
        return $this->files;
    }

    public function setFiles(?array $files): self
    {
        $this->files = $files;

        return $this;
    }
}
