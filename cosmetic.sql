-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2019 at 08:02 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cosmetic`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cid` int(4) NOT NULL,
  `pid` int(4) NOT NULL,
  `uid` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `uid` int(4) NOT NULL,
  `u_user` varchar(20) NOT NULL,
  `u_pass` varchar(255) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_last` varchar(50) NOT NULL,
  `u_add` text DEFAULT NULL,
  `u_tel` varchar(20) NOT NULL,
  `u_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`uid`, `u_user`, `u_pass`, `u_name`, `u_last`, `u_add`, `u_tel`, `u_email`) VALUES
(1, 'ipayz', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 'ชนุตม์', 'ศรีสารคาม', '118/3-4 Bang sue', '885804237', 'epicz.ipayz@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(4) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_des` text DEFAULT NULL,
  `p_price` int(10) NOT NULL,
  `p_image` varchar(100) DEFAULT NULL,
  `p_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `p_name`, `p_des`, `p_price`, `p_image`, `p_type`) VALUES
(13, 'Fizzing Star', '<h4>ข้อมูลผลิตภัณฑ์</h4>\r\n\r\nให้คุณผ่อนคลายกับการแช่อ่างน้ำยิ่งขึ้น ด้วย Fizzing Star บาธบอมที่ช่วยเพิ่มความกลิ่นหอม และบำรุงผิวให้นุ่มชุ่มชื้น', 50, 'b10.jpg', 'body'),
(14, 'Nourishing Shower Balm', '<h4>ข้อมูลผลิตภัณฑ์</h4>\r\n\r\nผลิตภัณฑ์ทำความสะอาดผิวกาย เนื้อเข้มข้น พร้อมมอบความชุ่มชื้น และความสดชื่นในทุกครั้งที่อาบน้ำ มาพร้อมกลิ่นหอมสดชื่น และบรรจุในทรงขวดแสนน่ารัก\r\n\r\n<h4>คุณประโยชน์</h4>\r\n\r\nเนื้อโฟมครีมนุ่มเนียนช่วยทำความสะอาด และดูแลผิวให้นุ่มชุ่มชื้น พร้อมกลิ่นหอมในหนึ่งเดียว\r\nได้รับการทดสอบการแพ้ว่าปลอดภัยกับทุกประเภทผิว', 170, 'b2.jpg', 'body'),
(15, 'Original Coffee Scrub', '<h4>ข้อมูลผลิตภัณฑ์</h4>\r\n\r\nสครับขัดผิวกายที่ทำจากกาแฟ 100% พร้อมด้วยส่วนผสมที่บำรุงผิวให้นุ่มชุ่มชื้น\r\n\r\n<h4>คุณประโยชน์</h4>\r\n<ul>\r\n<li>ผลิตจากกาแฟโรบัสต้าชั้นเลิศที่ช่วยกระตุ้นการไหลเวียนของเลือด และกระตุ้นการสร้างคอลลาเจนในผิว เพิ่มประสิทธิภาพในการผลัดเซลล์ผิวด้วยเกลือทะเลที่ช่วยลดการอักเสบและลดแบคทีเรีย อีกทั้งยังมีส่วนผสมที่อุดมด้วยสารต้านอนุมูลอิสระ</li>จาก<li>น้ำมันสวีท อัลมอนด์ (สกัดเย็น) และวิตามินอี ผิวของคุณจึงแลดูกระจ่างใส จุดด่างหรือแผลเป็นที่ผิวแลดูจางลง ผิวนุ่มชุ่มชื้นยิ่งขึ้น</li>\r\n<li>กลิ่นหอมจากกาแฟ ให้คุณรู้สึกกระปรี้กระเปร่า</li>\r\n<li>ส่วนผสมทั้งหมดในผลิตภัณฑ์เป็น Vegan & Cruelty Free</li>\r\n</ul>', 485, 'b3.jpg', 'body'),
(16, 'Exfoliating Body Granita', '<h4>ข้อมูลผลิตภัณฑ์</h4>\r\n\r\nปรนนิบัติผิวของคุณด้วยสครับขัดผิวกายจาก Sephora Collection เนื้อสครับช่วยผลัดเซลล์ผิวให้หลุดลอกอย่างอ่อนโยน มาพร้อมกลิ่นหอมให้เลือกถึง 5 กลิ่น ให้ผิวกระจ่างใส ดูนุ่มเนียน ให้คุณผ่อนคลายได้ทุกครั้งที่ใช้\r\n\r\n<h4>คุณประโยชน์</h4>\r\n\r\nช่วยให้ผิวสะอาด และขจัดเซลล์ผิวเก่าให้หลุดลอกอย่างอ่อนโยน ให้ผิวของคุณสวยนุ่มน่าสัมผัส และเรียบเนียนยิ่งขึ้น', 430, 'b4.jpg', 'body'),
(17, 'Pure Nude Rose Shower Gel', '<h4>ข้อมูลผลิตภัณฑ์</h4>\r\n\r\nเจลอาบน้ำกลิ่นกุหลาบเปลือยบริสุทธิ์กุหลาบกลิ่นดอก กุหลาบโปร่งโล่งโดยแรงบันดาลใจจากเปลือยของกลีบกุหลาบเปลือยและความรู้สึกสดชื่นสดชื่นของพระคุณอันบริสุทธิ์อันเป็นที่รักของเรา ความเรียบง่ายอย่างไม่ต้องพึ่งถูกแสดงออกมาในองค์ประกอบที่สวยงามของบลัชออนที่ละเอียดอ่อนเพิ่มขึ้นโดยมีสีเขียวชุ่มชื่นneroli และดอกไม้สีส้มสดใสที่ปกคลุมไปด้วยความอบอุ่นของราคะของไม้ซีดาร์และซากรัก', 1290, 'b5.jpg', 'body'),
(18, 'Hydrating Body Cream', '<h4>ข้อมูลผลิตภัณฑ์</h4>\r\n\r\nครีมบำรุงผิวกายเข้มข้นสูตร Ultra-Hydrating เพิ่มความชุ่มชื้นได้อย่างล้ำลึก ให้ผิวเนียนนุ่มทั่วเรือนร่าง\r\n\r\n<h4>คุณประโยชน์</h4>\r\n\r\nอุดมด้วยส่วนผสมธรรมชาติถึง 99.92% ผสานสารสกัดจากเมล็ดกาแฟ ช่วยให้ผิวกระชับ พร้อมด้วยสารสกัดจากทับทิม, ชาเขียว และ shea & cocoa butters ที่เพิ่มความชุ่มชื้น ฟื้นฟูผิวให้แข็งแรงสุขภาพดี', 1040, 'b6.jpg', 'body'),
(19, 'Rose Deep Hydration Toner', '<h4>ข้อมูลผลิตภัณฑ์</h4>\r\n\r\nโทนเนอร์สูตรปราศจากแอลกอฮอล์ที่เหมาะสำหรับทุกสภาพผิว ซึ่งไม่เพียงแค่ทำความสะอาดและปลอบประโลมผิวเท่านั้น แต่ยังสามารถมอบความชุ่มชื้นอย่างล้ำลึก ฟื้นบำรุงผิวให้เนียนนุ่ม กระชับรูขุมขน และเตรียมผิวของคุณเข้าสู่การบำรุงในขั้นตอนต่อไปได้อีกด้วย', 1760, 's1.jpg', 'skin'),
(20, 'Moisture Hydro Filler Concentrate', '<h4>ข้อมูลผลิตภัณฑ์</h4>\r\n\r\nมอยส์เจอร์ไรเซอร์เข้มข้นที่ฟื้นฟูความชุ่มชื้นให้ผิวรอบดวงตา สูตร water-gel ช่วยเพิ่มความสดชื่นได้ในทันที', 1600, 's2.jpg', 'skin'),
(21, 'Facial Spray With Aloe Herbs & Rose', '<h4>ข้อมูลผลิตภัณฑ์</h4>\r\n\r\nสเปรย์ที่เหมาะเป็นอย่างยิ่งสำหรับผู้ที่มีผิวหน้าที่แห้ง ซึ่งจะช่วยเติมความชุ่มชื้นให้กับผิวหน้าได้ทุกเมื่อ ไม่ว่าจะในออฟฟิศหรือบนเครื่องบินหรือที่ที่มีอากาศหนาวเย็น  โดยไม่ลบเลือนเมคอัพของคุณ \r\n\r\n<h4>คุณประโยชน์</h4>\r\n<ul>\r\n<li>อ่อนโยนต่อผิว เพราะอุดมไปด้วยสารสกัดจากธรรมชาติ</li>\r\n<li>กลิ่นหอมอ่อนๆ ช่วยให้ผ่อนคลายในขณะใช้</li>\r\n<li>เหมาะสำหรับทุกสภาพผิว</li>\r\n<ul>', 315, 's3.jpg', 'skin'),
(22, 'Moisture Replenishing Hydrator', '<h4>ข้อมูลผลิตภัณฑ์</h4>\r\n\r\nครีมเจลเนื้อสูตรสดชื่น เพื่อช่วยผิวสร้างแหล่งกักเก็บน้ำภายใน ผลิตภัณฑ์สามารถเก็บกักความชุ่มชื่นได้เป็นสองเท่าจากที่เคยทำมาก่อน* ผลิตภัณฑ์ทำงานต่อเนื่อง จึงช่วยให้ผิวแลดูเปล่งปลั่งและฉ่ำน้ำตลอดเวลาแม้หลังล้างหน้า\r\n\r\n<h4>คุณประโยชน์</h4>\r\n\r\nผ่านการทดสอบการแพ้ ปราศจากน้ำหอม 100% ไม่มีส่วนผสมของสารก่อให้เกิดสิว ผ่านการทดสอบจากแพทย์ผิวหนัง ผ่านการทดสอบจากจักษุแพทย์', 400, 's3.jpg', 'skin'),
(23, 'A Rosy Outlook Set', '<h4>ข้อมูลผลิตภัณฑ์</h4>\r\n\r\nเซตสกินแคร์สุดคุุ้มที่มาพร้อมส่วนผสมจากกุหลาบช่วยบำรุงผิวให้สุขภาพดีอย่างครบวงจร\r\n\r\n<h4>คุณประโยชน์</h4>\r\n\r\nปรนนิบัติผิวของคุณด้วยโทนเนอร์, มาส์ก และครีมบำรุงผิวที่ผสานคุณค่าจากบำรุงจากน้ำกุหลาบ อีกทั้งยังมีลิปทรีตเมนต์ในเฉดสีกุหลาบที่มอบความชุ่มชื้นให้ปากชุ่มชื้นอย่างเป็นธรรมชาติ', 2600, 's5.jpg', 'skin'),
(24, 'All Day Hydrator', '<h4>ข้อมูลผลิตภัณฑ์</h4>\r\n\r\nมอยส์เจอร์ไรเซอร์เนื้อบางเบาไม่เหนียวเหนอะหนะที่มีส่วนผสมธรรมชาติบำรุงผิวถึง 96% ที่เพิ่มความชุ่มชื้นให้ผิวด้วยส่วนผสมของ hyaluronic acid และ วิตามินอี เพิ่มความเปล่งปลั่ง อีกทั้งให้ผิวแข็งแรงสู้กับมลภาวะที่ทำร้ายด้วยสารต้านอนุมูลอิสระจากธรรมชาติ', 450, 's6.jpg', 'skin');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `type_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`type_name`) VALUES
('body'),
('face'),
('skin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `pid` (`pid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `p_type` (`p_type`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`type_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `uid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `product` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `member` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`p_type`) REFERENCES `product_type` (`type_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
