users APIs:

usersController

1- api to display all women users if user is a man and vise versa  //DONE
2- api to add record to pictures table with pending 0 (waiting for admin approvale)  //  DONE
3- api to edit profile  // DONE
4- api to search and gender // DONE
5- api to add record to favorite table & check if the user is in both column from and to 
=> if yes (delete record and add to match table) + add record to notification table
=> if no add record + notify target user(to)  // DONE
6- api to send messages between matched users (from..to..message..) + pending set to 0 // DONE
7- api to display user infos and pics //DONE
8- api to get matched users //DONE

admin APIs:

adminsController

1- api to display all infos from pics table // DONE
2- api to approve uploading pic => change pending to 1 for specific pic id  // DONE
3- api to decline pic => delete record for specific pic id // DONE
4- api to approve uploading msgs => change pending to 1 for specific msg id + add record to notification table // DONE
5- api to decline msg => delete record for specific msg id // DONE


----------------------------------------

IMPORTANT FOR JWT:

composer require tymon/jwt-auth --ignore-platform-reqs
