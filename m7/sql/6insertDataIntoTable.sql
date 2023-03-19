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

INSERT INTO `BRANCH` (`BRANCH_ID`, `ADDRESS`, `CITY`, `NAME`, `STATE`, `ZIP_CODE`) VALUES ('1', '3882 Main St.', 'Waltham', 'Headquarters', 'MA', '02451'),
('2', '422 Maple St.', 'Woburn', 'Woburn Branch', 'MA', '01801'),
('3', '125 Presidential Way', 'Quincy', 'Quincy Branch', 'MA', '02169'),
('4', '378 Maynard Ln.', 'Salem', 'So. NH Branch', 'NH', '03079');

INSERT INTO `BUSINESS` (`INCORP_DATE`, `NAME`, `STATE_ID`, `CUST_ID`) VALUES ('1995-05-01', 'Chilton Engineering', '12-345-678', '10'),
('2001-01-01', 'Northeast Cooling Inc.', '23-456-789', '11'),
('2002-06-30', 'Superior Auto Body', '34-567-890', '12'),
('1999-05-01', 'AAA Insurance Inc.', '45-678-901', '13');

INSERT INTO `CUSTOMER` (`CUST_ID`, `ADDRESS`, `CITY`, `FED_ID`, `POSTAL_CODE`, `STATE`) VALUES ('1', '47 Mockingbird Ln', 'Lynnfield', '111-11-1111', '01940', 'MA'),
('2', '372 Clearwater Blvd', 'Woburn', '222-22-2222', '01801', 'MA'),
('3', '18 Jessup Rd', 'Quincy', '333-33-3333', '02169', 'MA'),
('4', '12 Buchanan Ln', 'Waltham', '444-44-4444', '02451', 'MA'),
('5', '2341 Main St', 'Salem', '555-55-5555', '03079', 'NH'),
('6', '12 Blaylock Ln', 'Waltham', '666-66-6666', '02451', 'MA'),
('7', '29 Admiral Ln', 'Wilmington', '777-77-7777', '01887', 'MA'),
('8', '472 Freedom Rd', 'Salem', '888-88-8888', '03079', 'NH'),
('9', '29 Maple St', 'Newton', '999-99-9999', '02458', 'MA'),
('10', '7 Industrial Way', 'Salem', '04-1111111', '03079', 'NH'),
('11', '287A Corporate Ave', 'Wilmington', '04-2222222', '01887', 'MA'),
('12', '789 Main St', 'Salem', '04-3333333', '03079', 'NH'),
('13', '4772 Presidential Way', 'Quincy', '04-4444444', '02169', 'MA');

INSERT INTO `DEPARTMENT` (`DEPT_ID`, `NAME`) VALUES ('1', 'Operations'),
('2', 'Loans'),
('3', 'Administration'),
('4', 'IT');

