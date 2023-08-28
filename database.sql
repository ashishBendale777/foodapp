
CREATE TABLE `Customers` (
  `CustID` INT PRIMARY KEY AUTO_INCREMENT,
  `FullName` varchar(10) NOT NULL,
  `MobileNo` varchar(10),
  `Address` text,
  `City` varchar(10),
  `Password` varchar(8) 
);


CREATE TABLE `Dishes` (
  `DishID` INT PRIMARY KEY AUTO_INCREMENT,
  `DishName` varchar(10) NOT NULL,
  `DishType` varchar(10),
  `DishCategory` text,
  `DishPrice` FLOAT,
  `DishImage` text 
);

CREATE TABLE `Orders` (
  `OrderID` INT PRIMARY KEY AUTO_INCREMENT,
  `OrderDate` date DEFAULT CURRENT_DATE(),
  `DishName` varchar(20),
  `DishType` varchar(10),
  `DishCategory` text,
  `DishPrice` FLOAT,
  `DishQty` INT 
);