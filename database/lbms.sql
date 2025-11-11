-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2025 at 09:28 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `BookID` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `cover_id` bigint(20) DEFAULT NULL,
  `work_key` varchar(50) DEFAULT NULL,
  `bookgenre` varchar(50) DEFAULT NULL,
  `year_published` varchar(20) DEFAULT NULL,
  `cover_filename` varchar(50) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`BookID`, `title`, `author`, `cover_id`, `work_key`, `bookgenre`, `year_published`, `cover_filename`, `status`) VALUES
(1, 'Sonnenfinsternis', 'Arthur Koestler', 368797, '/works/OL804246W', 'Programming', 'Unknown', '368797.jpg', 'in-store'),
(2, 'The science of getting rich, or, financial success through creative thought', 'Wallace D. Wattles', 854989, '/works/OL3792044W', 'Programming', 'Unknown', '854989.jpg', 'in-store'),
(3, 'The Good Earth', 'Pearl S. Buck', 2626823, '/works/OL1140109W', 'Programming', 'Unknown', '2626823.jpg', 'borrowed'),
(4, 'Arsène Lupin, gentleman-cambrioleur', 'Maurice Leblanc', 6125938, '/works/OL1064290W', 'Programming', 'Unknown', '6125938.jpg', 'in-store'),
(5, 'The Voyage of the Dawn Treader', 'C.S. Lewis', 9184719, '/works/OL71132W', 'Programming', 'Unknown', '9184719.jpg', 'in-store'),
(6, 'Идіотъ', 'Фёдор Михайлович Достоевский', 9412225, '/works/OL166973W', 'Programming', 'Unknown', '9412225.jpg', 'in-store'),
(7, 'The Story of Philosophy', 'Will Durant', 405360, '/works/OL1073898W', 'Programming', 'Unknown', '405360.jpg', 'in-store'),
(8, 'Guess How Much I Love You', 'Sam McBratney', 13282906, '/works/OL58402W', 'Programming', 'Unknown', '13282906.jpg', 'in-store'),
(9, 'The Thirty-Nine Steps', 'John Buchan', 93020, '/works/OL76524W', 'Programming', 'Unknown', '93020.jpg', 'in-store'),
(10, 'The Hunger Games', 'Suzanne Collins', 12646537, '/works/OL5735363W', 'Programming', 'Unknown', '12646537.jpg', 'in-store'),
(11, 'El Conde de Montecristo', 'Alexandre Dumas', 14566393, '/works/OL36287W', 'Programming', 'Unknown', '14566393.jpg', 'in-store'),
(12, 'Three Men in a Boat (to say nothing of the dog)', 'Jerome Klapka Jerome', 8243006, '/works/OL1793164W', 'Programming', 'Unknown', '8243006.jpg', 'in-store'),
(13, 'Uncle Tom\'s Cabin', 'Harriet Beecher Stowe', 12728198, '/works/OL152161W', 'Programming', 'Unknown', '12728198.jpg', 'in-store'),
(14, 'NASA/DoD aerospace knowledge diffusion research project', 'Thomas E. Pinelli', 8936636, '/works/OL8894965W', 'Programming', 'Unknown', '8936636.jpg', 'in-store'),
(15, 'Catching Fire', 'Suzanne Collins', 12646539, '/works/OL5735360W', 'Programming', 'Unknown', '12646539.jpg', 'in-store'),
(16, 'Анна Каренина', 'Лев Толстой', 2560652, '/works/OL267096W', 'Programming', 'Unknown', '2560652.jpg', 'in-store'),
(17, 'Gulliver\'s Travels', 'Jonathan Swift', 12717083, '/works/OL20600W', 'Programming', 'Unknown', '12717083.jpg', 'in-store'),
(18, 'Hamlet', 'William Shakespeare', 8281954, '/works/OL9170454W', 'Programming', 'Unknown', '8281954.jpg', 'in-store'),
(19, 'Principles of Anatomy and Physiology', 'Gerard J. Tortora', 3810109, '/works/OL1827306W', 'Programming', 'Unknown', '3810109.jpg', 'in-store'),
(20, 'Autobiography of a Yogi', 'Yogananda Paramahansa', 805448, '/works/OL528094W', 'Programming', 'Unknown', '805448.jpg', 'in-store'),
(21, 'The Alchemist, 1612', 'Ben Jonson', 7463992, '/works/OL1085186W', 'Programming', 'Unknown', '7463992.jpg', 'in-store'),
(22, 'The Ugly Duckling', 'Hans Christian Andersen', 446546, '/works/OL15155002W', 'Programming', 'Unknown', '446546.jpg', 'in-store'),
(23, 'Of Mice and Men', 'John Steinbeck', 14319003, '/works/OL23204W', 'Programming', 'Unknown', '14319003.jpg', 'in-store'),
(24, 'The Grapes of Wrath', 'John Steinbeck', 12715902, '/works/OL23205W', 'Programming', 'Unknown', '12715902.jpg', 'in-store'),
(25, 'A Midsummer Night\'s Dream', 'William Shakespeare', 7205924, '/works/OL259010W', 'Programming', 'Unknown', '7205924.jpg', 'in-store'),
(26, 'Преступление и наказание', 'Фёдор Михайлович Достоевский', 9411873, '/works/OL166894W', 'Programming', 'Unknown', '9411873.jpg', 'in-store'),
(27, 'The Lost World', 'Arthur Conan Doyle', 8231444, '/works/OL262460W', 'Programming', 'Unknown', '8231444.jpg', 'in-store'),
(28, 'Much Ado About Nothing', 'William Shakespeare', 8290853, '/works/OL362691W', 'Programming', 'Unknown', '8290853.jpg', 'in-store'),
(29, 'The Legend of Sleepy Hollow', 'Washington Irving', 8243083, '/works/OL63985W', 'Programming', 'Unknown', '8243083.jpg', 'in-store'),
(30, 'As You Like It', 'William Shakespeare', 7338874, '/works/OL362698W', 'Programming', 'Unknown', '7338874.jpg', 'in-store'),
(31, 'The Adventures of Sherlock Holmes [12 stories]', 'Arthur Conan Doyle', 6717853, '/works/OL262421W', 'Programming', 'Unknown', '6717853.jpg', 'in-store'),
(32, 'David Copperfield', 'Charles Dickens', 1048892, '/works/OL8662242W', 'Programming', 'Unknown', '1048892.jpg', 'in-store'),
(33, 'Walden', 'Henry David Thoreau', 11248037, '/works/OL55649W', 'Programming', 'Unknown', '11248037.jpg', 'in-store'),
(34, 'Othello', 'William Shakespeare', 7165018, '/works/OL258850W', 'Programming', 'Unknown', '7165018.jpg', 'in-store'),
(35, 'Great Expectations', 'Charles Dickens', 13322313, '/works/OL8721462W', 'Programming', 'Unknown', '13322313.jpg', 'in-store'),
(36, 'The Merchant of Venice', 'William Shakespeare', 7182819, '/works/OL258758W', 'Programming', 'Unknown', '7182819.jpg', 'in-store'),
(37, 'King Lear', 'William Shakespeare', 7420452, '/works/OL259026W', 'Programming', 'Unknown', '7420452.jpg', 'in-store'),
(38, 'Robinson Crusoe', 'Daniel Defoe', 8783768, '/works/OL45310W', 'Programming', 'Unknown', '8783768.jpg', 'in-store'),
(39, 'A Tale of Two Cities', 'Charles Dickens', 13301713, '/works/OL8193465W', 'Programming', 'Unknown', '13301713.jpg', 'in-store'),
(40, 'Bible', 'Bible', 12707846, '/works/OL17732W', 'Programming', 'Unknown', '12707846.jpg', 'in-store'),
(41, 'Management information systems', 'Kenneth C. Laudon', 1104118, '/works/OL58235W', 'Programming', 'Unknown', '1104118.jpg', 'in-store'),
(42, 'The Power of Positive Thinking', 'Norman Vincent Peale', 14570194, '/works/OL2917168W', 'Programming', 'Unknown', '14570194.jpg', 'in-store'),
(43, 'Laws, etc', 'United States', 5810161, '/works/OL10396878W', 'Programming', 'Unknown', '5810161.jpg', 'in-store'),
(44, 'Mockingjay', 'Suzanne Collins', 6304853, '/works/OL14908941W', 'Programming', 'Unknown', '6304853.jpg', 'in-store'),
(45, 'The C Programming Language', 'Brian W. Kernighan', 6684943, '/works/OL4617640W', 'Programming', 'Unknown', '6684943.jpg', 'in-store'),
(46, 'Managerial Accounting', 'Jerry J. Weygandt', 6938153, '/works/OL1881227W', 'Programming', 'Unknown', '6938153.jpg', 'in-store'),
(47, 'The 7 Habits of Highly Effective People', 'Stephen R. Covey', 10079937, '/works/OL2629977W', 'Programming', 'Unknown', '10079937.jpg', 'in-store'),
(48, 'Essential Maths', 'Sean McArdle', 2584771, '/works/OL8838576W', 'Programming', 'Unknown', '2584771.jpg', 'in-store'),
(49, 'A Clash of Kings', 'George R. R. Martin', 8231751, '/works/OL257939W', 'Programming', 'Unknown', '8231751.jpg', 'in-store'),
(50, 'The Last Days of Pompeii', 'Edward Bulwer Lytton, Baron Lytton', 8247711, '/works/OL61867W', 'Programming', 'Unknown', '8247711.jpg', 'in-store'),
(51, 'Advances in Computers, Volume 49 (Advances in Computers)', 'Marvin V. Zelkowitz', 1094406, '/works/OL7938163W', 'Programming', 'Unknown', '1094406.jpg', 'in-store'),
(52, 'The Runaway Bunny', 'Margaret Wise Brown', 8743590, '/works/OL151861W', 'Programming', 'Unknown', '8743590.jpg', 'in-store'),
(53, 'Atonement', 'Ian McEwan', 8381043, '/works/OL1855944W', 'Programming', 'Unknown', '8381043.jpg', 'in-store'),
(54, 'Principles of Macroeconomics', 'N. Gregory Mankiw', 5063349, '/works/OL270564W', 'Programming', 'Unknown', '5063349.jpg', 'in-store'),
(55, 'Inquiry into Life', 'Sylvia S. Mader', 10043864, '/works/OL2657790W', 'Programming', 'Unknown', '10043864.jpg', 'in-store'),
(56, 'Divina Commedia', 'Dante Alighieri', 11621024, '/works/OL93082W', 'Programming', 'Unknown', '11621024.jpg', 'in-store'),
(57, 'C++ how to program', 'Paul J. Deitel', 15111450, '/works/OL7943176W', 'Programming', 'Unknown', '15111450.jpg', 'in-store'),
(58, 'Der Vorleser', 'Bernhard Schlink', 998445, '/works/OL14871157W', 'Programming', 'Unknown', '998445.jpg', 'in-store'),
(59, 'Psycho-cybernetics', 'Maxwell Maltz', 14428293, '/works/OL99079W', 'Programming', 'Unknown', '14428293.jpg', 'in-store'),
(60, 'Reconfigurable Processor Array A Bit Sliced Parallel Computer (USA)', 'A. Rushton', 8237007, '/works/OL2829091W', 'Programming', 'Unknown', '8237007.jpg', 'in-store'),
(61, 'Вишневый сад', 'Антон Павлович Чехов', 13420205, '/works/OL55417W', 'Programming', 'Unknown', '13420205.jpg', 'in-store'),
(62, 'Coriolanus', 'William Shakespeare', 8222112, '/works/OL362166W', 'Programming', 'Unknown', '8222112.jpg', 'in-store'),
(63, 'Cosmos', 'Carl Sagan', 8283901, '/works/OL15829966W', 'Programming', 'Unknown', '8283901.jpg', 'in-store'),
(64, 'Software Engineering', 'Roger S. Pressman', 66176, '/works/OL284009W', 'Programming', 'Unknown', '66176.jpg', 'in-store'),
(65, 'The C++ programming language', 'Bjarne Stroustrup', 136583, '/works/OL53184W', 'Programming', 'Unknown', '136583.jpg', 'in-store'),
(66, 'Arms and the Man', 'George Bernard Shaw', 6275582, '/works/OL1066525W', 'Programming', 'Unknown', '6275582.jpg', 'in-store'),
(67, 'Conceptual physics', 'Paul G. Hewitt', 7065516, '/works/OL1930743W', 'Programming', 'Unknown', '7065516.jpg', 'in-store'),
(68, 'Extradition laws and treaties, United States', 'United States', 9317727, '/works/OL70052W', 'Programming', 'Unknown', '9317727.jpg', 'in-store'),
(69, 'Baby Einstein', 'Julie Aigner-Clark', 545270, '/works/OL8571036W', 'Programming', 'Unknown', '545270.jpg', 'in-store'),
(70, 'An Inspector Calls', 'J. B. Priestley', 12878266, '/works/OL240566W', 'Programming', 'Unknown', '12878266.jpg', 'in-store'),
(71, 'The art of computer programming', 'Donald Knuth', 136600, '/works/OL257263W', 'Programming', 'Unknown', '136600.jpg', 'in-store'),
(72, 'The magic of believing', 'Claude M. Bristol', 14424610, '/works/OL120672W', 'Programming', 'Unknown', '14424610.jpg', 'in-store'),
(73, 'Object-oriented Programming with C++', 'E. Balagurusamy', 10420384, '/works/OL9305390W', 'Programming', 'Unknown', '10420384.jpg', 'in-store'),
(74, 'The Miracle Worker', 'William Gibson', 12819763, '/works/OL261558W', 'Programming', 'Unknown', '12819763.jpg', 'in-store'),
(75, 'Programming Python', 'Mark Lutz', 805644, '/works/OL2784126W', 'Programming', 'Unknown', '805644.jpg', 'in-store'),
(76, 'Step on a Crack', 'James Patterson', 187654, '/works/OL167155W', 'Programming', 'Unknown', '187654.jpg', 'in-store'),
(77, '4th of July', 'James Patterson', 2786155, '/works/OL167168W', 'Programming', 'Unknown', '2786155.jpg', 'in-store'),
(78, 'Programming with Java', 'E. Balagurusamy', 10487733, '/works/OL22705232W', 'Programming', 'Unknown', '10487733.jpg', 'in-store'),
(79, 'SQL for Dummies', 'Allen G. Taylor', 299637, '/works/OL2035966W', 'Programming', 'Unknown', '299637.jpg', 'in-store'),
(80, 'Core Python Programming', 'R. Nageswara Rao', 13192647, '/works/OL30906747W', 'Programming', 'Unknown', '13192647.jpg', 'in-store'),
(81, 'Learning Python', 'Mark Lutz', 1312568, '/works/OL2784125W', 'Programming', 'Unknown', '1312568.jpg', 'in-store'),
(82, 'King Henry IV. Part 2', 'William Shakespeare', 7339581, '/works/OL362697W', 'Programming', 'Unknown', '7339581.jpg', 'in-store'),
(83, 'Programming in ANSI C', 'E. Balagurusamy', 12597885, '/works/OL27275831W', 'Programming', 'Unknown', '12597885.jpg', 'in-store'),
(84, 'C programming', 'K. N. King', 252635, '/works/OL3233592W', 'Programming', 'Unknown', '252635.jpg', 'in-store'),
(85, 'Microprocessors and interfacing', 'Douglas V. Hall', 9089229, '/works/OL4085889W', 'Programming', 'Unknown', '9089229.jpg', 'in-store'),
(86, 'Structure and Interpretation of Computer Programs (SICP)', 'Harold Abelson', 149338, '/works/OL3267304W', 'Programming', 'Unknown', '149338.jpg', 'in-store'),
(87, 'The Program', 'Suzanne Young', 7441541, '/works/OL16557740W', 'Programming', 'Unknown', '7441541.jpg', 'in-store'),
(88, 'Eloquent Javascript', 'Marijn Haverbeke', 7082166, '/works/OL15444205W', 'Programming', 'Unknown', '7082166.jpg', 'in-store'),
(89, 'Indonesia Journal', 'Benedict Anderson', 13184112, '/works/OL21310307W', 'Programming', 'Unknown', '13184112.jpg', 'in-store'),
(90, 'Dragonball (Doragon bo-ru)', '鳥山 明 [Akira Toriyama]', 813906, '/works/OL5753060W', 'Programming', 'Unknown', '813906.jpg', 'in-store'),
(91, 'Godfrey of Bulloigne', 'Torquato Tasso', 5954727, '/works/OL502943W', 'Programming', 'Unknown', '5954727.jpg', 'in-store'),
(93, 'Unlimited power', 'Tony Robbins', 4166860, '/works/OL2715466W', 'Programming', 'Unknown', '4166860.jpg', 'in-store'),
(94, 'Band of Brothers', 'Stephen E. Ambrose', 3101053, '/works/OL478550W', 'Programming', 'Unknown', '3101053.jpg', 'in-store'),
(95, 'Ender\'s Shadow', 'Orson Scott Card', 12009325, '/works/OL49496W', 'Programming', 'Unknown', '12009325.jpg', 'in-store'),
(96, 'Diary of a Wimpy Kid', 'Jeff Kinney', 14376136, '/works/OL8483260W', 'Children\'s Fiction', 'Unknown', '14376136.jpg', 'in-store'),
(97, 'Rich Dad, Poor Dad', 'Robert T. Kiyosaki', 8315603, '/works/OL2010879W', 'Children\'s Fiction', 'Unknown', '8315603.jpg', 'in-store'),
(98, 'The Book of Dragons', 'Edith Nesbit', 4342323, '/works/OL99529W', 'Children\'s Fiction', 'Unknown', '4342323.jpg', 'in-store'),
(99, 'The princess and the goblin', 'George MacDonald', 13192917, '/works/OL6583284W', 'Children\'s Fiction', 'Unknown', '13192917.jpg', 'in-store'),
(100, 'Kinder- und Hausmärchen', 'Gebrüder Grimm [Brothers Grimm]', 8236293, '/works/OL45361W', 'Children\'s Fiction', 'Unknown', '8236293.jpg', 'in-store'),
(101, 'Dog Days', 'Jeff Kinney', 12366143, '/works/OL5682519W', 'Children\'s Fiction', 'Unknown', '12366143.jpg', 'in-store'),
(102, 'Kim', 'Rudyard Kipling', 1053011, '/works/OL19908W', 'Children\'s Fiction', 'Unknown', '1053011.jpg', 'in-store'),
(103, 'Treasure Island', 'Robert Louis Stevenson', 13859660, '/works/OL24034W', 'Children\'s Fiction', 'Unknown', '13859660.jpg', 'in-store'),
(104, 'Five Children and It', 'Edith Nesbit', 28174, '/works/OL99499W', 'Children\'s Fiction', 'Unknown', '28174.jpg', 'in-store'),
(105, 'The Adventures of Tom Sawyer', 'Mark Twain', 12043351, '/works/OL53919W', 'Children\'s Fiction', 'Unknown', '12043351.jpg', 'in-store'),
(106, 'A Christmas Carol', 'Charles Dickens', 13299222, '/works/OL8193497W', 'Children\'s Fiction', 'Unknown', '13299222.jpg', 'in-store'),
(107, 'Study Guide', 'SuperSummary', 13175019, '/works/OL21885963W', 'Children\'s Fiction', 'Unknown', '13175019.jpg', 'in-store'),
(108, 'Black Beauty', 'Anna Sewell', 5007492, '/works/OL15854658W', 'Children\'s Fiction', 'Unknown', '5007492.jpg', 'in-store'),
(109, 'Study Guide', 'SuperSummary', 12366237, '/works/OL21868175W', 'Children\'s Fiction', 'Unknown', '12366237.jpg', 'in-store'),
(110, 'James and the Giant Peach', 'Roald Dahl', 8252454, '/works/OL45809W', 'Children\'s Fiction', 'Unknown', '8252454.jpg', 'in-store'),
(111, 'Harry Potter and the Deathly Hallows', 'J. K. Rowling', 10110415, '/works/OL82586W', 'Children\'s Fiction', 'Unknown', '10110415.jpg', 'in-store'),
(112, 'Alice\'s Adventures in Wonderland', 'Lewis Carroll', 10527843, '/works/OL138052W', 'Children\'s Fiction', 'Unknown', '10527843.jpg', 'in-store'),
(113, 'Heidi', 'Johanna Spyri', 2668686, '/works/OL1455042W', 'Children\'s Fiction', 'Unknown', '2668686.jpg', 'in-store'),
(114, 'Harry Potter and the Goblet of Fire', 'J. K. Rowling', 12059372, '/works/OL82560W', 'Children\'s Fiction', 'Unknown', '12059372.jpg', 'in-store'),
(115, 'The Night Before Christmas', 'Clement Clarke Moore', 8236410, '/works/OL655908W', 'Children\'s Fiction', 'Unknown', '8236410.jpg', 'in-store'),
(116, 'The Complete Life and Adventures of Santa Claus', 'L. Frank Baum', 1979059, '/works/OL262358W', 'Children\'s Fiction', 'Unknown', '1979059.jpg', 'in-store'),
(117, 'Little men', 'Louisa May Alcott', 8043576, '/works/OL17761452W', 'Children\'s Fiction', 'Unknown', '8043576.jpg', 'in-store'),
(118, 'Vingt mille lieues sous les mers', 'Jules Verne', 6573517, '/works/OL1099280W', 'Children\'s Fiction', 'Unknown', '6573517.jpg', 'in-store'),
(119, 'Dracula', 'Bram Stoker', 12216503, '/works/OL85892W', 'Children\'s Fiction', 'Unknown', '12216503.jpg', 'in-store'),
(120, 'Little Women', 'Louisa May Alcott', 8775559, '/works/OL29983W', 'Children\'s Fiction', 'Unknown', '8775559.jpg', 'in-store'),
(121, 'The Wind in the Willows', 'Kenneth Grahame', 13335427, '/works/OL28570037W', 'Children\'s Fiction', 'Unknown', '13335427.jpg', 'in-store'),
(122, 'The Secret Garden', 'Frances Hodgson Burnett', 12622062, '/works/OL69612W', 'Children\'s Fiction', 'Unknown', '12622062.jpg', 'in-store'),
(123, 'Oliver Twist', 'Charles Dickens', 13300802, '/works/OL8193478W', 'Children\'s Fiction', 'Unknown', '13300802.jpg', 'in-store'),
(124, 'George\'s Marvelous Medicine', 'Roald Dahl', 11388220, '/works/OL45866W', 'Children\'s Fiction', 'Unknown', '11388220.jpg', 'in-store'),
(125, 'The Raven', 'Edgar Allan Poe', 8246077, '/works/OL41081W', 'Children\'s Fiction', 'Unknown', '8246077.jpg', 'in-store'),
(126, 'The World Almanac for Kids', 'Judith S. Levey', 6576905, '/works/OL2688199W', 'Children\'s Fiction', 'Unknown', '6576905.jpg', 'in-store'),
(127, 'The Sea-Wolf', 'Jack London', 8236975, '/works/OL144824W', 'Children\'s Fiction', 'Unknown', '8236975.jpg', 'in-store'),
(128, 'Rodrick Rules', 'Jeff Kinney', 8542270, '/works/OL15110516W', 'Children\'s Fiction', 'Unknown', '8542270.jpg', 'in-store'),
(129, 'Five on a Treasure Island', 'Enid Blyton', 14570937, '/works/OL1948704W', 'Children\'s Fiction', 'Unknown', '14570937.jpg', 'in-store'),
(130, 'The Stand', 'Stephen King', 9255992, '/works/OL81618W', 'Children\'s Fiction', 'Unknown', '9255992.jpg', 'in-store'),
(131, 'The Long Haul', 'Jeff Kinney', 7316502, '/works/OL17076678W', 'Children\'s Fiction', 'Unknown', '7316502.jpg', 'in-store'),
(132, 'Cabin Fever', 'Jeff Kinney', 7247522, '/works/OL16224122W', 'Children\'s Fiction', 'Unknown', '7247522.jpg', 'in-store'),
(133, 'The Enormous Crocodile', 'Roald Dahl', 9158796, '/works/OL45881W', 'Children\'s Fiction', 'Unknown', '9158796.jpg', 'in-store'),
(134, 'Christmas Coloring and Activity Book for Kids', 'Coloring Zone Press House', 13197301, '/works/OL30282931W', 'Children\'s Fiction', 'Unknown', '13197301.jpg', 'in-store'),
(135, 'The Last Straw', 'Jeff Kinney', 12685121, '/works/OL15505465W', 'Children\'s Fiction', 'Unknown', '12685121.jpg', 'in-store'),
(136, 'Old School', 'Jeff Kinney', 8314206, '/works/OL17267509W', 'Children\'s Fiction', 'Unknown', '8314206.jpg', 'in-store'),
(137, 'Double Down', 'Jeff Kinney', 7888937, '/works/OL17603394W', 'Children\'s Fiction', 'Unknown', '7888937.jpg', 'in-store'),
(138, 'The Bad Beginning', 'Lemony Snicket', 7255974, '/works/OL15104144W', 'Children\'s Fiction', 'Unknown', '7255974.jpg', 'in-store'),
(139, 'Wrecking Ball', 'Jeff Kinney', 9278304, '/works/OL20465177W', 'Children\'s Fiction', 'Unknown', '9278304.jpg', 'in-store'),
(140, 'The Third Wheel', 'Jeff Kinney', 7247088, '/works/OL16797312W', 'Children\'s Fiction', 'Unknown', '7247088.jpg', 'in-store'),
(141, 'The Adventures of Captain Underpants', 'Dav Pilkey', 12625278, '/works/OL14871228W', 'Children\'s Fiction', 'Unknown', '12625278.jpg', 'in-store'),
(142, 'Hard Luck', 'Jeff Kinney', 10302464, '/works/OL16810620W', 'Children\'s Fiction', 'Unknown', '10302464.jpg', 'in-store'),
(143, 'Ramona Quimby, Age 8', 'Beverly Cleary', 15064600, '/works/OL151947W', 'Children\'s Fiction', 'Unknown', '15064600.jpg', 'in-store'),
(144, 'Roll of Thunder, Hear My Cry', 'Mildred D. Taylor', 12632397, '/works/OL40867W', 'Children\'s Fiction', 'Unknown', '12632397.jpg', 'in-store'),
(145, 'The Ugly Truth', 'Jeff Kinney', 7396124, '/works/OL15192743W', 'Children\'s Fiction', 'Unknown', '7396124.jpg', 'in-store'),
(146, 'Make Way for Ducklings', 'Robert McCloskey', 400659, '/works/OL4638367W', 'Children\'s Fiction', 'Unknown', '400659.jpg', 'in-store'),
(147, 'Just Kids', 'Patti Smith', 6671097, '/works/OL15474046W', 'Children\'s Fiction', 'Unknown', '6671097.jpg', 'in-store'),
(148, 'Diary of a Wimpy Kid', 'Jeff Kinney', 10323405, '/works/OL20890488W', 'Children\'s Fiction', 'Unknown', '10323405.jpg', 'in-store'),
(149, 'Diary of a Wimpy Kid', 'Jeff Kinney', 10332154, '/works/OL17812914W', 'Children\'s Fiction', 'Unknown', '10332154.jpg', 'in-store'),
(150, 'Kids Sketch Book', 'Frasier Cheng-Binns', 11240261, '/works/OL24583431W', 'Children\'s Fiction', 'Unknown', '11240261.jpg', 'in-store'),
(151, 'The Colorado Kid', 'Stephen King', 8380883, '/works/OL149171W', 'Children\'s Fiction', 'Unknown', '8380883.jpg', 'in-store'),
(152, 'Dear Zoo', 'Rod Campbell', 10577107, '/works/OL587083W', 'Children\'s Fiction', 'Unknown', '10577107.jpg', 'in-store'),
(153, 'Big Shot', 'Jeff Kinney', 11287547, '/works/OL24617382W', 'Children\'s Fiction', 'Unknown', '11287547.jpg', 'in-store'),
(154, 'Sketch Book for Kids', 'Js Sketch Book', 13178110, '/works/OL30312417W', 'Children\'s Fiction', 'Unknown', '13178110.jpg', 'in-store'),
(155, 'Stink', 'Megan McDonald', 516080, '/works/OL104360W', 'Children\'s Fiction', 'Unknown', '516080.jpg', 'in-store'),
(156, 'La Petite Sirene (French Well Loved Tales)', 'Hans Christian Andersen', 10563313, '/works/OL15049633W', 'Children\'s Fiction', 'Unknown', '10563313.jpg', 'in-store'),
(157, 'The Lost Hero', 'Rick Riordan', 12848687, '/works/OL15401200W', 'Children\'s Fiction', 'Unknown', '12848687.jpg', 'in-store'),
(158, 'Film art', 'David Bordwell', 10710151, '/works/OL10665037W', 'Children\'s Fiction', 'Unknown', '10710151.jpg', 'in-store'),
(159, 'Little Bear\'s Visit', 'Else Holmelund Minarik', 3092492, '/works/OL2568814W', 'Children\'s Fiction', 'Unknown', '3092492.jpg', 'in-store'),
(160, 'Diper Overlode', 'Jeff Kinney', 13028541, '/works/OL27816605W', 'Children\'s Fiction', 'Unknown', '13028541.jpg', 'in-store'),
(161, 'Bunnicula', 'Deborah Howe', 8536550, '/works/OL3464570W', 'Children\'s Fiction', 'Unknown', '8536550.jpg', 'in-store'),
(162, 'The magic Faraway Tree', 'Enid Blyton', 14605635, '/works/OL1948587W', 'Children\'s Fiction', 'Unknown', '14605635.jpg', 'in-store'),
(163, 'Diary of an Awesome Friendly Kid: Rowley Jefferson\'s Journal', 'Jeff Kinney', 8575743, '/works/OL19700683W', 'Children\'s Fiction', 'Unknown', '8575743.jpg', 'in-store'),
(164, 'Theodore Boone, kid lawyer', 'John Grisham', 9322884, '/works/OL15520598W', 'Children\'s Fiction', 'Unknown', '9322884.jpg', 'in-store'),
(165, 'Christmas Color by Number Coloring Book for Kids', 'Coloring Zone Press House', 13178107, '/works/OL30283005W', 'Children\'s Fiction', 'Unknown', '13178107.jpg', 'in-store'),
(166, 'My father\'s dragon', 'Ruth Stiles Gannett', 255052, '/works/OL2688555W', 'Children\'s Fiction', 'Unknown', '255052.jpg', 'in-store'),
(167, 'Drawing Pad for Kids', 'Js Simple Press', 13482414, '/works/OL30289872W', 'Children\'s Fiction', 'Unknown', '13482414.jpg', 'in-store'),
(168, 'The Electric Kool-Aid Acid Test', 'Tom Wolfe', 14839523, '/works/OL1925362W', 'Children\'s Fiction', 'Unknown', '14839523.jpg', 'in-store'),
(169, 'Mystic river', 'Dennis Lehane', 432349, '/works/OL17211W', 'Children\'s Fiction', 'Unknown', '432349.jpg', 'in-store'),
(170, 'The Paper Bag Princess (Classic Munsch)', 'Robert N Munsch', 707991, '/works/OL88684W', 'Children\'s Fiction', 'Unknown', '707991.jpg', 'in-store'),
(171, 'How to talk so kids will listen & listen so kids will talk', 'Adele Faber', 237165, '/works/OL553866W', 'Children\'s Fiction', 'Unknown', '237165.jpg', 'in-store'),
(172, 'The Chalk Box Kid', 'Clyde Robert Bulla', 1578299, '/works/OL8404516W', 'Children\'s Fiction', 'Unknown', '1578299.jpg', 'in-store'),
(173, 'Dog Man and Cat Kid', 'Dav Pilkey', 8315371, '/works/OL17844203W', 'Children\'s Fiction', 'Unknown', '8315371.jpg', 'in-store'),
(174, 'Rotkäppchen', 'Charles Perrault', 8196585, '/works/OL45429W', 'Children\'s Fiction', 'Unknown', '8196585.jpg', 'in-store'),
(175, 'No Brainer', 'Jeff Kinney', 13442265, '/works/OL34490931W', 'Children\'s Fiction', 'Unknown', '13442265.jpg', 'in-store'),
(176, 'The wimpy kid movie diary', 'Jeff Kinney', 6296762, '/works/OL15110519W', 'Children\'s Fiction', 'Unknown', '6296762.jpg', 'in-store'),
(177, 'Houghton Mifflin Vocabulary Readers', 'Houghton Mifflin Company Staff', 12916383, '/works/OL27468184W', 'Children\'s Fiction', 'Unknown', '12916383.jpg', 'in-store'),
(178, 'Who Moved My Cheese?', 'Spencer Johnson', 258839, '/works/OL1864135W', 'Children\'s Fiction', 'Unknown', '258839.jpg', 'in-store'),
(179, 'New Kid', 'Jerry Craft', 12355597, '/works/OL20152649W', 'Children\'s Fiction', 'Unknown', '12355597.jpg', 'in-store'),
(180, '\'Twas the Night before Christmas', 'Clement Clarke Moore', 8919179, '/works/OL20262024W', 'Children\'s Fiction', 'Unknown', '8919179.jpg', 'in-store'),
(181, 'Cat Kid Comic Club', 'Dav Pilkey', 14424590, '/works/OL19659659W', 'Children\'s Fiction', 'Unknown', '14424590.jpg', 'in-store'),
(182, 'Sketch Book', 'Sedliz Drawing', 11226895, '/works/OL24573557W', 'Children\'s Fiction', 'Unknown', '11226895.jpg', 'in-store'),
(183, 'Vogue Knitting on the Go', 'Trisha Malcolm', 957126, '/works/OL8922433W', 'Children\'s Fiction', 'Unknown', '957126.jpg', 'in-store'),
(184, 'Halloween Memory Book', 'Festivity Day Press', 13221153, '/works/OL30145734W', 'Children\'s Fiction', 'Unknown', '13221153.jpg', 'in-store'),
(185, 'On Cooking', 'Sarah R. Labensky', 92630, '/works/OL1874827W', 'Cooking', 'Unknown', '92630.jpg', 'in-store'),
(186, 'Joy of Cooking', 'Irma S. Rombauer', 475157, '/works/OL267968W', 'Cooking', 'Unknown', '475157.jpg', 'in-store'),
(187, 'Boston Cooking-School cook book', 'Fannie Merritt Farmer', 8246263, '/works/OL1798750W', 'Cooking', 'Unknown', '8246263.jpg', 'in-store'),
(188, 'The Castle of Otranto', 'Horace Walpole', 6468730, '/works/OL183675W', 'Cooking', 'Unknown', '6468730.jpg', 'in-store'),
(189, '[William Wheeler Hubbell, authorized to apply for patents.]', 'United States. Congress. Senate. Committee on Patents', 10200621, '/works/OL7574091W', 'Cooking', 'Unknown', '10200621.jpg', 'in-store'),
(190, 'Faust', 'Johann Wolfgang von Goethe', 6499459, '/works/OL52456W', 'Cooking', 'Unknown', '6499459.jpg', 'in-store'),
(191, 'The Wealth of Nations', 'Adam Smith', 12816911, '/works/OL76827W', 'Cooking', 'Unknown', '12816911.jpg', 'in-store'),
(192, 'The Canterbury Tales', 'Geoffrey Chaucer', 5767180, '/works/OL531767W', 'Cooking', 'Unknown', '5767180.jpg', 'in-store'),
(193, 'The book of the damned', 'Charles Fort', 825884, '/works/OL66059W', 'Cooking', 'Unknown', '825884.jpg', 'in-store'),
(194, 'La Poetica', 'Aristotle', 129771, '/works/OL151515W', 'Cooking', 'Unknown', '129771.jpg', 'in-store'),
(195, 'Poems by John Keats', 'John Keats', 5635209, '/works/OL1455259W', 'Cooking', 'Unknown', '5635209.jpg', 'in-store'),
(196, 'The book of tea', 'Okakura Kakuzo', 8245415, '/works/OL7095112W', 'Cooking', 'Unknown', '8245415.jpg', 'in-store'),
(197, '\'Salem\'s Lot', 'Stephen King', 14654118, '/works/OL81632W', 'Cooking', 'Unknown', '14654118.jpg', 'in-store'),
(198, 'The Second World War', 'Winston S. Churchill', 7347623, '/works/OL134333W', 'Cooking', 'Unknown', '7347623.jpg', 'in-store'),
(199, 'Don Quijote de la Mancha', 'Miguel de Cervantes Saavedra', 14428305, '/works/OL503666W', 'Cooking', 'Unknown', '14428305.jpg', 'in-store'),
(200, 'Le Morte d\'Arthur', 'Thomas Malory', 8231834, '/works/OL15450151W', 'Cooking', 'Unknown', '8231834.jpg', 'in-store'),
(201, 'Ὀδύσσεια', 'Όμηρος', 9045853, '/works/OL61982W', 'Cooking', 'Unknown', '9045853.jpg', 'in-store'),
(202, 'Leaves of Grass', 'Walt Whitman', 9000447, '/works/OL16333W', 'Cooking', 'Unknown', '9000447.jpg', 'in-store'),
(203, 'English grammar', 'Lindley Murray', 6049886, '/works/OL1147651W', 'Cooking', 'Unknown', '6049886.jpg', 'in-store'),
(204, 'The Last of the Mohicans', 'James Fenimore Cooper', 8236937, '/works/OL77958W', 'Cooking', 'Unknown', '8236937.jpg', 'in-store'),
(205, 'The Time Machine', 'H. G. Wells', 9009316, '/works/OL52267W', 'Cooking', 'Unknown', '9009316.jpg', 'in-store'),
(206, 'Confessions', 'Augustine of Hippo', 9022521, '/works/OL137872W', 'Cooking', 'Unknown', '9022521.jpg', 'in-store'),
(207, 'The Alhambra', 'Washington Irving', 8237030, '/works/OL63996W', 'Cooking', 'Unknown', '8237030.jpg', 'in-store'),
(208, 'A Connecticut Yankee in King Arthur\'s Court', 'Mark Twain', 9168732, '/works/OL54031W', 'Cooking', 'Unknown', '9168732.jpg', 'in-store'),
(209, 'Ἰλιάς', 'Όμηρος', 7083790, '/works/OL61981W', 'Cooking', 'Unknown', '7083790.jpg', 'in-store'),
(210, 'Northanger Abbey', 'Jane Austen', 12567961, '/works/OL66534W', 'Cooking', 'Unknown', '12567961.jpg', 'in-store'),
(211, 'Plays (36)', 'William Shakespeare', 9023411, '/works/OL362289W', 'Cooking', 'Unknown', '9023411.jpg', 'in-store'),
(212, 'Persuasion', 'Jane Austen', 12824691, '/works/OL66544W', 'Cooking', 'Unknown', '12824691.jpg', 'in-store'),
(213, 'Narrative of the life of Frederick Douglass', 'Frederick Douglass', 8247724, '/works/OL69178W', 'Cooking', 'Unknown', '8247724.jpg', 'in-store'),
(214, 'Alice\'s Adventures in Wonderland / Through the Looking Glass', 'Lewis Carroll', 8595966, '/works/OL151411W', 'Cooking', 'Unknown', '8595966.jpg', 'in-store'),
(215, 'Sonnets', 'William Shakespeare', 8222090, '/works/OL362706W', 'Cooking', 'Unknown', '8222090.jpg', 'in-store'),
(216, 'Book of common prayer', 'Church of England', 5720552, '/works/OL769120W', 'Cooking', 'Unknown', '5720552.jpg', 'in-store'),
(217, 'Julius Caesar', 'William Shakespeare', 7901303, '/works/OL362702W', 'Cooking', 'Unknown', '7901303.jpg', 'in-store'),
(218, 'Romeo and Juliet', 'William Shakespeare', 8257991, '/works/OL362427W', 'Cooking', 'Unknown', '8257991.jpg', 'in-store'),
(219, 'Macbeth', 'William Shakespeare', 872432, '/works/OL258902W', 'Cooking', 'Unknown', '872432.jpg', 'in-store'),
(220, 'Self-knowledge', 'John Mason', 6137558, '/works/OL6384123W', 'Cooking', 'Unknown', '6137558.jpg', 'in-store'),
(221, 'The Sound and the Fury', 'William Faulkner', 8292212, '/works/OL82870W', 'Cooking', 'Unknown', '8292212.jpg', 'in-store'),
(222, 'The Stones of Venice', 'John Ruskin', 8239410, '/works/OL88640W', 'Cooking', 'Unknown', '8239410.jpg', 'in-store'),
(223, 'Way to wealth', 'Benjamin Franklin', 6112107, '/works/OL26610W', 'Cooking', 'Unknown', '6112107.jpg', 'in-store'),
(224, 'Evelina', 'Fanny Burney', 103219, '/works/OL2252006W', 'Cooking', 'Unknown', '103219.jpg', 'in-store'),
(225, 'The House of the Dead', 'Фёдор Михайлович Достоевский', 9415186, '/works/OL166970W', 'Cooking', 'Unknown', '9415186.jpg', 'in-store'),
(226, 'Como agua para chocolate', 'Laura Esquivel', 8372632, '/works/OL953162W', 'Cooking', 'Unknown', '8372632.jpg', 'in-store'),
(227, 'Two Treatises on Government', 'John Locke', 8210287, '/works/OL880131W', 'Cooking', 'Unknown', '8210287.jpg', 'in-store'),
(228, 'Milton\'s Poems', 'John Milton', 8235508, '/works/OL810990W', 'Cooking', 'Unknown', '8235508.jpg', 'in-store'),
(229, 'Nostromo', 'Joseph Conrad', 6545112, '/works/OL38700W', 'Cooking', 'Unknown', '6545112.jpg', 'in-store'),
(230, 'Firestarter', 'Stephen King', 12015446, '/works/OL81623W', 'Cooking', 'Unknown', '12015446.jpg', 'in-store'),
(231, 'Colloquia', 'Desiderius Erasmus', 5609568, '/works/OL679943W', 'Cooking', 'Unknown', '5609568.jpg', 'in-store'),
(232, 'At the Back of the North Wind', 'George MacDonald', 8245161, '/works/OL15451W', 'Cooking', 'Unknown', '8245161.jpg', 'in-store'),
(233, 'The lady of the lake', 'Sir Walter Scott', 7305347, '/works/OL863809W', 'Cooking', 'Unknown', '7305347.jpg', 'in-store'),
(234, 'Poems', 'Percy Bysshe Shelley', 8231548, '/works/OL14853463W', 'Cooking', 'Unknown', '8231548.jpg', 'in-store'),
(235, 'Moll Flanders', 'Daniel Defoe', 12997559, '/works/OL45139W', 'Cooking', 'Unknown', '12997559.jpg', 'in-store'),
(236, 'The Seven Lamps of Architecture', 'John Ruskin', 5790382, '/works/OL88638W', 'Cooking', 'Unknown', '5790382.jpg', 'in-store'),
(237, 'The Roman Breviary', 'Catholic Church', 6021553, '/works/OL349325W', 'Cooking', 'Unknown', '6021553.jpg', 'in-store'),
(238, 'Ἀνάβασις', 'Xenophon', 6133592, '/works/OL687015W', 'Cooking', 'Unknown', '6133592.jpg', 'in-store'),
(239, 'An essay on man', 'Alexander Pope', 14538511, '/works/OL79353W', 'Cooking', 'Unknown', '14538511.jpg', 'in-store'),
(240, 'Cyropaedia', 'Xenophon', 6062894, '/works/OL687224W', 'Cooking', 'Unknown', '6062894.jpg', 'in-store'),
(241, 'The Prime of Miss Jean Brodie', 'Muriel Spark', 40054, '/works/OL26437W', 'Cooking', 'Unknown', '40054.jpg', 'in-store'),
(242, 'Comus', 'John Milton', 5622287, '/works/OL810989W', 'Cooking', 'Unknown', '5622287.jpg', 'in-store'),
(243, 'How to Cook Everything', 'Mark Bittman', 307073, '/works/OL1897582W', 'Cooking', 'Unknown', '307073.jpg', 'in-store'),
(244, 'Φαῖδρος', 'Πλάτων', 14398919, '/works/OL51816W', 'Cooking', 'Unknown', '14398919.jpg', 'in-store'),
(245, 'Cooking Basics for Dummies', 'Bryan Miller', 522576, '/works/OL2776167W', 'Cooking', 'Unknown', '522576.jpg', 'in-store'),
(246, 'Insomnia', 'Stephen King', 7886954, '/works/OL81603W', 'Cooking', 'Unknown', '7886954.jpg', 'in-store'),
(247, 'The Princess and Curdie', 'George MacDonald', 14357835, '/works/OL15448W', 'Cooking', 'Unknown', '14357835.jpg', 'in-store'),
(248, 'The History of Rasselas, Prince of Abyssinia', 'Samuel Johnson', 2035834, '/works/OL4558936W', 'Cooking', 'Unknown', '2035834.jpg', 'in-store'),
(249, 'On food and cooking', 'Harold McGee', 14231, '/works/OL4110479W', 'Cooking', 'Unknown', '14231.jpg', 'in-store'),
(250, 'The advancement of learning', 'Francis Bacon', 8982907, '/works/OL15403036W', 'Cooking', 'Unknown', '8982907.jpg', 'in-store'),
(251, 'The deerslayer', 'James Fenimore Cooper', 8237593, '/works/OL77950W', 'Cooking', 'Unknown', '8237593.jpg', 'in-store'),
(252, 'The art of cookery, made plain and easy', 'Hannah Glasse', 7916175, '/works/OL1646026W', 'Cooking', 'Unknown', '7916175.jpg', 'in-store'),
(253, 'Poems', 'Elizabeth Barrett Browning', 8240334, '/works/OL1198483W', 'Cooking', 'Unknown', '8240334.jpg', 'in-store'),
(254, 'Cymbeline', 'William Shakespeare', 8997203, '/works/OL258656W', 'Cooking', 'Unknown', '8997203.jpg', 'in-store'),
(255, 'The Pathfinder', 'James Fenimore Cooper', 8980913, '/works/OL78009W', 'Cooking', 'Unknown', '8980913.jpg', 'in-store'),
(256, 'If You Give a Mouse a Cookie', 'Laura Joffe Numeroff', 50977, '/works/OL61432W', 'Cooking', 'Unknown', '50977.jpg', 'in-store'),
(257, 'University physics', 'Francis Weston Sears', 8349382, '/works/OL4797379W', 'Cooking', 'Unknown', '8349382.jpg', 'in-store'),
(258, 'Fast Food Nation', 'Eric Schlosser', 8392930, '/works/OL5801795W', 'Cooking', 'Unknown', '8392930.jpg', 'in-store'),
(259, 'Salt, Fat, Acid, Heat', 'Samin Nosrat', 8315567, '/works/OL18147901W', 'Cooking', 'Unknown', '8315567.jpg', 'in-store'),
(260, 'Rip Van Winkle', 'Washington Irving', 8241453, '/works/OL63995W', 'Cooking', 'Unknown', '8241453.jpg', 'in-store'),
(261, 'Troilus and Criseyde', 'Geoffrey Chaucer', 7225126, '/works/OL531509W', 'Cooking', 'Unknown', '7225126.jpg', 'in-store'),
(262, 'The Food Lab', 'J. Kenji López-Alt', 8314250, '/works/OL18146664W', 'Cooking', 'Unknown', '8314250.jpg', 'in-store'),
(263, 'Stone soup', 'Marcia Brown', 429038, '/works/OL1672346W', 'Cooking', 'Unknown', '429038.jpg', 'in-store'),
(264, 'Odd Thomas', 'Dean Koontz', 7075051, '/works/OL263273W', 'Cooking', 'Unknown', '7075051.jpg', 'in-store'),
(265, 'Water for Elephants', 'Sara Gruen', 6690864, '/works/OL5813796W', 'Cooking', 'Unknown', '6690864.jpg', 'in-store'),
(266, 'An Arabian tale', 'William Beckford', 2997425, '/works/OL777826W', 'Cooking', 'Unknown', '2997425.jpg', 'in-store'),
(267, 'A Walk in the Woods', 'Bill Bryson', 12722649, '/works/OL74123W', 'Cooking', 'Unknown', '12722649.jpg', 'in-store'),
(268, 'Modern painters', 'John Ruskin', 6733404, '/works/OL88639W', 'Cooking', 'Unknown', '6733404.jpg', 'in-store'),
(269, 'Sesame and lilies', 'John Ruskin', 10672278, '/works/OL88641W', 'Cooking', 'Unknown', '10672278.jpg', 'in-store'),
(270, 'The complete works of Robert Browning Volume XVI', 'Robert Browning', 8236406, '/works/OL634478W', 'Cooking', 'Unknown', '8236406.jpg', 'in-store'),
(271, 'Clarissa; or, The history of a young lady: comprehending the most important concerns of private life; and particularly shewing the distresses that may attend the misconduct both of parents and children, in relation to marriage ..', 'Samuel Richardson', 5573168, '/works/OL1150725W', 'Cooking', 'Unknown', '5573168.jpg', 'in-store'),
(272, 'Le répertoire de la cuisine', 'Louis Saulnier', 9248006, '/works/OL189773W', 'Cooking', 'Unknown', '9248006.jpg', 'in-store'),
(273, 'The Travels of Marco Polo', 'Marco Polo', 8237917, '/works/OL15584860W', 'Travel', 'Unknown', '8237917.jpg', 'in-store'),
(274, 'Travels with Charley', 'John Steinbeck', 8219483, '/works/OL23192W', 'Travel', 'Unknown', '8219483.jpg', 'in-store'),
(275, 'The life of Olaudah Equiano, or Gustavus Vassa, the African', 'Olaudah Equiano', 2074044, '/works/OL743333W', 'Travel', 'Unknown', '2074044.jpg', 'in-store'),
(276, 'A Room with a View', 'E. M. Forster', 1748132, '/works/OL88813W', 'Travel', 'Unknown', '1748132.jpg', 'in-store'),
(277, 'The Jewel of Seven Stars', 'Bram Stoker', 2760301, '/works/OL85891W', 'Travel', 'Unknown', '2760301.jpg', 'in-store'),
(278, 'The Pickwick Papers', 'Charles Dickens', 13130696, '/works/OL8763776W', 'Travel', 'Unknown', '13130696.jpg', 'in-store'),
(279, 'Kidnapped', 'Robert Louis Stevenson', 8267822, '/works/OL24166W', 'Travel', 'Unknown', '8267822.jpg', 'in-store'),
(280, 'The Pilgrim\'s Progress', 'John Bunyan', 8229224, '/works/OL107195W', 'Travel', 'Unknown', '8229224.jpg', 'in-store'),
(281, 'Life on the Mississippi', 'Mark Twain', 9164717, '/works/OL53959W', 'Travel', 'Unknown', '9164717.jpg', 'in-store'),
(282, 'Anthem', 'Ayn Rand', 802982, '/works/OL731737W', 'Travel', 'Unknown', '802982.jpg', 'in-store'),
(283, 'Les Trois Mousquetaires', 'Alexandre Dumas', 11929973, '/works/OL36861W', 'Travel', 'Unknown', '11929973.jpg', 'in-store'),
(284, 'The Mystery of the Blue Train', 'Agatha Christie', 14575533, '/works/OL471603W', 'Travel', 'Unknown', '14575533.jpg', 'in-store'),
(285, 'The Razor\'s Edge', 'William Somerset Maugham', 97505, '/works/OL505944W', 'Travel', 'Unknown', '97505.jpg', 'in-store'),
(286, 'The Hound of the Baskervilles', 'Arthur Conan Doyle', 8063264, '/works/OL262454W', 'Travel', 'Unknown', '8063264.jpg', 'in-store'),
(287, 'Adventures of Huckleberry Finn', 'Mark Twain', 8157718, '/works/OL53908W', 'Travel', 'Unknown', '8157718.jpg', 'in-store'),
(288, 'Daisy Miller', 'Henry James', 6482238, '/works/OL276328W', 'Travel', 'Unknown', '6482238.jpg', 'in-store'),
(289, 'Homage to Catalonia', 'George Orwell', 7282177, '/works/OL1168169W', 'Travel', 'Unknown', '7282177.jpg', 'in-store'),
(290, 'The Return of the Native', 'Thomas Hardy', 8162989, '/works/OL44994W', 'Travel', 'Unknown', '8162989.jpg', 'in-store'),
(291, 'A Wrinkle in Time', 'Madeleine L\'Engle', 8709146, '/works/OL41495W', 'Travel', 'Unknown', '8709146.jpg', 'in-store'),
(292, 'Murder on the Orient Express', 'Agatha Christie', 11100465, '/works/OL471576W', 'Travel', 'Unknown', '11100465.jpg', 'in-store'),
(293, 'A Caribbean Mystery', 'Agatha Christie', 14578132, '/works/OL472458W', 'Travel', 'Unknown', '14578132.jpg', 'in-store'),
(294, 'The Last Battle', 'C.S. Lewis', 6529226, '/works/OL71124W', 'Travel', 'Unknown', '6529226.jpg', 'in-store'),
(295, 'Heart of Darkness', 'Joseph Conrad', 12307847, '/works/OL38663W', 'Travel', 'Unknown', '12307847.jpg', 'in-store'),
(296, 'Voyage au Centre de la Terre', 'Jules Verne', 5890987, '/works/OL1099513W', 'Travel', 'Unknown', '5890987.jpg', 'in-store'),
(297, 'The most dangerous game', 'Richard Connell', 8561531, '/works/OL5278311W', 'Travel', 'Unknown', '8561531.jpg', 'in-store'),
(298, '2001', 'Arthur C. Clarke', 11344400, '/works/OL17365W', 'Travel', 'Unknown', '11344400.jpg', 'in-store'),
(299, 'O Alquimista', 'Paulo Coelho', 7414780, '/works/OL796465W', 'Travel', 'Unknown', '7414780.jpg', 'in-store'),
(300, 'The Hitch Hiker\'s Guide to the Galaxy', 'Douglas Adams', 12986869, '/works/OL2163649W', 'Travel', 'Unknown', '12986869.jpg', 'in-store'),
(301, 'Lolita', 'Vladimir Nabokov', 12984540, '/works/OL627084W', 'Travel', 'Unknown', '12984540.jpg', 'in-store'),
(302, 'The Silver Chair', 'C.S. Lewis', 6950992, '/works/OL71078W', 'Travel', 'Unknown', '6950992.jpg', 'in-store'),
(303, 'Le Tour du Monde en Quatre-Vingts Jours', 'Jules Verne', 6976035, '/works/OL1100007W', 'Travel', 'Unknown', '6976035.jpg', 'in-store'),
(304, 'When the Sleeper Awakes', 'H. G. Wells', 574886, '/works/OL52151W', 'Travel', 'Unknown', '574886.jpg', 'in-store'),
(305, 'Death on the Nile', 'Agatha Christie', 14066646, '/works/OL471724W', 'Travel', 'Unknown', '14066646.jpg', 'in-store'),
(306, 'A Game of Thrones', 'George R. R. Martin', 9269962, '/works/OL257943W', 'Travel', 'Unknown', '9269962.jpg', 'in-store'),
(307, 'De la terre à la lune', 'Jules Verne', 5943556, '/works/OL1099479W', 'Travel', 'Unknown', '5943556.jpg', 'in-store'),
(308, 'The Story of Doctor Dolittle', 'Hugh Lofting', 5262289, '/works/OL1449046W', 'Travel', 'Unknown', '5262289.jpg', 'in-store'),
(309, 'A dictionary of the English language', 'Samuel Johnson', 5952171, '/works/OL14862662W', 'Travel', 'Unknown', '5952171.jpg', 'in-store'),
(310, 'The Old Man and the Sea', 'Ernest Hemingway', 463307, '/works/OL63073W', 'Travel', 'Unknown', '463307.jpg', 'in-store'),
(311, 'The Story of the Amulet', 'Edith Nesbit', 13241470, '/works/OL407476W', 'Travel', 'Unknown', '13241470.jpg', 'in-store'),
(312, 'Die Leiden des jungen Werthers', 'Johann Wolfgang von Goethe', 7187281, '/works/OL52556W', 'Travel', 'Unknown', '7187281.jpg', 'in-store'),
(313, 'King Solomon\'s Mines', 'H. Rider Haggard', 8665393, '/works/OL17448W', 'Travel', 'Unknown', '8665393.jpg', 'in-store'),
(314, 'Meditations', 'Marcus Aurelius', 211529, '/works/OL1317211W', 'Travel', 'Unknown', '211529.jpg', 'in-store'),
(315, 'All\'s Well That Ends Well', 'William Shakespeare', 7338455, '/works/OL362676W', 'Travel', 'Unknown', '7338455.jpg', 'in-store'),
(316, 'Paul Klee', 'Paul Klee', 13174486, '/works/OL972930W', 'Travel', 'Unknown', '13174486.jpg', 'in-store'),
(317, 'The Invisible Man', 'H. G. Wells', 6419199, '/works/OL52266W', 'Travel', 'Unknown', '6419199.jpg', 'in-store'),
(318, 'The Jungle', 'Upton Sinclair', 8231790, '/works/OL114967W', 'Travel', 'Unknown', '8231790.jpg', 'in-store'),
(319, 'Le petit prince', 'Antoine de Saint-Exupéry', 10708272, '/works/OL10263W', 'Travel', 'Unknown', '10708272.jpg', 'in-store'),
(320, 'Winter\'s Tale', 'William Shakespeare', 7405847, '/works/OL362687W', 'Travel', 'Unknown', '7405847.jpg', 'in-store'),
(321, 'The Marvelous Land of Oz', 'L. Frank Baum', 12648656, '/works/OL18396W', 'Travel', 'Unknown', '12648656.jpg', 'in-store'),
(322, 'Picasso', 'Pablo Picasso', 2238306, '/works/OL145191W', 'Travel', 'Unknown', '2238306.jpg', 'in-store'),
(323, 'History', 'Herodotus', 9829028, '/works/OL15678068W', 'Travel', 'Unknown', '9829028.jpg', 'in-store'),
(324, 'Tao te Ching', '老子', 662232, '/works/OL45499W', 'Travel', 'Unknown', '662232.jpg', 'in-store'),
(325, 'Frankenstein or The Modern Prometheus', 'Mary Shelley', 12356249, '/works/OL450063W', 'Travel', 'Unknown', '12356249.jpg', 'in-store'),
(326, 'American notes', 'Charles Dickens', 8236357, '/works/OL8300173W', 'Travel', 'Unknown', '8236357.jpg', 'in-store'),
(327, 'The Innocents Abroad', 'Mark Twain', 8221271, '/works/OL54041W', 'Travel', 'Unknown', '8221271.jpg', 'in-store'),
(328, 'Lord Jim', 'Joseph Conrad', 8236295, '/works/OL38684W', 'Travel', 'Unknown', '8236295.jpg', 'in-store'),
(329, 'Rime of the ancient mariner', 'Samuel Taylor Coleridge', 8225489, '/works/OL26130W', 'Travel', 'Unknown', '8225489.jpg', 'in-store'),
(330, 'The works of Washington Irving', 'Washington Irving', 8242347, '/works/OL63910W', 'Travel', 'Unknown', '8242347.jpg', 'in-store'),
(331, 'Roughing It', 'Mark Twain', 9165528, '/works/OL54059W', 'Travel', 'Unknown', '9165528.jpg', 'in-store'),
(332, 'Artemis Fowl', 'Eoin Colfer', 10212689, '/works/OL5725956W', 'Travel', 'Unknown', '10212689.jpg', 'in-store'),
(333, 'Slaughterhouse-Five', 'Kurt Vonnegut', 12727001, '/works/OL98459W', 'Travel', 'Unknown', '12727001.jpg', 'in-store'),
(334, 'The Restaurant at the End of the Universe', 'Douglas Adams', 12714921, '/works/OL2163655W', 'Travel', 'Unknown', '12714921.jpg', 'in-store'),
(335, 'Edvard Munch', 'Edvard Munch', 6748093, '/works/OL136192W', 'Travel', 'Unknown', NULL, 'in-store'),
(336, 'Goethe\'s Werke', 'Johann Wolfgang von Goethe', 5760460, '/works/OL15116693W', 'Travel', 'Unknown', '5760460.jpg', 'in-store'),
(337, 'The Left Hand of Darkness', 'Ursula K. Le Guin', 10618463, '/works/OL59800W', 'Travel', 'Unknown', '10618463.jpg', 'in-store'),
(338, 'Expedition Kon-Tiki', 'Thor Heyerdahl', 1019938, '/works/OL2292673W', 'Travel', 'Unknown', '1019938.jpg', 'in-store'),
(339, 'Andy Warhol', 'Andy Warhol', 1027207, '/works/OL644644W', 'Travel', 'Unknown', '1027207.jpg', 'in-store'),
(340, 'Little Dorrit', 'Charles Dickens', 13113263, '/works/OL14869215W', 'Travel', 'Unknown', '13113263.jpg', 'in-store'),
(341, 'Midwinter', 'John Buchan', 880230, '/works/OL76588W', 'Travel', 'Unknown', '880230.jpg', 'in-store'),
(342, 'Bill', 'Canada. Legislature. Legislative Assembly.', 9152299, '/works/OL12210420W', 'Travel', 'Unknown', '9152299.jpg', 'in-store'),
(343, 'Zen and the Art of Motorcycle Maintenance', 'Robert M. Pirsig', 10673266, '/works/OL827357W', 'Travel', 'Unknown', '10673266.jpg', 'in-store');

