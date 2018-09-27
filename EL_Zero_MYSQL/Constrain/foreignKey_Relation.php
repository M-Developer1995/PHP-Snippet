

                ##############################
                ####       Relation       ####
                ##############################

               [ 1 ] One To one 
                - one client in parent  has only one unique value in child
                - as example one client has only one unique visa card number
                

              [ 2 ] One To Many  or Many to one
               - one client in parent have many value in child not unique
               - as example one client have many comments 

            [ 3 ] Many To Many
               - many clients have many value 
               - need table in the middle to handle this Relation
                        //Handle it by this code 
                            CREATE TABLE shopMember(
                                client int not null,
                                shop int not null,

                                PRIMARY KEY(client, shop),

                                CONSTRAINT cons_clients
                                FOREIGN KEY(client) REFERENCES clients(id)
                                ON DELETE CASCADE
                                ON UPDATE CASCADE,

                                CONSTRAINT cons_shop
                                FOREIGN KEY(shop) REFERENCES shops(shop_id)
                                ON DELETE CASCADE
                                ON UPDATE CASCADE 
                                );

                    // Select client
                    SELECT * FROM clients JOIN shopmember
                    ON clients.id = shopmember.client
                    WHERE shopmember.shop = 1 


                    //select shop 
                    SELECT * FROM shops JOIN shopmember 
                    ON shops.shop_id = shopmember.shop
                    WHERE shopmember.client = 1;
