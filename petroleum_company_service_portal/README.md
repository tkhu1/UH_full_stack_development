# COSC4353-20300 Spring 2021 - Project for Group 22

**Group Members:** Adithya Nair, Shatavari Shinde, Tyler Hu. 


**PROJECT DOCUMENTATION**

A partner of your petroleum company has requested to build a software application that will predict the rate of the fuel cost for clients based on the following criteria:
 - Client Location (in-state or out-of-state)
 - Client history (existing customer with previous purchase or new)
 - Gallons requested
 - Company profit margin (%)

Software must include following components:
 - Login (Allow Client to register if not a client yet)
 - Client Registration (Initially only username and Password)
 - Client Profile Management (after client registers they should login first to complete profile)
 - Fuel Quote Form with Pricing module (Once user enters all required information pricing module calculates the rate provides total cost)
 - Fuel Quote History

We decided that the Agile development method with releases of small increments of software is the best choice for developing this system. This approach allows quick deliveries for the features that are most necessary and allows more room for client feedback. The client requirements and priorities can change at any time therefore with agile development, it is flexible and easily adapts to change. 

The group concluded that the presentation layer would consist of a simple welcome page and login area, then progress to a GUI consisting of a simple menu with options after successful login. The business layer would consist of two components, one to handle the fuel quotes and one to handle the client information. The service layer would consist of two components, one to handle backend modeling of the fuel quotes and one to handle client services. The data access layer will consist of the DBMS to handle communication with the database, and the data layer contains the data tables and dependencies.

 - Project members are all using Microsoft Visual Studio Code as the IDE as it allows us to easily download extensions to help code and test our functionality.

 - Our front end is mostly coded in HTML and PHP with CSS to format the pages as those languages are what our group members are most familiar with. 

 - For our back end, we are using XAMPP as our PHP development environment. This give us the Apache server functionality to host our project on localhost and visualize project development in real-time. All the back end files are written in php and located in the program_code/back_end folder in our git repository.

 - For code coverage reports, we are using the PHPunit / Xdebug test suites installed via the Composer dependency manager. These coverage tools allow us to write unit tests for our back end and then automatically generate the coverage results as html reports. XML is used to manage the PHPunit settings in the phpunit.xml file. Command console line to generate HTML code coverage reports for the back end is: 
   - **./vendor/bin/phpunit --coverage-html code_coverage_reports tests**

   - Detailed reports can be found in our git repository in the code_coverage_reports folder. 


**FILE STRUCTURE**

1. **Code_coverage_reports** folder contains HTML reports of the backend code coverage.

2. The project source code is located in the **program_code** folder.

   - **Back_end** folder contains all the backend files.

   - **Fuel_Form** folder contains the fuel quote form. This is currently filled in with hardcoded examples.

   - **Fuel_History** folder contains the fuel quote history table. This is currently filled in with hardcoded examples.

   - **Main** folder contains the main logical flow pages such as login, register, index. This is currently filled in with hardcoded examples.

   - **User_Info** folder contains the client profile management form. This is currently filled in with hardcoded examples.

3. **Tests** folder contains the PHPunit tests for the backend.

4. **Vendor** contains all of the Composer installed third-party packages.
