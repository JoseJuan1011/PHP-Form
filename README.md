# PHP Form

PHP-Form it's a web app made for hotel room management, allowing you to do from CRUD operations to calculations based on mathematic functions.

It's an school project made back when I was in a superior Cycle called Multiplatform App Development ([DAM](https://medac.es/blogs/informatica/ser-programador-dam-o-daw#:~:text=¿Qué%20es%20DAM%3F,aplicaciones%20móviles%20o%20de%20escritorio.) in Spanish), which required me to build a
web app with Vanilla PHP that can do CRUD operations in an MySQL database in local
(in my case [xampp](https://www.apachefriends.org/es/index.html)).

## Index

- [PHP Form](#php-form)
  - [Index](#index)
  - [IMPORTANT DISCLAIMER](#important-disclaimer)
  - [What can you do with PHP-Form?](#what-can-you-do-with-php-form)
  - [Build the project](#build-the-project)
    - [Requirements and Build](#requirements-and-build)

## IMPORTANT DISCLAIMER

This project is not built for production, it was a project that I did several years ago, but I wanted to give it a little edge, and in a way, solve some issues that
appeared by the time I checked on the project again. Also, the purpose of this project is to show my knowledge, or expertise in PHP, even if it's not my first programming language.

Apart from that, it's important to take into account the native language of the web app, which it's **Spanish**, in case you wanted to check it.

## What can you do with PHP-Form?

The program will be functioning around the management of the table "habitaciones", which represents the different hotel rooms that are recorded in the database. So following this description, we can outline some features:

1. You can insert, modify, and eliminate any hotel rooms that are recorded in the database.
2. It will allow you to perform complex queries from stored procedures in the [Procedimientos](https://github.com/JoseJuan1011/PHP-Form/tree/main/Procedimientos) Page. Those procedures are the following:

    1. Showing all the hotel rooms from a selected hotel.
    2. Insertion of a hotel room, but with validation and checking if the hotel passed exists.
    3. The amount of hotel rooms that the hotel has, passed by parameter, and those who have a lower price per day than the one passed by parameter.
    4. Calculate the amount of money a person has spent in their stays on hotels.

## Build the project

If after the disclaimer you want to continue checking the project, here I have the easiest way of building this application; or at least how I have done it to have it on a local server with [xampp](https://www.apachefriends.org/es/index.html):

### Requirements and Build

- Having [xampp](https://www.apachefriends.org/es/index.html) installed in your computer/server in which you are going to deploy the project.
- Inside the xampp folder, locate the *htdocs* folder, because will be where we are going to put the project.
- If you want to debug the application, then you should have installed and prepared xDebug (here's a [tutorial](https://youtu.be/8ka_Efpl21Y?si=ZnzrXORD4zxkzxBQ) for PHP debugging in VsCode and xDebug installation).

One you have met the requirements, you only have to clone the repository, and put it inside the *htdocs* folder.

**PD:** Remember that the name that you give to the folder in *htdocs* will the url of entrance, for example if you call it *PHP-Form", then the url will start with "\/PHP-Form".
