<?php

namespace AppBundle\Repository;

/**
 * UsuariosRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UsuariosRepository extends \Doctrine\ORM\EntityRepository
{
    public function getUsuario($user, $password){
        return $this->getEntityManager()
            ->createQueryBuilder()
            ->select("u")
            ->from("AppBundle:Usuarios", "u")
            ->where("u.usuario = :user", "u.password = :password")
            ->setParameter("user", $user)
            ->setParameter("password", $password)
            ->getQuery()
            ->getSingleResult();
    }
}
