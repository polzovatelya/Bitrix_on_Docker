<?php
$this->queryExecute("SET NAMES 'utf8mb4' COLLATE 'utf8mb4_0900_ai_ci'");
$connection = Bitrix\Main\Application::getConnection();
$connection->queryExecute("SET sql_mode=''");
$connection->queryExecute("SET innodb_strict_mode=0");