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


