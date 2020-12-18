<?php
class dbcq   {
    public $db,$q,$data;

    public function __construct($db=null, $q=null, $data=array())
    {
        $this->db   = $db;
        $this->q    = $q;
        $this->data = $data;
    }
    // Выбираем из базы по параметрам
    public function select($q, $data){
        try{
            $result = $this->db-> prepare($q);
            $result -> execute($data);
            $result = $result->fetch(PDO::FETCH_ASSOC);
            if($result){return $result;}
        }
        catch (PDOException $e) {
            //return errormessage($e);
        }
    }
    // Выбираем из базы все
    public function selectall($q){
        try{
            $result = $this->db->prepare($q);
            $result->execute();
            $result = $result->fetch(PDO::FETCH_ASSOC);
            if($result){return $result;}
        }
        catch (PDOException $e) {
            //return errormessage($e);
        }
    }
    // вставляем в базу
    public function insert($q, $data){
        try{
            $result = $this->db->prepare($q);
            $result->execute($data);
            if($result){return $result;}
        }
        catch (PDOException $e) {
            //return errormessage($e);
        }
    }
    //обновляем запись
    public function update($q, $data){
        try{
            $result = $this->db->prepare($q);
            $result->execute($data);
            if($result){return $result;}
        }
        catch (PDOException $e) {
            //return errormessage($e);
        }
    }
    // поиск из таблицы
    public function search($q, $data){
        try{
            $data = "%$data%";
            $result  = $this->db->prepare($q);
            $result->execute(array($data));
            $result = $result->fetchAll(PDO::FETCH_ASSOC);
            if($result){return $result;}
        }
        catch (PDOException $e) {
            //return errormessage($e);
        }
    }
    // удаление записи из таблицы
    public function delete($q, $data){
        try{
            $result = $this->db->prepare($q);
            $result->execute($data);
            if($result){return $result;}
        }
        catch (PDOException $e) {
            //return errormessage($e);
        }

    }
    public function dbwhile($q,$data){
        try{
            $result = $this->db->prepare($q);
            $result->execute($data);
            if($result){return $result;}
        }
        catch (PDOException $e) {
            //return errormessage($e);
        }

    }
    public function dbwhileall($q){
        try{
            $result = $this->db->prepare($q);
            $result->execute();
            if($result){return $result;}
        }
        catch (PDOException $e) {
            //return errormessage($e);
        }

    }
}
?>
