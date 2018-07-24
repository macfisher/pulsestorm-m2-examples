<?php
namespace Pulsestorm\TutorialObjectManager2\Model;

class Example
{
    protected $messageObject;

    // using type hints to trigger automatic dependency injection
    public function __construct(Message $message) {
    	var_dump(get_class($message));
    	exit;

    	$this->messageObject = $message;
    }

    /** Old constructor before using Magento 2 automatic dependency injection*/
	/*public function __construct()
	{
		$object = new Message; //
		$this->messageObject = $object;
	}*/
	
    public function sendHelloAgainMessage()
    {
        return $this->messageObject->getMessage();    
    }
}
