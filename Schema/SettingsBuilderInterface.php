<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\SettingsBundle\Schema;

use Sylius\Bundle\SettingsBundle\Transformer\ParameterTransformerInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * @author Paweł Jędrzejewski <pawel@sylius.org>
 */
interface SettingsBuilderInterface extends OptionsResolverInterface
{
    /**
     * @return ParameterTransformerInterface[]
     */
    public function getTransformers();

    /**
     * @param string $parameterName
     * @param ParameterTransformerInterface $transformer
     */
    public function setTransformer($parameterName, ParameterTransformerInterface $transformer);

    // previously from OptionsResolverInterface

    /**
     * Sets default option values.
     *
     * The options can either be values of any types or closures that
     * evaluate the option value lazily. These closures must have one
     * of the following signatures:
     *
     * <code>
     * function (Options $options)
     * function (Options $options, $value)
     * </code>
     *
     * The second parameter passed to the closure is the previously
     * set default value, in case you are overwriting an existing
     * default value.
     *
     * The closures should return the lazily created option value.
     *
     * @param array $defaultValues A list of option names as keys and default
     *                             values or closures as values.
     *
     * @return OptionsResolverInterface The resolver instance
     */
    public function setDefaults(array $defaultValues);
}
