-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2025 at 06:39 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan_pw`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penulis` varchar(30) NOT NULL,
  `tahun` date NOT NULL,
  `deskripsi` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul`, `penulis`, `tahun`, `deskripsi`) VALUES
(1, 'Cruelty of The World', 'Erik Triayuda Wijaya', '2023-02-23', 'At first, all was still, apart from the curtains in the breeze,\r\nAnd the faint sounds of animals chewing, echoing through the walls of some unknown place.\r\nThen, an odd rasping laugh erupted from an empty room,\r\nA nameless horror spreading in the dark.\r\nThen, with terrible thunder and storm,\r\nA glowing red fog-cloud,\r\nEmbraced the castle just like a shroud.\r\nOn the castle\'s great central stage, a tall thin figure did appear,\r\nA dark spirit in black robes, arriving at last.\r\nThe guests, a moment ago enjoying their revels,\r\nFell to the floor one by one,\r\nBereft of time even to scream.\r\nThe master sat shivering and still on his throne,\r\nHis soul also snatched by the dark.\r\nAmid the roar of brick and tile hitting the ground,\r\nThe castle\'s glory faded into the past,\r\nSwallowed by glimmering waves.'),
(2, 'Gliding Manual', 'Knights of Favonious', '2022-06-16', 'Before gliding, make sure you are physically and mentally prepared. Make use of a wind current or elevated terrain for take off. Keep an eye on the wind conditions while gliding to maintain steady balance. Pay attention to air traffic conditions and only use a wind glider while the date on your gliding license remains valid. Keep your balance while gliding and retract the wind glider at a safe altitude.\r\n\r\nDon\'t drink and glide!'),
(3, 'Handy Handbook of Hilichurlian', 'Sashama', '2025-04-18', 'Dedicated to my heir and granddaughter, Ella. In our family\'s history, she will most likely be the most eccentric but cutest Ella Musk.\r\n\r\nThis handy handbook can only offer some basic assistance in situations where you urgently need to communicate in Hilichurlian (this book is for reference only and cannot be held responsible for any consequences of its use).\r\nIf you wish to learn Hilichurlian, please use a standard textbook such as my next introductory book.'),
(4, 'King of Invokations', 'Sethos', '2025-04-24', 'Ere the end of a duel across a multitude of worlds,\r\nUpon the domes of many a sky, this supreme rite unfolded in the most unexpected way:\r\n\r\n\"My apologies, friend, but a \'grand finale,\' or so they say, almost always ends this way.\"\r\nThe other duelist descended the Stairs of Arcane Rites, removing the crocodile mask and revealing the prussian green complexion beneath, his features equally somber...\r\nAbu froze at the sight while drawing the cards out from the Casket of Tomes.\r\nVoice your grievances, vent your fury, insult me with your bitter sarcasm — so thought the one who had just taken off his mask.\r\nBut the young man just went on to take out the cards before placing them gently on the table. Then, he said:\r\n\"If all finales shall end thusly, I\'ll gladly have this, for I\'ve always wanted to duel with you.\"'),
(5, 'Lets Go Dodoco', 'Klee', '2025-04-15', 'And just as she had predicted, our Dodoco was so happy when its best friend, Klee, said that she was going to the nation of lightning for an adventure!\r\nOf course, Dodoco loves eating delicious food with Klee at Good Hunter, and loves listening to the bards sing.\r\nBut Dodoco loves counting the stars in the sky and twisting flowers into garlands together with Klee more.\r\nAfter all, all Dodocos long to ride the wind and waves on an adventure.'),
(6, 'Sangonomiya Chronicles', 'Sangonomiya Kokomi', '2025-04-07', 'Sangonomiya was once an ocean abyss, until the Great Serpent came, forming a vortex with its spiral movements, and fashioning the coral into an island. Thus the people of Sangonomiya named their island Watatsumi, meaning \"god of the sea,\" for the Great Serpent was their god.\r\n\r\nThe inhabitants of Watatsumi call themselves the people of the sea and worship the Great Serpent as the Orobashi no Mikoto. On Watatsumi Island, the shrine is the seat of government, and there are no commissioners appointed by the Shogunate. All business, great and small, is conducted by the shrine maidens. The head shrine maiden, or Divine Priestess, is the head of government and ceremonial affairs.'),
(7, 'Shogun Almighty Reborn as Raiden With Unlimited Power', 'Yae Publishing House', '2024-11-07', 'I wake up not knowing how long I\'ve been unconscious.\nAll I remember is the sharp pain shooting through my body before I passed out.\n\"It doesn\'t feel very painful... What!?\"\nI scream upon hearing the voice.\nIs this my voice?\n\"Ah, ah—\"\nSo I\'m not dreaming.\nI lift my arm and see pale, soft skin covered in exquisite fabric.\nThis is definitely not my body, but to arrive at this conclusion requires a bold logical leap that my brain isn\'t yet ready to take.\nBecause it simply doesn\'t make any sense.\nI try to stand up to have a better view of my clothes.\nEvery detail is brimming with luxury. The clothes are befitting of the one holding the highest authority.\nCould it be...\n\"Where is that brat... Huh? This is... the Raiden Shogun!?\"'),
(8, 'The Life of Mouun the Shrine Maiden', 'Yae Publishing House', '2023-06-14', 'The shrine maiden Mouun was born to the Yuna Clan. This clan was one of the great houses that first followed their Omikami out into the sunlight, and is still known today for their traditional talent in whalesongs and their closeness with all marine life. Mouun entered Sangonomiya Shrine at a young age and would learn the etiquette and ritual arts of the Watatsumi shrine maidens, history, governance, and the island folk-tunes. Her younger twin sister Ayame, who in later days would be known as \"Umigozen,\" was a female diver, making a living through collecting pearls.\r\nBy the time news that the Shogunate had unified all the Inazuman islands reached Watatsumi, Mouun and Ayame were already quite famous among the island\'s people. In the folk-tunes that still persist till today, Mouun was a wise and gentle soul who helped to steer the people away from meaningless conflict, while Ayame was valiant and cheerful, her power sufficient to wrestle against fierce sea creatures.'),
(9, 'The Serpent and Drakes of Tokoyokoku', 'The Novelty of Wonders', '2022-07-07', 'Mysteries creation conceals, the sun and moon omens reveal.\r\nThree corners in darkness shrouded, the void by five saints clouded.\r\n\r\n\"The universe has no beginning and no end, and so it was with the land that once was. But this matters not to us, for the land that bears us no longer has anything to do with that eternity without start or ceasing.\"\r\n—So said the lone sage, Aberaku, to the first Sunchild. The Sunchild had long intended to punish Aberaku. Summoning the sage before the throne in this manner was but an additional way of making things difficult for him before detaining him.\r\nLegend has it that Aberaku was opened up to wisdom by the Tokoyo Ookami, and was thus able to bring light to Enkanomiya, which had till then never seen the sun. But the Sunchild grew jealous of his talents, thus imprisoning him for life. Yet these children of the sun never considered that had Aberaku not created that underground star, they never would have existed in the first place.'),
(10, 'The Shepherd and the Magic Bottle', 'The Bewitching Staffs', '2021-02-03', 'Legend has it that King Al-Ahmar, while still alive, had collected numerous Jinn and demons from across the world, placing them within magic bottles.\r\nLegend has it that the world was once teeming with such Jinn. Al-Ahmar, mighty yet bewildered, seized them from the silver night winds and quicksands of the desert, the mystical swirls of the ocean, and the tinkling springs in the rainforest, and kept them in silver bottles. He was like an arrogant conqueror, and at the same time, a curious child.\r\n\r\nAl-Ahmar harnessed the spirits with bridles and yokes, learned from their laments about the story of the dismal moon and the driving morning star, and built the majestic Ay-Khanoum — the \"City of Amphitheaters,\" or \"City of the Moon Maiden\" — to commemorate them. It is said to have been the city of the spirits, the paradise for migrants from the moon, gifted to them by Al-Ahmar. In return, the spirits constructed the huge doorway to his mausoleum.'),
(11, 'The Lay of Al-Ahmar', 'Sumerian Letters', '2022-02-16', 'According to the desert dwellers, the world was once ruled by a king named Al-Ahmar, a king of warriors, horticulturists, and sages. He controlled the winds whistling through the desert, the dunes turned bright silver by moonlight, and the one thousand and one Jinn who hid within the night and the calls of owls.\r\n\r\nThey say that Al-Ahmar was a son of the sky. That is why he was known as the king of the world and received the fervent faith of countless people from the three great tribes, and was even adored by the elusive Jinn. Whenever he looked up to the sky and recalled the boundless paradise high above, and the merciless reign of thousands of years past, Al-Ahmar could not help but lower his noble head and sigh helplessly.\r\nIn such moments, even the songs of the nightingale and the aroma of roses could not pull him from his sorrow.'),
(12, 'A Nameless Adventurers Notes', 'Stanley The Adventurer', '2022-03-25', '...Unbelievable, I ended up being attacked by the dragon after all. But maybe I should be thanking it... After all, I wouldn\'t have stumbled upon this place without it...\r\n\r\n...The Core of Chu\'ulel. Seems like it was once the heart of the entire city. I heard a member of the tribe speaking about it before, how in ancient times the Sacred Lord once transformed himself into the heart of the dragon city, but I never expected the meaning to be so literal...\r\n\r\n...Unlike those I\'ve encountered elsewhere, the Secret Source Automatons here seem to be able to understand speech. Did the Sacred Lord make them in order to protect himself? Anyway, at least I don\'t have to worry about monsters coming after me for now...'),
(13, 'Vigorous Healing Concept', 'The Alchemy Table', '2025-04-08', 'The concept of healing is believing.\r\nThe End.');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_buku`
-- (See below for the actual view)
--
CREATE TABLE `view_buku` (
`id` int(11)
,`judul` varchar(100)
,`penulis` varchar(30)
,`tahun` date
);

-- --------------------------------------------------------

--
-- Structure for view `view_buku`
--
DROP TABLE IF EXISTS `view_buku`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_buku`  AS SELECT `buku`.`id` AS `id`, `buku`.`judul` AS `judul`, `buku`.`penulis` AS `penulis`, `buku`.`tahun` AS `tahun` FROM `buku` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
