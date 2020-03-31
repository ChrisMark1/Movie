-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 30 Ιουν 2016 στις 18:40:25
-- Έκδοση διακομιστή: 10.1.13-MariaDB
-- Έκδοση PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `dbtest`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Comments` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `comment1`
--

CREATE TABLE `comment1` (
  `id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Comments` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `comment2`
--

CREATE TABLE `comment2` (
  `id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Comments` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `comment3`
--

CREATE TABLE `comment3` (
  `id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Comments` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `comment4`
--

CREATE TABLE `comment4` (
  `id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Comments` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `comment5`
--

CREATE TABLE `comment5` (
  `id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Comments` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `comment6`
--

CREATE TABLE `comment6` (
  `id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Comments` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `comment7`
--

CREATE TABLE `comment7` (
  `id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Comments` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `comment8`
--

CREATE TABLE `comment8` (
  `id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Comments` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `comment9`
--

CREATE TABLE `comment9` (
  `id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Comments` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `movie1` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `rating1`
--

CREATE TABLE `rating1` (
  `id` int(11) NOT NULL,
  `movie2` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `rating2`
--

CREATE TABLE `rating2` (
  `id` int(11) NOT NULL,
  `movie3` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `rating3`
--

CREATE TABLE `rating3` (
  `id` int(11) NOT NULL,
  `movie4` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `rating4`
--

CREATE TABLE `rating4` (
  `id` int(11) NOT NULL,
  `movie5` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `rating5`
--

CREATE TABLE `rating5` (
  `id` int(11) NOT NULL,
  `movie6` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `rating6`
--

CREATE TABLE `rating6` (
  `id` int(11) NOT NULL,
  `movie7` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `rating7`
--

CREATE TABLE `rating7` (
  `id` int(11) NOT NULL,
  `movie8` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `rating8`
--

CREATE TABLE `rating8` (
  `id` int(11) NOT NULL,
  `movie9` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `rating9`
--

CREATE TABLE `rating9` (
  `id` int(11) NOT NULL,
  `movie10` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE `users` (
  `user_id` int(5) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Email` varchar(35) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `comment1`
--
ALTER TABLE `comment1`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `comment2`
--
ALTER TABLE `comment2`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `comment3`
--
ALTER TABLE `comment3`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `comment4`
--
ALTER TABLE `comment4`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `comment5`
--
ALTER TABLE `comment5`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `comment6`
--
ALTER TABLE `comment6`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `comment7`
--
ALTER TABLE `comment7`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `comment8`
--
ALTER TABLE `comment8`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `comment9`
--
ALTER TABLE `comment9`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `rating1`
--
ALTER TABLE `rating1`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `rating2`
--
ALTER TABLE `rating2`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `rating3`
--
ALTER TABLE `rating3`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `rating4`
--
ALTER TABLE `rating4`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `rating5`
--
ALTER TABLE `rating5`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `rating6`
--
ALTER TABLE `rating6`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `rating7`
--
ALTER TABLE `rating7`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `rating8`
--
ALTER TABLE `rating8`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `rating9`
--
ALTER TABLE `rating9`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT για πίνακα `rating1`
--
ALTER TABLE `rating1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT για πίνακα `rating2`
--
ALTER TABLE `rating2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT για πίνακα `rating3`
--
ALTER TABLE `rating3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT για πίνακα `rating4`
--
ALTER TABLE `rating4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT για πίνακα `rating5`
--
ALTER TABLE `rating5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT για πίνακα `rating6`
--
ALTER TABLE `rating6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT για πίνακα `rating7`
--
ALTER TABLE `rating7`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT για πίνακα `rating8`
--
ALTER TABLE `rating8`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT για πίνακα `rating9`
--
ALTER TABLE `rating9`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT για πίνακα `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
