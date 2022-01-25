-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2021 at 05:00 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `state_dairy`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `email_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `total_price` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `email_id`, `total_price`, `created`, `modified`, `status`) VALUES
(130, 'vandunaykay0001@gmail.com', 112.00, '2021-04-17 13:01:27', '2021-04-17 13:01:27', '1'),
(131, 'vandunaykay0001@gmail.com', 90.00, '2021-04-17 13:02:26', '2021-04-17 13:02:26', '1');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `email_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pro_id` int(5) NOT NULL,
  `total_price` int(10) NOT NULL,
  `quantity` int(5) NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `email_id`, `pro_id`, `total_price`, `quantity`, `date`, `status`) VALUES
(215, 130, 'vandunaykay0001@gmail.com', 2, 112, 1, '2021-04-17 16:31:28', 'pending'),
(216, 130, 'vandunaykay0001@gmail.com', 1, 112, 1, '2021-04-17 16:31:28', 'pending'),
(217, 131, 'vandunaykay0001@gmail.com', 2, 90, 1, '2021-04-17 16:32:27', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `response`
--

CREATE TABLE `response` (
  `response_id` int(6) NOT NULL,
  `ORDERID` varchar(5) NOT NULL,
  `MID` varchar(50) NOT NULL,
  `TXNID` varchar(50) NOT NULL,
  `TXNAMOUNT` varchar(50) NOT NULL,
  `PAYMENTMODE` varchar(50) NOT NULL,
  `CURRENCY` varchar(50) NOT NULL,
  `TXNDATE` datetime NOT NULL,
  `STATUS` varchar(40) NOT NULL,
  `RESPCODE` varchar(40) NOT NULL,
  `RESPMSG` varchar(50) NOT NULL,
  `GATEWAYNAME` varchar(50) NOT NULL,
  `BANKTXNID` int(11) NOT NULL,
  `BANKNAME` int(11) NOT NULL,
  `CHECKSUMHASH` int(11) NOT NULL,
  `isdeleted` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `cat_id` int(3) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `cat_name`, `status`) VALUES
(1, 'Milk', b'0'),
(2, 'cheese', b'0'),
(3, 'Dahi', b'0'),
(4, 'Ice Cream', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complain`
--

CREATE TABLE `tbl_complain` (
  `complain_id` int(4) NOT NULL,
  `user_id` int(4) NOT NULL,
  `complain_type` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_complain`
--

INSERT INTO `tbl_complain` (`complain_id`, `user_id`, `complain_type`, `description`, `date`, `status`) VALUES
(5, 23, 'regarding qulaity of milk', 'we are not happy with quality of milk', '2021-04-14', 'pending'),
(6, 24, 'regarding qulaity of milk', 'not good', '2021-04-17', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `contact_id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mo_number` bigint(10) NOT NULL,
  `message` varchar(200) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contact_id`, `name`, `email`, `mo_number`, `message`, `status`) VALUES
(1, 'hhj', 'hjhj', 5255454, 'hyrt', b'1'),
(2, 'njiefefuur', 'nita2@gmai.com', 2566333333, 'chwyhydyew', b'0'),
(4, 'chetan', 'chetansonihns@rediffmail.com', 9825345325, 'hello', b'0'),
(5, 'chetan soni', 'ravi@gmail.com', 9898989898, 'hello', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedback_id` int(3) NOT NULL,
  `user_id` int(3) NOT NULL,
  `message` text NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedback_id`, `user_id`, `message`, `status`) VALUES
