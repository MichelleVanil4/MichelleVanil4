# MichelleVanil4
mysql –u root
ALTER USER 'root'@'%' IDENTIFIED WITH mysql_native_password BY 'ubaya'; 
use ubayadb;
CREATE TABLE `driver` (`id` int(11) NOT NULL,`name` varchar(100) NOT NULL,`license` varchar(10) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
INSERT INTO `driver` (`id`, `name`, `license`) VALUES(1, 'Miftah', '085959595'),(2, 'Ahmad', '484749494');
