-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2023 at 09:03 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `notes_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text DEFAULT NULL,
  `pinned` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `title`, `description`, `pinned`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent rhoncus egestas tortor non ultrices. Sed aliquam eleifend nisl vel gravida. Interdum et malesuada fames ac ante ipsum primis in faucibus.', 1, '2023-01-23 14:40:47', '2023-01-23 15:24:01'),
(2, 'Nunc vitae tincidunt turpis', 'Nunc vitae tincidunt turpis, vitae ultrices nisl. Donec ullamcorper convallis consequat. Nam et dui imperdiet libero condimentum laoreet. Integer at dui elementum, congue nulla sollicitudin, bibendum nunc. Ut vehicula purus ut ante fermentum, ut euismod lectus ultricies. Vivamus tincidunt a elit ut dignissim.', 0, '2023-01-23 14:42:04', '2023-01-23 15:33:22'),
(3, 'Sample 101', 'Aliquam id odio metus. Aliquam molestie pulvinar quam, et commodo arcu porta ut. Cras ultricies semper dolor sed pretium. Aliquam semper, quam quis tempus posuere, tellus leo interdum mi, eu varius lectus dui nec dui. Integer sit amet sem rhoncus risus elementum gravida. Curabitur varius erat non augue accumsan, et tincidunt diam dapibus.', 0, '2023-01-23 15:24:21', '2023-01-23 15:24:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;
