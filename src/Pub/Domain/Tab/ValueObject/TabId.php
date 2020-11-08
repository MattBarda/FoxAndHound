<?php

declare(strict_types=1);

namespace Webbaard\Pub\Domain\Tab\ValueObject;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

final class TabId
{
    private UuidInterface $id;

    private function __construct(UuidInterface $id)
    {
        $this->id = $id;
    }

    public static function new()
    {
        return new self(Uuid::uuid4());
    }

    public static function fromString(string $id)
    {
        return new self(Uuid::fromString($id));
    }

    public function toString(): string
    {
        return $this->id->toString();
    }
}