-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 12, 2023 at 11:46 AM
-- Server version: 8.0.32-0ubuntu0.22.04.2
-- PHP Version: 8.1.2-1ubuntu2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelbuddys`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`id`, `name`, `phone`, `email`, `destination`, `date`, `created_at`, `updated_at`) VALUES
(7, 'Ratnesh Hemantkumar Karbhari', '9137976398', 'ratneshkarbhari18@gmail.com', 'Mumbai', 'Every Friday', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint UNSIGNED NOT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `title`, `slug`, `featured_image`, `banner_image`, `description`, `thumbnail`) VALUES
(2, 'Kedarnath', 'kedarnath-trip', '1676873060_78c5b62c927a67dad506.jpg', '1675400662.jpg', '<h2>KEDARNATH TRIPS</h2><p>asdasdasdads asd a</p><p>d</p><p>ads</p>', '1678094956_2b67d3c1dd9b5498881f.jpg'),
(3, 'Jagannath Puri', 'jagannath-yatra-puri', '1676873166_e89b280b20ad57da117c.jpg', '1676873166_f32b1b6ffa1a0e7622e6.jpg', '<p>jagannath puri yatra</p>', '1677917791_c4d45e8bfab14599238b.jpg'),
(5, 'HIMACHAL PRADESH', 'manali-trips-kullu-manali-packages-shimla-packages-honeymoon-pacakges', '1677162505_45037a83a88d76bbcc25.png', '1677162505_18fb448c901f91b338b3.jpg', '', '1677162505_ef45baac0ca53ce12773.png');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2014_10_12_100000_create_password_resets_table', 1),
(10, '2019_08_19_000000_create_failed_jobs_table', 1),
(11, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(12, '2023_02_03_031313_create_trip_categories_table', 1),
(13, '2023_02_03_031329_create_locations_table', 1),
(14, '2023_02_03_031349_create_trips_table', 1),
(15, '2023_02_03_044536_add_column_thumbnail_to_locations', 2),
(16, '2023_02_03_044934_add_column_featured_to_locations', 3),
(17, '2023_02_03_050955_add_column_dates_to_trips', 4),
(18, '2023_02_03_051103_add_column_dates_to_trips', 5),
(19, '2023_02_03_061502_create_testimonials_table', 6),
(20, '2023_02_03_063142_create_leads_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube_video_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stars` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `title`, `thumbnail`, `text`, `youtube_video_link`, `stars`, `created_at`, `updated_at`) VALUES
(1, 'Ratnesh Karbhari', '1675405858.jpg', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliq</p>', 'https://www.youtube.com/watch?v=tPGbsPqnrE8', '4', '2023-02-03 01:00:58', '2023-02-03 01:00:58'),
(2, 'Ratnesh', '1675433056.png', '<p>asdasdad</p>', NULL, '4', '2023-02-03 08:34:16', '2023-02-03 08:34:16');

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `id` bigint UNSIGNED NOT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_image_touch` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube_videos` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `itinerary` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotel_info` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `brochure` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pickup_city` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `drop_city` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sale_price` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dates` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `inclusion` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exclusion` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`id`, `title`, `slug`, `featured_image`, `banner_image`, `banner_image_touch`, `description`, `gallery_images`, `youtube_videos`, `duration`, `itinerary`, `hotel_info`, `location`, `brochure`, `pickup_city`, `drop_city`, `price`, `sale_price`, `featured`, `dates`, `inclusion`, `exclusion`) VALUES
(16, 'Kedarnath', 'kedarnath-trip-char-dham-tour', '1677159303_0e2d8bc0b8ca5ea1208d.jpg', '1677159303_ebebdce3be3883ebb113.jpg', '', '<p>Experience the magic in the spiritual valleys of kedarmath. Roam through the pavement and yards of the enlightening temple and village. Visit the stories, Come across the Bhim Shila that saved the kedarnath temple. Let us serve you the holy journey and experience the spirituality hovering in the airs of the Kedarnath, the first of the Panch Kedar temples. Encounter the beauty of this enduring temple constructed by the Pandavas and holy waters of the divine Ganga river.&nbsp;<br>Enjoy A pilgrim through the snow-crowned mountains.</p>', '1677159303_1cc07b3c2f5d01513b3f.jpeg,1677159303_8c1100f9f8f62667eeae.jpeg,1677159303_e78eea48eff5a791661c.jpeg,1677159303_1e379868914b860ad2ae.jpeg,1677159303_2ed50a270ed0f956c6f2.jpeg,1677159303_51950a5e250809e09e6e.jpeg,1677159303_c96a8852d7166c54c25a.jpeg,1677159303_223ec4111095d28079dc.jpeg', 'https://www.youtube.com/watch?v=K_eGcpqKYUY', '8N / 9D', '<h4>DAY 1 : MUMBAI - DELHI</h4><p>Board train from CSMT at 11:30 PM.&nbsp;<br>Overnight Train Journey.</p><p>&nbsp;</p><h4>DAY 2 : TRAIN JOURNEY</h4><p>Overnight Train Journey.</p><p>&nbsp;</p><h4>DAY 3 : DELHI - HARIDWAR</h4><p>Morning Arrival at Delhi Railway Station and transfer to Hotel.&nbsp;<br>Sightseeing (Ganga Aarti, Har ki Pauri, Ganga Ghat).&nbsp;<br>Dinner &amp; Overnight Stay at hotel.</p><p>&nbsp;</p><h4>DAY 4 : HARIDWAR - GUPTKASHI</h4><p>6:30 am - Head to Guptkashi (9hr).&nbsp;<br>4:00 pm - Move toward our place for night stay which is at starting point of Guptkashi town.&nbsp;<br>Dinner &amp; Overnight stay at hotel.</p><p>&nbsp;</p><h4>DAY 5 : GUPTKASHI - KEDARNATH</h4><p>5:30am - After breakfast move for Kedarnath.&nbsp;<br>Drive for Sonprayag (2hr) from there we have to change for public transport up to Gaurikund (4.4km) (At your own cost approx Rs.50).&nbsp;<br>Then our trek starts, 6:00 am visit Kedar baba temple.&nbsp;<br>Dinner &amp; Overnight stay at Kedarnath.</p><p>&nbsp;</p><h4>DAY 6 : KEDARNATH - GUPTKASHI</h4><p>7:00 - 8:00 am - After breakfast move to downhill from Kedarnath.&nbsp;<br>12:00-1:00 pm - Reach Gaurikund and get public transport from there for Sonprayag (At your own cost approx Rs.50).&nbsp;<br>Reach Sonprayag and move for Guptkashi (1hr 30min).&nbsp;<br>Dinner &amp; overnight stay at Hotel.</p><p>&nbsp;</p><h4>DAY 7 : GUPTKASHI- RISHIKESH - HARIDWAR</h4><p>After breakfast drive from Guptkashi to Haridwar.&nbsp;<br>On The Way Visit Rishikesh.&nbsp;<br>Arrival Rishikesh and transfer to Visit Ram Jhula, Laxman Jhula and Bharat Mandir.&nbsp;<br>After Sightseeing transfer to Enjoy White Water Rafting (by Own).&nbsp;<br>Then Transfer to Haridwar.&nbsp;<br>Evening Arrival Haridwar and Transfer to Hotel.&nbsp;<br>Dinner &amp; overnight stay at hotel.</p><p>&nbsp;</p><h4>DAY 8 : HARIDWAR - RISHIKESH - DELHI</h4><p>After breakfast checkout from hotel, proceed for Delhi.&nbsp;<br>Board train from Delhi Railway Station for your home town.&nbsp;<br>Overnight in train.</p><p>&nbsp;</p><h4>DAY 9 : REACH MUMBAI</h4><p>Reach Mumbai. Here we conclude the tour with sweet memories.</p>', '<p>HARIDWAR - Regenta / Similar</p><p>GUPTKASHI - Dev Dham / Similar</p><p>KEDARNATH - Kedarnath Stay / Similar</p><p>RISHIKESH/HARIDWAR - Regenta / Similar</p>', '2', '1677159303_2e2f43ceabb0fdf64327.pdf', 'Mumbai', 'Mumbai', '18999', '16999', 'Yes', '05th May | 12th May | 19th May | 26th May', '<ul><li>Sleeper Train Fare for Mumbai to Mumbai Package</li><li>2 Night stay in Haridwar as per the specified meal plan basis.</li><li>2 Night stay in Guptkashi as per the specified meal plan basis. &nbsp; &nbsp; &nbsp;</li><li>1 Night stay in Kedarnath as per the specified meal plan basis.</li><li>All Transportation from pick up till drop at Haridwar/Delhi station</li><li>All Sight Seeing as mentioned in the itinerary</li><li>Meals: Breakfast &amp; Dinner Professional and well experienced Tour Manager</li><li>All Toll, Parking &amp; Taxes.</li><li>Driver allowances</li></ul>', '<ul><li>Airfare/Train fare for Haridwar to Haridwar Package</li><li>Food and beverages other than mentioned In the Plan</li><li>Use of Facilities in Hotels like gym, games, spa, Etc.</li><li>Entry Fees To the Monuments, Parks and Attractions,</li><li>Optional Activities During sight seeing like bike rental , Jeep safari ,Boating (other than included) Art and cultural shows etc.</li><li>Anything Other than Mentioned in the Inclusions</li></ul>'),
(17, 'Misty Manali ', 'himachal-packages-manali-packages-shimla-manali-packages', '1677162023_93d8f017e91738d1d1db.jpg', '1677162023_a1db91aaca35335594aa.jpg', '', '<p>Our Misty Manali package allows you to beat the heat and have Masti in Manali with beautiful memories for a lifetime with your dear ones. Giving a great end to your summer let\'s make all out of it.</p>', '1677162023_4354a9d902d59ff75dae.jpeg,1677162023_81d73f7a9e71296682d7.jpeg,1677162023_5c2a421c19b7eeb76e6f.jpeg,1677162023_613c8be70744bfe5cfc9.jpeg,1677162023_9aca22339fa6ee5a1b67.jpeg,1677162023_2eb1858bdd47a57f9691.jpeg,1677162023_5dc89a28716aa7a6c152.jpeg,1677162023_a69c4ab72a43a7e476c5.jpeg,1677162023_9ab93f47b40e5dabf265.jpeg,1677162023_7091c7be9e0fd2b87931.jpeg', 'https://www.youtube.com/watch?v=FqtWt7nWKFs', '8N / 9D', '<p>DAY 1 : MUMBAI - CHANDIGARH</p><p>Journey starts from Bandra Terminus, board on train and proceed to Chandigarh.<br>Overnight in<br>Train.</p><p>DAY 2 : CHANDIGARH - MANALI</p><p><br>Reach Chandigarh, after train Journey freshen<br>up and spend some time at Chandigarh Market.<br>Then Overnight Journey to Manali.</p><p>DAY 3 : MANALI LOCAL SIGHTSEEING</p><p><br>Check into hotel &amp; Take some rest.&nbsp;<br>After Lunch<br>visit local sightseeing, Hadimba mata temple,<br>Van Vihar, Vashist Kund and Enjoy shopping at<br>Manali Mall road.&nbsp;<br>Back to hotel, Dinner and overnight stay at Manali.</p><p>DAY 4 : MANALI - SOLANG VALLEY - ATTAL TUNNEL - MANALI</p><p><br>After Breakfast, proceed for Atal tunnel (If<br>operational) which is 9km Tunnel and then visit Solang valley enjoy photography at snow, snow activities &amp; spend day at Solang valley. Back to Hotel.<br>Dinner and Overnight stay at Hotel.</p><p>DAY 5 : MANALI - KASOL</p><p><br>You will check out from Manali early morning and start driving towards Kasol.&nbsp;<br>Enroute Enjoy<br>Adventures Activities like, River rafting included in the package &amp; Paragliding at Own cost.&nbsp;<br>Reach Kasol , Checkin to Camp / Hotel.&nbsp;<br>Later Visit Manikaran Gurudwara and Take Holy water Dip in<br>the Manikaran Hot water Springs.&nbsp;<br>Visit the Shiva<br>Mandir , Next to Gurudwara.&nbsp;<br>Guest Can Enjoy<br>Langar at Gurudwara.&nbsp;<br>In Evening Visit Kasol<br>Market, Shopping for Hippie Looks.&nbsp;<br>Dinner and<br>Overnight stay at Kasol.</p><p>DAY 6 : KASOL - AMRITSAR</p><p><br>Early Checkout from Hotel.&nbsp;<br>Proceed for Amritsar.<br>Reach Amritsar in evening.&nbsp;<br>Dinner and Overnight<br>stay at Hotel.</p><p>DAY 7 : AMRITSAR FARM STAY</p><p><br>After breakfast Checkout from Hotel Visit, Golden<br>temple, Jallianwala Bhag &amp; Wagah Border (If<br>Operational) than Checking to Farm Stay &amp; Enjoy<br>Punjabi Culture with Punjabi Cuisine. Overnight<br>stay at Haveli.</p><p>DAY 8 : AMRITSAR TO MUMBAI</p><p><br>After Breakfast Checkout from hotel and procced<br>to Amritsar Station to board train for your home<br>town.&nbsp;<br>Overnight in train.</p><p>DAY 9 : REACH MUMBAI</p><p><br>Reach Mumbai.<br>Here our tour ends with sweet memories.</p>', '<p><strong>MANALI</strong> - Mars Resort / Similar<br>KASOL - Kasol Inn / Similar<br>AMRITSAR -Aura grand &amp; Farm Stay</p>', '5', '1677162023_0459ffd3afec6ea5da10.pdf', 'Mumbai', 'Mumbai', '17999', '15999', 'Yes', 'Every Friday', '<ul><li>To &amp; Fro Sleeper Train Ticket</li><li>Well Trained &amp; Experience Tour</li><li>Manager</li><li>Accommodation in 3 Star Hotels.</li><li>All Sightseeing on private vehicle.</li><li>Meal : Breakfast, Lunch and Dinner.</li><li>2-Night stay in Amritsar.</li><li>2-Night stay in Manali.</li><li>1-Night stay in Kasol.</li><li>1-Night Overnight Journey.</li><li>River Rafting.</li><li>Punjabi Culture, Turban tying,</li><li>Bhangra, Punjabi Marshal Arts etc.</li><li>All Transportation</li><li>Toll &amp; Parking.</li><li>Driver Allowance.</li></ul>', '<ul><li>Meal during train journey.</li><li>Personal Expenses.</li><li>Snow Suite and boot : 250/-.</li><li>Heater charges.</li><li>Any portage at airports and</li><li>hotels, tips, insurance, wine,</li><li>telephone charges, and all</li><li>items of personal nature.</li><li>Activity Charges.</li><li>Anything Other than</li><li>Mentioned in the Inclusions.</li></ul>'),
(18, 'Suhana Himachal', 'himachal-trip-manali-trip-shimla-manali-trip', '1677164769_e906f5c5cf360a3bb092.jpg', '1677164769_710913b215f2eb9a1a5a.jpg', '', '<p>Our Suhana Himachal package allows you to beat the heat and have Masti in Manali with beautiful memories for a lifetime with your dear ones. Giving a great end to your summer let\'s make all out of it.</p>', '1677164769_39ad0aa5e40c25b63727.jpeg,1677164769_025dd4e291c770485b45.jpeg,1677164769_2e073dc6637d2e2e4af0.jpeg,1677164769_9508288acdf9857211f3.jpeg,1677164769_a45b900055f70a3befd5.jpeg,1677164769_3250efbcb0f8387dcb27.jpeg,1677164769_1bda367bc05f34547795.jpeg,1677164769_00d748c70d1d79e64bac.jpeg', '', '8N / 9D', '<p>DAY-1: MUMBAI - CHANDIGARH</p><p>Journey Starts from Bandra Terminus, board on<br>train and proceed to Chandigarh.&nbsp;<br>Overnight in<br>Train.</p><p><br>DAY-2: CHANDIGARH - SHIMLA</p><p>Meet and Greet With Our Representative, then<br>Proceed to Shimla.<br>Enroute visit Pinjore Garden.<br>Evening Arrival Shimla and transfer to Hotel.<br>Arrival Hotel Check Inn and Rest.&nbsp;<br>Overnight Stay<br>at Shimla.</p><p><br>DAY-3: SHIMLA SIGHTSEEING</p><p>After Morning Breakfast Transfer to Shimla Local<br>Sightseeing Visit Kufri Zoo, Indira Bunglow<br>(Chini Bunglow), Kufri Fun World. Have Lunch at<br>Kufri Fun World.<br>After Lunch visit to Shimla Mall<br>Road (Christ Church).<br>Evening after sightseeing<br>back to Hotel and Halt.<br>Overnight Stay at<br>Shimla.</p><p><br>DAY-4: SHIMLA - MANALI</p><p>After Morning Breakfast Check Out Hotel and<br>Proceed to Manali.<br>Enroute window sightseeing<br>Sundernagar Canal, Kullu Valley and Pandoh<br>dam.<br>After Sightseeing Proceed to Manali.<br>Arrival Manali Check Inn Hotel and Rest.<br>Overnight Stay at Manali.</p><p><br>DAY-5: MANALI - SOLANG VALLEY</p><p>The morning after breakfast leave for a Manali<br>Local Sightseeing, Vashisth Rushi Temple,<br>Solang Valley, Atal Tunnel If operational).<br>Back<br>to the hotel, dinner and overnight stay at hotel<br>in Manali.</p><p><br>DAY-6: MANALI LOCAL SIGHTSEEING</p><p>After morning breakfast, proceed to visit<br>Hadimba Mata Temple, Mall Road, Van Vihar.<br>Back to hotel for lunch.<br>Then at Night get ready<br>for DJ Night, dinner and overnight stay at hotel<br>in Manali.</p><p><br>DAY-7: MANALI TO CHANDIGARH</p><p>After morning breakfast depart from Manali to<br>Chandigarh, enroute enjoy River Rafting.<br>In the<br>evening Check in to Hotel, Dinner and Overnight<br>stay at Chandigarh.</p><p><br>DAY-8: CHANDIGARH SIGHTSEEING &amp; DROP AT RAILWAY STATION.</p><p>After morning breakfast, Chandigarh<br>Sightseeing (Sukhana Lake, Rock Garden, Rose<br>Garden).<br>Board on train and proceed to Mumbai.</p><p><br>DAY-9: MUMBAI ARRIVAL</p><p>Arrive at Mumbai.<br>Tour conclude with sweet memories.</p>', '<p>Shimla - Truind By Narayan<br>Manali- Mars Resort<br>Chandigarh - Vihaan hotel</p>', '5', '1677164769_c5938df190652d65065f.pdf', 'Mumbai', 'Mumbai', '18999', '16999', 'Yes', 'Every Friday', '<ul><li>To &amp; Fro Sleeper Train Ticket</li><li>Well Trained &amp; Experience Tour</li><li>Manager</li><li>Accommodation in 3* Hotel</li><li>All Sightseeing on private vehicle</li><li>Meal : Breakfast, Lunch and Dinner</li><li>1-Night stay in Chandigarh</li><li>2-Night stay in Shimla</li><li>3-Night stay in Manali</li><li>River Rafting</li><li>All Transportation</li><li>Toll &amp; Parking</li><li>Driver Allowance</li></ul>', '<p>Meal during train journey<br>Personal Expenses<br>Snow Suite and boot : 250/-<br>Heater charges<br>Any portage at airports and<br>hotels, tips, insurance, wine,<br>telephone charges, and all<br>items of personal nature.<br>Activity Charges<br>Anything Other than<br>Mentioned in the Inclusions.</p>'),
(19, 'Nepal', 'nepal-tours-napal-trip', '1677420702_20a5499c2d827f464202.jpeg', '1677420702_e041e9ae1b41ba18b10f.jpg', '', '<p>Nepal is a small, landlocked country in South Asia that is known for its breathtaking natural beauty, rich cultural heritage, and adventure tourism opportunities. The country is home to the Himalayan mountain range, including Mount Everest, the highest peak in the world. Nepal has a diverse landscape that includes high mountains, lush green forests, and fertile plains, making it a popular destination for nature lovers, adventure enthusiasts, and cultural explorers.</p>', '1677420702_e1e55f0f927c4ab93079.jpeg', '', '5N / 6D', '<p>DAY 1 : GORAKHPUR - POKHRA</p><p>Arrival at Gorakhpur Junction/ Airport ( Morning time recommended ) , Meet and welcome by our company representative, Drive transfer to Pokhara city of Joyful life and lakes. Arrival at Pokhara , Overnight at Hotel.</p><p>&nbsp;</p><p>DAY 2 : POKHRA SIGHTSEEING COVERED</p><p>Early morning 4:30 am wake up and visit to Sarangkot Hills station for sunrise program , where you can enjoy the magnificent view of mighty Annapurna Himalayan range ( from July to Sep not recommended due to heavy Smokey and cloudy weather because of Monsoon season) instead of that we go to World Peace Stupa during these month after breakfast. After breakfast Pokhara half day sightseeing of Davis fall, Gupteshower cave, Tal Barahi temple enjoy boating in fewa lake, Bindabasini Temple, evening visit lake side area overnight at the Hotel.</p><p>&nbsp;</p><p>DAY 3 : POKHRA - KATHMANDU</p><p>After breakfast drive to Kathmandu city , on the way you have to do white water rafting or Manokamana ( Where devotees wish for their success, the lord devi temple) cable car ride on your own expenses, arrival at Kathmandu city , check in your hotel.</p><p>&nbsp;</p><p>DAY 4 : KATHMANDU SIGHTSEEING</p><p>After Breakfast , we proceed to Pashupati Nath Temple , the famous Lord Shiva Temple , Bouddhanath Stupa , most holiest place for :Bajrayana Buddhists society , Patan Durbar Squire , the most organized durbar square in Nepal , Shyambhunath Stupa ( The monkey temple) , the symbol of harmony between Bajrayana Buddhism and Hinduism, all four iconic historical place is declared by UNESCO World Heritage site. Back to Hotel.</p><p>&nbsp;</p><p>DAY 5 : KATHMANDU - CHITWAN</p><p>Early morning check out around 6:30 Am, 7:30 am breakfast will be served and 8:00 Am, then drive directly to Chitwan National park , evening activities on your own expenses. Overnight at resort.</p><p>&nbsp;</p><p>DAY 6 : CHITWAN - GORAKHPUR</p><p>Morning wake up call for those who want to go Jungle safari ( optional) After breakfast , check out your room headed towards Lumbini , Birth place of lord buddha . then continue the drive to Gorakhpur .</p>', '<p>XYZ</p>', '2', '1677420702_b8685b0b1da6c19ed8d9.pdf', 'Gorakhpur ', 'Gorakhpur ', '20499', '18499', 'Yes', 'Every Friday', '<ul><li>Well Trained &amp; Experience Tour Manager&nbsp;</li><li>Accommodation in 3* Hotel&nbsp;</li><li>All Sightseeing on private vehicle&nbsp;</li><li>Meal : Breakfast and Dinner&nbsp;</li><li>2-Night stay in Kathmandu&nbsp;</li><li>2-Night stay in Pokhara&nbsp;</li><li>1-Night stay in Chitwan&nbsp;</li><li>Non-Alcoholic Welcome Drinks&nbsp;</li><li>Cultural Show and Safari&nbsp;</li><li>All Transportation&nbsp;</li><li>Toll &amp; Parking&nbsp;</li><li>Driver Allowance</li></ul>', '<ul><li>Air Fare / Train Fare&nbsp;</li><li>Telephone Calls&nbsp;</li><li>Laundry Service&nbsp;</li><li>Personal Expenses&nbsp;</li><li>Activity Charges&nbsp;</li><li>Anything Other than Mentioned in the Inclusions.</li></ul>'),
(20, 'Kashmir', 'kashmir-trips', '1677423340_6bad01cb3b87735fdb3e.jpeg', '1677423340_035244b5d3424924e233.jpeg', '', '<p>Kashmir is a region in the northernmost part of India, often referred to as \"Paradise on Earth\" due to its breathtaking natural beauty. With its snow-capped mountains, lush green valleys, sparkling lakes, and colorful gardens, Kashmir attracts visitors from all over the world.</p>', '1677423340_064ef39b11f08642ab45.jpeg', '', '5N / 6D', '<p>DAY 1 : Arrival Srinagar / Airport</p><p>Welcome to Srinagar the city of Lakes you will meet our representative and get transferred to Hotel and then local sightseeing of Srinagar visiting Nishat, Shalimar Cheshma Shahi. Over night stay in hotel in Srinagar.</p><p>&nbsp;</p><p>DAY 2 : Srinagar/ Day trip to Gulmarg</p><p>After breakfast drive to Gulmarg know as meadows of flowers the distance of 56kms 2 hours drive in Gulmarg you can visit local Gulmarg with golf course and can have gondola ride (by your own expenses) and then overnight stay hotel in Srinagar.</p><p>&nbsp;</p><p>DAY 3 : Srinagar/ Sonmarg</p><p>After breakfast drive to Sonmarg Valley Of mountains the distance of 90kms 3 hours drive, Sonmarg lies at the head of Sindh valley. The drive through here presents a Spectacular face of the countryside. Today you can visit zero point and Thajwas Glacier (by your own expenses) and then overnight stay in hotel in Srinagar.</p><p>&nbsp;</p><p>DAY 4 : Srinagar/Pahalgam</p><p>After morning breakfast will leave for Pahalgam the \'valley of shepherds\' the approx distance of 100kms 3hrs drive; Pahalgam is situated at the confluence of the streams flowing from river Lidder and Sheeshnag lake. Enroute visit the Awantipura ruins, an 1100 year old temple dedicated to Lord Vishnu and built by King Awantivarma, Today you can visit to Kashmir valley, baisaran and water fall (by your own expenses) and betaab valley, Chandanwari and Aru valley (by hiring car on your own expenses) over night stay in Pahalgam.</p><p>&nbsp;</p><p>DAY 5 : Pahalgam to Srinagar</p><p>After breakfast check out from hotel and proceed towards Srinagar and enroute do remaining sightseeing if any. Reach to Srinagar, have dinner &amp; overnight stay at Deluxe Houseboat in Srinagar.</p><p>&nbsp;</p><p>DAY 6 : Departure</p><p>Morning after breakfast drop at Srinagar Airport for onward journey.</p>', '<p>xyz</p>', '2', '1677423340_5e72e6662bc1d946d4e5.pdf', 'Srinagar', 'Srinagar', '19999', '18999', 'Yes', '05th May,2023 | 12th May,2023 | 19th May,2023|26th May,2023', '<ul><li>Accommodation in 3* Hotel&nbsp;</li><li>All Sightseeing on private vehicle&nbsp;</li><li>Meal : Breakfast and Dinner&nbsp;</li><li>3-Night stay in Srinagar Hotel&nbsp;</li><li>1-Night stay in Srinagar&nbsp;</li><li>Houseboat 1-Night stay in Pahalgam&nbsp;</li><li>All Transportation&nbsp;</li><li>Toll &amp; Parking&nbsp;</li><li>Driver Allowance</li></ul>', '<ul><li>Air Fare / Train Fare&nbsp;</li><li>Telephone Calls&nbsp;</li><li>Laundry Service&nbsp;</li><li>Personal Expenses&nbsp;</li><li>Activity Charges&nbsp;</li><li>Anything Other than Mentioned in the Inclusions.</li></ul>'),
(21, 'Spicy Kerala', 'kerala-tour-kerala-packages', '1677428354_a0ed86c53622c4bd021f.jpeg', '1677428354_42ec36d94bd0587da579.jpg', '', '<p>Kerala is a state located on the southwestern coast of India and is renowned for its natural beauty. The state is often referred to as \"God\'s Own Country\" and is known for its serene beaches, lush greenery, tranquil backwaters, and picturesque hill stations</p>', '1677424708_5b67d7446d8678d5c9a5.jpeg,1677428354_9b17e9652082a1e3d3af.jpeg', '', '6N / 7D', '<p>Day 1 : Mumbai-Cochin</p><p>Board in train and overnight train journey</p><p>&nbsp;</p><p>Day 2: Arrival Cochin – Munnar</p><p>Arrival Cochin Airport Meet and Greet With Our Representative, Then Proceed to Munnar. Arrival Munnar and transfer to Hotel. enroute visit Cheyyappara waterfalls,Valara waterfalls,Spice Plantation.Hotel Check Inn. Overnight Stay at Munnar.</p><p>&nbsp;</p><p>Day 3 :Munnar Local</p><p>After Morning Breakfast transfer to Local Sightseeing Visit Mattupetty Dam,Tata Tea Factory,Rose Garden and Photo stop at Tea Plantation. After Sightseeing back to Hotel and Halt. Overnight Stay at Munnar.</p><p>&nbsp;</p><p>Dqy 4 :Munnar – Thekkady</p><p>After Morning Breakfast Check Out Hotel and Proceed to Thekkady.Afternoon Arrival Thekkady.After fresh up procced to visit Kathkali Show,Marshal Arts,Elephant Ride. Overnight Stay at Thekkady.</p><p>&nbsp;</p><p>DAy 5 :Thekkady – Alleppey</p><p>Early Morning Check Out Hotel and Proceed to Alleppey.Arrival Alleppey and transfer to House Boat. Arrival House Boat Check Inn and Enjoy Kerala’s Backwaters</p><p>&nbsp;</p><p>Day 6 :Alleppey – Cochin - Mumbai</p><p>After Morning Breakfast Check Out Hotel and Proceed to Cochin. Arrival Cochin and transfer to Cochin Airport or Ernakulum Railway Station.Board in train and overnight train journey.</p><p>&nbsp;</p><p>Day 7 :Mumbai Arrival</p><p>Arrive at Mumbai. Tour conclude with sweet memories.</p>', '<p>xyz</p>', '2', '1677428354_74da283b594fec1294c7.pdf', 'Mumbai', 'Mumbai', '19499', '17499', 'Yes', 'Every Friday', '<ul><li>To &amp; Fro Sleeper Train Ticket&nbsp;</li><li>Well Trained &amp; Experience Tour Manager&nbsp;</li><li>Accommodation in 3* Hotel&nbsp;</li><li>All Sightseeing on private vehicle&nbsp;</li><li>Meal : Breakfast, Lunch and Dinner&nbsp;</li><li>2-Night stay in Munnar&nbsp;</li><li>1-Night stay in Thekkady&nbsp;</li><li>1-Night stay in Alleppey Houseboat&nbsp;</li><li>1-Night stay in Kovalam&nbsp;</li><li>Jungle Safari at Munnar&nbsp;</li><li>Boating at Mattupetty Dam&nbsp;</li><li>All Transportation&nbsp;</li><li>Toll &amp; Parking&nbsp;</li><li>Driver Allowance</li></ul>', '<ul><li>Meal during train journey&nbsp;</li><li>Personal Expenses&nbsp;</li><li>Activity Charges&nbsp;</li><li>Anything Other than Mentioned in the Inc</li></ul>'),
(22, 'Amazing Kerala', 'amazing-kerala-keral-tours', '1677429303_77d28225060197444455.jpeg', '1677429303_3fa98d8af9e431430663.jpeg', '', '<p>Kerala is renowned for its natural beauty. The state is often referred to as \"God\'s Own Country\" and is known for its serene beaches, lush greenery, tranquil backwaters, and picturesque hill stations</p>', '1677429303_cdca97b0a34c0f8d7ebc.jpeg', '', '7N/8D', '<p>Day 1 :Mumbai-Cochin</p><p>Board in train and overnight train journey.&nbsp;</p><p>Day-2 Arrival Cochin – Munnar</p><p>Arrival Cochin Airport Meet and Greet With Our Representative, Then Proceed to Munnar. Arrival Munnar and transfer to Hotel. enroute visit Cheyyappara waterfalls,Valara waterfalls,Spice Plantation.Hotel Check Inn. Overnight Stay at Munnar.&nbsp;</p><p>&nbsp;Day-3: Munnar Local</p><p>fter Morning Breakfast transfer to Local Sightseeing Visit Mattupetty Dam,Tata Tea Factory,Rose Garden and Photo stop at Tea Plantation. After Sightseeing back to hotel and Halt. Overnight Stay at Munnar.</p><p>&nbsp;</p><p>Day 4 :Munnar – Thekkady</p><p>After Morning Breakfast Check Out Hotel and Proceed to Thekkady.Afternoon Arrival Thekkady.After fresh up procced to visit Kathkali Show,Marshal Arts,Elephant Ride Overnight Stay at Thekkady.</p><p>&nbsp;</p><p>Day 5 :Thekkady – Alleppey</p><p>Early Morning Check Out Hotel and Proceed to Alleppey.Arrival Alleppey and transfer to House Boat. Arrival House Boat Check Inn and Enjoy Kerala’s Backwaters.</p><p>&nbsp;</p><p>Day 6 :Alleppey – Kovalam</p><p>After Breakfast, check out and Proceed to Kovalam beach; the international beach destination of Kerala often called as the Paradise of South. Kovalam is famous for its shallow waters and low tidal waves. Lighthouse is the main attraction in this beach. On arrival check in to the resort later spend leisure time at Lighthouse beach. Have comfortable overnight stay at Resort.</p><p>&nbsp;</p><p>Day 7 :Kovalam - Trivendrum - Mumbai</p><p>After breakfast, checkout and Proceed for sightseeing in Trivandrum; capital City of Kerala. Visit Padmanabhaswami Temple (Morning Darshan up to 12 pm, Evening 5 pm to 7.30pm). Then proceed to drop Trivendrum railways station Board in train and overnight train journey.</p><p>&nbsp;</p><p>Day 8:Mumbai Arrival</p><p>Arrive at Mumbai. Tour conclude with sweet memories.</p>', '<p>xyz</p>', '2', '1677429303_80a22f3a971bd2208f9c.pdf', 'Mumbai', 'Mumbai', '22999', '19999', 'Yes', 'Every Friday', '<ul><li>To &amp; Fro Sleeper Train Ticket&nbsp;</li><li>Well Trained &amp; Experience Tour Manager&nbsp;</li><li>Accommodation in 3* Hotel&nbsp;</li><li>All Sightseeing on private vehicle&nbsp;</li><li>Meal : Breakfast, Lunch and Dinner&nbsp;</li><li>2-Night stay in Munnar&nbsp;</li><li>1-Night stay in Thekkady&nbsp;</li><li>1-Night stay in Alleppey Houseboat&nbsp;</li><li>1-Night stay in Kovalam&nbsp;</li><li>Jungle Safari at Munnar&nbsp;</li><li>Boating at Mattupetty Dam&nbsp;</li><li>All Transportation T</li><li>oll &amp; Parking&nbsp;</li><li>Driver Allowance</li></ul>', '<ul><li>Meal during train journey&nbsp;</li><li>Personal Expenses</li><li>Activity Charges&nbsp;</li><li>Anything Other than Mentioned in the Inclusions.</li></ul>'),
(23, 'Royal Rajasthan', 'rajasthan-trips-rajashthan-tour', '1677430980_3f20c30ed14eb260f531.jpeg', '1677430980_41856b54d8b85425ea85.jpeg', '', '<p>Rajasthan is home to some of the most magnificent palaces and forts in India. The Amber Fort, Mehrangarh Fort, City Palace, and Hawa Mahal in Jaipur, Umaid Bhawan Palace in Jodhpur, and Junagarh Fort in Bikaner are just a few examples of the stunning architecture that Rajasthan has to offer.</p>', '1677430980_567b71548912df8a6321.jpeg,1677430980_8c2b928d10cb186877d6.jpeg', '', '7N/8D', '<p>Day 1:MUMBAI-JAIPUR</p><p>Meet our representative,Board in train and overnight journey.</p><p>&nbsp;</p><p>Day 2 :JAIPUR</p><p>Arrive at Jaipur railways station.proceed to hotel check inn hotel.after fresh up procced to Amer Fort and return back to hotel and overnight stay at hotel.</p><p>&nbsp;</p><p>DAy 3 :Jaipur</p><p>After breakfast procced to visit Jaipur Local Sightseeing Hawa Mahal,City Palace,Jantar Mantar,Birla Temple evening free leisure day at market and return back to hotel and overnight stay at hotel</p><p>&nbsp;</p><p>Day 4:Jaipur-AJMER-PUSHKAR</p><p>After breakfast check out hotel and procced to Pushkar, enroute Visit Ajmer Sharif Dargah and check in at hotel. After fresh up visit Bramha Temple, Pushkar Lake then return back to hotel and overnight stay at hotel.</p><p>&nbsp;</p><p>Day 5 :PUSHKAR-CHITTORGARH-UDAIPUR</p><p>After breakfast check out from hotel and procced to Chittorgarh. Visit Chittorgarh and return back to Udaipur and overnight stay at hotel.</p><p>&nbsp;</p><p>Day 6 :UDAIPUR</p><p>After breakfast procced to visit Udaipur Local Sightseeing visit City Palace, Jagdish Temple, Maharana Pratap Memorial, Fateh Sagar Lake, Saheliyon Ki Bari and return back to Udaipur and overnight stay at hotel.</p><p>&nbsp;</p><p>Day 7 :UDAIPUR-MUMBAI</p><p>After breakfast check out from hotel and procced to Drop Udaipur Railways station. Board in train and overnight train journey.</p><p>&nbsp;</p><p>Day 8 :MUMBAI ARRIVAL</p><p>Arrive at Mumbai. Tour Conclude with sweet memories.</p>', '<p>xyz</p>', '2', '1677430980_bbcc8a2839d889f24738.pdf', 'Mumbai', 'Mumbai', '22999', '19999', 'Yes', 'Every Friday', '<ul><li>To &amp; Fro Sleeper Train Ticket&nbsp;</li><li>Well Trained &amp; Experience Tour Manager&nbsp;</li><li>Accommodation in 3* Hotel&nbsp;</li><li>All Sightseeing on private vehicle&nbsp;</li><li>Meal : Breakfast, Lunch and Dinner&nbsp;</li><li>2-Night stay in Jaipur&nbsp;</li><li>1-Night stay in Pushkar</li><li>&nbsp;2-Night stay in Udaipur&nbsp;</li><li>Fort Entry Fees&nbsp;</li><li>Museum Entry Fees&nbsp;</li><li>Boating at Fateh Sagar Lake&nbsp;</li><li>All Transportation&nbsp;</li><li>Toll &amp; Parking&nbsp;</li><li>Driver Allowance</li></ul>', '<ul><li>Meal during train journey&nbsp;</li><li>Personal Expenses</li><li>&nbsp;Activity Charges&nbsp;</li><li>Anything Other than Mentioned in the Inclusions.</li></ul>'),
(24, 'Rustic Rajasthan', 'rustic-rajasthan-rajasthan-pacakegs', '1677431847_33e16ff3a394585d398f.jpeg', '1677431847_3a98d34f7066f21fcf8c.jpeg', '', '<p>The Thar Desert, which spans across Rajasthan, is a beautiful and unique landscape. The vast sand dunes, camel safaris, and stunning sunsets are some of the highlights of this region.</p>', '1677431847_c7bad46f92e85248b354.jpeg', '', '6N / 7D', '<p>Day 1:MUMBAI-JODHPUR</p><p>Meet our representative, board in train and overnight journey.</p><p>&nbsp;</p><p>Day 2: JODHPUR ARRIVAL</p><p>Arrive at Jodhpur railways station proceed to hotel, check inn at hotel. After fresh up proceed to visit Jodhpur local sightseeing Meharangarh Fort, Jasawant Thada then return back to hotel and overnight stay at Hotel.</p><p>&nbsp;</p><p>Day 3:JODHPUR-JAISALMER</p><p>After Breakfast check out hotel and procced to Jaisalmer enroute visit Jaisalmer War Museum, check inn at hotel and overnight stay at Hotel.</p><p>&nbsp;</p><p>Day 4:JAISALMER-JAISALMER DESERT CAMP</p><p>After Breakfast procced to visit Jaisalmer Golden Fort, Nathmal K Haweli, Gadisar Lake then procced to Jaisalmer Desert then check in at Camp. After fresh up procced to Enjoy Desert Safari &amp; Camel Ride and in the evening enjoy Rajasthani Cultural Dance and DJ Night. Overnight stay at Desert Camp.</p><p>&nbsp;</p><p>Day 5:JAISALMER DESERT-JODHPUR</p><p>After breakfast check out from Camp and procced to Jodhpur enroute visit remaining local sightseeing, Kuldhara Village &amp; Umedh Bhavan Palace overnight stay at Jodhpur.</p><p>&nbsp;</p><p>Day 6:JODHPUR-MUMBAI</p><p>After breakfast check out from hotel and procced to Drop Jodhpur Railways station. Board in train and overnight train journey.</p><p>&nbsp;</p><p>Day 7 :MUMBAI ARRIVAL</p><p>Arrive at Mumbai. Tour Conclude with sweet memories.</p>', '<p>xyz</p>', '2', '1677431847_f3878e96b74424a726ec.pdf', 'Mumbai', 'Mumbai', '22999', '16999', 'Yes', 'Every Friday', '<ul><li>To &amp; Fro Sleeper Train Ticket&nbsp;</li><li>Well Trained &amp; Experience Tour Manager&nbsp;</li><li>Accommodation in 3* Hotel&nbsp;</li><li>All Sightseeing on private vehicle&nbsp;</li><li>Meal : Breakfast, Lunch and Dinner&nbsp;</li><li>1-Night stay in Jaisalmer City&nbsp;</li><li>1-Night stay in Jaisalmer Camp&nbsp;</li><li>2-Night stay in Jodhpur&nbsp;</li><li>Fort Entry Fees&nbsp;</li><li>Museum Entry Fees&nbsp;</li><li>Camel Safari&nbsp;</li><li>Desert Jeep Safari&nbsp;</li><li>Boating at Gadisar Lake&nbsp;</li><li>All Transportation&nbsp;</li><li>Toll &amp; Parking&nbsp;</li><li>river Allowance</li></ul>', '<ul><li>Meal during train journey&nbsp;</li><li>Personal Expenses&nbsp;</li><li>Activity Charges&nbsp;</li><li>Anything Other than Mentioned in the Inclusions.</li></ul>'),
(25, 'Test TRip by Ratnesh', 'test-trip-slug-2', '1678439428_fe7b7aa8677d3fe6cce3.png', '1678439428_be7b6ad6b724cdbfdce5.jpg', '', '<p>sda ad</p>', '1678439428_d99ea663ad933cde4f0b.jpg,1678439428_388ecb159a62fef63f38.jpg,1678439428_3cdddace350f3cd59f44.jpg', 'https://www.youtube.com/watch?v=ichehjfmzec,https://www.youtube.com/watch?v=_qWBLwoc9C8&t=88s', '5N|6D', '<p>asdad</p>', '<p>asdad</p>', '2', '1678439428_0252284666e9fb28aa2c.pdf', 'Mumbai', 'Mumbai', '11231', '10000', 'Yes', '16.1.23,30.1.23,5.7.23', '<p>asdads</p>', '<p>asdad</p>'),
(26, 'Test Trip x', 'twra-dadaar', '1678527188_6b6ac514ca50a053acd2.jpg', '1678527188_2f24eccc1feab9eabee8.jpg', '1678527188_464b6c4b5435999b7ae4.jpeg', '<p>adsd adasd</p>', '1678527188_a8afe28368dc1caa3801.jpg,1678527188_84e4b3fcd2a3ed72a330.jpeg,1678527188_d2c34a894b85ad639eb1.jpg,1678527188_887284a118abbf265a8a.jpg', 'https://www.youtube.com/watch?v=HLrM5gT1YwM,https://www.youtube.com/watch?v=l5VH_xkiUts', '5N|6D', '<p>asdad</p>', '<p>asd23</p>', '3', '1678527188_8789c096216f097a1a9e.pdf', 'Mumbai', 'Delhi', '11231', '231', 'Yes', '16.1.23,30.1.23,5.7.23', '<p>dadsa</p>', '<p>as232</p>');

-- --------------------------------------------------------

--
-- Table structure for table `trip_categories`
--

CREATE TABLE `trip_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `trips` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trip_categories`
--

INSERT INTO `trip_categories` (`id`, `title`, `slug`, `featured_image`, `banner_image`, `description`, `trips`) VALUES
(2, 'BackPacking', 'backpacking-trips122', '1678095191_e9861accf3577d2e5dfc.jpg', '1678095352_3cd76ab2665e265a05f4.jpg', '<h2>backpacking descriptionasd</h2>', '[17,18,19,20,21,22,23,24,0,25,26]'),
(10, 'Religious Tripsx', 'religious-trips', '1676872862_adc935432d364316144f.jpg', '1676267175_fd9db4873c5eec24a8dc.jpg', '', '[16,25]'),
(11, 'Divine Tours', 'short-trips-weekend-trips-weekend-tours', '1677426224_cb274c427e0bae304062.svg', '1677163591_1d005df0affe4e7702e7.jpg', '<p>&nbsp;asdad</p>', '[0,\"24\",\"25\",26]');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rowan', 'Effertz', 'berge.ayla@example.org', '$2y$10$eHJpUDux2C1QduFpSgAxieq4HxkDCDQggvxvy0sJ8b2QjsMq2BWuC', 'EW9XHc0EPD', '2023-02-02 22:48:58', '2023-02-02 22:48:58'),
(2, 'Bulah', 'Ratke', 'mortimer.robel@example.com', '$2y$10$eHJpUDux2C1QduFpSgAxieq4HxkDCDQggvxvy0sJ8b2QjsMq2BWuC', 'X5SxFtlWFd', '2023-02-02 22:48:58', '2023-02-02 22:48:58'),
(3, 'Wayne', 'Spencer', 'mitchell65@example.net', '$2y$10$eHJpUDux2C1QduFpSgAxieq4HxkDCDQggvxvy0sJ8b2QjsMq2BWuC', 'oP76y5yHbj', '2023-02-02 22:48:58', '2023-02-02 22:48:58'),
(4, 'Harvey', 'Rosenbaum', 'orin.gislason@example.org', '$2y$10$eHJpUDux2C1QduFpSgAxieq4HxkDCDQggvxvy0sJ8b2QjsMq2BWuC', 'AcuTGlmjRv', '2023-02-02 22:48:58', '2023-02-02 22:48:58'),
(5, 'Wyatt', 'Bode', 'tcrist@example.net', '$2y$10$eHJpUDux2C1QduFpSgAxieq4HxkDCDQggvxvy0sJ8b2QjsMq2BWuC', 'UG7GnCCiOk', '2023-02-02 22:48:58', '2023-02-02 22:48:58'),
(6, 'Marisa', 'Kling', 'lockman.haylee@example.com', '$2y$10$eHJpUDux2C1QduFpSgAxieq4HxkDCDQggvxvy0sJ8b2QjsMq2BWuC', 'SXXzIuzmvG', '2023-02-02 22:48:58', '2023-02-02 22:48:58'),
(7, 'Joel', 'Macejkovic', 'bernhard.nasir@example.com', '$2y$10$eHJpUDux2C1QduFpSgAxieq4HxkDCDQggvxvy0sJ8b2QjsMq2BWuC', 'dSg5hW8o7p', '2023-02-02 22:48:58', '2023-02-02 22:48:58'),
(8, 'Sasha', 'Windler', 'zparisian@example.org', '$2y$10$eHJpUDux2C1QduFpSgAxieq4HxkDCDQggvxvy0sJ8b2QjsMq2BWuC', 'XNwQLVrY9i', '2023-02-02 22:48:58', '2023-02-02 22:48:58'),
(9, 'Vida', 'Little', 'marks.alivia@example.net', '$2y$10$eHJpUDux2C1QduFpSgAxieq4HxkDCDQggvxvy0sJ8b2QjsMq2BWuC', 'bsf5swHaB1', '2023-02-02 22:48:58', '2023-02-02 22:48:58'),
(10, 'Jonathan', 'Stokes', 'npfeffer@example.org', '$2y$10$eHJpUDux2C1QduFpSgAxieq4HxkDCDQggvxvy0sJ8b2QjsMq2BWuC', 'PbhUVtPl5r', '2023-02-02 22:48:58', '2023-02-02 22:48:58'),
(11, 'Devin', 'Kessler', 'iliana54@example.org', '$2y$10$eHJpUDux2C1QduFpSgAxieq4HxkDCDQggvxvy0sJ8b2QjsMq2BWuC', 'vKxKRFuFgv', '2023-02-02 22:49:33', '2023-02-02 22:49:33'),
(12, 'Mossie', 'Green', 'audreanne91@example.org', '$2y$10$eHJpUDux2C1QduFpSgAxieq4HxkDCDQggvxvy0sJ8b2QjsMq2BWuC', 'zzysQjIABD', '2023-02-02 22:49:33', '2023-02-02 22:49:33'),
(13, 'Genevieve', 'Ebert', 'dedric00@example.org', '$2y$10$eHJpUDux2C1QduFpSgAxieq4HxkDCDQggvxvy0sJ8b2QjsMq2BWuC', 'WtCFAZTKPv', '2023-02-02 22:49:33', '2023-02-02 22:49:33'),
(14, 'Conner', 'Rath', 'augusta84@example.com', '$2y$10$eHJpUDux2C1QduFpSgAxieq4HxkDCDQggvxvy0sJ8b2QjsMq2BWuC', '4wrXe6eHs6', '2023-02-02 22:49:33', '2023-02-02 22:49:33'),
(15, 'Jaylin', 'Bradtke', 'chance.wilkinson@example.net', '$2y$10$eHJpUDux2C1QduFpSgAxieq4HxkDCDQggvxvy0sJ8b2QjsMq2BWuC', 'v22W9RBIR6', '2023-02-02 22:49:33', '2023-02-02 22:49:33'),
(16, 'Katelyn', 'McLaughlin', 'laney.yundt@example.org', '$2y$10$eHJpUDux2C1QduFpSgAxieq4HxkDCDQggvxvy0sJ8b2QjsMq2BWuC', 'ttK07Au1Od', '2023-02-02 22:49:33', '2023-02-02 22:49:33'),
(17, 'Ned', 'Kshlerin', 'feeney.paula@example.net', '$2y$10$eHJpUDux2C1QduFpSgAxieq4HxkDCDQggvxvy0sJ8b2QjsMq2BWuC', 'OQPAA70pA5', '2023-02-02 22:49:33', '2023-02-02 22:49:33'),
(18, 'Meredith', 'Hoppe', 'ocrooks@example.org', '$2y$10$eHJpUDux2C1QduFpSgAxieq4HxkDCDQggvxvy0sJ8b2QjsMq2BWuC', 'jPwh82kpKc', '2023-02-02 22:49:33', '2023-02-02 22:49:33'),
(19, 'Delfina', 'Murazik', 'hkessler@example.net', '$2y$10$eHJpUDux2C1QduFpSgAxieq4HxkDCDQggvxvy0sJ8b2QjsMq2BWuC', 'oqqpnVuSfT', '2023-02-02 22:49:33', '2023-02-02 22:49:33'),
(20, 'Reggie', 'Corwin', 'elijah.schimmel@example.net', '$2y$10$eHJpUDux2C1QduFpSgAxieq4HxkDCDQggvxvy0sJ8b2QjsMq2BWuC', 'o5uDlwrXpC', '2023-02-02 22:49:33', '2023-02-02 22:49:33'),
(21, 'Nayeli', 'Johns', 'cronin.evans@example.net', '$2y$10$eHJpUDux2C1QduFpSgAxieq4HxkDCDQggvxvy0sJ8b2QjsMq2BWuC', 'xqtdeZ9B2j', '2023-02-02 22:49:33', '2023-02-02 22:49:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trip_categories`
--
ALTER TABLE `trip_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `trip_categories`
--
ALTER TABLE `trip_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
