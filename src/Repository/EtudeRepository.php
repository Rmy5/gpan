<?php

namespace App\Repository;

use App\Entity\Etude;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Etude|null find($id, $lockMode = null, $lockVersion = null)
 * @method Etude|null findOneBy(array $criteria, array $orderBy = null)
 * @method Etude[]    findAll()
 * @method Etude[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EtudeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Etude::class);
    }

    /**
     * @return Etude[] Returns an array of Etude objects
     */
    public function getStudiesByDept($id)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.departement = :id')
            ->setParameter('id', $id)
            ->orderBy('e.id', 'DESC')
            ->getQuery()
            ->getArrayResult()
        ;
    }

    public function getPrevAndNext($dept, $etudeId)
    {
        $conn = $this->getEntityManager()
                     ->getConnection();

        $sql = "SELECT id,
                  (SELECT id FROM etude e1 WHERE e1.id < e.id AND departement = :dept ORDER BY id DESC LIMIT 1 OFFSET 0) as next_value,
                  (SELECT id FROM etude e2 WHERE e2.id > e.id AND departement = :dept ORDER BY id ASC LIMIT 1 OFFSET 0) as prev_value
                FROM etude e
                WHERE id = :etudeId AND departement = :dept";

        $stmt = $conn->prepare($sql);

        $stmt->execute(array(':dept' => $dept, ':etudeId' => $etudeId));

        return $stmt->fetch();
    }

}
