<?php
class Teacher extends Connection {
  public static function allTeacher() {
    $statement = parent::$con->prepare('select * from teachers');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_OBJ);
  }
}




