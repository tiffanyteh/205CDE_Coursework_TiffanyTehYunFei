-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2020 at 02:00 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` text NOT NULL,
  `subject` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `subject`, `email`, `message`) VALUES
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('Tiffany', 'Travel Plan', 'tiffanyteh00@gmail.com', 'Hi, I would like to ask about the enquiry own Okinawa Travel Plan.'),
('Felicia Teh', 'Hello Japan', 'feliciateh@gmail.com', 'I would like to ask about my hokkaido winter trip plan'),
('Daniel Teh', 'Travel Planning', 'danielteh9818@gmail.com', 'Hi Japan, I would like to enquiry for Japan Plans.'),
('Charlene Cheah', 'Trip Advise', 'Charlene8746@gmail.com', 'I would like to view some of the trip plans for hokkaido.');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `category` text NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`category`, `question`, `answer`) VALUES
('Pets & Other Animals', 'If You Have Pets', 'Do not let pets interact with people or other animals outside the household. Keep cats indoors when possible to prevent them from interacting with other animals or people. Walk dogs on a leash, maintaining at least 6 feet (2 meters) from other people and animals. Avoid dog parks or public places where a large number of people and dogs gather.'),
('Pets & Other Animals', 'If Your Pets Test Positive', 'Visits to veterinary hospitals, without calling the veterinarian first Visits to human healthcare facilities or schools Visits to parks (including dog parks), markets, or other gatherings such as festivals Visits to the groomer, including mobile grooming salons Visits to pet daycares or boarding facilities Other outings such as playdates, hikes, or visiting other homes, with or without pets Using dog walkers or pet-sitters that live outside your home'),
('Pets & Other Animals', 'Guidance for Pets', 'CDC is aware of a small number animals, including dogs and cats, reportedexternal icon to be infected with SARS-CoV-2 after close contact with people with COVID-19. The United States Department of Agriculture (USDA) and CDC recently reported confirmed infection with SARS-CoV-2 in two pet cats with mild respiratory illness in New York, which were the first confirmed cases of SARS-CoV-2 infections in companion animals in the United States. Both cats are expected to recover. The cats had close contact with people confirmed or suspected to have COVID-19, suggesting human-to-cat spread. Further studies are needed to understand if and how different animals could be affected by SARS-CoV-2.'),
('International Travel', 'Should I avoid travelling internationally?', 'Yes. CDC recommends that you avoid all nonessential international travel because of the COVID-19 pandemic. Some healthcare systems are overwhelmed and there may be limited access to adequate medical care in affected areas. Many countries are implementing travel restrictions and mandatory quarantines, closing borders, and prohibiting non-citizens from entry with little advance notice. Airlines have cancelled many international flights and in-country travel may be unpredictable. If you choose to travel internationally, your travel plans may be disrupted, and you may have to remain outside the United States for an indefinite length of time.'),
('International Travel', 'What can I expect when departing other countries?', 'Some countries are conducting exit screening for all passengers leaving their country. Before being permitted to board a departing flight, you may have your temperature taken and be asked questions about your travel history and health.'),
('International Travel', 'When can I return to work after international travel?', 'All international travelers should stay home for 14 days after their arrival into the United States. At home, you are expected to monitor your health and practice social distancing. To protect the health of others, do not to go to work for 14 days.'),
('Air or Cruise Travel', 'Can flying on airplane increase my risk of getting Covid-19?', 'Yes. Air travel requires spending time in security lines and airport terminals, which can bring you in close contact with other people and frequently touched surfaces. Most viruses and other germs do not spread easily on flights because of how air circulates and is filtered on airplanes. However, social distancing is difficult on crowded flights, and you may have to sit near others (within 6 feet), sometimes for hours. This may increase your risk for exposure to the virus that causes COVID-19.'),
('Air or Cruise Travel', 'What happens if a sick passenger is on a flight?', 'Under current federal regulations, pilots must report all illnesses and deaths to CDC before arriving to a U.S. destination. According to CDC disease protocols, if a sick traveler is considered a risk to the public’s health, CDC works with local and state health departments and international public health agencies to contact exposed passengers and crew. Be sure to give the airline your current contact information when booking your ticket so you can be notified if you are exposed to a sick traveler on a flight.'),
('Air or Cruise Travel', 'Should I delay going on a cruise?', 'Yes. CDC recommends that all travelers defer all cruise ship travel worldwide. Recent reports of COVID-19 on cruise ships highlight the risk of infection to cruise ship passengers and crew. Like many other viruses, COVID-19 appears to spread more easily between people in close quarters aboard ships.'),
('Communication Resources', 'Stay home for 14 days from the time you returned home from international travel.', 'During this 14-day period, take these steps to monitor your health and practice social distancing: Take your temperature with a thermometer two times a day and monitor for fever. Also watch for cough or trouble breathing. Use this temperature log to monitor your temperature. Stay home and avoid contact with others. Do not go to work or school. Do not take public transportation, taxis, or ride-shares. Keep your distance from others (about 6 feet or 2 meters).'),
('Communication Resources', 'What To Do If You Get Sick', 'If you get sick with fever or cough in the 14 days after you return from travel: Stay home. Avoid contact with others. You might have COVID-19; most people are able to recover at home without medical care. If you have trouble breathing or are worried about your symptoms, call or text a health care provider. Tell them about your recent travel and your symptoms. Call ahead before you go to a doctor’s office or emergency room. If you need to seek essential medical care for other reasons, such as dialysis, call ahead to your doctor and tell them about your recent travel.'),
('Domestic Travel', 'Does travelling to campgrounds have any risk?', 'Yes. Going camping at a time when much of the United States is experiencing community spread of COVID-19 can pose a risk to you if you come in close contact with others or share public facilities (like restrooms or picnic areas) at campsites or along the trails. Exposure may be especially unsafe if you are more likely to get very ill from COVID-19 and are planning to be in remote areas, without easy access to medical care. Also be aware that many local, state, and national public parks have been temporarily closed due to COVID-19.'),
('Domestic Travel', 'Is it safe to travel and visit friends?', 'Yes. Travel increases your chances of getting and spreading COVID-19. Before you travel, learn if COVID-19 is spreading in your local area or in any of the places you are going. Traveling to visit family may be especially dangerous if you or your loved ones are more likely to get very ill from COVID-19. People at higher risk for severe illness need to take extra precautions. For more considerations see the webpage Coronavirus in the United States—Considerations for Travelers.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(2, 'admin', '$2y$10$hNL.wM4gVKl2yLo61fyn.Obj4I0kwlI2kklK5zVoYMPfmmrhO7KcS', '2020-06-08 19:37:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
