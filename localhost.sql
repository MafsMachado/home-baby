-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 25, 2022 at 10:51 AM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `home&baby`
--
CREATE DATABASE IF NOT EXISTS `home&baby` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `home&baby`;

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `ID` int(11) NOT NULL,
  `categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`ID`, `categoria`) VALUES
(1, 'Home'),
(2, 'Baby');

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `ID` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `telefone` int(13) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`ID`, `name`, `telefone`, `email`, `password`) VALUES
(3, 'Mafalda', NULL, 'mafalda@mafs.pt', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5'),
(4, 'Mafalda', NULL, 'mafalda@mafs.pt', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5'),
(8, 'Admin', NULL, 'admin@home&baby.com', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918'),
(9, 'mafs', NULL, 'mafs@mafs.pt', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4'),
(10, 'Rodrigo', NULL, 'rodrigo@mail.pt', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4');

-- --------------------------------------------------------

--
-- Table structure for table `compra`
--

CREATE TABLE `compra` (
  `ID` int(11) NOT NULL,
  `ID_cliente` int(11) DEFAULT NULL,
  `preco_total` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `compra_produto`
--

CREATE TABLE `compra_produto` (
  `ID_compra` int(11) NOT NULL,
  `ID_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `favoritos`
--

CREATE TABLE `favoritos` (
  `ID` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `id_produto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `marcas`
--

CREATE TABLE `marcas` (
  `ID` int(11) NOT NULL,
  `marca` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `marcas`
--

INSERT INTO `marcas` (`ID`, `marca`) VALUES
(1, 'Mushie'),
(2, 'H&M'),
(3, 'La Redoute');

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

CREATE TABLE `produtos` (
  `ID` int(11) NOT NULL,
  `titulo` varchar(500) DEFAULT NULL,
  `ID_marca` int(11) NOT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  `descricao` varchar(1500) DEFAULT NULL,
  `ID_categoria` int(11) NOT NULL,
  `ID_sub_categoria` int(11) DEFAULT NULL,
  `ID_tipo_produto` int(11) NOT NULL,
  `img1` varchar(300) DEFAULT NULL,
  `img2` varchar(300) DEFAULT NULL,
  `img3` varchar(300) DEFAULT NULL,
  `img4` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produtos`
--

INSERT INTO `produtos` (`ID`, `titulo`, `ID_marca`, `preco`, `descricao`, `ID_categoria`, `ID_sub_categoria`, `ID_tipo_produto`, `img1`, `img2`, `img3`, `img4`) VALUES
(1, 'Alphabet Floral Poster', 1, '22.00', 'Introduce your child to their ABCs with this print that\'s awash in soft colors and soothing floral prints. Designed in Sweden, it\'s part of our series of prints that combine whimsical themes and soft colors with modern design.', 2, 7, 1, 'img/product baby/baby_decor_poster1_1.webp', 'img/product baby/baby_decor_poster1_2.webp', NULL, NULL),
(2, 'Feelings Poster', 1, '22.00', 'Help your child begin to understand how others are feeling and recognize their own emotions with this charming, beautifully illustrated poster. Designed in Sweden, it\'s part of our series of prints that combine whimsical themes and soft colors with modern design.', 2, 7, 1, 'img/product baby/baby_decor_poster2_1.webp', 'img/product baby/baby_decor_poster2_2.webp', NULL, NULL),
(3, 'Liu Solid Oak Console Desk', 3, '499.00', 'A thick top (4cm) and shallow depth characterise this Chinese-inspired console desk.\r\nProduct Details\r\n •  Solid oak\r\n •  Clear polyurethane varnish finish\r\n •  2 drawers\r\n\r\nDimensions\r\n •  L140 x H76 x D40cm', 1, 2, 2, 'img/product home/home_furn_console1_1.webp', 'img/product home/home_furn_console1_2.webp', 'img/product home/home_furn_console1_3.webp', NULL),
(4, 'Olaga Oak Console Table', 3, '899.00', 'With a thick top, a solid structure and a quirky winged base, the Olaga console table has a strong personality that\'s softened by the light shade of oak..\r\nProduct Details\r\n •  Top and legs in solid FSC® oak, nitrocellulose finish •  Underside of the top in FSC® oak veneered MDF •  Requires assembly\r\n •  Responsible product - Choosing FSC® certified wood means opting for more responsible furniture. This wood comes from forests that are well managed from an environmental, social and economic perspective. By purchasing products carrying this label, you are helping in the preservation of forests. For a better life today and in the years to come.\r\nDimensions\r\n •  Width: 200cm •  Height: 75cm •  Depth: 33cm •  Height of legs: 67cm', 1, 2, 2, 'img/product home/home_furn_console2_1.webp', 'img/product home/home_furn_console2_2.webp', 'img/product home/home_furn_console2_3.webp', NULL),
(5, 'Magosia Solid Walnut Console Table', 3, '375.00', 'In solid, shiny walnut, with sleek tapered legs, the magnificent Magosia console table is slim, stylish and perfect for the hallway or behind a sofa\r\nProduct Details:\r\n •  In solid walnut with a polyurethane finish\r\n •  Stiletto style legs.\r\n •  Delivered feet to screw, instructions enclosed.\r\n\r\nDimensions:\r\n •  L125 x H78 x D35 cm.', 1, 2, 2, 'img/product home/home_furn_console3_1.webp', 'img/product home/home_furn_console3_2.webp', 'img/product home/home_furn_console3_3.webp', NULL),
(6, 'Firmin Oak & Metal 2-Drawer Console Table', 3, '499.00', 'The Firmin collection is a modern representation of an industrial style. Elegant and refined, this 2-drawer console tis the perfect combination of black metal and solid oak. Designed by La Redoute Interiors.\r\nProduct Details\r\n •  FSC © certified solid oak cabinet\r\n •  Colourless nitrocellulose varnish finish\r\n •  Black painted steel feet, epoxy finish\r\n •  Plastic floor pads\r\n •  Sold pre-assembled (legs require attaching)', 1, 2, 2, 'img/product home/home_furn_console4_1.webp', 'img/product home/home_furn_console4_2.webp', 'img/product home/home_furn_console4_3.webp', NULL),
(7, 'Malora Oak & Woven Panel Console Table', 3, '450.00', 'The Malora console in oak with weaving elegantly combines curves, oak and artisanal weaving.\r\n\r\nProduct Details\r\n •  2 drawers\r\n •  Curved / tapered solid oak base\r\n •  Upper tabletop: bevelled edge in solid oak and centre panel in oak veneered MDF\r\n •  NC matt varnish finish\r\n •  Braided paper cord bottom tray\r\n •  Oak knob handles\r\n •  Felt pads on feet', 1, 2, 2, 'img/product home/home_furn_console5_1.webp', 'img/product home/home_furn_console5_2.webp', 'img/product home/home_furn_console5_3.webp', NULL),
(10, 'Lunja Console Table with 1 Drawer and 2 Shelves', 3, '260.00', 'The Lunja console table. Part of the complete Lunja line of coordinated living room furniture in solid pine, sold on La Redoute, this classic sideboard provides plenty of storage options..\r\nDescription:\r\n •  1 large drawer\r\n •  2 compartments\r\n •  Shell-shaped handles.\r\n •  Stylishly simple base, 6 cm high\r\n •  Beautifully finished\r\n\r\nFeatures :\r\n •  Solid pine with delicate teak-effect staining and wax finish\r\n •  Aged metal handles\r\n •  MDF base\r\n\r\nSee the matching sideboard and other items from the Lunja collection online at laredoute.', 1, 2, 2, 'img/product home/home_furn_console6_1.webp', 'img/product home/home_furn_console6_2.webp', 'img/product home/home_furn_console6_3.webp', NULL),
(11, 'Galb Table Armchair', 3, '350.00', 'Available in solid oak or walnut, our Galb armchair has the makings of a contemporary classic. Chic, refined and refreshingly fuss-free, it\'s also ultra comfortable thanks to its smoothly curved lines.\r\nProduct Details:\r\n •  Walnut or oak veneer multiply seat.\r\n •  Supplied ready assembled', 1, 2, 3, 'img/product home/home_furn_chairs1_1.webp', 'img/product home/home_furn_chairs1_2.webp', 'img/product home/home_furn_chairs1_3.webp', 'img/product home/home_furn_chairs1_4.webp'),
(12, 'Pipo Solid Oak and Weaving Table Armchair', 3, '299.00', 'Worked in solid oak, inspired by Scandinavian design. The Pipo table armchair is ready to welcome you with ease. Authentic: its seat is hand-woven in paper cord. Get comfortable. \r\nCreated by La Redoute Interiors.\r\n\r\nProduct Details\r\n •  Structure and backrest in solid oak, nitrocellulose varnish finish\r\n •  Seat structure in solid oak and hand-woven paper cord\r\n •  Felt pads\r\n •  Sold pre-assembled', 1, 2, 3, 'img/product home/home_furn_chairs2_1.webp', 'img/product home/home_furn_chairs2_2.webp', 'img/product home/home_furn_chairs2_3.webp', NULL),
(13, 'Marais Oak Table Armchair by E. Gallina', 3, '350.00', 'Designed by Emmanuel Gallina exclusively for AM.PM, the Marais chair is a contemporary table armchair with a simple, assertive style.\r\nA true original, this 3-legged designer chair has a softly scooped seat and bevelled edges for comfort and character.\r\n\r\nMade from solid oak, it\'s a timeless and unique piece that\'s compatible with most dining tables.\r\n\r\nProduct Details\r\n •  In solid oak with polyurethane finish\r\n •  Back in plywood\r\n •  3 legs\r\n •  Hollow seat', 1, 2, 3, 'img/product home/home_furn_chairs3_1.webp', 'img/product home/home_furn_chairs3_2.webp', 'img/product home/home_furn_chairs3_3.webp', NULL),
(14, 'Andre 160cm Solid Oak & Woven Cord Bench', 3, '450.00', 'An authentic style, a taste for well-done work, natural materials ... the Andre range combines solid oak and hand-woven paper cord. A simple and raw design.\r\nCreated by La Redoute Interiors.\r\n\r\nProduct Details\r\n •  Structure and legs in FSC® certified solid oak, nitrocellulose varnish finish\r\n •  Seating crafted in braided paper rope\r\n •  Plastic feet pads\r\n •  Sold pre-assembled', 1, 2, 3, 'img/product home/home_furn_chairs4_1.webp', 'img/product home/home_furn_chairs4_2.webp', 'img/product home/home_furn_chairs4_3.webp', NULL),
(15, 'Set of 2 Oak Wooden Dining Chairs', 3, '219.00', 'This high-quality chair is made from solid oak with a partial veneer. The unique shape works perfectly with the matching curved bench and dining table in the same range.\r\n\r\nSelf Assembly Required.\r\n\r\nProduct Dimensions: 56cmx43cmx81.5cm\r\nSeat Height: 45.7cm\r\nPlease remember to measure your available space before ordering', 1, 2, 3, 'img/product home/home_furn_chairs5_1.webp', 'img/product home/home_furn_chairs5_2.webp', NULL, NULL),
(16, 'Kioto Mid-Height Oak and Wicker Bar Stool', 3, '160.00', 'A Bohemian spirit inspired by Japanese design: The Kioto stool combines solid oak wood with handmade braided paper cord weaving. Ideal for bringing a hand-made look to your home.\r\nCreated by La Redoute Interiors.\r\n\r\nProduct Details\r\n •  Solid oak structure with clear acrylic varnish finish\r\n •  Seat in hand-braided paper cord\r\n •  For bar table or central island height +/- 90cm\r\n •  Supplied ready assembled', 1, 2, 3, 'img/product home/home_furn_chairs6_1.webp', 'img/product home/home_furn_chairs6_2.webp', 'img/product home/home_furn_chairs6_3.webp', NULL),
(17, 'Piero Rounded Oak Sideboard', 3, '799.00', 'A Scandinavian style and generous dimensions: Presenting Piero: a sideboard in solid oak with practical storage space for everyday crockery. Designed by La Redoute Interiors.\r\n\r\nProduct Details\r\n •  Cupboard in solid oak\r\n •  Oak veneered MDF cabinet and doors, nitrocellulose varnish finish.\r\n •  3 doors, 6 niches, 2 vertical dividers\r\n •  3 adjustable & removable shelves\r\n •  Soft closing hinges\r\n •  Oak veneered rubberwood legs\r\n •  Sold pre-assembled.', 1, 2, 4, 'img/product home/home_furn_sideboard1_1.webp', 'img/product home/home_furn_sideboard1_2.webp', 'img/product home/home_furn_sideboard1_3.webp', NULL),
(18, 'Lupin 3-Door Woven Oak Sideboard', 3, '850.00', 'All the beauty and authenticity of handmade furniture. Inspired by the Nordic style, the Lupine sideboard has doors in handcrafted oak weaving, according to traditional know-how. Its light wood brings a warm note to an interior.\r\nCreated by La Redoute Interiors.\r\n\r\nProduct Details\r\n •  Oak veneered particle board cabinet.\r\n •  Solid oak legs, door frames and handles\r\n •  Matt polyurethane varnish finish\r\n •  Hand-woven oak leaf doors\r\n •  3 doors, 3 removable and adjustable shelves, 6 niches\r\n •  Made in Europe.\r\n •  Sold pre-assembled.', 1, 2, 4, 'img/product home/home_furn_sideboard2_1.webp', 'img/product home/home_furn_sideboard2_2.webp', 'img/product home/home_furn_sideboard2_3.webp', 'img/product home/home_furn_sideboard2_4.webp'),
(19, 'Palma Solid Teak Cabinet', 3, '1350.00', 'The Palma solid teak cabinet. This charming cabinet will bring a touch of exoticism to your home with its wicker cupboard door panels.\r\nProduct Details\r\n •  Solid teak from sustainably managed forests (FSC-N003174)\r\n •  Slatted lower shelf\r\n •  2 sliding doors with rattan weave\r\n •  1 central vertical divider\r\n •  4 removable and adjustable shelves\r\n •  6 compartments\r\n •  2 drawers\r\n •  Drawers on wooden slides\r\n •  Made in Indonesia', 1, 2, 4, 'img/product home/home_furn_sideboard3_1.webp', 'img/product home/home_furn_sideboard3_2.webp', 'img/product home/home_furn_sideboard3_3.webp', NULL),
(20, 'Croisille Vintage-Style Rattan & Oak Sideboard', 3, '750.00', 'This vintage-style sideboard brings a classic retro feel to your home. Equipped with 2 doors, 3 drawers, it offers a very practical storage solution in the hallway, living room or bedroom.\r\nProduct Details\r\n •  In oak and rattan\r\n •  Unit in oak-veneered particle board with medium oak stain and nitrocellulose varnish finish\r\n •  Decoration of drawers in woven rattan cane\r\n •  2 doors, soft closing hinges\r\n •  4 compartments\r\n •  3 drawers on wooden slides: 2 small and 1 large drawer\r\n •  1 vertical divider\r\n •  2 fixed shelves\r\n •  Solid oak legs\r\n •  Can be fixed to the wall\r\n •  Sold pre-assembled (only base requires fixing)', 1, 2, 4, 'img/product home/home_furn_sideboard4_1.webp', 'img/product home/home_furn_sideboard4_2.webp', 'img/product home/home_furn_sideboard4_3.webp', 'img/product home/home_furn_sideboard4_4.webp'),
(21, 'Cannelo Oak Veneered Sideboard', 3, '999.00', 'Raised oak fronts, fluted feet, generous dimensions. The Cannelo sideboard offers multiple storage spaces for your crockery, cutlery and table linen. The future centerpiece of your home.\r\n\r\nCreated by La Redoute Interiors.\r\n\r\nProduct Details\r\n •  Pre-assembled cabinet in particle board and oak veneered MDF\r\n •  2 doors, soft closing hinges\r\n •  2 fixed shelves\r\n •  4 compartments\r\n •  3 drawers on wooden slides\r\n •  Fluted legs in solid oak\r\n •  Supplied ready assembled', 1, 2, 4, 'img/product home/home_furn_sideboard5_1.webp', 'img/product home/home_furn_sideboard5_2.webp', 'img/product home/home_furn_sideboard5_3.webp', 'img/product home/home_furn_sideboard5_4.webp'),
(22, 'Gabin Solid Pine & Cane Sideboard', 3, '550.00', 'Scandinavian design, mixed with a vintage feel. The Gabin range combines lightly brushed solid pine with cane. Chic and on-trend. Designed by La Redoute Interiors.\r\n\r\nProduct Details\r\n •  In lightly brushed solid pine, oak stained finish, nitrocellulose varnish\r\n •  Aged metal handles\r\n •  1 drawer\r\n •  2 caned doors, 3 removable shelves adjustable in 3 positions\r\n •  This product is sold for self-assembly \r\nDimensions\r\nOverall\r\n •  Length: 87cm\r\n •  Height: 140cm\r\n •  Depth: 45cm', 1, 2, 4, 'img/product home/home_furn_sideboard6_1.webp', 'img/product home/home_furn_sideboard6_2.webp', 'img/product home/home_furn_sideboard6_3.webp', 'img/product home/home_furn_sideboard6_4.webp'),
(23, 'Gocco 2-Door Rattan Sideboard', 3, '699.00', 'Handcrafted and designed in rattan cane and wickerwork, the Gocco sideboard displays a bohemian chic design with striking curves. Designed by La Redoute Interiors.\r\nProduct Details\r\n •  Structure in hot-bent rattan cane\r\n •  Natural weaving\r\n •  Plywood furniture back (exotic: Sengon wood)\r\n •  Vertical divider and fixed shelves in natural cane veneered plywood\r\n •  Nitrocellulose varnish finish\r\n •  Classic hinges\r\n •  Magnetic door closure\r\n •  4 compartments\r\n •  Artisanal craftsmanship\r\n •  Sold pre-assembled', 1, 2, 4, 'img/product home/home_furn_sideboard7_1.webp', 'img/product home/home_furn_sideboard7_2.webp', 'img/product home/home_furn_sideboard7_3.webp', NULL),
(24, 'Compost Bin in Black Speckle', 3, '22.00', 'This product will be dispatched by one of our trusted suppliers. You’ll be contacted by their selected courier about your delivery.', 1, 1, 5, 'img/product home/home_decor_storage1_1.webp', 'img/product home/home_decor_storage1_2.webp', NULL, NULL),
(25, 'Rosa Buttoned Velvet 2 Seater Sofa with Light Wood Legs', 3, '1049.00', 'The Rosa Buttoned combines modern family comfort with a timeless button back design. The long sloped arms and tapered wooden legs give a retro look that’s perfect for a contemporary home. If buttons aren’t your thing, the Rosa is also available with a standard back. Choose from our soft brushed fabric for ultimate coziness, soft woven for a textured look or velvet for luxe living.\r\n\r\nAll made to order sofas are carefully manufactured in the UK.\r\nEach hardwood frame is dowelled, glued, and screwed before being paired with the finest fabrics and fillings.\r\nAnd it doesn\'t stop there - for customer peace of mind and safety, all frames and fabrics are rigorously examined, inspected, and tested to the highest standards.', 1, 2, 6, 'img/product home/home_furn_sofa1_1.webp', 'img/product home/home_furn_sofa1_2.webp', NULL, NULL),
(26, 'Claudia Velvet Armchair with Dark Wood Legs', 3, '649.00', 'A fine-looking armchair if ever we saw one. The Claudia offers clean modern shapes and angled sides giving the perfect support and comfort just where you need it most. Choose from our soft brushed fabric for ultimate coziness or velvet for luxe living.\r\n\r\nAll made to order sofas are carefully manufactured in the UK.\r\nEach hardwood frame is dowelled, glued, and screwed before being paired with the finest fabrics and fillings.\r\nAnd it doesn\'t stop there - for customer peace of mind and safety, all frames and fabrics are rigorously examined, inspected, and tested to the highest standards.', 1, 2, 6, 'img/product home/home_furn_sofa2_1.webp', 'img/product home/home_furn_sofa2_2.webp', NULL, NULL),
(27, 'Ada Buttoned Soft Woven 2 Seater Sofa with Light Wood Legs', 3, '999.00', 'Mid century design meets maximum comfort. Curvacious arms, deep buttoned back and the plumpest side cushions make the Ada that little bit extra. If buttons aren’t your thing, the Ada is also available with a standard back. Choose from our soft brushed fabric for ultimate coziness, soft woven for a textured look or velvet for luxe living.\r\n\r\nAll made to order sofas are carefully manufactured in the UK.\r\nEach hardwood frame is dowelled, glued, and screwed before being paired with the finest fabrics and fillings.\r\nAnd it doesn\'t stop there - for customer peace of mind and safety, all frames and fabrics are rigorously examined, inspected, and tested to the highest standards.', 1, 2, 6, 'img/product home/home_furn_sofa3_1.webp', 'img/product home/home_furn_sofa3_2.webp', NULL, NULL),
(28, 'Rosa Buttoned Soft Woven Armchair with Light Wood Legs', 3, '599.00', 'The Rosa Buttoned combines modern family comfort with a timeless button back design. The long sloped arms and tapered wooden legs give a retro look that’s perfect for a contemporary home. If buttons aren’t your thing, the Rosa is also available with a standard back. Choose from our soft brushed fabric for ultimate coziness, soft woven for a textured look or velvet for luxe living.\r\n\r\nAll made to order sofas are carefully manufactured in the UK.\r\nEach hardwood frame is dowelled, glued, and screwed before being paired with the finest fabrics and fillings.\r\nAnd it doesn\'t stop there - for customer peace of mind and safety, all frames and fabrics are rigorously examined, inspected, and tested to the highest standards.', 1, 2, 6, 'img/product home/home_furn_sofa4_1.webp', 'img/product home/home_furn_sofa4_2.webp', NULL, NULL),
(29, 'Lomopi Document Holder', 3, '20.00', 'The Lomopi document holder. Chic and stylish, this document holder will look great in your home or office.\r\nProduct Details:\r\n• In woven water hyacinth.', 1, 1, 5, 'img/product home/home_decor_storage2_1.webp', 'img/product home/home_decor_storage2_2.webp', NULL, NULL),
(30, 'Malu Rattan Magazine Rack', 3, '125.00', 'A Bohemian style with a vintage look in natural rattan: we present to you the Malu magazine rack. Have your favourite magazines and newspapers at hand.\r\n\r\nProduct Details\r\n •  Rattan frame\r\n •  Rattan carry handle\r\n •  Artisanal craftsmanship', 1, 1, 5, 'img/product home/home_decor_storage3_1.webp', 'img/product home/home_decor_storage3_2.webp', 'img/product home/home_decor_storage3_3.webp', NULL),
(31, 'Pikoa Metal Wire Basket', 3, '36.00', 'Storage with character. A metal wire frame with a golden finish. The Pikoa basket is easy to move from one room to another thanks to its handles. A stylish design.\r\n\r\nProduct Details\r\n •  Metal wire with gold finish\r\n •  Carry handles', 1, 1, 5, 'img/product home/home_decor_storage4_1.webp', 'img/product home/home_decor_storage4_2.webp', NULL, NULL),
(32, 'Arreglo Stackable Metal Crate', 3, '75.00', 'A collection with rounded corners for a look that combines retro and modern. Scandinavian style with simple lines and a range of soft colours!\r\nProduct Details:\r\n •  Stackable.\r\n •  Notches on each side for a better grip.\r\n •  Stamped AM.PM.\r\n •  Made of galvanized metal or covered with matt epoxy paint.', 1, 1, 5, 'img/product home/home_decor_storage5_1.webp', 'img/product home/home_decor_storage5_2.webp', NULL, NULL),
(33, 'Uyova Glass & Metal Box (Black or Brass)', 3, '40.00', 'We love the touch of art deco design on this Uyova box in glass and metal, available in brass or black colour finish.\r\n\r\nProduct Details\r\n •  Metal structure in brass or black finish\r\n •  Glass panels\r\n •  Box with lid', 1, 1, 5, 'img/product home/home_decor_storage6_1.webp', 'img/product home/home_decor_storage6_2.webp', 'img/product home/home_decor_storage6_3.webp', NULL),
(34, 'Set of 3 Frozi Glass Storage Containers', 3, '50.00', 'Nothing is wasted, you can preserve everything you need! Frozi are the ideal glass containers for storing your food in a healthy way. Practical, the glass containers are suitable in the freezer and the microwave or oven.\r\n\r\nProduct Details\r\n •  Glass containers\r\n •  Bamboo lid\r\n •  Compatible with oven, (up to 220 °) microwave and freezer (max -20 °): glass container part only.\r\n •  Sold in packs of 3\r\n', 1, 1, 5, 'img/product home/home_decor_storage7_1.webp', NULL, NULL, NULL),
(35, 'Sloki Storage Jars, Set of 3', 3, '42.00', 'Made entirely from glass, these 3 storage jars will protect and display your sweets, cakes, cereals or anything else you might want to store with originality and style.\r\n\r\nProduct details:\r\n •  Made of glass\r\n •  Pack of 3\r\n •  Care advice: Not suitable for dishwasher or microwave use', 1, 1, 5, 'img/product home/home_decor_storage8_1.webp', 'img/product home/home_decor_storage8_2.webp', NULL, NULL),
(36, 'Potia Glass and Bamboo Storage Jars, Set of 3', 3, '32.00', 'Storage can be stylish with this set of 3 jam-maker\'s style jars, each with a lid made from uber trendy bamboo. Practical and smart, they can be used to preserve pastries, sweets, pulses, coffee or flour in style!  \r\n\r\nProduct details:\r\n •  Glass with bamboo lid\r\n •  Care advice: Not suitable for dishwasher or microwave use', 1, 1, 5, 'img/product home/home_decor_storage9_1.webp', NULL, NULL, NULL),
(37, 'Felicia Jute Laundry Basket\r\n', 3, '65.00', 'The Felicia laundry basket. Combining aesthetics and functionality, this laundry basket is made of jute, a natural biodegradable fibre that respects the environment.', 1, 1, 5, 'img/product home/home_decor_storage10_1.webp', 'img/product home/home_decor_storage10_2.webp', NULL, NULL),
(38, 'Azzu Round Braided Seagrass Basket', 3, '42.00', 'The Azzu basket is ideal for storing away accessories or laundry. It has a charming woven pattern for a colourful look. Beautiful and practical.\r\n\r\nProduct Details\r\n •  Seagrass\r\n •  2 handles\r\n •  Stripe and spot design', 1, 1, 5, 'img/product home/home_decor_storage11_1.webp', 'img/product home/home_decor_storage11_2.webp', NULL, NULL),
(39, 'Raga Woven Basket H37cm', 3, '99.00', 'Raga round woven basket. As lovely in a living room to store magazines as it is in a bedroom to store toys.\r\nProduct Details:\r\n •  Made from supple, woven water hyacinth\r\n •  4 handles\r\n •  Hand crafted', 1, 1, 5, 'img/product home/home_decor_storage12_1.webp', 'img/product home/home_decor_storage12_2.webp', NULL, NULL),
(40, 'Emile Medium Storage Baskets (Set of 2)', 3, '25.00', 'The Emile basket. A set of 2 baskets perfect for storing your personal belongings: lingerie, socks and tights or even small notebooks and administrative papers ... Functional and decorative.\r\n\r\nProduct Details\r\n •  In lined polycotton\r\n •  Small check print\r\n •  2 handles', 1, 1, 5, 'img/product home/home_decor_storage13_1.webp', 'img/product home/home_decor_storage13_2.webp', NULL, NULL),
(41, 'Set of 2 Tulipe Metal Trunks', 3, '85.00', 'As storage trunks or chests to keep secret treasures in, you\'ll love the Tulip cases. With their poetic and delicate print, they will delight everyone. Designed by La Redoute Interiors.\r\nProduct Details\r\n •  Set of 2 metal trunks covered with epoxy paint with decor transfer, tulip print and gingham print\r\n •  Carry handle at the front\r\n •  2 hook closures at the front', 1, 1, 5, 'img/product home/home_decor_storage14_1.webp', 'img/product home/home_decor_storage14_2.webp', 'img/product home/home_decor_storage14_3.webp', NULL),
(42, 'Rafael Table Lamp White', 3, '25.00', 'Transform interiors with these trendy white table lamps. Complete the designer look with one of our LED filament globe lamps.', 1, 3, 7, 'img/product home/home_light_lamp1_1.webp', NULL, NULL, NULL),
(43, 'Wooden Square Base with Natural Shade Table Lamp', 3, '45.00', 'The small but sturdy Lea table lamp boasts an angled base made from natural wood.', 1, 3, 7, 'img/product home/home_light_lamp2_1.webp', 'img/product home/home_light_lamp2_2.webp', NULL, NULL),
(44, '2 Light Opal Glass Table Lamp', 3, '99.00', 'charming addition to your home, this 2 light table lamp is an exclusive design. Featuring polished gold finish and two opal glass spheres, this lamp is perfect for use in lounges, hallways and bedrooms.', 1, 3, 7, 'img/product home/home_light_lamp3_1.webp', NULL, NULL, NULL),
(45, 'Rafia Terracotta and Raffia Table Lamp', 3, '150.00', 'Striking and natural. The Rafia lamp juxtaposes natural materials - raffia and terracotta - with a minimalist design. A bold, contemporary design with exotic influences.', 1, 3, 7, 'img/product home/home_light_lamp4_1.webp', 'img/product home/home_light_lamp4_2.webp', 'img/product home/home_light_lamp4_3.webp', 'img/product home/home_light_lamp4_4.webp'),
(46, '154cm Light Wood Tripod Floor Lamp with Shelf', 3, '249.00', 'Tapered Floor lamp in natural wood finish complete with a shelf within the base. Finish with a tepered linen mater shade, this is a versatile stylish item that would be a great addition to any room with the added bonus of storage /display space, also see matching table lamp to complete the set\r\n', 1, 3, 7, 'img/product home/home_light_lamp5_1.webp', 'img/product home/home_light_lamp5_2.webp', NULL, NULL),
(47, 'Iloa 35.5cm Diameter Glass & Brass Ceiling Light', 3, '125.00', 'This vintage-inspired ceiling light is crafted from bright brass and textured glass and diffuses the light beautifully around your room.', 1, 3, 7, 'img/product home/home_light_lamp6_1.webp', 'img/product home/home_light_lamp6_2.webp', 'img/product home/home_light_lamp6_3.webp', NULL),
(48, 'Canopee Small Rattan Ceiling Light by E. Gallina', 3, '199.00', 'An Emmanuel Gallina exclusive for AMPM. Recalling the organic forms of foliage suspended in space, the Canopée ceiling pendant evokes a natural sense of weightlessness. Fashioned from delicate woven rattan.\r\nA desire to create a flat design for a discreet finish on walls and ceilings.\r\nThis light becomes a real ornamental piece or a luminous sculptural silhouette.', 1, 3, 7, 'img/product home/home_light_lamp7_1.webp', 'img/product home/home_light_lamp7_2.webp', 'img/product home/home_light_lamp7_3.webp', NULL),
(49, 'Dolce Brass, Bamboo and Opaline Glass Ceiling Lamp', 3, '155.00', 'Dolce is refined and elegant. Marrying opaline and bamboo with brass details for a sophisticated touch, its chic and bohemian style upgrades your interior deco in the blink of an eye. A design exclusive to La Redoute Interiors.', 1, 3, 7, 'img/product home/home_light_lamp8_1.webp', 'img/product home/home_light_lamp8_2.webp', 'img/product home/home_light_lamp8_3.webp', NULL),
(50, '3 White Glass Orb and Gold Metal Bar Pendant Light', 3, '189.00', 'Bring some modern style i to your home with this three white orb and gold metal electrified pendant. This pendant will look stunning over any kitchen island or dining table. Also available in a floor lamp and table lamp.', 1, 3, 7, 'img/product home/home_light_lamp9_1.webp', 'img/product home/home_light_lamp9_2.webp', 'img/product home/home_light_lamp9_3.webp', NULL),
(51, 'Ribbed Glass Pendant Light 400-1000mm', 3, '179.00', 'This ceiling pendant features a ribbed round glass shade hanging from a decorative chain finished in antique brass. Compatible with LED lamps, this fitting can also be dimmed.', 1, 3, 7, 'img/product home/home_light_lamp10_1.webp', NULL, NULL, NULL),
(52, 'Clear Ribbed Glass with Antique Brass Tall Oval Pendant Ceiling Light', 3, '99.00', 'This clear ribbed glass tall shaped electrified pendant has antique brass metal detailing and a twisted black fabric flex. This pendant will add an elegant touch whether you choose to hang it separately or in multiples. Also available in an oval shape. ', 1, 3, 7, 'img/product home/home_light_lamp11_1.webp', NULL, NULL, NULL),
(53, 'teste', 1, '23.00', 'para testar', 2, 5, 1, '62de735280257.1', '62de735280257.1', '62de735280257.1', '62de735280257.1');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categorias`
--

CREATE TABLE `sub_categorias` (
  `ID` int(11) NOT NULL,
  `sub_categoria` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categorias`
--

INSERT INTO `sub_categorias` (`ID`, `sub_categoria`, `ID_categoria`) VALUES
(1, 'Decoration', 1),
(2, 'Furniture', 1),
(3, 'Lighting', 1),
(4, 'Textiles', 1),
(5, 'Essentials', 2),
(6, 'To Eat', 2),
(7, 'Decoration', 2),
(8, 'Fun', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tipo_produto`
--

CREATE TABLE `tipo_produto` (
  `ID` int(11) NOT NULL,
  `tipo_produto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tipo_produto`
--

INSERT INTO `tipo_produto` (`ID`, `tipo_produto`) VALUES
(1, 'Poster'),
(2, 'Console'),
(3, 'Chair'),
(4, 'Sideboard'),
(5, 'Storage'),
(6, 'Sofa'),
(7, 'Lamp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_cliente` (`ID_cliente`);

--
-- Indexes for table `compra_produto`
--
ALTER TABLE `compra_produto`
  ADD KEY `ID_compra` (`ID_compra`),
  ADD KEY `ID_produto` (`ID_produto`);

--
-- Indexes for table `favoritos`
--
ALTER TABLE `favoritos`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_produto` (`id_produto`);

--
-- Indexes for table `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_categoria` (`ID_sub_categoria`),
  ADD KEY `ID_tipo_produto` (`ID_tipo_produto`),
  ADD KEY `ID_marca` (`ID_marca`),
  ADD KEY `ID_categoria_2` (`ID_categoria`);

--
-- Indexes for table `sub_categorias`
--
ALTER TABLE `sub_categorias`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_categoria` (`ID_categoria`);

--
-- Indexes for table `tipo_produto`
--
ALTER TABLE `tipo_produto`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `compra`
--
ALTER TABLE `compra`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favoritos`
--
ALTER TABLE `favoritos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marcas`
--
ALTER TABLE `marcas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `sub_categorias`
--
ALTER TABLE `sub_categorias`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tipo_produto`
--
ALTER TABLE `tipo_produto`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`ID_cliente`) REFERENCES `cliente` (`ID`);

--
-- Constraints for table `compra_produto`
--
ALTER TABLE `compra_produto`
  ADD CONSTRAINT `compra_produto_ibfk_1` FOREIGN KEY (`ID_compra`) REFERENCES `compra` (`ID`),
  ADD CONSTRAINT `compra_produto_ibfk_2` FOREIGN KEY (`ID_produto`) REFERENCES `produtos` (`ID`);

--
-- Constraints for table `favoritos`
--
ALTER TABLE `favoritos`
  ADD CONSTRAINT `favoritos_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`ID`),
  ADD CONSTRAINT `favoritos_ibfk_2` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`ID`);

