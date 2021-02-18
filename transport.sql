-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 18, 2020 at 02:23 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id11432668_transport`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `textarea` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`name`, `email`, `phno`, `subject`, `textarea`) VALUES
('ujjawal aggarwal', 'ujjawala397@gmail.com', '9876543211', 'price', 'kjhgf'),
('ujjawal aggarwal', 'ujjawala397@gmail.com', '9876543211', 'price', 'kjhgf'),
('ujjawal aggarwal', 'ujjawala397@gmail.com', '9876543211', 'price', 'kjhgf'),
('asd', 'ujjawala397@gmail.com', '986543212', 'jhh', 'fxysugu'),
('asd', 'ujjawala397@gmail.com', '986543212', 'jhh', 'fxysugu'),
('ujjawal aggarwal', 'ujjawala397@gmail.com', '9876543211', 'juhy', 'hbjgvhj  '),
('hgvhb', 'hujc@gmail.com', '9876543211', 'bkhbbk', 'khgub'),
('zz', 'ujjawala397@gmail.com', '987543221', 'tvtuyjgj', 'guhjk'),
('mmmm', 'yuchi@gmail.com', '0987654321', 'gvrt', 'hjgf'),
('ftytt', 'ujjawala397@gmail.com', '0987654321', 'fvvfvr', 'dfrtgyh'),
('njkhbgj', 'gvugvy@gmail.com', '0987654321', 'tugvuyg', 'dfghjk'),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('nkvyvh', 'uyhgy@gmnail.com', '0987654321', 'gyvtjvug', 'jhbgvfc'),
('ujjawal aggarwal', 'ujjawala397@gmail.com', '9876543211', 'iuytrd', 'dfhgjhmvhj'),
('ujjawal aggarwal', 'ujjawala397@gmail.com', '0987654321', 'jnhbgvf', 'mnjhgfcdr'),
('anil', 'ujjawala397@gmail.com', '9870987890', 'jhg', 'hgfcdf'),
('juju', 'juju@gmail.com', '9876543211', 'juju', 'njhbgvt'),
('Shivam Kumar', 'shivamsarthak24@gmail.com', '7087573337', 'Blast report', 'My truck is blasted'),
('Shivam Kumar', 'shivamsarthak24@gmail.com', '7087573337', 'Blast report', 'My truck is blasted'),
('kinu', 'k@gmail.com', '0987654323', 'jhbgb', 'khjgv'),
('kinu', 'k@gmail.com', '0987654323', 'jhbgb', 'khjgv'),
('kinu', 'k@gmail.com', '0987654323', 'jhbgb', 'khjgv');

-- --------------------------------------------------------

--
-- Table structure for table `paytm`
--

CREATE TABLE `paytm` (
  `ORDERID` varchar(200) NOT NULL,
  `TXNID` varchar(200) NOT NULL,
  `TXNAMOUNT` varchar(200) NOT NULL,
  `RESPMSG` varchar(200) NOT NULL,
  `STATUS` varchar(200) NOT NULL,
  `EMAIL` varchar(200) NOT NULL,
  `DATE` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paytm`
--

