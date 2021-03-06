<?php defined('SYSPATH') or die('No direct script access.');

class Sprig_Field_Enum extends Sprig_Field_Char {

	public function __construct(array $options = NULL)
	{
		parent::__construct($options);

		if (empty($this->choices))
		{
			throw new Sprig_Exception('Enum fields must declare the available choices');
		}
	}

} // End Sprig_Field_Enum