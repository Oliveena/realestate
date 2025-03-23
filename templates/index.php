<!--

session_start();

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('main');
$log->pushHandler(new StreamHandler(dirname(__FILE__) . '/applogs/everything.log', Logger::DEBUG));
$log->pushHandler(new StreamHandler(dirname(__FILE__) . '/applogs/errors.log', Logger::ERROR));

from day 14-->+