-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 15, 2025 at 12:12 PM
-- Server version: 5.7.23-23
-- PHP Version: 8.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nadeeshb_aaaqua.lk`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `BrandId` int(11) UNSIGNED NOT NULL,
  `BrandTitle` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `ShortDescription` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `MoreImage` text NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CreatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedBy` int(11) NOT NULL,
  `ModifiedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `IsDeleted` int(1) NOT NULL DEFAULT '0',
  `Order` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`BrandId`, `BrandTitle`, `Image`, `ShortDescription`, `Description`, `MoreImage`, `CreatedBy`, `CreatedDate`, `ModifiedBy`, `ModifiedDate`, `IsDeleted`, `Order`) VALUES
(13, 'Surfboard Carrier', '1660658311.jpg', ' Our Vehicles have special <br> Surfboard Car Racks for carry Surfboards', '', 'null', 1, '2022-08-16 13:56:18', 0, '2022-09-21 04:36:17', 1, 3),
(11, 'Sri Lanka Personal Chauffeurs', '1660401024.jpg', 'As a Sri Lanka Personal Chauffeurs our main priourity is\r\nmake your ride more pleasure and comfortablity', '', 'null', 1, '2022-08-13 14:19:08', 0, '2022-09-21 04:36:19', 1, 1),
(12, 'We help to make your Destinations', '1660401053.jpg', 'Sri Lanka Personal Chauffeurs provides Transfer services from airport to hotels, for sightseeing-trips and private city-tours etc.', '', 'null', 1, '2022-08-13 14:30:54', 0, '2022-09-21 04:36:21', 1, 2),
(14, 'slider1', '1661158223.jpg', 'paragraph', '', 'null', 1, '2022-08-22 08:46:56', 0, '2022-08-22 08:50:53', 1, 0),
(15, 'Welcome to', '1663735085.jpg', 'A A Aqua International (PVT) Ltd.\r\n\r\n', '', 'null', 1, '2022-09-21 04:38:10', 0, '2022-09-21 04:38:10', 0, 0),
(16, 'We have', '1663735103.jpg', 'Superb Export Grade Fresh Products\r\n\r\n', '', 'null', 1, '2022-09-21 04:38:34', 0, '2022-09-21 04:38:34', 0, 0),
(17, 'Our Company Follows', '1663735128.jpg', 'Good Manufacturing Practices\r\n\r\n', '', 'null', 1, '2022-09-21 04:38:50', 0, '2022-09-21 04:38:50', 0, 0),
(18, 'Our Company Follows', '1663735141.jpg', 'Good Manufacturing Practices\r\n\r\n', '', 'null', 1, '2022-09-21 04:39:04', 0, '2022-09-21 04:39:04', 0, 0),
(19, 'Our Company Follows', '1663735155.jpg', 'Good Manufacturing Practices\r\n\r\n', '', 'null', 1, '2022-09-21 04:39:19', 0, '2022-09-21 04:39:19', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CategoryId` int(11) UNSIGNED NOT NULL,
  `CategoryTitle` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `ShortDescription` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `MoreImage` text NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CreatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedBy` int(11) NOT NULL,
  `ModifiedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `IsDeleted` int(1) NOT NULL DEFAULT '0',
  `Order` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CategoryId`, `CategoryTitle`, `Image`, `ShortDescription`, `Description`, `MoreImage`, `CreatedBy`, `CreatedDate`, `ModifiedBy`, `ModifiedDate`, `IsDeleted`, `Order`) VALUES
(24, 'Rigifoam Cool Boxes ', '', '', '', 'null', 1, '2022-09-21 09:27:53', 0, '2022-09-21 09:27:53', 0, 0),
(23, 'Fresh Fish', '', '', '', 'null', 1, '2022-09-21 09:23:07', 0, '2022-09-21 09:26:17', 1, 0),
(22, 'Fresh Fish', '', '', '', 'null', 1, '2022-09-21 09:23:07', 0, '2022-09-21 09:23:07', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `galley`
--

CREATE TABLE `galley` (
  `GalleryId` int(11) NOT NULL,
  `GalleryTitle` varchar(512) NOT NULL,
  `MoreImage` text NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CreatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Order` int(11) NOT NULL,
  `IsDeleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galley`
