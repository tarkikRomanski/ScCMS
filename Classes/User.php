<?php
require_once 'db_connect.php';
require_once 'function.php';

use DataBase\Connect as conn;


class User {

  private $connect;

  public function test(){

  }


  public function __construct(){
      $this->connect = new conn('Scms');
  }

  /**
   * Добавление нового пользователя
   * @param  string $newName     Новый никнейм пользователя (уникальность проверяется в методе)
   * @param  string $newPassword Пароль нового пользователя, в методе производится кодирование
   * @param  string $newEmail    Почтовый адрес нового пользователя
   * @return [type]              На выходе 1 или ошибка u2 - данный никнейм занят
   */
  public function newUser($newName, $newPassword) {
    if($this->isUser($newName) == null) {
      $nowDate = date('Y-m-d H:i:s');
      $values = array($newName, md5(trim($newPassword)), $nowDate);
      $columns = array('nickname','password', 'registration' );
      $result = $this->connect->insertDataTable('users', $values, $columns);
      return $result;
    } else {
      return 'u2';
    }
  }

  /**
   * Проверка существует ли пользователь с данным именем
   * @param  string  $name Никнейм который нужно проверить
   * @return boolean       Масив с пользователем, если пользователь существует, в противном случае false
   */
  protected function isUser($name) {
    $users = $this->connect->getRowTable('users', "nickname='".$name."'");
    if($users != null)
      return $users[0];
    else
      return false;
  }

    /**
   * Проверка существует ли пользователь с данным id
   * @param  int  $name id который нужно проверить
   * @return boolean       Масив с пользователем, если пользователь существует, в противном случае false
   */
  protected function isUserId($id) {
    $users = $this->connect->getRowTable('users', "id=".$id);
    if($users != null)
      return $users[0];
    else
      return false;
  }

  /**
   * Аутинфикация пользоветеля
   * @param  string  $userName     Имя пользователя
   * @param  string  $userPassword Пароль пользователя
   * @param  boolean $remember     Запомнить пользователя
   * @return [type]                Если все удачно- true,неверный пароль -u1,неверный логин -u2
   */
  public function signIn($userName, $userPassword){
    $user = $this->isUser($userName);
    if($user != null){
      if($user['password'] == md5(trim($userPassword))){
          setcookie("userNickname", $user['nickname'], 0x6FFFFFFF, '/' ,'sccms.ua');
          setcookie("userRegistration", $user['registration'], 0x6FFFFFFF, '/' ,'sccms.ua');

          setcookie("userName", $user['name'], 0x6FFFFFFF, '/' ,'sccms.ua');
          setcookie("userSurname", $user['surname'], 0x6FFFFFFF, '/' ,'sccms.ua');
          setcookie("userAva", $user['ava'], 0x6FFFFFFF, '/' ,'sccms.ua');
          setcookie("userBirthday", $user['birthday'], 0x6FFFFFFF, '/' ,'sccms.ua');

          setcookie("userLastOnline", $user['lastOnline'], 0x6FFFFFFF, '/' ,'sccms.ua');
          setcookie("userNickname", $user['nickname'], 0x6FFFFFFF, '/' ,'sccms.ua');



        if($user['status'] != null)
          if($user['status'] == 1) {
            setcookie("userStatus", getWord(1, 1), 0x6FFFFFFF, '/' ,'sccms.ua');
              setcookie("userClass", $user['class_id'], 0x6FFFFFFF, '/' ,'sccms.ua');
          } else {
            setcookie("userStatus", getWord(3, 1), 0x6FFFFFFF, '/' ,'sccms.ua');
              setcookie("userElementary", $user['elementary_id'], 0x6FFFFFFF, '/' ,'sccms.ua');
          }


          setcookie("userEmail", $user['email'], 0x6FFFFFFF, '/' ,'sccms.ua');
          setcookie("userId", $user['id'], 0x6FFFFFFF, '/' ,'sccms.ua');

        return true;
      } else {
        return 'u1';
      }
    } else {
      return 'u2';
    }
  }


/**
 * Организация выхода пользователя
 * @return [type] Метод нечего не возвращает
 */
public function logOut(){
  setcookie("userId", $user['id'], time()-3600, '/' ,'sccms.ua');
  }
}

//tarkik ☮ 2016
