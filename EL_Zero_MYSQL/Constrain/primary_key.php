

                ##############################
                ####       Primary Key    ####
                ##############################


      //Add pimary key 
        CREATE TABLE IF NOT EXISTS table_name (
                id int(11) NOT NULL PRIMARY KEY,
                name varchar(255)
            );

             CREATE TABLE IF NOT EXISTS table_name (
                id int(11) NOT NULL,
                name varchar(255),
                PRIMARY KEY(id)
            );


            //Add primary key 

            ALTER TABLE name ADD PRIMARY KEY(column_name);


            //Drop primary key
            ALTER TABLE name DROP PRIMARY KEY;

///////////////////////////////////////////////////////////

            primary key  =>
               - NOT NULL
               - Only one in table

            UMIQUE       =>
                - Can be NULL
                - More than one in table
###################################################

  //Show Key name
  SHOW INDEXES FROM students;

  primary key index[or name] => Primary 
