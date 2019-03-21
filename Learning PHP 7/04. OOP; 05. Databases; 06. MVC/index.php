<?php
  use Monolog\Logger;
  use Monolog\Handler\StreamHandler;
  use Bookstore\Models\BookModel;
  use Bookstore\Models\SaleModel;
  // use Bookstore\Core\Db;
  use Bookstore\Core\ConfigCore;
  use Bookstore\Core\Router;
  use Bookstore\Core\Request;
  use Bookstore\Utils\DependencyInjector;
  require_once 'composer/vendor/autoload.php';
  require_once 'src/Models/BookModel.php';
  require_once 'src/Models/SaleModel.php';
  require_once 'src/Core/Db.php';
  require_once 'src/Core/Router.php';
  require_once 'src/Core/Request.php';

  /*
  $loader = new Twig_Loader_Filesystem(__DIR__ . '/views');
  $twig = new Twig_Environment($loader);

  $bookModel = new BookModel(Db::getInstance());
  $book = $bookModel->get(1, 3);

  $params = ['book' => $book, 'currentPage' => 2];
  echo $twig->loadTemplate('book.twig')->render($params);

  $saleModel = new SaleModel(Db::getInstance());
  $sales = $saleModel->getByUser(1);

  $params = ['sales' => $sales];
  echo $twig->loadTemplate('sales.twig')->render($params);

  $saleModel = new SaleModel(Db::getInstance());
  $sale = $saleModel->get(1);

  $params = ['sale' => $sale];
  echo $twig->loadTemplate('sale.twig')->render($params);

  $router = new Router();
  $response = $router->route(new Request());
  echo $response;
  */

  $config = new Config();

  $dbConfig = $config->get('db');
  $db = new PDO(
      'mysql:host=127.0.0.1;dbname=bookstore',
      $dbConfig['user'],
      $dbConfig['password']
  );

  $loader = new Twig_Loader_Filesystem(__DIR__ . '/views');
  $view = new Twig_Environment($loader);

  $log = new Logger('bookstore');
  $logFile = $config->get('log');
  $log->pushHandler(new StreamHandler($logFile, Logger::DEBUG));

  $di = new DependencyInjector();
  $di->set('PDO', $db);
  $di->set('Utils\Config', $config);
  $di->set('Twig_Environment', $view);
  $di->set('Logger', $log);
  $di->set('BookModel', new BookModel($di->get('PDO')));

  $router = new Router($di);
  $response = $router->route(new Request());
  echo $response;

?>