--

INSERT INTO `galley` (`GalleryId`, `GalleryTitle`, `MoreImage`, `CreatedBy`, `CreatedDate`, `ModifiedDate`, `Order`, `IsDeleted`) VALUES
(20, 'our services', '[\"1660665688.jpg\",\"1660665689.jpg\",\"1660665690.jpg\",\"1660665691.jpg\",\"1660665692.jpg\",\"1660665694.jpg\",\"1660665693.jpg\"]', 1, '2022-08-16 14:20:49', '2022-09-21 16:44:42', 0, 1),
(21, 'Tours', '[\"1660665754.jpg\",\"1660665755.jpg\"]', 1, '2022-08-16 14:22:46', '2022-09-21 16:44:44', 0, 1),
(22, 'Boat Factory', '[\"1663778701.jpg\",\"16637787011.jpg\",\"1663778702.jpg\",\"16637787021.jpg\",\"16637787091.jpg\",\"1663778709.jpg\",\"1663778705.jpg\"]', 1, '2022-09-21 16:45:10', '2022-09-21 16:45:30', 0, 0),
(23, 'Local and Foreign Fish Distribution', '[\"1663778756.jpg\",\"16637787561.jpg\",\"1663778757.jpg\",\"1663778758.jpg\",\"16637787581.jpg\",\"1663778762.jpg\",\"1663778761.jpg\",\"16637787601.jpg\",\"1663778760.jpg\",\"1663778759.jpg\",\"1663778763.jpg\"]', 1, '2022-09-21 16:46:04', '2022-09-21 16:46:04', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `PageId` int(11) NOT NULL,
  `Description` longtext NOT NULL,
  `Image` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`PageId`, `Description`, `Image`) VALUES
