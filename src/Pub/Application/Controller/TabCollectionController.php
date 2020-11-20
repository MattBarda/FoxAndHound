<?php
declare(strict_types=1);

namespace Webbaard\Pub\Application\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

final class TabCollectionController
{
    public function collectionAction(): Response
    {
        return new JsonResponse([
            ['customer' => 'john Wayne', 'id', '0'],
            ['customer' => 'billy the kid', '1']
        ]);
    }
}
