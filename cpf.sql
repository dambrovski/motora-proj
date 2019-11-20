CREATE TABLE `cpf` (
  `id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `cpf` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `score` varchar(4) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
