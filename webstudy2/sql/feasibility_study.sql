-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 03, 2020 at 04:22 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feasibility_study`
--

-- --------------------------------------------------------

--
-- Table structure for table `analysis`
--

CREATE TABLE `analysis` (
  `company_code` int(11) NOT NULL,
  `analysis_code` int(11) NOT NULL,
  `analysis_text` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `main_type` int(11) NOT NULL,
  `type_analysis` int(11) NOT NULL,
  `value_numbre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `analysis`
--

INSERT INTO `analysis` (`company_code`, `analysis_code`, `analysis_text`, `main_type`, `type_analysis`, `value_numbre`) VALUES
(3, 105, 'แรงงานเฉพะทาง (Specialist) ป.ตรี ป.โท (ประสบการณ์เฉพาะทาง)', 1, 1, 5),
(3, 106, '123', 1, 1, 6),
(3, 107, 'มีทักษะความรู้ความเข้าใจผลการปฎิบัติงานรายวันในการทำงานเพื่อให้บรรลุเป้าหมายที่กำหนดไว้', 1, 2, 5),
(3, 108, '123', 1, 2, 6),
(3, 109, 'ISO 45001:2018 มาตราฐานระบบการจัดการอาชีวอานามัย และความปลอดภัย<', 1, 3, 5),
(3, 110, '123', 1, 3, 6),
(3, 111, 'สามารถออกแบบผลิตภัณฑ์ได้มีวิศวกรออกแบบผลิตภัณฑ์ได้และสามารถทดสอบผลิตภัณฑ์ได้ทั้งหมด', 1, 4, 5),
(3, 112, '123', 1, 4, 6),
(3, 113, 'มีการใช้วัตถุดิบจากประเทศในกลุ่มอาเซียนร้อยละ 50 และเทคโนโลยีในประเทศไทยร้อยละ 100', 2, 1, 5),
(3, 114, '123', 2, 1, 6),
(3, 115, 'มีการทำการตลาดโดยการรับจ้างช่วงจากผู้ผลิต SME ลูกค้าทั่วไปกลุ่มโรงงานอุตสาหกรรมและบริษัทผู้ผลิตรถยนต์ (OEM) และมีการเชื่อมโยงการทำธุรกิจกับผู้ผลิต SME', 2, 2, 4),
(3, 116, '123', 2, 2, 5),
(3, 133, 'ส่งทดสอบให้กับโรงงานอุตสาหกรรมที่มีความสามารถด้านการทดสอบ', 2, 3, 5),
(3, 134, '123', 2, 3, 6),
(3, 135, 'การขายสินทร้พย์ที่มีอยู่', 2, 4, 5),
(3, 136, '123', 2, 4, 6),
(3, 137, 'ใช้แรงงานที่มีทักษะและประสบการณ์ในการทำงานมากกว่า 10 ปี ขึ้นไป', 2, 5, 5),
(3, 138, '', 2, 5, 6),
(3, 139, 'แรงงานใช้คนร้อยละ 0 เครื่องจักรร้อยละ 100 (Automatic System', 2, 6, 5),
(3, 140, '', 2, 6, 6),
(3, 141, 'ดำเนินธุรกิจแบบโฮลดิ้งคอมพานี', 2, 7, 5),
(3, 142, '', 2, 7, 6),
(3, 143, 'มีการแข่งขันและไม่มีการประสานงาน', 2, 8, 3),
(3, 144, '', 2, 8, 4),
(3, 145, 'ศูนย์จำหน่ายอะไหล่รถยนต์', 2, 9, 5),
(3, 146, '123', 2, 9, 6),
(3, 147, 'ทุนจากการระดมทุนเข้าตลาดหลักทรัพย์', 2, 10, 5),
(3, 148, '123', 2, 10, 6),
(3, 149, 'อะไหล่เพื่อเป็นรถต้นแบบของบริษัทผู้ผลิต', 3, 1, 4),
(3, 150, '123', 3, 1, 5),
(3, 151, '123', 3, 2, 3),
(3, 152, 'ประเทศในกลุ่มอาเซียน', 3, 3, 6),
(3, 153, '123', 3, 3, 7),
(3, 154, 'ไปยังกลุ่มอาเซียน', 4, 1, 2),
(3, 155, 'ชิ้นส่วนต่าง ๆ เพื่อนำมาประกอบ', 4, 2, 3),
(3, 156, 'เคมีภัณฑ์', 4, 2, 4),
(3, 157, 'ประเทศอินเดีย', 4, 3, 4),
(3, 158, 'ศูนย์อะไหล่', 4, 4, 2),
(3, 159, 'บริษัทที่เป็นเครือข่ายในประเทศ', 4, 5, 3),
(3, 160, 'เชื้อชาติ', 4, 6, 2),
(3, 161, 'ประเทศในกลุ่มอาเซียน', 4, 7, 5),
(3, 162, 'ประเทศญี่ปุ่น', 4, 8, 2),
(3, 163, 'รถยนต์ปลั๊กอินไฮบริค', 4, 9, 1),
(3, 164, 'ยอดจำหน่ายรถยนต์ลดลง', 4, 10, 1),
(1, 165, 'ISO 45001:2018 มาตราฐานระบบการจัดการอาชีวอานามัย และความปลอดภัย<', 1, 3, 5),
(1, 166, '123123123', 1, 3, 6),
(1, 167, 'สามารถออกแบบผลิตภัณฑ์ได้มีวิศวกรออกแบบผลิตภัณฑ์ได้และสามารถทดสอบผลิตภัณฑ์ได้ทั้งหมด', 1, 4, 5),
(1, 168, '123123123123', 1, 4, 6),
(1, 169, 'มีการใช้วัตถุดิบจากประเทศในกลุ่มอาเซียนร้อยละ 50 และเทคโนโลยีในประเทศไทยร้อยละ 100', 2, 1, 5),
(1, 170, 'qweqweqweqwewqeqwe', 2, 1, 6),
(1, 171, 'มีการทำการตลาดโดยการรับจ้างช่วงจากผู้ผลิต SME ลูกค้าทั่วไปกลุ่มโรงงานอุตสาหกรรมและบริษัทผู้ผลิตรถยนต์ (OEM) และมีการเชื่อมโยงการทำธุรกิจกับผู้ผลิต SME', 2, 2, 4),
(1, 172, '123123123', 2, 2, 5),
(1, 173, 'ส่งทดสอบให้กับโรงงานอุตสาหกรรมที่มีความสามารถด้านการทดสอบ', 2, 3, 5),
(1, 174, '123123123', 2, 3, 6),
(1, 175, 'การขายสินทร้พย์ที่มีอยู่', 2, 4, 5),
(1, 176, '123123123123', 2, 4, 6),
(1, 177, 'ใช้แรงงานที่มีทักษะและประสบการณ์ในการทำงานมากกว่า 10 ปี ขึ้นไป', 2, 5, 5),
(1, 178, '1231231231', 2, 5, 6),
(1, 179, 'แรงงานใช้คนร้อยละ 0 เครื่องจักรร้อยละ 100 (Automatic System', 2, 6, 5),
(1, 180, '123123123123123', 2, 6, 6),
(1, 181, 'ดำเนินธุรกิจแบบโฮลดิ้งคอมพานี', 2, 7, 5),
(1, 182, '123123123123', 2, 7, 6),
(1, 183, 'มีการแข่งขันและไม่มีการประสานงาน', 2, 8, 3),
(1, 184, '123123123123', 2, 8, 4),
(1, 185, 'ศูนย์จำหน่ายอะไหล่รถยนต์', 2, 9, 5),
(1, 186, '1231231231', 2, 9, 6),
(1, 187, 'ทุนจากการระดมทุนเข้าตลาดหลักทรัพย์', 2, 10, 5),
(1, 188, '123123123123', 2, 10, 6),
(1, 189, 'อะไหล่เพื่อเป็นรถต้นแบบของบริษัทผู้ผลิต', 3, 1, 4),
(1, 190, '123123123123', 3, 1, 5),
(1, 191, 'รถไฟฟ้าแบตเตอรี่', 3, 2, 2),
(1, 192, '12312312312313', 3, 2, 3),
(1, 193, 'ประเทศเกาหลี', 3, 3, 5),
(1, 194, '123123123123123', 3, 3, 7),
(1, 195, 'ไปยังกลุ่มอาเซียน', 4, 1, 2),
(1, 196, '1231231231', 4, 1, 3),
(1, 197, 'เคมีภัณฑ์', 4, 2, 4),
(1, 198, '123123123', 4, 2, 5),
(1, 199, 'ประเทศในกลุ่มอาเซียน', 4, 3, 5),
(1, 200, '123123123123', 4, 3, 6),
(1, 201, 'ศูนย์อะไหล่', 4, 4, 2),
(1, 202, '3123123123', 4, 4, 3),
(1, 203, 'บริษัทคู่แข่งที่สำคัญ', 4, 5, 4),
(1, 204, '123123123', 4, 5, 5),
(1, 205, 'การบริหารจัดการ', 4, 6, 5),
(1, 206, '123123123123', 4, 6, 6),
(1, 207, 'ประเทศในกลุ่มอาเซียน', 4, 7, 5),
(1, 208, '123123123', 4, 7, 6),
(1, 209, 'ประเทศในกลุ่มอาเซียน', 4, 8, 5),
(1, 210, '123123123', 4, 8, 6),
(1, 211, 'รถยนต์ไฟฟ้าแบตเตอรี่', 4, 9, 2),
(1, 212, '123123123', 4, 9, 3),
(1, 213, 'รถเปลี่ยนอะไหล่ลดลง', 4, 10, 2),
(1, 214, '123123123', 4, 10, 3),
(38, 215, 'แรงงานกึ่งฝีมือ (Semi-Skilled) ม.6 ปวช.', 1, 1, 2),
(38, 216, 'แรงงานฝีมือ (Skilled) ปวส.', 1, 1, 3),
(38, 217, 'รางงานเก่งมาก', 1, 1, 6),
(38, 218, 'มีทักษะทางด้านเทคนิคที่เกี่ยวข้องในการทำงาน', 1, 2, 2),
(38, 219, '', 1, 2, 6),
(38, 220, 'กลับประเทศเจ้าของ', 4, 1, 1),
(38, 221, 'ไปยังกลุ่มอาเซียน', 4, 1, 2),
(38, 222, 'haskjd', 4, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_code` int(11) NOT NULL,
  `company_project` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `company_name` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `company_local` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `company_type` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `month` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `offer` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `address` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `dateadd` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Number` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_code`, `company_project`, `company_name`, `company_local`, `company_type`, `month`, `offer`, `address`, `dateadd`, `Number`) VALUES
(1, 'นอนอย่างเป็นสุข', 'นอนน้อยจำกัด', 'ในห้องนอน', 'กิจการสร้าสรรน', '7', 'หัวหน้า', 'ถนน.วงเเหวนรอบเมือง ต.ปรุใหญ่', '2020-07-29 11:05:12', 'aaaa'),
(2, 'นอนอย่างเป็นสุข', 'นอนน้อยจำกัด', 'ในห้องนอน', 'กิจการสร้าสรรน', '7', 'หัวหน้า', 'ถนน.วงเเหวนรอบเมือง ต.ปรุใหญ่', '2020-07-29 14:46:17', 'assss'),
(3, 'นอนอย่างเป็นสุข', 'นอนน้อยจำกัด', 'ในห้องนอน', 'กิจการสร้าสรรน', '7', 'หัวหน้า', 'ถนน.วงเเหวนรอบเมือง ต.ปรุใหญ่', '2020-07-29 14:46:59', ''),
(4, 'นอนอย่างเป็นสุข', 'นอนน้อยจำกัด', 'ในห้องนอน', 'กิจการสร้าสรรน', '7', 'หัวหน้า', 'ถนน.วงเเหวนรอบเมือง ต.ปรุใหญ่', '2020-07-29 15:25:28', ''),
(5, 'oo', 'ooo', 'ในห้องนอน', 'oooooo', '7', 'หัวหน้า', 'ถนน.วงเเหวนรอบเมือง ต.ปรุใหญ่', '2020-07-29 15:29:12', ''),
(6, 'นอนอย่างเป็นสุข', 'นอนน้อยจำกัด', 'ooooo', 'กิจการสร้าสรรน', '1', 'หัวหน้า', 'ถนน.วงเเหวนรอบเมือง ต.ปรุใหญ่', '2020-07-29 15:29:47', ''),
(7, 'นอนอย่างเป็นสุข', 'นอนน้อยจำกัด', 'ในห้องนอน', 'กิจการสร้าสรรน', '7', 'หัวหน้า', 'ถนน.วงเเหวนรอบเมือง ต.ปรุใหญ่', '2020-07-30 12:08:12', ''),
(20, 'นอนอย่างเป็นสุข', 'นอนน้อยจำกัด', 'ในห้องนอน', 'กิจการสร้าสรรน', '7', 'หัวหน้า', 'ถนน.วงเเหวนรอบเมือง ต.ปรุใหญ่', '2020-07-30 17:32:03', 'Kl653872'),
(21, 'นอนอย่างเป็นสุข', 'นอนน้อยจำกัด', 'ในห้องนอน', 'กิจการสร้าสรรน', '7', 'หัวหน้า', 'ถนน.วงเเหวนรอบเมือง ต.ปรุใหญ่', '2020-07-30 17:52:54', 'ye275042'),
(25, 'นอนอย่างเป็นสุข', 'นอนน้อยจำกัด', 'ในห้องนอน', 'กิจการสร้าสรรน', '7', 'หัวหน้า', 'ถนน.วงเเหวนรอบเมือง ต.ปรุใหญ่', '2020-07-31 10:35:21', 'mJ306285'),
(44, 'นอนอย่างเป็นสุข', '1', 'ในห้องนอน', 'กิจการสร้าสรรน', '7', 'หัวหน้า', 'ถนน.วงเเหวนรอบเมือง ต.ปรุใหญ่', '2020-08-03 10:02:55', 'lI671398'),
(45, 'นอนอย่างเป็นสุข', '1', 'ในห้องนอน', 'กิจการสร้าสรรน', '7', 'หัวหน้า', 'ถนน.วงเเหวนรอบเมือง ต.ปรุใหญ่', '2020-08-03 10:08:17', 'lI671398'),
(46, 'นอนอย่างเป็นสุข', 'นอนน้อยจำกัด', 'ในห้องนอน', 'กิจการสร้าสรรน', '7', '1', 'ถนน.วงเเหวนรอบเมือง ต.ปรุใหญ่', '2020-08-03 10:11:39', 'Qj136581');

-- --------------------------------------------------------

--
-- Table structure for table `competitive_force`
--

CREATE TABLE `competitive_force` (
  `company_code` int(11) NOT NULL,
  `competitive_force_code` int(11) NOT NULL,
  `competitive_force_text` varchar(1000) NOT NULL,
  `main_type` int(11) NOT NULL,
  `type_analysis` int(11) NOT NULL,
  `value_numbre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `competitive_force`
--

INSERT INTO `competitive_force` (`company_code`, `competitive_force_code`, `competitive_force_text`, `main_type`, `type_analysis`, `value_numbre`) VALUES
(3, 33, 'จากโรงงานอุตสาหกรรมที่ SME รับจ้างช่วงผลิตแล้วดึงชิ้นงานกลับเพื่อทำการผลิตชิ้นส่วนเอง', 1, 1, 3),
(3, 34, 'ด้านดัชนีชี้วัดต่าง ๆ จากค่ายผู้ผลิตรถยนต์ เช่น การจัดส่ง คุณภาพ ราคา', 1, 2, 1),
(3, 35, 'การเข้ามาของผู้ผลิตชิ้นส่วน SME รายใหม่เข้ามายากเนื่องจากค่ายผู้ผลิตรถยนต์ยังไม่ยอมรับยกเว้นรับจ้างผลิตต่อจากผู้ผลิตชิ้นส่วน SME เดิม', 1, 3, 1),
(3, 36, 'ค่ายผู้ผลิตรถยนต์ได้มีการเปลี่ยนรูปลักษณ์ หรือสมรรถนะทำให้กระทบชิ้นส่วนเดิม เช่น จากเหล็กเป็นเหล็กเหนียวเพื่อลดต้นทุน', 1, 4, 1),
(1, 37, 'จากค่ายผู้ผลิตรถยนต์เปลี่ยนเจ้าระบุให้เปลี่ยนเนื่องจากด้วยราคาและคุณภาพและการจัดส่ง', 1, 1, 4),
(1, 38, '123123', 1, 1, 5),
(1, 39, 'ด้านกิจกรรมต่าง ๆ จากค่ายผู้ผลิตรถยนต์ เช่น การทำระบบโตโยต้า การทำคิวซีซี การประกวดการแข่งขันด้านความปลอดภัย เป็นต้น', 1, 2, 2),
(1, 40, '123123', 1, 2, 3),
(1, 41, 'เทคโนโลยีการผลิตที่ดีกว่าทำให้ราคาและคุณภาพที่ต่ำกว่าทำให้ผู้ผลิตชิ้นส่วน SME รายใหม่สามารถเข้ามาได้', 1, 3, 3),
(1, 42, '123123', 1, 3, 4),
(1, 43, 'การใช้วัตถุดิบอื่นเพื่อลดต้นทุนลงแต่สมรถถนะยังคงเท่าเดิมของค่ายผู้ผลิตรถยนต์', 1, 4, 2),
(1, 44, '123123', 1, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `cost`
--

CREATE TABLE `cost` (
  `company_code` int(11) NOT NULL,
  `cost_code` int(11) NOT NULL,
  `money` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `unit` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cost`
--

INSERT INTO `cost` (`company_code`, `cost_code`, `money`, `unit`) VALUES
(3, 37, '1', '1'),
(1, 62, '1', '1'),
(1, 63, '1', '1'),
(1, 64, '1', ''),
(1, 65, '1', '1'),
(1, 66, '1', '1'),
(1, 67, '1', '1'),
(1, 68, '1', '1'),
(1, 69, '', '1'),
(1, 70, '1', '1'),
(1, 71, '1', '1'),
(1, 72, '1', '1'),
(1, 73, '11', '1'),
(38, 74, '111', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_code` int(11) NOT NULL,
  `company_code` int(11) NOT NULL,
  `customer_name` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `customer_local` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `customer_phone` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `customer_email` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `customer_employe` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `customer_payment` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_code`, `company_code`, `customer_name`, `customer_local`, `customer_phone`, `customer_email`, `customer_employe`, `customer_payment`) VALUES
(1, 1, '1', '1', '1', '1', '1', '1'),
(2, 1, '1', '1', '1', '1', '1', '1'),
(4, 3, '111', '111', '', '', '', ''),
(5, 20, '1', '1', '1', '1', '1', '1'),
(6, 20, '1', '1', '1', '1', '1', '1'),
(7, 20, '1', '1', '1', '1', '1', '1'),
(8, 20, '1', '', '', '', '', ''),
(9, 23, '1!!11', '1', '1', '1', '1', '1'),
(10, 23, '1', '11', '1', '1', '1', '1'),
(11, 23, '1', '1', '1', '1', '1', '1'),
(12, 37, '', '1', '1', '1', '1', '1'),
(13, 37, '', '1', '1', '1', '1', '1'),
(14, 37, '1', '1', '1', '1', '1', ''),
(15, 38, '1', '1', '11', '1', '1', '1'),
(16, 38, '1', '1', '1', '1', '1', '1'),
(17, 40, 'ๅ', '', '', 'ๅๅ', 'ๅๅ', 'ๅ'),
(18, 40, 'ๅ', 'ๅ', 'ๅๅๅๅๅ', 'ๅ', 'ๅ', 'ๅ'),
(19, 40, 'ๅ', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `demand_supply`
--

CREATE TABLE `demand_supply` (
  `company_code` int(11) NOT NULL,
  `demand_supply_code` int(11) NOT NULL,
  `demand` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `demand_unit` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `supply` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `supply_unit` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `month` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `demand_supply`
--

INSERT INTO `demand_supply` (`company_code`, `demand_supply_code`, `demand`, `demand_unit`, `supply`, `supply_unit`, `month`) VALUES
(1, 1, '1', '11', '1', '1', 1),
(1, 2, '1', '1', '1', '1', 2),
(1, 3, '1', '1', '1', '1', 3),
(3, 8, '1', '1', '1', '1', 1),
(3, 9, '1', '', '', '', 2),
(3, 10, '', '1', '1', '', 3),
(3, 11, '', '', '', '1', 4),
(23, 12, '', '1', '1', '1', 1),
(23, 13, '1', '1', '1', '1', 2),
(23, 14, '1', '1', '1', '1', 3),
(38, 15, '1', '1', '11', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `marketing_analysis`
--

CREATE TABLE `marketing_analysis` (
  `company_code` int(11) NOT NULL,
  `marketing_analysis_code` int(11) NOT NULL,
  `marketing_analysis_text` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `main_type` int(11) NOT NULL,
  `type_analysis` int(11) NOT NULL,
  `value_numbre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `marketing_analysis`
--

INSERT INTO `marketing_analysis` (`company_code`, `marketing_analysis_code`, `marketing_analysis_text`, `main_type`, `type_analysis`, `value_numbre`) VALUES
(3, 29, 'ผู้ผลิตรถยนต์ปิดโรงงานผลิต', 1, 1, 4),
(3, 30, 'ไม่มีความชัดเจนในนโยบายรถยนต์ทางเลือกส่งเสริมให้กับค่ายผู้ผลิตรถยนต์', 1, 2, 1),
(3, 31, 'รุ่นรถยนต์บางรุ่นย้ายไปผลิตประเทศอื่นเพื่อใช้จากการแข็งของค่าเงินบาท', 2, 1, 2),
(3, 32, 'โอกาสผลิตชิ้นส่วนของรถยนต์ทางเลือกเพิ่มมากขึ้นด้านบวก', 3, 1, 1),
(3, 33, 'ชิ้นส่วนที่ผลิตอยู่มีการรติดตั้งอุปกรณ์บางอย่างเพื่อรองรับเทคโนโลยีทำให้มูลค่าของชิ้นส่วนนั้นสูงขึ้น', 4, 1, 2),
(3, 34, 'ชิ้นส่วนนำเข้ามาด้วยราคาที่ถูกกว่าทำให้ชิ้นส่วนที่ผลิตอยู่เดิมกระทบเรื่องจำนวนการผลิตและราคาเดิมที่ผลิตอยู่', 5, 1, 1),
(3, 35, 'Caต้องปรับเปลี่ยนเครื่องมือหรือเครื่องจักรเพื่อให้สามารถผลิตชิ้นส่วนสำหรับรถยนต์ไฟฟ้าได้r', 6, 1, 2),
(1, 36, 'ผู้ผลิตรถยนต์ปิดโรงงานผลิต', 1, 1, 4),
(1, 37, '123123123', 1, 1, 5),
(1, 38, 'ไม่มีค่ายผู้ผลิตรถยนต์ประชาสัมพันธ์การขายรถยนต์ทางเลือกให้กับผู้ซื้อเท่าที่ควร', 1, 2, 2),
(1, 39, '123123123', 1, 2, 3),
(1, 40, 'รุ่นรถยนต์บางรุ่นย้ายไปผลิตประเทศอื่นเพื่อใช้จากการแข็งของค่าเงินบาท', 2, 1, 2),
(1, 41, '123123', 2, 1, 3),
(1, 42, 'ชิ้นส่วนยานยนต์ที่ผลิตปัจจุบันมีโอกาสได้รับผลกระทบด้านลน', 3, 1, 2),
(1, 43, '123123123', 3, 1, 3),
(1, 44, 'ชิ้นส่วนที่ผลิตอยู่มีการรติดตั้งอุปกรณ์บางอย่างเพื่อรองรับเทคโนโลยีทำให้มูลค่าของชิ้นส่วนนั้นสูงขึ้น', 4, 1, 2),
(1, 45, '123123123', 4, 1, 3),
(1, 46, 'ทำให้โครงสร้างราคาชิ้นส่วนทีมีอยู่เดิมได้รับผลกระทบและราคาที่มีอยู่เดิมลดลงได้', 5, 1, 2),
(1, 47, '123123', 5, 1, 3),
(1, 48, 'ชิ้นส่วนที่ผลิตอยู่มีโอกาสเปลี่ยนไปใช้ชิ้นส่วนที่เป็นส่วนที่เกี่ยวข้องกับรถยนต์ไฟฟ้าเพิ่มสูงขึ้นทำให้ส่งผลกระทบกับจำนวนที่พยากรณ์การผลิตเอาไว้', 6, 1, 1),
(1, 49, '123123123123', 6, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `marketing_mix`
--

CREATE TABLE `marketing_mix` (
  `company_code` int(11) NOT NULL,
  `marketing_mix_code` int(11) NOT NULL,
  `marketing_mix_text` varchar(1000) NOT NULL,
  `main_type` int(11) NOT NULL,
  `type_analysis` int(11) NOT NULL,
  `value_numbre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `marketing_mix`
--

INSERT INTO `marketing_mix` (`company_code`, `marketing_mix_code`, `marketing_mix_text`, `main_type`, `type_analysis`, `value_numbre`) VALUES
(3, 25, 'ผลิตภัณฑ์เป็นชิ้นส่วนที่เป็นอะไหล่ทดแทนเมื่อรถยนต์ถึงเวลาตามกำหนดระยะของรถยนต์ที่ใช้', 1, 1, 2),
(3, 26, 'ราคาถูกกว่ากำหนดจากศูนย์อะไหล่ของค่ายผู้ผลิตชิ้นส่วน', 2, 1, 2),
(3, 27, 'ส่งให้กับผู้ผลิตชิ้นส่วนยานยนต์ในลำดับถัดไปเพื่อประกอบเป็นชิ้นส่วนกึ่งสำเร็จรูปเพื่อส่งให้กับผู้ผลิตชิ้นส่วนนำไปประกอบเป็นชิ้นส่วนสำเร็จรูปก่อนส่งตรงไปยังโรงงานหรือรถของผู้ผลิตรถยนต์มารับเองตามรอบเวลา', 3, 1, 2),
(3, 28, 'ไม่สามารถนำชิ้นส่วนไปจำหน่ายเป็นอะไหล่เทียมให้กับตลาดล่างได้เนื่องจากมีความผิดตามกฎหมาย', 4, 1, 2),
(1, 29, 'ผลิตภัณฑ์เป็นชิ้นส่วนที่เป็นอะไหล่ทดแทนเมื่อรถยนต์เกิดุบัติเหตุต้องมีการเปลี่ยนอะไหล่เพื่อทดแทนของเดิมที่ชำรุด', 1, 1, 3),
(1, 30, '123123123', 1, 1, 4),
(1, 31, 'ไม่สามารถกำหนดราคาเองได้', 2, 1, 3),
(1, 32, '123123123123', 2, 1, 4),
(1, 33, 'ส่งให้กับตรงศูนย์อะไหล่ของค่ายผู้ผลิตรถยนต์ในต่างประเทศ', 3, 1, 4),
(1, 34, 'qweqweq', 3, 1, 5),
(1, 35, 'สามารถเข้าไปนำเสนอให้กับค่าบผู้ผลิตรถยนต์ได้เพื่อให้รับทราบความสามารถในกระบวนการผลิตทั้งเครื่องจักรและบุคลากรรวมถึงความสามารถในด้านการออกแบบและทดสอบผลิตภัณฑ์ถ้ามีการเปลี่ยนแปลงรูปโฉม (Minor Change)  หรือเปลี่ยนรถยนต์ใหม่หมด (Major Change) ของรถยนต์อาจส่งผลต่อการเลือกผู้ส่งมอบในอนาคตได้', 4, 1, 3),
(1, 36, '1231231231231', 4, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `supply_chain`
--

CREATE TABLE `supply_chain` (
  `supply_chain` int(11) NOT NULL,
  `Supplier1` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Supplier2` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Supplier3` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `yourfactory` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `customer1` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `customer2` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `customer3` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `company_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supply_chain`
--

INSERT INTO `supply_chain` (`supply_chain`, `Supplier1`, `Supplier2`, `Supplier3`, `yourfactory`, `customer1`, `customer2`, `customer3`, `company_code`) VALUES
(1, '1', '1', '1', '1111', '1', '1', '1', 1),
(2, '1', '1', '1', '1', '1', '1', '1', 1),
(15, '1', '1', '1', '1', '1', '1', '1', 3),
(16, '1', '', '', '', '', '', '', 3),
(17, '1', '1', '1', '1', '1', '1', '1', 23),
(18, '1', '1', '1', '11', '1', '1', '1', 38);

-- --------------------------------------------------------

--
-- Table structure for table `target`
--

CREATE TABLE `target` (
  `company_code` int(11) NOT NULL,
  `target_code` int(11) NOT NULL,
  `target_text` varchar(1000) NOT NULL,
  `main_type` int(11) NOT NULL,
  `type_analysis` int(11) NOT NULL,
  `value_numbre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `target`
--

INSERT INTO `target` (`company_code`, `target_code`, `target_text`, `main_type`, `type_analysis`, `value_numbre`) VALUES
(3, 19, 'อาจจะมีโอกาสจากชิ้นส่วนเดิมที่ผลิตอยู่นำไปใช้กับผลิตภัณฑ์ใหม่ของผู้ผลิตรถยนต์', 1, 1, 2),
(3, 20, 'ใช้ชิ้นส่วนที่ผลิตในปัจจุบันเพื่อใช้ในผลิตภัณฑ์ของค่ายรถยนต์อื่น', 2, 1, 1),
(3, 21, 'ยกระดับชิ้นส่วนที่ผลิตในปัจจุบันให้มีความหลากหลายเพิ่มมากขึ้น', 3, 1, 1),
(1, 22, 'อาจจะมีโอกาสจากชิ้นส่วนเดิมที่ผลิตอยู่นำไปใช้กับผลิตภัณฑ์ใหม่ของผู้ผลิตรถยนต์', 1, 1, 2),
(1, 23, '123123', 1, 1, 3),
(1, 24, 'ใช้ชิ้นส่วนที่ผลิตในปัจจุบันเพื่อใช้ในผลิตภัณฑ์ของค่ายรถยนต์อื่น', 2, 1, 1),
(1, 25, '123123', 2, 1, 2),
(1, 26, 'ยกระดับชิ้นส่วนที่ผลิตในปัจจุบันให้มีความหลากหลายเพิ่มมากขึ้น', 3, 1, 1),
(1, 27, '123123123123', 3, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_code` int(11) NOT NULL,
  `user_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `companey` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `layer` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_code`, `user_name`, `password`, `companey`, `layer`) VALUES
(1, 'admin', 'st1234', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analysis`
--
ALTER TABLE `analysis`
  ADD PRIMARY KEY (`analysis_code`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_code`);

--
-- Indexes for table `competitive_force`
--
ALTER TABLE `competitive_force`
  ADD PRIMARY KEY (`competitive_force_code`);

--
-- Indexes for table `cost`
--
ALTER TABLE `cost`
  ADD PRIMARY KEY (`cost_code`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_code`),
  ADD KEY `fk_customer_company1` (`company_code`);

--
-- Indexes for table `demand_supply`
--
ALTER TABLE `demand_supply`
  ADD PRIMARY KEY (`demand_supply_code`);

--
-- Indexes for table `marketing_analysis`
--
ALTER TABLE `marketing_analysis`
  ADD PRIMARY KEY (`marketing_analysis_code`);

--
-- Indexes for table `marketing_mix`
--
ALTER TABLE `marketing_mix`
  ADD PRIMARY KEY (`marketing_mix_code`);

--
-- Indexes for table `supply_chain`
--
ALTER TABLE `supply_chain`
  ADD PRIMARY KEY (`supply_chain`);

--
-- Indexes for table `target`
--
ALTER TABLE `target`
  ADD PRIMARY KEY (`target_code`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `analysis`
--
ALTER TABLE `analysis`
  MODIFY `analysis_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `competitive_force`
--
ALTER TABLE `competitive_force`
  MODIFY `competitive_force_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `cost`
--
ALTER TABLE `cost`
  MODIFY `cost_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `demand_supply`
--
ALTER TABLE `demand_supply`
  MODIFY `demand_supply_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `marketing_analysis`
--
ALTER TABLE `marketing_analysis`
  MODIFY `marketing_analysis_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `marketing_mix`
--
ALTER TABLE `marketing_mix`
  MODIFY `marketing_mix_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `supply_chain`
--
ALTER TABLE `supply_chain`
  MODIFY `supply_chain` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `target`
--
ALTER TABLE `target`
  MODIFY `target_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
