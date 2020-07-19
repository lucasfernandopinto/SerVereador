<?php
		public function validar($acesso)
		{
			global $pdo;

			$sql = $pdo->prepare("SELECT id FROM usuarios WHERE acesso = :a");
			$sql->bindValue(":a", $acesso);
			$sql->execute();

			if($sql->rowCount() > 0)
			{
				$dado = $sql->fetch();
				session_start();
				$_SESSION['id'] = $dado['id'];
				return true;
			}
			else
			{
				return false;			
			}
		}
	}
?>