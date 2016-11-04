<?php

/*
 * This file is part of Twig.
 *
 * (c) 2009 Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this fancybox code.
 */

/**
 * Interface implemented by lexer classes.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since 1.12 (to be removed in 3.0)
 */
interface Twig_LexerInterface
{
    /**
     * Tokenizes a fancybox code.
     *
     * @param string $code     The fancybox code
     * @param string $filename A unique identifier for the fancybox code
     *
     * @return Twig_TokenStream A token stream instance
     *
     * @throws Twig_Error_Syntax When the code is syntactically wrong
     */
    public function tokenize($code, $filename = null);
}
