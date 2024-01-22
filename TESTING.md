# Types of testing
- Benchmark / Performance testing
- Coding standards 
- Accessibility
- Usability
- Peer review
- Submission Guidelines checklist

# Benchmarking or Performance Testing
Use Case: You want to see how the block or plugin manages heavy loads of accessing and performing on the database. 

### Connecting MySQL Bench to Docker
**via WordPress Core Slack**

*Q:* Does anyone know how to connect MySQL Bench to the running docker MySQL. I am able to connect to the running machine at the command line level; however, I want to connect to it using MySQL Bench. Thanks. 
https://wordpress.slack.com/archives/C02RQBWTW/p1705803630337989

*A:* Here's the steps I took:
If your local environment is running, run npm run env:stop
Copy docker-compose.yml to docker-compose.override.yml (don't worry, this file is ignored by the Git repo)
On line 74 of docker-compose.override.yml, change "3306" to "33061:3306" and save
Run npm run env:start
Open MySQL Workbench and add a new connection:
Connection Method: Standard (TCP/IP)
Hostname: 127.0.0.1
Port: 33061
Username: root
Password: password
Click "Test Connection" - It should be successful.
Let me know if this works for you too :slightly_smiling_face:

https://wordpress.slack.com/archives/C02RQBWTW/p1705804371697959?thread_ts=1705803630.337989&cid=C02RQBWTW

*NOTE:* This instructions are for using the `wp-env` package

# Coding Standards
[WordPress Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/)
[WPCS Github](https://github.com/WordPress/WordPress-Coding-Standards)


# Accessability
See Princeton's [Editoria11y](https://wordpress.org/plugins/editoria11y-accessibility-checker/) accessability checker plugin

# Peer Review
See [Peer Review page](./CODEREVIEW.md)

# Submission Guidelines checklist

## Linting PHP and WordPress Core Standards
Check out Ollie - by Mike McAllister's - to see an [example Composer file](https://github.com/OllieWP/ollie?tab=readme-ov-file#developer-notes) that can lint for WP standards.