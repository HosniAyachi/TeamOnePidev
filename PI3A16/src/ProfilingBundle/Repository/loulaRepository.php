<?php

namespace ProfilingBundle\Repository;

use Doctrine\ORM\Query;

/**
 * loulaRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class loulaRepository extends \Doctrine\ORM\EntityRepository
{



    public function searchJson($id)
    {
        $dql=$this->getEntityManager();
        $query=$dql->createQuery("SELECT u FROM ProfilingBundle:loula u WHERE u.id='$id'");
        return $query->getResult();
    }

    public function searchByCriteria($value,$criteria)
    {
        $dql=$this->getEntityManager();
        $query=$dql->createQuery("SELECT u FROM ProfilingBundle:loula u WHERE u.'$criteria' LIKE '$value%'");
        return $query->getResult(Query::HYDRATE_ARRAY);
    }

    public function intoArray()
    {
        $dql=$this->getEntityManager();
        $query=$dql->createQuery('SELECT m from ProfilingBundle:loula m');
        $result=$query->getResult(Query::HYDRATE_ARRAY);
        return $result;
    }



}

