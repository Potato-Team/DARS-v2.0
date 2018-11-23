
# Data Analysis and Representation Software - DARS

> By **Tomato Code**

## Contents

* Introduction
* Our Model
* File structure
* Suggestions

# Introduction

Welcome to the documentation of the Project assigned to Tomato Code by [IUB](http://www.iub.edu.bd/ 'Independent University, Bangladesh') in the course CSC401. The cause of this procurement is to plan, design and build a graphical report generation software for analyzing trends in admissions across specific private universities in *Bangladesh*. The system is called Data Analysis & Representation Software – DARS.

This section discusses the Scope as well as the Objectives of the system.

The main goal of implementing such a system is to automate the boring. In the existing system, there exists several human roles (e.g. Project Manager, Data Analyst etc.) that get the desired work done manually, i.e. not by automation. Therefore, the existing system takes significantly more time to get the required output compared to the newly proposed system. The new system accomplishes this by reducing the human roles of the system and making use of a computer sytem, that will do the work of organizing, storing and instantly querying the necessary information.

The main functions that are to be carried out by the DARS system are:

* Storage of useful data
* Securing the data by restricting access to the system
* Instantly allowing insert/read/update/delete operations from the database
* Generating dynamic Charts/Reports from the stored data using defined parameters

# Our Model

Since web development isn't the forte of our team yet, we are not going to use any popular *out of the box* frameworks. Instead, we are going to develop our own structure using native PHP which borrows heavily from the OOP or MVC (Model View Controller) Framework standards.

Our file structure ideas are from:

* [**Laravel**](https://laravel.com/docs/5.7/structure#the-resources-directory)
* [Codecourse from YT](https://www.youtube.com/watch?v=vK_NNEvC0uc&index=4&list=PLfdtiltiRHWF5Rhuk7k4UAU1_yLAZzhWc&)
* and several others

# File Structure

> This isn't by any means set in stone. We are going to make changes along the way wherever necessary.
*(feel free to leave suggestions)*

The **root** directory contains **x** main folders:

* **public**: Serves as the landing page for any users/requests to the system i.e. the *Front-End*.
* **classes**: Contains the heart of the system i.e. the main classes/models that handles requests, accesses the database and a lot more. Uses abstraction to make working with the system much simpler. These are the current classes within the system. *(subject to change)*
  * config
  * user
  * database
  * input helpers
  * validation
  * hash
  * cookie
  * redirect
  * session
  * token
* **resources**: Contains the resources that you don't always want on the client side e.g the views as well as the raw, un-compiled assets such as LESS/SASS, JavaScript etc.
* **core**: Contains an initialization file that we can include on each page. The *init.php* file:
  * starts sessions
  * sets up config files
  * auto-loads classes
  * includes required functions
* **functions**: Contains important function(s) that can be reused

# Suggestions

Most of the team is new to Web Development, so we expect that things won't always turn out the way we wanted. But we as a team, always appreciate the learning experience. Therefore, I hope we are able to cooperate, learn and develop a system that solves the problems that we set out to solve.

Any suggestions or improvements are most welcome.
