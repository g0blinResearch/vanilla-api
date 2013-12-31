<?php if (!defined('APPLICATION')) exit;

/**
 * Messages API
 *
 * @package   API
 * @since     0.1.0
 * @author    Kasper Kronborg Isager <kasperisager@gmail.com>
 * @copyright Copyright 2013 © Kasper Kronborg Isager
 * @license   http://opensource.org/licenses/MIT MIT
 */
class MessagesAPI extends APIMapper
{
    /**
     * Retrieve messages
     *
     * GET /messages
     *
     * @since  0.1.0
     * @access public
     * @param  array $Path
     * @static
     */
    public static function Get($Path)
    {
        static::$Controller   = 'Messages';
        static::$Method       = 'All';
        static::$Authenticate = TRUE;
    }
}
