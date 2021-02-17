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
     * Files of the project.
     *
     * @ORM\Column(type="json", nullable=true)
     */
    private $files = [];

    /**
     * Slug of the project.
     *
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * Context of the project.
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $context;

    /**
     * Start date of the project.
     *
     * @ORM\Column(type="date")
     */
    private $startDate;

    /**
     * End date of the project.
     *
     * @ORM\Column(type="date")
     */
    private $endDate;

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

    /**
     * Getter of the files of the project.
     *
     * @return array|null
     */
    public function getFiles(): ?array
    {
        return $this->files;
    }

    /**
     * Setter of the files of the project.
     *
     * @param array|null $files Files to set to the project.
     *
     * @return self
     */
    public function setFiles(?array $files): self
    {
        $this->files = $files;

        return $this;
    }

    /**
     * Getter of the slug of the project.
     *
     * @return string|null
     */
    public function getSlug(): ?string
    {
        return $this->slug;
    }

    /**
     * Setter of the slug of the project.
     *
     * @param string $slug Slug to set to the project.
     *
     * @return self
     */
    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Getter of the context of the project.
     *
     * @return string|null
     */
    public function getContext(): ?string
    {
        return $this->context;
    }

    /**
     * Setter of the context of the project.
     *
     * @param string $context Context to set to the project.
     *
     * @return self
     */
    public function setContext(string $context): self
    {
        $this->context = $context;

        return $this;
    }

    /**
     * Getter of the start date of the project.
     *
     * @return \DateTimeInterface|null
     */
    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    /**
     * Setter of the start date of the project.
     *
     * @param \DateTimeInterface $startDate Start date to set to the project.
     *
     * @return self
     */
    public function setStartDate(\DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Getter of the end date of the project.
     *
     * @return \DateTimeInterface|null
     */
    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    /**
     * Setter of the end date of the project.
     *
     * @param \DateTimeInterface $endDate End date to set to the project.
     *
     * @return self
     */
    public function setEndDate(\DateTimeInterface $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }
}