<?php

namespace App\Domain\Cons\Repository;

use App\Domain\Cons\Data\ConsCreatorData;
use App\Repository\QueryFactory;
use App\Repository\RepositoryInterface;
use App\Repository\TableName;

/**
 * Repository.
 */
class ConsGeneratorRepository implements RepositoryInterface
{
    /**
     * @var QueryFactory The query factory
     */
    private $queryFactory;

    /**
     * Constructor.
     *
     * @param QueryFactory $queryFactory The query factory
     */
    public function __construct(QueryFactory $queryFactory)
    {
        $this->queryFactory = $queryFactory;
    }

    /**
     * Insert user row.
     *
     * @param ConsCreatorData $user The user
     *
     * @return int The new ID
     */
    public function insertCons(ConsCreatorData $cons): int
    {
        $row = [
            'start' =>$cons->start,
            'end' => $cons->end,
            'name' => $cons->name,
            'surname' => $cons->surname,
            'email'=> $cons->email,
            'id_user_FK' => $cons->id_user_FK,
            'id_subject_FK' => $cons->id_subject_FK,
        ];

        return (int)$this->queryFactory->newInsert(TableName::CONSULTATION, $row)->execute()->lastInsertId();
    }
}