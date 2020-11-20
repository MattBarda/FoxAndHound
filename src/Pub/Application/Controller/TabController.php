<?php
declare(strict_types=1);

namespace Webbaard\Pub\Application\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Webbaard\Pub\Domain\Tab\Repository\TabCollection;
use Webbaard\Pub\Domain\Tab\ValueObject\TabId;

class TabController
{
    public function detailsAction(TabCollection $tabCollection, string $id)
    {
        $tab = $tabCollection->get(TabId::fromString($id));
        $data = $tab->payload();

        return new JsonResponse($data);
    }
}