(1, '<p style=\"margin-bottom: 20px; position: relative; color: rgb(34, 34, 34); font-size: 16px; line-height: 1.8em; text-transform: capitalize; font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">AA Aqua Pvt Ltd Is Proven Trader Of Frozen Seafood, TraFnsacting Business With Many Food Processors And Wholesalers In Europe. Its Supply Of Chilean Salmon, Cold Water Shrimps, Tuna, Marlin And Swordfish Are Recognized And Preferred By Domestic And International Suppliers, Exporters And Customers For Its Good Quality. Also, It Is Known For The Way It Provides The Best Possible Service At Very Competitive Prices, A Result Of AA Aqua Seafood S/L Being A Small Yet Very Flexible And Motivated Team With Low Overheads And Quick Decision-Making Process.</p><p style=\"margin-bottom: 0px; position: relative; color: rgb(34, 34, 34); font-size: 16px; line-height: 1.8em; text-transform: capitalize; font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">With A Team That Combines More Than 40 Years Of Experience In The Seafood Industry, AA Aqua Seafood S/L Puts Together Its Expertise And Close Relationships With Production Facilities To Become A Serious And Trustworthy Partner. In The Process, We Are Able To Offer A Wide Range Of Different Products, Including Smoked Products, For Wholesalers, Smokehouses And Industrial Customers</p>', '1663735444.jpg'),
(2, '<div><p style=\"margin-bottom: 20px; position: relative; color: rgb(34, 34, 34); font-size: 16px; line-height: 1.8em; text-transform: capitalize; font-family: system-ui, -apple-system, \" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" \"noto=\"\" sans\",=\"\" \"liberation=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\",=\"\" emoji\";\"=\"\">AA Aqua Pvt Ltd Is Proven Trader Of Frozen Seafood, TraFnsacting Business With Many Food Processors And Wholesalers In Europe. Its Supply Of Chilean Salmon, Cold Water Shrimps, Tuna, Marlin And Swordfish Are Recognized And Preferred By Domestic And International Suppliers, Exporters And Customers For Its Good Quality. Also, It Is Known For The Way It Provides The Best Possible Service At Very Competitive Prices, A Result Of AA Aqua Seafood S/L Being A Small Yet Very Flexible And Motivated Team With Low Overheads And Quick Decision-Making Process.</p><p style=\"margin-bottom: 0px; position: relative; color: rgb(34, 34, 34); font-size: 16px; line-height: 1.8em; text-transform: capitalize; font-family: system-ui, -apple-system, \" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" \"noto=\"\" sans\",=\"\" \"liberation=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\",=\"\" emoji\";\"=\"\">With A Team That Combines More Than 40 Years Of Experience In The Seafood Industry, AA Aqua Seafood S/L Puts Together Its Expertise And Close Relationships With Production Facilities To Become A Serious And Trustworthy Partner. In The Process, We Are Able To Offer A Wide Range Of Different Products, Including Smoked Products, For Wholesalers, Smokehouses And Industrial Customers</p><p style=\"margin-bottom: 0px; position: relative; color: rgb(34, 34, 34); font-size: 16px; line-height: 1.8em; text-transform: capitalize; font-family: system-ui, -apple-system, \" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" \"noto=\"\" sans\",=\"\" \"liberation=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\",=\"\" emoji\";\"=\"\"><br></p><p style=\"margin-bottom: 0px; position: relative; line-height: 1.8em;\" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" \"noto=\"\" sans\",=\"\" \"liberation=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\",=\"\" emoji\";\"=\"\"><font color=\"#222222\"><span style=\"font-size: 16px; text-transform: capitalize;\">With expertise and close relationships we built over the years since Kurt Nielsen founded AA Aqua Seafood S/L in 2001, our target markets have come to rely on us, knowing that they can get\"oceans of quality\"from us.&nbsp;</span></font><br></p></div><div></div>', '1663735408.jpg'),
(3, 'As a Sri Lanka Personal Chauffeurs our main priourity is make your ride more pleasure and comfortablity', '1660667056.jpg'),
(4, '<p>We are committed to provide high quality travel services combining our knowledge, enthusiasm and energy with our experience in travel industry for over 10 years. We are ready give best rates to our loyal customers the best rates. </p><p>Tailor Made Tours prides itself in its ability to organize all your Sri Lanka travel needs for groups. Our performance will be your peace of mind. We give our best service and make sure our guests enjoy their stay in our beautiful and peacefully country to the maximum so they return back to their country with a lot of wonderful memories that they could cherish.<br></p>', '1660635430.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `PartnerId` int(11) NOT NULL,
  `PartnerTitle` varchar(512) NOT NULL,
  `ShortDescription` varchar(10000) NOT NULL,
  `Image` varchar(512) NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CreatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Order` int(11) NOT NULL,
  `IsDeleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`PartnerId`, `PartnerTitle`, `ShortDescription`, `Image`, `CreatedBy`, `CreatedDate`, `ModifiedDate`, `Order`, `IsDeleted`) VALUES
