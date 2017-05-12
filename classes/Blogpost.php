<?php
 
/**
 * Class to handle Blogposts
 */
 
class Blogpost
{
 
  // Properties

 private $pdo;
 
  /**
  * @var int The blogpost ID from the database
  */
  public $id = null;
 

 
  /**
  * @var string Full title of the blogpost
  */
  public $title = null;
 
 
  /**
  * @var string The HTML content of the blogpost
  */
  public $content = null;

    /**
  * @var int When the blogpost was published
  */
  public $datePosted = null;
  
  /**
  * Sets the object's properties using the values in the supplied array
  *
  * @param assoc The property values
  */
 
  public function __construct($pdo, $data=array() ) {
$this->pdo = $pdo;
    if ( isset( $data['id'] ) ) $this->id = (int) $data['id'];
    if ( isset( $data['title'] ) ) $this->title = preg_replace ( "/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data['title'] );
    if ( isset( $data['content'] ) ) $this->content = $data['content'];
    if ( isset( $data['datePosted'] ) ) $this->datePosted = (int) $data['datePosted'];
  }
 
 
  /**
  * Sets the object's properties using the edit form post values in the supplied array
  *
  * @param assoc The form post values
  */
 
  public function storeFormValues ( $params ) {

    // Store all the parameters
    $this->__construct( $params );
 
  }
 
 
  /**
  * Returns an blogpost object matching the given blogpost ID
  *
  * @param int The blogpost ID
  * @return blogpost|false The blogpost object, or false if the record was not found or there was a problem
  */
 
  public function getById( $id ) {
   
   $st = $this->pdo->prepare("SELECT Blogposts.id, Blogposts.userId, Blogposts.title, Blogposts.likes, Blogposts.content, Blogposts.datePosted, Users.username FROM Blogposts INNER JOIN Users ON Blogposts.userId = Users.id
WHERE Blogposts.id=:id");
   $st->execute(
     [":id" => $id]
   );
     $data = $st->fetchAll();
    // if ( $row ) return new Blogpost( $row );
   return $data;
  }
 
 
  /**
  * Returns all (or a range of) blogpost objects in the DB
  *
  * @param int Optional The number of rows to return (default=all)
  * @param string Optional column by which to order the Blogposts (default="datePosted DESC")
  * @return Array|false A two-element array : results => array, a list of blogpost objects; totalRows => Total number of Blogposts
  */
 
  public function getPosts(){

$st = $this->pdo->prepare("SELECT Blogposts.id, Blogposts.userId, Blogposts.title, Blogposts.likes, Blogposts.content, Blogposts.datePosted, Users.username FROM Blogposts INNER JOIN Users ON Blogposts.userId = Users.id ORDER BY Blogposts.datePosted DESC");

 $st->execute();

  $data = $st->fetchAll();

  return $data;

}

 
  public function getMyPosts($userId){
$st = $this->pdo->prepare("SELECT Blogposts.id, Blogposts.userId, Blogposts.title, Blogposts.likes, Blogposts.content, Blogposts.datePosted, Users.username FROM Blogposts INNER JOIN Users ON Blogposts.userId = Users.id WHERE userId=? ORDER BY Blogposts.datePosted DESC");

 $st->execute(array($userId));

  $data = $st->fetchAll();

  return $data;

}
 
 public function listLatestPost(){
   
    $st = $this->pdo->prepare("SELECT Blogposts.id, Blogposts.userId, Blogposts.title, Blogposts.likes, Blogposts.content, Blogposts.datePosted, Users.username FROM Blogposts INNER JOIN Users ON Blogposts.userId = Users.id ORDER BY Blogposts.datePosted DESC LIMIT 5");
   
    $st->execute();
  $data = $st->fetchAll();

 
  return $data;



 }
 
  /**
  * Inserts the current blogpost object into the database, and sets its ID property.
  */
 
  public function insert($userId) {

   
    $st = $this->pdo->prepare("
  INSERT INTO Blogposts (userId, datePosted, title, content)
  VALUES (:userId, :datePosted, :title, :content)");
    $st->execute([
  ":userId" => $userId,    
  ":datePosted" => date("Y-m-d"),
  ":title" => $_POST['title'],
  ":content" => $_POST['content']
]);
   
  }
 
 
  /**
  * Updates the current blogpost object in the database.
  */
 
  public function update($pdo) {

     $st = $pdo->prepare("UPDATE Blogposts SET datePosted=:datePosted, title=:title, content=:content WHERE id = :id");
     $st->execute([
   ":datePosted" => $_POST['datePosted'],
     ":title" => $_POST['title'],
    ":content" => $_POST['content'],
   ":id" => $_POST['blogpostId']]);
  }
 
 
  /**
  * Deletes the current blogpost object from the database.
  */
 
  public function delete($delPost) {


  $st = $this->pdo->prepare ( "DELETE FROM Blogposts WHERE id = :id LIMIT 1" );
  $st->execute([":id" => $_GET['postId']]);
  
  }

 /**
  * Updates likes+1 for selected post.
  */
 public function setLike($postId){
echo"hello";
     $st=$this->pdo->prepare("UPDATE `Blogposts` SET likes=likes+1 WHERE id=?");
 $st->execute(array($postId));

  }

 /**
  * Updates likes-1 for selected post.
  */

public function removeLike($postId){
echo"hello";
   $st=$this->pdo->prepare("UPDATE `Blogposts`SET likes=likes-1 WHERE id=?");
 $st->execute(array($_POST['postId']));


  }
 
}
 
?>