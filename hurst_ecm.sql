-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 04:43 PM
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
-- Database: `hurst_ecm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `role` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`, `fullname`, `phone`, `address`, `avatar`, `status`, `role`) VALUES
(1, 'hungnguyen', '$2y$10$a8pIau3QME7.GyPThdYhSOkNk6z3O/I2B5R48zuXQrpvaqf5sofci', 'nguyenhungg127@gmail.com', 'Hung Nguyen', '+84337570675', '99 Tan Mai, Hoang Mai, Ha Noi', 'uploads/avatars/64897e99c9cea_Male faces-11.png', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `status` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `name`, `description`, `thumbnail`, `status`) VALUES
(8, 'Floyd Home', 'Design gurus love this Detroit-based upstart for its modular, minimalist pieces that are easy to assemble and take apart, which makes it a great option for guys who move a lot.', 'uploads/thumbnails/6491651280ac0_floyd.png', 1),
(9, 'Anthropologie', 'Looking beyond simple, modular designs? Anthropologie has you covered with its boho-inspired furnishings that bring an earthy, rustic vibe to any room (without looking out of place).', 'uploads/thumbnails/6491668805938_anthro-logo.png', 1),
(10, 'Artifox', 'Your go-to for splurge-worthy office furniture. Artifox was dreamed up by an interior and designer and architect, which means each piece is technically made and loaded with style.', 'uploads/thumbnails/649166ff29995_Black_Text_Logo.png', 1),
(11, 'Villa Outdoors', 'Launched last year, this new outdoor furniture line is sleek and weather-resistant with a middle-of-the-road price point that offers plenty of value.', 'uploads/thumbnails/64916933d9fbb_Villa_Logo_150x@2x.png', 1),
(12, 'Blu Dot', 'Mid-century modern furniture can look a little redundant, but Blu Dot keeps its pieces fresh with unexpected colors and patterns.', 'uploads/thumbnails/64916a563d619_logo1.png', 1),
(13, 'BenchMade Modern', 'An online favorite, Benchmade Modern makes customized upholstery furniture thats relatively affordable thanks to its direct-to-consumer business model.', 'uploads/thumbnails/64916ba5802c4_benchmade_logo-cream_190x@2x.png', 1),
(14, 'Serena & Lily', 'Serena & Lily is all about relaxed, coastal vibes. Customers love its warm, wicker furniture and calming patterns that brighten up any space. It\'s a go-to brand for designer David Shade.', 'uploads/thumbnails/64916cc1ec0c9_SVGLogo2.png', 1),
(15, 'Kardiel', 'A favorite brand of Snoop Dog\'s (yes, really), Kardiel makes mid-century modern pieces that happen to look amazing, and you don\'t need a platinum-selling-rapper\'s bank account to afford it.', 'uploads/thumbnails/64916d1cbd79a_kardiel-logo-darkgrey-600x72_1567533537__54654.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0,
  `birthday` date DEFAULT NULL,
  `sex` tinyint(4) DEFAULT NULL,
  `date_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `point` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `distribution`
--

CREATE TABLE `distribution` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `send_date` datetime NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `reply` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0,
  `seen` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `type` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `payment_method_id` int(11) NOT NULL,
  `shipping_method_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status` tinyint(4) DEFAULT 0,
  `date_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_ship` date DEFAULT NULL,
  `note` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `status` tinyint(4) DEFAULT 0,
  `date_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `review` text DEFAULT NULL,
  `refunded` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `meta_keyword` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_other` text DEFAULT NULL,
  `css` text DEFAULT NULL,
  `js` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_method`
--

CREATE TABLE `payment_method` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `price_in` int(11) NOT NULL,
  `price_out` int(11) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `view` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `product_type_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0,
  `date_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `content`, `price_in`, `price_out`, `discount`, `view`, `quantity`, `product_type_id`, `brand_id`, `thumbnail`, `status`, `date_update`) VALUES
