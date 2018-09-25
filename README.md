# Project Orion

This repository is home to the theme and plugin collection that powers The Fatherhood website. This project is currently in development. Use the guide below to get started contributing to the project.

## Joining the Website Squad

You must be a member of The Fatherhood Wing to join the website development team. You'll need to have joined the Discord channels to talk to wing leadership about contributing to the website project. Once added to the team, you'll need to setup your account on GitHub for access to the project.

- Create an account on github.com
- Send your account name to the website team
- Once invited, [accept the invitation to the GitHub team](https://github.com/thefatherhood)
- Download the [GitHub Desktop app](https://desktop.github.com) for your platform

## Using GitHub

This project makes use of GitHub for repository management. GitHub is a website service for hosting "git" repositories. What is a repository you ask? It's a place to store stuff. A "git" respository, is a system for recording the history of changes to files stored within, also known as a version control system (VCS). There are other version control systems (SVN, Mercurial, etc), but GitHub makes using git more accessible to people not used to using repositories for development. You can use command-line git if you want by downloading, installing and configuring Git on your computer. If you're new to Git and GitHub, it is recommended that you use the GitHub Desktop client app if you want to work with the files locally on your computer.

The thing about Git, is that the repository lives in multiple places at the same time. GitHub will have a copy, you'll download a complete copy and other developers working with it locally will have their own copy. GitHub then hosts the "canonical" copy of the repository that is used as "truth" for all of the developers on the team.

### The Basics of GitHub Development

Most of the time you'll change existing files. The basic process is to clone a copy of the the repository to your local computer, hack on some code, then commit that code to your local repository. At this point the changes you've made only exist in your copy of the repository. You'll then need to sync those changes back to the GitHub hosted repository to update the new state of the files for everyone. Other developers will need to periodically refresh their copy's and sync those changes on their systems. How all of this happens is different depending on whether you are using the command-line or GitHub app, or going directly through the GitHub Desktop app, but the general idea is the same.

#### Commit Changes

When you make changes to files, or add files, those changes exist on your local copy. Git monitors the project directories for changes and if there are differences, in order to save those changes to the repository you'll need to commit them. Once you commit them the changes then need pushed back to the origin repository hosted on GitHub.
