-- !What Can SQL do?
/* 
    SQL can create new databases: In fact, creating a database is often one of the first steps in building a new application or system that requires a data storage solution.

    SQL can execute queries against a database: A query is a statement or a set of statements that retrieves data from one or more tables or views in a database.

    SQL can retrieve data from a database:SQL can retrieve data from a database by querying it with the SELECT statement. Developers can use various clauses to filter, sort, and group data according to specific criteria.

    SQL can create new tables in a database: SQL can create new tables in a database by using the CREATE TABLE statement. Developers can specify the columns and data types for each column.

    SQL can insert records in a database:SQL can insert new data into a database by using the INSERT statement. Developers can specify which columns to insert data into and provide the values for those columns.

    SQL can update records in a database:SQL can update existing data in a database by using the UPDATE statement. Developers can specify which rows to update and which columns to modify.

    SQL can delete records from a database:SQL can delete data from a database by using the DELETE statement. Developers can specify which rows to delete based on specific criteria.

    SQL can create stored procedures in a database:  A stored procedure is a precompiled SQL program that is stored in a database and can be called by other programs or scripts. Stored procedures are often used to encapsulate complex logic or repetitive tasks, making them easier to manage and execute.

    SQL can create views in a database: SQL can create views in a database by using the CREATE VIEW statement. Views are virtual tables that display selected data from one or more tables.

    SQL can set permissions on tables, procedures, and views: SQL can set permissions on tables, procedures, views, and other database objects to control who can access and modify them. Permissions are an important aspect of database security and help prevent unauthorized access or modifications to sensitive data.

    Managing transactions: SQL can manage transactions in a database by using the BEGIN TRANSACTION, COMMIT, and ROLLBACK statements. Transactions allow developers to group multiple SQL statements into a single atomic unit of work.

 */

--! What Can MySQL do
/* 
MySQL is a powerful relational database management system that can perform a wide range of functions. Here are some of the things MySQL can do:

    Store and manage data: MySQL allows you to create databases and tables to store and manage data efficiently. It supports various data types such as numeric, string, date/time, and binary data.

    Retrieve data: MySQL provides SQL (Structured Query Language) to retrieve data from the database. You can use SELECT statements to retrieve data based on specific conditions and sort the data in ascending or descending order.

    Manipulate data: MySQL enables you to insert, update, and delete data from tables. You can also create views to manipulate data from multiple tables simultaneously.

    Create and manage user accounts: MySQL supports user authentication and authorization. You can create user accounts, grant and revoke privileges to control user access to the database.

    Replicate data: MySQL can replicate data from one database to another, allowing you to create redundant copies of your data for backup or scale-out purposes.

    Optimize performance: MySQL provides tools such as query optimizer, index optimization, and caching to optimize the performance of your database.

    Scale horizontally: MySQL can scale horizontally by adding more servers to distribute the load across multiple machines.

Overall, MySQL is a robust and versatile database management system that can handle a wide range of applications, from small-scale web applications to large-scale enterprise applications.
 */



/* 
!Difference between SQL & MySQL
SQL and MySQL are related but different terms. SQL is a language used to interact with relational databases, while MySQL is an open-source relational database management system that uses SQL as its primary language.

Here are some key differences between SQL and MySQL:

    Language vs. Software: SQL is a language used to manage relational databases, while MySQL is a specific software package that implements SQL and provides a way to manage relational databases.

    Proprietary vs. Open-Source: SQL is a standard language and is implemented differently by various database vendors such as Oracle, Microsoft, and IBM, while MySQL is an open-source software package developed and maintained by the MySQL Community and Oracle Corporation.

    Compatibility: SQL is compatible with various database management systems, while MySQL is compatible with only MySQL-compatible systems.

    Features: SQL is a language that supports various features such as data manipulation, querying, and database schema design, while MySQL is a software package that provides additional features such as user management, security, replication, and scalability.

    Performance: SQL is a language, so its performance depends on the specific database management system that implements it. MySQL, on the other hand, is optimized for high performance, reliability, and scalability.
 */