<?php declare(strict_types=1);

namespace BabDev\PagerfantaBundle\View;

@trigger_error(sprintf('The "%s" class is deprecated and will be removed in BabDevPagerfantaBundle 3.0. Use the "%s" class instead.', DefaultTranslatedView::class, TwigView::class));

/**
 * @deprecated to be removed in BabDevPagerfantaBundle 3.0. Use the Twig view class instead with the `default.html.twig` template.
 */
class DefaultTranslatedView extends TranslatedView
{
    protected function previousMessageOption(): string
    {
        return 'prev_message';
    }

    protected function nextMessageOption(): string
    {
        return 'next_message';
    }

    protected function buildPreviousMessage(string $text): string
    {
        return sprintf('&#171; %s', $text);
    }

    protected function buildNextMessage(string $text): string
    {
        return sprintf('%s &#187;', $text);
    }

    public function getName(): string
    {
        return 'default_translated';
    }
}