INSERT INTO `EMPLOYEE` (`EMP_ID`, `END_DATE`, `FIRST_NAME`, `LAST_NAME`, `START_DATE`, `TITLE`, `ASSIGNED_BRANCH_ID`, `DEPT_ID`, `SUPERIOR_EMP_ID`) VALUES ('1', NULL, 'Michael', 'Smith', '2001-06-22', 'President', '1', '3', NULL),
('2', NULL, 'Susan', 'Barker', '2002-09-12', 'Vice President', '1', '3', '1'),
('3', NULL, 'Robert', 'Tyler', '2000-02-09', 'Treasurer', '1', '3', '1'),
('4', NULL, 'Susan', 'Hawthorne', '2002-04-24', 'Operations Manager', '1', '1', '3'),
('5', NULL, 'John', 'Gooding', '2003-11-14', 'Loan Manager', '1', '2', '4'),
('6', NULL, 'Helen', 'Fleming', '2004-03-17', 'Head Teller', '1', '1', '4'),
('7', NULL, 'Chris', 'Tucker', '2004-09-15', 'Teller', '1', '1', '6'),
('8', NULL, 'Sarah', 'Parker', '2002-12-02', 'Teller', '1', '1', '6'),
('9', NULL, 'Jane', 'Grossman', '2002-05-03', 'Teller', '1', '1', '6'),
('10', NULL, 'Paula', 'Roberts', '2002-07-27', 'Head Teller', '2', '1', '4'),
('11', NULL, 'Thomas', 'Ziegler', '2000-10-23', 'Teller', '2', '1', '10'),
('12', NULL, 'Samantha', 'Jameson', '2003-01-08', 'Teller', '2', '1', '10'),
('13', NULL, 'John', 'Blake', '2000-05-11', 'Head Teller', '3', '1', '4'),
('14', NULL, 'Cindy', 'Mason', '2002-08-09', 'Teller', '3', '1', '13'),
('15', NULL, 'Frank', 'Portman', '2003-04-01', 'Teller', '3', '1', '13'),
('16', NULL, 'Theresa', 'Markham', '2001-03-15', 'Head Teller', '4', '1', '4'),
('17', NULL, 'Beth', 'Fowler', '2002-06-29', 'Teller', '4', '1', '16'),
('18', NULL, 'Rick', 'Tulman', '2002-12-12', 'Teller', '4', '1', '16');

INSERT INTO `INDIVIDUAL` (`BIRTH_DATE`, `FIRST_NAME`, `LAST_NAME`, `CUST_ID`) VALUES ('1972-04-22', 'James', 'Hadley', '1'),
('1968-08-15', 'Susan', 'Tingley', '2'),
('1958-02-06', 'Frank', 'Tucker', '3'),
('1966-12-22', 'John', 'Hayward', '4'),
('1971-08-25', 'Charles', 'Frasier', '5'),
('1962-09-14', 'John', 'Spencer', '6'),
('1947-03-19', 'Margaret', 'Young', '7'),
('1977-07-01', 'Louis', 'Blake', '8'),
('1968-06-16', 'Richard', 'Farley', '9'),
('1972-10-14', 'Danny', 'Jones', '10'),
('1956-01-12', 'Steven', 'Thorp', '11'),
('1975-11-10', 'Bret', 'Albert', '12'),
('1967-03-23', 'Richard', 'Morris', '13');

INSERT INTO `OFFICER` (`OFFICER_ID`, `END_DATE`, `FIRST_NAME`, `LAST_NAME`, `START_DATE`, `TITLE`, `CUST_ID`) VALUES ('1', NULL, 'John', 'Chilton', '1995-05-01', 'President', '10'),
('2', NULL, 'Paul', 'Hardy', '2001-01-01', 'President', '11'),
('3', NULL, 'Carl', 'Lutz', '2002-06-30', 'President', '12'),
('4', NULL, 'Stanley', 'Cheswick', '1999-05-01', 'President', '13');

INSERT INTO `PRODUCT` (`PRODUCT_CD`, `DATE_OFFERED`, `DATE_RETIRED`, `NAME`, `PRODUCT_TYPE_CD`) VALUES ('AUT', '2000-01-01', NULL, 'auto loan', 'LOAN'),
('BUS', '2000-01-01', NULL, 'business line of credit', 'LOAN'),
('CD', '2000-01-01', NULL, 'certificate of deposit', 'ACCOUNT'),
('CHK', '2000-01-01', NULL, 'checking account', 'ACCOUNT'),
('MM', '2000-01-01', NULL, 'money market account', 'ACCOUNT'),
('MRT', '2000-01-01', NULL, 'home mortgage', 'LOAN'),
('SAV', '2000-01-01', NULL, 'savings account', 'ACCOUNT'),
('SBL', '2000-01-01', NULL, 'small business loan', 'LOAN');

INSERT INTO `PRODUCT_TYPE` (`PRODUCT_TYPE_CD`, `NAME`) VALUES ('ACCOUNT', 'Customer Accounts'),
('INSURANCE', 'Insurance Offerings'),
('LOAN', 'Individual and Business Loans');





