-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2023 at 09:07 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `security`
--

-- --------------------------------------------------------

--
-- Table structure for table `psec_bad-words`
--

CREATE TABLE `psec_bad-words` (
  `id` int(11) NOT NULL,
  `word` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `psec_bans`
--

CREATE TABLE `psec_bans` (
  `id` int(11) NOT NULL,
  `ip` char(45) NOT NULL,
  `date` varchar(30) NOT NULL,
  `time` char(5) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `redirect` tinyint(1) NOT NULL DEFAULT 0,
  `url` varchar(255) DEFAULT NULL,
  `autoban` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `psec_bans-country`
--

CREATE TABLE `psec_bans-country` (
  `id` int(11) NOT NULL,
  `country` varchar(120) NOT NULL,
  `redirect` tinyint(1) NOT NULL DEFAULT 0,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `psec_bans-other`
--

CREATE TABLE `psec_bans-other` (
  `id` int(11) NOT NULL,
  `type` varchar(40) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `psec_bans-ranges`
--

CREATE TABLE `psec_bans-ranges` (
  `id` int(11) NOT NULL,
  `ip_range` char(19) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `psec_dnsbl-databases`
--

CREATE TABLE `psec_dnsbl-databases` (
  `id` int(11) NOT NULL,
  `database` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `psec_dnsbl-databases`
--

INSERT INTO `psec_dnsbl-databases` (`id`, `database`) VALUES
(1, 'sbl.spamhaus.org'),
(2, 'xbl.spamhaus.org');

-- --------------------------------------------------------

--
-- Table structure for table `psec_file-whitelist`
--

CREATE TABLE `psec_file-whitelist` (
  `id` int(11) NOT NULL,
  `path` char(255) NOT NULL,
  `notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `psec_ip-whitelist`
--

CREATE TABLE `psec_ip-whitelist` (
  `id` int(11) NOT NULL,
  `ip` char(45) NOT NULL,
  `notes` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `psec_live-traffic`
--

CREATE TABLE `psec_live-traffic` (
  `id` int(11) NOT NULL,
  `ip` char(45) NOT NULL,
  `useragent` varchar(255) NOT NULL,
  `browser` varchar(255) NOT NULL,
  `browser_code` varchar(50) NOT NULL,
  `os` varchar(255) NOT NULL,
  `os_code` varchar(40) NOT NULL,
  `device_type` varchar(12) NOT NULL,
  `country` varchar(120) NOT NULL,
  `country_code` char(2) NOT NULL DEFAULT 'XX',
  `request_uri` varchar(255) NOT NULL,
  `domain` varchar(255) NOT NULL,
  `referer` varchar(255) NOT NULL,
  `bot` tinyint(1) NOT NULL DEFAULT 0,
  `date` varchar(30) NOT NULL,
  `time` char(5) NOT NULL,
  `uniquev` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `psec_live-traffic`
--

INSERT INTO `psec_live-traffic` (`id`, `ip`, `useragent`, `browser`, `browser_code`, `os`, `os_code`, `device_type`, `country`, `country_code`, `request_uri`, `domain`, `referer`, `bot`, `date`, `time`, `uniquev`) VALUES
(1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.58', 'Google Chrome', 'chrome', 'Windows 10', 'win-6', 'Computer', 'Unknown', 'XX', '/hurst/', 'localhost', '', 0, '30 June 2023', '08:57', 1),
(2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.58', 'Google Chrome', 'chrome', 'Windows 10', 'win-6', 'Computer', 'Unknown', 'XX', '/hurst/product.php?product=28', 'localhost', 'http://localhost/hurst/', 0, '30 June 2023', '09:05', 0),
(3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.58', 'Google Chrome', 'chrome', 'Windows 10', 'win-6', 'Computer', 'Unknown', 'XX', '/hurst/comment.php?product_id=28', 'localhost', 'http://localhost/hurst/product.php?product=28', 0, '30 June 2023', '09:05', 0),
(4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.58', 'Google Chrome', 'chrome', 'Windows 10', 'win-6', 'Computer', 'Unknown', 'XX', '/hurst/index.php', 'localhost', 'http://localhost/hurst/product.php?product=28', 0, '30 June 2023', '09:05', 0),
(5, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.58', 'Google Chrome', 'chrome', 'Windows 10', 'win-6', 'Computer', 'Unknown', 'XX', '/hurst/', 'localhost', '', 0, '30 June 2023', '09:05', 0),
(6, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.58', 'Google Chrome', 'chrome', 'Windows 10', 'win-6', 'Computer', 'Unknown', 'XX', '/hurst/index.php', 'localhost', '', 0, '30 June 2023', '09:06', 0);

-- --------------------------------------------------------

--
-- Table structure for table `psec_logins`
--

CREATE TABLE `psec_logins` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `ip` char(45) NOT NULL,
  `date` varchar(30) NOT NULL,
  `time` char(5) NOT NULL,
  `successful` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `psec_logins`
--

INSERT INTO `psec_logins` (`id`, `username`, `ip`, `date`, `time`, `successful`) VALUES
(1, 'nguyenhungg127@gmail.com', '127.0.0.1', '30 June 2023', '08:51', 1),
(2, 'nguyenhungg127@gmail.com', '127.0.0.1', '30 June 2023', '09:05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `psec_logs`
--

CREATE TABLE `psec_logs` (
  `id` int(11) NOT NULL,
  `ip` char(45) NOT NULL,
  `date` varchar(30) NOT NULL,
  `time` char(5) NOT NULL,
  `page` varchar(255) NOT NULL,
  `query` text NOT NULL,
  `type` varchar(50) NOT NULL,
  `browser` varchar(255) NOT NULL DEFAULT 'Unknown',
  `browser_code` varchar(50) NOT NULL,
  `os` varchar(255) NOT NULL DEFAULT 'Unknown',
  `os_code` varchar(40) NOT NULL,
  `country` varchar(120) NOT NULL DEFAULT 'Unknown',
  `country_code` char(2) NOT NULL DEFAULT 'XX',
  `region` varchar(120) NOT NULL DEFAULT 'Unknown',
  `city` varchar(120) NOT NULL DEFAULT 'Unknown',
  `latitude` varchar(30) NOT NULL DEFAULT '0',
  `longitude` varchar(30) NOT NULL DEFAULT '0',
  `isp` varchar(255) NOT NULL DEFAULT 'Unknown',
  `useragent` text NOT NULL,
  `referer_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `psec_pages-layolt`
--

CREATE TABLE `psec_pages-layolt` (
  `id` int(11) NOT NULL,
  `page` varchar(30) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `psec_pages-layolt`
--

INSERT INTO `psec_pages-layolt` (`id`, `page`, `text`) VALUES
(1, 'Banned', 'You are banned and you cannot continue to the website'),
(2, 'Blocked', 'Malicious request was detected'),
(3, 'Proxy', 'Access to the website via Proxy, VPN, TOR is not allowed (Disable Browser Data Compression if you have it enabled)'),
(4, 'Spam', 'You are in the Blacklist of Spammers and you cannot continue to the website'),
(5, 'Banned_Country', 'Sorry, but your country is banned and you cannot continue to the website'),
(6, 'Blocked_Browser', 'Access to the website through your Browser is not allowed, please use another Internet Browser'),
(7, 'Blocked_OS', 'Access to the website through your Operating System is not allowed'),
(8, 'Blocked_ISP', 'Your Internet Service Provider is blacklisted and you cannot continue to the website'),
(9, 'Blocked_RFR', 'Your referrer url is blocked and you cannot continue to the website');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `psec_bad-words`
--
ALTER TABLE `psec_bad-words`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `psec_bans`
--
ALTER TABLE `psec_bans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `psec_bans-country`
--
ALTER TABLE `psec_bans-country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `psec_bans-other`
--
ALTER TABLE `psec_bans-other`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `psec_bans-ranges`
--
ALTER TABLE `psec_bans-ranges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `psec_dnsbl-databases`
--
ALTER TABLE `psec_dnsbl-databases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `psec_file-whitelist`
--
ALTER TABLE `psec_file-whitelist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `psec_ip-whitelist`
--
ALTER TABLE `psec_ip-whitelist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `psec_live-traffic`
--
ALTER TABLE `psec_live-traffic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `psec_logins`
--
ALTER TABLE `psec_logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `psec_logs`
--
ALTER TABLE `psec_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `psec_pages-layolt`
--
ALTER TABLE `psec_pages-layolt`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `psec_bad-words`
--
ALTER TABLE `psec_bad-words`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `psec_bans`
--
ALTER TABLE `psec_bans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `psec_bans-country`
--
ALTER TABLE `psec_bans-country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `psec_bans-other`
--
ALTER TABLE `psec_bans-other`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `psec_bans-ranges`
--
ALTER TABLE `psec_bans-ranges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `psec_dnsbl-databases`
--
ALTER TABLE `psec_dnsbl-databases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `psec_file-whitelist`
--
ALTER TABLE `psec_file-whitelist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `psec_ip-whitelist`
--
ALTER TABLE `psec_ip-whitelist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `psec_live-traffic`
--
ALTER TABLE `psec_live-traffic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `psec_logins`
--
ALTER TABLE `psec_logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `psec_logs`
--
ALTER TABLE `psec_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `psec_pages-layolt`
--
ALTER TABLE `psec_pages-layolt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
