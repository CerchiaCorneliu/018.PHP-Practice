CREATE TABLE accounts (
number INT, balance FLOAT, PRIMARY KEY(number)
) ENGINE InnoDB;
DESCRIBE accounts;

/* The process of separating your data into tables and creating primary keys is called normalization.

MySQL is called a relational database management system because its tables store not only data but the relationships among the data. There are three categories of relation‐
ships:
One-to-One
One-to-Many
Many-to-Many
*/
