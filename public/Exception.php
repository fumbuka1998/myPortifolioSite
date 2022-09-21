<?php

/**
 * PHPMailer Exception class.
 * PHP Version 5.5.
 
 *
 
 * @author    limbu fumbuka (coder) <limbufumbuka@gmail.com>

 */

namespace PHPMailer\PHPMailer;

/**
 * PHPMailer exception handler.
 *
 */
class Exception extends \Exception
{
    /**
     * Prettify error message output.
     *
     * @return string
     */
    public function errorMessage()
    {
        return '<strong>' . htmlspecialchars($this->getMessage(), ENT_COMPAT | ENT_HTML401) . "</strong><br />\n";
    }
}
