# Say my name

# Installation
```sh
# Clones the repository
$ git clone https://github.com/ernjs/say-my-name && cd say-my-name

# Create the autoloading (for dev, use composer install instead)
$ composer dump
```

# Usage
```
# php src/start.php
```

Say my name is a cli application, a funny questionary that tells what series you most fit based on your responses.
Created with the intent to test some functionalities of PHPUnit and Cli Possibilities in PHP.

![alt tag](https://raw.githubusercontent.com/ernandos/say-my-name/master/example.png)

# Example Structure
```
── src
│   ├── Core
│   │   ├── Entitie
│   │   │   └── Question
│   │   │       ├── AbstractQuestion.php
│   │   │       ├── Questions1.php
│   │   │       ├── Questions2.php
│   │   │       ├── Questions3.php
│   │   ├── Model
│   │   │   ├── Answer.php
│   │   │   └── Question.php
│   │   └── Repository
│   │       ├── Answer.php
│   │       └── Question.php
│   ├── Output
│   │   └── Cli
│   │       ├── Form.php
│   │       ├── Header.php
│   │       └── TraitConsole.php
│   └── start.php
```
