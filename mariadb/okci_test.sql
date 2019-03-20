-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 13, 2019 at 09:38 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `okci_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `password`) VALUES
(1, 'angela', 'angela@gmail.com', 'angela');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `m_extra_id` varchar(30) NOT NULL,
  `menu_image` varchar(255) NOT NULL,
  `price` int(20) NOT NULL,
  `qty` int(20) NOT NULL,
  `ordertype` varchar(30) NOT NULL,
  `address` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL,
  `phone` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL,
  `kitchen_id` int(11) NOT NULL,
  `kitchen_name` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `message_id` int(11) NOT NULL,
  `message` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `read_status` varchar(20) NOT NULL,
  `send_date` datetime NOT NULL,
  `sender_id` int(11) NOT NULL,
  `kitchen_id` int(11) NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`message_id`, `message`, `user_id`, `owner_id`, `read_status`, `send_date`, `sender_id`, `kitchen_id`) VALUES
(1, 'hello dfasdfas asd fasd fas df asd fa sdf asd f asdf asd f asd fas df asd fa sdf asd fas df asd', 2, 1, 'read', '2017-06-16 00:00:00', 2, 0),
(2, 'qq', 2, 2, 'unread', '2017-06-16 13:27:04', 2, 0),
(3, 'jjj', 2, 2, 'unread', '2017-06-16 13:28:19', 2, 0),
(4, 'aaaa', 2, 0, 'unread', '2017-06-16 13:36:58', 2, 0),
(5, 'sss', 2, 0, 'unread', '2017-06-16 13:38:41', 2, 0),
(6, 'aaaas', 2, 1, 'read', '2017-06-16 13:40:04', 1, 5),
(7, 'sasdsd', 2, 1, 'read', '2017-06-16 13:40:11', 2, 5),
(8, 'aaa', 2, 1, 'read', '2017-06-16 14:07:29', 2, 5),
(9, 'aaa', 2, 1, 'read', '2017-06-16 14:10:47', 2, 5),
(10, 'asasdas', 2, 1, 'read', '2017-06-16 14:11:15', 2, 5),
(11, 'sssss', 2, 1, 'read', '2017-06-16 14:18:39', 2, 5),
(12, 'sasas', 2, 1, 'read', '2017-06-19 13:56:27', 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `name` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE IF NOT EXISTS `email` (
  `id` int(11) NOT NULL,
  `accept` varchar(355) NOT NULL,
  `take` varchar(355) NOT NULL,
  `bake` varchar(55) NOT NULL,
  `complete` varchar(355) NOT NULL,
  `reject` varchar(355) NOT NULL,
  `signup` varchar(355) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id`, `accept`, `take`, `bake`, `complete`, `reject`, `signup`) VALUES
(1, 'Your order is accepted It will be ready in minutes', 'Your Food is in Take away Mode', 'Your Order is in the Baking Process', 'Your Order is completed', 'Your Order is Rejecteds', 'You are signed Up Succesfully');

-- --------------------------------------------------------

--
-- Table structure for table `food_category`
--

