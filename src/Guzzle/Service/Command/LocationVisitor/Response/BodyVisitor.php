<?php

namespace Guzzle\Service\Command\LocationVisitor\Response;

use Guzzle\Service\Command\CommandInterface;
use Guzzle\Http\Message\Response;
use Guzzle\Service\Description\Parameter;

/**
 * Visitor used to add the body of a response to a particular key
 */
class BodyVisitor extends AbstractResponseVisitor
{
    /**
     * {@inheritdoc}
     */
    public function visit(CommandInterface $command, Response $response, Parameter $param, &$value)
    {
        $value[$param->getName()] = $param->filter($response->getBody());
    }
}
