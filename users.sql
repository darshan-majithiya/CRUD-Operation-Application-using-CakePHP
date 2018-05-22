-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2018 at 06:33 AM
-- Server version: 5.7.21-log
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cake_auth`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `phone`, `created`, `modified`) VALUES
(1, 'darsh2115@gmail.com', '$2y$10$5wIf8lVXIWpT7Xthp7agNOQUD4us71deP7b1D2QBqvUgRHAjOif7e', '9106724442', '2018-05-19 06:50:38', '2018-05-21 07:28:33'),
(2, 'aakash@gmail.com', '$2y$10$kJoqwPxKAGMaCmZJCtDGHuYHuiEqxN2pK0e/kL7gXlip0I.s0ljsy', '65894452', '2018-05-19 08:05:23', '2018-05-19 08:05:23'),
(4, 'darshan@gmail.com', '$2y$10$su7DONaOg3cH22XqYX6l..pNuGIeADrWkIE1juvY1I9GdJFE/.546', '3259565+626', '2018-05-20 13:34:29', '2018-05-20 13:34:29'),
(5, 'darshan26@gmail.com', '$2y$10$EY2ty/yCjDLDPbq92NhK2e6DjgWdMW9zpXo0uYXB5g44H9LZwH5tS', '123456', '2018-05-20 13:35:16', '2018-05-20 13:35:16'),
(6, 'darshan21@gmail.com', '$2y$10$8xwkDgyCK4yfb0xkV6LPOuGtZXYSffvRPL6Sxaz4JJ68sc7.HWvBK', '325856', '2018-05-20 13:37:47', '2018-05-20 13:37:47'),
(7, 'darshan11@gmail.com', '$2y$10$KuV.KfYfaCCXG3A23QyUhOoCp0T/Q5bSgK7x3.vlsJILZZbQ3iTJC', '1265656', '2018-05-20 13:39:39', '2018-05-20 13:39:39'),
(8, 'asasa@gmail.cin', '$2y$10$OujHMIzvIWX1EZV.qM6bQeb4rExbDDuguCNCWaMkUuZlzYeSFi2F2', '129596532', '2018-05-20 13:41:58', '2018-05-20 13:41:58'),
(10, 'jigar11@gmail.com', '$2y$10$xzEncFzDhcwbRu9sLuNMau6pyIFMxyfZwlRS048IWvRkN5Uj1ZV02', '956262951', '2018-05-20 17:38:13', '2018-05-20 17:38:13'),
(11, 'darshanm@gmail.com', '$2y$10$ZLgNF23kaNUJaochh0wnKepo4zXsaR8WwGcq/c2sI6cyU6KX4.ViO', '56232326', '2018-05-20 17:41:26', '2018-05-20 17:41:26'),
(13, 'jigar21@gmail.com', '$2y$10$LDhGpd40wEEYnB/EhSzS4.N3rEOZCIXRvkVpkhZ6Etji01vtM6jVu', '892563256', '2018-05-21 07:29:57', '2018-05-21 07:29:57'),
(14, 'aakashm@gmail.com', '$2y$10$s6Inmgqj1MSD/ZO8TVNXAuDImCeIUNh2wHiYpJkb7fgp5qwRa8H2e', '895269552', '2018-05-21 07:31:07', '2018-05-21 07:31:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
