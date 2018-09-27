


                ##############################
                ####       Foreign Key    ####
                ##############################

    How to make Realtion between two table :
    
 // Set Primary Key
    CREATE TABLE clients (
    id int(11) NOT NULL,
    username varchar(255),
    email varchar(255),
    PRIMARY KEY(id)     <====
   
    
);

 //Set Foreign key 
    CREATE TABLE orders (
    order_id int(11) NOT NULL,
    price varchar(255),
    client_id int(11) NOT NULL,
    PRIMARY KEY(order_id),
    FOREIGN KEY(client_id) REFERENCES clients(id)   <====
    
);


////////////////// Alter ///////////////////////////////
ALTER TABLE orders
ADD CONSTRAINT ordering
FOREIGN KEY(client_id) REFERENCES clients(id)
ON UPDATE CASCADE
ON DELETE CASCADE;


/////////// Simple Join /////////////

SELECT * FROM orders
JOIN clients ON        <====
clients.id = orders.client_id
WHERE clients.id = 1;


//////////////////UPDATE & DELETE //////////////////////////////////

PARENT    ==> PRIMARY TABLE
CHILD     ==> FOREIGM TABLE