--
-- Constraints for table `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`ID_sub_categoria`) REFERENCES `sub_categorias` (`ID`),
  ADD CONSTRAINT `produtos_ibfk_2` FOREIGN KEY (`ID_tipo_produto`) REFERENCES `tipo_produto` (`ID`),
  ADD CONSTRAINT `produtos_ibfk_3` FOREIGN KEY (`ID_marca`) REFERENCES `marcas` (`ID`),
  ADD CONSTRAINT `produtos_ibfk_4` FOREIGN KEY (`ID_categoria`) REFERENCES `categorias` (`ID`);

--
-- Constraints for table `sub_categorias`
--
ALTER TABLE `sub_categorias`
  ADD CONSTRAINT `sub_categorias_ibfk_1` FOREIGN KEY (`ID_categoria`) REFERENCES `categorias` (`ID`);
--
-- Database: `loja_online`
--
CREATE DATABASE IF NOT EXISTS `loja_online` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `loja_online`;

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `ID` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(64) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `tipoCliente` enum('bom','mau','banido') NOT NULL,
  `NIF` int(11) NOT NULL,
  `morada` varchar(200) NOT NULL,
  `telefone` varchar(30) DEFAULT NULL,
  `salario` decimal(10,2) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`ID`, `email`, `password`, `nome`, `tipoCliente`, `NIF`, `morada`, `telefone`, `salario`, `admin`, `foto`) VALUES
(1, 'rodrigobarbosa@mail.com', '23456', 'Rodrigo Barbosa', 'bom', 2345678, 'Rua do Lima', '923456789', '2000.00', 0, ''),
(3, 'filipe@mail.com', '4546', 'Filipe Teixeira', 'banido', 354748334, 'Rua Correia', NULL, NULL, 0, ''),
(5, 'mafalda@mail.com', '29e8d31dd97b1ceb6a4e653c0e717e9f1200ae6d686cd1937912de6bb6d4c5c6', 'Mafalda', 'bom', 546372846, 'Rua Matias', NULL, NULL, NULL, '6269934fb5c3f.png');

-- --------------------------------------------------------

--
-- Table structure for table `compras`
--

CREATE TABLE `compras` (
  `ID` int(11) NOT NULL,
  `nFatura` varchar(5) NOT NULL,
  `data` date NOT NULL,
  `IDcliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

