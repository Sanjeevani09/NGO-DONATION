-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2023 at 03:01 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngo`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'Neha', 'neha71549@gmail.com', '9082689552', 'I want to know more about your NGO'),
(2, 'Priya', 'priya1582004@gmail.com', '9323038634', 'Priya here'),
(3, 'Nasira', 'choudharynasira718@gmail.com', '8765487654', 'Want to explore more.');

-- --------------------------------------------------------

--
-- Table structure for table `donation_form`
--

CREATE TABLE `donation_form` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `packets` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donation_form`
--

INSERT INTO `donation_form` (`id`, `name`, `email`, `phone`, `packets`, `amount`, `date`) VALUES
(1, 'Neha', 'neha71549@gmail.com', '9082689552', '2 Packets', 100, '2023-04-04'),
(2, 'Neha', 'neha71549@gmail.com', '9082689552', '2 Packets', 100, '2023-04-04'),
(3, 'Priya', 'priya@gmail.com', '8779975344', '5 Packets', 250, '2023-04-04'),
(4, 'Neha', 'neha71549@gmail.com', '9082689552', '4 Packets', 200, '2023-04-05'),
(5, 'Priya', 'priya@gmail.com', '8779975344', '1 Packet', 50, '2023-04-06'),
(6, 'Harsh', 'harsh@gmail.com', '9323038634', '5 Packets', 250, '2023-04-06'),
(9, 'Priya', 'priya@gmail.com', '8779975344', '3 Packets', 150, '2023-04-06'),
(10, 'Neha', 'neha71549@gmail.com', '9082689552', '5 Packets', 250, '2023-04-06'),
(11, 'Sushma', 'sushma@gmail.com', '9769002761', '2 Packets', 100, '2023-04-08'),
(12, 'Priya', 'priya@gmail.com', '8779975344', '1 Packet', 50, '2023-04-09'),
(13, 'Priya', 'priya@gmail.com', '8779975344', '1 Packet', 50, '2023-04-09'),
(14, 'Neha', 'neha71549@gmail.com', '9082689552', '4 Packets', 200, '2023-04-09'),
(15, 'Neha', 'neha71549@gmail.com', '9082689552', '1 Packet', 50, '2023-04-14'),
(16, 'Priya', 'priya@gmail.com', '8779975344', '2 Packets', 100, '2023-04-14'),
(17, 'Nasira', 'nasira@gmail.com', '8765487654', '4 Packets', 200, '2023-04-14'),
(18, 'Nasira', 'nasira@gmail.com', '8765487654', '4 Packets', 200, '2023-04-14'),
(19, 'Nasira', 'nasira@gmail.com', '8765487654', '4 Packets', 200, '2023-04-14'),
(20, 'Nasira', 'nasira@gmail.com', '8765487654', '1 Packet', 50, '2023-04-14'),
(21, 'Neha', 'neha71549@gmail.com', '9082689552', '2 Packets', 100, '2023-04-14'),
(22, 'Neha', 'neha71549@gmail.com', '9082689552', '1 Packet', 50, '2023-04-14'),
(23, 'Neha', 'neha71549@gmail.com', '9082689552', '4 Packets', 200, '2023-04-14'),
(24, 'Neha', 'neha71549@gmail.com', '9082689552', '1 Packet', 50, '2023-04-14'),
(25, 'Priya', 'priya@gmail.com', '8779975344', '1 Packet', 50, '2023-04-14'),
(26, 'Neha', 'neha71549@gmail.com', '9082689552', '2 Packets', 100, '2023-04-15'),
(27, 'Neha', 'neha71549@gmail.com', '9082689552', '2 Packets', 100, '2023-04-15'),
(28, 'Neha', 'neha71549@gmail.com', '9082689552', '1 Packet', 50, '2023-04-15'),
(29, 'Neha', 'neha71549@gmail.com', '9082689552', '1 Packet', 50, '2023-04-15'),
(30, 'Neha', 'neha71549@gmail.com', '9082689552', '1 Packet', 50, '2023-04-15'),
(31, 'Neha', 'neha71549@gmail.com', '9082689552', '1 Packet', 50, '2023-04-15'),
(32, 'Neha', 'neha71549@gmail.com', '9082689552', '1 Packet', 50, '2023-04-15'),
(33, 'Neha', 'neha71549@gmail.com', '9082689552', '1 Packet', 50, '2023-04-15'),
(34, 'Neha', 'neha71549@gmail.com', '9082689552', '1 Packet', 50, '2023-04-15'),
(35, 'Neha', 'neha71549@gmail.com', '9082689552', '1 Packet', 50, '2023-04-15'),
(36, 'Sushma', 'sushma@gmail.com', '9769002761', '4 Packets', 200, '2023-04-15'),
(37, 'Harsh', 'harsh@gmail.com', '9769002761', '1 Packet', 50, '2023-04-15'),
(38, 'Priya', 'priya@gmail.com', '8779975344', '3 Packets', 150, '2023-04-15'),
(39, 'Priya', 'priya@gmail.com', '8779975344', '2 Packets', 100, '2023-04-15'),
(40, 'Neha', 'neha@gmail.com', '9082689552', '2 Packets', 100, '2023-04-18'),
(41, 'Mansi', 'abc@gmail.com', '8765487654', '3 Packets', 150, '2023-04-21'),
(42, 'Harsh', 'harsh@gmail.com', '9769002761', '2 Packets', 100, '2023-04-21'),
(43, 'Priya', 'priya@gmail.com', '8779975344', '4 Packets', 200, '2023-04-21'),
(44, 'Priya', 'priya@gmail.com', '8779975344', '4 Packets', 200, '2023-04-21'),
(45, 'Priya', 'priya@gmail.com', '8779975344', '1 Packet', 50, '2023-04-21'),
(46, 'Priya', 'priya@gmail.com', '8779975344', '1 Packet', 50, '2023-04-21'),
(47, 'Priya', 'priya@gmail.com', '8779975344', '1 Packet', 50, '2023-04-21'),
(49, 'Priya', 'priya@gmail.com', '8779975344', '1 Packet', 50, '2023-04-21'),
(50, 'Priya', 'priya@gmail.com', '8779975344', '1 Packet', 50, '2023-04-21'),
(51, 'Priya', 'priya@gmail.com', '8779975344', '1 Packet', 50, '2023-04-21'),
(52, 'Nasira', 'nasira@gmail.com', '9082353424', '4 Packets', 200, '2023-04-21'),
(53, 'Nasira', 'nasira@gmail.com', '9082353424', '4 Packets', 200, '2023-04-21'),
(54, 'Neha', 'neha@gmail.com', '9082689552', '1 Packet', 50, '2023-04-24'),
(55, 'Neha', 'neha@gmail.com', '9082689552', '5 Packets', 50, '2023-04-27'),
(56, 'Priya', 'priya@gmail.com', '8779975344', '1 Packet', 50, '2023-04-30'),
(57, 'Priya', 'priya@gmail.com', '8779975344', '1 Packet', 50, '2023-04-30'),
(58, 'Harsh', 'harsh@gmail.com', '9769002761', '4 Packets', 200, '2023-04-30'),
(59, 'Neha', 'neha71549@gmail.com', '9082689552', '2 Packets', 100, '2023-04-30'),
(60, 'Avika', 'avika@gmail.com', '8976589765', '4 Packets', 200, '2023-05-03'),
(61, 'Neha', 'neha71549@gmail.com', '9082689552', '3 Packets', 150, '2023-05-05'),
(62, 'Neha', 'neha71549@gmail.com', '9082689552', 'More than 5 Packets', 1000, '2023-05-05'),
(63, 'Priya', 'priya@gmail.com', '8779975344', 'More than 5 Packets', 500, '2023-05-05'),
(65, 'Rutuja', 'rutuja@gmail.com', '8765879065', '2 Packets', 100, '2023-05-08'),
(66, 'Neha', 'neha71549@gmail.com', '9082689552', '5 Packets', 250, '2023-05-09'),
(67, 'Neha', 'neha71549@gmail.com', '9082689552', '2 Packets', 100, '2023-06-01'),
(68, 'Priya', 'priya1582004@gmail.com', '9323038634', '4 Packets', 200, '2023-06-01'),
(69, 'Priya', 'priya1582004@gmail.com', '9323038634', '1 Packet', 50, '2023-06-01'),
(70, 'Neha', 'neha71549@gmail.com', '9082689552', '3 Packets', 150, '2023-06-01'),
(71, 'Neha', 'neha71549@gmail.com', '9082689552', '2 Packets', 100, '2023-06-01'),
(72, 'Priya', 'priya1582004@gmail.com', '9323038634', '3 Packets', 150, '2023-06-01'),
(73, 'Nasira', 'nasira@gmail.com', '8765487654', '4 Packets', 200, '2023-06-01'),
(74, 'Avika', 'avika@gmail.com', '9082353424', 'More than 5 Packets', 1000, '2023-06-01'),
(75, 'Nasira', 'nasira@gmail.com', '8765487654', '1 Packet', 50, '2023-06-01'),
(76, 'Neha', 'neha71549@gmail.com', '9082689552', '2 Packets', 100, '2023-06-15'),
(77, 'Priya', 'priya1582004@gmail.com', '9323038634', '1 Packet', 50, '2023-06-15'),
(78, 'Neha', 'neha71549@gmail.com', '9082689552', '5 Packets', 250, '2023-06-15'),
(79, 'Nasira', 'choudharynasira718@gmail.com', '8765487654', '2 Packets', 100, '2023-06-15'),
(80, 'Avika', 'avika@gmail.com', '9769002761', '4 Packets', 200, '2023-06-15'),
(81, 'Nasira', 'nasira@gmail.com', '9769002761', '2 Packets', 100, '2023-06-19'),
(82, 'Neha', 'neha71549@gmail.com', '9082689552', '1 Packet', 50, '2023-06-26'),
(83, 'Avika', 'avika@gmail.com', '8765487654', '4 Packets', 200, '2023-06-26'),
(84, 'Priya', 'priya1582004@gmail.com', '9323038634', '4 Packets', 200, '2023-06-26'),
(85, 'Neha', 'neha71549@gmail.com', '9082689552', '3 Packets', 150, '2023-06-27'),
(86, 'Neha', 'neha71549@gmail.com', '9082689552', '1 Packet', 50, '2023-06-27'),
(87, 'Neha', 'neha71549@gmail.com', '9082689552', '5 Packets', 250, '2023-09-09');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `description` longtext NOT NULL,
  `details` longtext NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `name`, `date`, `description`, `details`, `image`) VALUES
