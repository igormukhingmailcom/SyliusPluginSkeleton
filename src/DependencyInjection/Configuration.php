<?php

declare(strict_types=1);

namespace Acme\SyliusExamplePlugin\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('acme_sylius_example');
        $rootNode = $treeBuilder->getRootNode();

        /**
         * @psalm-suppress MixedMethodCall
         * @psalm-suppress PossiblyUndefinedMethod
         */
        $rootNode
            ->children()
                ->scalarNode('option')
                    ->info('This is an example configuration option')
                    ->isRequired()
                    ->cannotBeEmpty()
                ->end()
        ;

        return $treeBuilder;
    }
}
