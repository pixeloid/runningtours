<?php
namespace Functions;

use Doctrine\ORM\Query\Lexer; 
use Doctrine\ORM\Query\AST\Functions\FunctionNode; 

/**
 * RandFunction ::= "SHA1" "(" SimpleArithmeticExpression ")"
 */
class Sha1 extends FunctionNode
{

	    public $simpleArithmeticExpression;

	    /**
	     * @override
	     */
	    public function getSql(\Doctrine\ORM\Query\SqlWalker $sqlWalker)
	    {
	        return 'SHA1(' . $sqlWalker->walkSimpleArithmeticExpression(
	            $this->simpleArithmeticExpression
	        ) . ')';
	    }

	    /**
	     * @override
	     */
	    public function parse(\Doctrine\ORM\Query\Parser $parser)
	    {
	        $parser->match(Lexer::T_IDENTIFIER);
	        $parser->match(Lexer::T_OPEN_PARENTHESIS);

	        $this->simpleArithmeticExpression = $parser->SimpleArithmeticExpression();

	        $parser->match(Lexer::T_CLOSE_PARENTHESIS);
	    }
	}
