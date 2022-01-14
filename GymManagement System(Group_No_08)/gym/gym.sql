

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--
create database gym;
use gym;

create table admin
(
adminname varchar(30) primary key,
password varchar(10)
);

insert into admin values('admin','admin');

CREATE TABLE `enquiry` (
  `id` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `age` int(3) NOT NULL,
  `sex` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `email`, `mobile`, `age`, `sex`) VALUES
(1, 'vishal', 'vishal@gmail.com', '8269663728', 20, 'male');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `eid` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` varchar(40) NOT NULL,
  `unit` int(5) NOT NULL,
  `date` date NOT NULL,
  `discription` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`eid`, `name`, `price`, `unit`, `date`, `discription`) VALUES
(1, 'Bench Press', '300', 6, '2018-11-15', 'dfhhdf fjkdh hfdj hfuhj'),
(2, 'Calf Machine', '600', 2, '2018-11-16', 'dfhhdf fjkdh hfdj hfuhj');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `userid` int(4) NOT NULL,
  `planid` int(4) NOT NULL,
  `amount` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`userid`, `planid`, `amount`) VALUES
(1, 3, '1000');

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `planid` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `amount` varchar(40) NOT NULL,
  `duration` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`planid`, `name`, `amount`, `duration`) VALUES
(1, 'Chest', '2500', '6 month'),
(2, 'Back and Abs', '3000', '1 year'),
(3, 'Arms (biceps, tricep', '2500', '6 month');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `userid` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `email` varchar(40) NOT NULL,
  `age` int(3) NOT NULL,
  `sex` varchar(32) NOT NULL,
  `planid` varchar(25) NOT NULL,
  `amount` varchar(25) NOT NULL,
  `duration` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`userid`, `name`, `mobile`, `email`, `age`, `sex`, `planid`, `amount`, `duration`) VALUES
(1, 'neeraj', '9988888999', 'projecttunnel52@gmail.com', 32, 'male', '3', '200', '6 month');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`planid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `eid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `userid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `planid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `userid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;