(24, 'Corporate Transportation', 'sdasdasd', '1660405254.jpg', 1, '2022-08-13 15:40:55', '2022-08-15 12:21:06', 0, 1),
(25, 'Cars', 'Toyota Corolla or Prius <br>\r\nMaximum 3 Passengers <br>\r\nFully Air Conditioned, Fully Insured, Perfect seat belts <br>\r\nOnboard WiFi or Sim cards with 1 GB data for each passengers\r\n', '1660566254.jpg', 1, '2022-08-15 12:08:29', '2022-08-15 12:24:15', 0, 0),
(26, 'Honda Vezel', 'SUV Model (Mini) <br>\r\n\r\nMaximum 3 Passengers<br>\r\n\r\nFully Air Conditioned, Fully Insured, Perfect seat belts<br>\r\n\r\nOnboard WiFi or Sim cards with 1 GB data for each passengers<br>', '1660566234.jpg', 1, '2022-08-15 12:23:56', '2022-08-15 12:23:56', 0, 0),
(27, 'Suv', 'Toyota Prado <br>\r\n\r\nMaximum 4 Passengers <br>\r\n\r\nFully Air Conditioned, Fully Insured, Perfect seat belts <br>\r\n\r\nOnboard WiFi or Sim cards with 1 GB data for each passengers <br>', '1660566559.jpg', 1, '2022-08-15 12:29:36', '2022-08-15 12:29:36', 0, 0),
(28, 'Van Hiroof', 'Toyota KDH or Nissan Caravan <br>\r\n\r\nMaximum 6 Passengers <br>\r\n\r\nFully Air Conditioned, Fully Insured, Perfect seat belts <br>\r\n\r\nOnboard WiFi or Sim cards with 1 GB data for each passengers <br>\r\n\r\n', '1660566977.jpg', 1, '2022-08-15 12:36:19', '2022-08-15 12:36:19', 0, 0),
(29, 'Mini Buss', 'Toyota Coaster <br>\r\n\r\nMaximum 20 Passengers <br>\r\n\r\nFully Air Conditioned, Fully Insured, Perfect seat belts <br>\r\nOnboard WiFi or Sim cards with 1 GB data for each passengers ', '1660567346.jpg', 1, '2022-08-15 12:38:08', '2022-08-15 12:42:28', 0, 0),
(30, 'Bus', 'Single Deck <br>\r\n\r\nMaximum 30 Passengers <br>\r\n\r\nFully Air Conditioned, Fully Insured, Perfect seat belts <br>\r\n\r\nOnboard WiFi or Sim cards with 1 GB data for each passengers <br>', '1660567512.jpg', 1, '2022-08-15 12:44:32', '2022-08-15 12:45:13', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductId` int(11) NOT NULL,
  `CategoryId` int(11) NOT NULL,
  `ProductTitle` varchar(256) NOT NULL,
  `ShortDescription` text NOT NULL,
  `Image` varchar(256) NOT NULL,
  `Description` text NOT NULL,
  `MoreImage` text NOT NULL,
  `CreatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `IsDeleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductId`, `CategoryId`, `ProductTitle`, `ShortDescription`, `Image`, `Description`, `MoreImage`, `CreatedDate`, `ModifiedDate`, `IsDeleted`) VALUES
(106, 24, 'RFECOAKB ', 'RFECOAKB \r\nRigifoam Economy Cool Box\r\n470mm x 405mm x 362mm (25KG)', '1663753094.jpg', '<p>RFECOAKB </p><p>Rigifoam Economy Cool Box</p><p>470mm x 405mm x 362mm (25KG)</p>', 'null', '2022-09-21 09:38:07', '2022-09-21 09:38:17', 0),
(107, 24, 'RFECOAKB1/2 ', 'RFECOAKB1/2 \r\nRigifoam Economy Cool Box V2  \r\n470mm x 405mm x 240mm (14KG) ', '1663754389.jpg', '<p>RFECOAKB1/2&nbsp;</p><p>Rigifoam Economy Cool Box V2&nbsp;&nbsp;</p><p>470mm x 405mm x 240mm (14KG)&nbsp;</p>', 'null', '2022-09-21 09:59:58', '2022-09-21 09:59:58', 0),
(108, 24, 'RF1/2GAL ', 'RF1/2GAL \r\nRigifoam 1/2 Gallon Container \r\n225mm(DIA.)x 256mm (H) \r\n', '1663754482.jpg', '<p>RF1/2GAL&nbsp;</p><p>Rigifoam 1/2 Gallon Container&nbsp;</p><p>225mm(DIA.)x 256mm (H)&nbsp;</p><div><br></div>', 'null', '2022-09-21 10:01:25', '2022-09-21 10:01:25', 0),
(109, 24, 'RFCBHD ', 'RFCBHD \r\nRigifoam Cool Box High Density \r\n470mm x 395mm x 355mm (24KG) \r\n', '1663754572.jpg', '<p>RFCBHD&nbsp;</p><p>Rigifoam Cool Box High Density&nbsp;</p><p>470mm x 395mm x 355mm (24KG)&nbsp;</p><div><br></div>', 'null', '2022-09-21 10:02:54', '2022-09-21 10:02:54', 0),
(110, 24, 'RFAKBL ', 'RFAKBL \r\nRigifoam Cool Box Large \r\n666mm x 345mm x 393mm (35 KG) ', '1663754656.jpg', '<p>RFAKBL&nbsp;</p><p>Rigifoam Cool Box Large&nbsp;</p><p>666mm x 345mm x 393mm (35 KG)&nbsp;</p>', 'null', '2022-09-21 10:04:34', '2022-09-21 10:04:34', 0),
(111, 24, 'RF1GAL ', 'RF1GAL \r\n\r\nRigifoam 1 Gallon Container \r\n\r\n225mm(DIA) x 221mm (H) ', '1663754747.jpg', '<p>RF1GAL&nbsp;</p><p>Rigifoam 1 Gallon Container&nbsp;</p><p> 225mm(DIA) x 221mm (H)&nbsp;</p>', 'null', '2022-09-21 10:05:49', '2022-09-21 10:05:49', 0);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `ProjectId` int(11) UNSIGNED NOT NULL,
  `ProjectTitle` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `ShortDescription` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `MoreImage` text NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CreatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedBy` int(11) NOT NULL,
  `ModifiedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `IsDeleted` int(1) NOT NULL DEFAULT '0',
  `Order` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`ProjectId`, `ProjectTitle`, `Image`, `ShortDescription`, `Description`, `MoreImage`, `CreatedBy`, `CreatedDate`, `ModifiedBy`, `ModifiedDate`, `IsDeleted`, `Order`) VALUES
