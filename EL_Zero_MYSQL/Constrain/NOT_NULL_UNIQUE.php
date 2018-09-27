

             
                ##############################
                ####   NOT NULL,UNIQUE    ####
                ##############################
   
   // UNIQUE
   ALTER TABLE students ADD UNIQUE(column_name) ;  //No Duplicate
   LTER TABLE students DROP INDEX column_name ;    //Remove unique
   
   // NOT NULL
   ALTER TABLE students ADD new_column datatype NOT NULL;

    // Add NOT NULL & UNIQUE
    ALTER TABLE students ADD new_column datatype NOT NULL UNIQUE ;