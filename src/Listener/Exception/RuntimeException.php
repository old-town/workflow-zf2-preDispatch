<?php
/**
 * @link https://github.com/old-town/workflow-zf2-preDispatch
 * @author  Malofeykin Andrey  <and-rey2@yandex.ru>
 */
namespace  OldTown\Workflow\ZF2\PreDispatch\Listener\Exception;

use OldTown\Workflow\ZF2\PreDispatch\Exception\RuntimeException as Exception;

/**
 * Class RuntimeException
 *
 * @package OldTown\Workflow\ZF2\PreDispatch\Listener\Exception
 */
class RuntimeException extends Exception implements
    ExceptionInterface
{
}
