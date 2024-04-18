<?php

class DB{

    public $con;
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "db_banhangmvc";

    function __construct(){
        $dburl = "mysql:host=$this->servername;dbname=$this->dbname;charset=utf8";
        $username = 'root';
        $password = '';
    
        $this->con = new PDO($dburl, $username, $password);
        $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    // Thuc thi isert du lieu vao bang
    function pdo_execute($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $stmt = $this->con->prepare($sql);
        $stmt->execute($sql_args);
        return true;
    } catch (PDOException $e) {
        throw $e;
    } finally {
        // unset($this->con);
    }
}
function pdo_execute_lastInsertID($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $stmt = $this->con->prepare($sql);
        $stmt->execute($sql_args);
        return $this->con->lastInsertId();
    } catch (PDOException $e) {
        throw $e;
    } finally {
        // unset($this->con);
    }
}
/**
 * Thực thi câu lệnh sql truy vấn dữ liệu (SELECT)
 * @param string $sql câu lệnh sql
 * @param array $args mảng giá trị cung cấp cho các tham số của $sql
 * @return array mảng các bản ghi
 * @throws PDOException lỗi thực thi câu lệnh
 */
function pdo_query($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $stmt = $this->con->prepare($sql);
        $stmt->execute($sql_args);
        $rows = $stmt->fetchAll();
        return $rows;
    } catch (PDOException $e) {
        throw $e;
    } finally {
        // unset($this->con);
    }
}
/**
 * Thực thi câu lệnh sql truy vấn một bản ghi
 * @param string $sql câu lệnh sql
 * @param array $args mảng giá trị cung cấp cho các tham số của $sql
 * @return array mảng chứa bản ghi
 * @throws PDOException lỗi thực thi câu lệnh
 */
function pdo_query_one($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $stmt = $this->con->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    } catch (PDOException $e) {
        throw $e;
    } finally {
        // unset($this->con);
    }
}
/**
 * Thực thi câu lệnh sql truy vấn một giá trị
 * @param string $sql câu lệnh sql
 * @param array $args mảng giá trị cung cấp cho các tham số của $sql
 * @return giá trị
 * @throws PDOException lỗi thực thi câu lệnh
 */
function pdo_query_value($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $stmt = $this->con->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return array_values($row)[0];
    } catch (PDOException $e) {
        throw $e;
    } finally {
        // unset($this->con);
    }
}

}

?>