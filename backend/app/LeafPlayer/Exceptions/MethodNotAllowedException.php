<?php 

namespace App\LeafPlayer\Exceptions;
 
class MethodNotAllowedException extends LeafPlayerException {
    /**
     * @var string
     */
    protected $status = '405';

    /**
     * @param string $type
     * @param $arguments
     */
    public function __construct($type = 'errors.default.method_not_allowed', $arguments = []) {
        $message = $this->build($type, $arguments);

        parent::__construct($message);
    }
}