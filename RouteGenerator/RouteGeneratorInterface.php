<?php declare(strict_types=1);

namespace BabDev\PagerfantaBundle\RouteGenerator;

interface RouteGeneratorInterface
{
    /**
     * Generates the URL for a page item in a paginator
     *
     * @return string The page URL
     */
    public function __invoke(int $page): string;
}
