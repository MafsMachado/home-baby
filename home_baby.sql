-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 04, 2023 at 09:44 AM
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
  `marca` varchar(150) NOT NULL,
  `img` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `marcas`
--

INSERT INTO `marcas` (`ID`, `marca`, `img`) VALUES
(1, 'Mushie', 'img/brands/mushie.png'),
(2, 'H&M', 'img/brands/h&m.png'),
(3, 'La Redoute', 'img/brands/laredoute.png'),
(4, 'Liewood', 'img/brands/liewood.png');

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
(41, 'Set of 2 Tulipe Metal Trunks', 3, '85.00', 'As storage trunks or chests to keep secret treasures in, you\'ll love the Tulip cases. With their poetic and delicate print, they will delight everyone. Designed by La Redoute Interiors.\r\nProduct Details\r\n •  Set of 2 metal trunks covered with epoxy paint with decor transfer, tulip print and gingham print\r\n •  Carry handle at the front\r\n •  2 hook closures at the front', 2, 7, 5, 'img/product baby/baby_decor_storage1_1.webp', 'img/product baby/baby_decor_storage1_2.webp', 'img/product baby/baby_decor_storage1_3.webp', NULL),
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
(57, 'Murci Rectangular Cushion Cover', 3, '18.00', '100% velvet, 100% decorative. The Murci cushion cover will reinvent your interior. A design exclusive to La Redoute Interiors.', 1, 4, 8, 'img/product home/home_textil_cushion1_1.webp', 'img/product home/home_textil_cushion1_2.webp', NULL, NULL),
(58, 'Volos Cushion Cover', 3, '18.00', 'With its fancy details, the Volos cushion cover gives a rich material contrast.', 1, 4, 8, 'img/product home/home_textil_cushion2_1.webp', 'img/product home/home_textil_cushion2_2.webp', NULL, NULL),
(59, 'Curico Cushion Cover', 3, '25.00', 'A bold black and white print for an on-trend update to your home.', 1, 4, 8, 'img/product home/home_textil_cushion3_1.webp', 'img/product home/home_textil_cushion3_2.webp', NULL, NULL),
(60, 'Ava Tufted Cotton Cushion Cover', 3, '18.00', 'This Berber-inspired cotton cushion cover has a charming spotted pattern with black tassels. We love the simplicity of the tufted black polka dot pattern which gives this cushion cover a very special elegance', 1, 4, 8, 'img/product home/home_textil_cushion4_1.webp', 'img/product home/home_textil_cushion4_2.webp', NULL, NULL),
(61, 'Javea Velvet Cushion Cover', 3, '33.00', 'Javéa ... a cotton velvet cushion cover in mineral colours. Precious details: 4 tassels composed of tone-on-tone pearls and cotton thread.', 1, 4, 8, 'img/product home/home_textil_cushion5_1.webp', 'img/product home/home_textil_cushion5_2.webp', 'img/product home/home_textil_cushion5_3.webp', NULL),
(62, 'Joan Tufted Cushion Cover', 3, '25.00', 'Put a retro stamp on your surroundings with our Joan cushion cover. A tufted geometric pattern evoking contemporary art with 70s influences: it will create a bold and colourful vibe!', 1, 4, 8, 'img/product home/home_textil_cushion6_1.webp', 'img/product home/home_textil_cushion6_2.webp', NULL, NULL),
(63, 'Cévennes Checked Fringed Linen Cotton Square Cushion Cover', 3, '22.00', 'Bring a touch of Provence into your home! Graphic, the Cévennes cushion cover plays with a gingham-style check available in muted tones for a cosy effect. Designed by La Redoute Interiors.', 1, 4, 8, 'img/product home/home_textil_cushion7_1.webp', 'img/product home/home_textil_cushion7_2.webp', 'img/product home/home_textil_cushion7_3.webp', NULL),
(64, 'Paula Tasselled 100% Cotton Velvet Cushion Cover', 3, '15.00', 'Soft and smooth to the touch, this tasseled cushion cover will add a note of style and comfort to your living space, either on its own or contrasted against complementary items in deep jewel tones from the PAULA range.', 1, 4, 8, 'img/product home/home_textil_cushion8_1.webp', 'img/product home/home_textil_cushion8_2.webp', 'img/product home/home_textil_cushion8_3.webp', NULL),
(65, 'Halmo Twin Pack Polyester Filled Cushions', 3, '36.00', 'Add some style and texture to your home with this Ethnic inspired diamond design. With hand-woven looping and a corner tassel finish; this cushion is available in a range of earthy tones which will compliment all modern and contemporary interiors.', 1, 4, 8, 'img/product home/home_textil_cushion9_1.webp', 'img/product home/home_textil_cushion9_2.webp', 'img/product home/home_textil_cushion9_3.webp', NULL),
(66, 'Abstract Design Monochrome Filled Cushion 45x45cm', 3, '45.00', 'This rectangular cushion is crafted skilfully from 100% cotton and features semi-circle designs with a two-tonal contrast. Offering comfort with style, this cushion lends an artful aesthetic to the décor.', 1, 4, 8, 'img/product home/home_textil_cushion10_1.webp', 'img/product home/home_textil_cushion10_2.webp', NULL, NULL),
(67, 'Hatho Twin Pack Polyester Filled Cushions', 3, '45.00', 'Combine comfort and style with this ethnic geometric inspired design. With a fresh knitted cotton front, soft colouring, and linen-look natural reverse; this cushion will sit perfectly with all interiors.', 1, 4, 8, 'img/product home/home_textil_cushion11_1.webp', 'img/product home/home_textil_cushion11_2.webp', 'img/product home/home_textil_cushion11_3.webp', NULL),
(68, 'Printed Star Kids Cushion', 3, '13.00', 'This Star cushion is the perfect gift for any occasion, birthday’s, baby shower’s and is for all ages. This cozy accent cushion will brightly shine wherever you place it! Sweet and soft, this design is a beautiful addition to any home, nursery decor or playroom.', 2, 7, 8, 'img/product baby/baby_decor_cushion1_1.webp', NULL, NULL, NULL),
(69, 'Mounty Graphic Embroidered 100% Linen Cushion Cover', 3, '55.00', 'A structured two-tone graphic effect, embroidery sewn in chain stitch... the Mounty cushion cover is animated with black abstract figures on a natural-coloured background.', 1, 4, 8, 'img/product home/home_textil_cushion12_1.webp', 'img/product home/home_textil_cushion12_2.webp', NULL, NULL),
(70, 'Faded Antique Style Rug', 3, '59.00', 'This product will be dispatched by one of our trusted suppliers. You’ll be contacted by their selected courier about your delivery.', 1, 4, 11, 'img/product home/home_textil_carpet1_1.webp', 'img/product home/home_textil_carpet1_2.webp', 'img/product home/home_textil_carpet1_3.webp', NULL),
(71, 'Bettie Kilim Style Rug', 3, '90.00', 'The Bettie rug has been inspired by the kilim style and will look great in your home. A style full of charm! Bring a playful note to your decor. Made in Belgium.', 1, 4, 11, 'img/product home/home_textil_carpet2_1.webp', 'img/product home/home_textil_carpet2_2.webp', NULL, NULL),
(72, 'Néroli Fringed Hand Knotted Wool XL Rug', 3, '949.00', 'The Néroli berber rug. Textured and knotted by hand, it will warm up your interior with its natural tones.. Providing thermal insulation and sound proofing, a rug will bring a warm feel to your home, structure the space and give you a touch of comfort underfoot.', 1, 4, 11, 'img/product home/home_textil_carpet3_1.webp', 'img/product home/home_textil_carpet3_2.webp', 'img/product home/home_textil_carpet3_3.webp', NULL),
(73, 'Nilou Berber Style Wool & Cotton Rug', 3, '279.00', 'The Nilou Berber-style rug. A superb graphic pattern worked in relief in soft and natural materials. High quality, AMPM rugs are handcrafted.', 1, 4, 8, 'img/product home/home_textil_carpet4_1.webp', 'img/product home/home_textil_carpet4_2.webp', 'img/product home/home_textil_carpet4_3.webp', NULL),
(74, 'Ashwin Berber Style Hand Tufted Thick Wool XL Rug', 3, '1025.00', 'Specially reworked in generous dimensions, the XL format Ashwin rug will add charm and character to larger rooms with its traditional Berber motifs. Made from pure natural wool with an asymmetric pattern in harmonious low-key shades, it will add a touch of tribal chic to your interior style.', 1, 4, 11, 'img/product home/home_textil_carpet5_1.webp', 'img/product home/home_textil_carpet5_2.webp', 'img/product home/home_textil_carpet5_3.webp', NULL),
(75, 'Floris Vintage Style Cotton Rug', 3, '85.00', 'A harmony of colours with traditional patterns in soft cotton. The Floris rug brings a warm atmosphere to your home. It will draw all eyes.', 1, 4, 11, 'img/product home/home_textil_carpet6_1.webp', 'img/product home/home_textil_carpet6_2.webp', 'img/product home/home_textil_carpet6_3.webp', NULL),
(76, 'Jiraya Fringed Berber-Style Rug', 3, '89.00', 'The Jiraya berber-style rug. The revisited Fatouh style: This simple and graphic diamond pattern runner will go perfectly with authentic or contemporary interiors.', 1, 4, 11, 'img/product home/home_textil_carpet7_1.webp', 'img/product home/home_textil_carpet7_2.webp', 'img/product home/home_textil_carpet7_3.webp', NULL),
(77, 'Junglito Lion Head 100% Cotton Child\'s Rug', 3, '80.00', 'Bring a jungle feel to bedtime? The Junglito rug brings nature into your bedroom. Here, the lion prevailed (well, he is the king of the jungle). Designed by La Redoute Interiors.', 2, 7, 11, 'img/product baby/baby_decor_carpet1_1.webp', 'img/product baby/baby_decor_carpet1_2.webp', 'img/product baby/baby_decor_carpet1_3.webp', NULL),
(78, 'Ava Berber-Style Round Rug in Polka Dot', 3, '125.00', 'An all-round perfect rug!. With its minimalist and elegant graphics, the Ava rug mixes up our favourite aspects of Berber rugs and adds a touch of contemporary chic: Decorated by hand, it features black polka dots on a white background.', 2, 7, 11, 'img/product baby/baby_decor_carpet2_1.webp', 'img/product baby/baby_decor_carpet2_2.webp', 'img/product baby/baby_decor_carpet2_3.webp', NULL),
(79, 'Bambu Bamboo Flowerpot With Feet, H35cm', 3, '55.00', 'The Bambu bamboo footed flowerpot. This flowerpot with stand is crafted from natural bamboo in a retro style for a charming look.', 1, 1, 12, 'img/product home/home_decor_vase1_1.webp', 'img/product home/home_decor_vase1_2.webp', NULL, NULL),
(80, 'Tamagni 19.5cm High Glass Vase', 3, '26.00', 'Vase or simple decorative object? Tamagni seduces with its textured design. Its height can accommodate fresh flowers or a bouquet of dried flowers with long stems. Created by La Redoute Interiors.', 1, 1, 12, 'img/product home/home_decor_vase2_1.webp', 'img/product home/home_decor_vase2_2.webp', NULL, NULL),
(81, 'Kuza Ceramic Vase, H15.5cm', 3, '25.00', 'Antique inspiration with a Mediterranean spirit and neutral tones... the Kuza ceramic sculpture vase offers showcases the authenticity of its raw materials. It\'s an invitation to travel.', 1, 1, 12, 'img/product home/home_decor_vase3_1.webp', 'img/product home/home_decor_vase3_2.webp', 'img/product home/home_decor_vase3_3.webp', NULL),
(82, 'Kuro Decorative 33.5cm Ceramic Vase', 3, '60.00', 'Organic shape with soft curves: the Kuro decorative ceramic vase impresses with its design and neutral tones. Like a work of art, it can be displayed in every room of the house and gives character to your decor.', 1, 1, 12, 'img/product home/home_decor_vase4_1.webp', 'img/product home/home_decor_vase4_2.webp', NULL, NULL),
(83, 'Sira 13cm High Matte Ceramic Vase', 3, '30.00', 'A simple vase with soft curves that will highlight your flowers and plants in any room of the house.', 1, 1, 12, 'img/product home/home_decor_vase5_1.webp', 'img/product home/home_decor_vase5_2.webp', 'img/product home/home_decor_vase5_3.webp', NULL),
(84, 'Pahu 45cm High Decorative Ceramic Vase', 3, '130.00', 'Inspired by antique design, this ceramic jar with a textured cement effect will dazzle you with its simplicity and unique beauty. Its dried-flower design brings a natural touch to your home.', 1, 1, 12, 'img/product home/home_decor_vase6_1.webp', 'img/product home/home_decor_vase6_2.webp', 'img/product home/home_decor_vase6_3.webp', NULL),
(85, 'Sira Vase in Matte Ceramic', 3, '55.00', 'A simple vase with soft curves that will highlight your flowers and plants in any room of the house.', 1, 1, 12, 'img/product home/home_decor_vase7_1.webp', 'img/product home/home_decor_vase7_2.webp', NULL, NULL),
(86, 'Malu 32cm Diameter Round Rattan Flowerpot with Stand', 3, '90.00', 'A Bohemian style with a vintage look in natural rattan: here is Malu, the raised planter with a style which evokes the 50\'s and 60\'s. It will add an artisanal touch to your interior while showing off your plants.', 1, 1, 12, 'img/product home/home_decor_vase8_1.webp', 'img/product home/home_decor_vase8_2.webp', NULL, NULL),
(87, 'Parfeto Cotton Throw', 3, '70.00', 'This beautiful, ethnic style cotton throw perfectly complements any room designed with subtlety and contrast.', 1, 4, 13, 'img/product home/home_textil_throw1_1.webp', 'img/product home/home_textil_throw1_2.webp', NULL, NULL),
(88, 'GIRANDOLE Hand Embroidered Cotton Throw', 3, '90.00', 'This lovely hand embroidered throw is double-thick for extra comfort. It will add a soft, cosy touch to any bed, sofa or easy chair. Team it up with the matching cushion cover sold on this site.', 1, 4, 13, 'img/product home/home_textil_throw2_1.webp', 'img/product home/home_textil_throw2_2.webp', NULL, NULL),
(89, 'Chunky Knit Throw 130x170cm\r\n', 3, '55.00', 'Add the chunky knit throw to your interior space for a cosy rustic feel.', 1, 4, 13, 'img/product home/home_textil_throw3_1.webp', 'img/product home/home_textil_throw3_2.webp', NULL, NULL),
(90, 'Houndstooth Woven Throw 130x170cm', 3, '39.00', 'This woven throw is a beautiful chucky throw, perfect for stylishing in your interior space but also great for snuggling up with.', 1, 4, 13, 'img/product home/home_textil_throw4_1.webp', 'img/product home/home_textil_throw4_2.webp', NULL, NULL),
(91, 'Boho Tasselled Throw', 3, '26.00', 'Add some personality and style to your home with the Boho cotton woven throw, featuring contrast colour tassels on two sides and tufting detail. A natural coloured base makes this a versatile throw for any home.', 1, 4, 13, 'img/product home/home_textil_throw5_1.webp', 'img/product home/home_textil_throw5_2.webp', 'img/product home/home_textil_throw5_3.webp', NULL),
(92, 'After the Rain Play Rug', 3, '120.00', 'Fleece rug in chambray fabric with many activities in fall colours.', 2, 8, 11, 'img/product baby/baby_fun_rug1_1.webp', 'img/product baby/baby_fun_rug1_2.webp', NULL, NULL),
(93, 'Bath Toys', 3, '18.00', 'The perfect kit for spending hours in the water and creating stories!\r\nThe best moment of the day arrives, the bath with its many toys!\r\n\r\nYour child will play for hours with these 20 bath stickers, this bath book and the little octopus puppet!\r\n\r\nAs if by magic, Badabulle bath stickers stick to the walls of the bath or the glass of the shower! This set contains 20 foam pieces in playful shapes and attractive colours. They float to stimulate the creativity of your little one.\r\n\r\nThanks to the character and the story side of the bath book, your little one can pass the finger puppet from stage to stage. Your child\'s imagination will run wild!\r\n\r\nThese bath toys help with development, they are colourful and easy to clean.', 2, 8, 9, 'img/product baby/baby_fun_toy1_1.webp', 'img/product baby/baby_fun_toy1_2.webp', NULL, NULL),
(94, 'My First Learning Cubes', 3, '18.00', 'Young children will love to play with these pleasantly textured cubes in pretty pastel colours, illustrated with drawings of animals, fruits, shapes and numbers in 3D.\r\n\r\nEasily grasped, they stack and fit together, thus promoting the development of fine motor skills as well as baby\'s coordination. Educational cubes offer endless play possibilities! Older children can also learn to recognise numbers and count while having fun.\r\n\r\nWith their pastel colours, cute illustrations of animals, fruits, 3D shapes and numbers and their pleasant texture, these cubes will appeal to children.. In soft material, they are safe for babies.\r\n\r\nEasily grasped, they stack and fit together, thus promoting the development of fine motor skills as well as baby\'s coordination. Educational cubes offer endless play possibilities!\r\n\r\nOlder children can also learn to recognise numbers and count while having fun.', 2, 8, 9, 'img/product baby/baby_fun_toy2_1.webp', 'img/product baby/baby_fun_toy2_2.webp', NULL, NULL),
(95, 'Cotton Mini Baby Carrier', 3, '95.00', 'Created especially for newborns. A flexible design, easy for the wearer to adjust.\r\n\r\nWhat are the special features of the Mini baby carrier?\r\nThe Mini Baby Carrier is small, soft and easy to use. It was designed to meet the vital need for proximity of newborns.\r\n\r\nIs the Mini Baby Carrier easy to use?\r\nYes, the Mini Baby Carrier is easy to put on and take off. It is therefore perfectly suited to frequent carrying over short periods of time.. Its clever design allows you to detach the front part and gently extract your sleeping baby.\r\n\r\nWhen can I start using the Mini Baby Carrier?\r\nYou can use the Mini baby carrier from the birth of your baby, its softness and small size make it a perfect item for the maternity bag!', 2, 5, 14, 'img/product baby/baby_essencial_carrier1_1.webp', 'img/product baby/baby_essencial_carrier1_2.webp', NULL, NULL),
(96, 'Set of 2 Hiba Metal Wall Hooks', 3, '12.00', 'Simple and colourful. Hanging from Hiba hooks, clothes, bags and accessories will no longer look messy! Easy to install, they\'re a winning duo for a tidy room.', 2, 7, 15, 'img/product baby/baby_decor_hook1_1.webp', 'img/product baby/baby_decor_hook1_2.webp', NULL, NULL),
(97, 'Set of 2 Metal Suitcases', 3, '85.00', 'Chests for secrets or for use as small storage trunks, this set of 2 trunks will delight your children. A La Redoute Interiors x La Redoute Collections creation.\r\nIt\'s the season of new beginnings! Our 2 teams of designers from homeware and ready-to-wear, have joined forces to create a fun, ethical collection for active kids on the move. With a boho vibe, nature-inspired prints and mood-boosting colours, kids can enjoy plenty of outdoor fun.', 2, 7, 5, 'img/product baby/baby_decor_storage2_1.webp', 'img/product baby/baby_decor_storage2_2.webp', NULL, NULL),
(98, 'Nogu Sun-Shaped Mirror in Rattan/Bamboo', 3, '42.00', 'The Nogu rattan/bamboo sun-shaped mirror. This beautiful mirror will bounce light around your home.\r\nProduct Details:\r\n •  Mirror in rattan & bamboo\r\n •  Fixes to the wall\r\n •  1 fixing plaque (screws and plugs not supplied)\r\n •  Hand crafted.', 2, 7, 16, 'img/product baby/baby_decor_mirror1_1.webp', 'img/product baby/baby_decor_mirror1_2.webp', 'img/product baby/baby_decor_mirror1_3.webp', NULL),
(99, 'Child\'s Play Tent', 3, '145.00', 'In this hut we play and relax! Responsible wooden structure plus canvas in cotton and Oekotex polyester leads to a durable and playful product. A La Redoute Interiors x La Redoute Collections creation.\r\nIt\'s the season of new beginnings! Our 2 teams of designers from homeware and ready-to-wear, have joined forces to create a fun, ethical collection for active kids on the move. With a boho vibe, nature-inspired prints and mood-boosting colours, kids can enjoy plenty of outdoor fun.', 2, 8, 9, 'img/product baby/baby_fun_toy3_1.webp', 'img/product baby/baby_fun_toy3_2.webp', 'img/product baby/baby_fun_toy3_3.webp', NULL),
(100, 'Ally Child\'s Framed Numbers Print', 3, '75.00', '1 bear cub, 2 birds, 3 fruits ... This is a nice way to visualise and learn to count. Little ones will love the challenge! A design exclusive to La Redoute Interiors\r\nProduct Details\r\n •  FSC® pine frame, printed on paper •  Wall fixing (screws and plugs not supplied) •  Responsible product - Choosing FSC® certified wood means opting for more responsible furniture. This wood comes from forests that are well managed from an environmental, social and economic perspective. By purchasing products carrying this label, you are helping in the preservation of forests. For a better life today and in the years to come.', 2, 7, 1, 'img/product baby/baby_decor_poster3_1.webp', 'img/product baby/baby_decor_poster3_2.webp', 'img/product baby/baby_decor_poster3_3.webp', NULL),
(101, 'Cléo Child\'s Framed Bear Print', 3, '28.00', 'King of the ice floes, meet the polar bear: Lord of the Arctic. A design exclusive to La Redoute Interiors.\r\nProduct Details\r\n •  FSC® pine frame, printed on paper •  Wall fixing (screws and plugs not supplied) •  Responsible product - Choosing FSC® certified wood means opting for more responsible furniture. This wood comes from forests that are well managed from an environmental, social and economic perspective. By purchasing products carrying this label, you are helping in the preservation of forests. For a better life today and in the years to come.', 2, 7, 1, 'img/product baby/baby_decor_poster4_1.webp', 'img/product baby/baby_decor_poster4_2.webp', NULL, NULL),
(103, 'Pacifier Clip | Ari', 1, '15.00', 'Mushie pacifier clips are a favorite for parents and babies! Our pacifier clips come in a variety of unique, chic, and vintage-inspired colors that bring to mind a peaceful simplicity.', 2, 5, 21, 'img/product baby/baby_essential_pacifier1_1.webp', NULL, NULL, NULL),
(104, 'Frigg Rope Natural Rubber Baby Pacifier | 2-Pack', 1, '15.00', 'The FRIGG line of rope rubber pacifiers is thoughtfully designed for your baby\'s comfort and features an entwined rope that surrounds the pacifier shield. The outward curve keeps the pacifier off delicate skin, while air holes and a security handle ensure your baby stays safe. Available in a range of soft colors, FRIGG pacifiers make a beautiful addition to your collection of baby essentials.', 2, 5, 21, 'img/product baby/baby_essential_pacifier2_1.webp', 'img/product baby/baby_essential_pacifier2_2.webp', NULL, NULL),
(105, 'Frigg Moon Natural Rubber Baby Pacifier | 2-Pack', 1, '15.00', 'The FRIGG line of moon phase rubber pacifiers is thoughtfully designed for your baby\'s comfort and inspired by the moon in motion. The outward curve keeps the pacifier off delicate skin, while air holes and a security handle ensure your baby stays safe. Within the pacifier shield, air holes reveal the eight phases of the moon in subtle detail. Available in a range of soft colors, FRIGG pacifiers make a beautiful addition to your collection of baby essentials.', 2, 5, 21, 'img/product baby/baby_essential_pacifier3_1.webp', 'img/product baby/baby_essential_pacifier3_2.webp', NULL, NULL),
(106, 'FRIGG Daisy Natural Rubber Baby Pacifier | 2-Pack', 1, '15.00', 'The FRIGG line of daisy natural latex pacifiers has been thoughtfully designed for your baby\'s comfort. The outward curve keeps the pacifier off their delicate skin, while features like air holes and a security handle ensure your baby stays safe. Available in a range of soft colors, FRIGG pacifiers make a beautiful addition to your collection of baby essentials.', 2, 5, 21, 'img/product baby/baby_essential_pacifier4_1.webp', 'img/product baby/baby_essential_pacifier4_2.webp', NULL, NULL),
(107, 'Silicone Pacifier Case', 1, '14.00', 'Comfort is always within reach with a mushie pacifier case, equipped with a sturdy strap and room to fit up to three pacifiers. Designed in Sweden, the pacifier case is made from food-grade silicone in timeless colors and can be easily looped onto a diaper bag or stroller. ', 2, 5, 21, 'img/product baby/baby_essential_pacifier5_1.webp', NULL, NULL, NULL);
INSERT INTO `produtos` (`ID`, `titulo`, `ID_marca`, `preco`, `descricao`, `ID_categoria`, `ID_sub_categoria`, `ID_tipo_produto`, `img1`, `img2`, `img3`, `img4`) VALUES
(108, 'Finger Toothbrush', 1, '10.00', 'Help brushing go smoothly and begin building good habits with these 100% BPA-free, chemical-free finger toothbrushes! Made from food grade silicone, the bumps on the back assist with sore, teething gums while the bristles on the front keep your baby\'s teeth clean. ', 2, 5, 28, 'img/product baby/baby_essential_toothbrush1_1.webp', NULL, NULL, NULL),
(109, 'Flower Teether Bracelet', 1, '13.00', 'Help soothe your baby\'s irritated gums with our line of teethers. Made from 100% non-toxic, food-grade silicone, and designed to be easy to grasp by tiny fingers, our teethers are safe for your baby to use. Their sophisticated colors and playful design make them a stylish addition to your home.', 2, 5, 28, 'img/product baby/baby_essential_toothbrush2_1.webp', 'img/product baby/baby_essential_toothbrush2_2.webp', NULL, NULL),
(110, 'Sun Teether', 1, '12.00', 'Help soothe your baby\'s irritated gums with our line of sun teethers. Made from 100% non-toxic, food-grade silicone, they\'re safe for your baby to use—and their whimsical design and sophisticated colors make them a stylish addition to your home.', 2, 5, 28, 'img/product baby/baby_essential_toothbrush3_1.webp', 'img/product baby/baby_essential_toothbrush3_2.webp', NULL, NULL),
(111, 'Bear Teether', 1, '10.00', 'Help soothe your baby\'s irritated gums with our line of teethers. Made from 100% non-toxic, food-grade silicone, and designed to be easy to grasp by tiny fingers, our teethers are safe for your baby to use. Their sophisticated colors and playful design make them a stylish addition to your home.', 2, 5, 28, 'img/product baby/baby_essential_toothbrush4_1.webp', 'img/product baby/baby_essential_toothbrush4_2.webp', NULL, NULL),
(112, 'Cat Teether', 1, '10.00', 'Help soothe your baby\'s irritated gums with our line of teethers. Made from 100% non-toxic, food-grade silicone, and designed to be easy to grasp by tiny fingers, our teethers are safe for your baby to use. Their sophisticated colors and playful design make them a stylish addition to your home.', 2, 5, 28, 'img/product baby/baby_essential_toothbrush5_1.webp', 'img/product baby/baby_essential_toothbrush5_2.webp', NULL, NULL),
(113, 'Rainbow Teether', 1, '12.00', 'Help soothe your baby\'s irritated gums with our line of rainbow teethers. Made from 100% non-toxic, food-grade silicone, they\'re safe for your baby to use—and their whimsical design and sophisticated colors make them a stylish addition to your home. ', 2, 5, 28, 'img/product baby/baby_essential_toothbrush6_1.webp', 'img/product baby/baby_essential_toothbrush6_2.webp', NULL, NULL),
(114, 'Ball Teether', 1, '12.00', 'Help soothe your baby\'s irritated gums with our line of teethers. Made from 100% non-toxic, food-grade silicone, and designed to be easy to grasp by tiny fingers, our teether balls are safe for your baby to use. Their geometric design and sophisticated colors make them a stylish addition to your home.', 2, 5, 28, 'img/product baby/baby_essential_toothbrush7_1.webp', 'img/product baby/baby_essential_toothbrush7_2.webp', NULL, NULL),
(115, 'Nesting Stars Toy', 1, '15.00', 'Shooting stars are lighting up the Danish town of Aarhus to make their way to your child\'s playroom. Little ones will love matching the muted colors while exploring their fine motor skills with this beautiful nesting star toy set.\r\n\r\nWith our Danish Hygge collection of toys for kids 10 months - 3 years, your child can play while learning valuable skills and a little about Denmark—a charming country home to beautiful buildings and our favorite fairy tales.', 2, 8, 9, 'img/product baby/baby_fun_toy4_1.webp', 'img/product baby/baby_fun_toy4_2.webp', NULL, NULL),
(116, 'Rainbow Stacker Toy', 1, '16.00', 'From our Danish hygge collection comes this playful rainbow stacker, inspired by the rainbow skywalk in Aarhus, Denmark. Little ones will sort, stack and play with this beautiful set, all while learning with soft colors and developing their fine motor skills.', 2, 8, 9, 'img/product baby/baby_fun_toy5_1.webp', 'img/product baby/baby_fun_toy5_2.webp', NULL, NULL),
(117, 'Stacking Cups Toy', 1, '15.00', 'Welcome to Rundetårn in Copenhagen! This colorful round tower is fun and engaging for your baby to look at, while stacking the pieces helps them develop their organization and motor skills.\r\n\r\nWith our Danish Hygge collection of toys for kids 0-3 years, your child can play while learning valuable skills and a little about Denmark—a charming country home to beautiful buildings and our favorite fairy tales. ', 2, 8, 9, 'img/product baby/baby_fun_toy6_1.webp', 'img/product baby/baby_fun_toy6_2.webp', 'img/product baby/baby_fun_toy6_3.webp', NULL),
(118, 'Silicone Training Cup + Straw', 1, '16.00', 'Put a lid on spills and messes with a sophisticated training cup designed for little hands and beautiful homes. Made from 100% food grade silicone, this minimal cup comes with a removable lid and a gentle straw for baby gums and toddler teeth. Build up fine motor skills and start young feeders on their transition journey from bottle to cup.', 2, 6, 24, 'img/product baby/baby_toeat_cup1_1.webp', 'img/product baby/baby_toeat_cup1_2.webp', NULL, NULL),
(119, 'Silicone Sippy Cup', 1, '16.00', 'Start little feeders with a simple and beautiful silicone sippy cup, designed to be comfortably held by tiny hands. As your baby begins the transitions from bottles to cups, our silicone sippy cup helps develop fine motor skills and independent eating habits. Refill without worries with a leak resistant removable lid. Made with 100% food grade silicone, it\'s soothing for baby gums and toddler teeth to latch onto while drinking.', 2, 6, 24, 'img/product baby/baby_toeat_cup2_1.webp', 'img/product baby/baby_toeat_cup2_2.webp', NULL, NULL),
(120, 'Silicone Feeding Spoons 2-Pack', 1, '10.00', 'Made of 100% BPA and chemical free material, our silicone spoons are perfect for feeding your baby. The soft silicone tip protects your baby\'s sensitive gums and newly grown teeth making meal time enjoyable for you and your little one! ', 2, 6, 23, 'img/product baby/baby_toeat_cutlery1_1.webp', 'img/product baby/baby_toeat_cutlery1_2.webp', NULL, NULL),
(121, 'Silicone Feeding Spoons 2-Pack', 1, '10.00', 'Made of 100% BPA and chemical free material, our silicone spoons are perfect for feeding your baby. The soft silicone tip protects your baby\'s sensitive gums and newly grown teeth making meal time enjoyable for you and your little one! ', 2, 6, 23, 'img/product baby/baby_toeat_cutlery2_1.webp', 'img/product baby/baby_toeat_cutlery2_2.webp', NULL, NULL),
(122, 'Silicone Suction Plate', 1, '17.00', 'Designed in Sweden, this silicone plate features a suction that keeps it in place, minimizing spills as your little ones learn how to feed themselves. The food-grade silicone material lets you safely heat food up directly in the dish -- without worrying about things getting too hot for your baby\'s fingers. ', 2, 6, 25, 'img/product baby/baby_toeat_plate1_1.webp', 'img/product baby/baby_toeat_plate1_2.webp', NULL, NULL),
(123, 'Silicone Baby Bib', 1, '13.00', 'Keep your little one feeling comfy and clean with our fun-loving collection of silicone baby bibs. Designed in Sweden, Mushie baby bibs feature classic patterns, capturing a look that is both timeless and elegant.', 2, 6, 27, 'img/product baby/baby_toeat_bib1_1.webp', 'img/product baby/baby_toeat_bib1_2.webp', NULL, NULL),
(124, 'Silicone Baby Bib', 1, '13.00', 'Keep your little one feeling comfy and clean with our fun-loving collection of silicone baby bibs. Designed in Sweden, Mushie baby bibs feature classic patterns, capturing a look that is both timeless and elegant.', 2, 6, 27, 'img/product baby/baby_toeat_bib2_1.webp', 'img/product baby/baby_toeat_bib2_2.webp', NULL, NULL),
(125, 'Silicone Baby Bib', 1, '13.00', 'Keep your little one feeling comfy and clean with our fun-loving collection of silicone baby bibs. Designed in Sweden, Mushie baby bibs feature classic patterns, capturing a look that is both timeless and elegant.', 2, 6, 27, 'img/product baby/baby_toeat_bib3_1.webp', 'img/product baby/baby_toeat_bib3_2.webp', NULL, NULL),
(126, 'Square Dinnerware Bowl, Set of 2', 1, '14.00', 'With soft colors and a clean design, this plastic dinnerware set is simple, elegant, and easy for your baby to hold. Made in Denmark from BPA-free polypropylene plastic, these bowls are dishwasher and microwave-safe to simplify mealtime and make cleanup easy.', 2, 6, 27, 'img/product baby/baby_toeat_plate2_1.webp', 'img/product baby/baby_toeat_plate2_2.webp', 'img/product baby/baby_toeat_plate2_3.webp', NULL),
(127, 'Knitted Textured Dots Baby Blanket', 1, '48.00', 'Keep your baby cozy wrapped in our Organic Dots Knitted Baby Blanket. Perfectly sized for strollers and cribs, this versatile blanket is warm and breathable. The dots add texture and style, making it a great addition to your nursery.', 2, 5, 13, 'img/product baby/baby_essential_throw1_1.webp', 'img/product baby/baby_essential_throw1_2.webp', NULL, NULL),
(128, 'Knitted Confetti Baby Blanket', 1, '48.00', 'Keep your baby cozy and wrapped in our Organic Confetti Knitted Baby Blanket. Available in gender neutral colors, this confetti dotted blanket is soft, versatile, and perfect for warm or cold days.', 2, 5, 13, 'img/product baby/baby_essential_throw2_1.webp', 'img/product baby/baby_essential_throw2_2.webp', NULL, NULL),
(129, 'Organic Cotton Muslin Cloths 3-Pack', 1, '22.00', 'Made from 100% organic cotton, our muslin cloth set serves as an extra soft layer ideal for a variety of daily uses. Each set includes three versatile cloths that function as calming mini blankets or to fulfill other nursery needs. Use the cloth at changing tables, within diaper bags or to clean small messes.', 2, 5, 22, 'img/product baby/baby_essential_muslin1_1.webp', 'img/product baby/baby_essential_muslin1_2.webp', 'img/product baby/baby_essential_muslin1_3.webp', NULL),
(130, 'Organic Cotton Muslin Cloths 3-Pack', 1, '22.00', 'Made from 100% organic cotton, our muslin cloth set serves as an extra soft layer ideal for a variety of daily uses. Each set includes three versatile cloths that function as calming mini blankets or to fulfill other nursery needs. Use the cloth at changing tables, within diaper bags or to clean small messes.', 2, 5, 22, 'img/product baby/baby_essential_muslin2_1.webp', 'img/product baby/baby_essential_muslin2_2.webp', 'img/product baby/baby_essential_muslin2_3.webp', NULL),
(131, 'Organic Cotton Muslin Cloths 3-Pack', 1, '22.00', 'Made from 100% organic cotton, our muslin cloth set serves as an extra soft layer ideal for a variety of daily uses. Each set includes three versatile cloths that function as calming mini blankets or to fulfill other nursery needs. Use the cloth at changing tables, within diaper bags or to clean small messes.', 2, 5, 22, 'img/product baby/baby_essential_muslin3_1.webp', 'img/product baby/baby_essential_muslin3_2.webp', 'img/product baby/baby_essential_muslin3_3.webp', NULL),
(132, 'FLORENCE BEACH & GARDEN SET', 4, '64.00', 'CHILDREN’S SILICONE BEACH AND GARDEN SET\r\nThe Florence Beach and Garden Set guarantees hours of fun and strengthens your little one’s fine motor skills whether in the garden, at the beach or the pool and is ideal to bring along on holidays.', 2, 8, 9, 'img/product baby/baby_fun_toy7_1.webp', 'img/product baby/baby_fun_toy7_2.webp', NULL, NULL),
(133, 'SAVANNAH POOL LARGE', 4, '64.00', 'A cool summer essential! The little ones will love playing in the water on warm days.', 2, 8, 9, 'img/product baby/baby_fun_toy8_1.webp', '', NULL, NULL),
(134, 'JOHN GARDEN TENNIS SET\r\n', 4, '39.00', 'The John Garden Tennis Set guarantees hours of fun, setting up a tournament for the whole family - and some well-deserved breaks in the shade.', 2, 8, 9, 'img/product baby/baby_fun_toy9_1.webp', 'img/product baby/baby_fun_toy9_2.webp', NULL, NULL);

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
(7, 'Lamp'),
(8, 'Cushions'),
(9, 'Toys'),
(10, 'Feeding'),
(11, 'Carpet'),
(12, 'Vase'),
(13, 'Throw'),
(14, 'Carrier'),
(15, 'Hook'),
(16, 'Mirror'),
(21, 'Pacifier'),
(22, 'Muslin'),
(23, 'Cutlery'),
(24, 'Cups'),
(25, 'Plates'),
(26, 'Puzzle'),
(27, 'Bib'),
(28, 'Toothbrush');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `sub_categorias`
--
ALTER TABLE `sub_categorias`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tipo_produto`
--
ALTER TABLE `tipo_produto`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
