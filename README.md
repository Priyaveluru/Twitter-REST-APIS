As a part of college assignment we have worked on Implementation of Twitter REST APIS using Karaf container framework

1.Deployment of the bundle (war file) in karaf framework:
The war feature can be installed in the karaf container using the below command.
- karaf@root()> feature:install war
This in turn will enable the Apache karaf WebContainer where the web application archive can be deployed by placing the archive in the deploy folder.

2.Running the Web Application in the karaf container:

The application can be launched in the browser by using the URL: http://localhost:port/project_name
A home page has been created where all the implemented Twitter API’s can be accessed using appropriate buttons. 
For example, “user_timeline” button fetches the data from user timeline.
Note: The user is required to enter his/her consumer_key and consumer_secret in the place-hoders provided in the php files.
