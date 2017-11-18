<?php

namespace AppBundle\Repository;

use AppBundle\AppBundle;
use AppBundle\Entity\Alumno;
use AppBundle\Entity\Profesores;
use AppBundle\Entity\Partes;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * PartesRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PartesRepository extends \Doctrine\ORM\EntityRepository
{

    /**
     * Función que devuelve los partes que estan en estado Comunicado, pueden ser ordenados por fecha.
     * @param bool $sortDate
     * @return array
     */
    public function getPartesByEstado($estado = 'Comunicado', $sortDate = true)
    {
        if (!$sortDate)
            $query = $this->getEntityManager()->createQuery(
                'SELECT p 
             FROM AppBundle\Entity\Partes p
             WHERE p.idEstado IN 
             (SELECT e.id 
             FROM AppBundle\Entity\EstadosParte e
             WHERE e.estado = :estado)'
            );
        else
            $query = $this->getEntityManager()->createQuery(
                'SELECT p 
             FROM AppBundle\Entity\Partes p
             WHERE p.idEstado IN 
             (SELECT e.id   
             FROM AppBundle\Entity\EstadosParte e
             WHERE e.estado = :estado)
             ORDER BY p.fecha DESC'
            );

        $query->setParameter('estado', $estado);
        return $query->getResult();
    }

    /**
     * Función que devuelve los partes de un alumno ordenados por fecha
     * @param Alumno $alumno
     * @return array
     */
    public function getPartesByAlumnoOrdenado(Alumno $alumno, $orderDesc = false)
    {
        $query = $this->getEntityManager()->createQueryBuilder()
            ->select('p')
            ->from('AppBundle:Partes', 'p')
            ->where('p.idAlumno = :alumno');

        if (!$orderDesc)
            $query->orderBy('p.fecha');
        else
            $query->orderBy('p.fecha', 'DESC');


        $query->setParameter('alumno', $alumno);
        return $query->getQuery()->getResult();
    }

    /**
     * Función que devuelve los partes de un profesor
     * @param Alumno $alumno
     * @return array
     */
    public function getPartesByProfesor(Profesores $profesor)
    {
        $query = $this->getEntityManager()->createQueryBuilder()
            ->select('p')
            ->from('AppBundle:Partes', 'p')
            ->where('p.idProfesor = :profesor');
        $query->orderBy('p.fecha');

        $query->setParameter('profesor', $profesor);
        return $query->getQuery()->getResult();
    }

    /**
     * Función que devuelve los partes de un curso
     * @param Curso $curso
     * @return array
     */
    public function getPartesByCurso(Cursos $curso)
    {
        $query = $this->getEntityManager()->createQueryBuilder()
            ->select('p')
            ->from('AppBundle:Partes', 'p')
            ->where('p.grupo = :curso');
        $query->orderBy('p.fecha');

        $query->setParameter('curso', $curso);
        return $query->getQuery()->getResult();
    }

    /**
     * Función que devuelve todos los partes ordenados por fecha
     * @return array
     */
    public function getPartesOrdenados($historico = false)
    {
        if (!$historico) {
            $query = $this->createQueryBuilder('partes');
            $query->select('partes');
            $query->join('partes.idEstado', 'estado');
            $query->where("estado.estado != 'Caducado' ");
        } else {
            $query = $this->createQueryBuilder('partes');
            $query->select('partes');
        }
        $query->orderBy('partes.fecha', 'DESC');
        $query->addOrderBy('partes.id', 'DESC');
        $query = $query->getQuery();
        return $query->getResult();

//        return $query->getResult();
    }

    /**
     * Función que devuelve un parte por id.
     * @param $id
     * @return mixed
     */
    public function getParteById($id)
    {
        return $this->getEntityManager()
            ->createQueryBuilder()
            ->select("p")
            ->from("AppBundle:Partes", "p")
            ->where("p.id = :id")
            ->setParameter("id", $id)
            ->getQuery()
            ->getSingleResult();
    }

    /**
     * Función que devuelve un parte por id.
     * @param $id
     * @return mixed
     */
    public function getParteByIdImpresion($id)
    {

//       $query = $this->getEntityManager()->createQuery(
//            "SELECT p FROM AppBundle\Entity\Partes p
//             JOIN p.idAlumno as alumno
//             JOIN p.idProfesor as profesor
//             JOIN p.idTipo as tipo
//             JOIN p.idEstado as estado
//             WHERE p.id = :id"
//        );

        $query = $this->getEntityManager()->createQuery(
            "SELECT p FROM AppBundle\Entity\Partes p
             JOIN p.idAlumno as alumno
             JOIN p.idProfesor as profesor
             JOIN alumno.idCurso IN 
             (SELECT c.grupo 
             FROM AppBundle\Entity\Cursos c)
             WHERE p.id = :id"
        );

        $query->setParameter('id', $id);
        return $query->getResult();
    }
    /**
     * Función que devuelve un parte por id.
     * @param $id
     * @return mixed
     */
    public function getParteById2($id)
    {

        $query = $this->getEntityManager()->createQuery(
            "SELECT p FROM AppBundle\Entity\Partes p
             WHERE p.id = :id"
        );

        $query->setParameter('id', $id);
        return $query->getResult();
    }

    /**
     * Función que devuelve los partes que contienen la cadena pasada por parámetro
     * @param $string
     * @return array
     */
    public function getPartesLike($string, $historico = false)
    {
        if ($string == '')
            return $this->getPartesOrdenados($historico);
        if (!$historico) {
            $query = $this->getEntityManager()->createQuery(
                "SELECT p
             FROM AppBundle\Entity\Partes p
             JOIN p.idAlumno as alumno
             JOIN p.idProfesor as profesor
             JOIN p.idTipo as tipo
             JOIN p.idEstado as estado
             JOIN alumno.idCurso as curso
             WHERE ((YEAR(p.fecha) = :stringFecha2 AND MONTH(p.fecha) = :stringFecha1
             AND DAY(p.fecha) = :stringFecha0) OR alumno.nombre LIKE :string
             OR profesor.nombre LIKE :string OR tipo.tipo LIKE :string
             OR curso.grupo LIKE :string OR estado.estado LIKE :string)
             AND estado.estado != 'Caducado'
             ORDER BY p.fecha DESC, p.id DESC"
            );
        } else {
            $query = $this->getEntityManager()->createQuery(
                "SELECT p
             FROM AppBundle\Entity\Partes p
             JOIN p.idAlumno as alumno
             JOIN p.idProfesor as profesor
             JOIN p.idTipo as tipo
             JOIN p.idEstado as estado
             JOIN alumno.idCurso as curso
             WHERE ((YEAR(p.fecha) = :stringFecha2 AND MONTH(p.fecha) = :stringFecha1
             AND DAY(p.fecha) = :stringFecha0) OR alumno.nombre LIKE :string
             OR profesor.nombre LIKE :string OR tipo.tipo LIKE :string
             OR curso.grupo LIKE :string OR estado.estado LIKE :string)
             ORDER BY p.fecha DESC, p.id DESC"
            );
        }
        $query->setParameter("string", '%' . $string . '%');

        $fecha = explode('/', $string);
        for ($i = 0; $i < 3; $i++) {
            if (count($fecha) >= ($i + 1)) {
                $query->setParameter('stringFecha' . $i, $fecha[$i]);
            } else
                $query->setParameter('stringFecha' . $i, '');
        }

        return $query->getResult();
    }

    /**
     * Función que devuelve los partes a exportar
     * @param $fechas
     * @param $alumnos
     * @param $profesores
     * @return array
     */
    function getPartesExportar($fechas, $alumnos, $profesores, $curso)
    {
        $partesAlumno = [];
        foreach ($alumnos as $alumno)
            $partesAlumno[] = $this->getPartesByAlumnoOrdenado($alumno);
        $partesProfesor = [];
        foreach ($profesores as $profesor)
            $partesProfesor[] = $this->getPartesByProfesor($profesor);
        $partesCurso = [];
        foreach ($curso as $cur)
            $partesCurso[] = $this->getPartesByCurso($cur);
        $fecha = explode(' a ', $fechas);
        $fechaIni = $fecha[0];
        $fechaFin = $fecha[1];

        $fechaIni = date_create_from_format('d/m/Y', $fechaIni);
        date_sub($fechaIni, date_interval_create_from_date_string('1 day'));
        $fechaFin = date_create_from_format('d/m/Y', $fechaFin);

        $query = $this->getEntityManager()->createQuery(
            "SELECT p
             FROM AppBundle\Entity\Partes p
             WHERE (p.fecha BETWEEN :fechaIni AND :fechaFin)"
        );
        $query->setParameter(':fechaIni', $fechaIni);
        $query->setParameter(':fechaFin', $fechaFin);
        $partesFecha = $query->getResult();
        $partesExportar = [];
        $partesExportar2 = [];
        $partesExportarFinal = [];
        $partesExportarFinal2 = [];

        $partesAlumnosSelec = [];
        $partesProfesorSelec = [];
        $partesCursosSelec = [];
        foreach ($partesAlumno as $parteAlumno)
            foreach ($parteAlumno as $value)
                $partesAlumnosSelec[] = $value;

        foreach ($partesProfesor as $parteProfesor)
            foreach ($parteProfesor as $value)
                $partesProfesorSelec[] = $value;

        foreach ($partesCurso as $parteCurso)
            foreach ($parteCurso as $value)
                $partesCursosSelec[] = $value;

        foreach ($partesAlumnosSelec as $parteAlumno)
            foreach ($partesProfesorSelec as $parteProfesor)
                if ($parteAlumno->getId() == $parteProfesor->getId())
                    $partesExportar[] = $parteAlumno;

        foreach ($partesAlumnosSelec as $parteAlumno)
            foreach ($partesFecha as $parteFecha)
                if ($parteAlumno->getId() == $parteFecha->getId())
                    $partesExportar2[] = $parteAlumno;

        foreach ($partesExportar as $parteExportar)
            foreach ($partesExportar2 as $parteExportar2)
                if ($parteExportar->getId() == $parteExportar2->getId())
                    $partesExportarFinal[] = $parteExportar;

        foreach ($partesExportarFinal as $parteExportarFinal)
            foreach ($partesCursosSelec as $parteCursoSelec)
                if ($parteExportarFinal->getId() == $parteCursoSelec->getId())
                    $partesExportarFinal2[] = $parteExportarFinal;

        return $partesExportarFinal2;
    }

}
