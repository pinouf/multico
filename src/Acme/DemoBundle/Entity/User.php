<?php 

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $user_id;

    /**
     * @var string $ppluid
     * @ORM\Column(name="PPL_UID", type="string", length=255, nullable=true)
     */
    protected $pplUid;

    /**
     * @var string $pplFirstName
     * @ORM\Column(name="PPL_FIRSTNAME", type="string", length=255, nullable=true)
     */
    protected $pplFirstName;
}