
mysql> CREATE DATABASE app_pondok;



mysql> CREATE TABLE IF NOT EXISTS `login` (
    ->   `id` int(10) NOT NULL AUTO_INCREMENT,
    ->   `name` varchar(255) NOT NULL,
    ->   `password` varchar(255) NOT NULL,
    ->   PRIMARY KEY (`id`)
    -> );



mysql> INSERT INTO `login` (`id`, `name`, `password`) VALUES
    -> (1, 'shofi', '12345'),
    -> (2, 'sayyidah', '12345'),
    -> (3, 'hauro', '12345');
