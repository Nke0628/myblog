<?php

class DbConnect{

	const DB_NAME='blog';
	const DB_user='root';
	const DB_password='4cvsxkTu';

	private function pdo()
	{
		try
		{
			$dsn='mysql:dbname='.self::DB_NAME.';host=localhost;charset=utf8';
			$dsh=new PDO($dsn,self::DB_user, self::DB_password);
			$dsh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			return  $dsh;

			throw new Exception();

		}
		catch (Exception $e)
		{
			echo $e->getMessage();
		}

	}

	//全件抽出用メソッド
	public function select_all($sql)
	{

		$stmt=$this->pdo();
		$stmt=$stmt->query($sql);
	    $rec=$stmt->fetchall(pdo::FETCH_ASSOC);
	    return $rec;
	}

	//一行抽出用メソッド
	public function select_one($sql)
	{

		$stmt=$this->pdo();
		$stmt=$stmt->query($sql);
		$rec=$stmt->fetch(pdo::FETCH_ASSOC);
		return $rec;
	}

}
