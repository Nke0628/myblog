<?php

//設定ファイル読み込み
require_once(__DIR__.'/../../config.php');

class DbConnect{

	const DB_name=DB_NAME;
	const DB_user=DB_USER;
	const DB_password=DB_PASSWORD;

	private function pdo()
	{
		try
		{
			$dsn='mysql:dbname='.self::DB_name.';host=localhost;charset=utf8';
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
