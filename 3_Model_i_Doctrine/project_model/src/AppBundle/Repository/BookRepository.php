<?php

namespace AppBundle\Repository;

//use Doctrine\ORM\EntityRepository;
//use Doctrine\ORM\EntityManager;
//use Doctrine\ORM\Mapping as ORM;


class BookRepository extends \Doctrine\ORM\EntityRepository
{


    public function findBiggerId($id)
    {

        $query = $this->getEntityManager()->CreateQuery(
            'SELECT b FROM AppBundle:Book b WHERE b.id > :baseId ORDER by b.id '
        )->setParameter('baseId', $id)->getResult();

        return $query;

    }

    public function findBiggerRating($rating)
    {

        $query = $this->getEntityManager()->CreateQuery(
            'SELECT b FROM AppBundle:Book b WHERE b.rating > :baseRating ORDER by b.rating '
        )->setParameter('baseRating', $rating)->getResult();

        return $query;

    }

 public function findByStartString($string)
    {

        $query = $this->getEntityManager()->CreateQuery(
            'SELECT b FROM AppBundle:Book b WHERE b.title LIKE :baseString ORDER by b.title'
        )->setParameter('baseString', "$string%")->getResult();

        return $query;

    }


}
