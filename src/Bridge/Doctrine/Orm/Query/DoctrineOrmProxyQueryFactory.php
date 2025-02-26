<?php

declare(strict_types=1);

namespace Kreyu\Bundle\DataTableBundle\Bridge\Doctrine\Orm\Query;

use Doctrine\ORM\QueryBuilder;
use Kreyu\Bundle\DataTableBundle\Exception\UnexpectedTypeException;
use Kreyu\Bundle\DataTableBundle\Query\ProxyQueryFactoryInterface;

class DoctrineOrmProxyQueryFactory implements ProxyQueryFactoryInterface
{
    public function create(mixed $data): DoctrineOrmProxyQueryInterface
    {
        if ($data instanceof QueryBuilder) {
            return new DoctrineOrmProxyQuery($data);
        }

        throw new UnexpectedTypeException($data, QueryBuilder::class);
    }
}
