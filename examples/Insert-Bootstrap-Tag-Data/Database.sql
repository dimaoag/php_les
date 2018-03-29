--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `programmer`
--

CREATE TABLE IF NOT EXISTS `programmer` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `skill` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

--
-- Indexes for table `programmer`
--
ALTER TABLE `programmer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `programmer`
--
ALTER TABLE `programmer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;