(12, 'Texel (The Netherlands) travel guide: 10 best activities and things to do!', '1660451886.jpg', 'Planning a trip is an exciting part of your new upcoming travel adventure. It’s not for everyone as some swear by only booking a flight ticket. Nevertheless, when planning a trip, there’s a lot to think about, like...', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed metus arcu. Nam vel ante sed lorem ornare ullamcorper. Donec volutpat congue risus, sit amet vestibulum urna semper ut. Quisque purus quam, hendrerit id feugiat id, rutrum vel mauris. Quisque ut ex sit amet sem sagittis sollicitudin. Cras egestas turpis quis commodo commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vestibulum tellus quam. Praesent ultricies, risus nec scelerisque suscipit, augue lacus blandit dui, id efficitur lacus tellus sit amet nisi. Suspendisse vel dolor ut augue rutrum ultricies at at nisl. Nam semper mauris in mi mattis accumsan. Cras fermentum nunc nulla, et interdum dui volutpat quis. Nullam non semper risus, id imperdiet tellus.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Curabitur at rhoncus mauris. Nulla lobortis nibh elit, nec tempus mauris sagittis quis. Morbi pretium nisi id scelerisque mattis. Nullam scelerisque magna nisi, a cursus eros rhoncus ac. Praesent eget leo sit amet tellus placerat convallis vitae ut magna. Quisque maximus, lacus quis finibus porttitor, purus ante venenatis tortor, vitae pretium risus enim id arcu. Vivamus felis lacus, consectetur ac leo nec, varius ornare ante. Donec fermentum quam ac turpis sagittis tempor. Duis varius maximus pretium.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Aliquam interdum luctus magna ut eleifend. Vivamus dui purus, pulvinar id tempor at, aliquet in libero. Maecenas condimentum cursus dignissim. Morbi ultricies, odio ac auctor pellentesque, elit elit finibus lorem, in porta ipsum augue id eros. Sed in orci in est ultricies luctus. Aenean bibendum quam ac mollis consectetur. Pellentesque convallis erat vitae accumsan dapibus. Cras convallis scelerisque risus, sit amet viverra erat pharetra ac. Etiam interdum mi nec urna congue, non feugiat turpis vehicula. Nam varius at magna vitae aliquet. Donec quis tempor ex, at cursus lacus.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">In egestas bibendum tortor, eu luctus felis pellentesque ac. Mauris mauris tortor, imperdiet eu lectus vel, volutpat suscipit dui. In sodales orci neque, et ultrices ipsum iaculis non. Proin rutrum gravida augue, quis fermentum arcu laoreet id. Nulla et nisl eget magna tristique sollicitudin. Sed a lectus ut nibh vehicula congue sed sit amet ante. Aenean elementum ipsum vitae ex sollicitudin fermentum. Donec tristique semper erat, eget sodales tortor finibus non.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Integer commodo, nulla ac fermentum interdum, justo dolor aliquet magna, quis faucibus magna ipsum at ipsum. Sed rutrum aliquet interdum. Nam sollicitudin egestas purus, sit amet vulputate nisl dictum id. Nulla laoreet eget magna eu pulvinar. Aenean imperdiet dictum velit ac efficitur. In ac nunc nibh. Maecenas dictum fringilla lorem. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Etiam quis mattis sapien. Aliquam varius at risus vel lacinia. Interdum et malesuada fames ac ante ipsum primis in faucibus. In lacinia mi ac mi eleifend mattis. Aenean congue, nisl at semper euismod, nibh neque fermentum augue, malesuada gravida massa tellus eu diam. Vestibulum malesuada ac augue nec maximus. In aliquam a elit ac maximus. Vivamus porttitor felis id massa bibendum, sodales fermentum justo ornare. Sed ac magna volutpat, viverra dolor ac, pellentesque dolor. Etiam bibendum dui eu massa vehicula molestie. Vestibulum est augue, interdum pretium tempor vel, sollicitudin quis diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aliquam tincidunt lacus tincidunt mauris auctor imperdiet ac eget nisi. Aenean at tempus lectus, a dignissim ligula. Sed sagittis lobortis lorem at ornare.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Proin ullamcorper ante nec bibendum tempor. Nam vitae diam justo. Phasellus dictum elit nunc, et condimentum odio viverra nec. Cras efficitur nunc id sollicitudin accumsan. Duis velit mauris, consectetur quis nulla tristique, condimentum varius erat. Nam ornare dignissim justo, at sodales ligula tincidunt vel. Vivamus quis diam varius, ultricies quam sit amet, volutpat eros. Mauris pulvinar posuere orci eu pulvinar. Vivamus sit amet massa libero. Praesent sodales tempor elit at molestie.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Proin lectus enim, vestibulum non volutpat ac, ultricies nec ipsum. Fusce lobortis purus eu odio rutrum semper. Cras pretium dui nec erat semper feugiat. Proin luctus elit vestibulum purus hendrerit iaculis. Vivamus tincidunt, ex ut ullamcorper consectetur, urna odio vehicula turpis, volutpat pretium justo sem in sapien. Mauris at purus tristique, scelerisque augue sit amet, scelerisque nisl. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus ante mauris, congue non felis quis, hendrerit mattis nibh.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Duis ultricies turpis nec eros ornare, in mattis dui mattis. Etiam velit tellus, pulvinar vitae vestibulum scelerisque, faucibus et ex. Morbi et posuere ligula. Morbi vel velit nulla. Aliquam nec tincidunt lorem. Nunc in pharetra eros. Nunc aliquam mi sed nibh dapibus, vitae convallis lacus sagittis. Morbi porttitor suscipit ex sed fringilla. Sed a purus nec eros iaculis blandit id sed sapien. Cras facilisis, nunc at iaculis interdum, felis sem imperdiet augue, a commodo sapien justo ac nibh.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Phasellus at dui justo. Aliquam imperdiet, neque a fermentum ullamcorper, libero urna dictum risus, at ullamcorper massa urna eu diam. Phasellus risus purus, venenatis ac dictum at, finibus sed mauris. Quisque ac mi sagittis, dapibus purus sed, blandit nisl. Aliquam leo eros, bibendum at finibus non, euismod et urna. Nam eu dui dignissim est varius molestie efficitur nec tellus. Morbi rhoncus sagittis condimentum. Morbi cursus laoreet nulla, vel vestibulum quam ullamcorper placerat. Mauris finibus id est vel varius. Donec eu semper elit. Etiam blandit erat sed odio condimentum commodo. Pellentesque consectetur, tortor id suscipit sollicitudin, ipsum odio tempus velit, a gravida lorem erat at sem.</p>', '[\"1660452021.jpg\",\"16604520201.jpg\",\"1660452020.jpg\"]', 1, '2022-08-14 04:10:50', 0, '2022-08-16 16:00:37', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `testemonials`
--

CREATE TABLE `testemonials` (
  `TestemonialsId` int(11) NOT NULL,
  `Name` varchar(512) NOT NULL,
  `Designation` varchar(512) NOT NULL,
  `Image` varchar(512) NOT NULL,
  `Description` text NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CreatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifiedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Order` int(11) NOT NULL,
  `IsDeleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testemonials`
--

INSERT INTO `testemonials` (`TestemonialsId`, `Name`, `Designation`, `Image`, `Description`, `CreatedBy`, `CreatedDate`, `modifiedDate`, `Order`, `IsDeleted`) VALUES
(6, 'Isabelle', 'Beautiful Vacation in Beautiful Paradise', '1660474925.jpg', 'Sri Lanka Personal Chauffeurs planned the complete trip of 3 days for us (group of friends). We started at the Bandaranaike airport to Anuradhapura to Trincomalee to Kandy to Sigiriya to Yala to Galle. Our tour guide Kasun was really good. Every place we went was beautiful. Every hotel and tour that Sri Lanka Personal Chauffeurs for us was awesome. I don\'t face any fuel shortage thanks to Sri Lanka Personal Chauffeur. SLPC Is the best at everything. Thank you, Highly recommended!!!!', 1, '2022-08-14 11:02:07', '2022-09-21 05:24:43', 1, 1),
(7, 'Daniel', 'Great Family Vacation', '1660475003.jpg', 'Our experience with Sri Lanka Personal Chauffeurs professional from start to finish. Organising the trip was easy and all their responses were helpful and timely. Our Chauffeur Ravi was so lovely, dependable and always on time. He was also full of good ideas in what to do in certain destinations. Thanks Sri Lanka Personal Chauffeurs for a great Sri Lanka trip! You guys are the best in tourism, Sri Lanka was facing a economical crisis in country and fuel shortage, but don\'t worry SLPC arranged everything superb throughout the entire tour.\r\n\r\n', 1, '2022-08-14 11:03:24', '2022-09-21 05:24:45', 2, 1),
(8, ' Romano', 'Unforgettable Family Vacation in Beautiful Sri Lanka.', '1660475113.jpg', 'For anyone looking for great family trip, I would recommend this. We booked our tour after searching for a reputable company with reliable people and vehicles. After that we find out a great company through facebook. Our chauffeur Ravi was very helpful at everything and he drive safely. And Ravi was very active and made an attempt to visit as many places as possible.And the car was very clean and A/C also at very good condition. We would visit Sri Lanka every year to visit more place and it will surely be through Sri Lanka Personal Chauffeurs as my family and I were given such great package in terms of costing and satisfaction.\r\n\r\nDuring this time unfortunately Sri Lanka was facing a economical crisis both with politics and fuel shortage. The fuel shortage did not affect our tour. SLPC arranged everything very well.\r\nSLPC Highly Recommend for every tourists who hope to visit to Sri Lanka!!!\r\n', 1, '2022-08-14 11:05:14', '2022-09-21 05:24:47', 7, 1),
(9, ' Rochelle', 'Amazing Sri Lankan Tour With SLPC.', '1660475177.jpg', 'We arranged a trip for 3 members to tour Sri Lanka in 5 days and the service was excellent from start to finish.\r\nRavi who accommodated our every request and solutions. The entire trip went without a hitch although there were negative news media about the situation in Sri Lanka. I did not face any fuel shortage. Power cuts usually 1-2 hours maximum . Ravi was very knowledgeable at everything .This is the first time I have used Sri Lanka Personal Chauffeurs and would recommend them highly.', 1, '2022-08-14 11:06:19', '2022-09-21 05:24:48', 3, 1),
(10, ' Rochelle', 'Amazing Sri Lankan Tour With SLPC.', '1660475177.jpg', 'We arranged a trip for 3 members to tour Sri Lanka in 5 days and the service was excellent from start to finish.\r\nRavi who accommodated our every request and solutions. The entire trip went without a hitch although there were negative news media about the situation in Sri Lanka. I did not face any fuel shortage. Power cuts usually 1-2 hours maximum . Ravi was very knowledgeable at everything .This is the first time I have used Sri Lanka Personal Chauffeurs and would recommend them highly.', 1, '2022-08-14 11:06:19', '2022-08-14 11:06:37', 0, 1),
(11, 'Sashini D', 'Highly recommend service', '1660475241.jpg', 'This trip was unforgettable we had a great experience with Mr.Thilak. We recommend him to our other friends that wanted to go on future trips and visit more places in Srilanka. He was so kind and generous to us. He was an experienced driver. That he drove safely and was generous about us. Thank you SLPC for giving us this amazing tour and making us all feel happy.', 1, '2022-08-14 11:07:22', '2022-09-21 05:24:50', 4, 1),
(12, 'Sashini D', 'Highly recommend service', '1660475241.jpg', 'This trip was unforgettable we had a great experience with Mr.Thilak. We recommend him to our other friends that wanted to go on future trips and visit more places in Srilanka. He was so kind and generous to us. He was an experienced driver. That he drove safely and was generous about us. Thank you SLPC for giving us this amazing tour and making us all feel happy.', 1, '2022-08-14 11:07:22', '2022-08-14 11:07:36', 0, 1),
(13, 'Nethmi Navodya Jayalath', 'Highly recommend service!', '1660475303.jpg', 'Best in tourism. Mr. Thilak our driver is very kind and generous. Thank you SLPC for giving us an amazing tour that we have never experienced before.', 1, '2022-08-14 11:08:28', '2022-09-21 05:24:52', 5, 1),
(14, 'Britney', 'Best Sri Lankan Tour!!', '1660475377.jpg', 'Highly recommended company! Best in tourism. Thank you SLPC giving us a good tour. Mr.Ravi our driver is very kind and vehicle is also good.', 1, '2022-08-14 11:09:39', '2022-09-21 05:24:54', 6, 1),
(15, 'Jayakody', 'Negombo', '', 'Very fresh and wide variety of fish and sea food ..for affordable prices\r\n', 1, '2022-09-21 05:25:19', '2022-09-21 05:25:19', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserId` int(11) NOT NULL,
  `FullName` varchar(256) NOT NULL,
  `UserName` varchar(256) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `Password` varchar(512) NOT NULL,
  `PasswordPlane` varchar(512) NOT NULL,
  `CreateDate` datetime NOT NULL,
  `Type` int(11) NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `IsDeleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserId`, `FullName`, `UserName`, `Email`, `Password`, `PasswordPlane`, `CreateDate`, `Type`, `CreatedBy`, `IsDeleted`) VALUES
(1, 'Super Admin', 'admin', 'admin@test.com', '1B85209AFF373451DDD68CF9F9D42B1AFF0684E8', '123456', '2020-11-03 13:22:44', 1, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`BrandId`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CategoryId`);

--
-- Indexes for table `galley`
--
ALTER TABLE `galley`
  ADD PRIMARY KEY (`GalleryId`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`PageId`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`PartnerId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductId`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`ProjectId`);

--
-- Indexes for table `testemonials`
--
ALTER TABLE `testemonials`
  ADD PRIMARY KEY (`TestemonialsId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `BrandId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CategoryId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `galley`
--
ALTER TABLE `galley`
  MODIFY `GalleryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `PageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `PartnerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `ProjectId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `testemonials`
--
ALTER TABLE `testemonials`
  MODIFY `TestemonialsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