CREATE TABLE `produtos` (
  `ID` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `preco` decimal(6,2) NOT NULL,
  `IVA` decimal(4,2) NOT NULL,
  `foto` tinyint(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produtos`
--

INSERT INTO `produtos` (`ID`, `nome`, `preco`, `IVA`, `foto`) VALUES
(1, 'Pincel', '2.50', '23.00', 0),
(3, 'Caderno', '20.00', '1.00', 0),
(4, 'Fita-cola', '3.00', '23.00', 0),
(5, 'Livro', '45.00', '23.00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `seguro`
--

CREATE TABLE `seguro` (
  `ID` int(11) NOT NULL,
  `seguradora` varchar(20) NOT NULL,
  `valorCoberto` decimal(10,5) NOT NULL,
  `nApolice` varchar(30) NOT NULL,
  `registoApolice` date NOT NULL,
  `coberturas` text NOT NULL,
  `IDcliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDcliente` (`IDcliente`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `seguro`
--
ALTER TABLE `seguro`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDcliente` (`IDcliente`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `compras`
--
ALTER TABLE `compras`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `seguro`
--
ALTER TABLE `seguro`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`IDcliente`) REFERENCES `clientes` (`ID`);

--
-- Constraints for table `seguro`
--
ALTER TABLE `seguro`
  ADD CONSTRAINT `seguro_ibfk_1` FOREIGN KEY (`IDcliente`) REFERENCES `clientes` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
