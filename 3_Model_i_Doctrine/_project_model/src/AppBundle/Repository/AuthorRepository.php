<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * AuthorRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AuthorRepository extends EntityRepository
{
    public function getAllAuthorsByName(){
        return ["0" => "Pierwszy"];
    }

}
