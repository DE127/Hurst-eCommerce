CREATE DATABASE hurst_ecm;
-- bảng tin tức
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text,
  `content` text,
  `type` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
);
-- bảng phân phối
CREATE TABLE `distribution` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `send_date` datetime NOT NULL,
  `email` varchar(255),
  `facebook` varchar(100),
  `reply` text,
  `status` tinyint(4) DEFAULT '0',
  `seen` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
);
-- bảng quản trị
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone` varchar(255),
  `address` varchar(255),
  `avatar` varchar(255),
  `status` tinyint(4) DEFAULT '1',
  `role` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
);
-- bảng phương thức thanh toán
CREATE TABLE `payment_method` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  `status` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
);
-- Bảng phương thức vận chuyển
CREATE TABLE `shipping_method` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  `status` tinyint(4) DEFAULT '0',
  `price` float,
  PRIMARY KEY (`id`)
);
-- bảng hình ảnh sản phẩm
CREATE TABLE `product_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
);
-- bảng loai sản phẩm
CREATE TABLE `product_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  `thumbnail` varchar(255) NOT NULL,
  `status` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
);
-- bảng nhãn hiệu
CREATE TABLE `brand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  `thumbnail` varchar(255) NOT NULL,
  `status` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
);
-- bảng sản phẩm
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  `content` text,
  `price_in` int(11) NOT NULL,
  `price_out` int(11) NOT NULL,
  `discount` int(11),
  `view` int(11),
  `quantity` int(11) NOT NULL,
  `product_type_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `thumbnail` varchar(255),
  `status` tinyint(4) DEFAULT '0',
  `date_update` timestamp NOT NULL,
  PRIMARY KEY (`id`)
);
-- comment
CREATE TABLE `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
);
-- khách hàng
CREATE TABLE `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255),
  `email` varchar(255) NOT NULL,
  `fullname` varchar(255),
  `phone` varchar(255),
  `address` varchar(255),
  `avatar` varchar(255),
  `status` tinyint(4) DEFAULT '0',
  `birthday` date,
  `sex` tinyint(4),
  `date_update` timestamp NOT NULL,
  `point` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
);
-- bảng đơn hàng
CREATE TABLE `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `payment_method_id` int(11) NOT NULL,
  `shipping_method_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `vat` int(11) NOT NULL,
  `subTotal` int(11) NOT NULL,
  `orderTotal` int(11) NOT NULL,
  `status` tinyint(4) DEFAULT '0',
  `date_update` timestamp NOT NULL,
  `email` varchar(255),
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_ship` date,
  `note` text,
  PRIMARY KEY (`id`)
);
-- bảng chi tiết đơn hàng
CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `status` tinyint(4) DEFAULT '0',
  `date_update` timestamp NOT NULL,
  `review` text,
  `refunded` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
);
-- sản phẩm chi tiết
CREATE TABLE `product_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `color` varchar(255),
  `size` varchar(255),
  `quantity` int(11) NOT NULL,
  `status` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
);
-- bảng store detail
CREATE TABLE `store_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255),
  `address` varchar(255),
  `currency` varchar(255),
  `phone` varchar(255),
  `email` varchar(255),
  `facebook` varchar(255),
  `logo` varchar(255),
  `map` text,
  `status` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
);
-- table pages
CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text,
  `meta_keyword` text,
  `meta_description` text,
  `meta_other` text,
  `css` text,
  `js` text,
  `content` text,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(4) DEFAULT '0',
  PRIMARY KEY (id)
);
CREATE TABLE `psec_bad-words` (
  `id` int(11) NOT NULL,
  `word` varchar(255) NOT NULL
);
CREATE TABLE `psec_bans` (
  `id` int(11) NOT NULL,
  `ip` char(45) NOT NULL,
  `date` varchar(30) NOT NULL,
  `time` char(5) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `redirect` tinyint(1) NOT NULL DEFAULT 0,
  `url` varchar(255) DEFAULT NULL,
  `autoban` tinyint(1) NOT NULL DEFAULT 0
);
CREATE TABLE `psec_bans-country` (
  `id` int(11) NOT NULL,
  `country` varchar(120) NOT NULL,
  `redirect` tinyint(1) NOT NULL DEFAULT 0,
  `url` varchar(255) NOT NULL
);
CREATE TABLE `psec_bans-other` (
  `id` int(11) NOT NULL,
  `type` varchar(40) NOT NULL,
  `value` varchar(255) NOT NULL
);
CREATE TABLE `psec_bans-ranges` (
  `id` int(11) NOT NULL,
  `ip_range` char(19) NOT NULL
);
CREATE TABLE `psec_dnsbl-databases` (
  `id` int(11) NOT NULL,
  `database` varchar(30) NOT NULL
);
INSERT INTO `psec_dnsbl-databases` (`id`, `database`) VALUES
(1, 'sbl.spamhaus.org'),
(2, 'xbl.spamhaus.org');
CREATE TABLE `psec_file-whitelist` (
  `id` int(11) NOT NULL,
  `path` char(255) NOT NULL,
  `notes` varchar(255) NOT NULL
);
CREATE TABLE `psec_ip-whitelist` (
  `id` int(11) NOT NULL,
  `ip` char(45) NOT NULL,
  `notes` varchar(255) DEFAULT NULL
);
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
);
CREATE TABLE `psec_logins` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `ip` char(45) NOT NULL,
  `date` varchar(30) NOT NULL,
  `time` char(5) NOT NULL,
  `successful` tinyint(1) NOT NULL
);
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
);
CREATE TABLE `psec_pages-layolt` (
  `id` int(11) NOT NULL,
  `page` varchar(30) NOT NULL,
  `text` text NOT NULL
);
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `psec_logins`
--
ALTER TABLE `psec_logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
-- relationship database
ALTER TABLE `product_image`
ADD CONSTRAINT `product_image_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `product`
ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`product_type_id`) REFERENCES `product_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `comment`
ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `order`
ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`payment_method_id`) REFERENCES `payment_method` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_ibfk_3` FOREIGN KEY (`shipping_method_id`) REFERENCES `shipping_method` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `order_detail`
ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `product_detail`
ADD CONSTRAINT `product_detail_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;


