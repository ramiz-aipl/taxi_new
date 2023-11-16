-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2023 at 10:06 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `glass_factory`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(40) COLLATE utf8_bin NOT NULL,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `nav_menu`
--

CREATE TABLE `nav_menu` (
  `menu_id` int(11) NOT NULL,
  `menu_title` varchar(50) NOT NULL,
  `menu_parent` int(11) NOT NULL,
  `menu_controller` varchar(50) NOT NULL,
  `menu_link` varchar(50) NOT NULL,
  `menu_icon` varchar(20) NOT NULL,
  `menu_role` text NOT NULL,
  `user_ids` text DEFAULT NULL,
  `menu_is_acrive` int(11) NOT NULL,
  `menu_index_no` int(11) NOT NULL,
  `menu_add_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nav_menu`
--

INSERT INTO `nav_menu` (`menu_id`, `menu_title`, `menu_parent`, `menu_controller`, `menu_link`, `menu_icon`, `menu_role`, `user_ids`, `menu_is_acrive`, `menu_index_no`, `menu_add_date`) VALUES
(1, 'Masters', 0, 'masters', 'masters', 'fa-file-text', '1', NULL, 1, 0, '2023-03-10 11:21:48'),
(2, 'Category', 1, 'category', 'category', 'fa-file-text', '1', '', 1, 0, '2023-03-10 11:22:05'),
(3, 'Product Type', 1, 'product-type', 'product-type', 'fa-file-text', '1', NULL, 1, 1, '2023-03-10 11:24:44'),
(4, 'Size', 1, 'size', 'size', 'fa-file-text', '1', NULL, 1, 2, '2023-03-10 11:25:00'),
(5, 'Color', 1, 'color', 'color', 'fa-file-text', '1', NULL, 1, 3, '2023-03-10 11:25:15'),
(6, 'Fabrication', 1, 'fabrication', 'fabrication', 'fa-file-text', '1', NULL, 1, 4, '2023-03-10 11:25:32'),
(7, 'Supplier', 1, 'supplier', 'supplier', 'fa-file-text', '1', NULL, 1, 5, '2023-03-10 11:25:45'),
(8, 'Product Group', 1, 'product-group', 'product-group', 'fa-file-text', '1', '', 1, 6, '2023-03-10 11:25:58'),
(9, 'Customer', 0, 'customer', 'customer', 'fa-file-text', '1', NULL, 1, 2, '2023-03-10 11:26:26'),
(10, 'Purchase', 0, 'purchase', 'purchase', 'fa-file-text', '1', NULL, 1, 3, '2023-03-10 11:26:40'),
(11, 'Quotation', 0, 'quotation1', 'quotation1', 'fa-file-text', '1,2', '', 1, 4, '2023-03-10 11:26:57'),
(12, 'Quotation', 11, 'quotation', 'quotation', 'fa-file-text', '1,2', '', 1, 0, '2023-03-10 11:27:16'),
(13, 'Fabrication Quotation', 11, 'fabrication-quotation', 'fabrication-quotation', 'fa-file-text', '1', NULL, 1, 1, '2023-03-10 11:27:37'),
(14, 'Invoice', 0, 'invoi', 'invoi', 'fa-file-text', '1', '', 1, 5, '2023-03-10 11:27:51'),
(15, 'Expenses', 0, 'expenses', 'expenses', 'fa-file-text', '1', NULL, 1, 6, '2023-03-10 11:28:26'),
(16, 'Reports', 0, 'reports', 'reports', 'fa-file-text', '1', NULL, 1, 7, '2023-03-10 11:28:44'),
(17, 'Stock Report', 16, 'stock-report', 'stock-report', 'fa-file-text', '1', NULL, 1, 0, '2023-03-10 11:29:03'),
(18, 'Purchase Report', 16, 'purchase-report', 'purchase-report', 'fa-file-text', '1', NULL, 1, 1, '2023-03-10 11:29:32'),
(19, 'Income Report', 16, 'income-report', 'income-report', 'fa-file-text', '1', NULL, 1, 2, '2023-03-10 11:29:58'),
(20, 'Role Rights', 0, 'nav-menu', 'nav-menu', 'fa-file-text', '1', NULL, 1, 1, '2023-03-10 11:31:21'),
(21, 'Employees', 0, 'employees', 'employees', 'fa-file-text', '1', NULL, 1, 0, '2023-03-10 11:54:39'),
(22, 'Suppiler Report', 16, 'suppiler-stock-report', 'suppiler-stock-report', '', '1', NULL, 1, 0, '2023-03-12 04:17:41'),
(23, 'Invoice', 14, 'invoice', 'invoice', 'fa-file-text', '1', '', 1, 0, '2023-03-12 10:43:35'),
(24, 'Fabrication Invoice', 14, 'fabrication-invoice', 'fabrication-invoice', '', '1', NULL, 1, 0, '2023-03-12 10:44:02'),
(25, 'Customer Statement', 16, 'customer-report', 'customer-report', 'fa-file-text', '1', NULL, 1, 0, '2023-03-19 12:25:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `CategoryID` int(11) NOT NULL,
  `CategoryName` varchar(255) NOT NULL,
  `CreatedBy` varchar(55) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  `ModifiedBy` varchar(55) NOT NULL,
  `ModifiedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`CategoryID`, `CategoryName`, `CreatedBy`, `CreatedOn`, `ModifiedBy`, `ModifiedOn`) VALUES
(1, '4mm', '1', '2023-02-25 01:01:15', '', '0000-00-00 00:00:00'),
(3, '5mm', '1', '2023-02-25 01:03:04', '1', '2023-02-25 18:21:19'),
(4, '6mm', '1', '2023-03-01 21:44:53', '', '0000-00-00 00:00:00'),
(5, '8mm', '1', '2023-03-01 21:44:59', '', '0000-00-00 00:00:00'),
(6, '10mm', '1', '2023-03-01 21:45:02', '', '0000-00-00 00:00:00'),
(7, '12mm', '1', '2023-03-01 21:45:10', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_color`
--

CREATE TABLE `tbl_color` (
  `ColorID` int(11) NOT NULL,
  `ColorName` varchar(255) NOT NULL,
  `CreatedBy` varchar(55) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  `ModifiedBy` varchar(55) NOT NULL,
  `ModifiedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_color`
--

INSERT INTO `tbl_color` (`ColorID`, `ColorName`, `CreatedBy`, `CreatedOn`, `ModifiedBy`, `ModifiedOn`) VALUES
(1, 'Bronze', '1', '2023-02-25 15:55:32', '1', '2023-02-25 15:56:21'),
(2, 'Black', '1', '2023-03-01 21:46:11', '', '0000-00-00 00:00:00'),
(3, 'White', '1', '2023-03-01 21:46:36', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `CustomerID` int(11) NOT NULL,
  `CustomerName` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `PendingBalance` decimal(10,2) NOT NULL,
  `PaidBalance` decimal(10,2) NOT NULL,
  `CreatedBy` varchar(55) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  `ModifiedBy` varchar(55) NOT NULL,
  `ModifiedOn` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`CustomerID`, `CustomerName`, `Phone`, `Location`, `PendingBalance`, `PaidBalance`, `CreatedBy`, `CreatedOn`, `ModifiedBy`, `ModifiedOn`) VALUES
(1, 'Ramiz Girach', '9624049054', 'JND', '64653.20', '159620.80', '1', '2023-03-18 23:28:23', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_expenses`
--

CREATE TABLE `tbl_expenses` (
  `ID` int(11) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Description` longtext NOT NULL,
  `Amount` decimal(10,2) NOT NULL,
  `Date` date NOT NULL,
  `CreatedBy` varchar(55) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  `ModifiedBy` varchar(55) NOT NULL,
  `ModifiedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fabrication`
--

CREATE TABLE `tbl_fabrication` (
  `FabricationID` int(11) NOT NULL,
  `FabricationName` varchar(255) NOT NULL,
  `Cost` decimal(10,2) NOT NULL,
  `CreatedBy` varchar(55) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  `ModifiedBy` varchar(55) NOT NULL,
  `ModifiedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_fabrication`
--

INSERT INTO `tbl_fabrication` (`FabricationID`, `FabricationName`, `Cost`, `CreatedBy`, `CreatedOn`, `ModifiedBy`, `ModifiedOn`) VALUES
(1, 'Abrasive', '1500.00', '1', '2023-02-25 16:00:32', '', '0000-00-00 00:00:00'),
(2, 'Draw', '1200.00', '1', '2023-02-25 16:02:06', '1', '2023-02-25 16:02:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoice`
--

CREATE TABLE `tbl_invoice` (
  `InvoiceID` int(11) NOT NULL,
  `InvoiceNumber` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `PaymentType` varchar(55) NOT NULL,
  `PaidAmount` decimal(10,2) NOT NULL,
  `PendingAmount` decimal(10,2) NOT NULL,
  `FabricationCost` decimal(10,2) NOT NULL,
  `StatusID` int(11) NOT NULL,
  `Total` decimal(10,2) NOT NULL,
  `CreatedBy` varchar(55) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  `ModifiedBy` varchar(55) NOT NULL,
  `ModifiedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_invoice`
--

INSERT INTO `tbl_invoice` (`InvoiceID`, `InvoiceNumber`, `Type`, `CustomerID`, `PaymentType`, `PaidAmount`, `PendingAmount`, `FabricationCost`, `StatusID`, `Total`, `CreatedBy`, `CreatedOn`, `ModifiedBy`, `ModifiedOn`) VALUES
(1, 'I-202300001', 'Product', 1, 'credit', '27600.00', '94.80', '0.00', 1, '27694.80', '1', '2023-03-29 01:23:24', '', '0000-00-00 00:00:00'),
(2, 'I-202300002', 'Product', 1, 'credit', '22000.00', '500.00', '0.00', 1, '22500.00', '1', '2023-03-29 01:25:03', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoice_dtl`
--

CREATE TABLE `tbl_invoice_dtl` (
  `InvoiceDTLID` int(11) NOT NULL,
  `InvoiceID` int(11) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `ProductTypeID` int(11) NOT NULL,
  `ColorID` int(11) NOT NULL,
  `SizeID` int(11) NOT NULL,
  `FabricationID` int(11) NOT NULL,
  `Qty` decimal(10,2) NOT NULL,
  `ActualMeterSquare` decimal(10,2) NOT NULL,
  `MeterSquare` decimal(10,2) NOT NULL,
  `TotalMeterSquareQty` decimal(10,2) NOT NULL,
  `ScrapMeterSquare` decimal(10,2) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `isFabrication` int(1) NOT NULL,
  `FabricationHeight` decimal(10,2) NOT NULL,
  `FabricationWidth` decimal(10,2) NOT NULL,
  `FabricationQty` decimal(10,2) NOT NULL,
  `FabricationPrice` decimal(10,2) NOT NULL,
  `ProductCost` decimal(10,2) NOT NULL,
  `FabricationCost` decimal(10,2) NOT NULL,
  `SubTotal` decimal(10,2) NOT NULL,
  `Total` decimal(10,2) NOT NULL,
  `CreatedBy` varchar(55) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  `ModifiedBy` varchar(55) NOT NULL,
  `ModifiedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_invoice_dtl`
--

INSERT INTO `tbl_invoice_dtl` (`InvoiceDTLID`, `InvoiceID`, `CategoryID`, `ProductTypeID`, `ColorID`, `SizeID`, `FabricationID`, `Qty`, `ActualMeterSquare`, `MeterSquare`, `TotalMeterSquareQty`, `ScrapMeterSquare`, `Price`, `isFabrication`, `FabricationHeight`, `FabricationWidth`, `FabricationQty`, `FabricationPrice`, `ProductCost`, `FabricationCost`, `SubTotal`, `Total`, `CreatedBy`, `CreatedOn`, `ModifiedBy`, `ModifiedOn`) VALUES
(1, 1, 3, 1, 1, 2, 1, '5.00', '18.45', '3.69', '18.45', '0.00', '1500.00', 1, '50.00', '60.00', '6.00', '1.50', '27675.00', '19.80', '0.00', '27694.80', '1', '2023-03-29 01:23:24', '', '0000-00-00 00:00:00'),
(2, 2, 3, 1, 1, 2, 0, '5.00', '18.45', '3.00', '15.00', '3.45', '1500.00', 0, '0.00', '0.00', '0.00', '0.00', '22500.00', '0.00', '0.00', '22500.00', '1', '2023-03-29 01:25:03', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_m_role`
--

CREATE TABLE `tbl_m_role` (
  `RoleID` int(11) NOT NULL,
  `RoleName` varchar(255) NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  `CreatedBy` varchar(55) NOT NULL,
  `ModifiedOn` datetime NOT NULL,
  `ModifiedBy` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_m_role`
--

INSERT INTO `tbl_m_role` (`RoleID`, `RoleName`, `isActive`, `CreatedOn`, `CreatedBy`, `ModifiedOn`, `ModifiedBy`) VALUES
(1, 'Admin', 1, '2023-03-10 19:23:44', '', '2023-03-10 19:23:44', ''),
(2, 'Employee', 1, '2023-03-10 19:23:44', '', '2023-03-10 19:23:44', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_group`
--

CREATE TABLE `tbl_product_group` (
  `ProductGroupID` int(11) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `ProductTypeID` int(11) NOT NULL,
  `ColorID` int(11) NOT NULL,
  `SizeID` int(11) NOT NULL,
  `CreatedBy` varchar(55) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  `ModifiedBy` varchar(55) NOT NULL,
  `ModifiedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product_group`
--

INSERT INTO `tbl_product_group` (`ProductGroupID`, `CategoryID`, `ProductTypeID`, `ColorID`, `SizeID`, `CreatedBy`, `CreatedOn`, `ModifiedBy`, `ModifiedOn`) VALUES
(1, 1, 1, 1, 1, '1', '2023-03-01 21:46:53', '', '0000-00-00 00:00:00'),
(2, 1, 1, 2, 1, '1', '2023-03-01 21:47:01', '', '0000-00-00 00:00:00'),
(3, 1, 1, 3, 1, '1', '2023-03-01 21:47:09', '', '0000-00-00 00:00:00'),
(4, 1, 2, 0, 1, '1', '2023-03-01 21:51:26', '', '0000-00-00 00:00:00'),
(5, 3, 1, 1, 1, '1', '2023-03-01 22:07:35', '', '0000-00-00 00:00:00'),
(6, 3, 2, 0, 1, '1', '2023-03-01 23:47:20', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_type`
--

CREATE TABLE `tbl_product_type` (
  `ProductTypeID` int(11) NOT NULL,
  `ProductTypeName` varchar(255) NOT NULL,
  `isSize` int(1) NOT NULL,
  `isColor` int(1) NOT NULL,
  `CreatedBy` varchar(55) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  `ModifiedBy` varchar(55) NOT NULL,
  `ModifiedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product_type`
--

INSERT INTO `tbl_product_type` (`ProductTypeID`, `ProductTypeName`, `isSize`, `isColor`, `CreatedBy`, `CreatedOn`, `ModifiedBy`, `ModifiedOn`) VALUES
(1, 'Glass', 1, 1, '1', '2023-02-25 15:31:11', '', '0000-00-00 00:00:00'),
(2, 'Mirror', 1, 0, '1', '2023-02-25 15:31:51', '', '0000-00-00 00:00:00'),
(4, 'Mirror1', 1, 0, '1', '2023-03-01 21:45:34', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purchase`
--

CREATE TABLE `tbl_purchase` (
  `PurchaseID` int(11) NOT NULL,
  `PurchaseNo` varchar(255) NOT NULL,
  `SupplierID` int(11) NOT NULL,
  `Total` decimal(10,2) NOT NULL,
  `PurhcaseType` varchar(255) NOT NULL,
  `StatusID` int(11) NOT NULL,
  `AmountPaid` decimal(10,2) NOT NULL,
  `PendingAmount` decimal(10,2) NOT NULL,
  `CreatedBy` varchar(55) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  `ModifiedBy` varchar(55) NOT NULL,
  `ModifiedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_purchase`
--

INSERT INTO `tbl_purchase` (`PurchaseID`, `PurchaseNo`, `SupplierID`, `Total`, `PurhcaseType`, `StatusID`, `AmountPaid`, `PendingAmount`, `CreatedBy`, `CreatedOn`, `ModifiedBy`, `ModifiedOn`) VALUES
(1, '', 1, '158400.00', 'credit', 1, '158000.00', '400.00', '1', '2023-03-29 01:20:07', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purchase_dtl`
--

CREATE TABLE `tbl_purchase_dtl` (
  `PurchaseDTLID` int(11) NOT NULL,
  `PurchaseID` int(11) NOT NULL,
  `SupplierID` int(11) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `ProductTypeID` int(11) NOT NULL,
  `ColorID` int(11) NOT NULL,
  `SizeID` int(11) NOT NULL,
  `Qty` decimal(10,2) NOT NULL,
  `TotalMeterSquare` decimal(10,2) NOT NULL,
  `Cost` decimal(10,2) NOT NULL,
  `Total` decimal(10,2) NOT NULL,
  `PurhcaseType` varchar(255) NOT NULL,
  `CreatedBy` varchar(55) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  `ModifiedBy` varchar(55) NOT NULL,
  `ModifiedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_purchase_dtl`
--

INSERT INTO `tbl_purchase_dtl` (`PurchaseDTLID`, `PurchaseID`, `SupplierID`, `CategoryID`, `ProductTypeID`, `ColorID`, `SizeID`, `Qty`, `TotalMeterSquare`, `Cost`, `Total`, `PurhcaseType`, `CreatedBy`, `CreatedOn`, `ModifiedBy`, `ModifiedOn`) VALUES
(1, 1, 0, 1, 1, 1, 1, '10.00', '68.70', '1500.00', '103050.00', '', '1', '2023-03-29 01:20:07', '', '0000-00-00 00:00:00'),
(2, 1, 0, 3, 1, 1, 2, '10.00', '36.90', '1500.00', '55350.00', '', '1', '2023-03-29 01:20:07', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quotation`
--

CREATE TABLE `tbl_quotation` (
  `QuotationID` int(11) NOT NULL,
  `QuotationNumber` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `PaymentType` varchar(55) NOT NULL,
  `PaidAmount` decimal(10,2) NOT NULL,
  `PendingAmount` decimal(10,2) NOT NULL,
  `Total` decimal(10,2) NOT NULL,
  `FabricationCost` decimal(10,2) NOT NULL,
  `StatusID` int(11) NOT NULL,
  `CreatedBy` varchar(55) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  `ModifiedBy` varchar(55) NOT NULL,
  `ModifiedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_quotation`
--

INSERT INTO `tbl_quotation` (`QuotationID`, `QuotationNumber`, `Type`, `CustomerID`, `PaymentType`, `PaidAmount`, `PendingAmount`, `Total`, `FabricationCost`, `StatusID`, `CreatedBy`, `CreatedOn`, `ModifiedBy`, `ModifiedOn`) VALUES
(1, 'Q-202300001', 'Product', 1, 'credit', '27600.00', '94.80', '27694.80', '0.00', 2, '1', '2023-03-29 01:22:56', '', '0000-00-00 00:00:00'),
(2, 'Q-202300002', 'Product', 1, 'credit', '22000.00', '500.00', '22500.00', '0.00', 2, '1', '2023-03-29 01:25:02', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quotation_dtl`
--

CREATE TABLE `tbl_quotation_dtl` (
  `QuotationDTLID` int(11) NOT NULL,
  `QuotationID` int(11) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `ProductTypeID` int(11) NOT NULL,
  `ColorID` int(11) NOT NULL,
  `SizeID` int(11) NOT NULL,
  `FabricationID` int(11) NOT NULL,
  `Qty` decimal(10,2) NOT NULL,
  `ActualMeterSquare` decimal(10,2) NOT NULL,
  `MeterSquare` decimal(10,2) NOT NULL,
  `TotalMeterSquareQty` decimal(10,2) NOT NULL,
  `ScrapMeterSquare` decimal(10,2) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `isFabrication` int(1) NOT NULL,
  `FabricationHeight` decimal(10,2) NOT NULL,
  `FabricationWidth` decimal(10,2) NOT NULL,
  `FabricationQty` decimal(10,2) NOT NULL,
  `FabricationPrice` decimal(10,2) NOT NULL,
  `ProductCost` decimal(10,2) NOT NULL,
  `FabricationCost` decimal(10,2) NOT NULL,
  `SubTotal` decimal(10,2) NOT NULL,
  `Total` decimal(10,2) NOT NULL,
  `CreatedBy` varchar(55) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  `ModifiedBy` varchar(55) NOT NULL,
  `ModifiedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_quotation_dtl`
--

INSERT INTO `tbl_quotation_dtl` (`QuotationDTLID`, `QuotationID`, `CategoryID`, `ProductTypeID`, `ColorID`, `SizeID`, `FabricationID`, `Qty`, `ActualMeterSquare`, `MeterSquare`, `TotalMeterSquareQty`, `ScrapMeterSquare`, `Price`, `isFabrication`, `FabricationHeight`, `FabricationWidth`, `FabricationQty`, `FabricationPrice`, `ProductCost`, `FabricationCost`, `SubTotal`, `Total`, `CreatedBy`, `CreatedOn`, `ModifiedBy`, `ModifiedOn`) VALUES
(1, 1, 3, 1, 1, 2, 1, '5.00', '18.45', '3.69', '18.45', '0.00', '1500.00', 1, '50.00', '60.00', '6.00', '1.50', '27675.00', '19.80', '0.00', '27694.80', '1', '2023-03-29 01:22:56', '', '0000-00-00 00:00:00'),
(2, 2, 3, 1, 1, 2, 0, '5.00', '18.45', '3.00', '15.00', '3.45', '1500.00', 0, '0.00', '0.00', '0.00', '0.00', '22500.00', '0.00', '0.00', '22500.00', '1', '2023-03-29 01:25:02', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_size`
--

CREATE TABLE `tbl_size` (
  `SizeID` int(11) NOT NULL,
  `Height` decimal(10,2) NOT NULL,
  `Width` decimal(10,2) NOT NULL,
  `MeterSquare` decimal(10,2) NOT NULL,
  `CreatedBy` varchar(55) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  `ModifiedBy` varchar(55) NOT NULL,
  `ModifiedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_size`
--

INSERT INTO `tbl_size` (`SizeID`, `Height`, `Width`, `MeterSquare`, `CreatedBy`, `CreatedOn`, `ModifiedBy`, `ModifiedOn`) VALUES
(1, '2.14', '3.21', '6.87', '1', '2023-02-25 15:47:21', '1', '2023-03-18 15:05:58'),
(2, '1.15', '3.21', '3.69', '1', '2023-03-01 21:46:03', '1', '2023-03-18 15:05:51'),
(3, '10.60', '100.00', '1060.00', '1', '2023-03-18 15:04:58', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `StatusID` int(11) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `CreatedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`StatusID`, `Status`, `CreatedOn`) VALUES
(1, 'Draft', '2023-03-09 17:53:23'),
(2, 'Converted', '2023-03-09 17:53:30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stock`
--

CREATE TABLE `tbl_stock` (
  `StockID` int(11) NOT NULL,
  `PurchaseID` int(11) NOT NULL,
  `SupplierID` int(11) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `ProductTypeID` int(11) NOT NULL,
  `ColorID` int(11) NOT NULL,
  `SizeID` int(11) NOT NULL,
  `Qty` decimal(10,2) NOT NULL,
  `TotalMeterSquare` decimal(10,2) NOT NULL,
  `ScrapMeterSquare` decimal(10,2) NOT NULL,
  `CreatedBy` varchar(55) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  `ModifiedBy` varchar(55) NOT NULL,
  `ModifiedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_stock`
--

INSERT INTO `tbl_stock` (`StockID`, `PurchaseID`, `SupplierID`, `CategoryID`, `ProductTypeID`, `ColorID`, `SizeID`, `Qty`, `TotalMeterSquare`, `ScrapMeterSquare`, `CreatedBy`, `CreatedOn`, `ModifiedBy`, `ModifiedOn`) VALUES
(1, 1, 1, 1, 1, 1, 1, '10.00', '68.70', '0.00', '1', '2023-03-29 01:20:07', '', '0000-00-00 00:00:00'),
(2, 2, 1, 3, 1, 1, 2, '0.00', '3.45', '3.45', '1', '2023-03-29 01:20:07', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_suppiler_stock`
--

CREATE TABLE `tbl_suppiler_stock` (
  `SuppilerStockID` int(11) NOT NULL,
  `PurchaseID` int(11) NOT NULL,
  `SupplierID` int(11) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `ProductTypeID` int(11) NOT NULL,
  `ColorID` int(11) NOT NULL,
  `SizeID` int(11) NOT NULL,
  `Qty` decimal(10,2) NOT NULL,
  `TotalMeterSquare` decimal(10,2) NOT NULL,
  `CreatedBy` varchar(55) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  `ModifiedBy` varchar(55) NOT NULL,
  `ModifiedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_suppiler_stock`
--

INSERT INTO `tbl_suppiler_stock` (`SuppilerStockID`, `PurchaseID`, `SupplierID`, `CategoryID`, `ProductTypeID`, `ColorID`, `SizeID`, `Qty`, `TotalMeterSquare`, `CreatedBy`, `CreatedOn`, `ModifiedBy`, `ModifiedOn`) VALUES
(1, 1, 1, 1, 1, 1, 1, '10.00', '68.70', '1', '2023-03-29 01:20:07', '', '0000-00-00 00:00:00'),
(2, 2, 1, 3, 1, 1, 2, '10.00', '36.90', '1', '2023-03-29 01:20:07', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier`
--

CREATE TABLE `tbl_supplier` (
  `SupplierID` int(11) NOT NULL,
  `SupplierName` varchar(255) NOT NULL,
  `SupplierMobileNo` varchar(255) NOT NULL,
  `SupplierLocation` varchar(255) NOT NULL,
  `PendingBalance` decimal(10,2) NOT NULL,
  `PaidBalance` decimal(10,2) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  `CreatedBy` varchar(55) NOT NULL,
  `ModifiedOn` datetime NOT NULL,
  `ModifiedBy` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_supplier`
--

INSERT INTO `tbl_supplier` (`SupplierID`, `SupplierName`, `SupplierMobileNo`, `SupplierLocation`, `PendingBalance`, `PaidBalance`, `CreatedOn`, `CreatedBy`, `ModifiedOn`, `ModifiedBy`) VALUES
(1, 'Ramiz', '9624049054', 'Junagadh', '53650.00', '528500.00', '2023-03-18 23:13:05', '1', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `first_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `last_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `mobile_no` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT 1,
  `EmpCode` int(11) NOT NULL,
  `banned` tinyint(1) NOT NULL DEFAULT 0,
  `ban_reason` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `new_password_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `new_email_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` datetime NOT NULL DEFAULT current_timestamp(),
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `username`, `first_name`, `last_name`, `mobile_no`, `email`, `password`, `activated`, `EmpCode`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES
(1, 1, 'admin', 'Glass', 'Admin', '', 'admin@glass_factory.com', '$2a$08$H3MtPhVzEdRaTx9gebCNS.e4z1CJcNGQv.A/IrfAiKmeI4u5hXVsO', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2023-03-29 00:46:15', '2018-01-01 07:32:12', '2023-03-28 19:16:15'),
(7, 2, 'Rishit', 'Rishit', 'J', '', 'rj@gmail.com', '$2a$08$HNF5ZQcEBvH/dhLG14MwGOM7ZMMsU0xSUdeI.GiV2rQAOr3WF5Ssa', 1, 12, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2023-02-03 14:46:28', '2023-02-03 14:22:12', '2023-02-03 09:16:28'),
(18, 2, 'Hatim', 'Hatim', 'Musani', '', 'hm@gmail.com', '$2a$08$2EhaHf.gZ4mpzGs5FMyiGesOyI5LVoS6949e8QLkCT55V6PcvkAUO', 1, 41, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2023-02-03 14:20:41', '2023-01-03 15:21:42', '2023-02-03 08:50:41'),
(19, 2, 'ramiz@employee.com', 'Ramiz', 'Employee', '9624049054', 'ramiz@employee.com', '$2a$08$BguqwX9XnU./MnBESsd7IOS9MDhe/4hf4QPRrnL4gI0yLZwKI25Y.', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2023-03-11 00:06:50', '2023-03-10 23:57:26', '2023-03-10 18:36:50');

-- --------------------------------------------------------

--
-- Table structure for table `user_autologin`
--

CREATE TABLE `user_autologin` (
  `key_id` char(32) COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `country` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `user_id`, `country`, `website`) VALUES
(1, 1, NULL, NULL),
(2, 2, NULL, NULL),
(3, 3, NULL, NULL),
(4, 2, NULL, NULL),
(5, 3, NULL, NULL),
(6, 4, NULL, NULL),
(7, 2, NULL, NULL),
(8, 2, NULL, NULL),
(9, 3, NULL, NULL),
(10, 4, NULL, NULL),
(11, 5, NULL, NULL),
(12, 6, NULL, NULL),
(13, 7, NULL, NULL),
(14, 8, NULL, NULL),
(15, 9, NULL, NULL),
(16, 10, NULL, NULL),
(17, 11, NULL, NULL),
(18, 12, NULL, NULL),
(19, 13, NULL, NULL),
(20, 14, NULL, NULL),
(21, 15, NULL, NULL),
(22, 7, NULL, NULL),
(23, 12, NULL, NULL),
(24, 7, NULL, NULL),
(25, 8, NULL, NULL),
(26, 9, NULL, NULL),
(27, 10, NULL, NULL),
(28, 11, NULL, NULL),
(29, 12, NULL, NULL),
(30, 13, NULL, NULL),
(31, 14, NULL, NULL),
(32, 15, NULL, NULL),
(33, 16, NULL, NULL),
(34, 17, NULL, NULL),
(35, 18, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nav_menu`
--
ALTER TABLE `nav_menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `tbl_color`
--
ALTER TABLE `tbl_color`
  ADD PRIMARY KEY (`ColorID`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `tbl_expenses`
--
ALTER TABLE `tbl_expenses`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_fabrication`
--
ALTER TABLE `tbl_fabrication`
  ADD PRIMARY KEY (`FabricationID`);

--
-- Indexes for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  ADD PRIMARY KEY (`InvoiceID`);

--
-- Indexes for table `tbl_invoice_dtl`
--
ALTER TABLE `tbl_invoice_dtl`
  ADD PRIMARY KEY (`InvoiceDTLID`);

--
-- Indexes for table `tbl_m_role`
--
ALTER TABLE `tbl_m_role`
  ADD PRIMARY KEY (`RoleID`);

--
-- Indexes for table `tbl_product_group`
--
ALTER TABLE `tbl_product_group`
  ADD PRIMARY KEY (`ProductGroupID`);

--
-- Indexes for table `tbl_product_type`
--
ALTER TABLE `tbl_product_type`
  ADD PRIMARY KEY (`ProductTypeID`);

--
-- Indexes for table `tbl_purchase`
--
ALTER TABLE `tbl_purchase`
  ADD PRIMARY KEY (`PurchaseID`);

--
-- Indexes for table `tbl_purchase_dtl`
--
ALTER TABLE `tbl_purchase_dtl`
  ADD PRIMARY KEY (`PurchaseDTLID`);

--
-- Indexes for table `tbl_quotation`
--
ALTER TABLE `tbl_quotation`
  ADD PRIMARY KEY (`QuotationID`);

--
-- Indexes for table `tbl_quotation_dtl`
--
ALTER TABLE `tbl_quotation_dtl`
  ADD PRIMARY KEY (`QuotationDTLID`);

--
-- Indexes for table `tbl_size`
--
ALTER TABLE `tbl_size`
  ADD PRIMARY KEY (`SizeID`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`StatusID`);

--
-- Indexes for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  ADD PRIMARY KEY (`StockID`);

--
-- Indexes for table `tbl_suppiler_stock`
--
ALTER TABLE `tbl_suppiler_stock`
  ADD PRIMARY KEY (`SuppilerStockID`);

--
-- Indexes for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  ADD PRIMARY KEY (`SupplierID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_autologin`
--
ALTER TABLE `user_autologin`
  ADD PRIMARY KEY (`key_id`,`user_id`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `nav_menu`
--
ALTER TABLE `nav_menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_color`
--
ALTER TABLE `tbl_color`
  MODIFY `ColorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_expenses`
--
ALTER TABLE `tbl_expenses`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_fabrication`
--
ALTER TABLE `tbl_fabrication`
  MODIFY `FabricationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  MODIFY `InvoiceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_invoice_dtl`
--
ALTER TABLE `tbl_invoice_dtl`
  MODIFY `InvoiceDTLID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_m_role`
--
ALTER TABLE `tbl_m_role`
  MODIFY `RoleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_product_group`
--
ALTER TABLE `tbl_product_group`
  MODIFY `ProductGroupID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_product_type`
--
ALTER TABLE `tbl_product_type`
  MODIFY `ProductTypeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_purchase`
--
ALTER TABLE `tbl_purchase`
  MODIFY `PurchaseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_purchase_dtl`
--
ALTER TABLE `tbl_purchase_dtl`
  MODIFY `PurchaseDTLID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_quotation`
--
ALTER TABLE `tbl_quotation`
  MODIFY `QuotationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_quotation_dtl`
--
ALTER TABLE `tbl_quotation_dtl`
  MODIFY `QuotationDTLID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_size`
--
ALTER TABLE `tbl_size`
  MODIFY `SizeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `StatusID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  MODIFY `StockID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_suppiler_stock`
--
ALTER TABLE `tbl_suppiler_stock`
  MODIFY `SuppilerStockID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  MODIFY `SupplierID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