(7, 'Three-Piece Form Sectional', 'The Form Sectional combines Floyd’s durable materials with a design that’s infinitely modular. Clean lines meet deep, comfy seats and high-performance fabric ready for everyday. Add on a seat or a table, and reconfigure when you need to change it up — for where you live now, and where you live next.', NULL, 2000, 2150, 15, NULL, 48, 6, 8, 'uploads/thumbnails/product/6491a5ed80f67_Config1_Nickel_Config_Qtr.0001-min_82f416a3-6e59-441f-84cd-a951aa9cbaea.png', 1, '2023-06-20 13:13:17'),
(8, 'The Sofa', 'A sofa that goes with anywhere, and fits through any doorway. Simple, clean lines that look great from any angle meet comfy cushions upholstered in durable, stain-resistant fabric.', NULL, 1900, 2099, 15, NULL, 40, 6, 8, 'uploads/thumbnails/product/6491a6c32c2cf_TheSofaTwoSeater-Upholstered_Default_Post.png', 1, '2023-06-20 13:16:51'),
(9, 'Sink Down Sectional', 'Insanely comfortable, and incredibly deep, The Sink Down Sectional was designed to make you feel like you’re laying on a cloud. A combination of premium memory foam and blown fiber cushions create the perfect place to unwind, relax, and put your feet up.', NULL, 2050, 2650, 30, NULL, 55, 6, 8, 'uploads/thumbnails/product/6491a777a0331_FSD-Config-2Piece-Oat_1500x1500_e112112c-4527-4729-9257-cd21e7e0db26.png', 1, '2023-06-20 13:19:51'),
(10, 'The Coffee Table', 'The perfect companion for your sofa. A light, airy design that goes with anywhere. Inspired by mid-century classics, with simple construction.', NULL, 360, 388, 10, NULL, 62, 6, 8, 'uploads/thumbnails/product/6491a873e6c51_Coffee_Default_Birch-Black.0001.png', 1, '2023-06-20 13:24:03'),
(11, 'The Modular Table', 'Sleek plywood and a smooth chamfered edge perfectly complement the simple, geometric design of The Modular Table.', NULL, 813, 914, 15, NULL, 18, 6, 8, 'uploads/thumbnails/product/6491a9031a209_ModularTableSmallWalnut.3Qtr.0001-min.png', 1, '2023-06-20 13:26:27'),
(12, 'The Side Table', 'The Side Table is versatility at its Floyd-est. Use as a bedside table, sofa-side table, plant stand, or group a few together for flexibility.', NULL, 200, 250, 10, NULL, 9, 6, 8, 'uploads/thumbnails/product/6491a9a4f3c9b_Side15_Default_Birch-White.0001-min.png', 1, '2023-06-20 13:29:08'),
(13, 'Sink Down Lounge Chair', 'Insanely comfortable, and incredibly deep, The Sink Down Lounge Chair was designed to make you feel like you’re sinking into a cloud. A combination of premium memory foam and blown fiber cushions create the perfect place to unwind, relax, and put your feet up.', NULL, 999, 1267, 30, NULL, 11, 6, 8, 'uploads/thumbnails/product/6491aa5525f37_FSD-LoungeChair-Oat_1500x1500_3be8077b-8149-4d6a-a0d7-909030ac3218.png', 1, '2023-06-20 13:32:05'),
(14, 'The Squishy Chair', 'Not quite a pillow, not quite a chair. But most certainly the highest quality Squishy ever made.', NULL, 499, 550, 10, NULL, 34, 6, 8, 'uploads/thumbnails/product/6491aac9c2706_squishy-chair-sea-1.png', 1, '2023-06-20 13:34:01'),
(15, 'The Acton Slat Bench', 'Cherished by collectors around the world, Floyd is now bringing this timeless piece to a new generation of design collectors.', NULL, 999, 1185, 15, NULL, 4, 6, 8, 'uploads/thumbnails/product/6491ab446a9e3_Acton_Walnut_Black_Qtr0001.png', 1, '2023-06-20 13:36:04'),
(16, 'The Shelving System', 'A modular shelving system, designed and perfected over three years. Each shelf can work as a standalone or can be used as a base unit to build your own modular shelving system.', NULL, 499, 573, 15, NULL, 25, 6, 8, 'uploads/thumbnails/product/6491abfe42a2f_Tall_Shelving_-_Single_Default_Black_-_Ash_Post_949e10bc-3501-4701-a72b-bc8827ab1b0b.png', 1, '2023-06-20 13:39:10'),
(17, 'The Media Console', 'The Media Console is a clean, stream-lined design featuring maximum functionality and modularity.', NULL, 699, 755, 10, NULL, 18, 6, 8, 'uploads/thumbnails/product/6491ac6ae77f9_Floyd_Media_Console_AllShelves_Default_Black-Ash_Post.png', 1, '2023-06-20 13:40:58'),
(18, 'Form Sectional Pillows', 'A cozy place to rest your head. Add additional comfort and a classic vibe to your sectional with beautiful flange stitched pillows.', NULL, 39, 46, 10, NULL, 45, 6, 8, 'uploads/thumbnails/product/6491acfa3504a_PillowAddon_Nickel_Unit_Front.0001.png', 1, '2023-06-20 13:43:22'),
(19, 'The Y-Lamp', 'The Y-Lamp is designed for both direct and ambient light to warm up evenings, and during daytime hours, the lamp\'s poetic sculptural appearance adds an understated thoughtfulness to any room.', NULL, 199, 299, 29, NULL, 26, 6, 8, 'uploads/thumbnails/product/6491ad7219d56_Lamp_Red_Qtr.png', 1, '2023-06-20 13:45:22'),
(20, 'The Bed Frame', 'A modular bed frame system designed to evolve in both size & function. Featuring all-natural wood veneer and beautifully finished steel supports designed to last a lifetime.', NULL, 799, 855, 15, NULL, 9, 4, 8, 'uploads/thumbnails/product/6491ae37c1339_Twin_Qtr_NoStorage_Post_1_1.png', 1, '2023-06-20 13:48:39'),
(21, 'Two Unit Dresser', 'The Dresser System is uniquely modular and customizable. Whether you’re more of a minimalist or looking to embrace louder colors, make it your own.', NULL, 1900, 2500, 13, NULL, 34, 4, 8, 'uploads/thumbnails/product/6491aeb847a88_Config6_WalnutTop_WalnutCases_MapleDrawerFaces_72044e92-d16f-4790-bca6-672855338156.png', 1, '2023-06-20 13:50:48'),
(22, 'Bedside Table', 'Designed in Detroit to work perfectly with The Bed Frame, The Bedside Table offers a practical design that seamlessly complements The Bed Frame\'s minimal and clean look.', NULL, 240, 289, 9, NULL, 16, 4, 8, 'uploads/thumbnails/product/6491af1d888af_Bedside_Birch_WH_NOPWR_Profile0001.png', 1, '2023-06-20 13:52:29'),
(23, 'The Mattress', 'The Mattress was designed to bring you both sturdy support and contouring comfort, featuring a breathable foam infused with copper and graphite to dissipate body heat and contour your body that pairs perfectly with the Bed Frame.', NULL, 760, 840, 10, NULL, 6, 4, 8, 'uploads/thumbnails/product/6491af8976bcb_Floyd_twin_mattress_3qtrFront_web_ad86d86d-3935-4a83-8f4b-fb7beca381f0.png', 1, '2023-06-20 13:54:17'),
(24, 'Linen Sheet Set', 'Introduce yourself to ultimate comfort and quality with our new linen bedding. Crafted from natural fibers, this luxurious sheet set is an ideal choice for warm summer months. With its versatility and a texture that softens with every wash, the set provides breathability to ensure a restful sleep.', NULL, 210, 290, 10, NULL, 61, 4, 8, 'uploads/thumbnails/product/6491afff29073_Linen_Set_White.png', 1, '2023-06-20 13:56:15'),
(25, 'The Outdoor Bench', 'The Outdoor Bench is a multitasker that works harder than you do – doubling as a dining bench, a welcoming seat on your front porch, or a thought-provoking resting place in the garden.', NULL, 314, 386, 0, NULL, 8, 7, 8, 'uploads/thumbnails/product/6491b0e366ae3_Bench_Default_Blue.0001-min.png', 1, '2023-06-20 14:00:03'),
(26, 'Belvedere Dining Chair', 'Well-known to textile aficionados, Perennials performance fabrics have distinctive style, quality, and luxury. Woven from 100% solution-dyed acrylic, they resist UV radiation, mold, mildew, and staining, for furniture that will last season after season, indoors or out. (They’re not beloved by designers and home enthusiasts for nothing.) If you’re looking for fabric with great texture and a more casual look, you’ve found your match.', NULL, 1998, 2498, 29, NULL, 3, 5, 14, 'uploads/thumbnails/product/6491b20a4ea4f_mBLV.jpg', 1, '2023-06-20 14:04:58'),
(27, 'Rook Table Lamp', 'Slender legs step it up to form a united front against darkness and dullness. A crisp linen shade shines a light on its dimensional beauty and jaunty joinery. Available in tall and petite (floor and table).', NULL, 290, 330, 10, NULL, 19, 8, 12, 'uploads/thumbnails/product/6491b2ff6d4e7_ro1-tblght-wl-rook-lamp-walnut.jpg', 1, '2023-06-20 14:09:03'),
(28, 'Happy Day Shelving 4 Shelf', 'Wood shelves and metal blocks stack without the need for hardware forming beautiful voids and cubbies to house all things in a perfectly curated manner. Two widths of foot and shelf blocks celebrate asymmetry while bringing stability and visual appeal. Happy Day Shelving 3 Shelf also available.', NULL, 1300, 1495, 10, NULL, 8, 8, 12, 'uploads/thumbnails/product/6491b3755f875_WebM2_HeroImages_HappyDay.jpg', 1, '2023-06-20 14:11:01');

