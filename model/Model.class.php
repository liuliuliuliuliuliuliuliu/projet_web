<?php
    class Model extends MyObject {
		protected static function db(){
			
			return DatabasePDO::getCurrentpdo();
		}

		protected static function query($sql){
			$st = static::db()->query($sql) or die("sql query error ! request : " . $sql);
			$st->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, get_called_class());
			return $st;
			}
    }
?>