INSERT INTO `paytm` (`ORDERID`, `TXNID`, `TXNAMOUNT`, `RESPMSG`, `STATUS`, `EMAIL`, `DATE`) VALUES
('ORDS5dad903fee928', '20191021111212800110168994393710065', '200.00', 'Merchant Transaction Failure', 'TXN_FAILURE', 'ujjawala397@gmail.com', '21/10/2019'),
('ORDS5dad92f9021b4', '20191021111212800110168076893691995', '200.00', 'User has not completed transaction.', 'TXN_FAILURE', 'aman1@gmail.com', '21/10/2019'),
('ORDS5daee20047e09', '', '50.00', 'Payment acceptance on this merchant is not available currently, please ask the merchant to contact our helpdesk team.', 'TXN_FAILURE', 'ujjawala397@gmail.com', '22/10/2019'),
('ORDS5daee32e2724a', '', '1.00', 'Payment acceptance on this merchant is not available currently, please ask the merchant to contact our helpdesk team.', 'TXN_FAILURE', 'ujjawala397@gmail.com', '22/10/2019'),
('ORDS5daef05e20659', '', '1.00', 'Payment acceptance on this merchant is not available currently, please ask the merchant to contact our helpdesk team.', 'TXN_FAILURE', 'ujjawala397@gmail.com', '22/10/2019'),
('ORDS5daef5cd7ac6c', '', '1.00', 'Payment acceptance on this merchant is not available currently, please ask the merchant to contact our helpdesk team.', 'TXN_FAILURE', 'ujjawala397@gmail.com', '22/10/2019'),
('ORDS5daffdf4e639d', '', '1.00', 'Payment acceptance on this merchant is not available currently, please ask the merchant to contact our helpdesk team.', 'TXN_FAILURE', 'ujjawala397@gmail.com', '23/10/2019'),
('ORDS5db15e695a97b', '', '1.00', 'Payment acceptance on this merchant is not available currently, please ask the merchant to contact our helpdesk team.', 'TXN_FAILURE', 'ujjawala397@gmail.com', '24/10/2019'),
('ORDS5db1b11d55f62', '', '1.00', 'Payment acceptance on this merchant is not available currently, please ask the merchant to contact our helpdesk team.', 'TXN_FAILURE', 'ujjawala397@gmail.com', '24/10/2019'),
('ORDS5db1b1b80c45c', '20191024111212800110168009600946716', '1.00', 'Txn Success', 'TXN_SUCCESS', 'ujjawala397@gmail.com', '24/10/2019'),
('ORDS5db28c6d87091', '20191025111212800110168810900967860', '200.00', 'User has not completed transaction.', 'TXN_FAILURE', 'ujjawala397@gmail.com', '25/10/2019'),
('ORDS5db3076fac5c5', '20191025111212800110168386200948221', '900.00', 'User has not completed transaction.', 'TXN_FAILURE', 'aggarwal55aman@gmail.com', '25/10/2019'),
('ORDS5db6b52c8f77c', '20191028111212800110168268100967575', '600.00', 'User has not completed transaction.', 'TXN_FAILURE', 'ujjawala397@gmail.com', '28/10/2019'),
('ORDS5db70ef8d1819', '20191028111212800110168442500955997', '500.00', 'Txn Success', 'TXN_SUCCESS', 'ujjawala397@gmail.com', '28/10/2019'),
('ORDS5db8878ded5d6', '20191030111212800110168849200951110', '400.00', 'Txn Success', 'TXN_SUCCESS', 'ujjawala397@gmail.com', '29/10/2019'),
('ORDS5dbc5e4247af9', '20191101111212800110168879300969169', '200.00', 'User has not completed transaction.', 'TXN_FAILURE', 'ujjawala397@gmail.com', '01/11/2019'),
('ORDS5dbeee1d27e26', '20191103111212800110168338500968088', '200.00', 'User has not completed transaction.', 'TXN_FAILURE', 'ujjawala397@gmail.com', '03/11/2019'),
('ORDS5dc1523088fcd', '20191105111212800110168644400990503', '290.00', 'User has not completed transaction.', 'TXN_FAILURE', 'ujjawala397@gmail.com', '05/11/2019'),
('ORDS5dd14704cd803', '20191117111212800110168175100997167', '1.00', 'Txn Success', 'TXN_SUCCESS', 'ujjawala397@gmail.com', '17/11/2019'),
('ORDS5dd159460a5e9', '20191117111212800110168582401003802', '1.00', 'Txn Success', 'TXN_SUCCESS', 'ujjawala397@gmail.com', '17/11/2019');

-- --------------------------------------------------------

--
-- Table structure for table `trucks`
--

