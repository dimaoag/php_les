<?php
include_once 'db.php';
use db_connection\Db;

$db = new Db();
$pdo = $db->connection();

/*
 * FETCH_NUM - return simply array [ 0 => '1', 1 => 'Dima']
 * FETCH_ASSOC - return accoc array ['id' => '1', 'name' => 'Dima']
 * FETCH_OBJ - return object
 *
 *
 *
 */


// SELECT  -----------------------------------------------------------------------------------------------------
$result = $pdo->query('SELECT * FROM users');
//$row = $result->fetch(PDO::FETCH_ASSOC);
$row = $result->fetchAll(PDO::FETCH_ASSOC);



/*
public static function getCategoryById($id){
    $db = Db::getConnection();

    $category = array();

    $result = $db->query("SELECT * FROM category WHERE id = $id");


    $i = 0;
    while ($row = $result->fetch()){
        $category['id'] = $row['id'];
        $category['name'] = $row['name'];
        $category['sort_order'] = $row['sort_order'];
        $category['status'] = $row['status'];
        $i++;
    }

    return $category;
}
*/

/*
  public static function getNewsItemById($id){
        //query to db;

        $id = intval($id);

        if ($id){

            $db = Db::getConnection();

            $result = $db->query('SELECT * from news WHERE id='.$id);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            $newsItem = $result->fetch();
            return $newsItem;
        }

    }
 */

/*
    public static function getNewsList(){

        $db = Db::getConnection();

        $newsList = array();

        $result = $db->query('SELECT id, title, date, short_content, author_name '
            . 'FROM news '
            . 'ORDER BY date DESC '
            . 'LIMIT 10 ');

        $i = 0;

        while ($row = $result->fetch()){
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['date'] = $row['date'];
            $newsList[$i]['short_content'] = $row['short_content'];
            $newsList[$i]['author_name'] = $row['author_name'];
            $i++;
        }

        return $newsList;
    }
 */

/*
 * public static function checkEmailExist($email){

        $db = Db::getConnection();

        $sql = 'SELECT COUNT(*) FROM `user` WHERE email = :email';

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();

        if ($result->fetchColumn()){
            return true;
        }else
            return false;

    }
 *
 */

/*
 *  public static function getLastUser(){

        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM user ORDER BY id DESC LIMIT 1';

        $result = $db->prepare($sql);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполняем запрос
        $result->execute();

        // Возвращаем данные
        return $result->fetch();
    }
 */

/*
 * public static function getUserById($id){
        if ($id){

            $db = Db::getConnection();

            $sql = 'SELECT * FROM `user` WHERE id = :id';

            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result->execute();

            return $result->fetch();
        }
    }
 */

/*
 * public static function getTotalProductsInCategory($categoryId){

        $db = Db::getConnection();

        $result = $db->query('SELECT count(id) AS count FROM product '
            . 'WHERE status = "1" AND category_id ='.$categoryId);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();

        return $row['count'];
    }

 */









// INSERT ---------------------------------------------------------------------------------------------------

$user_input = '<script>string</script>';
$safe_input = htmlentities($user_input);
echo $safe_input;


/*
public static function register($name, $email, $password){

    $db = Db::getConnection();

    $role = '';

    $sql = 'INSERT INTO user (name, email, password, role) '
        . 'VALUES (:name, :email, :password, :role);';

    $result = $db->prepare($sql);
    $result->bindParam(':name', $name, PDO::PARAM_STR);
    $result->bindParam(':email', $email, PDO::PARAM_STR);
    $result->bindParam(':password', $password, PDO::PARAM_STR);
    $result->bindParam(':role', $role, PDO::PARAM_STR);

    return $result->execute();

}
*/

/*
 * public static function createCategory($options){


        $db = Db::getConnection();

        $sql = 'INSERT INTO category '
            . '(name, sort_order, status) '
            . 'VALUES '
            . '(:name, :sort_order, :status)';

        $result = $db->prepare($sql);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':sort_order', $options['sort_order'], PDO::PARAM_INT);
        $result->bindParam(':status', $options['status'], PDO::PARAM_STR);

        return $result->execute();

    }
 */

// UPDATE  --------------------------------------------------------------------------------------------------------

/*
 * public static function updateCategory($id, $options){


        $db = Db::getConnection();


        $sql = 'UPDATE category SET
                  name = :name,
                  sort_order = :sort_order,
                  status = :status
                  WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':sort_order', $options['sort_order'], PDO::PARAM_INT);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        return $result->execute();
    }
 */

/*
 * public static function edit($id, $name, $password){

        $db = Db::getConnection();

        $sql = "UPDATE user
                SET name = :name, password = :password
                WHERE id = :id";

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);

        return $result->execute();
    }
 */



// DELETE  --------------------------------------------------------------------------------------------------

/*
public static function deleteCategoryById($id){

    $db = Db::getConnection();

    $sql = 'DELETE FROM category '
        . 'WHERE id = :id';

    $result = $db->prepare($sql);
    $result->bindParam(':id', $id, PDO::PARAM_INT);

    return $result->execute();
}
 */




