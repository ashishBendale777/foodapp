
CREATE TABLE `Customers` (
  `CustID` INT PRIMARY KEY AUTO_INCREMENT,
  `FullName` varchar(30) NOT NULL,
  `MobileNo` varchar(30),
  `Address` text,
  `City` varchar(30),
  `Password` varchar(10) 
);


CREATE TABLE `Dishes` (
  `DishID` INT PRIMARY KEY AUTO_INCREMENT,
  `DishName` varchar(30) NOT NULL,
  `DishType` varchar(30),
  `DishCategory` text,
  `DishPrice` FLOAT,
  `DishImage` text 
);

CREATE TABLE `Orders` (
  `OrderID` INT PRIMARY KEY AUTO_INCREMENT,
  `OrderDate` date DEFAULT CURRENT_DATE(),
  `DishName` varchar(30),
  `DishType` varchar(30),
  `DishCategory` text,
  `DishPrice` FLOAT,
  `DishQty` INT 
);

-- add new COLUMN in orders table
ALTER TABLE orders ADD COLUMN CustID INT NOT NULL;
ALTER TABLE orders ADD COLUMN TotalAmount FLOAT NOT NULL;

-- add FOREIGN KEY constrainct in orders table
ALTER TABLE orders ADD FOREIGN KEY (CustId) REFERENCES customers(CustID);