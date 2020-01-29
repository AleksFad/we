<?php
namespace App\Controller;

use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\ORM\Query;
use Doctrine\ORM\QueryBuilder;
class Pagination
{

    public function paginate(QueryBuilder $queryBuilder, int $currentPage, int $perPage)
    {
        $currentPage = $currentPage < 1 ? 1 : $currentPage;
        $firstResult = ($currentPage - 1) * $perPage;

        /** @var Query $query */
        $query = $queryBuilder
            ->setFirstResult($firstResult)
            ->setMaxResults($perPage)
            ->getQuery();

        $paginator = new Paginator($query, false);
        $numResults = $paginator->count();
        $hasPreviousPage = $currentPage > 1;
        $hasNextPage = ($currentPage * $perPage) < $numResults;

        try {
            return [
                'result' => $paginator->getIterator(),
                'currentPage' => $currentPage,
                'hasPreviousPage' => $hasPreviousPage,
                'hasNextPage' => $hasNextPage,
                'previousPage' => $hasPreviousPage ? $currentPage - 1 : null,
                'nextPage' => $hasNextPage ? $currentPage + 1 : null,
                'numPages' => (int)ceil($numResults / $perPage),
                'haveToPaginate' => $numResults > $perPage,
            ];
        } catch (Exception $e) {
        }
    }
}