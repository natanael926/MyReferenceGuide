<?php


interface Logger {
	public function log($message);
}

class Application {

	protected $logger;

	public function setLogget(Logger $logger) 
	{
		$this->logger = $logger;

		return $this;
	}

	public function action()
	{
		$this->logger->log('Doing thing.');
	}
}

$app = new Application;

$app->setLogget(new class implements Logger {
	public function log($message) 
	{
		var_dump($message);
	}
});

$app->action();