CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_cat` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_qty` int(11) NOT NULL,
  `item_desc` text NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_keywords` text NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_cat`, `item_name`, `item_price`, `item_qty`, `item_desc`, `item_image`, `item_keywords`, `item_register`) VALUES
(1, 'addidas', 'jersey', 'AC Milan 2022/2023 Home Football Jersey', 152.00, 50, 'Its a good ', './assets/product_img/ac.jpg', 'jersey', '2023-01-28 11:08:57'),
(2, 'nike', 'jersey', 'Arsenal 2022/2023 Home Football Jersey', 122.00, 50, 'Its a good ', './assets/product_img/arsenal.png', 'jersey', '2023-01-28 11:08:57'),
(3, 'puma', 'jersey', 'Bacenola 2022/2023 Home Football Jersey', 122.00, 50, 'Its a good ', './assets/product_img/bacelona.jpg', 'jersey', '2023-01-28 11:08:57'),
(4, 'puma',  'jersey', 'Bayarn 2022/2023 Home Football Jersey', 122.00, 50, 'Its a good ', './assets/product_img/bayarn.jpg', 'jersey', '2023-01-28 11:08:57'),
(5, 'nike',  'jersey', 'Real Madrid 2022/2023 Home Football Jersey', 122.00, 50, 'Its a good ', './assets/product_img/realmadrid.png', 'jersey', '2023-01-28 11:08:57'),
(6, 'addidas',  'jersey', 'Ajax 2022/2023 Home Football Jersey', 122.00, 50, 'Its a good ', './assets/product_img/ajax.png', 'jersey', '2023-01-28 11:08:57');

-- --------------------------------------------------------
