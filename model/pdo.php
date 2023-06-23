<?php
    /**
     * mở kết nối đến với csdl sử dụng pdo
     */
    
    function pdo_get_connection() {
        $conn = new PDO("mysql:host=localhost; dbname=duan1nhom6; charset=utf8", "root", "");
        $conn-> setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }


    /**
     * thực thi câu lệnh sql thao các dữ liệu
     * @param string $sql câu lệnh sql
     * @param array $args mảng giá trị cung cấp các tham số của $sql
     * @throws PDOException lỗi thực thi cấu lệnh
     */

    function pdo_execute($sql){
        $sql_args = array_slice(func_get_args(),1);
        try{
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
        }
        catch(PDOException $e){
            throw $e;
        }
        finally{
            unset($conn);
        }
    }

    function pdo_query($sql){
        $sql_args = array_slice(func_get_args(),1);
        try{
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
            $row = $stmt->fetchAll();
            return $row;
        }
        catch(PDOException $e){
            throw $e;
        }
        finally{
            unset($conn);
        }
    }

    function pdo_query_one($sql){
        $sql_args = array_slice(func_get_args(),1);
        try{
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row;
        }
        catch(PDOException $e){
            throw $e;
        }
        finally{
            unset($conn);
        }
    }

    function pdo_query_value($sql){
        $sql_args = array_slice(func_get_args(),1);
        try{
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return array_values($row)[0];
        }
        catch(PDOException $e){
            throw $e;
        }
        finally{
            unset($conn);
        }
    }

    
?>