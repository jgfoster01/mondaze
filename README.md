# mondaze
A quick-start boilerplate for interacting with Monday.com's API, specifically for dealing with webhooks.

# Details
This is intended to provide a quick-start codebase for webhook integrations in Monday.com.

Everything here is written in PHP, and you should be able to clone the repository, rename it as you see fit, drop in your API credentials, and start coding!

# Contributions
Anyone and everyone is welcome to offer thoughts, constructive criticism, and improvements for this project.

I do not consider myself a master at PHP. I'm a decent dev with a knack for figuring things out on-the-fly. That said, I fully expect for people like you to realize when I've done something in an inefficient way, and I welcome the opportunity to improve my own skills as well as this project.

I am completely open to others contributing to this code, so long as everything is well-commented and interactions remain civil.

# How to use mondaze

AT THIS STAGE THERE IS NOTHING USABLE. EVERYTHING IS STILL IN PROGRESS. THIS MESSAGE WILL BE REMOVED WHEN THIS IS A FUNCTIONAL TOOL.

To get started, clone this repository.

The mondaze.php file contains the main boilerplate needed to create a new Monday.com integration.

The code necessary to verify a new webhook integration is contained in an IF statement at the beginning of the code. If Monday has passed us a verification challenge, we return it automatically. If not verification challenge is provided, we proceed and wrap the remaining code for our integration in an ELSE statement.

In the future, I intend to flesh out this project with snippets of code/functions to more easily make queries and mutations with GraphQL. However at the moment, the primary objective is to create a plug-and-play codebase to get a new integration off the ground very quickly.
