<?php
class Foo
{
    /** @var string **/
    private $sHelloString = 'Hello world!';
    
    /** @var array **/
    public $aArray = [];

    public function printString(): void
    {
        echo $this->helloString;
    }
	
	/** Write here the method */
	public function __toString(): string
    {
		return $this->sHelloString . ' ' . json_encode($this->aArray);
	}
}

$foo = new Foo();
echo $foo;