-- --------------------------------------------------------

--
-- Table structure for table `borrowed_books`
--

CREATE TABLE `borrowed_books` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `borrow_date` datetime NOT NULL,
  `return_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `borrowed_books`
--

INSERT INTO `borrowed_books` (`id`, `user_id`, `book_id`, `borrow_date`, `return_date`) VALUES
(1, 20, 1, '2025-10-29 09:27:23', '2025-10-29 09:52:53'),
(2, 20, 1, '2025-10-29 09:56:36', '2025-10-29 10:15:09'),
(3, 20, 2, '2025-10-29 09:56:38', '2025-10-29 10:15:12'),
(4, 20, 1, '2025-10-29 10:15:18', '2025-10-29 10:15:20'),
(5, 20, 1, '2025-10-29 10:15:26', '2025-10-29 10:15:31'),
(6, 20, 2, '2025-10-29 10:15:27', '2025-10-29 10:15:32'),
(7, 20, 5, '2025-10-29 10:17:11', '2025-10-29 10:17:16'),
(8, 20, 1, '2025-10-29 10:19:31', '2025-10-29 10:19:36'),
(9, 20, 1, '2025-10-29 12:46:01', '2025-10-29 16:09:27'),
(10, 20, 2, '2025-10-29 14:17:46', '2025-10-29 16:09:40'),
(11, 20, 3, '2025-10-29 14:17:47', '2025-10-29 16:19:11'),
(12, 20, 4, '2025-10-29 14:17:48', '2025-10-29 16:19:16'),
(13, 20, 5, '2025-10-29 16:08:25', '2025-10-29 16:19:18'),
(14, 20, 1, '2025-10-29 16:20:05', NULL),
(15, 20, 2, '2025-10-29 16:20:06', NULL),
(16, 20, 3, '2025-10-29 16:20:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `is_active` tinyint(1) DEFAULT 1,
  `role` varchar(20) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `username`, `email`, `password`, `created_at`, `is_active`, `role`) VALUES
(1, 'admin', 'admin@gmail.com', '123', '2025-09-24 14:55:59', 1, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`BookID`),
  ADD KEY `cover_id` (`cover_id`);

  
-- Indexes for table `borrowed_books`
--
ALTER TABLE `borrowed_books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`book_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `BookID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=349;

--
-- AUTO_INCREMENT for table `borrowed_books`
--
ALTER TABLE `borrowed_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `borrow`
--
ALTER TABLE `borrow`
  ADD CONSTRAINT `borrow_ibfk_1` FOREIGN KEY (`BookID`) REFERENCES `books` (`BookID`);

--
-- Constraints for table `borrowed_books`
--
ALTER TABLE `borrowed_books`
  ADD CONSTRAINT `borrowed_books_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`BookID`),
  ADD CONSTRAINT `borrowed_books_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
