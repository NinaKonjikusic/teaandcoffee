-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2019 at 02:13 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teaandcoffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `coffee`
--

CREATE TABLE `coffee` (
  `coffee_id` int(2) NOT NULL,
  `name` varchar(35) NOT NULL,
  `image` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coffee`
--

INSERT INTO `coffee` (`coffee_id`, `name`, `image`, `description`, `price`) VALUES
(1, 'House Blend Coffee', 'assets/images/hbc.jpg', 'To create our House Blend we combine natural and washed Central and South American coffees. We choose our blends for brightness, flavor, and aromas that make for a smooth, satisfying cup of coffee that can be enjoyed all day long.', '8.99'),
(2, 'Espresso Roast Coffee', 'assets/images/esc.jpg', 'We built our business on this signature blend. To create our Espresso Roast Blend, we roast four select origin coffees to perfection, then combine them to create the perfect base for our espresso drinks. Our Espresso Roast Blend is expressive and subtle enough to be enjoyed as a straight shot, yet assertive enough for the perfect latte.', '8.99'),
(3, 'Kenya AA Coffee', 'assets/images/kaac.jpg', 'Kenya has become the giant of African coffee production, ever since coffee made its way over the mountains from Ethiopia. Kenya AA is the largest bean grown in Kenya, and brews up a complex, fruity, light, and very bright cup. This is an exquisite coffee with an assertive, lively personality. Trust us, in coffee that’s a good thing.', '13.99'),
(4, 'Viennese Coffee', 'assets/images/vc.jpg', 'Vienna-style roasting creates a deep brown, medium dark roast that toasts the beans to perfection. Our Viennese Blend combines select coffees for a cup of satisfying balance and depth. Mellow, smooth, and delicately nuanced with hints of chocolate, our Viennese Blend draws on a unique style of coffee roasting in Vienna that dates back to 1683 when Vienna’s first coffee house opened.', '14.99'),
(5, 'Bali Blue Moon Coffee', 'assets/images/bbmc.jpg', 'A fragrant toffee aroma with flavors of walnuts and semi-sweet chocolate, with a crisp black cherry finish; this coffee comes from the Kintamani Highlands in North Bali, Indonesia.\r\n\r\nOur Bali Blue Moon is grown at an altitude between 3200 and 3900 feet, under shade trees, with orange and tangerine trees planted between the rows of coffee. Harvesting is done from May to October when only ripe fruit is picked, and the coffee is then semi-washed with a two-step sun drying process.', '14.99'),
(6, 'Jamaica Blue Mountain Coffee', 'assets/images/jbmc.jpg', 'amaica Blue Mountain coffee from the Mavis Bank Estate has become recognized for its clean, mild, qualities and good body. The Mavis Bank Estate uses only spring water to sort the green beans, which are then allowed to age for three to four months at 3,000 feet. When the coffee beans develop a greenish blue color, we know it\'s ready to ship to our roaster. Spicy aroma and light body with a well-balanced flavor.', '28.00'),
(7, 'Kona Coffee', 'assets/images/kc.jpg', 'It takes lush rains, intense sun, volcanic soils and a lot of aloha to create the distinctive characteristics of Kona coffee. Grown at 2,000 feet above the Kona Coast, Kona coffees are prized world wide for their rich aromas, mild, delicate taste, and thick body. Because Kona coffees are so highly valued, each lot is graded and registered by the State of Hawaii to prevent adulteration.', '28.00'),
(8, 'Mocha Java Coffee', 'assets/images/mjc.jpg', 'Mocha Java is the world’s original coffee blend. Our interpretation combines sweet, fruity Ethiopian Yirgacheffe with the deep body and rich flavor of Java Estate coffees. The result has long been praised by coffee aficionados around the world.', '13.99'),
(9, 'Brazil Cerrado Coffee', 'assets/images/bcc.jpg', 'A giant of worldwide coffee production, Brazil produces not only the most coffee, it also grows some of the best. Our Brazil Cerrado is grown in the hot, flat savannahs of Minas Gerais. Labeled “Specialty Grade,” Brazil Cerrado is dry processed for a cup of coffee that displays terrific body, and a nutty, sweet taste that can only be found in the best Brazilian coffees.', '13.99'),
(10, 'Decaf House Blend Coffee', 'assets/images/dhbc.jpg', 'To create our House Blend we combine natural and washed Central and South American coffees. We choose our blends for brightness, flavor, and aromas that make for a smooth, satisfying cup of coffee that can be enjoyed all day long.', '15.99'),
(11, 'Sumatra Mandheling Dark Coffee', 'assets/images/smdc.jpg', 'One flavorful step beyond our full-bodied Sumatra Mandheling lies…Sumatra Mandheling Dark. Heated slowly to ever increasing temperatures, Sumatra Mandheling Dark ascends the roasting spectrum to achieve an altered state where maltiness is transformed to caramel, and its rich aroma becomes even more intense.', '14.99'),
(12, 'Guatemala Antigua Coffee', 'assets/images/gac.jpg', 'From the shady central highlands of Antigua, Guatemala, comes a full-bodied coffee classic noted for its balance, nuance, and aroma. We purchase the beans in small lots from established farms in Antigua to guarantee the high quality of our beans.', '13.99'),
(13, 'Colombia Nariño Coffee', 'assets/images/cnc.jpg', 'From tree to bag. This premier coffee is hand picked by workers on small family owned farms in the state of Nariño, on the Pacific Coast in Colombia. The farmers take great pride in growing, picking, and preparing their products by hand. We take great pride in offering you the results of their hard work. Their dedication pays off in a balanced, bright cup of coffee, richly aromatic with a creamy body.', '8.99'),
(14, 'Ethiopia Yirgacheffe Coffee', 'assets/images/eyc.jpg', 'We offer Ethiopian Yirgacheffe, picked by hand on a farm in the mountains high above the town of Sidamo. There, the coffee beans are washed, and then soaked up to 72 hours in fermentation tanks. This wet process method produces intensely flavorful beans, with an intensely floral aroma, and mellow, smooth taste.', '13.99'),
(15, 'Tanzania Peaberry Coffee', 'assets/images/tpc.jpg', 'Tanzania Peaberry is a hand-selected, pulped, and fully washed coffee. It is dried on wooden tables with a screened bottom to allow good air circulation at the time of drying. Separating the peaberries from the rest of the coffee beans requires the use of special screens and adds time and expense to the grading process. The resulting peaberry coffee is very dense and uniform, resulting in a very focused and consistent flavor.', '14.99');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(2) NOT NULL,
  `role_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'user'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tea`
--

CREATE TABLE `tea` (
  `tea_id` int(2) NOT NULL,
  `name` varchar(35) NOT NULL,
  `image` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tea`
--

INSERT INTO `tea` (`tea_id`, `name`, `image`, `description`, `price`) VALUES
(1, 'African Sunrise Herbal Tea', 'assets/images/asht.jpg', 'Our hand-harvested honeybush has a mild, sweet taste and aroma, somewhat like honey, and is infused with aromatic vanilla flavoring to create a unique infusion. This herbal infusion yields a vibrant reddish orange liquor not unlike the famous red glowing sunrise known throughout Africa.', '8.99'),
(2, 'Apricot Ceylon Tea', 'assets/images/act.jpg', 'We combined the mellow taste of Bogawantalawa Estate Ceylon black tea with the delicate flavor of apricot to produce this well-balanced tea. Delightfully aromatic, with a fruity aroma and light body, this tea is perfect for a relaxing cup of indulgence.', '8.99'),
(3, 'English Breakfast Black Tea', 'assets/images/ebbt.jpg', 'Brisk and invigorating, our English Breakfast Tea is a blend of black teas from Sri Lankan Ceylon, Taiwanese Black Tea, and Chinese Keemun Black Tea. Our crisp, smooth, and medium-bodied blend is our take on a beloved classic and a tribute to England\'s tradition of tea drinking.', '8.99'),
(4, 'Scottish Breakfast Black Tea', 'assets/images/sbbt.jpg', 'Our original recipe for this Scottish classic blends two of India\'s most flavorful black teas, Darjeeling and Assam. With its delicate, slightly dry flavor and delightful aroma of honey and cream, this uplifting tea delights the senses. Whether savored on its own or combined with milk and sugar, our Scottish Breakfast tea brings all the beauty and mystique of Scotland right to your cup.', '8.99'),
(5, 'Earl Grey Black Tea', 'assets/images/egbt.jpg', 'One of the most famous, and rightfully distinctive teas in all the world, Earl Grey derives its unique flavor from oil of Bergamot, a Mediterranean citrus fruit like an orange (in case you were wondering). Named after the 2nd Earl Grey, a British prime minister who received this flavored tea as a gift and served it in his ministerial drawing rooms, the tea has been in continuous production since the 1830s. Enjoy it black or with milk.', '8.99'),
(6, 'Lemon Chamomile Herbal Tea', 'assets/images/lcht.jpg', 'Surprise, it’s lemon grass. The delicate taste of lemon in our Lemon Chamomile tea comes from natural lemon grass, which offers the aroma of lemon without the bitterness of lemons. We combine lemon grass from Thailand with chamomile to blend a honey colored infusion. The result is an invigorating drink that includes an addition of orange peel that adds a delicate citrus flavor. Lemon Chamomile Tea is purported to be a natural aid for relaxation, sleep and digestion.', '8.99'),
(7, 'Estate Darjeeling Tea', 'assets/images/edt.jpg', 'Located in the Northeastern India, the Darjeling tea region is situated in altitudes of more than 6,000 feet with breathtaking views of the Himalayan mountains.  The combination of the moist cool climate, the rich soil, the frequent rainfall and the gradually sloping terain gives Darjeeling tea its famous unique flavor.  Darjeeling teas have a very limited harvest, makig this tea one of the finest in the world.', '8.99'),
(8, 'Chai Black Tea', 'assets/images/cbt.jpg', 'Quick, what’s the most popular drink in India? Coffee? Nope. Tea? Close. Try Chai. On every street corner in India, Chaiwallahs hawk their special blend. We offer a traditional Indian Chai that uses only the finest ingredients. We blend black tea, cinnamon, clove, and cardamom. Exotic, aromatic and deeply relaxing, Chai is the drink of a continent. One billion Indians can’t be wrong.', '8.99'),
(9, 'Chai Rooibos Herbal Tea', 'assets/images/crht.jpg', 'Sweet and spicy with notes of cinnamon, licorice, close, citrus and ginger combined with creamy rooibos for a caffeine free infusion.\r\n\r\nThe masala chai served on India\'s streets is traditionally based on native black teas. To craft our herbal Chai Rooibos we crossed continents to the South African Kouga, where rooibos bushes grow wild. On a small, family-owned farm, the leaves are harvested, cut and sorted by hand, then carefully prepared to our specifications before shipping to California. Once in our hands, we blend this naturally caffeine free herbal infusion with a dozen ingredients sourced around the world to create this vibrantly spiced brew.', '8.99'),
(10, 'Pomegranate Blueberry Tea', 'assets/images/pbt.jpg', 'We combine our famous Lung Ching Dragonwell Green, premium Oolong, and Ceylon Teas, then infuse them with blueberry and pomegranate flavoring, along with bits of blueberries for a delightfully aromatic tea. Fresh, fruity, and bright with flavor, this tea exhibits bright berry notes and a naturally sweet finish.', '10.80'),
(11, 'Vanilla Ceylon Tea', 'assets/images/vct.jpg', 'Vanilla Ceylon Tea', '8.99'),
(12, 'Lung Ching Dragonwell Tea', 'assets/images/lcdt.jpg', 'Savor the tea of emperors. This delicate green tea is revered by the Chinese for its jade green color and unique shape. The only place in the world where Lung Ching Dragonwell tea is grown is in the West Lake district in Hangzhou, China. We make the tea the same way the Chinese have made it for centuries. The tea is meticulously prepared from tender leaves using a traditional handmade technique.', '8.99'),
(13, 'Dong Ding Tea', 'assets/images/ddt.jpg', 'This Oolong from Taiwan is grown in a unique climate and soil to create a special tea. It goes through a very deep oxidation process. The leaves are dried and rolled with a cloth to create ball shapes.\r\n\r\nAroma: Sweet grassy aroma with hints of floral\r\n\r\nBody: Full\r\n\r\nFlavor: Orange, yellow liquor with a full-bodied and prominent roasted flavor', '8.80'),
(14, 'Osmanthus Oolong Tea', 'assets/images/oot.jpg', 'Deep & buttery aroma with slightly floral, with a buttery finish flavor.', '8.80'),
(15, 'Decaf Green Tea', 'assets/images/dgt.jpg', 'This wonderful green tea is grown in China, the birthplace of tea, where the field workers take enormous pride in delivering only the highest quality green tea, legendary for its overall health benefits and antioxidant content. And our special CO2 decaffeination process lets you enjoy all the benefits of this fine, Chinese green tea with optimal taste and quality, without the caffeine. Experience an incredible sense of well being as you sip this delicious decaffeinated green tea with its delicate grassy and floral aroma throughout the day.', '10.20');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(2) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` int(2) NOT NULL,
  `active` bit(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `first_name`, `last_name`, `password`, `role_id`, `active`) VALUES
(1, 'Cypher96', 'test@gmail.com', 'Test', 'Test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 2, b'01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coffee`
--
ALTER TABLE `coffee`
  ADD PRIMARY KEY (`coffee_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `tea`
--
ALTER TABLE `tea`
  ADD PRIMARY KEY (`tea_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coffee`
--
ALTER TABLE `coffee`
  MODIFY `coffee_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tea`
--
ALTER TABLE `tea`
  MODIFY `tea_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
