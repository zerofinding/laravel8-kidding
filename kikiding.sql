-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: mysql:3306
-- Generation Time: Jul 27, 2021 at 07:18 AM
-- Server version: 5.7.25
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kikiding`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'UI Components', 'ui-omponents', '2021-07-27 07:17:25', '2021-07-27 07:17:25'),
(2, 'App', 'app', '2021-07-27 07:17:25', '2021-07-27 07:17:25'),
(3, 'Tech Stack', 'tech-stack', '2021-07-27 07:17:25', '2021-07-27 07:17:25'),
(4, 'App Development', 'app-development', '2021-07-27 07:17:25', '2021-07-27 07:17:25'),
(5, 'Hackathon', 'hackathon', '2021-07-27 07:17:25', '2021-07-27 07:17:25'),
(6, 'Hello', 'hello', '2021-07-27 07:17:25', '2021-07-27 07:17:25');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_27_002226_create_posts_table', 1),
(5, '2021_07_27_003916_create_categories_table', 1),
(6, '2021_07_27_042628_create_works_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `title`, `excerpt`, `content`, `image`, `slug`, `date`, `created_at`, `updated_at`) VALUES
(1, 1, 'Wanna see Rapi UI in action?', 'Now all the UI components on my react native expo template uses Rapi UI', '<p>Now all the UI components on my react native expo template uses Rapi UI, check this out https://github.com/codingki/react-native-expo-template</p>', NULL, 'rapi-ui-in-action', '2021-03-24', '2021-07-27 07:17:25', '2021-07-27 07:17:25'),
(2, 2, 'My \"Sehat negeriku\" app is not working anymore', 'Remember Sehat Negeriku Redesign and Rebuild? ', '<p>Remember this? <a href=\"https://twitter.com/kikiding/status/1302211106958573568\" target=\"_blank\" rel=\"noopener\">https://twitter.com/kikiding/status/1302211106958573568</a> now is not working anymore because they updated the api so I can\'t acces it anymore. When I try to get their API endpoint again using \"Packet Tracer\" I can\'t access the API, I think they add more security so it can\'t be access outside the app.</p><p>I feel good when I open their app, because they update the app the layout, the design now is better now. I think my job is done 😆</p>', NULL, 'my-sehat-negeriku-app-is-not-working-anymore', '2021-02-07', '2021-07-27 07:17:25', '2021-07-27 07:17:25'),
(3, 3, 'Rewriting my site with Next and Tailwind', 'Why I rewrite my site', '<p>My last version of this site is built with Expo + Next, I got some issues with the responsive capablities. I know building website with Expo is not the best option, I just experimenting back then. I really want to try tailwindcss from a long time, because the hype of this css framework is big its making me curios of this framework.</p><p>Recently I was not busy so I decided to try tailwindcss, and it was magical. Last time I use a css framework is many years ago (I was using Bootstrap at that time). I didn\'t know any utilty first css framework until I try tailwind.</p><p>I use DatoCMS for the CMS of my site, combining it with Next.js is just smooth, I love seeing my lighthouse score now haha.</p><p>Last year I attended a virtual talk with Surabaya.JS, Griko Nibras was talking about dynamic social image for website, I was having trouble about this topic. I was lucky enough to attend this because I really want to know how to do this, and now I implementing it on my site. If you interested in this topic check this out: <a href=\"https://github.com/nextplate-dev/nextplate\" target=\"_blank\" rel=\"noopener\">https://github.com/nextplate-dev/nextplate</a></p>', NULL, 'rewriting-my-site-with-next-and-tailwind', '2021-01-31', '2021-07-27 07:17:25', '2021-07-27 07:17:25'),
(4, 4, 'React Native + Expo Starter Templates', 'I\'m tired every time I create a new project from blank, so I decided to make my own starter templates, if you use React native and Expo to build apps feel free to use it!', '<p>I\'m tired every time I create a new project from blank, so I decided to make my own starter templates, if you use React native and Expo to build apps feel free to use it!</p><p>Bonus Snap Midtrans payment gateway example on client side😘</p><p>Source code : <a href=\"https://https://github.com/codingki/react-native-expo-template\" target=\"_blank\" rel=\"noopener\">https://github.com/codingki/react-native-expo-template</a></p><p>Documented with a readme and I hope beginner friendly</p>', 'https://www.datocms-assets.com/35386/1611984418-thumbnail-02.jpg', 'react-native-expo-starter-templates', '2020-10-27', '2021-07-27 07:17:25', '2021-07-27 07:17:25'),
(5, 5, 'First Hackathon Second Place', 'I want to share a litle experience participating on BNCC Technoscape x tiket.com', '<p>I want to share a litle experience participating on BNCC Technoscape x tiket.com Hackathon, this event held online.</p><p>This was a competition build an application in 48 hours, I was given a case and then given 48 hours to make the solution. There are 2 cases given:</p><p>1.Enjoy online concerts during a pandemic2. IT Security We take the first case.</p><p>I teamed up with Ocky. My communication is not very good luckily Ocky is a Communication students so I decided to bring him to the team to help me with presentation and brainstorming, btw we lived in the same house.</p><p>We have an idea, what if online ticket concert can be bought seperately(ketengan) so the audience can watch it seperately with a different rundown in one festival/online concert, because in online concert case this is possible.</p><p>So we decided to take that idea to development and going through some mentoring session until the product was done. Then on 17 Oct the winner announced, we got 2nd place!</p><p>Full read and some development process (in Indonesian) on my twitter</p><p>Source code : <a href=\"https://https://github.com/codingki/TikTeng\" target=\"_blank\" rel=\"noopener\">https://github.com/codingki/TikTeng</a></p>', 'https://www.datocms-assets.com/35386/1611984327-nur-fikrimaradota-1.jpg', 'first-hackathon-second-place', '2020-10-17', '2021-07-27 07:17:25', '2021-07-27 07:17:25'),
(6, 6, 'Welcome to my site!', 'Welcome to my site everyone, in this site i will be posting some of my works and ill be write some posts here.', '<p>Welcome to my site everyone, in this site i will be posting some of my works and i\'ll be write some posts here. Enjoy!</p>', NULL, 'welcome-to-my-site', '2020-10-07', '2021-07-27 07:17:25', '2021-07-27 07:17:25'),
(7, 3, 'Technology I used to build this site (2020/10/07)', 'My experience of building site with Expo + Next', '<p>First of all I am a React native Enthusiast and I love Expo, so I decided to build my personal website with React native and Expo. I really want to try Next.js, and then I know Next.js can be combined with Expo.</p><p>I have been coding too much with React Native and I\'m forgetting html and css haha, becasue of that I decided to build this with those technology.</p><p>My experience of building this with Expo + Next is very smooth, confused a little with the navigation but I managed to worked it out.</p>', NULL, 'technology-i-used-to-build-this-site-2020-10-07', '2020-10-07', '2021-07-27 07:17:25', '2021-07-27 07:17:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deployment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `technologyUsed` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `title`, `excerpt`, `content`, `image`, `slug`, `date`, `categories`, `deployment`, `technologyUsed`, `created_at`, `updated_at`) VALUES
(1, 'Rapi UI', 'Beautiful & clean components for your react native apps', '<p>Rapi UI is a UI components library for react native. The design is beautiful and clean, I personally use this type of design in my projects so why not I pack these components to a npm packages so everyone can use.</p>', 'https://www.datocms-assets.com/35386/1616337549-hero.png', 'rapi-ui', '2021-03-20', 'React native, UI Library, Components library', 'Web: https://rapi-ui.kikiding.space/, Github: https://github.com/codingki/react-native-rapi-ui', 'React native, typescript', '2021-07-27 07:17:25', '2021-07-27 07:17:25'),
(2, 'Kawalcovid19.id Vaccine rubric', 'I\'m contributing to kawalcovid19.id. After I release menujuherdimmunity.id Kawal COVID-19 team invite me to collaborate on building their vaccinate rubric.', '<p>I\'m contributing to kawalcovid19.id. After I release menujuherdimmunity.id Kawal COVID-19 team invite me to collaborate on building their vaccinate rubric.</p><p>I design, code and connecting the APIs the vaccine rubric for kawalcovid19.id.also vaccine widget on the home page</p>', 'https://www.datocms-assets.com/35386/1613492121-euv9t9fucamltlf.jpeg', 'kawalcovid19-id-vaccine-rubric', '2021-02-16', 'Web', 'Web: https://kawalcovid19.id/vaksin', 'React, Next', '2021-07-27 07:17:25', '2021-07-27 07:17:25'),
(3, 'React Native Animated Touchable Component', 'React Native Touchable Component with Custom Animations', '<p>Created a animated touchable component using @FernandoTheRojo\'s MotiDocumentation <a href=\"https://github.com/codingki/react-native-touchable-moti\" target=\"_blank\" rel=\"noopener\">here</a></p>', 'https://www.datocms-assets.com/35386/1613543241-ezgif-2-92d88ce57b54.gif', 'react-native-animated-touchable-component', '2021-02-09', 'component, npm package', 'github: https://github.com/codingki/react-native-touchable-moti, example: https://github.com/codingki/react-native-touchable-moti', 'React Native, Moti, Expo', '2021-07-27 07:17:25', '2021-07-27 07:17:25'),
(4, 'Menuju Herd Immunity', 'Calculation of how far Indonesia goes to \"Herd Immunity\"', '<p>Calculation of how far Indonesia goes to \"Herd Immunity\" The calculation is taken from (total recovered people + number of people who have been vaccinated / vaccinated targets) X 100%</p>', 'https://www.datocms-assets.com/35386/1612314433-image.png', 'menuju-herd-immunity', '2021-02-03', 'Website', 'web: https://menujuherdimmunity.id/, github: https://github.com/codingki/menuju-herd-immunity', 'Next.js, React, Tailwindcss, Express', '2021-07-27 07:17:25', '2021-07-27 07:17:25'),
(5, 'React native Expo starter templates', 'These are my starter templates or my way for building mobile app with react native and expo.', '<p>These are my starter templates or my way for building mobile app with react native and expo. I\'m tired everytime I create a new project from blank, so I decided to make a starter templates, feel free to use it 🥳 Bonus Snap Midtrans payment gateway😘</p>', 'https://www.datocms-assets.com/35386/1612055706-authflow.png', 'react-native-expo-starter-templates', '2021-01-21', 'Starter Templates', 'github: https://github.com/codingki/react-native-expo-template', 'React Native, Expo, Firebase, Supabase, Midtrans', '2021-07-27 07:17:25', '2021-07-27 07:17:25'),
(6, 'Sundareka Dashboard Redesign', 'Redesigning Sundareka Dashboard', '<p>Before :</p><p><img src=\"https://www.datocms-assets.com/35386/1612055890-image-1.png\" alt=\"Sundareka Dashboard Before\"></p>', 'https://www.datocms-assets.com/35386/1612055826-redesignsundareka.png', 'sundareka-dashboard-redesign', '2021-01-15', 'UI & UX, Redesign', '', 'Figma', '2021-07-27 07:17:25', '2021-07-27 07:17:25'),
(7, 'Customer Satisfaction Index for PKB Ujung Menteng', 'Calculate the operation time and get the Customer satisfaction index value', '<p>This app is a survey for the visitors of PKB Ujung Menteng to calculate the operation time and get the customer satisfaction index value.</p>', 'https://www.datocms-assets.com/35386/1612055172-el4-zggo-u8-aaii-zt.jpg', 'customer-satisfaction-index-for-pkb-ujung-menteng', '2020-10-20', 'Mobile App', '', 'React Native, Expo, Firebase', '2021-07-27 07:17:26', '2021-07-27 07:17:26'),
(8, 'TikTeng', 'BNCC Technoscape x tiket.com Hackathon submission for Maradota Team (TikTeng)', '<p>BNCC Technoscape x tiket.com Hackathon submission for Maradota Team (TikTeng)🥈 2nd place 🥳</p><p>An online concert ticket sales platform that can be purchased sepeately (ketengan)</p>', 'https://www.datocms-assets.com/35386/1612056042-thumbnail.png', 'tikteng', '2020-10-17', 'Hackathon, Mobile App', 'expo: https://expo.io/@kidingki/projects/tikteng, github: https://github.com/codingki/TikTeng', 'React Native, Expo', '2021-07-27 07:17:26', '2021-07-27 07:17:26'),
(9, 'Sehat Negeriku Redesign & Rebuild', 'Sehat Negeriku is a portal news app from Kemenkes Indonesia, This is unofficial Redesign & Rebuild project by me.', '<p>Sehat Negeriku is a portal news app from Kemenkes Indonesia, This is unofficial Redesign &#x26; Rebuild project by me.</p>', 'https://www.datocms-assets.com/35386/1611984631-thumbnail.jpg', 'sehat-negeriku-redesign-rebuild', '2020-08-01', 'Redesign', 'github: https://github.com/codingki/sehatnegeriku, android: https://play.google.com/store/apps/details?id=com.kikiding.sehatnegerikurebuild, expo: https://expo.io/@kidingki/projects/sehatnegeriku', 'React Native, Expo, Graphql', '2021-07-27 07:17:26', '2021-07-27 07:17:26'),
(10, 'Color Sense', 'Color sense is a game that will test your color sensitivity.', '<p>This game I made to learn animations on react native</p>', 'https://www.datocms-assets.com/35386/1612054620-feature.png', 'color-sense', '2020-06-10', 'Game', 'web: https://color-sense.kikiding.space/, android: https://play.google.com/store/apps/details?id=com.essence.colorsense, expo: https://expo.io/@kidingki/projects/sehatnegeriku', 'React native, Expo', '2021-07-27 07:17:26', '2021-07-27 07:17:26'),
(11, 'Transforming Comika.id website to a mobile app', 'Sharpening my UI and Frontend developing skills on React Native by transforming Comika.id website to a mobile app using expo ❤️ + React Navigation 🔥.', '<p>For those who don’t know Comika.id is a platform to buy a digital download of a indonesian standup comedy shows.</p><p>I want to sharpening my UI and Frontend developing skills so I trying to transforming the website to a mobile app from scratch.This is just me exploring my creativity.</p>', 'https://www.datocms-assets.com/35386/1612055789-comika-19.png', 'transforming-comika-id-website-to-a-mobile-app', '2020-05-01', 'Mobile App, UI & UX', 'Medium: https://medium.com/@kikidding/transforming-comika-id-website-to-a-mobile-app-619c20052764, Expo: https://expo.io/@kidingki/projects/comika', 'React native, Expo, Figma', '2021-07-27 07:17:26', '2021-07-27 07:17:26'),
(12, 'Instagram Stories Clone with React native + Expo', 'After experimenting with expo-av api, Video component and react-native Animations, I found my way to clone the instagram stories.', '<p>After experimenting with expo-av api, Video component and react-native Animations, I found my way to clone the instagram stories.</p>', 'https://www.datocms-assets.com/35386/1612055368-capture-1.png', 'instagram-stories-clone-with-react-native-expo', '2020-01-02', 'Experiment, Animations', 'expo: https://expo.io/@kidingki/projects/instagramstoryclone, medium: https://medium.com/@kikidding/instagram-stories-clone-with-react-native-expo-e68683c9faaa', 'React Native, Expo', '2021-07-27 07:17:26', '2021-07-27 07:17:26'),
(13, 'Enchante.id', 'Enchante is a Local fashion brand that provides your daily minimalist style', '<p>This goal of this project is to make an online store for this brand and intregrate with midtrans payment gateway</p>', 'https://www.datocms-assets.com/35386/1612054996-9.jpg', 'enchante-id', '2019-12-20', 'Online Store, Website', 'web: https://enchante.id', 'Wordpress, Woocommerce, Midtrans', '2021-07-27 07:17:26', '2021-07-27 07:17:26'),
(14, 'Lockdown Chat', 'Chatting with other people in your city, in your country, even with other people in the world.', '<p>This app is I made when I\'m bored and want to make something, and I got this idea \"How about we can chat with each other in my city or my country.</p>', 'https://www.datocms-assets.com/35386/1612055507-lockdownchat-07.png', 'lockdown-chat', '2019-08-20', 'Mobile App, Chating App', 'android: https://play.google.com/store/apps/details?id=com.essence.lockdownchat, Expo: https://expo.io/@kidingki/projects/lockdownchat', 'React Native, Expo', '2021-07-27 07:17:26', '2021-07-27 07:17:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `works_slug_unique` (`slug`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