-- --------------------------------------------------------

--
-- Table structure for table `product_detail`
--

CREATE TABLE `product_detail` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `color` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `status` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`id`, `product_id`, `image`, `status`) VALUES
(5, 7, '6491a5ed81852_ProductSelector5_916ce452-6769-4d8e-aa85-8d8860b46203.png,6491a5ed81a43_ProductSelector4_dfa2af2b-3073-46dc-9611-46b5d1a9a76d.png,6491a5ed81c83_ProductSelector3_e0f72524-f966-4bce-9725-3c94ba321df9.png,6491a5ed81f13_ProductSelector2_42f92350', 1),
(6, 8, '6491a6c32cb93_ProductSelector2_100014ce-051b-4cf0-bae9-b313e31ba83a.jpg,6491a6c32ce5b_Shop-the-Look-1.jpg,6491a6c32d060_Rectangle_44_f5e626ee-96d8-4cb0-aa04-f68fa81f9332.png,6491a6c32d235_Rectangle_44_bf021982-9276-4cc8-ae10-1da6c3d18270.png,6491a6c32d3f7', 1),
(7, 9, '6491a777a0ac6_ProductSelector2_4f182e86-8150-488e-b5f5-ea5abd427950.jpg,6491a777a0d11_ProductSelector1_9f3a805e-7692-4a16-8168-85461c4ffa3d.jpg,6491a777a0f59_ProductSelector6_899afcd9-9571-4161-a796-6415ab200d05.jpg', 1),
(8, 10, '6491a873e72b4_ProductSelector1_03cc36a1-f37a-4bb4-9d2c-ec29d16397b7.jpg,6491a873e744b_ProductSelector2_be97d2ce-bfd5-4969-82ab-4e5628616485.jpg,6491a873e7648_ProductSelector4_40c68318-a47d-4e7b-848a-d00c3cd8cf37.jpg', 1),
(9, 11, '6491a9031ab2a_Storytelling-2.jpg,6491a9031ae04_Photo-Gallery-1.jpg,6491a9031b11e_ProductSelector4_8afbaa87-ee27-4d06-815a-86fcf26697cc.jpg,6491a9031b38f_Shop-the-Look-1.jpg,6491a9031b626_Photo-Gallery-2.jpg', 1),
(10, 12, '6491a9a500222_Photo-Gallery-1.jpg,6491a9a500405_ProductSelector3_48829a63-a1dc-4937-ba6e-ed7159bd568c.jpg,6491a9a500650_STLSideTable.jpeg,6491a9a50089d_Photo-Gallery-2.jpg,6491a9a500ab1_ProductSelector1_0078cd99-bd3f-4454-8f92-198a9e15928a.jpg,6491a9a5069', 1),
(11, 13, '6491aa55269b5_Shop-the-Look-1-(6).jpg,6491aa5526bf6_Photo-Gallery-5.jpg,6491aa5526e4a_Full-Bleed.jpg', 1),
(12, 14, '6491aac9c2f00_ProductSelector7_561058ef-ffa1-495f-b308-d439745c7d71.jpg,6491aac9c323f_Photo-Gallery-5 (1).jpg,6491aac9c355d_ProductSelector1_db3efb9b-9f20-49fb-9ffc-f3fb1e2866bb.jpg,6491aac9c3896_Photo-Gallery-1.jpg,6491aac9c3ae6_Photo-Gallery-3.jpg,6491a', 1),
(13, 15, '6491ab446b06b_Product-Details.jpg,6491ab446b2c7_Photo-Gallery-4.jpg,6491ab446b483_ProductSelector5_e65bcfc2-5b84-4223-ba65-aef646fa1a28.jpg,6491ab446b661_Photo-Gallery-3.jpg', 1),
(14, 16, '6491abfe4314a_ProductSelector2_25b708c8-a598-486d-9905-ec121c0e3422.jpg,6491abfe43398_Rectangle_44_3d66875c-80a3-4f1b-9e69-6c027c151a58.png,6491abfe435a1_Photo-Gallery-1.jpg,6491abfe4389b_ProductSelector3_017dd27a-ee16-4a5f-a2b5-4559d128ca7b.jpg', 1),
(15, 17, '6491ac6ae7e01_MCDetails.jpeg,6491ac6ae7fd0_Shop-the-Look-1.jpg,6491ac6ae81be_Full-Bleed-(2).jpg', 1),
(16, 18, '6491acfa358ce_ProductSelector5_72117120-9f74-4bd6-9455-68d1f2289f5f.jpg,6491acfa35bd7_ProductSelector1_713bebf3-a18c-400b-b347-5c2ecea7dd80.jpg,6491acfa35ef4_ProductSelector3_a9b3c18b-59bf-42f1-b4f1-2de40536c160.jpg', 1),
(17, 19, '6491ad721a34f_Photo-Gallery-5.jpg,6491ad721a520_Photo-Gallery-4.jpg,6491ad721a720_Shop-the-Look-1.jpg,6491ad721a904_ProductSelector3_a29c0771-68db-47a6-8f7e-cf5fb4d55e5c.jpg', 1),
(18, 20, '6491ae37c18dd_Storytelling-1.jpg,6491ae37c1ae1_Shop-the-Look-1 (1).jpg,6491ae37c1ce3_Photo-Gallery-7.jpg,6491ae37c1ef1_ProductSelector7_a400e854-6150-43f8-8211-d10108263c2d.jpg,6491ae37c20de_Photo-Gallery-1.jpg', 1),
(19, 21, '6491aeb8481f6_Photo-Gallery-2.jpg,6491aeb8484ea_Photo-Gallery-3.jpg,6491aeb8488ad_Full-Bleed-(3).jpg,6491aeb848b97_Photo-Gallery-1 (1).jpg', 1),
(20, 22, '6491af1d88e2b_ProductSelector4_bafe9953-30e7-4d84-a502-87fe72491377.jpg,6491af1d88ff5_Photo-Gallery-3 (1).jpg,6491af1d891c6_Photo-Gallery-1 (2).jpg,6491af1d89415_Photo-Gallery-5 (1).jpg', 1),
(21, 23, '6491af89771a8_Photo-Gallery-2 (1).jpg,6491af89773b7_ProductSelector1_bef7a603-fe62-483c-8606-17b3d08abe90.jpg,6491af89775b8_ProductSelector2_9e81603c-8725-4514-a6ab-d1c59536bbf4.jpg,6491af89777d5_Storytelling-2-(1).jpg,6491af89779ac_Storytelling-3-(1).jpg', 1),
(22, 24, '6491afff2966d_White_Product_Selector_1_413f6023-eabd-4b69-9996-e7e1cf233ca1.jpg,6491afff29885_White_Product_Selector_2_c58032c7-b057-4b2d-820e-f7b2f5a5db75.jpg', 1),
(23, 25, '6491b0e367144_PP_Outdoor_Bench_LifestyleCarouselMobile1.jpg,6491b0e36737b_Photo-Gallery-1.jpg,6491b0e36758b_Photo-Gallery-4.jpg', 1),
(24, 26, '6491b20a4f020_DIN_Lake_House_Belvedere-0253.jpg,6491b20a4f1bd_CAT_Balboa_Desk-0062.jpg', 1),
(25, 27, '6491b2ff6ddc4_st1_smstlt_wl-stilt-table-lamp-walnut.jpg,6491b2ff6e008_fpo_Day_05_Stilt_Detail_0019.jpg', 1),
(26, 28, '6491b3755fdf5_hd1_3shfwo_gg_thumbnail.jpg,6491b3755ffd7_hd1_4shfwo_gg_frontlow.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `status` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`id`, `name`, `description`, `thumbnail`, `status`) VALUES
(4, 'Bedroom', 'Bed, Case Good, Headboard, Wooden Bunk Bed, Daybed, Vanity,...', 'uploads/thumbnails/categories/6491794685632_Isometric__2_.png', 1),
(5, 'Dining', 'Dining Table, Chair, Bar Stool, Server, Hutch & Buffet, Curio,...', 'uploads/thumbnails/categories/64917981422f5_Isometric__4_.png', 1),
(6, 'Living', 'Sofa, Chair, Futon, Coffee Table, TV console,...', 'uploads/thumbnails/categories/6491799c241f5_Isometric__6_.png', 1),
(7, 'Outdoor', 'Patio Dining, Patio Seating,..', 'uploads/thumbnails/categories/649179bfc6a9c_Isometric__10_.png', 1),
(8, 'Accent', 'Accent Chair, Desk, Office Chair, Shelf, Bookcase, Side Table, Stand,...', 'uploads/thumbnails/categories/649179d8ba2bd_Isometric__9_.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `shipping_method`
--

CREATE TABLE `shipping_method` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0,
  `price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `store_detail`
--

CREATE TABLE `store_detail` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `map` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `store_detail`
--

INSERT INTO `store_detail` (`id`, `name`, `address`, `currency`, `phone`, `email`, `facebook`, `logo`, `map`, `status`) VALUES
(1, 'DE127', '99 Tan Mai, Hoang Mai, Ha Noi', 'USD', '+84337570675', 'nguyenhungg127@gmail.com', 'fb.com/hungg.nd', 'uploads/shop/6488a815bcb70_Male faces-11.png', '99 Tan Mai, Hoang Mai, Ha Noi', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_ibfk_1` (`product_id`),
  ADD KEY `comment_ibfk_2` (`user_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `distribution`
--
ALTER TABLE `distribution`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_ibfk_1` (`customer_id`),
  ADD KEY `order_ibfk_2` (`payment_method_id`),
  ADD KEY `order_ibfk_3` (`shipping_method_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_detail_ibfk_1` (`order_id`),
  ADD KEY `order_detail_ibfk_2` (`product_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_ibfk_1` (`product_type_id`),
  ADD KEY `product_ibfk_2` (`brand_id`);

--
-- Indexes for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_detail_ibfk_1` (`product_id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_image_ibfk_1` (`product_id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_method`
--
ALTER TABLE `shipping_method`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_detail`
--
ALTER TABLE `store_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `distribution`
--
ALTER TABLE `distribution`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_method`
--
ALTER TABLE `payment_method`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `shipping_method`
--
ALTER TABLE `shipping_method`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `store_detail`
--
ALTER TABLE `store_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`payment_method_id`) REFERENCES `payment_method` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_ibfk_3` FOREIGN KEY (`shipping_method_id`) REFERENCES `shipping_method` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`product_type_id`) REFERENCES `product_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD CONSTRAINT `product_detail_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_image`
--
ALTER TABLE `product_image`
  ADD CONSTRAINT `product_image_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