(2, 'PROJECT SHIKSHA', '2023-06-14', ' In our societies there are certain facilities known as Basic Human Rights, things like ‘Right to Life’, ‘Freedom from Slavery’, ‘Freedom of Opinion and Expression’ and many more. In some countries amenities like water and electricity are also considered Basic Human Rights, in some Education is also a Basic Human Right. India too has Education as a Basic Human Right but it is yet to be implemented in a proper way.Education is indeed a facility which should be provided for free, to everyone, irrespective of their caste, creed, race or economical status. Alas, that is not what happens in our society, resulting in numerous of young children without any formal education. Education is must.', 'We, here at WeForYou work to eradicate this problem as much is in our capacity. Project Shiksha is the project that WeForYou leads with, providing funds for students to complete formal education and to pursue their future endeavours. Our NGO has helped kids in diverse age groups, as young as 3 years old and as old as a high schooler. At the grass root level Project Shiksha helps younglings with basic education, teaching them how to write, read and draw. We also organize Quizzes, Drawing Competitions, Physical Activities including competitions like Kho-Kho, Kabaddi, Football to boost their overall development. Other features of our Project Shiksha are Motivational Talk Events, Plantation Drives, Workshops on various topics like, Hygiene, difference between Good-Touch and Bad-Touch, Behaviour Management, etc so that students not only get access to formal education but also to all those things which are essential in life, which can not be learned only by getting educated.', 'images/event_images/shiksha.png'),
(3, 'COVID-19 AWARENESS', '2020-04-15', ' During Covid-19 period, We For You Foundation arranged a seminar on the topic of Covid-19 awareness and prevention. The title of the seminar is What is CORONA VIRUS 2020 | Corona Virus Outbreak | How to protect yourself | 7 steps from PM MODI |.', 'In the seminar, we are told about the recent outbreak of rapidly spreading virus known as the Covid-19 or the Corona Virus and how the government has taken steps to enter a lockdown period to stop the further spread of the virus. Further, we are told about the current statistics of the number of people with the virus, those who have recovered, and those who have unfortunately passed away. We are told how the public servicemen and women have put in their hardships to regulate the spread of the virus, putting themselves in danger to protect us. Further PM Narender Modi is mentioned and his 7 instructions to protect yourself from the virus are recited to etch it deep into our minds how we are to act and function in this sensitive period of our country and the whole world. The most necessary thing that we are told is to keep good hygiene and sanitize our hands every time we are in contact with the outside world, always keep our masks on in public, and to identify the symptoms of the virus so that the medical staff can be quickly informed, social distancing is to be maintained at all times in public and there should be no exception for these few things.', 'images/event_images/covid19.jpg'),
(4, 'MENSTURATION CLASS', '2023-02-15', 'A workshop for awareness about menstruation and menstrual hygiene, so that girls know what to do when it hits them.\n\nKnowing what will happen during puberty is the first step towards adapting well to adolescence. Learning facts about bodies and growing up can help us to stay healthy, take good care of ourselves, and make good decisions. Developing positive coping strategies is essential to adolescent development. As small children they don’t know when puberty hits them and what are the changes that their body undergoes, so this was a workshop where the girls were made aware of the physical and psychological changes that happens in the body during menstruation.', 'A few days in a month, girls who have reached puberty experience a period. Another name term for having a period is menstruation. Menstruation can begin as early as 8 or as late as 16. Every girl has her own internal clock. The lining of the uterus builds up every month to prepare the body to nourish a baby if a woman is pregnant. If a baby is not conceived, 4–6 tablespoons of blood comes flows out through the vagina between the legs as it is not needed. This is a normal part of life for a woman and does not stop people from carrying out their everyday activities and should not stop them, there is widespread belief in our country which somehow connects periods with impurity, lack of education takes the blame in this case and that is what our NGO tries to eradicate by teaching young children to think with a wider perspective, to not fall into the accepted dogmas of our society.\r\n\r\nThen students were given explanation for the following questions:\r\n(a) How many people have seen ads/commercials on TV about pads or tampons?\r\n(b) How many people have talked to their parents/guardians about this?\r\n(c) How many people have seen commercials about pads with wings? What are the wings for?\r\n\r\nThey were told about the use and need of using sanitary pads. Also, periods are not something inappropriate and should not be consider a taboo or something different. It is as normal as brushing your teeth. So they should take it with ease…', 'images/event_images/menstruation_class.jpg'),
(5, 'PERSONALITY DEVELOPMENT SESSION', '2023-03-09', 'To teach children how to develop their personality while growing up both physically and mentally.\r\n\r\nPersonality is the culmination of traits that one gains during their lifetime through experience. It is the growth of both how you dress, how you walk, how you talk, and even how you think in changing times. So having such a session was very helpful for the children. A guest was invited to speak to the children about how to develop the way of your appearance physically and how you should think when out in a situation and tackle those challenges without doing any harm to others as well as yourself.', 'The children were allowed to get clarified about all their doubts on the matter and how to overcome everything with a witty personality. There is no scientific way to prove what kind of a personality is better, after all it is such an abstract concept, but to incorporate virtuous values, to act gently and to be calm definitely can help us to become a better version of ourselves.', 'images/event_images/development session.jpg'),
(6, 'MENTAL WELLNESS', '2022-11-25', ' On the 8thm of Jul 2020, an interactive session on social media platforms of the WeForYou was held at 7 pm. The main topic of discussion of the interactive session was Mental Wellness, following the recent unfortunate event in the country and the boredom and existentialism of the lockdown settling in.\r\n\r\nThe interactive session was held with Ms. Neha Gupta a renowned psychologist. She explained thoroughly on what depression is, what it feels like, and how to tackle it. She emphasized how people in the earlier time did not know about such underlying psychological distresses, therefore the situations these days are much better as at least there is a widespread awareness on the topic. Following this, she advised on how to deal with depression. The main weapon in the arsenal against depression is talking with those who feel depressed and even more important is to listen to them, following this one should try some relaxing activities. She also discussed how a change in attitude and perspective can also negate depression if one starts taking hardships and stressful experiences in life as a training to be mentally resistant to them in the future one can easily stop themselves from drowning in mental fatigue and melancholy. The important thing is to take the experience and the process of recovery as well at one’s own pace.', 'mental-wellness\r\nOn the 8thm of Jul 2020, an interactive session on social media platforms of the WeForYou was held at 7 pm. The main topic of discussion of the interactive session was Mental Wellness, following the recent unfortunate event in the country and the boredom and existentialism of the lockdown settling in.\r\n\r\nThe interactive session was held with Ms. Neha Gupta a renowned psychologist. She explained thoroughly on what depression is, what it feels like, and how to tackle it. She emphasized how people in the earlier time did not know about such underlying psychological distresses, therefore the situations these days are much better as at least there is a widespread awareness on the topic. Following this, she advised on how to deal with depression. The main weapon in the arsenal against depression is talking with those who feel depressed and even more important is to listen to them, following this one should try some relaxing activities. She also discussed how a change in attitude and perspective can also negate depression if one starts taking hardships and stressful experiences in life as a training to be mentally resistant to them in the future one can easily stop themselves from drowning in mental fatigue and melancholy. The important thing is to take the experience and the process of recovery as well at one’s own pace.\r\n\r\nFollowing this she took some questions from the viewers of the live interaction, some questions were personal some were asked for a much broader scale, which she answered professionally and with a profound nuance.\r\n\r\nThe live interactive session was concluded on a positive note with our gratitude towards Ms. Prabhleen Kaur to hold such an enjoyable session on such a serious topic.', 'images/event_images/mental-wellness.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `featureevent`
--

CREATE TABLE `featureevent` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `description` longtext NOT NULL,
  `details` longtext NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `featureevent`
--

INSERT INTO `featureevent` (`id`, `name`, `date`, `description`, `details`, `image`) VALUES
(1, 'PROJECT AHAAR SEVA', '2020-05-15', '   The pandemic has adversely affected the lives of numerous people, disrupting their livelihoods whether it be the migrant workers or the peddlers. The turbulent turn that life has taken has rendered them in a position where it has become too hard to arrange for their basic needs. The destitute might not have died due to the virus, but they have died every single day starving. If we’ve enjoyed the lockdown in our homes, savoring new dishes each day, there cannot be a better way to be grateful to the almighty than lending out a helping hand to the needy fellow who’s being tortured by an empty belly.\r\n\r\nWe at WeForYou believe that we rise by lifting others and have come up with our novel endeavor to feed the COVID – 19 affected families by providing them home-cooked meals for free purchased from suppliers at Rs 50/- per person.', 'It has been rightly saying, “There are people in the world so hungry that God can’t appear to them except in the form of bread”. So be that someone special for a starving soul, be the cause of delight for a hungry child by sponsoring a food packet. Helping the underprivileged is not just an act of kindness but it’s our duty and responsibility towards our community.\r\n\r\nTogether, we can alleviate the distress that hunger has caused in our society. We at WeForYou, ensure you 100% transparency with your contribution. We’ll share with you the picture of the donated packets marked with your name on it for you deserve to know when, where, and how your donations are bringing a change in who’s life.\r\n\r\nSo let’s join hands, be open-hearted, and feed one!', 'images/feature_event_images/1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `internship_form`
--

CREATE TABLE `internship_form` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `post` varchar(255) NOT NULL,
  `resume` varchar(400) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `internship_form`
--

INSERT INTO `internship_form` (`id`, `name`, `email`, `phone`, `post`, `resume`, `message`) VALUES
(1, 'Neha', 'neha71549@gmail.com', '2147483647', 'Counsellor', 'Screenshot (10).png', 'I am applying for Counsellor.'),
(2, 'Priya', 'priya@gmail.com', '2147483647', 'Teaching', 'IMG-20230318-WA0006.jpg', 'I am teacher.'),
(3, 'Nasira', 'choudharynasira718@gmail.com', '547303469', 'Photography', 'EXAMPLE.png', 'I am nasira'),
(4, 'Devika', 'devika@gmail.com', '988936425', 'Doctor', 'WhatsApp Image 2023-03-17 at 17.52.17.jpg', 'Hii'),
(5, 'Harsh', 'harsh@gmail.com', '9769002761', 'Photography', 'rev1.jpg', 'Photo'),
(6, 'Neha', 'neha71549@gmail.com', '9082689552', 'Creative Department', '', 'Creative Department'),
(7, 'Harsh', 'harsh@gmail.com', '9323038634', 'Photography', '', 'I am Harsh.'),
(8, 'Sushma', 'sushma@gmail.com', '8765487654', 'Public Relation', 'resume/FORMS.png', 'Hi'),
(9, 'Neha', 'neha71549@gmail.com', '9082689552', 'Photography', 'resume/Nevudi admit card.pdf', 'Hi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `image` varchar(400) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `code` varchar(10) NOT NULL,
  `updated_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `image`, `name`, `phone`, `email`, `username`, `password`, `code`, `updated_time`) VALUES
(1, '', 'Harsh', '9323036843', 'harshgupta2822007@gmail.com', 'harsh', 'harsh', '4T9CZ27XVE', '2023-05-28 14:17:10'),
(2, 'users/nasira.jpg', 'Nasira', '8369348734', 'choudharynasira718@gmail.com', 'nasira', '123', 'GA6EHKPXC0', '2023-05-28 15:57:48'),
(3, 'users/download (5).jpg', 'Priya', '9323038635', 'priya1582004@gmail.com', 'priyaa', 'priya123', 'GFNU4H7KSA', '2023-06-25 09:52:28'),
(4, 'users/20220516_132725.jpg', 'Neha Gupta', '9082689552', 'neha71549@gmail.com', 'neha26', 'neha26', '', '2023-07-03 09:19:29'),
(5, 'users/IMG_20221025_160739_976.jpg', 'Avika Gupta', '8976455645', 'avika@gmail.com', 'avika', 'avika', '', '2023-05-28 14:20:48'),
(6, 'users/WhatsApp Image 2023-03-02 at 12.09.13.jpg', 'Rutuja', '8765879065', 'rutuja@gmail.com', 'rutuja', 'rutuja123', '', '2023-05-28 14:20:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation_form`
--
ALTER TABLE `donation_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featureevent`
--
ALTER TABLE `featureevent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internship_form`
--
ALTER TABLE `internship_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE` (`email`,`username`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `donation_form`
--
ALTER TABLE `donation_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `featureevent`
--
ALTER TABLE `featureevent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `internship_form`
--
ALTER TABLE `internship_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