CREATE TABLE `trucks` (
  `aadhar` varchar(12) NOT NULL,
  `truck_no` int(6) NOT NULL,
  `source` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `driver_name` text NOT NULL,
  `price` int(4) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trucks`
--

INSERT INTO `trucks` (`aadhar`, `truck_no`, `source`, `destination`, `driver_name`, `price`, `email`, `phone`, `id`) VALUES
('999988889999', 123456, 'jalandhar', 'saharanpur', 'mohit', 1, 'ujjawala397@gmail.com', '9412131680', 1),
('987654321122', 123478, 'jalandhar', 'saharanpur', 'ramu', 123, 'ujjawala397@gmail.com', '9876543211', 4),
('987654321121', 123459, 'jalandhar', 'saharanpur', 'rami', 12, 'shivamrocky97@gmail.com', '9876543211', 8),
('987654321098', 765489, 'jalandhar', 'saharanpur', 'praveen', 132, 'sai83466@gmail.com', '9876543211', 9),
('980987654321', 657123, 'jalandhar', 'saharanpur', 'anil', 500, 'sapkotaanil43@gmail.com', '9876543211', 11),
('111111111111', 999923, 'saharanpur', 'jalandhar', 'jojojo', 290, 'ujjawala397@gmail.com', '8360659012', 12),
('987654321567', 678956, 'jalandhar', 'phagwara', 'samshad', 200, 'samsadmd130@gmail.com', '9412131680', 13),
('987654321341', 768989, 'jalandhar', 'saharanpur', 'harsh', 300, 'iharshagrahari@gmail.com', '9412345671', 14),
('987654321098', 561271, 'jalandhar', 'saharanpur', 'puneet', 200, 'puneetwasan@gmail.com', '9876543211', 15),
('987654321098', 456789, 'jalandhar', 'saharanpur', 'amir', 200, 'mujtaba.aamir1@gmail.com', '7888898988', 16),
('987654321341', 243517, 'jalandhar', 'saharanpur', 'saurav', 400, 'schaudhary3211@gmail.com', '9877660782', 17),
('987654326765', 987609, 'jalandhar', 'karnal', 'shamshad', 800, 'samsadmd130@gmail.com', '8076582429', 20),
('989098789098', 556676, 'panipat', 'karnal', 'juju', 300, 'ujjawala397@gmail.com', '9412131680', 21),
('987698769876', 989876, 'saharanpur', 'rampur', 'shivani', 500, 'shivani.saini9627@gmail.com', '9627310781', 22),
('198234343212', 288323, 'Saharanpur, Uttar Pradesh, India', 'Jalandhar, Punjab, India', 'juju', 200, 'jujuspices1@gmail.com', '8360659012', 23),
('234516785641', 134512, 'Phagwara, Punjab, India', 'New Delhi, Delhi, India', 'tarun', 50, 'kingtarunyadav@gmail.com', '8076421961', 24),
('817543213413', 234123, 'phagwara', 'jalandhar', 'ashok', 200, 'sapkotaashok43@gmail.com', '9872258123', 25),
('876542432123', 234543, 'Saharanpur, Uttar Pradesh, India', 'Delhi, India', 'dsds', 900, 'aggarwal55aman@gmail.com', '8630248993', 26),
('987654312312', 231678, 'Saharanpur, Uttar Pradesh, India', 'Delhi, India', 'bvvy', 600, 'sagarwal59@yahoo.in', '8130973317', 27),
('980890987890', 980789, 'Saharanpur, Uttar Pradesh, India', 'Delhi, India', 'raghav', 500, 'asinghal279@gmail.com', '8265817818', 28),
('965784563215', 987609, 'Saharanpur, Uttar Pradesh, India', 'Delhi, India', 'rakshit', 400, 'guptarakshit123@gmail.com', '9149331232', 29),
('989898907867', 876987, 'Phagwara, Punjab, India', 'Jalandhar, Punjab, India', 'vishal', 300, 'kumarvishal12364@gmail.com', '9041450483', 30),
('164474758743', 121342, 'jalandhar', 'saharanpur', 'koka', 200, 'jujuspices1@gmail.com', '1898765432', 31),
('343436536212', 134562, 'Jalandhar', 'Saharanpur', 'Koku', 500, 'jujuspices1@gmail.com', '9412131680', 32),
('111111111111', 111111, 'Jalandhar, Punjab, India', 'Saharanpur, Uttar Pradesh, India', 'Raju', 300, 'ujjawala397@gmail.com', '9412131680', 34),
('111111111111', 111111, 'Jalandhar', 'Saharanpur', 'Raju', 300, 'ujjawala397@gmail.com', '9412131680', 35),
('123333223231', 443456, 'Jalandhar, Punjab, India', 'Saharanpur, Uttar Pradesh, India', 'ujjawal', 100, 'ujjawala397@gmail.com', '8360659012', 36),
('123333223231', 443456, 'Phagwara, Punjab, India', 'Saharanpur, Uttar Pradesh, India', 'ujjawal', 100, 'ujjawala397@gmail.com', '8360659012', 37),
('123333223231', 443456, 'Jalandhar, Punjab, India', 'Saharanpur, Uttar Pradesh, India', 'ujjawal', 100, 'ujjawala397@gmail.com', '8360659012', 38),
('123333223231', 443456, 'Saharanpur, Uttar Pradesh, India', 'Phagwara, Punjab, India', 'ujjawal', 100, 'ujjawala397@gmail.com', '8360659012', 39),
('123333223231', 443456, 'Saharanpur, Uttar Pradesh, India', 'Phagwara, Punjab, India', 'ujjawal', 100, 'ujjawala397@gmail.com', '8360659012', 40),
('222222222222', 332322, 'Saharanpur, Uttar Pradesh, India', 'Phagwara, Punjab, India', 'ujjawal', 1, 'ujjawala397@gmail.com', '8360659012', 41),
('333322325652', 666534, 'Jalandhar, Punjab, India', 'Saharanpur, Uttar Pradesh, India', 'Rambo', 300, 'ujjawala397@gmail.com', '8360659012', 42),
('887878723431', 773428, 'Jalandhar, Punjab, India', 'Saharanpur, Uttar Pradesh, India', 'rambo', 100, 'ujjawala397@gmail.com', '8360659012', 43),
('887878723431', 773428, 'Jalandhar, Punjab, India', 'Saharanpur, Uttar Pradesh, India', 'rambo', 100, 'ujjawala397@gmail.com', '8360659012', 44),
('222299998878', 231854, 'jalandhar', 'Phagwara, Punjab, India', 'rambo', 100, 'ujjawala397@gmail.com', '8360659012', 45),
('912314367211', 112311, 'Jalandhar, Punjab, India', 'Phagwara, Punjab, India', 'rambo', 100, 'ujjawala397@gmail.com', '8360659012', 46),
('878746765360', 898961, 'Jalandhar, Punjab, India', 'Saharanpur, Uttar Pradesh, India', 'ujjjjjj', 1, 'ujjawala397@gmail.com', '8360659012', 47);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Name` char(30) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Phone` varchar(10) DEFAULT NULL,
  `Password` varchar(30) DEFAULT NULL,
  `ConfirmPassword` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Name`, `Email`, `Phone`, `Password`, `ConfirmPassword`) VALUES