CREATE TABLE IF NOT EXISTS `food_category` (
  `food_cat_id` int(11) NOT NULL,
  `kitchen_id` int(11) NOT NULL,
  `food_cat_name` varchar(255) NOT NULL,
  `food_cat_image` varchar(150) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`food_cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_category`
--

INSERT INTO `food_category` (`food_cat_id`, `kitchen_id`, `food_cat_name`, `food_cat_image`, `description`) VALUES
(3, 5, 'Lump Crab Cake', '3.jpg', ' Maryland-style, mustard sauce '),
(5, 10, 'TableFood', 'cuisine1.jpg', ' Visit us for most delicious table food '),
(6, 8, 'Chicken Corn Soup', '2.jpg', ' Sausage, pepperoni, mushrooms, olives, peppers, and onions are great on a pizza! You can add or subtract what you want to create your favorite Supreme Pizza.\n '),
(8, 7, 'Chicken Corn Soup (s)', '2.jpg', ' Looking for a healthy option? served with your choice of vegetables.'),
(9, 7, 'Hot and Sour Soup (s)', 'cuisine4.jpg', 'Looking for a healthy option? served with your choice of vegetables.'),
(10, 8, 'Spinach-Artichoke Dip', 'cuisine5.jpg', 'A blend of spinach, artichokes and five cheeses served warm with our NEW house-made pasta chips\n'),
(11, 8, 'Chicken Corn Soup (s)', '2.jpg', 'Crunchy Tortilla chips served with your choice of salsa! Get it the way you like with the "make your own" tac\r\n'),
(12, 5, 'Grilled Chicken & Havarti Cheese', 'cuisine1.jpg', 'Crunchy Tortilla chips served with your choice of salsa! Get it the way you like with the "make your own" tac\n'),
(13, 5, 'Wood flourless Chocolate Waffle', 'cuisine1.jpg', ' with vanilla ice cream & toasted almonds '),
(14, 5, 'Chicken Dhum Seekh', 'cuisine3.jpg	', 'Crunchy Tortilla chips served with your choice of salsa! Get it the way you like with the "make your own" taco.\n'),
(15, 5, 'Chicken Irani Boti', 'cuisine3.jpg', 'Crunchy Tortilla chips served with your choice of salsa! Get it the way you like with the "make your own" taco.\r\n'),
(16, 6, 'Fish Tikka', 'cuisine4.jpg', 'Crunchy Tortilla chips served with your choice of salsa! Get it the way you like with the "make your own" taco.\n'),
(17, 6, 'Chicken Tikka Breast', 'cuisine5.jpg', 'Crunchy Tortilla chips served with your choice of salsa! Get it the way you like with the "make your own" taco.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `food_subcat`
--

CREATE TABLE IF NOT EXISTS `food_subcat` (
  `f_subcat_id` int(11) NOT NULL,
  `food_cat_id` int(11) NOT NULL,
  `f_subcat_name` varchar(255) NOT NULL,
  PRIMARY KEY (`f_subcat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_subcat`
--

INSERT INTO `food_subcat` (`f_subcat_id`, `food_cat_id`, `f_subcat_name`) VALUES
(1, 1, 'Large Pizza'),
(2, 3, 'Full Alfredo'),
(3, 3, 'Half Alfredo'),
(4, 12, 'Full'),
(5, 12, 'Extra Large'),
(6, 0, 'Small'),
(7, 6, 'Full'),
(8, 0, 'Extra Large'),
(9, 11, 'Full'),
(10, 0, 'Extra large'),
(11, 0, 'Small'),
(12, 8, 'Full'),
(13, 0, 'Extra large'),
(14, 0, 'Small'),
(15, 14, 'Full'),
(16, 0, 'Extra large'),
(17, 0, 'Small'),
(18, 14, 'Full'),
(19, 15, 'Full'),
(20, 0, 'Extra Small'),
(21, 0, 'Small'),
(22, 17, 'Full'),
(23, 0, 'Extra'),
(24, 10, 'Full'),
(25, 0, 'Small'),
(26, 13, 'Full'),
(27, 5, 'Full'),
(28, 7, 'Full');

-- --------------------------------------------------------

--
-- Table structure for table `kitchen`
--

CREATE TABLE IF NOT EXISTS `kitchen` (
  `kitchen_id` int(11) NOT NULL,
  `kitchen_name` varchar(255) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `kitchen_address` varchar(255) NOT NULL,
  `kitchen_longi` varchar(255) NOT NULL,
  `kitchen_lati` varchar(255) NOT NULL,
  `kitchen_image` varchar(255) NOT NULL,
  `open_time` time NOT NULL,
  `close_time` time NOT NULL,
  `cover` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kitchen`
--

INSERT INTO `kitchen` (`kitchen_id`, `kitchen_name`, `owner_id`, `kitchen_address`, `kitchen_longi`, `kitchen_lati`, `kitchen_image`, `open_time`, `close_time`, `cover`) VALUES
(5, 'Topolino', 1, 'Lahore', '123', '123', 'Knowledge Curve.png', '10:30:00', '17:00:00', 'service-banner.jpg'),
(6, 'Bundu khan', 1, 'Packges Mall', '123', '123', 'tech banner.png', '00:00:00', '00:00:00', 'banner.jpg'),
(7, 'Pizza Hut', 1, 'Johar Town ,Lahore', '123', '123', 'restaurent-1.jpg', '00:00:00', '00:00:00', 'banner.jpg'),
(8, 'Subway', 1, 'Lahore', '123123', '23123', 'restaurent-2.jpg', '00:00:00', '00:00:00', 'banner.jpg'),
(9, 'Barista', 1, 'Lahore', '213123', '123123', 'restaurent-3.jpg', '00:00:00', '00:00:00', 'banner.jpg'),
(10, 'Papa Jhons', 1, 'Eastern Shore', '123', '123', 'restaurent-4.jpg', '00:00:00', '00:00:00', 'service-banner.jpg'),
(12, 'Great American Buffet', 1, 'Lahore', '123', '', '1499845571Splash_tours_mobile-28.jpg', '09:45:00', '23:45:00', 'service-banner.jpg'),
(13, 'Olive Garden', 0, 'Lahore', '123', '123', '1499845686techknow-curve.png', '10:00:00', '23:00:00', 'service-banner.jpg'),
(5, 'Topolino', 1, 'lahore', '123', '123', 'Knowledge Curve.png', '10:30:00', '17:00:00', 'service-banner.jpg'),
(6, 'Bundu khan', 1, 'Packages Mall', '123', '123', 'tech banner.png', '00:00:00', '00:00:00', 'banner.jpg'),
(7, 'Pizza Hut', 1, 'Johar Town ,Lahore', '1212123', '121212', 'restaurent-1.jpg', '00:00:00', '00:00:00', 'banner.jpg'),
(8, 'Subway', 1, 'lahore', '123123', '23123', 'restaurent-2.jpg', '00:00:00', '00:00:00', 'banner.jpg'),
(9, 'Barista', 1, 'lahore', '213123', '123123', 'restaurent-3.jpg', '00:00:00', '00:00:00', 'banner.jpg'),
(10, 'Papa Jhons', 1, 'Eastern Shore', '123123', '12312', 'restaurent-4.jpg', '00:00:00', '00:00:00', 'service-banner.jpg'),
(12, 'Great American Buffet', 1, 'Lahore', '121212', '', '1499845571Splash_tours_mobile-28.jpg', '09:45:00', '23:45:00', 'service-banner.jpg'),
(13, 'Olive Garden', 0, 'Lahore', 'aaaaa', '', '1499845686techknow-curve.png', '10:00:00', '23:00:00', 'service-banner.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `kitchen_id` int(11) NOT NULL,
  `menu_description` text NOT NULL,
  `menu_price` int(11) NOT NULL,
  `food_cat_id` int(11) NOT NULL,
  `f_subcat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `kitchen_id`, `menu_description`, `menu_price`, `food_cat_id`, `f_subcat_id`) VALUES
(1, 'Chicken Soup A La Mode', 5, 'The best chicken in town', 150, 4, 0),
(2, 'Bakes scotch eggs', 6, 'Hard-boiled egg wrapped in a spicy sausage casing', 150, 4, 0),
(3, 'Pizza', 7, 'The best pizza in town', 700, 1, 0),
(4, 'Sandwich', 8, 'Grilled beef kebabs coated in ground chili powder', 350, 2, 0),
(5, 'Grilled Burger', 9, 'The Best Burger in town', 400, 2, 0),
(7, 'Chicken', 5, 'The best chicken in town', 340, 3, 0),
(8, 'Soup', 5, 'The best soup in town', 200, 3, 0),
(9, 'Desi Karahi', 7, 'The best karachi in town', 122, 5, 2),
(10, 'Chicken Karahi', 5, 'The best karachi in town', 56, 3, 2),
(11, 'Mutton Karahi', 5, 'The best karachi in town', 34, 3, 3),
(14, 'Allo Wali Karahi', 5, 'The best karachi in town', 11, 3, 2),
(15, 'White Korma Karahi', 5, 'The best karachi in town', 11, 3, 2),
(16, 'White Korma', 5, 'The best korma in town', 3333, 5, 2),
(17, 'Cool', 12, 'The best drink in town', 333, 5, 3),
(18, 'Kala Meet', 7, 'The best meet in town', 353, 5, 2),
(20, 'White Meet', 5, 'The best meet in town', 22444, 5, 1),
(21, 'chicken malai boti', 12, 'The best malai boti in town', 750, 3, 2),
(22, 'KEBAB (CHINCHINGA)', 6, 'Meat marinated in a spicy succulent peanut butter seasoning smoked and grilled to your taste. Served with your choice of chicken, goat or beef.\r\n', 200, 3, 2),
(23, 'Chicken and Cheese Kastoori Kabab', 6, 'Chicken and Cheese Kastoori Kabab', 345, 3, 2),
(24, 'Chicken Zafrani Malai Boti', 6, 'Chicken Zafrani Malai Boti', 345, 12, 5),
(25, 'Chicken Kabab', 6, 'Chicken Kabab', 354, 15, 19),
(26, 'Chicken Reshmi Kabab', 8, 'Chicken Reshmi Kabab', 456, 12, 4),
(1, 'Chicken Soup a la mode', 5, 'The best chicken in town', 150, 4, 0),
(2, 'bakes scotch eggs', 6, 'Hard-boiled egg wrapped in a spicy sausage casing', 150, 4, 0),
(3, 'pizza', 7, 'The best pizza in town', 700, 1, 0),
(4, 'Sandwich', 8, 'Grilled beef kebabs coated in ground chili powder', 350, 2, 0),
(5, 'Grilled Burger', 9, 'The best burger in town', 400, 2, 0),
(7, 'Chicken', 5, 'The best chicken in town', 340, 3, 0),
(8, 'Soup', 5, 'The best soup in town', 200, 3, 0),
(9, 'Desi Karahi', 7, 'The best karachi in town', 122, 5, 2),
(10, 'Chicken Karahi', 5, 'yummy to my tummy', 56, 3, 2),
(11, 'Mutton Karahi', 5, 'yummy to my tummy', 34, 3, 3),
(14, 'Allo Wali Karahi', 5, 'yummy to my tummy', 11, 3, 2),
(15, 'White Korma Karahi', 5, 'yummy to my tummy', 11, 3, 2),
(16, 'White Korma', 5, 'yummy to my tummy', 3333, 5, 2),
(17, 'Cool', 12, 'yummy to my tummy', 333, 5, 3),
(18, 'Kala Meet', 7, 'yummy to my tummy', 353, 5, 2),
(20, 'White Meet', 5, 'yummy to my tummy', 22444, 5, 1),
(21, 'chicken malai boti', 12, 'tasty dish', 750, 3, 2),
(22, 'KEBAB (CHINCHINGA)', 6, 'Meat marinated in a spicy succulent peanut butter seasoning smoked and grilled to your taste. Served with your choice of chicken, goat or beef.\r\n', 200, 3, 2),
(23, 'Chicken and Cheese Kastoori Kabab', 6, 'Chicken and Cheese Kastoori Kabab', 345, 3, 2),
(24, 'Chicken Zafrani Malai Boti', 6, 'Chicken Zafrani Malai Boti', 345, 12, 5),
(25, 'Chicken Kabab', 6, 'Chicken Kabab', 354, 15, 19),
(26, 'Chicken Reshmi Kabab', 8, 'Chicken Reshmi Kabab', 456, 12, 4);

-- --------------------------------------------------------

--
-- Table structure for table `menu_extras`
--

CREATE TABLE IF NOT EXISTS `menu_extras` (
  `m_extra_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `m_extra_name` varchar(255) NOT NULL,
  `m_extra_price` int(11) NOT NULL,
  `kitchen_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_extras`
--

INSERT INTO `menu_extras` (`m_extra_id`, `menu_id`, `m_extra_name`, `m_extra_price`, `kitchen_id`) VALUES
(1, 9, 'Cheese topping', 70, 0),
(2, 9, 'Extra olives', 80, 0),
(3, 7, 'Banana peppers...', 50, 5),
(4, 7, 'Peperoni topping', 60, 5),
(5, 9, 'Salad ', 40, 5),
(6, 0, 'Extra meat', 0, 5),
(7, 3, 'Roll', 134, 7),
(1, 9, 'Cheese topping', 70, 0),
(2, 9, 'Extra olives', 80, 0),
(3, 7, 'banana peppers...', 50, 5),
(4, 7, 'peperoni topping', 60, 5),
(5, 9, 'Salad ', 40, 5),
(6, 0, 'extra meat', 0, 5),
(7, 3, 'Roll', 134, 7),
(1, 9, 'Cheese topping', 70, 0),
(2, 9, 'Extra olives', 80, 0),
(3, 7, 'banana peppers...', 50, 5),
(4, 7, 'peperoni topping', 60, 5),
(5, 9, 'Salad ', 40, 5),
(6, 0, 'extra meat', 0, 5),
(7, 3, 'Roll', 134, 7);

-- --------------------------------------------------------

--
-- Table structure for table `menu_gallery`
--

CREATE TABLE IF NOT EXISTS `menu_gallery` (
  `menuimage_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `menu_gallery` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_gallery`
--

INSERT INTO `menu_gallery` (`menuimage_id`, `menu_id`, `menu_gallery`) VALUES
(1, 1, 't11.jpg'),
(2, 1, 't11.jpg'),
(3, 2, 't22.jpg'),
(4, 2, 't22.jpg'),
(5, 3, 't11.jpg'),
(6, 4, 'restaurent-2.jpg'),
(7, 5, 'restaurent-2.jpg'),
(9, 7, 'cuisine5.jpg'),
(10, 8, 'cuisine6.jpg'),
(1, 1, 't11.jpg'),
(2, 1, 't11.jpg'),
(3, 2, 't22.jpg'),
(4, 2, 't22.jpg'),
(5, 3, 't11.jpg'),
(6, 4, 'restaurent-2.jpg'),
(7, 5, 'restaurent-2.jpg'),
(9, 7, 'cuisine5.jpg'),
(10, 8, 'cuisine6.jpg'),
(1, 1, 't11.jpg'),
(2, 1, 't11.jpg'),
(3, 2, 't22.jpg'),
(4, 2, 't22.jpg'),
(5, 3, 't11.jpg'),
(6, 4, 'restaurent-2.jpg'),
(7, 5, 'restaurent-2.jpg'),
(9, 7, 'cuisine5.jpg'),
(10, 8, 'cuisine6.jpg'),
(1, 1, 't11.jpg'),
(2, 1, 't11.jpg'),
(3, 2, 't22.jpg'),
(4, 2, 't22.jpg'),
(5, 3, 't11.jpg'),
(6, 4, 'restaurent-2.jpg'),
(7, 5, 'restaurent-2.jpg'),
(9, 7, 'cuisine5.jpg'),
(10, 8, 'cuisine6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `n_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`n_id`, `email`, `datetime`) VALUES
(2, 'jane@gmail.com', '2017-07-18 08:57:28'),
(3, 'amad@gmail.com', '2017-07-18 08:58:04'),
(4, 'oladopo@gmail.com', '2017-07-18 09:00:06'),
(5, 'tinamarie@gmail.com', '2017-07-29 02:31:12');

-- --------------------------------------------------------

--
-- Table structure for table `orderfood`
--

CREATE TABLE IF NOT EXISTS `orderfood` (
  `order_id` int(11) NOT NULL,
  `menu_id` varchar(255) NOT NULL,
  `m_extra_id` varchar(255) DEFAULT NULL,
  `qty` varchar(255) NOT NULL,
  `price` int(25) NOT NULL,
  `payment` varchar(30) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL,
  `kitchen_id` int(11) NOT NULL,
  `kitchen_name` varchar(255) NOT NULL,
  `datetime` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `pick` varchar(255) DEFAULT NULL,
  `p_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderfood`
--

INSERT INTO `orderfood` (`order_id`, `menu_id`, `m_extra_id`, `qty`, `price`, `payment`, `address`, `phone`, `description`, `user_id`, `kitchen_id`, `kitchen_name`, `datetime`, `status`, `email`, `reason`, `pick`, `p_status`) VALUES
(20, '', NULL, '', 556, 'cash', ' jeff osborne', 0, 'aaaaaaaa', 2, 5, '', '2011-11-11 00:00:00', 'completed', '', '', '', ''),
(22, '', NULL, '', 984, 'cash', 'q', 0, 'q', 8, 5, '', '0000-00-00 00:00:00', 'reject', '', 'awinye', '', ''),
(23, '', NULL, '', 928, 'cash', 'qqqq', 0, 'qqqqqq', 2, 5, 'Topolino''s', '2011-11-01 00:00:00', 'completed', '', '', '', ''),
(24, '', NULL, '', 302192, 'cash', 'qqq', 0, 'qqq', 2, 5, 'Topolino''s', '0000-00-00 00:00:00', 'reject', '', 'asd', '', ''),
(25, '', NULL, '', 544, 'cash', '11', 0, '111', 2, 5, 'Topolino''s', '0000-00-00 00:00:00', 'completed', '', '', '', ''),
(26, '', NULL, '', 816, 'cash', 'qqqqq', 0, 'aaaaa', 2, 5, 'Topolino''s', '2017-07-19 9:30 PM', 'takeaway', '', '', '', ''),
(27, '', NULL, '', 202, 'cash', '34324dfdsfdsfd', 0, '', 7, 5, 'Topolino''s', '2017-07-10 1:00 PM', 'takeaway', '', '', '', ''),
(28, '', NULL, '', 632, 'cash', 'same', 0, 'yes.', 7, 5, 'Topolino''s', '2017-07-10 3:30 PM', 'accept', '', '', '', ''),
(29, '', NULL, '', 3085, 'cash', 'johar town', 0, 'Plea report Quickly', 0, 5, '', '2017-07-18 2:15 PM', 'new', '', '', '', ''),
(30, '', NULL, '', 3085, 'cash', 'johar town', 0, 'what is the staus on this order', 9, 5, '', '2017-07-18 4:00 PM', 'new', '', '', '', ''),
(31, '', NULL, '', 15147, 'cash', 'johar town', 0, 'as as asd as d', 10, 5, '', '2017-07-18 4:00 PM', 'new', '', '', '', ''),
(32, '', NULL, '', 9674, 'cash', 'johar town', 0, 'sd sd fsd fs', 11, 5, '', '2017-07-18 4:30 PM', 'new', '', '', '', ''),
(33, '', NULL, '', 6550, 'paypal', 'Lahore', 0, 'asdasdasdadsa', 12, 5, '', '2017-08-01 1:30 PM', 'new', '', '', 'now', ''),
(34, '', NULL, '', 168, 'stripe', 'asas', 0, 'asdadsads', 8, 5, '', '2017-08-03 2:45 PM', 'accept', '', '', 'later', 'paid'),
(35, '', NULL, '', 768, 'stripe', 'asasasasasa', 0, 'aavas fascaas ', 8, 5, '', '2017-08-03 2:00 PM', 'accept', '', '', 'later', 'paid'),
(36, '', NULL, '', 1344, 'stripe', 'asdasdad', 0, 'as dasda sdads', 8, 5, '', '2017-08-03 2:00 PM', 'accept', '', '', 'later', 'paid'),
(37, '', NULL, '', 960, 'paypal', 'asdasd', 0, 'asdasdasd', 8, 5, '', '2017-08-03 1:15 PM', 'new', '', '', 'later', ''),
(38, '', NULL, '', 960, 'paypal', 'asa as a s', 0, 'asd as d asd', 8, 5, '', '2017-08-03 3:15 PM', 'new', '', '', 'later', ''),
(39, '', NULL, '', 768, 'paypal', 'asasa', 0, 'asdasdasdads', 8, 5, '', '2017-08-03 12:15 PM', 'new', '', '', 'later', ''),
(40, '', NULL, '', 606, 'stripe', 'asdasd', 0, 'sdasd', 8, 5, '', '2017-08-03 2:30 PM', 'reject', '', 'we haven''t team! its holiday!', 'later', 'paid'),
(41, '', NULL, '', 768, 'stripe', 'asdasda', 0, 'asdasdasd', 8, 5, '', '2017-08-03 4:00 PM', 'accept', '', '', 'later', 'paid'),
(42, '', NULL, '', 816, 'stripe', 'asdasd', 0, 'asd ad ad as', 8, 5, '', '2017-08-03 3:15 PM', 'takeaway', '', '', 'later', 'paid'),
(43, '', NULL, '', 568, 'cash', '34324dfdsfdsfd', 0, 'i''ll collect order today but later to your off time. ', 7, 5, '', '2017-08-08 12:00 PM', 'new', '', '', 'later', 'paid'),
(44, '', NULL, '', 7594, 'cash', 'asdasdasd', 0, 'asdasdasdasd', 13, 5, '', '2017-08-15 11:00 AM', 'new', '', '', 'later', 'paid'),
(45, '', NULL, '', 632, 'cash', 'same', 0, 'yes.', 7, 5, '', '', 'new', '', '', '', ''),
(46, '', NULL, '', 5566, 'cash', 'as das das dasd ', 0, 'a sda da dad  d', 2, 5, '', '2017-08-16 12:00 PM', 'accept', '', '', 'now', 'paid'),
(47, '', NULL, '', 726, 'cash', '', 0, 's dfsfd s f ', 2, 5, '', '2017-08-16 12:00 PM', 'accept', '', '', 'now', 'paid'),
(48, '', NULL, '', 808, 'paypal', '', 0, 'jghjghjghj', 2, 5, '', '2017-08-16 1:00 PM', 'new', '', '', 'now', ''),
(49, '', NULL, '', 8448, 'paypal', '', 0, 'cgcghch', 2, 5, '', '2017-08-16 5:00 PM', 'new', '', '', 'now', ''),
(50, '', NULL, '', 1212, 'stripe', '', 0, 'dfasdasdasd', 2, 5, '', '2017-08-16 12:00 PM', 'new', '', '', 'now', 'paid'),
(51, '', NULL, '', 632, 'cash', 'same', 0, 'yes.', 7, 5, '', '', 'new', '', '', '', ''),
(52, '', NULL, '', 632, 'cash', 'same', 0, 'yes.', 7, 5, '', '', 'new', '', '', '', ''),
(53, '', NULL, '', 632, 'cash', 'same', 0, 'yes.', 7, 5, '', '', 'new', '', '', '', ''),
(54, '', NULL, '', 576, 'cash', 'asdasd  dasd', 2147483647, 'as dasdas dasdasdasd', 16, 5, '', '2017-08-28 1:45 PM', 'new', '', '', 'now', 'paid'),
(55, '', NULL, '', 6666, 'cash', 'asdasdasd adssad', 2147483647, 'asd as dasdasdas', 17, 5, '', '2017-08-28 1:45 PM', 'new', '', '', 'now', 'paid'),
(56, '', NULL, '', 224, 'cash', 'expo centre road,johar town lahore', 2147483647, 'please deliver karahi as fast as possible', 18, 5, '', '2017-08-28 2:30 PM', 'new', '', '', 'now', 'paid'),
(57, '', NULL, '', 33, 'paypal', 'jonesboro town pa', 2147483647, 'please deliver quickly', 19, 5, '', '2017-08-28 2:45 PM', 'new', '', '', 'later', ''),
(58, '', NULL, '', 22, 'cash', 'expo centre road,', 2147483647, 'aaaaaaaaaaa', 18, 5, '', '2017-08-28 2:45 PM', 'new', '', '', 'now', 'paid'),
(59, '', NULL, '', 33, 'cash', 'gojra', 2147483647, 'qqqq', 21, 5, '', '2017-08-28 3:00 PM', 'new', '', '', 'now', 'paid'),
(60, '', NULL, '', 659, 'cash', 'Hoher town', 2147483647, 'not ant yet.', 7, 5, '', '2017-10-03 12:00 PM', 'new', '', '', 'later', 'paid'),
(20, '', NULL, '', 556, 'cash', ' jeff osborne', 0, 'aaaaaaaa', 2, 5, '', '2011-11-11 00:00:00', 'completed', '', '', '', ''),
(22, '', NULL, '', 984, 'cash', 'q', 0, 'q', 8, 5, '', '0000-00-00 00:00:00', 'reject', '', 'awinye', '', ''),
(23, '', NULL, '', 928, 'cash', 'qqqq', 0, 'qqqqqq', 2, 5, 'Topolino''s', '2011-11-01 00:00:00', 'completed', '', '', '', ''),
(24, '', NULL, '', 302192, 'cash', 'qqq', 0, 'qqq', 2, 5, 'Topolino''s', '0000-00-00 00:00:00', 'reject', '', 'asd', '', ''),
(25, '', NULL, '', 544, 'cash', '11', 0, '111', 2, 5, 'Topolino''s', '0000-00-00 00:00:00', 'completed', '', '', '', ''),
(26, '', NULL, '', 816, 'cash', 'qqqqq', 0, 'aaaaa', 2, 5, 'Topolino''s', '2017-07-19 9:30 PM', 'takeaway', '', '', '', ''),
(27, '', NULL, '', 202, 'cash', '34324dfdsfdsfd', 0, '', 7, 5, 'Topolino''s', '2017-07-10 1:00 PM', 'takeaway', '', '', '', ''),
(28, '', NULL, '', 632, 'cash', 'same', 0, 'yes.', 7, 5, 'Topolino''s', '2017-07-10 3:30 PM', 'accept', '', '', '', ''),
(29, '', NULL, '', 3085, 'cash', 'johar town', 0, 'Plea report Quickly', 0, 5, '', '2017-07-18 2:15 PM', 'new', '', '', '', ''),
(30, '', NULL, '', 3085, 'cash', 'johar town', 0, 'what is the staus on this order', 9, 5, '', '2017-07-18 4:00 PM', 'new', '', '', '', ''),
(31, '', NULL, '', 15147, 'cash', 'johar town', 0, 'as as asd as d', 10, 5, '', '2017-07-18 4:00 PM', 'new', '', '', '', ''),
(32, '', NULL, '', 9674, 'cash', 'johar town', 0, 'sd sd fsd fs', 11, 5, '', '2017-07-18 4:30 PM', 'new', '', '', '', ''),
(33, '', NULL, '', 6550, 'paypal', 'Lahore', 0, 'asdasdasdadsa', 12, 5, '', '2017-08-01 1:30 PM', 'new', '', '', 'now', ''),
(34, '', NULL, '', 168, 'stripe', 'asas', 0, 'asdadsads', 8, 5, '', '2017-08-03 2:45 PM', 'accept', '', '', 'later', 'paid'),
(35, '', NULL, '', 768, 'stripe', 'asasasasasa', 0, 'aavas fascaas ', 8, 5, '', '2017-08-03 2:00 PM', 'accept', '', '', 'later', 'paid'),
(36, '', NULL, '', 1344, 'stripe', 'asdasdad', 0, 'as dasda sdads', 8, 5, '', '2017-08-03 2:00 PM', 'accept', '', '', 'later', 'paid'),
(37, '', NULL, '', 960, 'paypal', 'asdasd', 0, 'asdasdasd', 8, 5, '', '2017-08-03 1:15 PM', 'new', '', '', 'later', ''),
(38, '', NULL, '', 960, 'paypal', 'asa as a s', 0, 'asd as d asd', 8, 5, '', '2017-08-03 3:15 PM', 'new', '', '', 'later', ''),
(39, '', NULL, '', 768, 'paypal', 'asasa', 0, 'asdasdasdads', 8, 5, '', '2017-08-03 12:15 PM', 'new', '', '', 'later', ''),
(40, '', NULL, '', 606, 'stripe', 'asdasd', 0, 'sdasd', 8, 5, '', '2017-08-03 2:30 PM', 'reject', '', 'we haven''t team! its holiday!', 'later', 'paid'),
(41, '', NULL, '', 768, 'stripe', 'asdasda', 0, 'asdasdasd', 8, 5, '', '2017-08-03 4:00 PM', 'accept', '', '', 'later', 'paid'),
(42, '', NULL, '', 816, 'stripe', 'asdasd', 0, 'asd ad ad as', 8, 5, '', '2017-08-03 3:15 PM', 'takeaway', '', '', 'later', 'paid'),
(43, '', NULL, '', 568, 'cash', '34324dfdsfdsfd', 0, 'i''ll collect order today but later to your off time. ', 7, 5, '', '2017-08-08 12:00 PM', 'new', '', '', 'later', 'paid'),
(44, '', NULL, '', 7594, 'cash', 'asdasdasd', 0, 'asdasdasdasd', 13, 5, '', '2017-08-15 11:00 AM', 'new', '', '', 'later', 'paid'),
(45, '', NULL, '', 632, 'cash', 'same', 0, 'yes.', 7, 5, '', '', 'new', '', '', '', ''),
(46, '', NULL, '', 5566, 'cash', 'as das das dasd ', 0, 'a sda da dad  d', 2, 5, '', '2017-08-16 12:00 PM', 'accept', '', '', 'now', 'paid'),
(47, '', NULL, '', 726, 'cash', '', 0, 's dfsfd s f ', 2, 5, '', '2017-08-16 12:00 PM', 'accept', '', '', 'now', 'paid'),
(48, '', NULL, '', 808, 'paypal', '', 0, 'jghjghjghj', 2, 5, '', '2017-08-16 1:00 PM', 'new', '', '', 'now', ''),
(49, '', NULL, '', 8448, 'paypal', '', 0, 'cgcghch', 2, 5, '', '2017-08-16 5:00 PM', 'new', '', '', 'now', ''),
(50, '', NULL, '', 1212, 'stripe', '', 0, 'dfasdasdasd', 2, 5, '', '2017-08-16 12:00 PM', 'new', '', '', 'now', 'paid'),
(51, '', NULL, '', 632, 'cash', 'same', 0, 'yes.', 7, 5, '', '', 'new', '', '', '', ''),
(52, '', NULL, '', 632, 'cash', 'same', 0, 'yes.', 7, 5, '', '', 'new', '', '', '', ''),
(53, '', NULL, '', 632, 'cash', 'same', 0, 'yes.', 7, 5, '', '', 'new', '', '', '', ''),
(54, '', NULL, '', 576, 'cash', 'asdasd  dasd', 2147483647, 'as dasdas dasdasdasd', 16, 5, '', '2017-08-28 1:45 PM', 'new', '', '', 'now', 'paid'),
(55, '', NULL, '', 6666, 'cash', 'asdasdasd adssad', 2147483647, 'asd as dasdasdas', 17, 5, '', '2017-08-28 1:45 PM', 'new', '', '', 'now', 'paid'),
(56, '', NULL, '', 224, 'cash', 'expo centre road,johar town lahore', 2147483647, 'please deliver karahi as fast as possible', 18, 5, '', '2017-08-28 2:30 PM', 'new', '', '', 'now', 'paid'),
(57, '', NULL, '', 33, 'paypal', 'jonesboro town pa', 2147483647, 'please deliver quickly', 19, 5, '', '2017-08-28 2:45 PM', 'new', '', '', 'later', ''),
(58, '', NULL, '', 22, 'cash', 'expo centre road,', 2147483647, 'aaaaaaaaaaa', 18, 5, '', '2017-08-28 2:45 PM', 'new', '', '', 'now', 'paid'),
(59, '', NULL, '', 33, 'cash', 'gojra', 2147483647, 'qqqq', 21, 5, '', '2017-08-28 3:00 PM', 'new', '', '', 'now', 'paid'),
(60, '', NULL, '', 659, 'cash', 'Hoher town', 2147483647, 'not ant yet.', 7, 5, '', '2017-10-03 12:00 PM', 'new', '', '', 'later', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE IF NOT EXISTS `order_details` (
  `orderdetail_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `m_extra_id` varchar(30) NOT NULL,
  `qty` int(30) NOT NULL,
  `comment` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`orderdetail_id`, `order_id`, `menu_id`, `m_extra_id`, `qty`, `comment`) VALUES
(13, 26, 9, '1,2', 3, 'qqqq'),
(2, 20, 9, '1,2', 3, 'aaaaaaa'),
(3, 20, 10, '0', 3, 'sssssss'),
(4, 20, 14, '0', 2, 'asas'),
(5, 21, 9, '1', 3, ''),
(6, 21, 10, '0', 3, 'ddd'),
(7, 22, 9, '1', 3, 'ttt'),
(8, 22, 10, '0', 3, 'aaa'),
(9, 23, 9, '1,2', 3, 'qqqq'),
(10, 23, 10, '', 2, 'qqqqqq'),
(11, 24, 9, '1,2', 1111, ''),
(12, 25, 9, '1,2', 2, ''),
(14, 27, 9, '2', 1, 'Don''t make it too crispy, i like a creamy taste ...'),
(15, 28, 10, '', 1, ''),
(16, 28, 9, '1', 3, ''),
(17, 31, 9, '1', 69, 'sd '),
(18, 31, 14, '', 49, 'as a  '),
(19, 31, 9, '1,2', 5, 'sfsdf sd s'),
(20, 32, 9, '1,2', 34, 'as a '),
(21, 32, 10, '', 5, 'fff '),
(22, 32, 15, '', 4, 'asd as a'),
(23, 32, 11, '', 3, 'sd asd'),
(24, 33, 9, '1', 34, 'dsf sdf s'),
(25, 33, 14, '', 2, 'sdf sd'),
(26, 34, 10, '', 3, 'sdfsdfsdf'),
(27, 35, 9, '1', 4, 'sdf sd fs '),
(28, 36, 9, '1', 7, 'kmkm'),
(29, 37, 9, '1', 5, 'sdfs sf s fd'),
(30, 38, 9, '1', 5, 'sf ss dfs fd'),
(31, 39, 9, '1', 4, 'rerter'),
(32, 40, 9, '2', 3, 'fd s f fsf sf'),
(33, 41, 9, '1', 4, 'asd asd a sd'),
(34, 42, 9, '1,2', 3, 'sdfsd fs fs f '),
(35, 43, 9, '', 3, 'I''ll collect but after an hour, and please not much spice '),
(36, 43, 9, '2', 1, 'please red chilli shouldn''t be part of this '),
(37, 44, 9, '2', 34, 'sefsf'),
(38, 44, 14, '', 66, 'aasdasd'),
(39, 45, 10, '', 1, ''),
(40, 45, 9, '1', 3, ''),
(41, 46, 9, '2,5', 23, 'asdas dasd a sdasdas'),
(42, 47, 9, '2,5', 3, 'sd sdfsfsdf s'),
(43, 48, 9, '2', 4, 'ss sf s'),
(44, 49, 9, '1', 44, 'sdfsdf'),
(45, 50, 9, '2', 6, 'ghjgjg'),
(46, 51, 10, '', 1, ''),
(47, 51, 9, '1', 3, ''),
(48, 52, 10, '', 1, ''),
(49, 52, 9, '1', 3, ''),
(50, 53, 10, '', 1, ''),
(51, 53, 9, '1', 3, ''),
(52, 54, 9, '1', 3, 'sdf sdfdf'),
(53, 55, 9, '2', 33, 'asd asd '),
(54, 56, 10, '', 3, ''),
(55, 56, 11, '', 1, 'chili'),
(56, 56, 15, '', 2, 'white corn chili is so delicious'),
(57, 57, 14, '', 3, ''),
(58, 58, 14, '', 2, ''),
(59, 59, 14, '', 3, ''),
(60, 60, 9, '5', 4, 'no any!'),
(61, 60, 15, '', 1, 'yep'),
(13, 26, 9, '1,2', 3, 'qqqq'),
(2, 20, 9, '1,2', 3, 'aaaaaaa'),
(3, 20, 10, '0', 3, 'sssssss'),
(4, 20, 14, '0', 2, 'asas'),
(5, 21, 9, '1', 3, ''),
(6, 21, 10, '0', 3, 'ddd'),
(7, 22, 9, '1', 3, 'ttt'),
(8, 22, 10, '0', 3, 'aaa'),
(9, 23, 9, '1,2', 3, 'qqqq'),
(10, 23, 10, '', 2, 'qqqqqq'),
(11, 24, 9, '1,2', 1111, ''),
(12, 25, 9, '1,2', 2, ''),
(14, 27, 9, '2', 1, 'Don''t make it too crispy, i like a creamy taste ...'),
(15, 28, 10, '', 1, ''),
(16, 28, 9, '1', 3, ''),
(17, 31, 9, '1', 69, 'sd '),
(18, 31, 14, '', 49, 'as a  '),
(19, 31, 9, '1,2', 5, 'sfsdf sd s'),
(20, 32, 9, '1,2', 34, 'as a '),
(21, 32, 10, '', 5, 'fff '),
(22, 32, 15, '', 4, 'asd as a'),
(23, 32, 11, '', 3, 'sd asd'),
(24, 33, 9, '1', 34, 'dsf sdf s'),
(25, 33, 14, '', 2, 'sdf sd'),
(26, 34, 10, '', 3, 'sdfsdfsdf'),
(27, 35, 9, '1', 4, 'sdf sd fs '),
(28, 36, 9, '1', 7, 'kmkm'),
(29, 37, 9, '1', 5, 'sdfs sf s fd'),
(30, 38, 9, '1', 5, 'sf ss dfs fd'),
(31, 39, 9, '1', 4, 'rerter'),
(32, 40, 9, '2', 3, 'fd s f fsf sf'),
(33, 41, 9, '1', 4, 'asd asd a sd'),
(34, 42, 9, '1,2', 3, 'sdfsd fs fs f '),
(35, 43, 9, '', 3, 'I''ll collect but after an hour, and please not much spice '),
(36, 43, 9, '2', 1, 'please red chilli shouldn''t be part of this '),
(37, 44, 9, '2', 34, 'sefsf'),
(38, 44, 14, '', 66, 'aasdasd'),
(39, 45, 10, '', 1, ''),
(40, 45, 9, '1', 3, ''),
(41, 46, 9, '2,5', 23, 'asdas dasd a sdasdas'),
(42, 47, 9, '2,5', 3, 'sd sdfsfsdf s'),
(43, 48, 9, '2', 4, 'ss sf s'),
(44, 49, 9, '1', 44, 'sdfsdf'),
(45, 50, 9, '2', 6, 'ghjgjg'),
(46, 51, 10, '', 1, ''),
(47, 51, 9, '1', 3, ''),
(48, 52, 10, '', 1, ''),
(49, 52, 9, '1', 3, ''),
(50, 53, 10, '', 1, ''),
(51, 53, 9, '1', 3, ''),
(52, 54, 9, '1', 3, 'sdf sdfdf'),
(53, 55, 9, '2', 33, 'asd asd '),
(54, 56, 10, '', 3, ''),
(55, 56, 11, '', 1, 'chili'),
(56, 56, 15, '', 2, 'white corn chili is so delicious'),
(57, 57, 14, '', 3, ''),
(58, 58, 14, '', 2, ''),
(59, 59, 14, '', 3, ''),
(60, 60, 9, '5', 4, 'no any!'),
(61, 60, 15, '', 1, 'yep'),
(13, 26, 9, '1,2', 3, 'qqqq'),
(2, 20, 9, '1,2', 3, 'aaaaaaa'),
(3, 20, 10, '0', 3, 'sssssss'),
(4, 20, 14, '0', 2, 'asas'),
(5, 21, 9, '1', 3, ''),
(6, 21, 10, '0', 3, 'ddd'),
(7, 22, 9, '1', 3, 'ttt'),
(8, 22, 10, '0', 3, 'aaa'),
(9, 23, 9, '1,2', 3, 'qqqq'),
(10, 23, 10, '', 2, 'qqqqqq'),
(11, 24, 9, '1,2', 1111, ''),
(12, 25, 9, '1,2', 2, ''),
(14, 27, 9, '2', 1, 'Don''t make it too crispy, i like a creamy taste ...'),
(15, 28, 10, '', 1, ''),
(16, 28, 9, '1', 3, ''),
(17, 31, 9, '1', 69, 'sd '),
(18, 31, 14, '', 49, 'as a  '),
(19, 31, 9, '1,2', 5, 'sfsdf sd s'),
(20, 32, 9, '1,2', 34, 'as a '),
(21, 32, 10, '', 5, 'fff '),
(22, 32, 15, '', 4, 'asd as a'),
(23, 32, 11, '', 3, 'sd asd'),
(24, 33, 9, '1', 34, 'dsf sdf s'),
(25, 33, 14, '', 2, 'sdf sd'),
(26, 34, 10, '', 3, 'sdfsdfsdf'),
(27, 35, 9, '1', 4, 'sdf sd fs '),
(28, 36, 9, '1', 7, 'kmkm'),
(29, 37, 9, '1', 5, 'sdfs sf s fd'),
(30, 38, 9, '1', 5, 'sf ss dfs fd'),
(31, 39, 9, '1', 4, 'rerter'),
(32, 40, 9, '2', 3, 'fd s f fsf sf'),
(33, 41, 9, '1', 4, 'asd asd a sd'),
(34, 42, 9, '1,2', 3, 'sdfsd fs fs f '),
(35, 43, 9, '', 3, 'I''ll collect but after an hour, and please not much spice '),
(36, 43, 9, '2', 1, 'please red chilli shouldn''t be part of this '),
(37, 44, 9, '2', 34, 'sefsf'),
(38, 44, 14, '', 66, 'aasdasd'),
(39, 45, 10, '', 1, ''),
(40, 45, 9, '1', 3, ''),
(41, 46, 9, '2,5', 23, 'asdas dasd a sdasdas'),
(42, 47, 9, '2,5', 3, 'sd sdfsfsdf s'),
(43, 48, 9, '2', 4, 'ss sf s'),
(44, 49, 9, '1', 44, 'sdfsdf'),
(45, 50, 9, '2', 6, 'ghjgjg'),
(46, 51, 10, '', 1, ''),
(47, 51, 9, '1', 3, ''),
(48, 52, 10, '', 1, ''),
(49, 52, 9, '1', 3, ''),
(50, 53, 10, '', 1, ''),
(51, 53, 9, '1', 3, ''),
(52, 54, 9, '1', 3, 'sdf sdfdf'),
(53, 55, 9, '2', 33, 'asd asd '),
(54, 56, 10, '', 3, ''),
(55, 56, 11, '', 1, 'chili'),
(56, 56, 15, '', 2, 'white corn chili is so delicious'),
(57, 57, 14, '', 3, ''),
(58, 58, 14, '', 2, ''),
(59, 59, 14, '', 3, ''),
(60, 60, 9, '5', 4, 'no any!'),
(61, 60, 15, '', 1, 'yep');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE IF NOT EXISTS `owner` (
  `owner_id` int(11) NOT NULL,
  `owner_name` varchar(255) DEFAULT NULL,
  `owner_email` varchar(255) DEFAULT NULL,
  `owner_password` varchar(255) DEFAULT NULL,
  `owner_contact` varchar(255) DEFAULT NULL,
  `owner_image` varchar(255) DEFAULT NULL,
  `owner_lat` varchar(255) DEFAULT NULL,
  `owner_longi` varchar(255) DEFAULT NULL,
  `owner_address` varchar(255) DEFAULT NULL,
  `owner_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`owner_id`, `owner_name`, `owner_email`, `owner_password`, `owner_contact`, `owner_image`, `owner_lat`, `owner_longi`, `owner_address`, `owner_status`) VALUES
(1, 'Angela Jones', 'angela@gmail.com', 'angela', '033312234', '', '', '', 'dallas, texas', 1),
(1, 'Angela Jones', 'angela@gmail.com', 'angela', '033312234', '', '', '', 'dallas, texas', 1),
(1, 'Angela Jones', 'angela@gmail.com', 'angela', '033312234', '', '', '', 'dallas, texas', 1),
(1, 'Angela Jones', 'angela@gmail.com', 'angela', '033312234', '', '', '', 'dallas, texas', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
  `r_id` int(11) NOT NULL,
  `rate` varchar(255) DEFAULT NULL,
  `k_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`r_id`, `rate`, `k_id`, `user_id`) VALUES
(1, '4', 5, 0),
(2, '3', 5, 0),
(3, '5', 5, 0),
(4, '5', 5, 0),
(5, '4', 5, 0),
(6, '5', 5, 0),
(7, '5', 5, 0),
(8, '5', 5, 0),
(9, '5', 5, 0),
(10, '5', 5, 0),
(11, '1', 5, 0),
(12, '1', 5, 0),
(13, '1', 5, 0),
(14, '1', 5, 0),
(15, '1', 5, 0),
(16, '1', 5, 0),
(17, '1', 5, 0),
(18, '1', 5, 0),
(19, '1', 5, 0),
(20, '1', 5, 0),
(1, '4', 5, 0),
(2, '3', 5, 0),
(3, '5', 5, 0),
(4, '5', 5, 0),
(5, '4', 5, 0),
(6, '5', 5, 0),
(7, '5', 5, 0),
(8, '5', 5, 0),
(9, '5', 5, 0),
(10, '5', 5, 0),
(11, '1', 5, 0),
(12, '1', 5, 0),
(13, '1', 5, 0),
(14, '1', 5, 0),
(15, '1', 5, 0),
(16, '1', 5, 0),
(17, '1', 5, 0),
(18, '1', 5, 0),
(19, '1', 5, 0),
(20, '1', 5, 0),
(1, '4', 5, 0),
(2, '3', 5, 0),
(3, '5', 5, 0),
(4, '5', 5, 0),
(5, '4', 5, 0),
(6, '5', 5, 0),
(7, '5', 5, 0),
(8, '5', 5, 0),
(9, '5', 5, 0),
(10, '5', 5, 0),
(11, '1', 5, 0),
(12, '1', 5, 0),
(13, '1', 5, 0),
(14, '1', 5, 0),
(15, '1', 5, 0),
(16, '1', 5, 0),
(17, '1', 5, 0),
(18, '1', 5, 0),
(19, '1', 5, 0),
(20, '1', 5, 0),
(1, '4', 5, 0),
(2, '3', 5, 0),
(3, '5', 5, 0),
(4, '5', 5, 0),
(5, '4', 5, 0),
(6, '5', 5, 0),
(7, '5', 5, 0),
(8, '5', 5, 0),
(9, '5', 5, 0),
(10, '5', 5, 0),
(11, '1', 5, 0),
(12, '1', 5, 0),
(13, '1', 5, 0),
(14, '1', 5, 0),
(15, '1', 5, 0),
(16, '1', 5, 0),
(17, '1', 5, 0),
(18, '1', 5, 0),
(19, '1', 5, 0),
(20, '1', 5, 0),
(1, '4', 5, 0),
(2, '3', 5, 0),
(3, '5', 5, 0),
(4, '5', 5, 0),
(5, '4', 5, 0),
(6, '5', 5, 0),
(7, '5', 5, 0),
(8, '5', 5, 0),
(9, '5', 5, 0),
(10, '5', 5, 0),
(11, '1', 5, 0),
(12, '1', 5, 0),
(13, '1', 5, 0),
(14, '1', 5, 0),
(15, '1', 5, 0),
(16, '1', 5, 0),
(17, '1', 5, 0),
(18, '1', 5, 0),
(19, '1', 5, 0),
(20, '1', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_phone` varchar(255) DEFAULT NULL,
  `user_address` varchar(255) DEFAULT NULL,
  `user_status` int(11) DEFAULT NULL,
  `user_image` varchar(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_phone`, `user_address`, `user_status`, `user_image`) VALUES
(1, 'Name', 'rebecca35@gmail.com', '123', '12345678', NULL, NULL, '154048729641675178_1869319879847789_4511659193630982144_n.jpg'),
(2, 'Akbar Ahmad', 'akbar@gmail.com', 'serbia', '+923043856321', NULL, NULL, '1540611585Banqwit03.png'),
(3, 'Jason Fine', 'manly@gmail.com', '12345678', '03333333333', NULL, NULL, '1540807646home-111.jpg'),
(1, 'Name', 'rebecca35@gmail.com', '123', '12345678', NULL, NULL, '154048729641675178_1869319879847789_4511659193630982144_n.jpg'),
(2, 'Akbar Ahmad', 'akbar@gmail.com', 'serbia', '+923043856321', NULL, NULL, '1540611585Banqwit03.png'),
(3, 'Jason Fine', 'manly@gmail.com', '12345678', '03333333333', NULL, NULL, '1540807646home-111.jpg'),
(1, 'Name', 'rebecca35@gmail.com', '123', '12345678', NULL, NULL, '154048729641675178_1869319879847789_4511659193630982144_n.jpg'),
(2, 'Akbar Ahmad', 'akbar@gmail.com', 'serbia', '+923043856321', NULL, NULL, '1540611585Banqwit03.png'),
(3, 'Jason Fine', 'manly@gmail.com', '12345678', '03333333333', NULL, NULL, '1540807646home-111.jpg'),
(1, 'Name', 'rebecca35@gmail.com', '123', '12345678', NULL, NULL, '154048729641675178_1869319879847789_4511659193630982144_n.jpg'),
(2, 'Akbar Ahmad', 'akbar@gmail.com', 'serbia', '+923043856321', NULL, NULL, '1540611585Banqwit03.png'),
(3, 'Jason Fine', 'manly@gmail.com', '12345678', '03333333333', NULL, NULL, '1540807646home-111.jpg'),
(1, 'Name', 'rebecca35@gmail.com', '123', '12345678', NULL, NULL, '154048729641675178_1869319879847789_4511659193630982144_n.jpg'),
(2, 'Akbar Ahmad', 'akbar@gmail.com', 'serbia', '+923043856321', NULL, NULL, '1540611585Banqwit03.png'),
(3, 'Jason Fine', 'manly@gmail.com', '12345678', '03333333333', NULL, NULL, '1540807646home-111.jpg'),
(1, 'Name', 'rebecca35@gmail.com', '123', '12345678', NULL, NULL, '154048729641675178_1869319879847789_4511659193630982144_n.jpg'),
(2, 'Akbar Ahmad', 'akbar@gmail.com', 'serbia', '+923043856321', NULL, NULL, '1540611585Banqwit03.png'),
(3, 'Jason Fine', 'manly@gmail.com', '12345678', '03333333333', NULL, NULL, '1540807646home-111.jpg'),
(0, 'zeeshan ahmad', 'chzeeshan16@gmail.com', '123', '0302-9390942', NULL, NULL, '1552491325Guarantee-Stamp_medium.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
