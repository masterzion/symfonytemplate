<?php
  $container->setParameter('database_host', getenv("MYSQL_DB_HOST"));
  $container->setParameter('database_port', getenv("MYSQL_DB_PORT"));
  $container->setParameter('database_password', getenv("MYSQL_DB_PASSWORD"));
  $container->setParameter('database_name', getenv("APP_NAME"));
  $container->setParameter('database_user', getenv("DB_USERNAME"));
