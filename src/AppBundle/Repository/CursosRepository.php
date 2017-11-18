<?php

namespace AppBundle\Repository;

/**
 * CursosRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CursosRepository extends \Doctrine\ORM\EntityRepository
{

    /**
     * Función que devuelve los cursos agrupados por curso
     * @return array
     */
    public function getCursosGroupByCursos(){
        $qb = $this->getEntityManager()->createQuery(
          'SELECT c.curso
           FROM AppBundle\Entity\Cursos c
           GROUP BY c.curso'
        );

        return $qb->getResult();
    }
    /**
     * Función que devuelve los cursos agrupados por curso
     * @return array
     */
    public function getCursosGroupByCursos2($id){
        $qb = $this->getEntityManager()->createQuery(
            'SELECT c.curso
           FROM AppBundle\Entity\Cursos c where c.id = :id '
        );
        $qb->setParameter('id', $id);


        return $qb->getResult();
    }

    /**
     * Función que devuelve los cursos que contengan el curso del parámetro
     * @param $curso
     * @return array
     */
    public function getCursosByCurso($curso){
        $qb = $this->getEntityManager()->createQuery(
            'SELECT c
             FROM AppBundle\Entity\Cursos c,AppBundle\Entity\Alumnos al
             WHERE al.idAlumno = :curso and al.idCurso = c.id'
        );

        $qb->setParameter('curso', $curso);
        return $qb->getResult();
    }
    /**
     * Función que devuelve los cursos que contengan el curso del parámetro
     * @param $curso
     * @return array
     */
    public function getCursoById($curso){
        $qb = $this->getEntityManager()->createQuery(
            'SELECT c
             FROM AppBundle\Entity\Cursos c,AppBundle\Entity\Alumnos al
             WHERE c.id = al.idCurso and al.id = :curso'
        );

        $qb->setParameter('curso', $curso);
        return $qb->getResult();
    }
}