('ujjawal aggarwal', 'ujjawala397@gmail.com', '9412131680', '12345', '12345'),
('aman', 'aman@gmail.com', '9876543210', '12345', '12345'),
('shivam', 'shivam@gmail.com', '9412131680', '12345', '12345'),
('praveen', 'praveen@gmail.com', '9760011680', '12345', '12345'),
('anil', 'anil@gmail.com', '9876509876', '12345', '12345'),
('bisso boss', 'jugjygy@mjhjfre.com', '9876543211', '100100', '100100'),
('bisso', 't@t.com', '9876545671', '123456', '123456'),
('shamshad', 'shamshad@gmail.com', '9412131680', '12345', '12345'),
('rahul', 'rahul@gmail.com', '9412131680', '12345', '12345'),
('rohit', 'rohit@gmail.com', '9876543210', '12345', '12345'),
('amir', 'amir@gmail.com', '9876543211', '12345', '12345'),
('saurav', 'saurav@gmail.com', '9876543212', '12345', '12345'),
('shivani', 'shivani.saini9627@gmail.com', '9627310781', '12345', '12345'),
('aman', 'aman1@gmail.com', '8360659012', '12345', '12345'),
('aman aggarwal', 'aggarwal55aman@gmail.com', '8630248993', '10aman10', '10aman10'),
('vishal', 'kumarvishal12364@gmail.com', '9041450483', '12345', '12345'),
('anil sapkota', 'sapkotaanil43@gmail.com', '6239030525', 'sapkota26', 'sapkota26'),
('qwerty', 'qwerty@gmail.com', '9090909090', '12345', '12345'),
('Tiger', 'arpit4633@gmail.com', '9837346620', '123', '123'),
('Something', 'trojanhorses77@gmail.com', '8076582429', 'asdfghjkl', 'asdfghjkl'),
('Shivam Kumar', 'shivamsarthak24@gmail.com', '7087573337', 'shivam', 'shivam'),
('Praveen', 'sai83466@gmail.com', '9056148854', 'Pra123', 'Pra123'),
('Puneet Wasan', 'puneetwasan@gmail.com', '7986367042', 'Abcde@123', 'Abcde@123'),
('jayprakash', 'jpsahni01997@gmail.com', '6280989608', 'pooja@123', 'pooja@123'),
('Shikha Sharma', 'sharmashikha0698@gmail.com', '9415917437', '123456', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paytm`
--
ALTER TABLE `paytm`
  ADD UNIQUE KEY `ORDERID` (`ORDERID`);

--
-- Indexes for table `trucks`
--
ALTER TABLE `trucks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trucks`
--
ALTER TABLE `trucks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
