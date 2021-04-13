<?php /**
 * 
 */
class Input
{
	protected $_post_args = [];
	function __construct()
	{
		
	}
	function post($key = NULL, $xss_clean = NULL)
    {
        if ($key === NULL)
        {
            return $this->_post_args;
        }

        return isset($this->_post_args[$key]) ? $this->_xss_clean($this->_post_args[$key], $xss_clean) : NULL;
    }
    function get($key = NULL, $xss_clean = NULL)
    {
        if ($key === NULL)
        {
            return $this->_get_args;
        }

        return isset($this->_get_args[$key]) ? $this->_xss_clean($this->_get_args[$key], $xss_clean) : NULL;
    }
} ?>