(1, 23, 'very good site with all info', b'0'),
(2, 24, 'very good site with all info', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_helpdesk`
--

CREATE TABLE `tbl_helpdesk` (
  `helpdesk_id` int(3) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_helpdesk`
--

INSERT INTO `tbl_helpdesk` (`helpdesk_id`, `question`, `answer`, `status`) VALUES
(2, 'WHAT DOES MEAN “FOOD SAFETY”?', 'Is about ensuring that food does not cause injury or harm to consumers when it is prepared and / or eaten according to its intended use.', b'0'),
(3, 'WHAT DOES MEAN “FOOD HYGIENE”?', 'All conditions and measures necessary to ensure the safety and suitability of food at all stages of the food chain.', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `login_id` int(3) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `type` varchar(6) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `email_id`, `password`, `type`, `status`) VALUES
(5, 'admin@admin.com', 'admin', 'admin', b'0'),
(7, 'nivaaninfotech@gmail.com', 'krishna', 'user', b'0'),
(8, 'vandunaykay0001@gmail.com', 'krishna', 'user', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_milk`
--

CREATE TABLE `tbl_milk` (
  `milk_id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `milk_name` varchar(50) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `price` int(5) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `kg` varchar(50) NOT NULL,
  `container` varchar(25) NOT NULL,
  `product_type` varchar(25) NOT NULL,
  `description` varchar(500) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_milk`
--

INSERT INTO `tbl_milk` (`milk_id`, `user_id`, `milk_name`, `qty`, `price`, `logo`, `kg`, `container`, `product_type`, `description`, `status`) VALUES
(6, 23, 'taza', '25', 500, 'WhatsApp Image 2021-03-12 at 11.44.05 AM.jpeg', '500 ltr', '3802', 'milk', 'tazza homegenized milk', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_milkdistributor`
--

CREATE TABLE `tbl_milkdistributor` (
  `user_id` int(4) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `middle_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `birth_date` date NOT NULL,
  `mobile_number` bigint(10) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `city` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `otp` int(3) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_milkdistributor`
--

INSERT INTO `tbl_milkdistributor` (`user_id`, `first_name`, `middle_name`, `last_name`, `birth_date`, `mobile_number`, `email_id`, `password`, `city`, `address`, `otp`, `status`) VALUES
(23, 'chetan', 'rav', 'soni1', '2021-04-07', 9374283619, 'nivaaninfotech@gmail.com', 'krishna', 'visnagar', 'visnagar', 294, b'0'),
(24, 'vandana', 'nayak', 'naK', '1980-02-02', 8140767335, 'vandunaykay0001@gmail.com', 'krishna', 'visnagr', 'visnaga', 4598, b'0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `pay_id` int(3) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `total_price` int(4) NOT NULL,
  `card_type` varchar(15) NOT NULL,
  `nameon_card` varchar(30) NOT NULL,
  `card_no` bigint(16) NOT NULL,
  `expiry_date` varchar(10) NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`pay_id`, `email_id`, `total_price`, `card_type`, `nameon_card`, `card_no`, `expiry_date`, `date`, `status`) VALUES
(9, 'vandunayak4000@gmail.com', 90, 'visa', 'shreya', 4444444444444444, '2021-07', '2021-04-13 12:27:19', 'approve'),
(10, 'vandunaykay0001@gmail.com', 112, 'visa', 'shreya', 7777777777777777, '2021-08', '2021-04-17 16:31:57', 'approve');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `pro_id` int(3) NOT NULL,
  `cat_id` int(3) NOT NULL,
  `pro_name` varchar(50) NOT NULL,
  `price` int(5) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `packing` varchar(100) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`pro_id`, `cat_id`, `pro_name`, `price`, `logo`, `description`, `packing`, `status`) VALUES
(1, 1, 'Tazza Milk', 22, 'milk.jpg', 'tazza homegenized milk.it is very good for the health.', '1ltr, 500 ml, 200 ml', b'0'),
(2, 2, 'Prossesed cheese', 90, 'cheese.jpg', 'it is made from soft cheese,cheedercheese and common salt', '400gm, 5kg', b'0'),
(3, 3, 'Masti Dahi', 50, 'images.jpg', 'curd made from pasturized milk', '200gm, 400 gm,100 gm', b'0'),
(4, 4, 'Milk medium ice cream', 50, 'How-to-make-ice-cream-without-a-machine-square.jpg', 'it is made froom camel milk and goes with several testing', '125 ml', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rate`
--

CREATE TABLE `tbl_rate` (
  `rate_id` int(3) NOT NULL,
  `pro_id` int(3) NOT NULL,
  `user_id` int(3) NOT NULL,
  `ratings_score` int(5) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary`
--

CREATE TABLE `tbl_salary` (
  `salary_id` int(4) NOT NULL,
  `emp_name` varchar(30) NOT NULL,
  `salary` int(3) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_salary`
--

INSERT INTO `tbl_salary` (`salary_id`, `emp_name`, `salary`, `designation`, `status`) VALUES
(1, 'chetan', 20000, 'manager', b'0'),
(2, 'hiral', 5000, 'manager', b'0'),
(3, 'nita', 20, 'hhhfh', b'0'),
(4, 'miijd', 5000, 'fgyhd', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscribe`
--

CREATE TABLE `tbl_subscribe` (
  `sub_id` int(3) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_subscribe`
--

INSERT INTO `tbl_subscribe` (`sub_id`, `email`) VALUES
(1, 'nivaaninfotech@gmail.com'),
(2, 'vandunayak4000@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`email_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `response`
--
ALTER TABLE `response`
  ADD PRIMARY KEY (`response_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbl_complain`
--
ALTER TABLE `tbl_complain`
  ADD PRIMARY KEY (`complain_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `tbl_helpdesk`
--
ALTER TABLE `tbl_helpdesk`
  ADD PRIMARY KEY (`helpdesk_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `tbl_milk`
--
ALTER TABLE `tbl_milk`
  ADD PRIMARY KEY (`milk_id`);

--
-- Indexes for table `tbl_milkdistributor`
--
ALTER TABLE `tbl_milkdistributor`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `tbl_rate`
--
ALTER TABLE `tbl_rate`
  ADD PRIMARY KEY (`rate_id`);

--
-- Indexes for table `tbl_salary`
--
ALTER TABLE `tbl_salary`
  ADD PRIMARY KEY (`salary_id`);

--
-- Indexes for table `tbl_subscribe`
--
ALTER TABLE `tbl_subscribe`
  ADD PRIMARY KEY (`sub_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- AUTO_INCREMENT for table `response`
--
ALTER TABLE `response`
  MODIFY `response_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_complain`
--
ALTER TABLE `tbl_complain`
  MODIFY `complain_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `contact_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feedback_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_helpdesk`
--
ALTER TABLE `tbl_helpdesk`
  MODIFY `helpdesk_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `login_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_milk`
--
ALTER TABLE `tbl_milk`
  MODIFY `milk_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_milkdistributor`
--
ALTER TABLE `tbl_milkdistributor`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `pay_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `pro_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_rate`
--
ALTER TABLE `tbl_rate`
  MODIFY `rate_id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_salary`
--
ALTER TABLE `tbl_salary`
  MODIFY `salary_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_subscribe`
--
ALTER TABLE `tbl_subscribe`
  MODIFY `sub_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
