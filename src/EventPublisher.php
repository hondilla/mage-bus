<?php declare(strict_types=1);

namespace Mage\Bus;

interface EventPublisher
{
    /** @psalm-param Event|array<Event> $events */
    public function publish(array|Event $events): void;
}
