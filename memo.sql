-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2022 at 06:34 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `memo`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'SUPERADMIN', ''),
(2, 'OPR', ''),
(3, 'PPO', ''),
(4, 'STL', ''),
(5, 'PTI', ''),
(6, 'STI', ''),
(7, 'ADMIN', '');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 5),
(2, 9),
(3, 8),
(4, 10),
(5, 11),
(6, 12),
(7, 13);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'SuperAdmin', 1, '2022-02-09 22:37:23', 0),
(2, '::1', 'SuperAdmin', 1, '2022-02-09 22:41:53', 0),
(3, '::1', 'admin', 2, '2022-02-09 22:42:56', 0),
(4, '::1', 'SuperAdmin', 1, '2022-02-09 22:47:44', 0),
(5, '::1', 'SuperAdmin', 1, '2022-02-09 22:51:16', 0),
(6, '::1', 'super@gmail.com', 5, '2022-02-09 22:53:39', 1),
(7, '::1', 'super@gmail.com', 5, '2022-02-09 22:59:39', 1),
(8, '::1', 'ppo@gmail.com', 6, '2022-02-09 23:58:03', 1),
(9, '::1', 'super@gmail.com', 5, '2022-02-10 00:45:06', 1),
(10, '::1', 'super@gmail.com', 5, '2022-02-10 00:45:27', 1),
(11, '::1', 'super@gmail.com', 5, '2022-02-10 00:50:10', 1),
(12, '::1', 'super@gmail.com', 5, '2022-02-10 07:02:32', 1),
(13, '::1', 'operation@gmail.com', 9, '2022-02-10 07:11:43', 1),
(14, '::1', 'super@gmail.com', 5, '2022-02-10 07:12:45', 1),
(15, '::1', 'super@gmail.com', 5, '2022-02-10 11:00:52', 1),
(16, '::1', 'super@gmail.com', 5, '2022-02-10 19:20:17', 1),
(17, '::1', 'operation@gmail.com', 9, '2022-02-10 22:47:57', 1),
(18, '::1', 'super@gmail.com', 5, '2022-02-11 00:38:34', 1),
(19, '::1', 'operation@gmail.com', 9, '2022-02-11 02:46:48', 1),
(20, '::1', 'operation@gmail.com', 9, '2022-02-11 02:47:09', 1),
(21, '::1', 'super@gmail.com', 5, '2022-02-11 06:10:05', 1),
(22, '::1', 'operation@gmail.com', 9, '2022-02-11 06:12:29', 1),
(23, '::1', 'super@gmail.com', 5, '2022-02-11 06:15:17', 1),
(24, '::1', 'admin@gmail.com', 13, '2022-02-11 06:18:37', 1),
(25, '::1', 'admin', NULL, '2022-02-11 21:03:19', 0),
(26, '::1', 'admin@gmail.com', 13, '2022-02-11 21:03:31', 1),
(27, '::1', 'operation@gmail.com', 9, '2022-02-11 21:15:52', 1),
(28, '::1', 'admin@gmail.com', 13, '2022-02-13 06:14:25', 1),
(29, '::1', 'bcasopr', NULL, '2022-02-13 06:25:39', 0),
(30, '::1', 'operation@gmail.com', 9, '2022-02-13 06:25:49', 1),
(31, '::1', 'admin@gmail.com', 13, '2022-02-13 07:18:08', 1),
(32, '::1', 'operation@gmail.com', 9, '2022-02-13 07:35:54', 1),
(33, '::1', 'admin@gmail.com', 13, '2022-02-13 21:05:09', 1),
(34, '::1', 'bcasppo1', NULL, '2022-02-13 21:05:53', 0),
(35, '::1', 'bcasppo', NULL, '2022-02-13 21:06:01', 0),
(36, '::1', 'bcasppo', NULL, '2022-02-13 21:06:10', 0),
(37, '::1', 'bcasppo1', NULL, '2022-02-13 21:06:55', 0),
(38, '::1', 'bcasppo1', NULL, '2022-02-13 21:07:12', 0),
(39, '::1', 'ppo@gmail.com', 8, '2022-02-13 21:07:20', 1),
(40, '::1', 'admin@gmail.com', 13, '2022-02-13 23:34:57', 1),
(41, '::1', 'bcasopr1', NULL, '2022-02-13 23:39:46', 0),
(42, '::1', 'bcasopr1', NULL, '2022-02-13 23:40:00', 0),
(43, '::1', 'bcasopr', NULL, '2022-02-13 23:40:09', 0),
(44, '::1', 'operation@gmail.com', 9, '2022-02-13 23:40:18', 1),
(45, '::1', 'operation@gmail.com', 9, '2022-02-14 22:30:43', 1),
(46, '::1', 'admin@gmail.com', 13, '2022-02-20 22:29:36', 1),
(47, '::1', 'bcasppo1', NULL, '2022-02-20 22:34:33', 0),
(48, '::1', 'ppo@gmail.com', 8, '2022-02-20 22:34:41', 1),
(49, '::1', 'admin@gmail.com', 13, '2022-02-20 23:19:11', 1),
(50, '::1', 'bcasopr1', NULL, '2022-02-20 23:19:36', 0),
(51, '::1', 'bcasopr1', NULL, '2022-02-20 23:19:45', 0),
(52, '::1', 'bcasopr1', NULL, '2022-02-20 23:19:57', 0),
(53, '::1', 'bcasopr1', NULL, '2022-02-20 23:21:33', 0),
(54, '::1', 'bcasopr1', NULL, '2022-02-20 23:21:42', 0),
(55, '::1', 'operation@gmail.com', 9, '2022-02-20 23:21:55', 1),
(56, '::1', 'super@gmail.com', 5, '2022-02-21 01:52:32', 1),
(57, '::1', 'operation@gmail.com', 9, '2022-02-21 01:54:47', 1),
(58, '::1', 'super@gmail.com', 5, '2022-02-21 02:13:15', 1),
(59, '::1', 'SuperAdmin', NULL, '2022-03-24 06:43:52', 0),
(60, '::1', 'super@gmail.com', 5, '2022-03-24 06:44:09', 1),
(61, '::1', 'admin@gmail.com', 13, '2022-03-24 06:44:39', 1),
(62, '::1', 'operation@gmail.com', 9, '2022-03-24 06:45:39', 1),
(63, '::1', 'admin', NULL, '2022-03-24 09:19:05', 0),
(64, '::1', 'admin@gmail.com', 13, '2022-03-24 09:19:13', 1),
(65, '::1', 'operation@gmail.com', 9, '2022-03-24 09:36:04', 1),
(66, '::1', 'super@gmail.com', 5, '2022-04-25 22:08:02', 1),
(67, '::1', 'bcasppo', NULL, '2022-04-25 22:08:41', 0),
(68, '::1', 'operation@gmail.com', 9, '2022-04-25 22:08:56', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `memo`
--

CREATE TABLE `memo` (
  `id_surat` int(11) NOT NULL,
  `tgl_regist` date DEFAULT NULL,
  `tgl_edit` date NOT NULL,
  `tgl_masuk_kadiv` date DEFAULT NULL,
  `tgl_masuk_kadept` date DEFAULT NULL,
  `tgl_keluar_kadiv` date DEFAULT NULL,
  `tgl_keluar_kadept` date DEFAULT NULL,
  `no_urut` int(11) NOT NULL,
  `hari` varchar(10) DEFAULT NULL,
  `bulan` varchar(10) DEFAULT NULL,
  `tahun` varchar(10) DEFAULT NULL,
  `no_surat` varchar(255) DEFAULT NULL,
  `pic` varchar(10) DEFAULT NULL,
  `dept_asal` varchar(255) DEFAULT NULL,
  `dept_tujuan` varchar(255) DEFAULT NULL,
  `perihal` varchar(7000) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `memo`
--

INSERT INTO `memo` (`id_surat`, `tgl_regist`, `tgl_edit`, `tgl_masuk_kadiv`, `tgl_masuk_kadept`, `tgl_keluar_kadiv`, `tgl_keluar_kadept`, `no_urut`, `hari`, `bulan`, `tahun`, `no_surat`, `pic`, `dept_asal`, `dept_tujuan`, `perihal`, `status`) VALUES
(1, '2022-02-11', '0000-00-00', '2022-02-11', '2022-02-11', '2022-02-11', '2022-02-11', 1, '11', '2', '2022', '1101/MO/OPR-PPO/II/2022', 'KAH', 'OPR', 'PPO', 'Pembelian Barang', 4),
(2, '2022-02-11', '0000-00-00', NULL, '2022-02-11', NULL, '2022-02-11', 0, NULL, NULL, NULL, NULL, 'KAH', 'OPR', 'OPR', 'Pembayaran DP', 2),
(3, '2022-02-11', '2022-02-13', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 'KAH', 'OPR', 'OPR', 'Pembayaran DP Komputer Divisi Operation', 0),
(4, '2022-02-11', '0000-00-00', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 'YDI', 'PPO', 'OPR', 'Pembuatan Kaca', 0),
(5, '2022-02-11', '0000-00-00', NULL, '2022-02-11', NULL, NULL, 0, NULL, NULL, NULL, NULL, 'YDI', 'PPO', 'PPO', 'Pembatalan DP', 1),
(6, '2022-02-11', '0000-00-00', '2022-02-11', '2022-02-11', NULL, '2022-02-11', 0, NULL, NULL, NULL, NULL, 'YDI', 'PPO', 'STI', 'Pembelian HSM untuk sekuriti sistem', 3),
(7, '2022-02-11', '0000-00-00', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 'HTA', 'STL', 'STL', 'Pembelian meja baru', 0),
(8, '2022-02-11', '0000-00-00', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 'GTA', 'PTI', 'PPO', 'Pembelian kertas A4 1 eksemplar', 0),
(9, '2022-02-11', '0000-00-00', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 'LDI', 'STI', 'STI', 'Pembuatan rak server', 0);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1644406301, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 'super@gmail.com', 'SuperAdmin', '$2y$10$18buGDtl/JFg08zPi1isju7st7G5LFKUoMLl0DyU88TewwpUSKbCu', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-02-09 22:53:30', '2022-02-09 22:53:30', NULL),
(8, 'ppo@gmail.com', 'bcasppo1', '$2y$10$PXme14Fmy39uWARkJstzMObUAzO3aesK1LYGdhvfUrYs2qAJXii8O', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-02-10 00:45:49', '2022-02-10 00:45:49', NULL),
(9, 'operation@gmail.com', 'bcasopr1', '$2y$10$eShXFduJwDWf8Y5ZRz0wieSaNhYSJ6qiaA086ZQ8uraQbpHAF7nLC', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-02-10 07:03:17', '2022-02-10 07:03:17', NULL),
(10, 'logistik@gmail.com', 'bcaslogistik1', '$2y$10$iBO7M78K00bhSML6wvIOseK395UPUs9c6hQ6Bp.4usIDwZSnt0EqS', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-02-10 07:03:44', '2022-02-10 07:03:44', NULL),
(11, 'pengembangti@gmail.com', 'bcaspti1', '$2y$10$XAZeBL3ATsEVp0ZzVC/4/OSO/eNhkWvRtl8HD5SO.JoWWADncLhZy', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-02-10 07:04:18', '2022-02-10 07:04:18', NULL),
(12, 'sekurititi@gmail.com', 'bcassti1', '$2y$10$sx59I7rdWgHxBn7hWkP/IuP8v4vixWSb0mLAtB8yyy81.L3xPe7DG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-02-10 07:05:34', '2022-02-10 07:05:34', NULL),
(13, 'admin@gmail.com', 'bcasadmin', '$2y$10$InGlRFnEScQPAIOQiAebW.gcYD.5O.dNieYpYFtRgw8rZfD33Tle2', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-02-11 06:15:40', '2022-02-11 06:15:40', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `memo`
--
ALTER TABLE `memo`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `memo`
--
ALTER TABLE `memo`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
