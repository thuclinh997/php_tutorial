<?php
function query($sql, $data = [],$statementStatus = false)
{
    global $conn;
    $query = false;
    try {
        $statement = $conn->prepare($sql);
        if (empty($data)) {
            $query = $statement->execute();
        } else {
            $query = $statement->execute($data);
        }
    } catch (Exception $exception) {
        echo $exception->getMessage() . "<br>";
        echo "File: " . $exception->getFile() . " - LINE: " . $exception->getLine();
    }
    if($statementStatus && $query){
        return $statement;
    }
    return $query;
}
function insert($table, $dataInsert)
{
    // print_r($dataInsert);
    $keyArr = array_keys($dataInsert);
    $fieldStr = implode(',', $keyArr);
    $valueStr = implode(', :', $keyArr);
    // print_r($fieldStr);
    $sql = "INSERT INTO $table($fieldStr) VALUES(:$valueStr)";
    return query($sql, $dataInsert);
}
function update($table, $dataUpdate, $condition = '')
{
    // print_r($dataUpdate);
    $updateStr = '';
    foreach ($dataUpdate as $key => $value) {
        $updateStr .= $key . "=:" . $key . ", ";
    }
    $updateStr = rtrim($updateStr, ', ');
    // echo $updateStr;
    if (!empty($condition)) {
        $sql = "UPDATE $table SET $updateStr WHERE $condition";
    } else {
        $sql = "UPDATE $table SET $updateStr";
    }
    echo $sql;
    return query($sql, $dataUpdate);
}
function delete($table, $condition = '')
{
    if (empty($condition)) {
        $sql = "DELETE FROM $table";
    } else {
        $sql = "DELETE FROM $table WHERE $condition";
    }
    return query($sql);
}
function getRow($sql){
    $statement = query($sql, [],true);
    // var_dump($statement);
    if(is_object($statement)){
        $dataFetch = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $dataFetch;
    }
    return false;
}
function firstRow($sql){
    $statement = query($sql, [],true);
    // var_dump($statement);
    if(is_object($statement)){
        $dataFetch = $statement->fetch(PDO::FETCH_ASSOC);
        return $dataFetch;
    }
    return false;
}