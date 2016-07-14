1. using MVC framework
2. make model extends the real RDMS to create another protection layer (here we use mysql)
3. proper redirect calls to better protect website
    a. Redirect all calls to the public folder via .htaccess file in root folder
    b. Redirect all calls to index.php via .htaccess file in public folder
    c. index.php defines constants and including files to further protect the website
4. on login page, I included validation to show that we need to sanitize data before posting them to the page
5. on Search page, we mimic users choosing "Artist" option and return 3 matching results 
6. on Individual album page, we mimic a retrieval of data from our database
6. in the interest of time, I didn't create other pages yet because the logic is similar to Individual album page -
	- for additional pages, we would select corresponding data from the database
7. demonstrated how we would interact with the database in the code
8. wrote code to match likely database schema because we have a good idea of what it should look like
