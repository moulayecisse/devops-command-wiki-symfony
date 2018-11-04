<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Cisse\Traits\Entity\ContentTrait;
use Cisse\Traits\Entity\FullDescriptionTrait;
use Cisse\Traits\Entity\IdTrait;
use Cisse\Traits\Entity\LabelTrait;
use Cisse\Traits\Entity\NameTrait;
use Cisse\Traits\Entity\ShortDescriptionTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\CommandRepository")
 */
class Command
{
    use IdTrait;
    use NameTrait;
    use LabelTrait;
    use ShortDescriptionTrait;
    use FullDescriptionTrait;
    use ContentTrait;
}
