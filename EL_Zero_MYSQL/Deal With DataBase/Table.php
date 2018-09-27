            |===========================|
            |======= MySql Table  ======|
            |===========================|

    CREATE TABLE IF NOT EXISTS table_name (
        id int(11),
        name varchar(255)
    );
    
    // Show info about table
    describe table_name;
    show columns from table_name;
    show fields from table_name;
    
    // Show info about all tables
    show table status;  
    
    //Show table create Code
    SHOW CREATE TABLE students;

    //Remove Table
    DROP TABLE IF EXISTS table_name;

    //Rename one Table
    RENAME TABLE old_name TO new_name ;
    
    //Rename multiple Table
    RENAME TABLE old_name TO new_name , old_name1 TO new_name1 ;

    //change table Engine type
    ALTER TABLE table_name ENGINE = MYISAM ;

    #####################
    #### TABLE ALTER ####
    #####################
    
    // by default add it at the end of table
    ALTER TABLE students ADD new_column datatype ;
    
    //add it at first
    ALTER TABLE students ADD new_column datatype FIRST;

    //Chose where to add it
    ALTER TABLE students ADD new_column datatype AFTER column_name;

    //Drop column from table
    ALTER TABLE students DROP column;

    //change column place in table
    ALTER TABLE students CHANGE column_name same_column_name datatype AFTER column_name;

    //change column name and datatype
    ALTER TABLE students CHANGE column_name new_column_name new_datatype;

    //change column  datatype
    ALTER TABLE students MODIFY column_name new_datatype;
    
    //DROP COLUMN
    ALTER TABLE students DROP column_name;


    ##############################
    #### TABLE Advanced ALTER ####
    ##############################
    
    //another way to Rename Table name
    ALTER TABLE old_name RENAME new_name;

    //Modify column datatype and change another column name
    ALTER TABLE students MODIFY column_name new_datatype , CHANGE old_name new_name new_datatype;

    //Change all column charset
    ALTER TABLE students CONVERT TO CHARACTER SET utf8;
