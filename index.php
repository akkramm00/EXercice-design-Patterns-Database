<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
// Mettons en place une classe' DatabaseManager ' qui implemente les elements  essentiels de ce design patterv, à savoir :
// * Une propriété instance permettant de stocker l'instance.
// * Un constructeur et une mpéthode de clonage privée
// * Une méthode statique getInstance permettant d'instancier ou de retourner cette instance
// *Une methode métier connet 
// *Vérifions que notre classe ne peut egtre instanciée qu'une seule fois 

class DatabaseManager
  {
    private static $instance;
    private function __construct() {}
    private function __clone() {}

    public static function getInstance(): self
    {
      if(!isset(static::$instance)){
        static::$instance = new static;
      }
      return static::$instance;
    }
    public function connect() : void
    {
      // do stuff
    }
 }

$firstInstance = DatabaseManager::getInstance();
$secondInstance = DatabaseManager:: getInstance();

if($firstInstance===$secondInstance) {
  echo "il s'agit de la meme instance";
}

?> 

  </body>
</html>