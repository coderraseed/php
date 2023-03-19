

CREATE TABLE `ACCOUNT` (
  `ACCOUNT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `AVAIL_BALANCE` float DEFAULT NULL,
  `CLOSE_DATE` date DEFAULT NULL,
  `LAST_ACTIVITY_DATE` date DEFAULT NULL,
  `OPEN_DATE` date NOT NULL,
  `PENDING_BALANCE` float DEFAULT NULL,
  `STATUS` varchar(10) DEFAULT NULL,
  `CUST_ID` int(11) DEFAULT NULL,
  `OPEN_BRANCH_ID` int(11) NOT NULL,
  `OPEN_EMP_ID` int(11) NOT NULL,
  `PRODUCT_CD` varchar(10) NOT NULL,
  PRIMARY KEY (`ACCOUNT_ID`),
  KEY `ACCOUNT_CUSTOMER_FK` (`CUST_ID`),
  KEY `ACCOUNT_BRANCH_FK` (`OPEN_BRANCH_ID`),
  KEY `ACCOUNT_EMPLOYEE_FK` (`OPEN_EMP_ID`),
  KEY `ACCOUNT_PRODUCT_FK` (`PRODUCT_CD`)
  ) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--!SQL can insert records in a database:    SQL can insert new data into a database by using the INSERT statement. Developers can specify which columns to insert data into and provide the values for those columns.

INSERT INTO `ACCOUNT` (`ACCOUNT_ID`, `AVAIL_BALANCE`, `CLOSE_DATE`, `LAST_ACTIVITY_DATE`, `OPEN_DATE`, `PENDING_BALANCE`, `STATUS`, `CUST_ID`, `OPEN_BRANCH_ID`, `OPEN_EMP_ID`, `PRODUCT_CD`) VALUES ('1', '1057.75', NULL, '2005-01-04', '2000-01-15', '1057.75', 'ACTIVE', '1', '2', '10', 'CHK'),
('2', '500', NULL, '2004-12-19', '2000-01-15', '500', 'ACTIVE', '1', '3', '10', 'SAV'),
('3', '3000', NULL, '2004-06-30', '2004-06-30', '3000', 'ACTIVE', '1', '2', '10', 'CD'),
('4', '2258.02', NULL, '2004-12-27', '2001-03-12', '2258.02', 'ACTIVE', '2', '2', '10', 'CHK'),
('5', '200', NULL, '2004-12-11', '2001-03-12', '200', 'ACTIVE', '2', '2', '10', 'SAV'),
('7', '1057.75', NULL, '2004-11-30', '2002-11-23', '1057.75', 'ACTIVE', '3', '3', '13', 'CHK'),
('8', '2212.5', NULL, '2004-12-05', '2002-12-15', '2212.5', 'ACTIVE', '3', '3', '13', 'MM'),
('10', '534.12', NULL, '2005-01-03', '2003-09-12', '534.12', 'ACTIVE', '4', '1', '1', 'CHK'),
('11', '767.77', NULL, '2004-10-24', '2000-01-15', '767.77', 'ACTIVE', '4', '1', '1', 'SAV'),
('12', '5487.09', NULL, '2004-11-11', '2004-09-30', '5487.09', 'ACTIVE', '4', '1', '1', 'MM'),
('13', '2237.97', NULL, '2005-01-05', '2004-01-27', '2897.97', 'ACTIVE', '5', '4', '16', 'CHK'),
('14', '122.37', NULL, '2004-11-29', '2002-08-24', '122.37', 'ACTIVE', '6', '1', '1', 'CHK'),
('15', '10000', NULL, '2004-12-28', '2004-12-28', '10000', 'ACTIVE', '6', '1', '1', 'CD'),
('17', '5000', NULL, '2004-01-12', '2004-01-12', '5000', 'ACTIVE', '7', '2', '10', 'CD'),
('18', '3487.19', NULL, '2005-01-03', '2001-05-23', '3487.19', 'ACTIVE', '8', '4', '16', 'CHK'),
('19', '387.99', NULL, '2004-10-12', '2001-05-23', '387.99', 'ACTIVE', '8', '4', '16', 'SAV'),
('21', '125.67', NULL, '2004-12-15', '2003-07-30', '125.67', 'ACTIVE', '9', '1', '1', 'CHK'),
('22', '9345.55', NULL, '2004-10-28', '2004-10-28', '9845.55', 'ACTIVE', '9', '1', '1', 'MM'),
('23', '1500', NULL, '2004-06-30', '2004-06-30', '1500', 'ACTIVE', '9', '1', '1', 'CD'),
('24', '23575.1', NULL, '2004-12-15', '2002-09-30', '23575.1', 'ACTIVE', '10', '4', '16', 'CHK'),
('25', '0', NULL, '2004-08-28', '2002-10-01', '0', 'ACTIVE', '10', '4', '16', 'BUS'),
('27', '9345.55', NULL, '2004-11-14', '2004-03-22', '9345.55', 'ACTIVE', '11', '2', '10', 'BUS'),
('28', '38552.1', NULL, '2004-12-15', '2003-07-30', '38552.1', 'ACTIVE', '12', '4', '16', 'CHK'),
('29', '50000', NULL, '2004-12-17', '2004-02-22', '50000', 'ACTIVE', '13', '3', '13', 'SBL');